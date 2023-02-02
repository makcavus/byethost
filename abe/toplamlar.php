<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Akut Barsak Enfeksiyonları Vaka Toplamları</title>
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
 <table class="cizgi" border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th width="2%"  align="right" bordercolor="white" bgcolor="yellow">
<label for="selectil" class="style3">İL:</label></th >
<th width="9%" bordercolor="white" bgcolor="yellow">
 <select name="selectil" onChange="getilce(this.value)" onclick="toplamil();">
	<option value=""><?php echo "İli Seçiniz";?></option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value="<?=$row['ilid']?>"><?=$row['ilad']?></option>
<? } ?>
	</select>&nbsp;&nbsp; </th>
<th width="4%"  align="right" bordercolor="white" bgcolor="yellow">
  <label for="selectilce" class="style3" >İLÇE:</label>  </th>
  <th width="11%" bordercolor="white" bgcolor="yellow">
 <div id="statediv"><select name="selectilce">
	<option><?php echo "Önce İli Seçiniz";?></option>
      </select>&nbsp;&nbsp;</div> </th> 
<th width="11%" align="right" bordercolor="white" bgcolor="yellow" >
  <label for="selectoc" class="style3">AİLE HEKİMLİĞİ:</label>  </th>
  <th width="13%" bordercolor="white" bgcolor="yellow">
 <div id="citydiv"><select id="selectoc" name="selectoc" >
	<option><?php echo "Önce İlçeyi Seçiniz";?></option>
      </select>&nbsp;&nbsp;</div> </th>
 <th width="2%"  align="right" bordercolor="white" bgcolor="yellow">
<?php

//mysql baglantisi

$resultyil = @mysql_query("select distinct yiladi from yil order by yiladi asc");

?>


  <label for="selectyil" class="style3">YIL:</label>  </th>
  <th width="8%" bordercolor="white" bgcolor="yellow"><input name="selectyil" size="5" type="text" id="selectyil" value="<?php echo date("Y"); ?>" />    &nbsp;&nbsp;  </th>
  <th width="3%" align="right" bordercolor="white" bgcolor="yellow">    
<?php

//mysql baglantisi

$resultay = @mysql_query("select distinct ayadi from ay order by ayid asc");

?>


  <label for="selectay" class="style3">AY:</label>  </th>
  <th width="9%" bordercolor="white" bgcolor="yellow"><select name="selectay" id="selectay" onchange="toplamay();" onclick="toplamay();"/>
  
  <?php

while ($katay=mysql_fetch_assoc($resultay) ) {
echo '<option>'.$katay['ayadi'].'</option>';
}
@mysql_close($dbh);   
?>
</select></th>
</tr
></TABLE>
<table class="cizgi" border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th align="left" width="15%" bordercolor="white" bgcolor="yellow">
         <label  for="donem" class="style3">
         <input type="radio" name="sec" value="ilsec" />
         İl&nbsp;&nbsp;</label>
     
       
           <label  for="donem" class="style3">
           <input type="radio" name="sec" value="ilcesec" />
           İlçe&nbsp;&nbsp;</label>
       
      
           <label  for="donem" class="style3">
           <input type="radio" name="sec" value="aheksec" />
           A.Hek.&nbsp;&nbsp;</label>   </th>
  <th width="15%" align="left" bordercolor="white" bgcolor="yellow">
<label  for="donem" class="style3">&nbsp;&nbsp;DÖNEM:</label>
<select name="donem" tabindex="6"  onclick="toplamdonem();">
<option value="">Dönem Seçiniz</option>
<option value="ilk">1.Dönem</option>
<option value="ikinci">2.Dönem</option>
<option value="ucuncu">3.Dönem</option>
<option value="son">4.Dönem</option>
</select></th>
<th width="40%" align="center" bordercolor="white" bgcolor="yellow">
  <label for="selectoc" class="style3">TARİH ARALIĞI:&nbsp;&nbsp;</label>

<select name="selecttarilk" id="selecttarilk" onclick="toplamaralik();"/>

<?php
//3 GÜN ÖNCE
$bitis = date("d.m.Y");
$once = time()-(8760*60*60);
$baslangic =date("d.m.Y",$once); 
$kes1=explode('.',$baslangic); 
$kes2=explode('.',$bitis); 
$time1=mktime(0,0,0,$kes1[1],$kes1[0],$kes1[2]); 
$time2=mktime(0,0,0,$kes2[1],$kes2[0],$kes2[2]); 
while($time1<=$time2) { 
$x=date('d.m.Y', ($time1)); 
$y=date('l', ($time1));
if($y=="Monday"){
$z="Pazartesi";
}
if($y=="Tuesday"){
$z="Sali";
}
if($y=="Wednesday"){
$z="Carsamba";
}
if($y=="Thursday"){
$z="Persembe";
}
if($y=="Friday"){
$z="Cuma";
}
if($y=="Saturday"){
$z="Cumartesi";
}
if($y=="Sunday"){
$z="Pazar";
}

echo '<option>'.$x.' '.$z.'</option>';

$time1=$time1+86400; 
} 
?>
</select>
<label  for="donem" class="style3">&nbsp;&nbsp;ile&nbsp;&nbsp;</label>
<select name="selecttarson" id="selecttarson" onclick="toplamaralik();"/>
<?php
//3 GÜN ÖNCE
$bitis = date("d.m.Y");
$once = time()-(8760*60*60);
$baslangic =date("d.m.Y",$once); 
$kes1=explode('.',$baslangic); 
$kes2=explode('.',$bitis); 
$time1=mktime(0,0,0,$kes1[1],$kes1[0],$kes1[2]); 
$time2=mktime(0,0,0,$kes2[1],$kes2[0],$kes2[2]); 
while($time1<=$time2) { 
$x=date('d.m.Y', ($time1)); 
$y=date('l', ($time1));
if($y=="Monday"){
$z="Pazartesi";
}
if($y=="Tuesday"){
$z="Sali";
}
if($y=="Wednesday"){
$z="Carsamba";
}
if($y=="Thursday"){
$z="Persembe";
}
if($y=="Friday"){
$z="Cuma";
}
if($y=="Saturday"){
$z="Cumartesi";
}
if($y=="Sunday"){
$z="Pazar";
}

echo '<option selected>'.$x.' '.$z.'</option>';

$time1=$time1+86400; 
} 
?>
</select><label  for="donem" class="style3">&nbsp;&nbsp;arasında</label></th>
  
<th align="right" width="30%" bordercolor="white" bgcolor="yellow">
<label for="selectoc" class="style3">ÖNCEKİ :&nbsp;&nbsp;</label>
  <label  for="donem" class="style3">
<input type="radio" name="radio" id="iki" value="iki" onclick="sonikiyil()" /> 
1.Yıl</label>
  
  <label  for="donem" class="style3">
<input type="radio" name="radio" id="uc" value="uc" onclick="sonucyil()" />    
2.Yıl </label>
  
<label for="selectoc" class="style3">&nbsp;&nbsp;KARŞILAŞTIRMA&nbsp;&nbsp;</label></th>
</th>
</tr>
</table>
<table class="style6" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>  


<th class="style6" width="5%" align="center" bordercolor="white" bgcolor="white" colspan="10"><div style="font-family:Arial, Helvetica, sans-serif","font-size:14px,border-style:none" id="sonuc"></div></th>
</tr>
<tr>
<th class="style6" width="5%" align="center" bordercolor="white" bgcolor="white" colspan="10"><div style="font-family:Arial, Helvetica, sans-serif","font-size:14px,border-style:none" id="sonucxxx"></div></th>
</tr>
<tr>
<th class="style6" width="5%" align="center" bordercolor="white" bgcolor="white" colspan="10"><div style="font-family:Arial, Helvetica, sans-serif","font-size:14px,border-style:none" id="sonuckay"></div></th>
</tr>
</table>
</form>
</body>
</html>
