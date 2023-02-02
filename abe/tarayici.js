function create_ajax(){
 // AJAX Nesnesi olarak kullanacaðýmýz deðiþkenin baþlangýç deðeri
var ajaxobject = null;
// Burada Bir iki test gerekiyor. Bunlardan ilk olarak Tek Nesne olduðu için XMLHttpRequest 'i deneyelim. 
// Bu deðiþken de AJAX Nesnesini Oluþturup oluþturamadýðýmýz konusunda bize fikir saðlayacaktýr. 
var found = false; try { 
ajaxobject = new XMLHttpRequest(); found = true; 
// Evet Oluþturduk! Tarayýcýmýz Gecko Türü bir tarayýcý 
}
 catch(e)
 // Eðer oluþturamadýysa Internet Explorer 'ý deneyelim
 { 
// Microsoft un Tüm XMLHttp Nesneleri 
var MicrosoftObjects = ["MSXML2.XMLHttp.5.0", "MSXML2.XMLHttp.4.0", "MSXML2.XMLHttp.3.0", "MSXML2.XMLHttp", "Microsoft.XMLHttp"]; 
// Sýrasýyla deneyelim 
for (var i = 0; i <= MicrosoftObjects.length; i++) { 
if (!MicrosoftObjects[i]) { break; } try { var ajaxobject = new ActiveXObject(MicrosoftObjects); found = true;
alert('explorer');
 // Kaçamazsýn Bizden! Tarayýcýmýz Internet Explorer break;
 } 
catch(f) {
 // Yukarýda ki XMLHttp Nesnelerinden biri ile uyumlu deðil. Bir Sonrakini deneyelim
 } } } if (!found) // Tarayýcýmýzýn AJAX desteði yok...
 { alert('Bu iþlemi gerçekleþtirmek için AJAX Destekli Bir Tarayýcýya ihtiyacýnýz olacak'); 
return null; } 
return ajaxobject;
 // Tarayýcýmýz AJAX destekli ve kullanýma hazýr.}
