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


.style5 {


	font-family: Arial, Helvetica, sans-serif;


	color: #000000;


	font-weight: bold;


}


-->


</style>


</head>





<body>





<form id="form1" name="form1" method="get" action="adreskaydet.php">


<table width="53%" border="1" bgcolor="#000000" align="center">


<tr bordercolor="#FFFF00">


<td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Aile Hekiminin Adı:</strong></span></strong></label>


<input name="konu" class="style5" id="konu" type="text" tabindex="1" size="97%" maxlength="254"/></td>


</tr>


<tr bordercolordark="#0000FF" bordercolor="#FFFF00">


<td bordercolor="#FFFF00"><label><strong><span class="style2">Aile Hekimliği Kodu-Aile Sağlığı Merkezi Adı ve Adresi:</span></strong><span class="style2"></span> </label><br />


<textarea name="icerik" class="style5" id="icerik" cols="97%" rows="10" tabindex="2"></textarea></td>


 </tr>


 <tr bordercolor="#FFFF00">


<td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>ASM Telefonu:</strong></span></strong></label>


<input type="text" name="dosya" size="97%" class="style5"/>


</td>


</tr>


 <tr bordercolor="#FFFF00">


<td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Cep Telefonu:</strong></span></strong></label>


<input type="text" name="bilgi" size="97%" class="style5"/>


</td>


</tr>


<tr  bordercolordark="#0000FF" bordercolor="#FFFF00">


  <td bordercolor="#FFFF00" align="center"><input name="duyurukayit" type="submit" class="style5" id="duyurukayit" value="Adresi Kaydet" align="center"  /></td>


  </tr>


  <tr>


  <td><input name="tarih" id="tarih" type="hidden" tabindex="3" size="50%" maxlength="10" value="<?php $tarih=Date("Y-m-d");


  echo $tarih;?>"/></td>


  </tr>


  


</table>


 


</form>


</body>


</html>


