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
        <?php include '../includes/header.php' ?>
        <?php include '../includes/nav.php' ?>
        <div id="main_content">

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

        <?php include '../includes/footer.php' ?>
    </div>
    <!-- end of main_container -->
</body>

</html>