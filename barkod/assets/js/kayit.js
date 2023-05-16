function kayit()//fonksiyon adı
{
var token = $("input[name=token]").val();
var kurumid = $("input[name=kurumid]").val();
var gtin = $("input[name=gtin]").val();
var serino = $("input[name=serino]").val();
var expdate = $("input[name=expdate]").val();
var batch = $("input[name=batch]").val();
var cins = $("input[name=cins]").val();
var mesaj = $("input[name=mesaj]").val();//formdan gönderilen değerleri çekip değişkenlere aktardık
if (token=="")//değişkenler boş mu kontrol ettik
{
$('#basarisiz').show(1);
$('#kayit').hide(1);
}else
{
$.ajax ({ //ajaxı oluşturduk
type: "POST",
url: "karekod_kaydet.php",
data: $("#testform").serialize(),
success: function (sonuc) {
    console.log(data)
if (sonuc == "hata") {
alert ("veritabanına bağlanamadık");
}else {
$('#kayit').show(1);
$('#basarisiz').hide(1);
$("input[name=token]").val("");
$("input[name=kurumid]").val("");
$("input[name=gtin]").val("");
$("input[name=serino]").val("");
$("input[name=expdate]").val("");
$("input[name=batch]").val("");
$("input[name=cins]").val("");
$("input[name=mesaj]").val("");//input textlerin boşalttık
}
}
}) }} 
function noCache(uri){
return uri.concat(
/\?/.test(uri) ? "&" : "?", "noCache=", (new Date).getTime(), ".", Math.random()*1234567);
};
//Listele
$(document).ready(function(){
$(':submit').click( ilcetoplamal );
});
function kontrol()
{
$('div#listele').html('Kayitlar listeleniyor...');
$.ajax({
type: 'POST',
url: noCache('listele.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#listele').html(ajaxCevap);
}
});
return false;
}