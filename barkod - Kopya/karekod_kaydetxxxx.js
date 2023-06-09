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

function testform() {
var token = document.testform.token.value;
var kurumid = document.testform.kurumid.value;
var gtin = document.testform.gtin.value;
var serino = document.testform.serino.value;
var expdate = document.testform.expdate.value;
var batch = document.testform.batch.value;
var cins = document.testform.cins.value;
var mesaj = document.testform.mesaj.value;
 
    http.open('post', noCache('karekod_kaydet.php?token='+token+'&kurumid='+kurumid+'&gtin='+gtin+'&serino='+serino+'&expdate='+expdate+'&batch='+batch+'&cins='+cins+'&mesaj='+mesaj));
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}

function cevapFonksiyonu() {
    if(http.readyState == 4){
        document.getElementById('sonuckay').innerHTML = http.responseText;
 }
}