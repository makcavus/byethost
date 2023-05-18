// JavaScript Document
function noCache(uri){
    return uri.concat(/\?/.test(uri) ? "&" : "?", "noCache=", (new Date).getTime(), ".", Math.random()*1234567);
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
var kurum_id = document.testform.kurum_id.value;
var token = document.testform.token.value;
var gtin = document.testform.gtin.value;
var serino = document.testform.serino.value;
var expdate = document.testform.expdate.value;
var batch = document.testform.batch.value;
var cins = document.testform.cins.value;
var mesaj = document.testform.mesaj.value;
 console.log(kurum_id);
 console.log(token);
 console.log(gtin);
 console.log(serino);
 console.log(expdate);
 console.log(batch);
 console.log(cins);
 console.log(mesaj);
    http.open('GET', 'karekod_kaydet.php?kurum_id='+kurum_id+'&token='+token+'&gtin='+gtin+'&serino='+serino+'&expdate='+expdate+'&batch='+batch+'&cins='+cins+'&mesaj='+mesaj);
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}

function cevapFonksiyonu() {
    console.log(http.readyState);
    if(http.readyState == 4){
        document.getElementById('sonuckay').innerHTML = http.responseText;
 }
}