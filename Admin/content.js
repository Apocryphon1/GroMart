

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









