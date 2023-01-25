// JavaScript Document
function noCache(uri){
return uri.concat( 
/\?/.test(uri) ?
"&"
:
"?",
"noCache=",
(new Date).getTime(),
".",
Math.random()*1234567
);
};
function nesneolustur() {
    var nesne;
    var tarayici = navigator.appName;
    if(tarayici == "Microsoft Internet Explorer"){
        nesne = new ActiveXObject("Microsoft.XMLHTTP");
	nesne = new ActiveXObject("Msxml2.XMLHTTP");
    }else{
        nesne = new XMLHttpRequest();
    }
    return nesne;
}

 var http = nesneolustur();

function iletiyiekle() {
var tarih = document.bizeulasin.tarih.value;
var adsoyad = document.bizeulasin.adsoyad.value;
var telefon = document.bizeulasin.telefon.value;
var emailadresi = document.bizeulasin.emailadresi.value;
var dusunceniz = document.bizeulasin.dusunceniz.value;
 
    http.open('GET', 'BizeUlasinKayit.php?tarih='+tarih+'&adsoyad='+adsoyad+'&telefon='+telefon+'&emailadresi='+emailadresi+'&dusunceniz='+dusunceniz);
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}

function cevapFonksiyonu() {
    if(http.readyState == 4){
        document.getElementById('sonuciletiyaz').innerHTML = http.responseText;
 }
}