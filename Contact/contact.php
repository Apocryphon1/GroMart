<!DOCTYPE html>
<html>

<head>
  <title>Online Grocery Shop</title>
  <meta charset="UTF-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../style.css" />
  <script src="contact.js"></script>


</head>

<body>
  <div id="main_container">
    <?php include '../includes/header.php' ?>
    <?php include '../includes/nav.php' ?>
    <div id="main_content">
      <div class="center_content">
        <div class="center_title_bar">Contact Us</div>
        <div class="prod_box_big">
          <div class="center_prod_box_big">
            <div class="contact_form">
              <div class="form_row">
                <label class="contact"><strong>Username:</strong></label>
                <input id="i1" type="text" class="contact_input" />
              </div>

              <div class="form_row">
                <label class="contact"><strong>Password:</strong></label>
                <input id="i2" type="text" class="contact_input" />
              </div>

              <div class="form_row">
                <label class="contact"><strong>Message:</strong></label>
                <textarea id="i3" class="contact_textarea"></textarea>
                <div class="form_row"> <button onclick="validate()">send</button> </div>
              </div>

              <label id="msg"></label>
            </div>
          </div>
        </div>
      </div>

      <div class="current_navigation"> Navigation: <span class="current">Contact Us</span> </div>
      <div id="poll">
        <h3>Do you like our service so far?</h3>
        <form action="pollvote.php" method="post">
          Yes: <input type="radio" name="vote" value="1" onclick="getVote(this.value)"><br>
          No : <input type="radio" name="vote" value="0" onclick="getVote(this.value)">

        </form>
      </div>



    </div>

    <?php include '../includes/footer.php' ?>


  </div>

</body>

</html>