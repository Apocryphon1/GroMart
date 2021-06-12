<!DOCTYPE html>
<html>

<head>
  <title>Online Grocery Shop</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style.css" />
  <script src="productList.js"></script>
  <?php include 'retrieveProducts.php' ?>
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
          <li>
            <form class="searchbox">
              <input type="search" placeholder="Search..." name="search" class="searchbox-input" onkeyup="buttonUp();" required>
              <input type="submit" class="searchbox-submit" value="">
              <span class="searchbox-icon"><img src="../images/searchicon.png" height="20px" width="20px"></span>
            </form>
          </li>

        </ul>

      </div>

      <div class="current_navigation"> Navigation: <span class="current">Home</span> </div>
      <div class="left_content">
        <div class="title_box">Categories</div>
        <ul class="left_menu">
          <li class="odd"><a href="productList1.html">Diary & Eggs</a></li>
          <li class="even"><a href="productList2.html">Fruit & Vegetables</a></li>
          <li class="odd"><a href="productList3.html">Bakery</a></li>
          <li class="even"><a href="productList4.html">Nuts & Seeds</a></li>
          <li class="odd"><a href="productList5.html">Chips & Snacks</a></li>
          <li class="even"><a href="productList6.html">Candy</a></li>
          <li class="odd"><a href="productList7.html">Beverages</a></li>
          <li class="even"><a href="productList8.html">Household Care </a></li>
          <li class="odd"><a href="productList9.html">Meat & Fish</a></li>
          <li class="even"><a href="productList10.html">Herbs & Spices</a></li>
          <li class="odd"><a href="#productList11.html">Skin & Oral Care</a></li>

        </ul>
        <div class="title_box">Special Offers</div>
        <div class="border_box">
          <div class="product_title"><a href="#">Garnier Micellar Water, 400ml</a></div>
          <div class="product_img"><a href="#"><img src="../images/garn.jpg" alt="" border="0" height="100px" width="50px" /></a></div>
          <div class="prod_price"><span class="reduce">135EGP</span> <span class="price">104.69EGP</span></div>
        </div>
        <p> -----------------------------------------------</p>
        <div class="border_box">
          <div class="product_title"><a href="#">2 Kg Bananas</a></div>
          <div class="product_img"><a href="#"><img src="../images/banana.jfif" alt="" border="0" height="100px" width="90px" /></a></div>
          <div class="prod_price"><span class="reduce">50EGP</span> <span class="price">37EGP</span></div>
        </div>

      </div>

      <div class="center_content">
        <div class="center_title_bar">Latest Products</div>
        <div class="prod_box">
          <div class="center_prod_box">
            <div class="product_title"><a href="#"><?php echo $myProduct[0]->name; ?></a></div>
            <div class="product_img"><a href="#"><img src=<?php echo $myProduct[0]->img; ?> height=70px width=40px alt="" border="0" /></a></div>
            <div class="prod_price"> <span class="price"><?php echo $myProduct[0]->price . ' EGP'; ?></span></div>
          </div>
          <div class="prod_details_tab"> <button id="add" onclick="indexCart('Pepsi Can' ,5 )" class="prod_buy">Add to
              Cart</button>
            <button id="ModalBtn" class="prod_details">Details</button>
          </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box" id="pr2">
            <div class="product_title"><a href="#"><?php echo $myProduct[1]->name; ?></a></div>
            <div class="product_img"><a href="#"><img src="../images/sugar.jpg" height="70px" width="60px" alt="" border="0" /></a></div>
            <div class="prod_price"> <span class="price"><?php echo $myProduct[1]->price . ' EGP' ?></span></div>
          </div>
          <div class="prod_details_tab"> <button id="add" onclick="indexCart(1, 'Sugar' , 7, ,1, 'Ahla' , '../images/sugar.jpg',)" class="prod_buy">Add to
              Cart</button> <button onclick="document.location='ProductPage(1).html'" class="prod_details">Details</button> </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box" id="pr3">
            <div class="product_title"><a href="#"><?php echo $myProduct[2]->name ?></a></div>
            <div class="product_img"><a href="#"><img src=<?php echo $myProduct[2]->img; ?> height=70px width=50px alt="" border="0" /></a></div>
            <div class="prod_price"> <span class="price"><?php echo $myProduct[2]->price . ' EGP' ?></span></div>
          </div>
          <div class="prod_details_tab"> <button id="add" onclick="indexCart('Tomato' , 14)" class="prod_buy">Add to
              Cart</button> <button onclick="document.location='ProductPage(2).html'" class="prod_details">Details</button> </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box" id="pr4">
            <div class="product_title"><a href="#"><?php echo $myProduct[3]->name ?></a></div>
            <div class="product_img"><a href="#"><img src=<?php echo $myProduct[3]->img ?> height=70px width=50px alt="" border="0" /></a></div>
            <div class="prod_price"> <span class="price"><?php echo $myProduct[3]->price . ' EGP' ?></span></div>
          </div>
          <div class="prod_details_tab"> <button id="add" onclick="indexCart('Kitchen Towel' , 13)" class="prod_buy">Add
              to Cart</button> <button onclick="document.location='ProductPage(3).html'" class="prod_details">Details</button> </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box" id="pr5">
            <div class="product_title"><a href="#"><?php echo $myProduct[4]->name ?></a></div>
            <div class="product_img"><a href="#"><img src=<?php echo $myProduct[4]->img ?> height=70px width=50px alt="" border="0" /></a></div>
            <div class="prod_price"><span class="price"><?php echo $myProduct[4]->price . ' EGP' ?></span></div>
          </div>
          <div class="prod_details_tab"> <button id="add" onclick="indexCart('Eggs Carton', 25)" class="prod_buy">Add to
              Cart</button> <button onclick="document.location='ProductPage(4).html'" class="prod_details">Details</button> </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box" id="pr6">
            <div class="product_title"><a href="#"><?php echo $myProduct[5]->name ?></a></div>
            <div class="product_img"><a href="#"><img src=<?php echo $myProduct[5]->img ?> height=70px width=50px alt="" border="0" /></a></div>
            <div class="prod_price"> <span class="price"><?php echo $myProduct[5]->price . ' EGP' ?></span></div>
          </div>
          <div class="prod_details_tab"> <button id="add" onclick="indexCart('Toast' , 18)" class="prod_buy">Add to
              Cart</button> <button onclick="document.location='ProductPage(5).html'" class="prod_details">Details</button></div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box">
            <div class="product_title"><a href="#"><?php echo $myProduct[6]->name ?></a></div>
            <div class="product_img"><a href="#"><img src=<?php echo $myProduct[6]->img ?> height=70px width=40px alt="" border="0" /></a></div>
            <div class="prod_price"> <span class="price"><?php echo $myProduct[6]->price . ' EGP' ?></span></div>
          </div>
          <div class="prod_details_tab"> <button id="add" onclick="indexCart('Haribo Bears' ,5 )" class="prod_buy">Add to
              Cart</button> <button onclick="document.location='ProductPage(6).html'" class="prod_details">Details</button> </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box">
            <div class="product_title"><a href="#"><?php echo $myProduct[7]->name ?></a></div>
            <div class="product_img"><a href="#"><img src=<?php echo $myProduct[7]->img ?> height=70px width=40px alt="" border="0" /></a></div>
            <div class="prod_price"> <span class="price"><?php echo $myProduct[7]->price . ' EGP' ?></span></div>
          </div>
          <div class="prod_details_tab"> <button id="add" onclick="indexCart('Beef Jerky' ,5 )" class="prod_buy">Add to
              Cart</button> <button onclick="document.location='ProductPage(7).html'" class="prod_details">Details</button> </div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box">
            <div class="product_title"><a href="#"><?php echo $myProduct[8]->name ?></a></div>
            <div class="product_img"><a href="#"><img src=<?php echo $myProduct[8]->img ?> height=70px width=40px alt="" border="0" /></a></div>
            <div class="prod_price"><span class="reduce"><?php echo $myProduct[8]->price . ' EGP' ?></span> <span class="price"><?php echo $myProduct[8]->discount . ' EGP' ?></span></div>
          </div>
          <div class="prod_details_tab"> <button id="add" onclick="indexCart('Turmeric Powder' ,5 )" class="prod_buy">Add to
              Cart</button> <button onclick="document.location='ProductPage(8).html'" class="prod_details">Details</button></div>
        </div>
        <div class="prod_box">
          <div class="center_prod_box">
            <div class="product_title"><a href="#"><?php echo $myProduct[9]->name ?></a></div>
            <div class="product_img"><a href="#"><img src=<?php echo $myProduct[9]->img ?> height=70px width=40px alt="" border="0" /></a></div>
            <div class="prod_price"> <span class="price"><?php echo $myProduct[9]->price . ' EGP' ?></span></div>
          </div>
          <div class="prod_details_tab"> <button id="add" onclick="indexCart('Cashew Nuts' ,5 )" class="prod_buy">Add to
              Cart</button> <button onclick="document.location='ProductPage(9).html'" class="prod_details">Details</button> </div>
        </div>
      </div>

    </div>

    <div class="right_content">

      <div class="anime">
        <a href="../Cart/shoppingCart.html"> <img src="../images/shoppingcart.png" height="150px" width="150px"></a>

      </div>


      <div class="shopping-cart" id="shc">

        <div class="title1">
          Shopping Cart
        </div>


        <div class="item" id="node1">



        </div>


      </div>






    </div>

    <?php include '/gromart/includes/footer.php' ?>


  </div>

</body>

</html>