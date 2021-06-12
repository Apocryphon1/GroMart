
$(document).ready(function () {
    var submitIcon = $('.searchbox-icon');
    var inputBox = $('.searchbox-input');
    var searchBox = $('.searchbox');
    var isOpen = false;
    submitIcon.click(function () {
        if (isOpen == false) {
            searchBox.addClass('searchbox-open');
            inputBox.focus();
            isOpen = true;
        } else {
            searchBox.removeClass('searchbox-open');
            inputBox.focusout();
            isOpen = false;
        }
    });
    submitIcon.mouseup(function () {
        return false;
    });
    searchBox.mouseup(function () {
        return false;
    });
    $(document).mouseup(function () {
        if (isOpen == true) {
            $('.searchbox-icon').css('display', 'block');
            submitIcon.click();
        }
    });
    $(document).on("keypress", "input", function(e){
        if(e.which == 13){
            var inputVal = $(this).val();
            //if (inputVal == %pepsi%)
        }
    });
});
function buttonUp() {
    var inputVal = $('.searchbox-input').val();
    inputVal = $.trim(inputVal).length;
    if (inputVal !== 0) {
        $('.searchbox-icon').css('display', 'none');
    } else {
        $('.searchbox-input').val('');
        $('.searchbox-icon').css('display', 'block');
    }
}


$(document).ready(function () {
    $("#flip").click(function () {
        $("#panel").slideDown("slow");
    });
});
function indexCart(id, name, price, quantity, manufacture ,image) {
    var item = new Item(id, name, price, quantity, manufacture ,image);
    //document.cookie('id= '+item.id+' name= '+ item.name+' price= '+item.price+' quantity= '+item.quantity+' manufacture= ' + item.manufacture+' image= '+item.image);
    document.getElementById("shc").innerHTML += "<br>  " + item.name;
}

function Item(id,name,price,quantity,manufacture,image) {
    this.id = id;
    this.name = name;
    this.price = price;
    this.quantity = quantity;
    this.manufacture = manufacture;
    this.image = image;
}


allUsers = [];

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

function printCookie(){
    var list = getCookie(Products);
    document.write(list);
}
var modal = document.getElementById("modalP");
var btn = document.getElementById("ModalBtn");
var span = document.getElementsByClassName("closeProd")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
