<!DOCTYPE html>
<html>

<head>
  <title>Online Grocery Shop</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style.css" />

  <script src="myAccount.js"></script>
</head>

<body>
  <div id="main_container">
  <?php include '../includes/header.php' ?>
  <?php include '../includes/nav.php' ?>

    <div id="main_content">

      <div class="center_content">
        <div id="wrapper">
          <div id="wrappercard">
            <form>
              <div class="center_title_bar">Account Info </div>
              <br>
              <br>
              </p>
              <br>
              <br>
              <div class="product_img"><a href="#"><img src="../images/account.png" alt="" border="2" height="180px" width="170px" /></a></div>

              <div class="prod_price">
                <span id="loglog" class="price">
                  <p style="font-size:180%;">
                    Hello:
                    <?php
                    include("session.php");
                    $name = $_SESSION['login_user'];
                    echo $name;
                    ?>
                  </p>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php include '../includes/footer.php' ?>

  </div>
</body>

</html>