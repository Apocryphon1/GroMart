<!DOCTYPE html>
<html>

<head>
    <title>Online Grocery Shop</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="manageAccounts.js"></script>
    <?php include 'retrieveAccounts.php' ?>
</head>

<body>
    <div id="main_container">
        <div id="header">
            <div class="top_right">
                <div class="languages">
                    <div class="lang_text">Languages:</div>
                    <a href="#" class="lang"><img src="../images/en.gif" alt="" border="0" /></a> <a href="#" class="lang"><img src="../images/eg2.jpg" height="16.5px" width="22px" alt="" border="0" /></a>
                </div>
                <div> <a href="../images/logo%20(2).png"></a></div>
            </div>

        </div>
        <div class="main_content">
            <div id="menu_tab">
                <ul class="menu">
                    <li><a href="../index.html" class="nav"> Home </a></li>
                    <li class="divider"></li>
                    <li><a href="../Product/productList.html" class="nav">Products</a></li>
                    <li class="divider"></li>

                    <li><a href="#" class="nav">My account</a></li>
                    <li class="divider"></li>

                    <li><a href="../Order/MyOrders.html" class="nav">My Orders </a></li>
                    <li class="divider"></li>
                    <li><a href="../Contact/contact.html" class="nav">Contact Us</a></li>
                    <li> <input type="text" name="newsletter" id="searchbox" value="" /></li>
                    <li> <img src="../images/searchicon.png" id="srch" height="20px" width="20px"></li>

                </ul>

            </div>

            <div class="left_content">
                <div class="title_box">Add Content</div>
            </div>

            <div class="center_content">
                <a class="round-button-MA pull-right">
                    <span class="material-icons" style="margin-top:7px">add</span>
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

        </div>
        <!-- end of main content -->

        <div class="footer">
            <div id="flip">click to show footer</div>
            <div id="panel">

                <div class="left_footer"> <img src="../images/logo%20(2).png" alt="" width="89" height="80" /> </div>
                <div class="center_footer"> All Rights Reserved 2008<br />

                    <img src="../images/payment.gif" alt="" height="25px">
                </div>

                <img height="150px" src="../images/popular-market.jpg">
            </div>


        </div>
    </div>
    <!-- end of main_container -->
</body>

</html>