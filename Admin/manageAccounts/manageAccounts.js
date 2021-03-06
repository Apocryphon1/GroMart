allUsers = [];

function getCookie(name) {
    const value = ";" + document.cookie;
    const parts = value.split(";" + name + "=");
    if (parts.length == 2) {
        const vlu = parts.pop().split(";").shift();
        const decode_vlu = decodeURIComponent(vlu);
        return decode_vlu;
    }
    else
        return '';
}

var oReq = new XMLHttpRequest(); // New request object
oReq.onload = function () {

    obj = JSON.parse(getCookie("AllUsers"));
    allUsers = allUsers.concat(obj);
    addAttributes(allUsers);
};
oReq.open("get", "retrieveAccounts.php", true);
//Don't block the rest of the execution.
//Don't wait until the request finishes to continue.
oReq.send();

function addAttributes(array) {
    buildTable(array);

}

function addRow(user) {
    $(document).ready(function () {
        var usersTable = document.getElementById('usersTable');

        var rowCnt = usersTable.rows.length;
        var tr = usersTable.insertRow(rowCnt);

        counter = 0
        for (const property in user) {
            var td;
            td = document.createElement('td');
            td = tr.insertCell(counter);
            td.innerHTML = user[property]
            counter++;
        }

        tr.onclick = function (event) {
            buildModal(user.ID);
            document.getElementById('id01').style.display = 'block';
        };
    });
}

function modalAdd() {
    buildModal();
    document.getElementById('id01').style.display = 'block';
};


function buildTable(arr) {
    arr.forEach(child => {
        addRow(child);
    });

    $(document).ready(function () {
        $('#usersTable').after('<div id="pagination" class="pagination"></div>');
        var rowsShown = 8;
        var rowsTotal = $('#usersTable tbody tr').length;
        var numPages = rowsTotal / rowsShown;

        for (i = 0; i < numPages; i++) {
            var pageNum = i + 1;
            $('#pagination').append('<a href="#" rel="' + i + '">' + pageNum + '</a> ');
        }
        $('#usersTable tbody tr').hide();
        $('#usersTable tbody tr').slice(0, rowsShown).show();
        $('#pagination a:first').addClass('active');
        $('#pagination a').bind('click', function () {

            $('#pagination a').removeClass('active');
            $(this).addClass('active');
            var currPage = $(this).attr('rel');
            var startItem = currPage * rowsShown;
            var endItem = startItem + rowsShown;
            $('#usersTable tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).
                css('display', 'table-row').animate({ opacity: 1 }, 300);
        });
    });


};

function buildModal(id) {
    modalID = id;
    if (modalID != null) {

        document.getElementById("modalTitle").innerHTML = "Edit User";
        document.getElementById("modalDeleteBtn").style.display = "inline";
        document.getElementById("modalUpdateBtn").style.display = "inline";
        document.getElementById("modalAddBtn").style.display = "none";

        allUsers.forEach(function (user) {
            if (user.ID == modalID) {
                document.getElementById("idMA").value = user.ID;
                document.getElementById("usernameMA").value = user.username;
                document.getElementById("passwordMA").value = user.password;
                document.getElementById("emailMA").value = user.email;
                document.getElementById("roleMA").value = user.role;
            }
        });
    } else {
        document.getElementById("modalTitle").innerHTML = "Add User";
        document.getElementById("modalDeleteBtn").style.display = "none";
        document.getElementById("modalUpdateBtn").style.display = "none";
        document.getElementById("modalAddBtn").style.display = "inline";

        document.getElementById("idMA").value = "";
        document.getElementById("usernameMA").value = "";
        document.getElementById("passwordMA").value = "";
        document.getElementById("emailMA").value = "";
        document.getElementById("roleMA").value = "user";
    }

}



$(function () {
    $("#includedContent").load("editModal.html");
});



