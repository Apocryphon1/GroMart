
$(document).ready(function () {
    $("#flip").click(function () {
        $("#panel").slideDown("slow");
    });
});



$(document).ready(function () {
    $(".prod_buy").click(function () {
        $(".anime").animate({
            down: '50px',
            opacity: '1',
            height: '160px',
            width: '160px'
        });
    });
});



function indexCart(y) {
    if (y == 1) {
        document.getElementById("add1").addEventListener("click", AddCart("Pepsi", "5 EGP"));
        document.getElementById("add1").disabled = true;
    }

    else if (y == 2) {
        document.getElementById("add2").addEventListener("click", AddCart("Sugar", "7 EGP"));
        document.getElementById("add2").disabled = true;
    }
    else if (y == 3) {
        document.getElementById("add3").addEventListener("click", AddCart("1Kg tomato", "14 EGP"));
        document.getElementById("add3").disabled = true;
    }
    else if (y == 4) {
        document.getElementById("add4").addEventListener("click", AddCart("Kitchen Towel", "13 EGP"));
        document.getElementById("add4").disabled = true;
    }
    else if (y == 5) {
        document.getElementById("add5").addEventListener("click", AddCart("Eggs Carton", "25 EGP"));
        document.getElementById("add5").disabled = true;
    }
    else if (y == 6) {
        document.getElementById("add6").addEventListener("click", AddCart("Toast", "18 EGP"));
        document.getElementById("add6").disabled = true;
    }
    else {

    }

}




function AddCart(name, price) {
    var item = new Item(name, price);
    var div = document.createElement("P");

    document.getElementById("node1").appendChild(div);
    div.id = "newdiv";
    div.innerHTML = name + " " + price + "<br/>";




    var div2 = document.createElement("A");

    document.getElementById("node1").appendChild(div2);
    div2.id = "newdiv2";
    div2.innerHTML = "remove" + "<br/>" + "<br/>";
    div2.onclick = function remove1() {
        document.getElementById("newdiv").remove();
        document.getElementById("newdiv2").remove();
    }
}

function Item(name, price) {
    this.name = name;
    this.price = price;
}

$(document).ready(function () {
    $("#flip").click(function () {
        $("#panel").slideDown("slow");
    });
});





function showName(str){

    if (str.length == 0){ //exit function if nothing has been typed in the textbox

        document.getElementById("txtName").innerHTML=""; //clear previous results

        return;

    }

    if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari

        xmlhttp=new XMLHttpRequest();

    } else {// code for IE6, IE5

        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");

    }

    xmlhttp.onreadystatechange=function() {

        if (xmlhttp.readyState == 4 && xmlhttp.status == 200){

            document.getElementById("txtName").innerHTML=xmlhttp.responseText;

        }

    }

    xmlhttp.open("GET","frameworks.php?name="+str,true);

    xmlhttp.send();

}
