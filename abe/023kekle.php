<?php
include("../con_abe.php");
include('abealanlari.php');
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
$vtsec="select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')";
$socsorgu=mysqli_query($dbhabe,$vtsec);
$say=mysqli_num_rows($socsorgu);
//echo $say;
if($say<1){
$kayit="INSERT INTO veri(ilidi,ilceidi,vocadi,vyiladi,vayadi,v1,v2,v3,v4,v5,v6,v7,v8,v9,v10,v11,v12,v13,v14,v15,v16,v17,v18,v19,v20,v21,v22,v23,v24,v25,v26,v27,v28,v29,v30,v31,v32,
v33,v34,v35,v36,v37,v38,v39,v40,v41,v42,v43,v44,v45,v46,v47,v48,v49,v50,v51,v52,v53,v54,v55,v56,v57,v58,v59,v60,v61,v62,v63,v64,v65,v66,v67,v68,v69,v70,v71,v72,v73,v74,v75,v76,v77,
v78,v79,v80,v81,v82,v83,v84,v85,v86,v87,v88,v89,v90,v91,v92,v93,v94,v95,v96,v97,v98,v99,v100,v101,v102,v103,v104,v105,v106,v107,v108,v109,v110,v111,v112,v113,v114,v115,v116,v117,
v118,v119,v120,v121,v122,v123,v124,v125,v126,v127,v128,v129,v130,v131,v132,v133,v134,v135,v136,v137,v138,v139,v140,v141,v142,v143,v144,v145,v146,v147,v148,v149,v150,v151,v152,v153,
v154,v155,v156,v157,v158,v159,v160,v161,v162,v163,v164,v165,v166,v167,v168,v169,v170,v171,v172,v173,v174,v175,v176,v177,v178) 
VALUES($ilgelen,$ilcegelen,'$ocgelen','$yilgelen','$aygelen','$_GET[v1]','$_GET[v2]','$_GET[v3]','$_GET[v4]','$_GET[v5]','$_GET[v6]','$_GET[v7]','$_GET[v8]','$_GET[v9]','$_GET[v10]',
'$_GET[v11]','$_GET[v12]','$_GET[v13]','$_GET[v14]','$_GET[v15]','$_GET[v16]','$_GET[v17]','$_GET[v18]','$_GET[v19]','$_GET[v20]','$_GET[v21]','$_GET[v22]','$_GET[v23]','$aygelentam',
'$_GET[v25]','$_GET[v26]','$_GET[v27]','$_GET[v28]','$_GET[v29]','$_GET[v30]','$_GET[v31]','$_GET[v32]','$_GET[v33]','$_GET[v34]','$_GET[v35]','$_GET[v36]','$_GET[v37]','$_GET[v38]',
'$_GET[v39]','$_GET[v40]','$_GET[v41]','$_GET[v42]','$_GET[v43]','$_GET[v44]','$_GET[v45]','$_GET[v46]','$_GET[v47]','$_GET[v48]','$_GET[v49]','$_GET[v50]','$_GET[v51]','$_GET[v52]',
'$_GET[v53]','$_GET[v54]','$_GET[v55]','$_GET[v56]','$_GET[v57]','$_GET[v58]','$_GET[v59]','$_GET[v60]','$_GET[v61]','$_GET[v62]','$_GET[v63]','$_GET[v64]','$_GET[v65]','$_GET[v66]',
'$_GET[v67]','$_GET[v68]','$_GET[v69]','$_GET[v70]','$_GET[v71]','$_GET[v72]','$_GET[v73]','$_GET[v74]','$_GET[v75]','$_GET[v76]','$_GET[v77]','$_GET[v78]','$_GET[v79]','$_GET[v80]',
'$_GET[v81]','$_GET[v82]','$_GET[v83]','$_GET[v84]','$_GET[v85]','$_GET[v86]','$_GET[v87]','$_GET[v88]','$_GET[v89]','$_GET[v90]','$_GET[v91]','$_GET[v92]','$_GET[v93]','$_GET[v94]',
'$_GET[v95]','$_GET[v96]','$_GET[v97]','$_GET[v98]','$_GET[v99]','$_GET[v100]','$_GET[v101]','$_GET[v102]','$_GET[v103]','$_GET[v104]','$_GET[v105]','$_GET[v106]','$_GET[v107]',
'$_GET[v108]','$_GET[v109]','$_GET[v110]','$_GET[v111]','$_GET[v112]','$_GET[v113]','$_GET[v114]','$_GET[v115]','$_GET[v116]','$_GET[v117]','$_GET[v118]','$_GET[v119]','$_GET[v120]',
'$_GET[v121]','$_GET[v122]','$_GET[v123]','$_GET[v124]','$_GET[v125]','$_GET[v126]','$_GET[v127]','$_GET[v128]','$_GET[v129]','$_GET[v130]','$_GET[v131]','$_GET[v132]','$_GET[v133]',
'$_GET[v134]','$_GET[v135]','$_GET[v136]','$_GET[v137]','$_GET[v138]','$_GET[v139]','$_GET[v140]','$_GET[v141]','$_GET[v142]','$_GET[v143]','$_GET[v144]','$_GET[v145]','$_GET[v146]',
'$_GET[v147]','$_GET[v148]','$_GET[v149]','$_GET[v150]','$_GET[v151]','$_GET[v152]','$_GET[v153]','$_GET[v154]','$_GET[v155]','$_GET[v156]','$_GET[v157]','$_GET[v158]','$_GET[v159]',
'$_GET[v160]','$_GET[v161]','$_GET[v162]','$_GET[v163]','$_GET[v164]','$_GET[v165]','$_GET[v166]','$_GET[v167]','$_GET[v168]','$_GET[v169]','$_GET[v170]','$_GET[v171]','$_GET[v172]',
'$_GET[v173]','$_GET[v174]','$dtarih','$_GET[v176]','$_GET[v177]','$otarih')";
if(mysqli_query($dbhabe,$kayit)){
	echo '<div class="dark"><button type="button" class="btn btn-primary btn-sm mt-3 mb-2" data-dismiss="modal" onclick="kontrol();">
	Kayıt Eklendi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';
	}else{
	echo '<div class="dark"><button type="button" class="btn btn-danger btn-sm mt-3 mb-2" data-dismiss="modal" onclick="kontrol();">
	Kayıt Eklenemedi... <i class="fa fa-reply-all fa-lg"></i> Geri</button></div>';		
		echo'<meta http-equiv=refresh content="3; url=http://'.$siteadresi.'/byethost/abe/index.php" />
		<a href="http://'.$siteadresi.'/byethost/abe/index.php" _fcksavedurl="http://'.$siteadresi.'/byethost/abe/index.php">Oturum Sonlandırıldı Tekrar Giriş Yapınız....</a>';
	 }
	}else{ echo '<label><font style="color:Red">Oturum Sonlandırıldı Tekrar Giriş Yapınız....</font></label><meta http-equiv=refresh content="3; url=http://'.$siteadresi.'/byethost/abe/index.php" /><a href="http://'.$siteadresi.'/byethost/abe/index.php" _fcksavedurl="http://'.$siteadresi.'/byethost/abe/index.php"></a>';
	echo'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
?>
<?php
$iladi=@mysqli_query($dbhabe,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysql_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucum=mysql_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
}
@mysqli_close($dbhabe);
 ?>
