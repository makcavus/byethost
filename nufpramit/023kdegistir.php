<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Kayıt Değiştirildi</title>
 <link href="Style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<?
include("con_023.php");
include('piramitalanlari.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
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
echo $aygelen ;
echo $_GET['v1'] ;echo $_GET['v2'] ;echo $_GET['v3'] ;echo $_GET['v4'] ;echo $_GET['v5'] ;echo $_GET['v6'] ;echo $_GET['v7'] ;echo $_GET['v8'] ;echo $_GET['v9'] ;echo $_GET['v10'] ;echo $_GET['v11'] ;echo $_GET['v12'] ;echo $_GET['v13'] ;echo $_GET['v14'] ;echo $_GET['v15'] ;echo $_GET['v16'] ;echo $_GET['v17'] ;echo $_GET['v18'] ;echo $_GET['v19'] ;echo $_GET['v20'] ;echo $_GET['v21'] ;echo $_GET['v22'] ;echo $_GET['v23'] ;echo $_GET['v24'] ;echo $_GET['v25'] ;echo $_GET['v26'] ;
echo $_GET['v27'] ;echo $_GET['v28'] ;echo $_GET['v29'] ;echo $_GET['v30'] ;echo $_GET['v31'] ;echo $_GET['v32'] ;echo $_GET['v33'] ;echo $_GET['v34'] ;echo $_GET['v35'] ;echo $_GET['v36'] ;echo $_GET['v37'] ;echo $_GET['v38'] ;echo $_GET['v39'] ;echo $_GET['v40'] ;echo $_GET['v41'] ;echo $_GET['v42'] ;echo $_GET['v43'] ;echo $_GET['v44'] ;echo $_GET['v45'] ;echo $_GET['v46'] ;echo $_GET['v47'] ;echo $_GET['v48'] ;echo $_GET['v49'] ;echo $_GET['v50'] ;echo $_GET['v51'] ;echo $_GET['v52'];*/

$kayit="UPDATE yg SET  v1='$_GET[v1]',v2='$_GET[v2]',v3='$_GET[v3]',v4='$_GET[v4]',v5='$_GET[v5]',v6='$_GET[v6]',v7='$_GET[v7]',v8='$_GET[v8]',v9='$_GET[v9]',v10='$_GET[v10]',v11='$_GET[v11]',v12='$_GET[v12]',v13='$_GET[v13]',v14='$_GET[v14]',v15='$_GET[v15]',v16='$_GET[v16]',v17='$_GET[v17]',v18='$_GET[v18]',v19='$_GET[v19]',v20='$_GET[v20]',v21='$_GET[v21]',v22='$_GET[v22]',v23='$_GET[v23]',v24='$_GET[v24]',v25='$_GET[v25]',v26='$_GET[v26]',v27='$_GET[v27]',v28='$_GET[v28]',v29='$_GET[v29]',v30='$_GET[v30]',v31='$_GET[v31]',v32='$_GET[v32]',v33='$_GET[v33]',v34='$_GET[v34]',v35='$_GET[v35]',v36='$_GET[v36]',v37='$_GET[v37]',v38='$_GET[v38]',v39='$_GET[v39]',v40='$_GET[v40]',v41='$_GET[v41]',v42='$_GET[v42]',v43='$_GET[v43]',v44='$_GET[v44]',v45='$_GET[v45]',v46='$_GET[v46]',v47='$_GET[v47]',v48='$_GET[v48]',v49='$_GET[v49]',v50='$_GET[v50]',v51='$_GET[v51]',v52='$_GET[v52]',v53='$_GET[v53]',v54='$_GET[v54]',v55='$_GET[v55]',v56='$_GET[v56]',v57='$_GET[v57]',v58='$_GET[v58]',v59='$_GET[v59]',v60='$_GET[v60]',v61='$_GET[v61]',v62='$_GET[v62]',v63='$_GET[v63]',v64='$_GET[v64]',v65='$_GET[v65]',v66='$_GET[v66]',v67='$_GET[v67]',v68='$_GET[v68]',v69='$_GET[v69]',v70='$_GET[v70]',v71='$_GET[v71]',v72='$_GET[v72]',v73='$_GET[v73]',v74='$_GET[v74]',v75='$_GET[v75]',v76='$_GET[v76]',v77='$_GET[v77]',v78='$_GET[v78]',v79='$_GET[v79]',v80='$_GET[v80]',v81='$_GET[v81]',v82='$_GET[v82]',v83='$_GET[v83]',v84='$_GET[v84]',v85='$_GET[v85]',v86='$_GET[v86]',v87='$_GET[v87]',v88='$_GET[v88]',v89='$_GET[v89]',v90='$_GET[v90]',v91='$_GET[v91]',v92='$_GET[v92]',v93='$_GET[v93]',v94='$_GET[v94]',v95='$_GET[v95]',v96='$_GET[v96]',v97='$_GET[v97]',v98='$_GET[v98]',v99='$_GET[v99]',v100='$_GET[v100]',v101='$_GET[v101]',v102='$_GET[v102]',v103='$_GET[v103]',v104='$_GET[v104]',v105='$_GET[v105]',v106='$_GET[v106]',v107='$_GET[v107]',v108='$_GET[v108]',v109='$_GET[v109]',v110='$_GET[v110]',v111='$_GET[v111]',v112='$_GET[v112]',v113='$_GET[v113]',v114='$_GET[v114]',v115='$_GET[v115]',v116='$_GET[v116]',v117='$_GET[v117]',v118='$_GET[v118]',v119='$_GET[v119]',v120='$_GET[v120]',v121='$_GET[v121]',v122='$_GET[v122]',v123='$_GET[v123]',v124='$_GET[v124]',v125='$_GET[v125]',v126='$_GET[v126]',v127='$_GET[v127]',v128='$_GET[v128]',v129='$_GET[v129]',v130='$_GET[v130]',v131='$_GET[v131]',v132='$_GET[v132]',v133='$_GET[v133]',v134='$_GET[v134]',v135='$_GET[v135]',v136='$_GET[v136]',v137='$_GET[v137]',v138='$_GET[v138]',v139='$_GET[v139]',v140='$_GET[v140]',v141='$_GET[v141]',v142='$_GET[v142]',v143='$_GET[v143]',v144='$_GET[v144]',v145='$_GET[v145]',v146='$_GET[v146]',v147='$_GET[v147]',v148='$_GET[v148]',v149='$_GET[v149]',v150='$_GET[v150]',v151='$_GET[v151]',v152='$_GET[v152]',v153='$_GET[v153]',v154='$_GET[v154]',v155='$_GET[v155]',v156='$_GET[v156]',v157='$_GET[v157]',v158='$_GET[v158]',v159='$_GET[v159]',v160='$_GET[v160]',v161='$_GET[v161]',v162='$_GET[v162]',v163='$_GET[v163]',v164='$_GET[v164]',v165='$_GET[v165]',v166='$_GET[v166]',v167='$_GET[v167]',v168='$_GET[v168]',v169='$_GET[v169]',v170='$_GET[v170]',v171='$_GET[v171]',v172='$_GET[v172]',v173='$_GET[v173]',v174='$_GET[v174]',v175='$dtarih',v176='$_GET[v176]',v177='$_GET[v177]',v178='$otarih' where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')";

if(mysql_query($kayit)){
echo '<label>'.trsuz($kayitdegistirildi).'</label><a href="#" onClick="kontrol();">'.trsuz($geridon).'</a>';
}else{
echo '<label><font style="color:Red">'.trsuz($degistirilmedi).'</font>İl-İlçe-Ocak-Yıl Alanlarına Dikkat Ederek...</label><meta http-equiv=refresh content="100; url=http://localhost/form013/frm023kayit.php" /><a href="http://localhost/form013/frm023kayit.php" _fcksavedurl="http://localhost/form013/frm023kayit.php">Tekrar deneyiniz.</a>';
echo mysql_error();
 }

@mysql_close($dbh);
 ?>

 </body>
</html>