<?
$yazarid=$_GET["yazarid"];
if($yazarid=="tumu"){
$SQLTumYazarlar="select yazarid,adsad from yazarlar order by yazarid desc";
$STumYazarlar=mysql_query($SQLTumYazarlar);
$ToplamYazar=mysql_num_rows($STumYazarlar);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><font class="Baslik">Tüm Yazarlar</font></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><font class="Yazi">Toplam <? echo $ToplamYazar; ?> yazar vardýr.</font></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<?
while($TumYazarlar=mysql_fetch_array($STumYazarlar)){
echo "<tr><td><a href=index.php?Mode=Yazarlar&yazarid=".$TumYazarlar["yazarid"]." class=SiteLink>* ".$TumYazarlar["adsad"]."</a></td></tr>";
}
?>
<tr>
<td>&nbsp;</td>
</tr>
</table>
<? }else{
$SQLYazar="select * from yazarlar where(yazarid='".$yazarid."')";
$Yazar=mysql_fetch_array(mysql_query($SQLYazar));
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="2"><font class="Baslik"><? echo $Yazar["adsad"];?></font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td rowspan="2" valign="top"><img src="images/<? echo $Yazar["resim"];?>"></td>
<td><font class="Yazi"><? $Yazar["tanitim"];?></font></td>
</tr>
<tr>
<td><font class="Yazi"><b>Yayýnevimizden çýkmýþ olan kitaplar:<br> 
<?
 $SQLKitaplar="select kitapid,kitapadi,tur from kitaplar where(yazar='".$yazarid."')";
$SKitaplar=mysql_query($SQLKitaplar);
while($Kitaplar=mysql_fetch_array($SKitaplar)){
echo "<a href=index.php?Mode=".$Kitaplar["tur"]."&kitapid=".$Kitaplar["kitapid"]." class=SiteLink>&raquo; ".$Kitaplar["kitapadi"]."</a><br>";
}
?>
</font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<?}?>
