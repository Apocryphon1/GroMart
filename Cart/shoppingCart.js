cartItems = [];

function getCookie(name) {
    const value = ";" + document.cookie;
    const parts = value.split(";" + name + "=");
    if (parts.length == 2) {
        const vlu = parts.pop().split(";").shift();
        const decode_vlu = decodeURIComponent(vlu);
        return decode_vlu;
    }
    else
        return '';
}

var oReq = new XMLHttpRequest(); // New request object
oReq.onload = function () {

    obj = JSON.parse(getCookie("cartItems"));
    cartItems = cartItems.concat(obj);
    buildTable(cartItems)
};
oReq.open("get", "shoppingCartData.php", true);
//Don't block the rest of the execution.
//Don't wait until the request finishes to continue.
oReq.send();

function addItem(item, counter) {
    $(document).ready(function () {
        $('#shoppingCart').append('<div id="itemSC' + counter + '" class="item_SC"></div>');
        var itemSC = document.getElementById('itemSC' + counter);


        var deleteForm = document.createElement('form');
        deleteForm.action = "updateShoppingCart.php";
        deleteForm.method = "POST";
        itemSC.appendChild(deleteForm);

        var deleteBtn = document.createElement('button');
        deleteBtn.className = "buttons";
        deleteBtn.name = "delete";
        deleteBtn.value = "delete";

        var span = document.createElement('span');
        span.className = "material-icons delete-btn";
        span.innerHTML = "close";

        var idInput = document.createElement('input');
        idInput.value = parseInt(item.id);
        idInput.name = "id";
        idInput.style.display = "none";
        deleteForm.appendChild(idInput);

        deleteBtn.appendChild(span);
        deleteForm.appendChild(deleteBtn);
        itemSC.appendChild(deleteForm);

        var image = document.createElement('div');
        image.className = "image_SC";
        var imageSrc = document.createElement('img');
        imageSrc.className = "image_SC_Size";
        imageSrc.src = "../images/" + item.imageName;

        image.appendChild(imageSrc);
        itemSC.appendChild(image);

        var description = document.createElement('div');
        description.className = "description";
        span = document.createElement('span');
        span.innerHTML = item.name;
        description.appendChild(span);
        span = document.createElement('span');
        span.innerHTML = item.manufacture;
        description.appendChild(span);

        itemSC.appendChild(description);

        var quantity = document.createElement('div');
        quantity.className = "quantity";

        var quantityForm = document.createElement('form');
        quantityForm.action = "updateShoppingCart.php";
        quantityForm.method = "POST";
        quantity.appendChild(quantityForm)

        var button = document.createElement('button');
        button.className = "icon-btn plus-btn";
        button.value = "increment";
        button.name = "update";
        quantityForm.appendChild(button);

        span = document.createElement('span');
        span.className = "material-icons md-18 md-dark";
        span.innerHTML = "add";
        button.appendChild(span);

        var input = document.createElement('input');
        input.value = parseInt(item.quantity);
        input.name = "quantity";
        quantityForm.appendChild(input);

        input = document.createElement('input');
        input.value = parseInt(item.id);
        input.name = "id";
        input.style.display = "none";
        quantityForm.appendChild(input);

        var button = document.createElement('button');
        button.className = "icon-btn minus-bt";
        button.value = "decrement";
        button.name = "update";
        quantityForm.appendChild(button);

        span = document.createElement('span');
        span.className = "material-icons md-18 md-dark";
        span.innerHTML = "remove";
        button.appendChild(span);

        itemSC.appendChild(quantity);

        var price = document.createElement('price');
        price.className = "total-price";
        price.innerHTML = (parseInt(item.quantity) * parseInt(item.price)) + " EGP";

        itemSC.appendChild(price);
    });
};

function buildTable(arr) {
    counter = 0;
    totalPrice = 0;
    arr.forEach(child => {
        addItem(child, counter);
        totalPrice += (child.price * child.quantity);
        counter++;
    });
    var priceID = document.getElementById('totalPrice');
    priceID.innerHTML = totalPrice;
};

function checkOutClick() {

    document.getElementById('checkoutModal').style.display = 'block';
    setTimeout(() => { window.location.href = "../index.html"; }, 2000);
}

$(document).ready(function () {
    $("#flip").click(function () {
        $("#panel").slideDown("slow");
    });

    $("#includedContent").load("checkoutModal.html");

});