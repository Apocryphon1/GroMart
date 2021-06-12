<!DOCTYPE html>
<html>

<head>
  <title>Online Grocery Shop</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="/gromart/style.css" />
  <script src="content.js"></script>
  <?php include 'getProduct.php' ?>

</head>

<body>

  <div id="main_container">



    <div id="header">
      <div class="top_right">
        <div class="languages">
          <div class="lang_text">Languages:</div>
          <a href="#" class="lang"><img src="/gromart//images/en.gif" alt="" border="0" /></a> <a href="#" class="lang"><img src="/gromart//images/eg2.jpg" height="16.5px" width="22px" alt="" border="0" /></a>
        </div>
        <div> <a href="/gromart//images/logo%20(2).png"></a></div>
      </div>

    </div>

    <div id="main_content">
      <div id="menu_tab">
        <ul class="menu">


          <li><a href="/gromart//Login/MyAccount.php" class="nav">My account</a></li>
          <li class="divider"></li>

          <li><a href="../manageAccounts/manageAccounts.php" class="nav"> Manage Accounts </a></li>
          <li class="divider"></li>
          <li><a href="Content.html" class="nav">Edit Content</a></li>


        </ul>


      </div>
    </div>

    <div id="container">
      <div class="centerCont">


        <br />

        <div id="main">


          <div id="content">

            <div class="box">

              <div class="box-head">
                <h2 class="left">Current Products</h2>
                <form>
                  <input type="text" size="30" onkeyup="showResult(this.value)">
                  <div id="lsearch"></div>
                </form>
              </div>

              <div class="table">
                <table id="tble" width="100%" cellspacing="0" cellpadding="0">
                  <thead>
                    <tr>
                      <th></th>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>description</th>
                      <th>manufacturer</th>
                    </tr>
                  </thead>
                  <tbody id="myTable">

                  </tbody>
                </table>

                <br>
                <br>

                <br>



              </div>

            </div>

            <form action="AddProduct.php" method="POST">
              <div class="form_row">
                <label class="contact"><strong>ID:</strong></label>
                <input name="id" id="ii2" type="text" class="contact_input" />
              </div>

              <div class="form_row">
                <label class="contact"><strong>NAME:</strong></label>
                <input name="name" id="ii22" type="text" class="contact_input" />
              </div>
              <div class="form_row">
                <label class="contact"><strong>PRICE:</strong></label>
                <input name="price" id="ii222" type="text" class="contact_input" />
              </div>
              <div class="form_row">
                <label class="contact"><strong>DESCRIPTION:</strong></label>
                <input name="desc" id="ii2222" type="text" class="contact_input" />
              </div>
              <div class="form_row">
                <label class="contact"><strong>MANUFACTURER:</strong></label>
                <input name="manufacturer" id="ii2222" type="text" class="contact_input" />
              </div>

              <input type="submit" name="insert" value="ADD" />


            </form>
            <div class="cl">&nbsp;</div>
          </div>

        </div>
      </div>
      <?php include '/gromart//includes/footer.php'?>
</body>

</html>