<!DOCTYPE html>
<html>

<head>
  <title>Online Grocery Shop</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css" />
  <script src = "index.js"></script>


</head>

<body>


  <div id="main_container">
    <div id="header">
      <div class="top_right">
        <div class="languages">
          <div class="lang_text">Languages:</div>
          <a href="#" class="lang"><img src="images/en.gif" alt="" border="0" /></a> <a href="#" class="lang"><img
              src="images/eg2.jpg" height="16.5px" width="22px" alt="" border="0" /></a>
        </div>
        <div> <a href="images/logo%20(2).png"></a></div>
      </div>

    </div>

    <div id="main_content">
      <div id="menu_tab">
        <ul class="menu">
          <li><a href="index.html" class="nav"> Home </a></li>
          <li class="divider"></li>
          <li><a href="Product/ProductList.html" class="nav">Products</a></li>
          <li class="divider"></li>

          <li><a href="PHP/MyAccount.php" class="nav">My account</a></li>
          <li class="divider"></li>

          <li><a href="Order/myOrders.html" class="nav">My Orders </a></li>
          <li class="divider"></li>
          <li><a href="Contact/contact.html" class="nav">Contact Us</a></li>

          <form method="POST" action="index.php">

            <li> <input type="text" name="name" id="searchbox" value=""  /></li>
          <li> <img src="images/searchicon.png" id="srch" height="20px" width="20px"></li>

        </form>

      
        

        </ul>

      </div>

      <div class="current_navigation"> Navigation: <span class="current">Home</span> </div>
      <div class="left_content">
        <div class="title_box">Categories</div>
        <ul class="left_menu">
          <li class="odd"><a href="Product/productList1.html">Diary & Eggs</a></li>
          <li class="even"><a href="Product/productList2.html">Fruit & Vegetables</a></li>
          <li class="odd"><a href="Product/productList3.html">Bakery</a></li>
          <li class="even"><a href="Product/productList4.html">Nuts & Seeds</a></li>
          <li class="odd"><a href="Product/productList5.html">Chips & Snacks</a></li>
          <li class="even"><a href="Product/productList6.html">Candy</a></li>
          <li class="odd"><a href="Product/productList7.html">Beverages</a></li>
          <li class="even"><a href="Product/productList8.html">Household Care </a></li>
          <li class="odd"><a href="Product/productList9.html">Meat & Fish</a></li>
          <li class="even"><a href="Product/productList10.html">Herbs & Spices</a></li>
          <li class="odd"><a href="Product/#productList11.html">Skin & Oral Care</a></li>

        </ul>
        <div class="title_box">Special Offers</div>
        <div class="border_box">
          <div class="product_title"><a href="#">Garnier Micellar Water, 400ml</a></div>
          <div class="product_img"><a href="#"><img src="images/garn.jpg" alt="" border="0" height="100px"
                width="50px" /></a></div>
          <div class="prod_price"><span class="reduce">135EGP</span> <span class="price">104.69EGP</span></div>
        </div>
        <p> -----------------------------------------------</p>
        <div class="border_box">
          <div class="product_title"><a href="#">2 Kg Bananas</a></div>
          <div class="product_img"><a href="#"><img src="images/banana.jfif" alt="" border="0" height="100px"
                width="90px" /></a></div>
          <div class="prod_price"><span class="reduce">50EGP</span> <span class="price">37EGP</span></div>
        </div>

      </div>

      <div class="center_content">
        <div class="oferta"> <img src="images/kinder.png" width="365" height="143" border="0" class="oferta_img"
            alt="" />
          <div class="oferta_details">
            <div class="oferta_title">Kinder Bueno</div>
            <div class="oferta_text"> 12 EGP </div>
            <a href="#" class="prod_buyy"> details</a>
          </div>
        </div>
        <div class="center_title_bar">Latest Products</div>
        <div class="prod_box">
          <div class="center_prod_box">
            <div class="product_title"><a href="#">Pepsi Can</a></div>
            <div class="product_img"><a href="#"><img src="images/pepsi.png" height=70px width=40px alt=""
                  border="0" /></a></div>
            <div class="prod_price"> <span class="price">5 EGP</span></div>
          </div>
          <div class="prod_details_tab"> <button id="add1" onclick="indexCart(1)" class="prod_buy">Add to Cart</button>
            <button href="#" class="prod_details">Details</button> </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box" id="pr2">
            <div class="product_title"><a href="#">Sugar</a></div>
            <div class="product_img"><a href="#"><img src="images/sugar.jpg" height="70px" width="60px" alt=""
                  border="0" /></a></div>
            <div class="prod_price"> <span class="price">7 EGP</span></div>
          </div>
          <div class="prod_details_tab"> <button id="add2" onclick="indexCart(2)" class="prod_buy">Add to Cart</button>
            <button href="#" class="prod_details">Details</button> </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box" id="pr3">
            <div class="product_title"><a href="#">Tomato</a></div>
            <div class="product_img"><a href="#"><img src="images/tomato.jfif" height=70px width=50px alt=""
                  border="0" /></a></div>
            <div class="prod_price"> <span class="price">14 EGP</span></div>
          </div>
          <div class="prod_details_tab"> <button id="add3" onclick="indexCart(3)" class="prod_buy">Add to Cart</button>
            <button href="#" class="prod_details">Details</button> </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box" id="pr4">
            <div class="product_title"><a href="#">Kitchen Towel</a></div>
            <div class="product_img"><a href="#"><img src="images/towel.jpeg" height=70px width=50px alt=""
                  border="0" /></a></div>
            <div class="prod_price"> <span class="price">13 EGP</span></div>
          </div>
          <div class="prod_details_tab"> <button id="add4" onclick="indexCart(4)" class="prod_buy">Add to Cart</button>
            <button href="#" class="prod_details">Details</button> </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box" id="pr5">
            <div class="product_title"><a href="#">Eggs Carton</a></div>
            <div class="product_img"><a href="#"><img src="images/egg.jfif" height=70px width=50px alt=""
                  border="0" /></a></div>
            <div class="prod_price"><span class="price">25 EGP</span></div>
          </div>
          <div class="prod_details_tab"> <button id="add5" onclick="indexCart(5)" class="prod_buy">Add to Cart</button>
            <button href="#" class="prod_details">Details</button> </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box" id="pr6">
            <div class="product_title"><a href="#">Toast</a></div>
            <div class="product_img"><a href="#"><img src="images/bread.jfif" height=70px width=50px alt=""
                  border="0" /></a></div>
            <div class="prod_price"> <span class="price">18 EGP</span></div>
          </div>
          <div class="prod_details_tab"> <button id="add6" onclick="indexCart(6)" class="prod_buy">Add to Cart</button>
            <button href="#" class="prod_details">Details</button></div>
        </div>




      </div>

      <div class="right_content">

        <div class="anime">
          <a href="Cart/shoppingCart.html"> <img  src="images/shoppingcart.png" height="150px" width="150px"></a>

        </div>

		
        <div class="shopping-cart" id="shc">

          <div class="title1">
            Shopping Cart
          </div>


          <div class="item" id="node1">



          </div>


        </div>






      </div>

    </div>

    <?php include '/gromart//includes/footer.php'?>


  </div>

</body>

</html>