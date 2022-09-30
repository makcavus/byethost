<html>

<head>
  <title></title>
</head>

<body>

<?php

$SQLHaber="select baslik,icerik from haberler order by haberid desc limit 1";
$Haber=mysql_fetch_array(mysql_query($SQLHaber));
?>
<table width="700" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="430" bgcolor="#A43b25"><img src="images/bolumkose.gif" width="30" height="27" align="absmiddle"/><font class="BolumYazi"><? echo $Haber["baslik"]; ?><font></td>
<td width="20">&nbsp;</td>
 <td width="250" bgcolor="#A43b25"><img src="images/bolumkose.gif" width="30" height="27" align="absmiddle"/><font class="BolumYazi">Baskýdakiler<font></td>
 </tr>
 <tr>
  <td width="430" valign="top"/><font class="Yazi"><? echo $Haber["icerik"]; ?><font></td>
<td width="20">&nbsp;</td>
<td width="250">
<?
$SQLBaskidakiler="select kitapid,kitapadi,tur from kitaplar where(basimtarihi='0000-00-00') order by kitapid desc limit 5";
$SBaskidakiler=mysql_query($SQLBaskidakiler);
while($Baskidakiler=mysql_fetch_array($SBaskidakiler)){
echo "<a href=index.php?Mode=".$Baskidakiler["tur"]."&kitapid=".$Baskidakiler["kitapid"]." class=SiteLink>* ".$Baskidakiler["kitapadi"]."(".$Baskidakiler["tur"].")<br>";
}
 ?>
 <br><a href="index.php?Mode=Baskidakiler" class="SiteLink">Tümü &raquo;&raquo;</a>
 </td>
 </tr>
 <tr>
 <td colspan="3" height="10"></td>
 </tr>
 </table>
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
 <tr>
 <td width="220" bgcolor="#A43b25"><img src="images/bolumkose.gif" width="30" height="27" align="absmiddle"/><font class="AltBolumYazi">Bilgisayar Kitaplarý<font></td>
  <td width="20">&nbsp;</td>
 <td width="220" bgcolor="#A43b25"><img src="images/bolumkose.gif" width="30" height="27" align="absmiddle"/><font class="AltBolumYazi">Romanlar<font></td>
 <td width="20">&nbsp;</td>
 <td width="220" bgcolor="#A43b25"><img src="images/bolumkose.gif" width="30" height="27" align="absmiddle"/><font class="AltBolumYazi">Yazarlar<font></td>
 </tr>
 <tr>
 <td width="220">
<?
$SQLBilgisayar="select kitapid,kitapadi from kitaplar where(tur='Bilgisayar' and basimtarihi !='0000-00-00') order by kitapid desc limit 5";
$SBilgisayar=mysql_query($SQLBilgisayar);
while($Bilgisayar=mysql_fetch_array($SBilgisayar)){
echo "<a href=index.php?Mode=Bilgisayar&kitapid=".$Bilgisayar["kitapid"]." class=SiteLink>* ".$Bilgisayar["kitapadi"]."</a><br>";
}
 ?>
 <br><a href="index.php?Mode=Bilgisayar&kitapid=Tumu" class="SiteLink">Tümü &raquo;&raquo;</a>
 </td>
 <td width="20">&nbsp;</td>
 <td width="220">
<?
$SQLRoman="select kitapid,kitapadi from kitaplar where(tur='Romanlar' and basimtarihi !='0000-00-00') order by kitapid desc limit 5";
$SRoman=mysql_query($SQLRoman);
while($Roman=mysql_fetch_array($SRoman))
{
echo "<a href=index.php?Mode=Romanlar&kitapid=".$Roman["kitapid"]." class=SiteLink>* ".$Roman["kitapadi"]."</a><br>";
}
 ?>
 <br><a href="index.php?Mode=Romanlar&kitapid=Tumu" class="SiteLink">Tümü &raquo;&raquo;</a>
  </td>
 <td width="20">&nbsp;</td>
 <td width="220">
<?
$SQLYazar="select yazarid,adsad from yazarlar order by yazarid desc limit 5";
$SYazar=mysql_query($SQLYazar);
while($Yazar=mysql_fetch_array($SYazar)){
echo "<a href=index.php?Mode=Yazarlar&yazarid=".$Yazar["yazarid"]." class=SiteLink>* ".$Yazar["adsad"]."</a><br>";
}
 ?>
<br><a href="index.php?Mode=Yazarlar&yazarid=Tumu" class="SiteLink">Tümü &raquo;&raquo;</a>
  </td>
  </tr>
  <tr>
  <td colspan="5" height="10"></td>
  </tr>
  </table>
 </body>

</html>