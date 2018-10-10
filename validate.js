function validateForm(){
	
	var x = document.forms["contact"]["email"].value;
	var y = document.forms["contact"]["comments"].value;
	
	if (x == "" ||y == ""){
		alert("Please fill out the required forms");
		return false;
	}
}