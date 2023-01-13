// JavaScript Document
function noCache(
uri){
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
function uyedegistir() {
var krselectilno = document.form8.krselectilno.value;
var kurumgirdeg = document.form8.kurumgirdeg.value;
var asmgir = document.form8.asmgir.value;
var tbbgir = document.form8.tbbgir.value;
    http.open('get', noCache('uyekdegistir.php?krselectilno='+krselectilno+'&kurumgirdeg='+kurumgirdeg+'&asmgir='+asmgir+'&tbbgir='+tbbgir));
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}
function cevapFonksiyonu() {
    if(http.readyState == 4){
        document.getElementById('drdiv').innerHTML = http.responseText;
 }
}
