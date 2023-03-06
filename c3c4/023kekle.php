<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
</head>

<body>
<?php
include("connect.php");
include('c3c4alanlari.php');

$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelentam=$_GET['selectay']; 
$aygelentarih=substr($aygelentam,0,10); 
$aygelentarihgun=substr($aygelentarih,0,2);
$aygelentarihay=substr($aygelentarih,3,2);
$aygelentarihyil=substr($aygelentarih,6,4);
$aygelen=$aygelentarihyil.'-'.$aygelentarihay.'-'.$aygelentarihgun;
$duztarihgun=substr($_GET['v175'],0,2);
$duztarihay=substr($_GET['v175'],3,2);
$duztarihyil=substr($_GET['v175'],6,4);
$dtarih=$duztarihyil.'-'.$duztarihay.'-'.$duztarihgun;
$ontarihgun=substr($_GET['v178'],0,2);
$ontarihay=substr($_GET['v178'],3,2);
$ontarihyil=substr($_GET['v178'],6,4);
$otarih=$ontarihyil.'-'.$ontarihay.'-'.$ontarihgun;
//echo $dtarih;
//echo $otarih;
/*echo $ilgelen ;
echo $ilcegelen ;
echo $ocgelen ;
echo $yilgelen ;
echo $aygelentam ;
/*echo $_GET['v1'] ;echo $_GET['v2'] ;echo $_GET['v3'] ;echo $_GET['v4'] ;echo $_GET['v5'] ;echo $_GET['v6'] ;echo $_GET['v7'] ;echo $_GET['v8'] ;echo $_GET['v9'] ;echo $_GET['v10'] ;echo $_GET['v11'] ;echo $_GET['v12'] ;echo $_GET['v13'] ;echo $_GET['v14'] ;echo $_GET['v15'] ;echo $_GET['v16'] ;echo $_GET['v17'] ;echo $_GET['v18'] ;echo $_GET['v19'] ;echo $_GET['v20'] ;echo $_GET['v21'] ;echo $_GET['v22'] ;echo $_GET['v23'] ;echo $_GET['v24'] ;echo $_GET['v25'] ;echo $_GET['v26'] ;
echo $_GET['v27'] ;echo $_GET['v28'] ;echo $_GET['v29'] ;echo $_GET['v30'] ;echo $_GET['v31'] ;echo $_GET['v32'] ;echo $_GET['v33'] ;echo $_GET['v34'] ;echo $_GET['v35'] ;echo $_GET['v36'] ;echo $_GET['v37'] ;echo $_GET['v38'] ;echo $_GET['v39'] ;echo $_GET['v40'] ;echo $_GET['v41'] ;echo $_GET['v42'] ;echo $_GET['v43'] ;echo $_GET['v44'] ;echo $_GET['v45'] ;echo $_GET['v46'] ;echo $_GET['v47'] ;echo $_GET['v48'] ;echo $_GET['v49'] ;echo $_GET['v50'] ;echo $_GET['v51'] ;echo $_GET['v52'];*/
$vtsec="select * from veriage where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelentam')";
$socsorgu=mysqli_query($dbh,$vtsec);
$say=mysqli_num_rows($socsorgu);
//echo $say;
if($say<1){
$kayit="INSERT INTO veriage(ilidi,ilceidi,vocadi,vyiladi,vayadi,v1,v2,v3,v4,v5,v6,v7,v8,v9,v10,v11,v12,v13,v14,v15,v16,v17,v18,v19,v20,v21,v22,v23,v24,v25,v26,v27,v28,v29,v30,v31,v32,v33,v34,v35,v36,v37,v38,v39,v40,v41,v42,v43,v44,v45,v46,v47,v48,v49,v50,v51,v52,v53,v54,v55,v56,v57,v58,v59,v60,v61,v62,v63,v64,v65,v66,v67,v68,v69,v70,v71,v72,v73,v74,v75,v76,v77,v78,v79,v80,v81,v82,v83,v84,v85,v86,v87,v88,v89,v90,v91,v92,v93,v94,v95,v96,v97,v98,v99,v100,v101,v102,v103,v104,v105,v106,v107,v108,v109,v110,v111,v112,v113,v114,v115,v116,v117,v118,v119,v120,v121,v122,v123,v124,v125,v126,v127,v128,v129,v130,v131,v132,v133,v134,v135,v136,v137,v138,v139,v140,v141,v142,v143,v144,v145,v146,v147,v148,v149,v150,v151,v152,v153,v154,v155,v156,v157,v158,v159,v160,v161,v162,v163,v164,v165,v166,v167,v168,v169,v170,v171,v172,v173,v174,v175,v176,v177,v178) VALUES($ilgelen,$ilcegelen,'$ocgelen','$yilgelen','$aygelentam','$_GET[v1]','$_GET[v2]','$_GET[v3]','$_GET[v4]','$_GET[v5]','$_GET[v6]','$_GET[v7]','$_GET[v8]','$_GET[v9]','$_GET[v10]','$_GET[v11]','$_GET[v12]','$_GET[v13]','$_GET[v14]','$_GET[v15]','$_GET[v16]','$_GET[v17]','$_GET[v18]','$_GET[v19]','$_GET[v20]','$_GET[v21]','$_GET[v22]','$_GET[v23]','$aygelentam','$_GET[v25]','$_GET[v26]','$_GET[v27]','$_GET[v28]','$_GET[v29]','$_GET[v30]','$_GET[v31]','$_GET[v32]','$_GET[v33]','$_GET[v34]','$_GET[v35]','$_GET[v36]','$_GET[v37]','$_GET[v38]','$_GET[v39]','$_GET[v40]','$_GET[v41]','$_GET[v42]','$_GET[v43]','$_GET[v44]','$_GET[v45]','$_GET[v46]','$_GET[v47]','$_GET[v48]','$_GET[v49]','$_GET[v50]','$_GET[v51]','$_GET[v52]','$_GET[v53]','$_GET[v54]','$_GET[v55]','$_GET[v56]','$_GET[v57]','$_GET[v58]','$_GET[v59]','$_GET[v60]','$_GET[v61]','$_GET[v62]','$_GET[v63]','$_GET[v64]','$_GET[v65]','$_GET[v66]','$_GET[v67]','$_GET[v68]','$_GET[v69]','$_GET[v70]','$_GET[v71]','$_GET[v72]','$_GET[v73]','$_GET[v74]','$_GET[v75]','$_GET[v76]','$_GET[v77]','$_GET[v78]','$_GET[v79]','$_GET[v80]','$_GET[v81]','$_GET[v82]','$_GET[v83]','$_GET[v84]','$_GET[v85]','$_GET[v86]','$_GET[v87]','$_GET[v88]','$_GET[v89]','$_GET[v90]','$_GET[v91]','$_GET[v92]','$_GET[v93]','$_GET[v94]','$_GET[v95]','$_GET[v96]','$_GET[v97]','$_GET[v98]','$_GET[v99]','$_GET[v100]','$_GET[v101]','$_GET[v102]','$_GET[v103]','$_GET[v104]','$_GET[v105]','$_GET[v106]','$_GET[v107]','$_GET[v108]','$_GET[v109]','$_GET[v110]','$_GET[v111]','$_GET[v112]','$_GET[v113]','$_GET[v114]','$_GET[v115]','$_GET[v116]','$_GET[v117]','$_GET[v118]','$_GET[v119]','$_GET[v120]','$_GET[v121]','$_GET[v122]','$_GET[v123]','$_GET[v124]','$_GET[v125]','$_GET[v126]','$_GET[v127]','$_GET[v128]','$_GET[v129]','$_GET[v130]','$_GET[v131]','$_GET[v132]','$_GET[v133]','$_GET[v134]','$_GET[v135]','$_GET[v136]','$_GET[v137]','$_GET[v138]','$_GET[v139]','$_GET[v140]','$_GET[v141]','$_GET[v142]','$_GET[v143]','$_GET[v144]','$_GET[v145]','$_GET[v146]','$_GET[v147]','$_GET[v148]','$_GET[v149]','$_GET[v150]','$_GET[v151]','$_GET[v152]','$_GET[v153]','$_GET[v154]','$_GET[v155]','$_GET[v156]','$_GET[v157]','$_GET[v158]','$_GET[v159]','$_GET[v160]','$_GET[v161]','$_GET[v162]','$_GET[v163]','$_GET[v164]','$_GET[v165]','$_GET[v166]','$_GET[v167]','$_GET[v168]','$_GET[v169]','$_GET[v170]','$_GET[v171]','$_GET[v172]','$_GET[v173]','$_GET[v174]','$dtarih','$_GET[v176]','$_GET[v177]','$otarih')";

if(mysqli_query($dbh,$kayit)){
echo '<label>'.$kayiteklendi.'</label><a href="#" onClick="kontrol();">Geri</a>';
}else{
echo '<label><font style="color:Red">'.$kaydedilmedi.'</font>Öncelikle bu tarihe ait verilen linkten TSİM girişlerini yaparak </label><meta http-equiv=refresh content="100; url=http://localhost/abe/frm023kayit.php" /><a href="http://localhost/abe/frm023kayit.php" _fcksavedurl="http://localhost/abe/frm023kayit.php"> Tekrar deneyiniz.</a>';
//echo mysqli_error();
 }
}else{ echo '<label><font style="color:Red">Bu Kayıt Daha Önce Yapılmış...</font></label><meta http-equiv=refresh content="100; url=http://localhost/C3-C4/frm023kayit.php" /><a href="http://localhost/form023/frm023kayit.php" _fcksavedurl="http://localhost/C3-C4/frm023kayit.php">Geri Dön</a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
?>
<?php
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
?>
<?php
/*echo '<meta http-equiv=refresh content="100; url=http://localhost/frm023degistir.php" /><a href="http://localhost/frm023degistir.php" _fcksavedurl="http://localhost/frm023degistir.php">Kay�tta De�i�iklik Yapmak ��in T�klay�n�z.</a>';*/
echo '<label>'.$ilinadi.'  ili  '.$ilceninadi.'  il�esi  '.$ocgelen.' '.$yilgelen.'  yili  '.$aygelentam.' ayi....     </label>';
$degsayfa="http://localhost/form023/frm023degistir.php?ilgelen=".$ilgelen."&ilcegelen=".$ilcegelen."&ocgelen=".$ocgelen."&yilgelen=".$yilgelen."&aygelen=".$aygelentam."";
$baksayfa="http://localhost/form023/cerceve1.php?ilgelen=".$ilgelen."&ilcegelen=".$ilcegelen."&ocgelen=".$ocgelen."&yilgelen=".$yilgelen."&aygelen=".$aygelentam."";
echo '<a href="'.$degsayfa.'">De�i�tir</a>';
echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="'.$baksayfa.'">G�ster</a>';
}

@mysqli_close($dbh);
 ?>

 </body>
</html>