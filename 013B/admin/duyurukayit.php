<?
include("../index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Duyuru Kaydı</title>
<style type="text/css">
<!--
body {
	background-color: #000000;

}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	color: #0000FF;
}
a:link {
	color: #000000;
	text-decoration: none;
}
a:hover {
	color: #FF0000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style2 {color: #00FF00}
.style3 {color: #FF0000}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-weight: bold;
}
-->
</style>
</head>

<body>

<form id="form1" name="form1" method="POST" action="duyurukaydet.php" enctype="multipart/form-data">
  <table width="54%" border="1" bgcolor="#000000" align="center">
    <tr bordercolor="#FFFF00">
      <td bordercolor="#FFFF00" colspan="2"><label><strong><span class="style2"><strong>Konu:</strong></span></strong></label>
          <input name="konu" class="style5" id="konu" type="text" tabindex="1" size="126%" maxlength="254"/></td>
    </tr>
    <tr bordercolordark="#0000FF" bordercolor="#FFFF00">
      <td bordercolor="#FFFF00" colspan="2"><label><strong><span class="style2">İçerik:</span></strong><span class="style2"></span> </label>
          <br />
          <textarea name="icerik" class="style5" id="icerik" cols="138%" rows="20" tabindex="2"></textarea></td>
    </tr>
    <tr bordercolor="#FFFF00">
      <td bordercolor="#FFFF00" colspan="2"><label><strong><span class="style2"><strong>Eklenecek Dosya Adı:</strong></span></strong></label>
      <input type="file" name="dosya" size="100%" class="style3"/></td>
    </tr>
    <tr bordercolor="#FFFF00">
      <td bordercolor="#FFFF00" colspan="2"><label><strong><span class="style2"><strong>Eklenenen Dosyanın Açıklaması:</strong></span></strong></label>
          <input type="text" name="bilgi" size="92%" class="style5"/></td>
    </tr>
    <tr bordercolor="#FFFF00">
      <td bordercolor="#FFFF00" colspan="2"><label><strong><span class="style2"><strong>Anasayfa Resimi:</strong></span></strong></label>
      <input type="file" name="resim" size="106%" class="style3"/></td>
    </tr>
    <tr bordercolor="#FFFF00">
      <td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Foto 1:</strong></span></strong></label>
      <input type="file" name="foto1" size="47%" class="style3"/></td>
      <td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Foto 2:</strong></span></strong></label>
          <input type="file" name="foto2" size="47%" class="style3"/></td>
    </tr>
	<tr bordercolor="#FFFF00">
      <td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Foto 3:</strong></span></strong></label>
          <input type="file" name="foto3" size="47%" class="style3"/></td>
      <td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Foto 4:</strong></span></strong></label>
          <input type="file" name="foto4" size="47%" class="style3"/></td>
    </tr>
	<tr bordercolor="#FFFF00">
      <td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Foto 5:</strong></span></strong></label>
          <input type="file" name="foto5" size="47%" class="style3"/></td>
      <td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Foto 6:</strong></span></strong></label>
          <input type="file" name="foto6" size="47%" class="style3"/></td>
    </tr>
	<tr bordercolor="#FFFF00">
      <td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Foto 7:</strong></span></strong></label>
          <input type="file" name="foto7" size="47%" class="style3"/></td>
      <td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Foto 8:</strong></span></strong></label>
          <input type="file" name="foto8" size="47%" class="style3"/></td>
    </tr>
	<tr bordercolor="#FFFF00">
      <td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Foto 9:</strong></span></strong></label>
          <input type="file" name="foto9" size="47%" class="style3"/></td>
      <td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Foto 10:</strong></span></strong></label>
          <input type="file" name="foto10" size="45.8%" class="style3"/></td>
    </tr>
    <tr>
      <td colspan="2"><input name="tarih" id="tarih" type="hidden" tabindex="3" size="50%" maxlength="10" value="<?php $tarih=Date("Y-m-d");
  echo $tarih;?>"/></td>
    </tr>
    <tr  bordercolordark="#0000FF" bordercolor="#FFFF00">
      <td bordercolor="#FFFF00" align="center" colspan="2"><input name="duyurukayit" type="submit" class="style5" id="duyurukayit" value="Duyuruyu Kaydet" align="center"  /></td>
    </tr>
  </table>
</form>
<?php 
}
?>
</body>
</html>
