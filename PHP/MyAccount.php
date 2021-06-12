<!DOCTYPE html>

<head>
  <title>Online Grocery Shop</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style.css" />

  <script src="myAccount.js"></script>
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

          <li><a href="#" class="nav">My account</a></li>
          <li class="divider"></li>

          <li><a href="../Order/myOrders.html" class="nav">My Orders </a></li>
          <li class="divider"></li>
          <li><a href="../Contact/contact.html" class="nav">Contact Us</a></li>
          <li> <input type="text" name="newsletter" id="searchbox" value="" /></li>
          <li> <img src="../images/searchicon.png" id="srch" height="20px" width="20px"></li>

        </ul>

      </div>

      <div class="center_content">










        <div id="wrapper">

        
          <form action="login.php" method="POST">
            <div id="wrappercard">

        
              <form >   
              <div class="center_title_bar">Account Info   </div>
              <br>
              <br>
         
 
                </p>
               
    
                <br>
                <br>
             
              <div class="product_img"><a href="#"><img src="../images/account.png" alt="" border="2" height="180px"
                    width="170px" /></a></div>
   
               <div class="prod_price"> <span id = "loglog"class="price">  
                      <p style="font-size:180%;"> Hello:  <?php 
                         include("session.php");
                      $name = $_SESSION['login_user'];
                  
                      echo $name;
                    
                      ?> </p> </span></div>
            </div>
            <p>
              <label  class="uname"> Your username </label>
              <input id="uname" name="username" required="required" type="text" placeholder="" />
            </p>
            <p>
              <label  class="youpasswd"> Your password </label>
              <input id="pass" name="password" required="required" type="password" placeholder="" />
            </p>
            <p class="keeplogin">
              <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
              <label for="loginkeeping">Keep me logged in</label>
              <button id="loginbutton" onclick="getLogin()">Login </button>
            </p>

            <br>
            <br>

            <p class="change_link">
              Not a member yet ?
              <button id="flip">Join us</button>
            </p>
           
          </form>
        </div>




      </div>




    </div>

    <div class="footer">

      <div id="panel">
       
        <form action="join.php" method="POST">

          <p>
            <label class="uname"> Your email </label>
            <input id="username2" name="u1" required="required" type="text" placeholder="" />
          </p>
          <p>
            <label class="uname"> Your username </label>
            <input id="username2" name="u2" required="required" type="text" placeholder="" />
          </p>
          <p>
            <label class="youpasswd"> Your password </label>
            <input id="password2" name="p1" required="required" type="password" placeholder="" />
          </p>
          <p>
            <label class="youpasswd"> Confirm Your password </label>
            <input id="passwordd" name="p2" required="required" type="password" placeholder="" />
          </p>

          <button id="loginbutton
          " onclick="validateJoin()"> Confirm </button>
          <br>
          <br>
          

        </form>

      </div>


    </div>


  </div>
</body>

</html>