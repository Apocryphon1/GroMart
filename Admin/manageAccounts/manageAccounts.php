<!DOCTYPE html>
<html>

<head>
    <title>Online Grocery Shop</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="manageAccounts.js"></script>
    <?php include 'retrieveAccounts.php' ?>
</head>

<body>
    <div id="main_container">
        <?php include '../../includes/header.php' ?>
        <?php include '../../includes/nav.php' ?>
        <div class="main_content">

            
            <div class="left_content">
                <div class="title_box">Add Content</div>
            </div>

            <div class="center_content">
                <a class="round-button-MA pull-right tooltip" onclick="modalAdd();">
                    <span class="material-icons" style="margin-top:7px">add</span>
                    <span class="tooltiptext">Add User</span>
                </a>
                <table id="usersTable" class="table-MA">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email Address</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="includedContent"></div>

        </div>
        <!-- end of main content -->
        <?php include '../../includes/footer.php' ?>
    </div>
    <!-- end of main_container -->

</body>

</html>