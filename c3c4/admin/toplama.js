// JavaScript Document
// Roshan's Ajax dropdown code with php
// This notice must stay intact for legal use
// Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
// If you have any problem contact me at http://roshanbh.com.np
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
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(selectil) {		
		
		var strURL="ilcaara.php?selectil="+selectil;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getCity(countryId,stateId) {		
		var strURL="ocakara.php?selectil="+countryId+"&selectilce="+stateId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
function getilce(countryId) {		
		
		var strURL="ilcearatoplam.php?selectil="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
function getocak(countryId,stateId) {		
		var strURL="ocakaratoplam.php?selectil="+countryId+"&selectilce="+stateId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
 //browser ie ise true degil ise undefined
 var IS_IE = document.all && window.ActiveXObject &&
 navigator.userAgent.toLowerCase().indexOf("msie") > -1 ; 
 // browser gecko ise true degil ise undefined
 var IS_GECKO = document.implementation && document.implementation.createDocument
 && window.XMLHttpRequest && true;

//İlçe Göster.............
$(document).ready(function(){
$(':submit').click(ilcesec );
});
function ilcegoster()
{

$('div#statediv').html('');
$.ajax({
type: 'GET',
url: noCache('ilcaara.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#statediv').html(ajaxCevap);
}
});
return false;
}
 
$(document).ready(function(){
$(':submit').click(kodsec );
});
function drgoster()
{

$('div#drdiv').html('');
$.ajax({
type: 'GET',
url: noCache('drara.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#drdiv').html(ajaxCevap);
}
});
return false;
} 
 //il Kayit Kontrol yapma
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function kontrolil()
{

$('div#sonuc').html('');
$.ajax({
type: 'GET',
url: noCache('kontrol.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}

 //ilçe Kayit Kontrol yapma ilceee
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function kontrolilce()
{

$('div#sonuc1').html('');
$.ajax({
type: 'GET',
url: noCache('kontrolilce.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc1').html(ajaxCevap);
}
});
return false;
}

 //ilçe Kayit Kontrol yapma kurummmmmmmmmm
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function kontrolkurum()
{

$('div#sonuc2').html('');
$.ajax({
type: 'GET',
url: noCache('kontrolkurum.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc2').html(ajaxCevap);
}
});
return false;
}

 //ilçe Kayit Kontrol yapma uyeeeeeeeeeeeeeeee
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function kontroluye()
{

$('div#drdiv').html('');
$.ajax({
type: 'GET',
url: noCache('kontroluye.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#drdiv').html(ajaxCevap);
}
});
return false;
}

 //ilçe Kayit Kontrol yapma kurummmmmmmmmm
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function kontroluser()
{

$('div#drdiv').html('');
$.ajax({
type: 'GET',
url: noCache('kontroluser.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#drdiv').html(ajaxCevap);
}
});
return false;
}
//Yeni Kayit Ekleme
$(document).ready(function(){
$(':submit').click( sonuckayit );
});
function kayit()
{
$('div#sonuc').html('Kayit ekleniyor');

$.ajax({
type: 'GET',
url: noCache('ilkaydet.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
} 
//Yeni Kayit Ekleme ilçeeeee
$(document).ready(function(){
$(':submit').click( sonuckayit );
});
function kayitilce()
{
$('div#sonuc1').html('Kayit ekleniyor');

$.ajax({
type: 'GET',
url: noCache('ilcekaydet.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc1').html(ajaxCevap);
}
});
return false;
} 

//Yeni Kayit Ekleme kurummmmmmmmmm
$(document).ready(function(){
$(':submit').click( sonuckayit );
});
function kayitkurum()
{
$('div#sonuc2').html('Kayit ekleniyor');

$.ajax({
type: 'GET',
url: noCache('kurumkaydet.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc2').html(ajaxCevap);
}
});
return false;
} 

//Yeni Kayit Ekleme kullanıcııııııııııııııı
$(document).ready(function(){
$(':submit').click( sonuckayit );
});
function uyekay()
{
$('div#drdiv').html('Kayit ekleniyor');

$.ajax({
type: 'GET',
url: noCache('uyekaydet.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#drdiv').html(ajaxCevap);
}
});
return false;
} 
//Kayit Silme
function sil(ilad,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('Kayit siliniyor');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('ilsil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc').html(cevap);
}
});}

//Kayıt silme ilçeeeeee
function sililce(ilinad,ilcead,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc1').html('Kayit siliniyor');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('ilcesil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc1').html(cevap);
}
});}

//Kayıt silme kurummmmmmmmmmmm
function silkurum(ilinad,ilcead,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc2').html('Kayit siliniyor');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('kurumsil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc2').html(cevap);
}
});}

//Kayıt silme kurummmmmmmmmmmm
function siluye(uyeno,uyead,uyekim,uyekod) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#drdiv').html('Kayit siliniyor');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('uyesil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#drdiv').html(cevap);
}
});}
//Kayit Grme
function git(ilidi,ilceidi,vocadi,vyiladi,vayadi,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('Kayda ynlendiriliyor');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('goster.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc').html(cevap);
}
});}
//Kayit Degistirme
function deg(ilad,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('Kayit Duzenlenecek');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('ildegistir.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc').html(cevap);
}
});}

//Kayit Degistirme ilçeeeee
function degilce(ilinad,ilcead,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc1').html('Kayit Duzenlenecek');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('ilcedegistir.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc1').html(cevap);
}
});}

//Kayit Degistirme kurummmmmm
function degkurum(ilinad,ilce,socad,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc2').html('Kayit Duzenlenecek');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('kurumdegistir.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc2').html(cevap);
}
});}

//Kayit Degistirme kullanıcıııııııııııııııııııııııııı
function deguye(ilinad,ilce,socad,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#drdiv').html('Kayit Duzenlenecek');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('uyedegistir.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#drdiv').html(cevap);
}
});}
//Kayit Girisi
function ykayuye() // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#drdiv').html('Yeni Kayit Ekleme');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('kayituye.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#drdiv').html(cevap);
}
});}
 //Kayit Silme Onayi
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function onay()
{

$('div#sonuc').html('Silme Onayi Isteniyor...');
$.ajax({
type: 'GET',
url: noCache('onay.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}

 //Kayit Silme Onayi ilçeeee
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function onayilce()
{

$('div#sonuc1').html('Silme Onayi Isteniyor...');
$.ajax({
type: 'GET',
url: noCache('onayilce.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc1').html(ajaxCevap);
}
});
return false;
}

 //Kayit Silme Onayi kurummmmmmmmmm
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function onaykurum()
{

$('div#sonuc2').html('Silme Onayi Isteniyor...');
$.ajax({
type: 'GET',
url: noCache('onaykurum.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc2').html(ajaxCevap);
}
});
return false;
}

 //Kayit Silme Onayi kullanıcıııııııııııııııııı
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function onayuye()
{

$('div#drdiv').html('Silme Onayi Isteniyor...');
$.ajax({
type: 'GET',
url: noCache('onayuye.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#drdiv').html(ajaxCevap);
}
});
return false;
}
 //Toplam Alma
$(document).ready(function(){
$(':submit').click( iltoplamal );
});
function toplamlar()
{

$('div#sonuc').html('Toplamlar');
$.ajax({
type: 'GET',
url: noCache('toplamlar.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}
 //Il Toplami Alma
$(document).ready(function(){
$(':submit').click( iltoplamal );
});
function toplamil()
{

$('div#sonuc').html('Toplamlar');
$.ajax({
type: 'GET',
url: noCache('iltoplam.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}
 //Ilce Toplami Alma
$(document).ready(function(){
$(':submit').click( ilcetoplamal );
});
function toplamilce()
{

$('div#sonuc').html('Toplamlar');
$.ajax({
type: 'GET',
url: noCache('ilcetoplam.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}
//Ocak Toplami Alma
$(document).ready(function(){
$(':submit').click( ocaktoplamal );
});
function toplamocak()
{

$('div#sonuc').html('Toplamlar');
$.ajax({
type: 'GET',
url: noCache('ocaktoplam.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}

//Ay Toplami Alma
$(document).ready(function(){
$(':submit').click(aytoplamal );
});
function toplamay()
{

$('div#sonuc').html('Toplamlar');
$.ajax({
type: 'GET',
url: noCache('aytoplam.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}


