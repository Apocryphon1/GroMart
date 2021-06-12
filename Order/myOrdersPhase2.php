
<!DOCTYPE html>
<html>

<head>
  <title>Online Grocery Shop</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../style.css" />

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  

</head>

<body class="MyOrders">


  <div id="main_container">
    <div id='header'>
      <div class="top_right">
        <div> <a href="../images/logo%20(2).png"></a></div>
      </div>

    </div>
    <div id="main_content">
      <div id="menu_tab">
        <ul class="menu">
          <li><a href="#" class="nav"> Home </a></li>
          <li class="divider"></li>
          <li><a href="#" class="nav">Products</a></li>
          <li class="divider"></li>

          <li><a href="#" class="nav">My account</a></li>
          <li class="divider"></li>

          <li><a href="#" class="nav">My Orders </a></li>
          <li class="divider"></li>
          <li><a href="contact.html" class="nav">Contact Us</a></li>
          <li> <input type="text" name="newsletter" id="searchbox" value="" /></li>
          <li> <img src="../images/searchicon.png" id="srch" height="20px" width="20px"></li>

        </ul>

      </div>

      <div class="crumb_navigation"> Navigation: <span class="current">Home</span> </div>
      <div class="left_content">
        <div class="title_box">Categories</div>
        <ul class="left_menu">
          <li class="odd"><a href="#">Diary & Eggs</a></li>
          <li class="even"><a href="#">Fruit & Vegetables</a></li>
          <li class="odd"><a href="#">Bakery</a></li>
          <li class="even"><a href="#">Nuts & Seeds</a></li>
          <li class="odd"><a href="#">Chips & Snacks</a></li>
          <li class="even"><a href="#">Candy</a></li>
          <li class="odd"><a href="#">Beverages</a></li>
          <li class="even"><a href="#">Household Care </a></li>
          <li class="odd"><a href="#">Meat & Fish</a></li>
          <li class="even"><a href="#">Herbs & Spices</a></li>

        </ul>

        <div class="title_box">Newsletter</div>
        <div class="border_box">
          <input type="text" name="newsletter" class="newsletter_input" value="your email" />
          <a href="#" class="join">subscribe</a>
        </div>
        <div class="banner_adds"> </div>
      </div>

      <div class="center_content">


        

          <div id="OrderHeaders"></div>

          <form method = "Post">

            <p>Select Order id from the list to display the order details.
            <select name = "OrdersList">

              
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
            </p>
            <input type = "submit" name="submit" value = "Show order details"><!--Submits to the form handler which is the database in specified in the action
            part in the form-->

          </form>

          
          
          <?php

         
          

          if (array_key_exists(('submit'), $_POST)){

            dealWithDatabase();

          };

          function dealWithDatabase(){

$OrdDatabase = mysqli_connect("localhost", "root", "", "gomarthassan");

if (!($OrdDatabase))
die("Could not connect to database</body></html>");

if ($OrdDatabase)

$select =$_POST['OrdersList'];



$query = "SELECT" . "*" . " FROM order_details". " ". "WHERE"." " . "OrderID =". $select;

//$result = mysqli_query($OrdDatabase, $query);

$result = $OrdDatabase->query($query);

print ("<table id= 't01'>");
print("<th>");


print("<td> Item name</td>");
print("<td> Price ID</td>");
print("<td> Quantity ID</td>");
print("<td> Item ID</td>");

print("</th>");


    while($row = mysqli_fetch_row($result)){//for each row

        print("<tr>");
            foreach($row as $key=>$value)//key for each attribute
            print("<td>$value</td>");
            print("</tr>");
    }
print("</table>");
mysqli_close($OrdDatabase);


  }?>
 </div>
          

          

          
        
      


      <div class="right_content">

        <div class="shopping_cart">
          <div class="title_box">Shopping cart</div>
          <div class="cart_details"> 3 items <br />
            <span class="border_cart"></span> Total: <span class="price">350egp</span>
          </div>
          <div class="cart_icon"><a href="#"><img src="../images/shoppingcart.png" alt="" width="35" height="35"
                border="0" /></a></div>
        </div>

      </div>

    </div>
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

</body>

</html>