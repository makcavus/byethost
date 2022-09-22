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
	
	function getStateSon(selectil) {		
		
		var strURL="ilcaarason.php?selectil="+selectil;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statedivson').innerHTML=req.responseText;						
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

//İlçe Göster.............********************************************************************************
$(document).ready(function(){
$(':submit').click(ilcesec );
});
function ilcegoster()
{

$('div#statediv').html('');
$.ajax({
type: 'GET',
url: noCache('ilcaarason.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#statediv').html(ajaxCevap);
}
});
return false;
}
//Doktor göster******************************************************************************************************* 
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

 //Birim Kayit Kontrol yapma............................................................................................
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function kontrolbirim()
{

$('div#sonucbirim').html('');
$.ajax({
type: 'GET',
url: noCache('kontrolbirim.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonucbirim').html(ajaxCevap);
}
});
return false;
}

 //il Kayit Kontrol yapma..................................................................................................
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

 //ilçe Kayit Kontrol yapma ilceee..........................................................................................
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

 //ilçe Kayit Kontrol yapma kurummmmmmmmmm......................................................................................
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

 //ilçe Kayit Kontrol yapma uyeeeeeeeeeeeeeeee................................................................................
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
//Birimleri Listemmeeeeeeeeeeeee.......................................................................................
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function listelebirim()
{

$('div#sonucbirim').html('');
$.ajax({
type: 'GET',
url: noCache('listebirim.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonucbirim').html(ajaxCevap);
}
});
return false;
}

//İlleri Listemmeeeeeeeeeeeee.......................................................................................
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function listeleil()
{

$('div#sonuc').html('');
$.ajax({
type: 'GET',
url: noCache('listeil.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}

//İlçeleri Listemmeeeeeeeeeeeee.......................................................................................
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function listeleilce()
{

$('div#sonuc1').html('');
$.ajax({
type: 'GET',
url: noCache('listeilce.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc1').html(ajaxCevap);
}
});
return false;
}

//Kurumları Listemmeeeeeeeeeeeee.......................................................................................
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function listelekurum()
{

$('div#sonuc2').html('');
$.ajax({
type: 'GET',
url: noCache('listekurum.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc2').html(ajaxCevap);
}
});
return false;
}

 //Kullanıcı Kontrol yapma kurummmmmmmmmm.......................................................................................
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

//Yeni Kayit Ekleme birim...................................................................................................................
$(document).ready(function(){
$(':submit').click( sonuckayit );
});
function kayitbirim()
{
$('div#sonucbirim').html('Kayit ekleniyor');

$.ajax({
type: 'GET',
url: noCache('birimkaydet.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonucbirim').html(ajaxCevap);
}
});
return false;
} 
//Yeni Kayit Ekleme il...................................................................................................................
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
//Yeni Kayit Ekleme ilçeeeee.................................................................................................................
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

//Yeni Kayit Ekleme kurummmmmmmmmm................................................................................................................
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

//Yeni Kayit Ekleme kullanıcııııııııııııııı................................................................................................................
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

//Kayit Silme birim...................................................................................................................................................
function birimsil(birim_ad,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonucbirim').html('Kayit siliniyor');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('birimsil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonucbirim').html(cevap);
}
});}

//Kayit Silme il...................................................................................................................................................
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

//Kayıt silme ilçeeeeee.................................................................................................................................................
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

//Kayıt silme kurummmmmmmmmmmm.......................................................................................................................................
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

//Kayıt silme üyeeeeeeeeee.......................................................................................................................................
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
//Kayit Grme.........................................................................................................................................................
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

//Kayit Degistirme birim..............................................................................................................................................
function degbirim(birim_ad,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonucbirim').html('Kayit Duzenlenecek');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('birimdegistir.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonucbirim').html(cevap);
}
});}

//Kayit Degistirme il..................................................................................................................................................
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

//Kayit Degistirme ilçeeeee........................................................................................................................................
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

//Kayit Degistirme kurummmmmm......................................................................................................................................
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

//Kayit Degistirme kullanıcıııııııııııııııııııııııııı.................................................................................................................
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
//Kayit Girisi..........................................................................................................................................
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

//Kayit Silme Onayi birim.....................................................................................................................................
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function onaybirim()
{

$('div#sonucbirim').html('Silme Onayi Isteniyor...');
$.ajax({
type: 'GET',
url: noCache('onaybirim.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonucbirim').html(ajaxCevap);
}
});
return false;
}
 //Kayit Silme Onayi il.....................................................................................................................................
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

 //Kayit Silme Onayi ilçeeee..................................................................................................................................
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

 //Kayit Silme Onayi kurummmmmmmmmm.................................................................................................................................
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

 //Kayit Silme Onayi kullanıcıııııııııııııııııı.....................................................................................................................
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
 //Toplam Alma.................................................................................................................................................
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
 //Il Toplami Alma.....................................................................................................................................................
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
 //Ilce Toplami Alma..............................................................................................................................................
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
//Ocak Toplami Alma...............................................................................................................................................
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

//Ay Toplami Alma...................................................................................................................................................
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

//Kurum Tipi Kayit Kontrol yapma............................................................................................
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function kontroltip()
{

$('div#sonucbirimtip').html('');
$.ajax({
type: 'GET',
url: noCache('kontroltip.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonucbirimtip').html(ajaxCevap);
}
});
return false;
}

//Yeni Kayit Ekleme kurumtipi...................................................................................................................
$(document).ready(function(){
$(':submit').click( sonuckayit );
});
function kayittip()
{
$('div#sonucbirimtip').html('Kayit ekleniyor');

$.ajax({
type: 'GET',
url: noCache('tipkaydet.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonucbirimtip').html(ajaxCevap);
}
});
return false;
} 

//Kayit Degistirme kurumtipi..............................................................................................................................................
function degtip(tipi,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonucbirimtip').html('Kayit Duzenlenecek');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('tipdegistir.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonucbirimtip').html(cevap);
}
});}

//Kayit Silme kontrol tipi...................................................................................................................................................
function tipsil(tipi,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonucbirimtip').html('Kayit siliniyor');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('tipsil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonucbirimtip').html(cevap);
}
});}

//Kayit Silme Onayi kurum tipi.....................................................................................................................................
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function onaytip()
{

$('div#sonucbirimtip').html('Silme Onayi Isteniyor...');
$.ajax({
type: 'GET',
url: noCache('onaytip.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonucbirimtip').html(ajaxCevap);
}
});
return false;
}

//Kurum Tipleri Listemmeeeeeeeeeeeee.......................................................................................
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function listeletip()
{

$('div#sonucbirimtip').html('');
$.ajax({
type: 'GET',
url: noCache('listetip.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonucbirimtip').html(ajaxCevap);
}
});
return false;
}

 //İletileri listele.......................................................................................
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function kontrolmsg()
{

$('div#msgdiv').html('');
$.ajax({
type: 'GET',
url: noCache('listeileti.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#msgdiv').html(ajaxCevap);
}
});
return false;
}

//Kayıt silme iletiiiiiiiii.......................................................................................................................................
function silileti(iltiid,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#drdiv').html('Kayit siliniyor');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('iletisil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#drdiv').html(cevap);
}
});}
//Yeni Kayit Ekleme ileti...................................................................................................................
$(document).ready(function(){
$(':submit').click( sonuckayit );
});
function kayitileti()
{
$('div#sonuciletikay').html('Kayit ekleniyor');

$.ajax({
type: 'GET',
url: noCache('CevapKayit.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuciletikay').html(ajaxCevap);
}
});
return false;
} 

//Kayit Düzenleme ileti...................................................................................................................
$(document).ready(function(){
$(':submit').click( sonuckayit );
});
function duzenleileti()
{
$('div#sonuciletiduz').html('Kayit duzenleniyor');

$.ajax({
type: 'GET',
url: noCache('CevapDuzenle.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuciletiduz').html(ajaxCevap);
}
});
return false;
} 

//Kayit Silme ileti...................................................................................................................................................
function iletisilonay(ileti,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuciletisil').html('Kayit siliniyor');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('iletisil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuciletisil').html(cevap);
}
});}

//Email Gönderme ileti...................................................................................................................
$(document).ready(function(){
$(':submit').click( sonuckayit );
});
function emailileti()
{
$('div#sonuciletikay').html('Kayit ekleniyor');

$.ajax({
type: 'POST',
url: noCache('emailgonder.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuciletikay').html(ajaxCevap);
}
});
return false;
} 
