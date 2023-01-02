<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9"/>
  <title>Kaya Yayınevi</title>
  <link href="Style.css" rel="stylesheet" type="text/css"/>
  <script language="JavaScript" src="toplama.js" type="text/javascript">
</script>	
  </head>
  <body>
 <?php
/*$link = mysql_connect('localhost', 'root', 'malika'); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('frm023');*/
include("con_023.php");
?>
<?php

//mysql baglantisi
$result = @mysql_query("select ilid,ilad from il order by ilad asc");
?>
 <table border="0" bordercolor="#000000" align="left" cellpadding="0" cellspacing="0" width="80%">
<tr>
<th  align="right">
<label for="selectil">İL:</label>
</th>
<th>
 <select name="selectil" onChange="getState(this.value)">
	<option value="">İli Seçiniz</option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value="<?=$row['ilid']?>"><?=$row['ilad']?></option>
<? } ?>
	</select>&nbsp;&nbsp;
 </th>
<th  align="right">
  <label for="selectilce">İLÇE:</label>
  </th>
  <th>
 <div id="statediv"><select name="selectilce" >
	<option>Önce İli Seçiniz</option>
        </select>&nbsp;&nbsp;</div>
   
 </th> 
<th align="right" >
  <label for="select">SAĞLIK OCAĞI:</label>
  </th>
  <th>
 <div id="citydiv"><select name="select">
	<option>Önce İlçeyi Seçiniz</option>
        </select>&nbsp;&nbsp;</div>
 </th>
 <th  align="right">
<?php

//mysql baglantisi

$resultyil = @mysql_query("select distinct yiladi from yil order by yiladi asc");

?>


  <label for="selectyil">YIL:</label>
  </th>
  <th>
 <input name="selectyil" type="text" id="selectyil" value="<?php echo date("Y"); ?>">
 &nbsp;&nbsp;
  </th>
  <th align="right">    
<?php

//mysql baglantisi

$resultay = @mysql_query("select distinct ayadi from ay order by ayid asc");

?>


  <label for="selectay">AY:</label>
  </th>
  <th>
 <select name="selectay" id="selectay">
    <?php

while ($katay=mysql_fetch_assoc($resultay) ) {
echo '<option>'.$katay['ayadi'].'</option>';
}
//mysql_close($dbh);   
?>
</select>
</th>
<th>

</table>
<br>
<br>

 <table width="%100" border="0" align="center" cellpadding="0" cellspacing="0" >
  <tr>
  <td height="70" bgcolor="#ACACAC"><table width="700" height="70" border="0" cellpadding="0" cellspacing="0">
  <tr>
  <td width="277"><img src="images/logo.gif" width="277" height="67"/></td>
<td width="100">&nbsp;</td>
<td><a href="index.php" class="UstLink"><img src="images/anasayfa.gif" width="18" height="18" border="0" align="absmiddle"/>Anasayfa</a></td>
<td>&nbsp;</td>
<td><font class="SiteYazi" family="tahoma" size="6"><? echo date("d.m.Y");?></font><td>
</tr>
</table><td>
</tr>
<tr>
<td bgcolor="#ADADAD"><table border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ADADAD">
<tr>
<td><img src="images/solbuton.gif" width="21" height="57" /></td>
<td background="images/butonbg.gif"><a href="index.php?Mode=Romanlar&kitapid=tumu" class="MenuLink">Göster</a></td>
<td><img src="images/sagbuton.gif" width="21" height="57" /></td>
<td width="10">&nbsp;</td>
 <td><img src="images/solbuton.gif" width="21" height="57" /></td>
<td background="images/butonbg.gif"><a href="index.php?Mode=Bilgisayar&kitapid=tumu" class="MenuLink">Değiştir</a></td>
 <td><img src="images/sagbuton.gif" width="21" height="57" /></td>
<td width="10">&nbsp;</td>
 <td><img src="images/solbuton.gif" width="21" height="57" /></td>
  <td background="images/butonbg.gif"><a href="index.php?Mode=Yazarlar&yazarid=tumu" class="MenuLink">Yazarlar</a></td>
 <td><img src="images/sagbuton.gif" width="21" height="57" /></td>
<td width="10">&nbsp;</td>
 <td><img src="images/solbuton.gif" width="21" height="57" /></td>
  <td background="images/butonbg.gif"><a href="index.php?Mode=BizeUlasin" class="MenuLink">Bize Ulaşın</a></td>
<td><img src="images/sagbuton.gif" width="21" height="57" /></td>
<td width="10">&nbsp;</td>
</tr>
</table></td>
</tr>
<tr>
<td height="10"></td>
</tr>
<tr>
<td>

<?
$conn=mysql_connect("localhost","root","malika");
if($conn){
if(mysql_select_db("katalog",$conn))
{
@$Mode=$_GET["Mode"];
switch ($Mode){
case "Romanlar":
include 'cerceve.php';break;
case "Yazarlar":
include 'yazarlar.php';break;
case "Bilgisayar":
include 'frm023degistir.php';break;
case "BizeUlasin":
include 'BizeUlasin.php';break;
case "BizeUlasinKayit":
include 'BizeUlasinKayit.php';break;
default: include 'anasayfa.php';break;
 }
}else{
echo "OOOPPPSSS !!!<br>Veritabanı Hatası";
}
 }else{
echo "OOOPPPSSS !!!<br>Veritabanı Hatası";
}
@mysql_close($conn);
?>
</td>
</tr>
<td gcolor=#CFCFCF"><div align="center">
<a href="index.php?Mode=Romanlar&kitapid=tumu" class="AltLink">Romanlar</a> |
<a href="index.php?Mode=Bilgisayar&kitapid=tumu" class="AltLink">Bilgisayar Kitapları</a> |
<a href="index.php?Mode=Yazarlar&yazarid=tumu" class="AltLink">Yazarlar</a> |
<a href="index.php?Mode=BizeUlasin" class="AltLink">Bize Ulaşın</a><br />
<font class="SiteYazi">&copy;2005 Kaya Yayınevi</font>
</div></td>
</tr></table>
</body>

</html>
