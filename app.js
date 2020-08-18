function smS(){
	var mgb=document.getElementById('msg-box').value;
	if(mgb.trim()==""){
		return false;
	}
	else {
		document.getElementById('sucess').style.display="block";
		document.getElementById('msg-box').style.opacity="0";
	}
}
function fix(){
	var gnew=document.getElementById('gnew').value;
	if(gnew.trim()=="" ||gnew=="@gmail.com"){
		return false;
	}
	else {
		document.getElementById('fixemail').style.display="block";
		document.getElementById('gnew').style.opacity="0";
		document.getElementById('get').style.opacity="0";
		
	}
}
function up() {
  document.getElementById("upar").style.display= "block";
}
	
function pur(){
		var epci=document.getElementById('epicid').value;
		var gname=document.getElementById('gname').value;
		var uname=document.getElementById('uname').value;
		var email=document.getElementById('email').value
		if(epci.trim()=="" || gname.trim()==""|| uname.trim()=="" ||email.trim()==""){
			return false;
		}
		else {
			document.getElementById('blur').style.filter="blur(10px)";
			document.getElementById('sure').style.display="block";
		}
}

function see(){
	document.getElementById('see').style.display="block";
	document.getElementById('seemain').style.display="none";
}
function see2(){
	document.getElementById('seeht').style.display="block";
	document.getElementById('seemain').style.display="none";
}function see3(){
	document.getElementById('seegli').style.display="block";
	document.getElementById('seemain').style.display="none";
}
function see4(){
	document.getElementById('seeemote').style.display="block";
	document.getElementById('seemain').style.display="none";
}