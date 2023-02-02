<?
$kitapid=$_GET["kitapid"];
if($kitapid=="tumu"){
$SQLTumBilgisayar="select kitapid,kitapadi,yayinevi from kitaplar where (tur='Bilgisayar') order by kitapid desc";
$STumBilgisayar=mysql_query($SQLTumBilgisayar);
$ToplamBilgisayar=mysql_num_rows($STumBilgisayar);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><font class="Baslik">Tüm Bilgisayar Kitaplarý</font></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<tr>
<td><font class="Yazi">Toplam <? echo $ToplamBilgisayar;?> bilgisayar kitabý vardýr.</font></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
<?
while($TumBilgisayar=mysql_fetch_array($STumBilgisayar)){
echo "<tr><td><a href=index.php?Mode=Bilgisayar&kitapid=".$TumBilgisayar["kitapid"]." class=SiteLink>* ".$TumBilgisayar["kitapadi"]." (".$TumBilgisayar["yayinevi"].")</a></td></tr>";
}
?>
<tr>
<td>&nbsp;</td>
</tr>
</table>
<? }else{
$SQLRoman="select kitaplar.*,yazarlar.adsad from kitaplar left join yazarlar
on kitaplar.yazar=yazarlar.yazarid where(kitaplar.kitapid='".$kitapid."')";
$Roman=mysql_fetch_array(mysql_query($SQLRoman));
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="2"><font class="Baslik"><? echo $Roman["kitapadi"];?></font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td rowspan="5" valign="top"><img src="images/<? echo $Roman["resim"];?>"></td>
<td><font class="Yazi"><b>Yazar:</b><? echo $Roman["adsad"];?></font></td>
</tr>
<tr>
<td><font class="Yazi"><b>Yayýnevi:</b><? echo $Roman["yayinevi"];?></font></td>
</tr>
<tr>
<td><font class="Yazi"><b>Fiyat:</b><? echo $Roman["fiyat"];?>YTL</font></td>
</tr>
<tr>
<td><font class="Yazi"><b>Sayfa Sayýsý:</b><? echo $Roman["sayfa"];?></font></td>
</tr>
<tr>
<td><font class="Yazi"><b>Basým Tarihi:</b>
<?
if($Roman["basimtarihi"]=="0000-00-00"){
echo "Baskýda";
}else{
echo date("m.Y".strtotime($Roman["basimtarihi"]));
}
?>
</font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><font class="Yazi"><? echo $Roman["tanitim"];?></font></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>
<?}?>
