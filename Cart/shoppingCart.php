<!DOCTYPE html>
<html>

<head>
    <title>Online Grocery Shop</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="shoppingCart.js"></script>
    <?php include 'shoppingCartData.php' ?>
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
        <div id="main_content">
            <div id="menu_tab">
                <ul class="menu">
                    <li><a href="../index.html" class="nav"> Home </a></li>
                    <li class="divider"></li>
                    <li><a href="../Product/productList.html" class="nav">Products</a></li>
                    <li class="divider"></li>

                    <li><a href="../Login/MyAccount.html" class="nav">My account</a></li>
                    <li class="divider"></li>

                    <li><a href="../Order/myOrders.html" class="nav">My Orders </a></li>
                    <li class="divider"></li>
                    <li><a href="../Contact/contact.html" class="nav">Contact Us</a></li>
                    <li> <input type="text" name="newsletter" id="searchbox" value="" /></li>
                    <li> <img src="../images/searchicon.png" id="srch" height="20px" width="20px"></li>

                </ul>

            </div>

            <div class="center_content" style="min-height: 600px;">
                <h1 style="margin-left: 150px;"><strong>Shopping Cart</strong> </h1>
                <div id="shoppingCart" class="shopping_cart">
                    <!-- Dynamic Building -->
                </div>
            </div>

            <div class="checkoutTab">
                <div class="checkout">
                    <h1 style="margin-left:7px"><strong>Total: </strong></h1>
                    <span style="margin-left:7px;font-size:25px"><strong id="totalPrice">1250</strong><small> EGP</small> </span>
                </div>
                    <button class="checkOutButton" onclick="checkOutClick();">Proceed to checkout</button>
            </div>
            <div id="includedContent"></div>

        </div>
        <!-- end of main content -->

        <?php include '/gromart/includes/footer.php' ?>
    </div>
    <!-- end of main_container -->
</body>

</html>