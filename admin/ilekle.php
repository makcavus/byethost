<?php
session_start();
include("../assets/sablon/form013/header.php");
include("../assets/sablon/form013/sidebar.php");
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{
?>



<script type="text/javascript" src="jquery-latest.pack.js"></script>

<!-- Codes by Quackit.com -->

<script language="JavaScript" src="toplama.js" type="text/javascript">

</script>	

<script type="text/JavaScript">


function reloadPage(id) {    document.location.href = location.href + '?id=' + id.value; } 

</script>

<script type="text/JavaScript">



function timedRefresh(timeoutPeriod) {

	setTimeout("location.reload(true);",timeoutPeriod);

}

//   -->

//<body onload="JavaScript:timedRefresh(100000);">

</script>



<body style="background-color:#000000" onload="JavaScript:timedRefresh(10000000);">
<form method="GET" name="form4" action="ilekle.php" class="form-group form-inline">
<form method="GET" name="form0" action="ilekle.php" class="form-group form-inline">
<form method="GET" name="form1" action="ilekle.php" class="form-group form-inline"> 
<form method="GET" name="form2" action="ilkaydet.php">
<form method="GET" name="form3" action="ilkaydet.php">

<div class="container mt-3">
<div class="panel-group" id="accordion">
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;" href="#kayit" data-toggle="collapse" data-parent="#accordion"><strong>Kay�t ��lemleri</strong></a></h6></div>
</div>
<div id="kayit" class="panel-collapse collapse in">
<div class="row bg-primary">
<div class="col-md-4 ml-auto mt-1 mb-1" align="center"><a href="duyurukayit.php" target="sag"  class="btn btn-sm btn-success">Duyuru Kayd�</a></div>
<div class="col-md-4 ml-auto mt-1 mb-1" align="center"><a href="adreskayit.php" target="sag" class="btn btn-sm btn-success">Adres Kayd�</a></div>
<div class="col-md-4 mr-auto mt-1 mb-1" align="center"><a href="gereklikayit.php" target="sag" class="btn btn-sm btn-success">D�k�man-Form Y�kleme</a></div>
</div>
</div>
</div>
<br>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;" href="#birim" data-toggle="collapse" data-parent="#accordion"><strong>�ube-Birim Giri�i</strong></a></h6></div>
</div>
<div id="birim" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<input type="text" name="birimgir" id="birimgir" value="" class="form-control form-control-sm mr-1 w-50 mt-1 mb-1" placeholder="�ube/Birim ad�n� giriniz...">
<input name="submit4" type="button" onclick="kontrolbirim();" value="Kontrol" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-danger mr-1">
<input name="submit32" type="button" value="Listele" onclick="listelebirim();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success ml-1">
</div>
</div>
</div>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="sonucbirim">
</div>
</div>
</div>
<br>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;" href="#tip" data-toggle="collapse" data-parent="#accordion"><strong>Kurum Tipi Giri�i</strong></a></h6></div>
</div>
<div id="tip" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<input type="text" name="tipgir" id="tipgir" value="" class="form-control form-control-sm mr-1 w-50 mt-1 mb-1" placeholder="Kurum tipini giriniz...">
<input name="submit4" type="button" onclick="kontroltip();" value="Kontrol" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-danger mr-1">
<input name="submit32" type="button" value="Listele" onclick="listeletip();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success ml-1">
</div>
</div>
</div>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="sonucbirimtip">
</div>
</div>
</div>
<br>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;" href="#ilgir" data-toggle="collapse" data-parent="#accordion"><strong>�l Giri�i</strong></a></h6></div>
</div>
<div id="ilgir" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<input type="text" name="ilgir" id="ilgir" value="" class="form-control form-control-sm mr-1 w-25 mt-1 mb-1" placeholder="�l ad�n� giriniz...">
<input name="button" type="button" onclick="kontrolil();" value="�l Kayd� Kontrol" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-danger mr-1">
<input name="submit33" type="button" value="�l Listele" onclick="listeleil();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success mr-1">
</div>
</div>
</div>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="sonuc">
</div>
</div>
</div>

<br>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;" href="#ilcegir" data-toggle="collapse" data-parent="#accordion"><strong>�l�e Giri�i</strong></a></h6></div>
</div>
<div id="ilcegir" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<?php

include("../con_023.php");
include("../form013/tanimveyetkiler.php");
$solil=substr($_SESSION["uyekodu"],0,2);

$resultocak = @mysqli_query( $dbh , "select * from ocak where left(socad,2)='$solil' order by socad asc");
while($rowilkod=mysqli_fetch_array($resultocak)) {
$ilkodu=$rowilkod['ilinad'];
}
//mysqli baglantisi
if(substr($hamkod,-3,3)==$bakanlikyetki){
$result = @mysqli_query( $dbh , "select ilid,ilad from il order by ilad asc");
}else if(substr($hamkod,-3,3)==$ilyetki){
$result = @mysqli_query( $dbh , "select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}else if(substr($hamkod,-3,3)==$kurumyetki){
$result = @mysqli_query( $dbh , "select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}else if(substr($hamkod,-9,9)==$koddokuz){
$result = @mysqli_query( $dbh , "select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}
?>
<script language="JavaScript">

function ilce(){

document.form1.ilno.value=document.form1.selectilno.options[document.form1.selectilno.selectedIndex].value;

//metin.value=menu.options[menu.selectedIndex].text;
}

</script>
<select name="selectilno" id="selectilno" onchange="javascript:ilce()" onselect="javascript:reloadPage(this)" class="form-control form-control-sm w-25" style="font-size:14px;">

  <option value=""><?php echo "�li Se�iniz";?></option>

  <?php while($row=mysqli_fetch_array($result)) { ?>

  <option value="<?=$row['ilid']?>">

  <?=$row['ilad']?>

  </option>

  <?php }

@mysqli_close($dbh);

 

   ?>

</select>
<input type="hidden" name="ilno" id="ilno">
<input type="text" name="ilcegir" id="ilcegir" value="" class="form-control form-control-sm mr-1 w-25 mt-1 mb-1" placeholder="�lce ad�n� giriniz...">
<input name="submit2" type="button" value="�l�e Kayd� Kontrol" onclick="kontrolilce();" class="form-control btn btn-sm btn-danger mr-1">
<input name="submit34" type="button" value="�l�e Listele" onclick="listeleilce();" class="form-control btn btn-sm btn-success mr-1">
</div>
</div>
</div>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="sonuc1">
</div>
</div>
</div>

</form>
</form>
</form>
</form>
</form>
<br>

<?php

//mysqli baglantisi

include("../con_023.php");
include("../form013/tanimveyetkiler.php");
$solil=substr($_SESSION["uyekodu"],0,2);

$resultocak = @mysqli_query( $dbh , "select * from ocak where left(socad,2)='$solil' order by socad asc");
while($rowilkod=mysqli_fetch_array($resultocak)) {
$ilkodu=$rowilkod['ilinad'];
}
//mysqli baglantisi
if(substr($hamkod,-3,3)==$bakanlikyetki){
$result = @mysqli_query( $dbh , "select ilid,ilad from il order by ilad asc");
}else if(substr($hamkod,-3,3)==$ilyetki){
$result = @mysqli_query( $dbh , "select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}else if(substr($hamkod,-3,3)==$kurumyetki){
$result = @mysqli_query( $dbh , "select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}else if(substr($hamkod,-9,9)==$koddokuz){
$result = @mysqli_query( $dbh , "select ilid,ilad from il WHERE ilid='$ilkodu' order by ilad asc");
}
?>

<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;" href="#kurumgir" data-toggle="collapse" data-parent="#accordion"><strong>Kurum Giri�i</strong></a></h6></div>
</div>
<div id="kurumgir" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<div class="row" align="left">
  <div class="col-6"><select name="selectil" id="selectil" onchange="ilcegoster();" onselect="javascript:reloadPage(this)" class="form-control form-control-sm mt-1 mb-1 w-50" style="font-size:14px;">

  <option value=""><?php echo "�li Se�iniz";?></option>

  <?php while($row=mysqli_fetch_array($result)) { ?>

  <option value="<?=$row['ilid']?>">

  <?=$row['ilad']?>
  </option>

  <?php } 

 @mysqli_close($dbh);

 

  ?>

</select></div>
  <div class="col-6"><div id="statediv">
<select name="selectilce" id="selectilce" onselect="javascript:reloadPage(this)" class="form-control form-control-sm mt-1 mb-1 w-50" style="font-size:14px;"> 

	<option><?php echo "�nce �li Se�iniz";?></option>

        </select>
		</div></div>
		</div>
		<div class="row" align="left">
  <div class="col-6"><input type="text" name="kurumgir" id="kurumgir" value="" class="form-control form-control-sm mr-1 mb-1 is-valid w-50" placeholder="Birim kodunu giriniz..."></div>
  <div class="col-6"><input type="text" name="asmgir"  id="asmgir" value="" class="form-control form-control-sm mr-1 mb-1 w-50" placeholder="Kurum ad�n� giriniz..."></div>
</div>
<div class="row" align="left">
  <div class="col-6"><input type="text" name="drgir" id="drgir" value="" class="form-control form-control-sm mr-1 mb-1 w-50" placeholder="Doktor ad�n� giriniz..."></div>
  <div class="col-6"><input type="text" name="asegir" id="asegir" value="" class="form-control form-control-sm mr-1 mb-1 w-50" placeholder="G�revli ad�n� giriniz..."></div>
</div>
<div class="row" align="left">
  <div class="col-6"><input type="text" name="aseungir" id="aseungir" value="" class="form-control form-control-sm mr-1 mb-1 w-50" placeholder="G�revli �nvan�n� giriniz..."></div>
  <div class="col-6"><input name="submit35" type="button" value="Kurum Kayd� Kontrol" onclick="kontrolkurum();" onsubmit="javascript:reloadPage(this)"  class="form-control btn btn-sm btn-danger mr-1">
<input name="submit32" type="button" value="Kurum Listele" onclick="listelekurum();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success mr-1"></div>
</div>
</div>
</div>
</div>

<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="sonuc2">
</div>
</div>
</div>
<?php
//mysqli baglantisi
include("../con_023.php");
include("../form013/tanimveyetkiler.php");


if($koduc==$bakanlikyetki){
$resultkod = @mysqli_query( $dbh , "select socad from ocak order by socad asc");
}else if($koduc==$ilyetki){
$resultkod = @mysqli_query( $dbh , "select socad from ocak where(select left(socad,2)='$kodiki') order by socad asc");
}else if($koduc==$kurumyetki){
$resultkod = @mysqli_query( $dbh , "select socad from ocak where(select left(socad,5)='$kod') order by socad asc");
}else{
echo '<div class="alert alert-info text-danger"><h6 class="alert-header">'.$yetkiuyar.'</h6></div>' ;
echo '<a href="ilekle.php"  onclick="history.back();" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm"><i class="fa fa-times-circle fa-lg"></i> '.$iptal.'</a>';
}

?>
<br>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;" href="#kulgir" data-toggle="collapse" data-parent="#accordion"><strong>Kullan�c� Giri�i</strong></a></h6></div>
</div>
<div id="kulgir" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<select name="uyekodum" id="uyekodum" onchange="kontroluye();" onclick="kontroluye();" onselect="javascript:reloadPage(this)" class="form-control form-control-sm w-25 mb-1 mt-1" style="font-size:14px;">

      <option value=""><?php echo "�ye Kodu Se�iniz";?></option>

      <?php while($rowkod=mysqli_fetch_array($resultkod)) { ?>

      <option value="<?=$rowkod['socad']?>">

        <?=$rowkod['socad']?>
        </option>

      <?php } 

 @mysqli_close($dbh);

 

  ?>
    </select>
<input name="submit3" type="button" value="Kullan�c�lar� Listele" onclick="kontroluser();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success mr-1">	
</div>
</div>
</div>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="drdiv">
</div>
</div>
</div>
<br>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><a class="btn-block text-primary" style="text-decoration:none;" href="#msggir" data-toggle="collapse" data-parent="#accordion"><strong>�letilere Cevap Giri�i</strong></a></h6></div>
</div>
<div id="msggir" class="panel-collapse collapse in">
<div class="row bg-warning">
<div class="col-md-12 bg-primary text-dark mb-1" align="center">
<input name="submit36" type="button" value="�letileri Listele" onclick="kontrolmsg();" onsubmit="javascript:reloadPage(this)" class="form-control btn btn-sm btn-success mr-1 mt-1 mb-1">
</div>
</div>
</div>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center">
<div class="bg-warning mb-1" id="msgdiv">
</div>
</div>
</div>

<br>
<br>
 
<?php

$apc='Admin Panelden ��k';

$cikis='Pro�ramdan ��k';

?>
<div class="row bg-warning">
<div class="col-md-12 bg-warning text-dark" align="center"><h6><strong>Admin Paneli ��k���</strong></h6></div>
<div class="col-md-12 bg-primary" align="center">
<a href="../frm023kayit.php" class="btn btn-outline-success btn-sm text-warning mr-3"><h6><i class="fa fa-reply-all"></i> Admin Panelden ��k</h6></a>
<button type="button" class="btn btn-outline-dark mt-1 mb-1 mr-3"><span class="badge badge-light mr-1"><i class="fa fa-user" fa-lg></i></span><span class="sr-only">unread messages</span><strong><?php echo $_SESSION["uye"]; ?></strong>
</button>
<a href="../cikis.php" class="btn btn-outline-danger btn-sm text-warning mr-3"><h6><i class="fa fa-sign-out"></i> Oturumu Kapat</h6></a></div>

</div>
<?php

@mysqli_close($dbh);

//unset($_SESSION['uye']); // oturumda olan de�i�kenimiz siliniyor

//session_destroy(); // oturumlar� siler

}

/*

function toUpperCase( $input ){	

return strtoupper( strtr( $input,'����i��', '���I���') );

}

function ucwords_tr($deger)

         {

         $deger = split(" ",trim($deger));

         $deger_tr = ""; 



         for($x=0; $x < count($deger); $x++)

             {

             $deger_bas = substr($deger[$x],0,1);

             $deger_son = substr($deger[$x],1);

             $deger_bas = toUpperCase($deger_bas); 



             $deger_tr .= $deger_bas.$deger_son." ";

             } 



         $deger_tr = trim($deger_tr); 



         return $deger_tr;

         } 





$ilgelenx=$_GET['ilgir']; // get metodu ile formdan gelen ge�er al�n�yor

$ilgelen=toUpperCase($ilgelenx);

$ilsecgelen=$_GET['ilno']; // get metodu ile formdan gelen ge�er al�n�yor

$ilcegelen=toUpperCase($_GET['ilcegir']); // get metodu ile formdan gelen ge�er al�n�yor

$kilgelen=$_GET['selectil'];

$kilcegelen=$_GET['selectilce'];

$kurumgelen=toUpperCase($_GET['kurumgir']);

$asmgelen=ucwords_tr($_GET['asmgir']);

$drgelen=ucwords_tr($_GET['drgir']);

$asegelen=ucwords_tr($_GET['asegir']);

$aseungelen=ucwords_tr($_GET['aseungir']);









//echo $ilgelen;

//echo $ilsecgelen;

//echo $ilcegelen;

//echo $kilgelen;

//echo $kilcegelen;

//echo $kurumgelen;

//echo $asmgelen;

//echo $drgelen;

//echo $asegelen;

//echo $aseungelen;













$ilsec="select * from il where(ilad='$ilgelen')";

$socsorgu=mysqli_query( $dbh , $ilsec);

$say=mysqli_num_rows($socsorgu);

//echo $say;

if($say<1 AND $ilgelen !=""){

$kayit="INSERT INTO il(ilad) VALUES ('$ilgelen')";

if(mysqli_query( $dbh , $kayit)){

echo '<br>';

echo '<table class="cizgi" border="1" align="center" cellpadding="0" cellspacing="0" width="76%">';

echo '<th bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';

echo '</tr>';

echo '<th bgcolor="yellow" bgcolor="yellow">';

echo '<label><font style="color:green">�l Kaydedildi...</font></th></table>';

}else{

echo '<br>';

echo '<table class="cizgi" border="1" align="center" cellpadding="0" cellspacing="0" width="76%">';

echo '<th bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';

echo '</tr>';

echo '<th bgcolor="yellow" bgcolor="yellow">';

echo '<label><font style="color:Red">�l Kaydedilemedi...</font></th></table>';

}

}

while($sonucum=mysqli_fetch_array($socsorgu)){

$ilno=$sonucum['ilid'];

$iladi=$sonucum['ilad'];

 // ekrana md5 kodu yazd�r�l�yor

//print("<b>Girilen �l : </b> ".$ilno."<br>".$iladi);				

}









$ilcesec="select * from ilce where(ilcead='$ilcegelen')";

$socsorgu1=mysqli_query( $dbh , $ilcesec);

$say1=mysqli_num_rows($socsorgu1);

//echo "Say�:".$say1;

if($say1<1 AND $ilcegelen !=""){

$kayit1="INSERT INTO ilce (ilinad,ilcead) VALUES ('$ilsecgelen','$ilcegelen')";

if(mysqli_query( $dbh , $kayit1)){

echo '<br>';

echo '<table class="cizgi" border="1" align="center" cellpadding="0" cellspacing="0" width="76%">';

echo '<th bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';

echo '</tr>';

echo '<th bgcolor="yellow" bgcolor="yellow">';

echo '<label><font style="color:green">�l�e Kaydedildi...</font></th></table>';

}else{

echo '<br>';

echo '<table class="cizgi" border="1" align="center" cellpadding="0" cellspacing="0" width="76%">';

echo '<th bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';

echo '</tr>';

echo '<th bgcolor="yellow" bgcolor="yellow">';

echo '<label><font style="color:Red">�l�e Kaydedilemedi...</font></th></table>';

}

}

while($sonucum1=mysqli_fetch_array($socsorgu1)){

$ilceno=$sonucum1['ilceid'];

$ilsecadi=$sonucum1['ilinad'];

$ilceadi=$sonucum1['ilcead'];



 // ekrana md5 kodu yazd�r�l�yor

//print("<b>Girilen �l : </b> ".$ilceno."<br>".$ilsecadi."<br>".$ilceadi);				

}



// KURUM KAYDI





$kurumsec="select * from ocak where(socad='$kurumgelen')";

$socsorgu2=mysqli_query( $dbh , $kurumsec);

$say2=mysqli_num_rows($socsorgu2);

//echo "Say�:".$say2;

if($say2<1 AND $kurumgelen!=""){

$kayit2="INSERT INTO ocak (ilinad,ilce,socad,asmadi,dradi,aseadi,aseunvan) VALUES ('$kilgelen','$kilcegelen','$kurumgelen','$asmgelen','$drgelen','$asegelen','$aseungelen')";

if(mysqli_query( $dbh , $kayit2)){

echo '<br>';

echo '<table class="cizgi" border="1" align="center" cellpadding="0" cellspacing="0" width="76%">';

echo '<th bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';

echo '</tr>';

echo '<th bgcolor="yellow" bgcolor="yellow">';

echo '<label><font style="color:green">Kurum Kaydedildi...</font></th></table>';

}else{

echo '<br>';

echo '<table class="cizgi" border="1" align="center" cellpadding="0" cellspacing="0" width="76%">';

echo '<th bgcolor="yellow" bgcolor="yellow"><font color="blue" size="4" style="font-family:Arial, Helvetica, sans-serif">Durum</font></th>';

echo '</tr>';

echo '<th bgcolor="yellow" bgcolor="yellow">';

echo '<label><font style="color:Red">Kurum Kaydedilemedi...</font></th></table>';

}

}

while($sonucum2=mysqli_fetch_array($socsorgu2)){

$kilceno=$sonucum2['ocid'];

$kilsecadi=$sonucum2['ilinad'];

$kilceadi=$sonucum2['ilce'];

$kkurumadi=$sonucum2['socad'];

$kasmadi=$sonucum2['asmadi'];

$kdradi=$sonucum2['dradi'];

$kaseadi=$sonucum2['aseadi'];

$kaseunadi=$sonucum2['aseunvan'];



 // ekrana md5 kodu yazd�r�l�yor

//print("<b>Girilen �l : </b> ".$kilceno."<br>".$kilsecadi."<br>".$kilceadi."<br>".$kkurumadi."<br>".$kasmadi."<br>".$kdradi."<br>".$kaseadi."<br>".$kaseunadi);				

}

}

*/

?>

<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
      <script src="../../../bootstrap-4/popper.js"></script>
      <script src="../../../bootstrap-4/js/bootstrap.min.js"></script>

</body>

</html>