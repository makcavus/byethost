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
var yeniyil = document.girdiekle.yeniyil.value;

    http.open('get', 'yilkekle.php?yeniyil='+yeniyil);
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}

function girdiyisil() {
    var yeniyil = document.girdiekle.yeniyil.value;
    
        http.open('get', 'yilksil.php?yeniyil='+yeniyil);
        http.onreadystatechange = cevapFonksiyonu;
        http.send(null);
    }

function cevapFonksiyonu() {
    if(http.readyState == 4){
        document.getElementById('sonuckay').innerHTML = http.responseText;
 }
}