function validacija(form)
{	
if(form.ime.value=="" || form.pitanje.value==""){
	alert ("Polja Ime i Poruka moraju biti popunjena!");
return false;
}
else if(form.email.value=="" && form.phone.value==""){
	alert ("Da bi smo mogli da vas kontaktiramo morate uneti e-mail ili telefon!");
return false;
}
else
return true;
}
function testTXT(atb) {
	var re = new RegExp(/^[a-zA-Z\s]+$/);
	var xPos=atb.offsetLeft;
	var yPos=atb.offsetTop;
	if(!re.exec(atb.value)){
	atb.value = atb.value.substring(0, (atb.value.length)-1);                   
	document.getElementById("greska").innerHTML = 'Možete uneti samo slova u ovo polje!!!';
	document.getElementById("greska").style.display = "block";
	document.getElementById("greska").style.left = parseInt(xPos)+'px';
	document.getElementById("greska").style.top = parseInt(yPos)+'px';	
	clearERR();
	}
	}
function testEM(em) {
	var re = new RegExp(/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/);
	var xPos=em.offsetLeft;
	var yPos=em.offsetTop;
	if(!re.exec(em.value)){
	document.getElementById("greska").innerHTML = 'Pogrešan unos e-maila. Proverite!!!';
	document.getElementById("greska").style.display = "block";
	document.getElementById("greska").style.left = parseInt(xPos)+'px';
	document.getElementById("greska").style.top = parseInt(yPos)+'px';
	document.getElementById("email").focus();
	clearERR();	
	}
	}
function testPN(pn) {
	var re = new RegExp(/^[0-9\-\/\(\)\+]+$/);
	var xPos=pn.offsetLeft;
	var yPos=pn.offsetTop;
	if(!re.exec(pn.value)){
	pn.value = pn.value.substring(0, (pn.value.length)-1);                   
	document.getElementById("greska").innerHTML = 'Možete uneti samo brojeve, +, (, ), / i - u ovo polje!!!';
	document.getElementById("greska").style.display = "block";
	document.getElementById("greska").style.left = parseInt(xPos)+'px';
	document.getElementById("greska").style.top = parseInt(yPos)+'px';	
	clearERR();
	}
}
function clearERR() {
	setTimeout(function(){
	document.getElementById("greska").style.display = "none";
	},2000);
}