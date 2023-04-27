function loadData(name){
	if(name=="btn1"){
		document.getElementById("para").innerHTML = "The history of iphone began with a request from Apple Inc.";
		document.getElementById("imagel").src = "images/iphone Xs.png";
	}
	else if (name=="btn2"){
		document.getElementById("para").innerHTML = "Nokia Corporation is a Finnish multinational telecommunication";
		document.getElementById("imagel").src = "images/iphone Xs Max.jpg";
	}
	else if (name=="btn3"){
		document.getElementById("para").innerHTML = "Samsung was founded as a grocery tranding store on March 1, 1993";
		document.getElementById("imagel").src = "images/iphone 8s plus.jpg";
	}
	else if (name=="btn4"){
		document.getElementById("para").innerHTML = "Guandong OPPO Mobile Telecommunication Crop., Ltd";
		document.getElementById("imagel").src = "images/iphone SE.jpg";
	}
	else{
		alert("Invalid!!!");
	}
}

function priceForInLoop(){
	var phone = [];
    phone["Iphone Xs"] = "Rs 123,456/=";
	phone["Iphone Xs Max"] = "Rs 20000/=";
	phone["Iphone 8s plus"] = "Rs 40000/=";
	phone["Iphhone SE"] = "Rs 80000/=";
	
	var list="List of Average Price (using for Loop) <br/>";
	for(var item in phone){
		list += item + " : " + phone[item] + "<br/>";
	}
    //document.getElementById("imagel").src = "imagees/list.jpg";
	document.getElementById("para").innerHTML = list;
}

function priceHigher() {
	var phone = [];
	phone["Iphone Xs"] = 1500;
	phone["Iphone Xs Max"] = 500;
	phone["Iphone 8s plus"] = 1000;
	phone["Iphhone SE"] = 750;
	
	var Higher ="List of high cost mobile phones <br/>";
	for(var item in phone){
		if(phone[item] >1000){
            Higher += item + " : " + phone[item] + "<br/>";
		}
	}
	document.getElementById("para").innerHTML = Higher; 
}

function priceLower() {
	var phone = [];
	phone["Iphone Xs"] = 1500;
	phone["Iphone Xs Max"] = 500;
	phone["Iphone 8s plus"] = 1000;
	phone["Iphhone SE"] = 750;
	
	var Lower ="List of low cost mobile phones <br/>";
	for(var item in phone){
		if(phone[item] <1000){
			Lower += item + " : " + phone[item] + "<br/>";
		}
	}
	document.getElementById("para").innerHTML = Lower;
}
