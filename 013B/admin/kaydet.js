// JavaScript Document
function noCache(
uri 

){

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

function uyeekle() {
var kuladi = document.girdiekle.kuladi.value;
var doktoradi = document.girdiekle.doktoradi.value;
var kulsifre = document.girdiekle.kulsifre.value;
var kulkay = document.girdiekle.kulkay.value;

    http.open('get', noCache('uyekaydet.php?kuladi='+kuladi+'&doktoradi='+doktoradi+'&kulsifre='+kulsifre+'&kulkay='+kulkay));
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}

function cevapFonksiyonu() {
    if(http.readyState == 4){
        document.getElementById('drdiv').innerHTML = http.responseText;
 }
}