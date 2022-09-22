<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Form 013 Toplamları</title>
<link href="Style.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="jquery-latest.pack.js"></script>


<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>	
</head>
<body>
<form action="023kekle.php" method="get" name="kaydet">

<?php
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
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
 <table class="style6" border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th  align="right" bordercolor="white" bgcolor="yellow">
<label for="selectil" class="style3">İL:</label>
</th >
<th bordercolor="white" bgcolor="yellow" bgcolor="yellow">
 <select name="selectil" onChange="getilce(this.value)" onclick="toplamil();">
	<option value=""><?php echo "İli Seçiniz";?></option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value="<?=$row['ilid']?>"><?=$row['ilad']?></option>
<? } ?>
	</select>&nbsp;&nbsp;
 </th>
<th  align="right" bordercolor="white" bgcolor="yellow">
  <label for="selectilce" class="style3" >İLÇE:</label>
  </th>
  <th bordercolor="white" bgcolor="yellow">
 <div id="statediv"><select name="selectilce">
	<option><?php echo "Önce İli Seçiniz";?></option>
        </select>&nbsp;&nbsp;</div>
   
 </th> 
<th align="right" bordercolor="white" bgcolor="yellow" >
  <label for="selectoc" class="style3">AİLE HEKİMLİĞİ:</label>
  </th>
  <th bordercolor="white" bgcolor="yellow">
 <div id="citydiv"><select id="selectoc" name="selectoc" >
	<option><?php echo "Önce İlçeyi Seçiniz";?></option>
        </select>&nbsp;&nbsp;</div>
 </th>
 <th  align="right" bordercolor="white" bgcolor="yellow">
<?php

//mysql baglantisi

$resultyil = @mysql_query("select distinct yiladi from yil order by yiladi asc");

?>


  <label for="selectyil" class="style3">YIL:</label>
  </th>
  <th bordercolor="white" bgcolor="yellow">
 <input name="selectyil" type="text" id="selectyil" value="<?php echo date("Y"); ?>">
 &nbsp;&nbsp;
  </th>
  <th align="right" bordercolor="white" bgcolor="yellow">    
<?php

//mysql baglantisi

$resultay = @mysql_query("select distinct ayadi from ay order by ayid asc");

?>


  <label for="selectay" class="style3">AY:</label>
  </th>
  <th bordercolor="white" bgcolor="yellow">
 <select name="selectay" id="selectay" onchange="kontrol1();" onclick="toplamay();"/>
 
    <?php

while ($katay=mysql_fetch_assoc($resultay) ) {
echo '<option>'.$katay['ayadi'].'</option>';
}
@mysql_close($dbh);   
?>
</select>
</th>
</tr>
</table>
<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>  


<th class="style6" width="5%" align="center" bordercolor="white" bgcolor="white" colspan="10"><div style="font-family:Arial, Helvetica, sans-serif" style="font-size:14px,border-style:none" id="sonuc"></div></th>
</tr>
<tr>
<th class="style6" width="5%" align="center" bordercolor="white" bgcolor="white" colspan="10"><div style="font-family:Arial, Helvetica, sans-serif" style="font-size:14px,border-style:none" id="sonucxxx"></div></th>
</tr>
<tr>
<th class="style6" width="5%" align="center" bordercolor="white" bgcolor="white" colspan="10"><div style="font-family:Arial, Helvetica, sans-serif" style="font-size:14px,border-style:none" id="sonuckay"></div></th>
</tr>
</table>
</form>
</body>
</html>
