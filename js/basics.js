function myFunction() {

    var b = document.getElementById("bar");

    b.classList.toggle("change");
}


function signup(){
	document.getElementById("login").style.display='none';
	document.getElementById("signup").style.display='block';
}
function login(){
	document.getElementById("signup").style.display='none';
	document.getElementById("login").style.display='block';
}