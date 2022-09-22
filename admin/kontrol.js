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
//illllllllllllll
function birimdegistir() {
var selectbirim = document.form6.selectbirim.value;
var birimgir = document.form6.birimgir.value;

    http.open('get', noCache('birimkdegistir.php?selectbirim='+selectbirim+'&birimgir='+birimgir));
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}

function cevapFonksiyonu() {
    if(http.readyState == 4){
        document.getElementById('sonucbirim').innerHTML = http.responseText;
 }
}

/*
//ilçeeeeeeeeee
function ilcedegistir() {
var selectilno = document.form6.selectilno.value;
var ilcegirgelen = document.form6.ilcegirgelen.value;
var ilcegir = document.form6.ilcegir.value;

    http.open('get', noCache('ilcekdegistir.php?selectilno='+selectilno+'&ilcegirgelen='+ilcegirgelen+'&ilcegir='+ilcegir));
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}

function cevapFonksiyonu() {
    if(http.readyState == 4){
        document.getElementById('sonuc1').innerHTML = http.responseText;
 }
}
//kurummmmmmmmmmmmmmmmm

function kurumdegistir() {
var krselectilno = document.form7.krselectilno.value;
var krilcegirgelen = document.form7.krilcegirgelen.value;
var kurumgirgelen = document.form7.kurumgirgelen.value;
var kurumgir = document.form7.kurumgir.value;
var asmgir = document.form7.asmgir.value;
var tbbgir = document.form7.tbbgir.value;
var asegir = document.form7.asegir.value;
var aseungir = document.form7.aseungir.value;



    http.open('get', noCache('kurumkdegistir.php?krselectilno='+krselectilno+'&krilcegirgelen='+krilcegirgelen+'&kurumgirgelen='+kurumgirgelen+'&kurumgir='+kurumgir+'&asmgir='+asmgir+'&tbbgir='+tbbgir+'&asegir='+asegir+'&aseungir='+aseungir));
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}

function cevapFonksiyonu() {
    if(http.readyState == 4){
        document.getElementById('sonuc2').innerHTML = http.responseText;
 }
}

//Tarih girisi
var mm;
var dd;
var yyyy; 
var daysInMonth;
var minYear = 1930; //inclusive, 1930 is the lowest valid year
var maxYear = 2003; //inclusive, 2003 is the highest valid year

function checkDate(){
	mm = document.girdiekleme.month.value;
	dd = document.girdiekleme.day.value;
	yyyy = document.girdiekleme.year.value;
	setDaysInMonth(mm); 	
	var submitting = (checkMonth() && checkDay() && checkYear());
	if(submitting){
		//set the hidden field with the whole date string
		document.girdiekleme.mmddyyyy.value=mm+"/"+dd+"/"+yyyy;
	}
	return submitting;
}
function checkMonth(){
	if(mm!="" && mm >=1 && mm <=12){
		return true;
	}
	alert('valid months are 1 to 12');
	document.girdiekleme.month.value="";
	document.girdiekleme.month.focus();
	return false;
}
function checkDay(){
	if(dd!="" && dd >=1 && dd <= daysInMonth){
		return true;
	}
	alert('valid days are 1 to ' + daysInMonth);
	document.girdiekleme.day.value="";
	document.girdiekleme.day.focus();
	return false;
}
function checkYear(){
	if(yyyy.length==4 && yyyy >= minYear && yyyy <= maxYear){ 
		return true; 
	} 
	alert('Please enter a 4-digit year between '+minYear+' and '+maxYear); 
	document.girdiekleme.year.value=""; 
	document.girdiekleme.year.focus(); 
	return false; 
}
function setDaysInMonth(month){
	leap = (yyyy%400==0) || ((yyyy%4==0) && (yyyy%100 !=0));
	if(month==4 || month==6 || month==9 || month==11){
		daysInMonth = 30;
	}
	else if(month==2 && leap){
		daysInMonth = 29;
	}
	else if(month==2 && !leap){
		daysInMonth = 28;
	}
	else{
		daysInMonth = 31;
	}
}

 function hoppa() {
 window.open("","hoppa","width=1000, height=1000")
 }
 
*/