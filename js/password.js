
function validate(){
var pass = document.forms["myForm"]["password"].value;
var cpass = document.forms["myForm"]["cpass"].value;

if(cpass !== pass){
	alert("Password did not match, Enter Password again.");
	pass = "";
	cpass = "";
	return false;
}
}