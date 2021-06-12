
$(document).ready(function () {
    $("#flip").click(function () {
        $("#panel").slideDown("slow");
    });
});


function validate() {

    if (document.getElementById("i1").value == "") {
        alert("Please provide your name!");

        return false;
    }

    if (document.getElementById("i2").value == "") {
        alert("Please provide your password!");

        return false;
    }
    if (document.getElementById("i2").value.length < 8) {
        alert("Password must be atleast 8 letters");

        return false;
    }

    if (document.getElementById("i3").value == "") {
        alert("Please provide your message!");

        return false;
    }


    window.alert("message sent!");
}

      function getVote(int) {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
          if (this.readyState==4 && this.status==200) {
            document.getElementById("poll").innerHTML=this.responseText;
          }
        }
        xmlhttp.open("GET","pollvote.php?vote="+int,true);
        xmlhttp.send();
      }
   