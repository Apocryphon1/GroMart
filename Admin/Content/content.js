productList = [];

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

  obj = JSON.parse(getCookie("productList"));
  productList = productList.concat(obj);
  buildTable(productList)
};
oReq.open("get", "getProduct.php", true);
//Don't block the rest of the execution.
//Don't wait until the request finishes to continue.
oReq.send();



function buildTable(arr) {
  arr.forEach(child => {
      addRow(child);
  });
};

function addRow(item) {
  $(document).ready(function () {
      var table = document.getElementById('tble');

      var rowCnt = table.rows.length;
      var tr = table.insertRow(rowCnt);

      counter = 0

      var td;
      td = document.createElement('td');
      td = tr.insertCell(counter);

      var deleteForm = document.createElement('form');
      deleteForm.action = "addProduct.php";
      deleteForm.method = "POST";
      td.appendChild(deleteForm);

      var deleteBtn = document.createElement('button');
      deleteBtn.name = "delete";
      deleteBtn.value = "delete";

      var span = document.createElement('span');
      span.innerHTML = "delete";

      var idInput = document.createElement('input');
      idInput.value = parseInt(item.id);
      idInput.name = "id";
      idInput.style.display = "none";
      deleteForm.appendChild(idInput);

      deleteBtn.appendChild(span);
      deleteForm.appendChild(deleteBtn);
      td.appendChild(deleteForm);

      counter ++;
      for (const property in item) {
          var td;
          td = document.createElement('td');
          td = tr.insertCell(counter);
          td.innerHTML = item[property]
          counter++;
      }
  });
}









