

function AddCart(title) {
  getElementsById("addw").innerHTML = " " + title + " " + price;

}


function removeCartItem(event) {
  var buttonClicked = event.target
  buttonClicked.parentElement.parentElement.remove()
  updateCartTotal()
}



$(document).ready(function () {
  $("#flip").click(function () {
    $("#panel").slideDown("slow");
  });
});





function removee(y) {

  var div = document.createElement("P");

  if (y == 1) {
    document.getElementById("re1").remove();

  }

  else if (y == 2) {

    document.getElementById("re2").remove();

  }
  else if (y == 3) {

    document.getElementById("re3").remove();

  }
  else if (y == 4) {

    document.getElementById("re4").remove();

  }

  else {


  }

}




function Result(str) {
  if (str.length==0) {
    document.getElementById("lsearch").innerHTML="";
 
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("lsearch").innerHTML=this.responseText;
      document.getElementById("lsearch").style.border="5px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","lsearch.php?q="+str,true);
  xmlhttp.send();
}




