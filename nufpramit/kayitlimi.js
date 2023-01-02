// JavaScript Document
var KontrolOBJ;
var browser = navigator.appName;
if(browser == "Microsoft Internet Explorer"){
KontrolOBJ = new ActiveXObject("Microsoft.XMLHTTP");
}else{
KontrolOBJ = new XMLHttpRequest();
}

function Kontrol(){
if(document.getElementById('selectil').value.length== 0 || 
document.getElementById('selectil').value.indexOf("@" )==-1 || 
document.getElementById('selectil').value.indexOf("." )==-1 || 
document.getElementById('selectil').value.indexOf(" ")==0) {
alert("lütfen mail adresinizi kontrol edin");
} else {
var veri = 'selectil='+document.getElementById('selectil').value;
// burada asp yi kullanirsan kontroledici.asp olarak degistir
KontrolOBJ.open('GET', 'kontrol.php?'+veri, true);
KontrolOBJ.onreadystatechange = EpostaDurum;
KontrolOBJ.send(null);
}
}
function EpostaDurum(){
if(KontrolOBJ.readyState == 4){ 
var response = KontrolOBJ.responseText;
if(response.indexOf("uygun")==-1) {
document.getElementById('selectil').style.background= "#330000";
document.getElementById('selectil').style.color="#FFF FFF";
alert("Bu Mail Kullanilmaktadir");
} else {
alert('Tebrikler Bu Mail'i Kullanabilrisiniz');

}

}
}
