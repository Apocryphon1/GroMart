

function AddCart(title) {
  getElementsById("addw").innerHTML = " " +  title + " "  + price;
 
}
  
    
function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}


