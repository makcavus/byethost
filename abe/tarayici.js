function create_ajax(){
 // AJAX Nesnesi olarak kullanaca��m�z de�i�kenin ba�lang�� de�eri
var ajaxobject = null;
// Burada Bir iki test gerekiyor. Bunlardan ilk olarak Tek Nesne oldu�u i�in XMLHttpRequest 'i deneyelim. 
// Bu de�i�ken de AJAX Nesnesini Olu�turup olu�turamad���m�z konusunda bize fikir sa�layacakt�r. 
var found = false; try { 
ajaxobject = new XMLHttpRequest(); found = true; 
// Evet Olu�turduk! Taray�c�m�z Gecko T�r� bir taray�c� 
}
 catch(e)
 // E�er olu�turamad�ysa Internet Explorer '� deneyelim
 { 
// Microsoft un T�m XMLHttp Nesneleri 
var MicrosoftObjects = ["MSXML2.XMLHttp.5.0", "MSXML2.XMLHttp.4.0", "MSXML2.XMLHttp.3.0", "MSXML2.XMLHttp", "Microsoft.XMLHttp"]; 
// S�ras�yla deneyelim 
for (var i = 0; i <= MicrosoftObjects.length; i++) { 
if (!MicrosoftObjects[i]) { break; } try { var ajaxobject = new ActiveXObject(MicrosoftObjects); found = true;
alert('explorer');
 // Ka�amazs�n Bizden! Taray�c�m�z Internet Explorer break;
 } 
catch(f) {
 // Yukar�da ki XMLHttp Nesnelerinden biri ile uyumlu de�il. Bir Sonrakini deneyelim
 } } } if (!found) // Taray�c�m�z�n AJAX deste�i yok...
 { alert('Bu i�lemi ger�ekle�tirmek i�in AJAX Destekli Bir Taray�c�ya ihtiyac�n�z olacak'); 
return null; } 
return ajaxobject;
 // Taray�c�m�z AJAX destekli ve kullan�ma haz�r.}
