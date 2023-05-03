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

function girdiyiekle() {
var selectil = document.girdiekle.selectil.value;
var selectilce = document.girdiekle.selectilce.value;
var selectoc = document.girdiekle.selectoc.value;
var selectyil = document.girdiekle.selectyil.value;
var selectay = document.girdiekle.selectay.value;
 
    http.open('get', noCache('023kekle.php?selectil='+selectil+'&selectilce='+selectilce+'&selectoc='+selectoc+'&selectyil='+selectyil+'&selectay='+selectay));
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}

function cevapFonksiyonu() {
    if(http.readyState == 4){
        document.getElementById('sonuckay').innerHTML = http.responseText;
 }
}