<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Form 023 Kay�t Giri�i</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style3 {font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 13px;
	font-style:normal;}
.style4 {color: #000000}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 13px;
	font-style:normal;
}
-->
</style>
<script type="text/javascript" src="jquery-latest.pack.js"></script>


<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>	
</head>
<body>
<form action="023kekle.php" method="get" name="kaydet">

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
 <table border="1" bordercolor="#000000" align="left" cellpadding="0" cellspacing="0" width="98%">
<tr>
<th  align="right" bordercolor="white" bgcolor="yellow">
<label for="selectil">�L:</label>
</th >
<th bordercolor="white" bgcolor="yellow" bgcolor="yellow" >
 <select name="selectil" onChange="getState(this.value)">
	<option value="">�li Se�iniz</option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value="<?=$row['ilid']?>"><?=$row['ilad']?></option>
<? } ?>
	</select>&nbsp;&nbsp;
 </th>
<th  align="right" bordercolor="white" bgcolor="yellow">
  <label for="selectilce">�L�E:</label>
  </th>
  <th bordercolor="white" bgcolor="yellow">
 <div id="statediv"><select name="selectilce" >
	<option>�nce �li Se�iniz</option>
        </select>&nbsp;&nbsp;</div>
   
 </th> 
<th align="right" bordercolor="white" bgcolor="yellow" >
  <label for="selectoc">SA�LIK OCA�I:</label>
  </th>
  <th bordercolor="white" bgcolor="yellow">
 <div id="citydiv"><select id="selectoc" name="selectoc" >
	<option>�nce �l�eyi Se�iniz</option>
        </select>&nbsp;&nbsp;</div>
 </th>
 <th  align="right" bordercolor="white" bgcolor="yellow">
<?php

//mysql baglantisi

$resultyil = @mysql_query("select distinct yiladi from yil order by yiladi asc");

?>


  <label for="selectyil">YIL:</label>
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


  <label for="selectay">AY:</label>
  </th>
  <th bordercolor="white" bgcolor="yellow">
 <select name="selectay" id="selectay" onclick="kontrol();"/>
 
    <?php

while ($katay=mysql_fetch_assoc($resultay) ) {
echo '<option>'.$katay['ayadi'].'</option>';
}
mysql_close($dbh);   
?>
</select>
</th>
<th class="style5" width="1%" align="right" bordercolor="white" bgcolor="yellow" colspan="2"><input type="button" name="kaydet" id="kaydet" value="Kaydet" onclick="kayit();" /></th>
</tr>
</table>
<br>
<br>
<table border="1" bordercolor="#000000" align="left" cellpadding="0" cellspacing="0" width="98%">
<tr>  


<th class="style5" width="5%" align="center" bordercolor="white" bgcolor="white" colspan="10"><div style="font-family:Arial, Helvetica, sans-serif" style="font-size:14px" id="sonuc"></div></th>
</tr>
</table>
<?php
//include("topla.php");
//include("topla1.php");
//include("topla2.php");
//include("topla3.php");
//include("topla4.php");
//include("topla5.php");
?>
 <p>&nbsp;</p>
 <table border="1" bordercolor="#000000" align="left" cellpadding="0" cellspacing="0" width="80%">
    <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Muayene Say�s�</th>
     <th class="style5" width="5%" align="center" bordercolor="#000000" bgcolor="white" colspan="3">
       <input name="v1"  type="text" value="0" size="15" tabindex="1"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white"  rowspan="8" colspan="9"></th>
	 <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" rowspan="6" colspan="1">DO �UM LAR</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Hastanede</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input id="v7" name="v7"  type="text" value="0" size="8" tabindex="7" /> </th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Sa�l�k Kurumuna Sevk</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="3"><input name="v2" type="text" value="0" size="15" tabindex="2"/></th>
	 <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Hekim</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input id="v8" name="v8"  type="text" value="0" size="8" tabindex="8" /></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;K���k Cerrahi M�dahale</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="3"><input name="v3"  type="text" value="0" size="15" tabindex="3"/></th>
	 <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Ebe</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input id="v9" name="v9"  type="text" value="0" size="8" tabindex="9"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" rowspan="3" colspan="1">ADL�</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="6">&nbsp;Klasik Otopsi Say�s�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="3"><input id="v4" name="v4"  type="text" value="0" size="15" tabindex="4" /></th>
	 <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Di�er Sa�l�k Personeli Yard�m� ile</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input id="v10" name="v10"  type="text" value="0" size="8" tabindex="10"/> </th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="6">&nbsp;Adli Rapor Say�s�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="3"><input id="v5" name="v5"  type="text" value="0" size="15" tabindex="5"  /> </th>
	 <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Sa�l�k Personeli Yard�m� Olmadan</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input id="v11" name="v11"  type="text" value="0" size="8" tabindex="11" /> </th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="5">&nbsp;Toplam</th>
	 <th class="style5" width="5%" align=""  bgcolor="white" colspan="1"><input type="button"  onclick="topla();" value=" = " /></th>
	 <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="3"><input id="sonucu" name="sonucu" type="text" size="15" readonly="true" value="0"/> </th>
	 <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;TOPLAM</th>
	 <th class="style5" width="5%" align=""  bgcolor="white" colspan="1"><input type="button" onclick="topla1();" value=" = " /></th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input id="sonuc1" name="sonuc1" type="text" size="8" readonly="true" value="0"/> </th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Defin Ruhsat� Say�s�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="3"><input name="v6"  type="text" value="0" size="15" tabindex="6"/></th>
	 <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" rowspan="5" colspan="1">�ZLEM LER</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Gebe</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input name="v19"  type="text" value="0" size="8" tabindex="19"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="19"></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Lo�usa</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input name="v20"  type="text" value="0" size="8" tabindex="20"/> </th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="18">LABARATUVAR �ALI�MALARI</th>
     <th class="style5" width="5%" align=""  bgcolor="white" colspan="1" rowspan="3"></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Bebek</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input name="v21"  type="text" value="0" size="8" tabindex="21"/> </th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="3">�drar</th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">Kan</th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">D��k�</th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">Seroloji</th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="3">S�tma Kan�</th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="3">Gebelik Testi</th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">Di�er</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;�ocuk</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input name="v22"  type="text" value="0" size="8" tabindex="22"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="1">Say�</th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="3"><input name="v12"  type="text" value="0" size="8" tabindex="12"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input name="v13"  type="text" value="0" size="8" tabindex="13"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input name="v14"  type="text" value="0" size="8" tabindex="14"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input name="v15"  type="text" value="0" size="8" tabindex="15"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="3"><input name="v16"  type="text" value="0" size="15" tabindex="16"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="3"><input name="v17"  type="text" value="0" size="15" tabindex="17"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input name="v18"  type="text" value="0" size="8" tabindex="18"/></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;15-49 Ya� Kad�n</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input name="v23"  type="text" value="0" size="8" tabindex="23"/></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="white" bgcolor="white" colspan="30"><br /></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="#000000" bgcolor="white" colspan="30">B�T�N �LENLER�N YA� VE C�NS GRUPLARINA G�RE DA�ILIMI</th>
   </tr>
   <tr>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">Ya�</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">0-7 G�n</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">8-28 G�n</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">29-364 G�n</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">1-4 Ya�</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">5-9 Ya�</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">10-14 Ya�</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">15-24 Ya�</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">25-44 Ya�</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">45-49 Ya�</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">50-64 Ya�</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">65 + Ya�</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="6">TOPLAM</th>
   </tr>
   <tr>
     <th class="style5" width="3%" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Cinsiyet</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">E</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">K</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">E</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">K</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">E</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">K</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">E</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">K</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">E</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">K</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">E</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">K</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">E</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">K</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">E</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">K</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">E</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">K</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">E</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">K</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">E</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="1">K</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="3">E</th>
     <th class="style5" width="3%" align="center" bordercolor="#000000" bgcolor="white" colspan="3">K</th>
   </tr>
   <tr>
     <th class="style5" width="3%" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Say�</th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v24" name="v24"  type="text" value="0" size="1" tabindex="24" /></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v25" name="v25"  type="text" value="0" size="1" tabindex="25"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v26" name="v26"  type="text" value="0" size="1" tabindex="26"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v27" name="v27"  type="text" value="0" size="1" tabindex="27"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v28" name="v28"  type="text" value="0" size="1" tabindex="28" /></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v29" name="v29"  type="text" value="0" size="1" tabindex="29"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v30" name="v30"  type="text" value="0" size="1" tabindex="30" /></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v31" name="v31"  type="text" value="0" size="1" tabindex="31"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v32" name="v32"  type="text" value="0" size="1" tabindex="32"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v33" name="v33"  type="text" value="0" size="1" tabindex="33"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v34" name="v34"  type="text" value="0" size="1" tabindex="34"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v35" name="v35"  type="text" value="0" size="1" tabindex="35"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v36" name="v36"  type="text" value="0" size="1" tabindex="36"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v37" name="v37"  type="text" value="0" size="1" tabindex="37"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v38" name="v38"  type="text" value="0" size="1" tabindex="38"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v39" name="v39"  type="text" value="0" size="1" tabindex="39"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v40" name="v40"  type="text" value="0" size="1" tabindex="40"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v41" name="v41"  type="text" value="0" size="1" tabindex="41"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v42" name="v42"  type="text" value="0" size="1" tabindex="42"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v43" name="v43"  type="text" value="0" size="1" tabindex="43"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v44" name="v44"  type="text" value="0" size="1" tabindex="44"/></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="v45" name="v45"  type="text" value="0" size="1" tabindex="45"/></th>
	 <th class="style5" width="5%" align=""  bgcolor="white" colspan="1"><input type="button" onclick="topla2();" value=" = " /></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="sonuc2" name="sonuc2" type="text" size="6" readonly="true" value="0"/></th>
	 <th class="style5" width="5%" align=""  bgcolor="white" colspan="1"><input type="button"onclick="topla3();" value=" = " /></th>
     <th class="style5" width="3%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="sonuc3" name="sonuc3" type="text" size="6" readonly="true" value="0"/></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="white" bgcolor="white" colspan="30"><br /></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="#000000" bgcolor="white" colspan="30">HALK E��T�M� VE H�ZMET��� E��T�MLER�N SEANS SAYILARI</th>
   </tr>
   <tr>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="4">Konular</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">01</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">02</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">03</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">04</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">05</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">06</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">07</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">08</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">09</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">10</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">11</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">12</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2">TOPLAM</th>
   </tr>
   <tr>
     <th class="style5" width="6%" align="left"bordercolor="#000000" bgcolor="white" colspan="4">&nbsp;HALK E��T�M�</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v46" name="v46"  type="text" value="0" size="2" tabindex="46"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v47" name="v47"  type="text" value="0" size="2" tabindex="47"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v48" name="v48"  type="text" value="0" size="2" tabindex="48"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v49" name="v49"  type="text" value="0" size="2" tabindex="49"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v50" name="v50"  type="text" value="0" size="2" tabindex="50"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v51" name="v51"  type="text" value="0" size="2" tabindex="51"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v52" name="v52"  type="text" value="0" size="2" tabindex="52"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v53" name="v53"  type="text" value="0" size="2" tabindex="53"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v54" name="v54"  type="text" value="0" size="2" tabindex="54"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v55" name="v55"  type="text" value="0" size="2" tabindex="55"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v56" name="v56"  type="text" value="0" size="2" tabindex="56"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v57" name="v57"  type="text" value="0" size="2" tabindex="57"/></th>
	 <th class="style5" width="5%" align=""  bgcolor="white" colspan="1"><input type="button"  onclick="topla4();" value=" = " /></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="sonuc4" name="sonuc4" type="text" size="4" readonly="true" value="0"/></th>
   </tr>
   <tr>
     <th class="style5" width="6%" align="left"bordercolor="#000000" bgcolor="white" colspan="1" rowspan="5">H�ZMET ��� E��T�M</th>
     <th class="style5" width="6%" align="left"bordercolor="#000000" bgcolor="white" colspan="3">&nbsp;Hekim</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v58" name="v58"  type="text" value="0" size="2" tabindex="58"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v59" name="v59"  type="text" value="0" size="2" tabindex="59"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v60" name="v60"  type="text" value="0" size="2" tabindex="60"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v61" name="v61"  type="text" value="0" size="2" tabindex="61"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v62" name="v62"  type="text" value="0" size="2" tabindex="62"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v63" name="v63"  type="text" value="0" size="2" tabindex="63"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v64" name="v64"  type="text" value="0" size="2" tabindex="64"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v65" name="v65"  type="text" value="0" size="2" tabindex="65"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v66" name="v66"  type="text" value="0" size="2" tabindex="66"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v67" name="v67"  type="text" value="0" size="2" tabindex="67"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v68" name="v68"  type="text" value="0" size="2" tabindex="68"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v69" name="v69"  type="text" value="0" size="2" tabindex="69"/></th>
	 <th class="style5" width="5%" align=""  bgcolor="white" colspan="1"><input type="button"  onclick="topla5();" value=" = " /></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="sonuc5" name="sonuc5" type="text" size="4" readonly="true" value="0"/></th>
   </tr>
   <tr>
     <th class="style5" width="6%" align="left"bordercolor="#000000" bgcolor="white" colspan="3">&nbsp;Hem�ire</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v70" name="v70"  type="text" value="0" size="2" tabindex="70"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v71" name="v71"  type="text" value="0" size="2" tabindex="71"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v72" name="v72"  type="text" value="0" size="2" tabindex="72"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v73" name="v73"  type="text" value="0" size="2" tabindex="73"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v74" name="v74"  type="text" value="0" size="2" tabindex="74"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v75" name="v75"  type="text" value="0" size="2" tabindex="75"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v76" name="v76"  type="text" value="0" size="2" tabindex="76"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v77" name="v77"  type="text" value="0" size="2" tabindex="77"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v78" name="v78"  type="text" value="0" size="2" tabindex="78"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v79" name="v79"  type="text" value="0" size="2" tabindex="79"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v80" name="v80"  type="text" value="0" size="2" tabindex="80"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v81" name="v81"  type="text" value="0" size="2" tabindex="81"/></th>
	 <th class="style5" width="5%" align=""  bgcolor="white" colspan="1"><input type="button"  onclick="topla6();" value=" = " /></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="sonuc6" name="sonuc6" type="text" size="4" readonly="true" value="0"/></th>
   </tr>
   <tr>
     <th class="style5" width="6%" align="left"bordercolor="#000000" bgcolor="white" colspan="3">&nbsp;Sa�l�k Memuru</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v82" name="v82"  type="text" value="0" size="2" tabindex="82"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v83" name="v83"  type="text" value="0" size="2" tabindex="83"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v84" name="v84"  type="text" value="0" size="2" tabindex="84"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v85" name="v85"  type="text" value="0" size="2" tabindex="85"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v86" name="v86"  type="text" value="0" size="2" tabindex="86"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v87" name="v87"  type="text" value="0" size="2" tabindex="87"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v88" name="v88"  type="text" value="0" size="2" tabindex="88"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v89" name="v89"  type="text" value="0" size="2" tabindex="89"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v90" name="v90"  type="text" value="0" size="2" tabindex="90"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v91" name="v91"  type="text" value="0" size="2" tabindex="91"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v92" name="v92"  type="text" value="0" size="2" tabindex="92"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v93" name="v93"  type="text" value="0" size="2" tabindex="93"/></th>
	 <th class="style5" width="5%" align=""  bgcolor="white" colspan="1"><input type="button"  onclick="topla7();" value=" = " /></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="sonuc7" name="sonuc7" type="text" size="4" readonly="true" value="0"/></th>
   </tr>
   <tr>
     <th class="style5" width="6%" align="left"bordercolor="#000000" bgcolor="white" colspan="3">&nbsp;Ebe</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v94" name="v94"  type="text" value="0" size="2" tabindex="94"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v95" name="v95"  type="text" value="0" size="2" tabindex="95"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v96" name="v96"  type="text" value="0" size="2" tabindex="96"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v97" name="v97"  type="text" value="0" size="2" tabindex="97"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v98" name="v98"  type="text" value="0" size="2" tabindex="98"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v99" name="v99"  type="text" value="0" size="2" tabindex="99"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v100" name="v100"  type="text" value="0" size="2" tabindex="100"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v101" name="v101"  type="text" value="0" size="2" tabindex="101"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v102" name="v102"  type="text" value="0" size="2" tabindex="102"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v103" name="v103"  type="text" value="0" size="2" tabindex="103"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v104" name="v104"  type="text" value="0" size="2" tabindex="104"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v105" name="v105"  type="text" value="0" size="2" tabindex="105"/></th>
	<th class="style5" width="5%" align=""  bgcolor="white" colspan="1"><input type="button"  onclick="topla8();" value=" = " /></th> 
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="sonuc8" name="sonuc8" type="text" size="4" readonly="true" value="0"/></th>
   </tr>
   <tr>
     <th class="style5" width="6%" align="left"bordercolor="#000000" bgcolor="white" colspan="3">&nbsp;Di�er Personel</th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v106" name="v106"  type="text" value="0" size="2" tabindex="106"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v107" name="v107"  type="text" value="0" size="2" tabindex="107"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v108" name="v108"  type="text" value="0" size="2" tabindex="108"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v109" name="v109"  type="text" value="0" size="2" tabindex="109"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v110" name="v110"  type="text" value="0" size="2" tabindex="110"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v111" name="v111"  type="text" value="0" size="2" tabindex="111"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v112" name="v112"  type="text" value="0" size="2" tabindex="112"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v113" name="v113"  type="text" value="0" size="2" tabindex="113"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v114" name="v114"  type="text" value="0" size="2" tabindex="114"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v115" name="v115"  type="text" value="0" size="2" tabindex="115"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v116" name="v116"  type="text" value="0" size="2" tabindex="116"/></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="2"><input id="v117" name="v117"  type="text" value="0" size="2" tabindex="117"/></th>
	 <th class="style5" width="5%" align=""  bgcolor="white" colspan="1"><input type="button"  onclick="topla9();" value=" = " /></th>
     <th class="style5" width="6%" align="center"bordercolor="#000000" bgcolor="white" colspan="1"><input id="sonuc9" name="sonuc9" type="text" size="4" readonly="true" value="0"/></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="white" bgcolor="white" colspan="30"><br /></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="#000000" bgcolor="white" colspan="30"></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="12">GEBE DURUMU</th>
     <th class="style5" width="5%" align=""  bgcolor="white" colspan="6" rowspan="10"></th>
     <th class="style5" width="5%" align="center" bordercolor="#000000" bgcolor="white" colspan="12">BEBEK DURUMU</th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">a</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Ge�en Aydan Devreden</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v118"  type="text" value="0" size="15" tabindex="118"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">a</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Ge�en Aydan Devreden</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v127"  type="text" value="0" size="15" tabindex="127"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">b</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay ��inde Tesbit Edilen</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v119"  type="text" value="0" size="15" tabindex="119"/> </th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">b</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay ��inde Tesbit Edilen</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v128"  type="text" value="0" size="15" tabindex="128"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">c</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Ba�ka B�lgeden Gelen</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v120"  type="text" value="0" size="15" tabindex="120"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">c</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Ba�ka B�lgeden Gelen</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v129"  type="text" value="0" size="15" tabindex="129"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">d</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay ��inde D���k Yapan</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v121"  type="text" value="0" size="15" tabindex="121"/> </th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">d</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay ��inde Canl� Do�an</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v130"  type="text" value="0" size="15" tabindex="130"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">e</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay ��inde Do�uran</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v122"  type="text" value="0" size="15" tabindex="122"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">e</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay ��inde �len</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v131"  type="text" value="0" size="15" tabindex="131"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">f</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay ��inde �len</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v123"  type="text" value="0" size="15" tabindex="123"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">f</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;B�lgeden Ayr�lan</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v132"  type="text" value="0" size="15" tabindex="132"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">g</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;B�lgeden Ayr�lan</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v124"  type="text" value="0" size="15" tabindex="124"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">g</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bebeklikten ��kan</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v133"  type="text" value="0" size="15" tabindex="133"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" >h</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Ay Sonu Gebe Mevcudu<br />
       &nbsp;(a+b+c)-(d+e+f+g)</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v125"  type="text" value="0" size="15" tabindex="125"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">h</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Ay Sonu Bebek Mevcudu<br />
       &nbsp;(a+b+c+d)-(e+f+g)</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v134"  type="text" value="0" size="15" tabindex="134"/></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="white" bgcolor="white" colspan="30"><br /></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="#000000" bgcolor="white" colspan="30"></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Do�um An�nda �len Gebe Say�s�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v126"  type="text" value="0" size="15" tabindex="126"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="6"></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;�l� Do�an Bebek Say�s�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v135"  type="text" value="0" size="15" tabindex="135"/></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="white" bgcolor="white" colspan="30"><br /></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="#000000" bgcolor="white" colspan="30"></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="12">LOHUSA DURUMU</th>
     <th class="style5" width="5%" align=""  bgcolor="white" colspan="6" rowspan="10"></th>
     <th class="style5" width="5%" align="center" bordercolor="#000000" bgcolor="white" colspan="12">�OCUK DURUMU</th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">a</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Ge�en Aydan Devreden</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v136"  type="text" value="0" size="15" tabindex="136"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">a</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Ge�en Aydan Devreden</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v144"  type="text" value="0" size="15" tabindex="144"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">b</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay ��inde Tesbit Edilen</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v137"  type="text" value="0" size="15" tabindex="137"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">b</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay ��inde Tesbit Edilen</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v145"  type="text" value="0" size="15" tabindex="145"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">c</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Ba�ka B�lgeden Gelen</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v138"  type="text" value="0" size="15" tabindex="138"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">c</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Ba�ka B�lgeden Gelen</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v146"  type="text" value="0" size="15" tabindex="146"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">d</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay Lohusal��a Ge�en</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v139"  type="text" value="0" size="15" tabindex="139"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">d</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay �ocuklu�a Ge�en</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v147"  type="text" value="0" size="15" tabindex="147"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">e</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay ��inde �len</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v140"  type="text" value="0" size="15" tabindex="140"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">e</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay ��inde �len</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v148"  type="text" value="0" size="15" tabindex="148"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">f</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;B�lgeden Ayr�lan</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v141"  type="text" value="0" size="15" tabindex="141"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">f</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;B�lgeden Ayr�lan</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v149"  type="text" value="0" size="15" tabindex="149"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">g</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Bu Ay Lohusal�ktan ��kan</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v142"  type="text" value="0" size="15" tabindex="142"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">g</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;�ocukluktan ��kan</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v150"  type="text" value="0" size="15" tabindex="150"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" >h</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Ay Sonu Lohusa Mevcudu<br />
       &nbsp;(a+b+c+d)-(e+f+g)</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v143"  type="text" value="0" size="15" tabindex="143"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white">h</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;Ay Sonu �ocuk Mevcudu<br />
       &nbsp;(a+b+c+d)-(e+f+g)</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v151"  type="text" value="0" size="15" tabindex="151"/></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="white" bgcolor="white" colspan="30"><br /></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="#000000" bgcolor="white" colspan="30"></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="12">D�� SA�LI�I B�LG�LER�</th>
     <th class="style5" width="5%" align=""  bgcolor="white" colspan="1" rowspan="10"></th>
     <th class="style5" width="5%" align="center" bordercolor="#000000" bgcolor="white" colspan="17">D���K DO�UM A�IRLIKLI BEBEK</th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Muayene Say�s�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v152"  type="text" value="0" size="15" tabindex="152"/></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="13">&nbsp;Do�um A��rl��� 1500 Gr.�n Alt�nda Olan</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v161"  type="text" value="0" size="15" tabindex="161"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Okul Taramalar�:Taranan ��renci Say�s�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v153"  type="text" value="0" size="15" tabindex="153"/></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="13">&nbsp;Do�um A��rl��� 1500-2500 Gr. Aras� Olan</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v162"  type="text" value="0" size="15" tabindex="162"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;12-45 Ya�ta Tesbit Edilen ��r�k Di� Say�s�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v154"  type="text" value="0" size="15" tabindex="154"/></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="22"></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Tesbit Edilen Di� Hastal�klar� Say�s�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v155"  type="text" value="0" size="15" tabindex="155"/></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="22"></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Tedavi Say�s�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v156"  type="text" value="0" size="15" tabindex="156"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="8">�O�UL DO�UMLAR</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8"></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;�ekim Say�s�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v157"  type="text" value="0" size="15" tabindex="157"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="6">�zelli�i</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2">Say�s�</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8"></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Sevk Say�s�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v158"  type="text" value="0" size="15" tabindex="158"/></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="6">&nbsp;�K�Z</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input name="v163"  type="text" value="0" size="5" tabindex="163"/></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="2"></th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="8">PREMAT�RE DO�UM SAYISI</th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8">&nbsp;Flor Uygulamas�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v159"  type="text" value="0" size="15" tabindex="159"/></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="6">&nbsp;���Z</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input name="v164"  type="text" value="0" size="5" tabindex="164"/></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="2"></th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="8"><input name="v166"  type="text" value="0" size="15" tabindex="166"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="8"></th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="4"><input name="v160"  type="text" value="0" size="15" tabindex="160"/></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="6">&nbsp;D�RD�Z</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="2"><input name="v165"  type="text" value="0" size="5" tabindex="165"/></th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="8"></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="white" bgcolor="white" colspan="30"><br /></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="#000000" bgcolor="white" colspan="30">KUDUZ ��PHEL� ISIRIK VE KUDUZ VAKALARI �LE UYGULANAN TEDAV�LER</th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="5">Is�r�lan Ki�i Say�s�</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="5">Kuduz Te�his Edilen Ki�i Say�s�</th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="10">Kuduz A��s� Uygulanan Ki�iler<br />
       Yerli A��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;�thal A��</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="5">Serum Uygulanan Ki�i Say�s�</th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="5">Karantinaya Al�nan Ki�i Say�s�</th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="5"><input name="v167"  type="text" value="0" size="15" tabindex="167"/></th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="5"><input name="v168"  type="text" value="0" size="15" tabindex="168"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="5"><input name="v169"  type="text" value="0" size="15" tabindex="169"/></th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="5"><input name="v170"  type="text" value="0" size="15" tabindex="170"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="5"><input name="v171"  type="text" value="0" size="15" tabindex="171"/></th>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="5"><input name="v172"  type="text" value="0" size="15" tabindex="172"/></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="white" bgcolor="white" colspan="30"><br /></th>
   </tr>
   <tr>
     <th class="style5" width="100%" align="center"bordercolor="#000000" bgcolor="white" colspan="30"></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="center"bordercolor="#000000" bgcolor="white" colspan="13">D�ZENLEYEN</th>
     <th class="style5" width="5%" align=""  bgcolor="white" colspan="4" rowspan="5"></th>
     <th class="style5" width="5%" align="center" bordercolor="#000000" bgcolor="white" colspan="13">ONAYLAYAN</th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="4">&nbsp;Ad� Soyad�</th>
     <th class="style5" width="5%"align="left" bordercolor="#000000" bgcolor="white" colspan="9"><input name="v173"  type="text" value="xxx" size="40" tabindex="173"/></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="4">&nbsp;Ad� Soyad�</th>
     <th class="style5" width="5%"align="left" bordercolor="#000000" bgcolor="white" colspan="9"><input name="v176"  type="text" value="xxx" size="40" tabindex="176"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="4">&nbsp;�nvan�</th>
     <th class="style5" width="5%"align="left" bordercolor="#000000" bgcolor="white" colspan="9"><input name="v174"  type="text" value="xxx" size="40" tabindex="174"/></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="4">&nbsp;�nvan�</th>
     <th class="style5" width="5%"align="left" bordercolor="#000000" bgcolor="white" colspan="9"><input name="v177"  type="text" value="xxx" size="40" tabindex="177"/></th>
   </tr>
   <tr>
   <?php
   $a=Date("Y-m-d");
   ?>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="4">&nbsp;Tarih</th>
     <th class="style5" width="5%"align="left" bordercolor="#000000" bgcolor="white" colspan="9"><input name="v175"  type="text" value=<? echo $a; ?> size="40" tabindex="175"/></th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="4">&nbsp;Tarih</th>
     <th class="style5" width="5%"align="left" bordercolor="#000000" bgcolor="white" colspan="9"><input name="v178"  type="text" value="<? echo $a;?>" size="40" tabindex="178"/></th>
   </tr>
   <tr>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="4">&nbsp;�mza</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="9">&nbsp;</th>
     <th class="style5" width="5%" align="left"bordercolor="#000000" bgcolor="white" colspan="4">&nbsp;�mza</th>
     <th class="style5" width="5%"align="center" bordercolor="#000000" bgcolor="white" colspan="9">&nbsp;</th>
   </tr>
 </table>
</form>
</body>
</html>
