allUsers = [];

function addUser(username, email, password, role) {
    var user = {
        id: null,
        username: null,
        email: null,
        password: null,
        role: null
    };
    var id = allUsers.length;

    user.id = ++id;
    user.username = username;
    user.email = email;
    user.password = password;
    user.role = role;

    allUsers.push(user);
}
addUser("adhamahmed", "jacobthornton@email.com", "4sd672", "Admin");
addUser("mohsenmohsen", "mohsenmoshen@email.com", "988756", "User");
addUser("mohsenmohsen", "mohsenmoshen@email.com", "988756", "User");
addUser("mohsenmohsen", "mohsenmoshen@email.com", "988756", "User");

function addRow(user) {
    $(document).ready(function () {
        var usersTable = document.getElementById('usersTable');

        var rowCnt = usersTable.rows.length;
        var tr = usersTable.insertRow(rowCnt);
        tr = usersTable.insertRow(rowCnt);

        counter = 0
        for (const property in user) {
            var td;
            td = document.createElement('td');
            td = tr.insertCell(counter);
            td.innerHTML = user[property]
            counter++;
        }
    });
}
function buildTable(arr) {
    arr.forEach(child => {
        addRow(child);
    });
}

buildTable(allUsers);



