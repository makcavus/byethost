<html>

<head>

<meta http-equiv="Content-Type" content="text/HTML; charset=utf-8" />

<title> Ajax Kayıt İşlemi

</title>

<link rel="stylesheet" href="stil.css" type="text/css" media="screen">

<script type="text/javascript" src="../jquery-1.9.1.min.js"></script>

<script>

function kayit()//fonksiyon adı
{
var ad = $("input[name=ad]").val();
var soyad = $("input[name=soyad]").val();
var tel = $("input[name=tel]").val();//formdan gönderilen değerleri çekip değişkenlere aktardık
if (ad=="" || soyad=="" || tel=="")//değişkenler boş mu kontrol ettik
{
$('#basarisiz').show(1);
$('#kayit').hide(1);
}else
{
$.ajax ({ //ajaxı oluşturduk
type: "POST",
url: "kayit.php",
data: $("#form1").serialize(),
success: function (sonuc) {
if (sonuc == "hata") {
alert ("veritabanına bağlanamadık");
}else {
$('#kayit').show(1);
$('#basarisiz').hide(1);
$("input[name=ad]").val("");
$("input[name=soyad]").val("");
$("input[name=tel]").val("");//input textlerin boşalttık
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
</script>
</head>
<body>
<form method="POST" id="form1">
<table border="0" cellspacing="10" cellpadding="0" id="anatablo">
<tr><td align="center">Php - Ajax İle Veritabanına Kayıt İşlemi</td></tr>
<tr><td>
<table border="0" cellspacing="0" cellpadding="0"><tr><td align="right">
<input type="text" placeholder="Adınız" name="ad" id="yazi" autofocus onFocus="kontrol()"></td><td align="left">
<input type="text" value=" Ad" id="yazibilgi" disabled></td>
</tr>
<tr><td></td><td>&nbsp;</td></tr>
<tr><td align="right">
<input type="text" placeholder="Soyadınız" name="soyad" id="yazi"></td><td align="left">
<input type="text" value=" Soyad" id="yazibilgi" disabled></td>
</tr>
<tr><td></td><td>&nbsp;</td></tr>
<tr><td align="right">
<input type="text" placeholder="Telefon" name="tel" maxlength="11" id="yazi"></td><td align="left">
<input type="text" value=" Tel-No" id="yazibilgi" disabled></td>
</tr>
<tr><td></td><td>&nbsp;</td></tr>
<tr>
<td align="center">
<div id="kayit">
Veritabanına Kaydedildi!
</div>
<div id="basarisiz">
Boş Alan Bıraktınız!
</div>
</td>
<td align="right">
<input type="submit" value="Kaydet" id="buton" onclick="kayit()">//butonumuz
</td>
</tr>
</table>
</td></tr>
</table>
</form>
<div id="listele">
</div>
</body>
</html>
