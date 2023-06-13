// You can use this code if you provide a link to www.karekod.com 
// Asagidaki kodu www.karekod.com a baglanti sunarak kullanabilirsiniz. 

var		keypad_alt_0 = false;
var 	keypad_alt_2 = false;
var 	keypad_alt_9 = false; 		

function karekod_keydown(e)
{
 	var keynum;
	if(window.event) // IE
	{
		keynum = e.keyCode;
		document.getElementById('kaydet').click()
		//alert("tıklandı");
	}
	else if(e.which) // Netscape/Firefox/Opera
	{
		keynum = e.which;
	}
	//Some barcode readers sends FNC1 as Function keys
	//Bazi barkod okuyuculari FNC1 karakterini Fonksiyon tuslari olarak g�nderiyor.
	if((112 <= keynum) && (keynum <= 123)){ //F1,F2....F12
		keynum = 29 ; //Fnc1 Group Seperator
		processCurrentToken(keynum);
		return false;
	}
	//Some barcode readers sends FNC1 as  keypad ALT+0, ALT+2,ALT+9 (ASCII 29) 
	//Bazi barkod okuyuculari FNC1 karakterini alt + keypad 0, keypad 2 ve keypad 9 kombinasyonu olarak g�nderiyor.
	if(e.altKey){
		if(keynum == 18) {//ALT
			keypad_alt_0 = false;
			keypad_alt_2 = false;
			keypad_alt_9 = false; 		
		}
         // ALT+0 (45,96)->IE/Firefox  45,48 -> Opera
		if((keynum ==45) ||  (keynum == 96) || (keynum == 48)) {
			keypad_alt_0 = true;
		}
        // ALT+2 (40,98)->IE/Firefox  40,50 -> Opera
		if((keynum ==40) ||  (keynum == 98) || (keynum == 50)) { 
			keypad_alt_2 = true;
		}
        // ALT+9 (33,105)->IE/Firefox  33,57 -> Opera
		if((keynum ==33) ||  (keynum == 105) || (keynum == 57)) { 
			keypad_alt_9 = true;
		}
		if(keypad_alt_0&& keypad_alt_2&&keypad_alt_9) {
			keynum = 29 ; //Fnc1 Group Seperator
			processCurrentToken(keynum);
			keypad_alt_0 = false;
			keypad_alt_2 = false;
			keypad_alt_9 = false; 		
			return false;
		}
	}
}

function karekod_keypress(e)
{
	var keynum;
	if(window.event) // IE
	{
		keynum = e.keyCode;
	}
	else if(e.which) // Netscape/Firefox/Opera
	{
		keynum = e.which;
	}
	if(!e.altKey){
		processCurrentToken(keynum);
	}
}

var currenttoken = '';
var nextConsume = 0;
//var consumingKurum_id = false;
var consumingGtin = false;
var consumingSerino = false;
var consumingExpDate = false;
var consumingBatch = false;
var consumingCins=false;
var consumingMesaj=false;
var consumingAI=true;
var consumingOther = false;
WAIT_FOR_FNC1=10000;

function processCurrentToken(keynum){
	if(!keynum){  //if keynum is not defined do nothing.  
	
		return;
		}
	keychar = String.fromCharCode(keynum);
	currenttoken += keychar;
	
	//document.testform.token.value = currenttoken;
	if(!consumingAI && (nextConsume == 0)) {
		//consumingKurum_id = false;
		consumingGtin = false;
		consumingSerino = false;
		consumingExpDate = false;
		consumingBatch = false;
		consumingCins = false;
		consumingMesaj = false;
		consumingOther = false;
		consumingAI = true;
		currenttoken = keychar;
		//alert(currenttoken);
	
	}
	if(keynum == 29) {//Fnc1
		currenttoken = '';
		nextConsume = 0;
		//alert(currenttoken);
		return;
	}
if((currenttoken == '01') && consumingAI) { //Gtin
		currenttoken  = '';
		nextConsume = 14;
		consumingGtin = true;
		consumingAI = false;
		//alert(currenttoken);
		

		return;
	}
	if((currenttoken == '21') && consumingAI) { //Serial
		currenttoken  = '';
		nextConsume = WAIT_FOR_FNC1; //Wait For Fnc1
		consumingSerino = true;
		consumingAI = false;
		return;
	}
	if((currenttoken == '10') && consumingAI) { //Batch
		currenttoken  = '';
		nextConsume = WAIT_FOR_FNC1; //Wait For Fnc1
		consumingBatch = true;
		consumingAI = false;
		return;
	}

	if((currenttoken == '17') && consumingAI) { //ExpDate
		currenttoken  = '';
		nextConsume = 6; 
		consumingExpDate = true;
		consumingAI = false;
		return;
	}
	
if((currenttoken == '99') && consumingAI) { //Batch
		currenttoken  = '';
		nextConsume = WAIT_FOR_FNC1; //Wait For Fnc1
		consumingCins = true;
		consumingAI = false;
		return;
	}
	
	if((currenttoken == '97') && consumingAI) { //Batch
		currenttoken  = '';
		nextConsume = WAIT_FOR_FNC1; //Wait For Fnc1
		consumingMesaj = true;
		consumingAI = false;
		return;
	}
		
	/*if(consumingKurum_id) {
		document.testform.kurum_id.value = currenttoken;
		nextConsume--;
	}*/
	if(consumingGtin) {
		document.testform.gtin.value = currenttoken;
		nextConsume--;
	}
	if(consumingSerino) {
		document.testform.serino.value =  currenttoken;
		nextConsume--;
	}
	if(consumingBatch) {
		document.testform.batch.value = currenttoken;
		nextConsume--;
	}
	if(consumingExpDate) {
		document.testform.expdate.value = currenttoken;
		nextConsume--;
	}
	if(consumingCins) {
		document.testform.cins.value = currenttoken;
		nextConsume--;
	}
	if(consumingMesaj) {
		document.testform.mesaj.value = currenttoken;
		nextConsume--;
	}
}


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
		document.getElementById('kodkaydet').click()
		$('#token').focus();
 }
}
//AŞI ADI EKLE
function asiadiekle() {
var asi_adi = document.testform.asi_adi.value;
/*var token = document.testform.token.value;
var gtin = document.testform.gtin.value;
var serino = document.testform.serino.value;
var expdate = document.testform.expdate.value;
var batch = document.testform.batch.value;*/
var cins = document.testform.cins.value;
//var mesaj = document.testform.mesaj.value;
 /*console.log(asi_adi);
 console.log(token);
 console.log(gtin);
 console.log(serino);
 console.log(expdate);
 console.log(batch);
 console.log(cins);
 console.log(mesaj);*/
    http.open('GET', 'asi_kodu_kaydet.php?asi_adi='+asi_adi+'&cins='+cins);
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}

function cevapFonksiyonu() {
    //console.log(http.readyState);
    if(http.readyState == 4){
        document.getElementById('sonuckay').innerHTML = http.responseText;
		//document.getElementById('asiadikaydet').click()
		//$('#token').focus();
 }
}
//AŞI MARKA EKLE
function asimarkaekle() {
	var asi_marka = document.testform.asi_marka.value;
	//var token = document.testform.token.value;
	var gtin = document.testform.gtin.value;
	/*var serino = document.testform.serino.value;
	var expdate = document.testform.expdate.value;
	var batch = document.testform.batch.value;*/
	var cins = document.testform.cins.value;
	//var mesaj = document.testform.mesaj.value;
	 /*console.log(asi_adi);
	 console.log(token);
	 console.log(gtin);
	 console.log(serino);
	 console.log(expdate);
	 console.log(batch);
	 console.log(cins);
	 console.log(mesaj);*/
		http.open('GET', 'asi_tanim_kaydet.php?asi_marka='+asi_marka+'&gtin='+gtin+'&cins='+cins);
		http.onreadystatechange = cevapFonksiyonu;
		http.send(null);
	}
	
	function cevapFonksiyonu() {
		//console.log(http.readyState);
		if(http.readyState == 4){
			document.getElementById('sonuckay').innerHTML = http.responseText;
			//document.getElementById('asiadikaydet').click()
			//$('#token').focus();
	 }
	}
function resetConsume(){
	    //consumingKurum_id = false;
		consumingGtin = false;
		consumingSerino = false;
		consumingExpDate = false;
		consumingBatch = false
		consumingCins = false
		consumingMesaj = false
		consumingOther = false;
		consumingAI = true;
		currenttoken = '';
		nextConsume = 0;
		document.testform.asi_adi.value = '';
		document.testform.token.value = '';
		document.testform.gtin.value = '';
		document.testform.serino.value = '';
		document.testform.batch.value = '';
		document.testform.expdate.value = '';
		document.testform.cins.value = '';
		document.testform.mesaj.value = '';
		$('#token').focus();
		$('#asi_adi').focus();
		$('#asi_marka').focus();
}
