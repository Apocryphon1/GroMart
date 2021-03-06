<!DOCTYPE html>
<html>

<head>
  <title>Online Grocery Shop</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style.css" />
  <link href="productPage.js" />
</head>

<body>
  <div id="main_container">
    <div id="header">
      <div class="top_right">
        <div class="languages">
          <div class="lang_text">Languages:</div>
          <a href="#" class="lang"><img src="../images/en.gif" alt="" border="0" /></a> <a href="#" class="lang"><img
              src="../images/eg2.jpg" height="16.5px" width="22px" alt="" border="0" /></a>
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
          <li> <form class="searchbox"> 
            <input type="search" placeholder="Search..." name="search" class="searchbox-input" onkeyup="buttonUp();" required>
            <input type="submit" class="searchbox-submit" value="">
            <span class="searchbox-icon"><img src="../images/searchicon.png"height="20px" width="20px"></span>
        </form></li>

        </ul>

      </div>

      <div class="current_navigation"> Navigation: <span class="current">Home</span> </div>





      <div class="center_content_PD">
        <h2><?php echo $myProduct[1]->name?></h2>
        <div class="price_container_PD">
          <div class="product_img">
            <a href="#">
              <center><img src="../images/sugar.jpg" alt="" border="0" height="300px" width="200px" /></center>
            </a>
          </div>

          <div class="price_container_PD">
            <span class="prod_price">
              <span class="price">
                <h1><?php echo $myProduct[1]->price?><span class="currency_text_PD"> EGP</span></h1>
              </span>
            </span>
            <span class="vat_text_PD">
              <h4>All prices include VAT</h4>
            </span>
            <strong>Description: </strong>
            <?php echo $myProduct[1]->desc?>
          </div>
        </div>
      </div>



    </div>


    <?php include '/gromart/includes/footer.php' ?>


  </div>

</body>

</html>