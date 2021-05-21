

function CreateOrder() {


	var headers = ["Item", "Price"];

	var items1 = [];
	var items2 = [];

	var prices1 = [];
	var prices2 = [];



	items1[0] = "Potatos";
	items1[1] = "Tomatos";
	items1[2] = "Ax-30";



	items2[0] = "Lays";
	items2[1] = "Pumpkins";
	items2[2] = "JellyCola";


	prices1[0] = "5$";
	prices1[1] = "2$";
	prices1[3] = "3$";

	prices2[0] = "3$";
	prices2[1] = "5$";
	prices2[2] = "2$";


	var txt = "";

	headers.forEach(header);

	document.getElementById("OrderHeaders").innerHTML = txt;

	function header(value, index, array) {

		txt = txt + value + " ";


	}

	var content1 = "";
	var content2 = "";

	/*document.getElementById("content").innerHTML = content;*/

	var i = 1;

	document.getElementById("Order1").innerHTML = "Order1";

	items1.forEach(function (item1) {



		content1 = content1 + item1 + "<br>";
		document.getElementById("itemNames1").innerHTML = content1;


	});

	content1 = "";
	innerIndex = 0;

	prices1.forEach(function (price) {



		content1 = content1 + price + "<br>";
		document.getElementById("prices1").innerHTML = content1;


	});




	document.getElementById("Order2").innerHTML = "Order2";

	items2.forEach(function (item) {



		content2 = content2 + item + "<br>";
		document.getElementById("itemNames2").innerHTML = content2;







	});

	content2 = "";

	prices2.forEach(function (price) {


		content2 = content2 + price + "<br>";
		document.getElementById("prices2").innerHTML = content2;



	});

}


function Order1() {


	var content1 = " ", content2 = " ";


	document.getElementById("titles1").innerHTML = "State: <br> Remaining Time:";
	document.getElementById("variables1").innerHTML = "Delivered";
	document.getElementById("variables1").innerHTML = document.getElementById("variables1").innerHTML + "<br>" + " Zero";




}


function Order2() {


	var content1 = " ", content2 = " ";


	document.getElementById("titles2").innerHTML = "State: <br> Remaining Time:";
	document.getElementById("variables2").innerHTML = "Getting delivered";
	document.getElementById("variables2").innerHTML = document.getElementById("variables2").innerHTML + "<br>" + "2hrs";

}


$(document).ready(function () {
	$("#flip").click(function () {
		$("#panel").slideDown("slow");
	});
});



