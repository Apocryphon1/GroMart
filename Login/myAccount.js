
$(document).ready(function () {
    $("#flip").click(function () {
        $("#panel").slideDown("slow");
    });
});


$(document).ready(function () {
    $("#myInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});


function validate() {

    if (document.getElementById("username").value == "") {
        alert("Please provide your name!");

        return false;
    }

    if (document.getElementById("password").value == "") {
        alert("Please provide your password!");

        return false;
    }
    if (document.getElementById("password").value.length < 8) {
        alert("Password must be atleast 8 letters");

        return false;
    }


    if (document.getElementById("username").value.includes("admin")) {

        window.alert("welcome admin!");
       
    }

 
}



function validateJoin() {

    if (document.getElementById("username2").value == "") {
        alert("Please provide your name!");

        return false;
    }

    if (document.getElementById("password2").value == "") {
        alert("Please provide your password!");

        return false;
    }
    if (document.getElementById("password2").value.length < 8) {
        alert("Password must be atleast 8 letters");

        return false;
    }

    if (document.getElementById("password2").value != document.getElementById("passwordd").value) {
        alert("Passwords dont match!");

        return false;
    }




    window.alert("successful Join!");
}
