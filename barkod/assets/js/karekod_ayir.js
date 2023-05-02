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
var consumingGtin = false;
var consumingSerial = false;
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
		consumingGtin = false;
		consumingSerial = false;
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
		consumingSerial = true;
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
		
	if(consumingGtin) {
		document.testform.gtin.value = currenttoken;
		nextConsume--;
	}
	if(consumingSerial) {
		document.testform.serial.value =  currenttoken;
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
function resetConsume(){
		consumingGtin = false;
		consumingSerial = false;
		consumingExpDate = false;
		consumingBatch = false
		consumingCins = false
		consumingMesaj = false
		consumingOther = false;
		consumingAI = true;
		currenttoken = '';
		nextConsume = 0;
		document.testform.token.value = '';
		document.testform.gtin.value = '';
		document.testform.serial.value = '';
		document.testform.batch.value = '';
		document.testform.expdate.value = '';
		document.testform.cins.value = '';
		document.testform.mesaj.value = '';
}