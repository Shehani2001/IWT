
function validate(){

var x = document.getElementById("Adult").value;

if (isNaN(x) || x > 10) {
alert("Can only add 10 adults");
return false;
}

var y = document.getElementById("Child").value

if (isNaN(y) || y > 5) {
alert("Can only add 5 children");

return false;
}

var economy = document.getElementById("Economy");
 var business = document.getElementById("Business");

if (!economy.checked && !business.checked) {
alert("Please select a class");
return false;
}

return true;
}

function returnDate() {

var trip = document.getElementById("trip");
var returnDate = document.getElementById("return");
var lebal = document.getElementById("lable");

if (trip.value === "One way") {
returnDate.style.display = "none";
lable.style.display = "none";
}
else {
returnDate.style.display = "block";
lable.style.display = "block";
}
}