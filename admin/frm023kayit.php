<?

include("index.php");

session_start();

if(!isset($_SESSION["uye"])){

echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";

}else{

// timeout periyodu, sn olarak

$inactive = 1300;

if(isset($_SESSION['timeout']) ) {

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)

{ 
unset($_SESSION['uye']); // oturumda olan de�i�kenimiz siliniyor

session_destroy(); header("Location: cikis.php"); }

}

$_SESSION['timeout'] = time();


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />

<title>Form 013 Kay�t Giri�i</title>

<link href="Style.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="jquery-latest.pack.js"></script>





<script language="JavaScript" src="toplama.js" type="text/javascript">

</script>	

</head>

<body>

<form action="023kekle.php" method="get" name="kaydet">



<?php

//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 

/*$link = mysql_connect('localhost', 'root', 'malika'); //changet the configuration in required

if (!$link) {

    die('Could not connect: ' . mysql_error());

}

mysql_select_db('frm023');*/

include("con_023.php");
include("/admin/tanimveyetkiler.php");

?>

<?php

$hosgeldin="Ho�geldiniz Say�n  ";

$cikis=" ��k�� yapmak i�in ";

$tikla="T�klay�n�z";

$sd='�ifre De�i�tir';

$kd='Kullan�c� D�zenle';

$sagdanadmin=substr($_SESSION["uyekodu"],-3,3);

//mysql baglantisi

$result = @mysql_query("select ilid,ilad from il order by ilad asc");

?>

 <table class="cizgi" border="0" align="center" cellpadding="0" cellspacing="0" width="100%">

 <?php

 echo '<th class="style6" width="100%" align="center" bordercolor="#FFCC00" bgcolor="#000000" colspan="10"><p align="center"><font color="yellow" size="3">'.$hosgeldin.'<font color="#99FFFF" size="4">'.$_SESSION["uye"].'</font><font color="yellow">'.$cikis.'</font><font color="yellow" size="4">';?><a href="cikis.php" style="color:#00FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#00FF00'" ><? echo $tikla ; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <? echo '</font><font color="yellow">';?><a href="sifredegistir.php" style="color:#00FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#00FF00'" ><? echo $sd ; ?></a><? echo '</font>'; ?>

 <? if($sagdanadmin==$kurumyetki or $sagdanadmin==$ilyetki){ ?>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <? echo '</font><font color="yellow">';?><a href="admin/admin.php" style="color:#00FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='#00FF00'" ><? echo $kd ; ?></a><? echo '</font></p></th>'; }?>

<tr>

<th  align="right" bordercolor="white" bgcolor="yellow">

<input type="hidden" name="ahekkod" id="ahekkod" value="<? echo $_SESSION["uyekodu"]; ?>" />

<label for="selectil" class="style3">�L:</label>

</th >

<th bordercolor="white" bgcolor="yellow">

 <select name="selectil" onChange="getState(this.value)">

	<option value=""><?php echo "�li Se�iniz";?></option>

<? while($row=mysql_fetch_array($result)) { ?>

<option value="<?=$row['ilid']?>"><?=$row['ilad']?></option>

<? } ?>

	</select>&nbsp;&nbsp;

 </th>

<th  align="right" bordercolor="white" bgcolor="yellow">

  <label for="selectilce" class="style3" >�L�E:</label>

  </th>

  <th bordercolor="white" bgcolor="yellow">

 <div id="statediv"><select name="selectilce" >

	<option><?php echo "�nce �li Se�iniz";?></option>

        </select>&nbsp;&nbsp;</div>

   

 </th> 

<th align="right" bordercolor="white" bgcolor="yellow" >

  <label for="selectoc" class="style3">A�LE HEK�ML���:</label>

  </th>

  <th bordercolor="white" bgcolor="yellow">

 <div id="citydiv"><select id="selectoc" name="selectoc" >

	<option><?php echo "�nce �l�eyi Se�iniz";?></option>

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

 <select name="selectay" id="selectay" onclick="kontrol();"/>

 

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

<?

//unset($_SESSION['uye']); // oturumda olan de�i�kenimiz siliniyor

//session_destroy(); // oturumlar� siler

}



?>