<?php

if($ocgelen=="" or substr($ocgelen,-9)=="Hastanesi"){
$kurum=$asmninadine;
}else{
$kurum=$asmninadine;
}


if($verim26==0 and $verim27==0 and $verim28==0){
$kultur="";
$hepsifir="Gaita tahlili yapılmamıştır."; 
}else if($verim26==0 and $verim29==0){
  $hepsifir="";
$kultur="";
}else if($verim26>=1 and $verim32==0){
  $hepsifir="";
$gkdurum="gaita kültürü yapılmıştır.Sonucu henüz belli değildir.";
$kultur=$verim26.' '.$gkdurum ;
}else if($verim26>=1 and $verim32>=1){
  $hepsifir="";
$gkpozcik="kültür sonucu pozitif çıkmıştır.";
$gkdurum="gaita kültürü yapılmıştır.";
$kultur=$verim26.' '.$gkdurum.' '.$verim32.' '.$gkpozcik;
}
if($verim27==0 and $verim30==0){
$parazit="";
}else if($verim27>=1 and $verim33==0){
$gpdurum="parazit incelemesi yapılmıştır.Parazit inceleme sonucu negatiftir.";
$parazit=$verim27.' '.$gpdurum ;
}else if($verim27>=1 and $verim33>=1){
$gppozcik="parazit inceleme sonucu pozitif çıkmıştır.";
$gpdurum="parazit incelemesi yapılmıştır.";
$parazit=$verim27.' '.$gpdurum.''.$verim33.' '.$gppozcik ;
}
if($verim28==0 and $verim31==0){
$viral="";
}else if($verim28>=1 and $verim34==0){
$gvdurum="viral etken incelemesi yapılmıştır.Viral etken inceleme sonucu negatiftir.";
$viral=$verim28.' '.$gvdurum ;
}else if($verim28>=1 and $verim34>=1){
$gvpozcik="viral etken inceleme sonucu pozitif çıkmıştır.";
$gvdurum="viral etken incelemesi yapılmıştır.";
$viral=$verim28.' '.$gvdurum.''.$verim34.' '.$gvpozcik ;
}
?>

<?php
$verideg="Hastane AGE Vaka Artışı Sorgulama Formu ve yukarıdaki veriler değerlendirildiğinde";
$digerhast="Diğer hastanelere ait verilerin normal olduğu görülmektedir.";
$episonuc="Sonuç olarak bu hastanedeki vakalar incelendiğinde epidemiyolojik bakımdan salgın niteliği taşıyacak bir durum tesbit edilmemiştir.";
if(substr($verim1,0,35)=="Veri girişi hatası mevcut değildir." and substr($verim2,0,38)=="Mükerrer kayıt girişi mevcut değildir.") {
$artis="nde";
$sonuchata="hatalı veri girişi ve mükerrer kayıt girişi olmadığı görülmüştür.";
$sonuctop=$kurum.' '.$artis.' '.$sonuchata;
}else if(substr($verim1,0,35)!="Veri girişi hatası mevcut değildir." and substr($verim2,0,38)=="Mükerrer kayıt girişi mevcut değildir."){
$artis="nde artış olmadığı,";
$sonuchata="hatalı veri girişinden dolayı vaka sayısının fazla olduğu görülmüştür.";
$sonuctop=$kurum.' '.$artis.' '.$sonuchata;
}else if(substr($verim1,0,35)=="Veri girişi hatası mevcut değildir." and substr($verim2,0,38)!="Mükerrer kayıt girişi mevcut değildir.") {
$artis="nde artýþ olmadýðý,";
$sonuchata="mükerrer kayıt girişinden dolayı vaka sayısının fazla olduğu görülmüştür.";
$sonuctop=$kurum.' '.$artis.' '.$sonuchata;
}else if(substr($verim1,0,35)!="Veri girişi hatası mevcut değildir." and substr($verim2,0,38)!="Mükerrer kayıt girişi mevcut değildir.") {
$artis="nde artış olmadığı,";
$sonuchata="hatalı veri girişi ve mükerrer kayıt girişinden dolayı vaka sayısının fazla olduğu görülmüştür.";
$sonuctop=$kurum.' '.$artis.' '.$sonuchata;

}

?>

<?php
//include('con_023.php');
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad LIKE '%TSM')order by dradi asc";
$sonucak=mysqli_query($dbh,$sql);
  while($satir=mysqli_fetch_array($sonucak))
{
//@mysqli_close($conn);
$ahkod=$satir['socad'];
$ahkodum=$satir['asmadi'];
if(substr($ahkod,-3)=='TSM'){
$ahno='';//Sorumlu Tabibi
}elseif(substr($ahkod,-3)=='HSM'){
$ahno='Birim Sorumlusu';
}elseif(substr($ahkod,-9)=='Hastanesi'){
$ahno='Kurum Sorumlusu';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];


        
}


?>

  <?php
$duzgelentarih=$verim175; 
$duzgelentarihgun=substr($duzgelentarih,8,2);
$duzgelentarihay=substr($duzgelentarih,5,2);
$duzgelentarihyil=substr($duzgelentarih,0,4);
$duztarih=$duzgelentarihgun.'.'.$duzgelentarihay.'.'.$duzgelentarihyil; 

$ongelentarih=$verim178; 
$ongelentarihgun=substr($ongelentarih,8,2);
$ongelentarihay=substr($ongelentarih,5,2);
$ongelentarihyil=substr($ongelentarih,0,4);
$ontarih=$ongelentarihgun.'.'.$ongelentarihay.'.'.$ongelentarihyil; 



?>

<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
  <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
  <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
  <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
  <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
<table class="table table-responsive-sm table-sm table-bordered form013kayitustaralar" style="background-color:#CCFFFF">
<thead>  
  <tr>
    <th  width="100%" align="center" colspan="20"  class="border-0 text-center"><h5><?php echo $c3c4baslik; ?></h5></th>
  </tr>
  <tr>
  <th  width="100%" align="center" colspan="20" class="border-1 bg-warning text-center"><?php echo $analizraporbaslik; ?></th> 
</tr>
  <tr>
   
  </tr>
   <tr>
    <th  width="100%" align="left" colspan="20"  class="border-0 "><font size="2" family="times new roman" weight="bold">1-Hastaneden</font> A09-R11-K52 <font size="2" family="times new roman" weight="bold"><?php echo $icd; ?></font></th>
</tr>
    <th  width="100%" align="left" colspan="20"  class="border-0 "><?php $hastaliste="tarihli hasta listesi ektedir."; echo '<font size="3" family="Arial">'.$ilinadi.'-'.$ilceninadi.' '.$kurum.' '.$parantezac.' '.$xtoplam.' '.$hastayla.' '.$sinyaltur.' '.$sinyali.' '.$noktatarih.' '.$hastaliste.'</font>' ;?></th>
  </tr>
  <tr>

  </tr>
	<tr>
    <th  width="100%" align="left"colspan="20"  class="border-0 " rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $veri; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="border-0"><?php echo '<font size="3" family="Arial">'.$verim1.'</font>'; ?></th>
  </tr>
<tr>

  </tr>
	<tr>
    <th  width="100%" align="left"colspan="20"  class="border-0 " rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $mukerrer; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="border-0"><?php echo '<font size="3" family="Arial">'.$verim2.'</font>'; ?></th>
  </tr>  
   <tr>
   <tr>

  </tr>
	<tr>
    <th  width="100%" align="left"colspan="20"  class="border-0 " rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $kumelenme; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="border-0"><?php echo '<font size="3" family="Arial">'.$verim3.'</font>'; ?></th>
  </tr>
  <tr>

  </tr>
   <tr>
    <th  width="100%" align="left" colspan="20" rowspan="1"  class="border-0"><font size="2" family="times new roman" weight="bold"><?php echo $dagilim; ?></font></th>
</tr>
    <tr>
  <th  width="10%" align="center" colspan="2" class="text-center border-1 border-dark" bgcolor="#CEF6EC">0-11 ay</th>
  <th  width="10%" align="center" colspan="2" class="text-center border-1 border-dark" bgcolor="#CEF6EC">1-4 y</th>
  <th  width="10%" align="center" colspan="2" class="text-center border-1 border-dark" bgcolor="#CEF6EC">5-9 y</th>
  <th  width="10%" align="center" colspan="2" class="text-center border-1 border-dark" bgcolor="#CEF6EC">10-14 y</th>
  <th  width="10%" align="center" colspan="2" class="text-center border-1 border-dark" bgcolor="#CEF6EC">15-19 y</th>
  <th  width="10%" align="center" colspan="2" class="text-center border-1 border-dark" bgcolor="#CEF6EC">20-29 y</th>
  <th  width="10%" align="center" colspan="2" class="text-center border-1 border-dark" bgcolor="#CEF6EC">30-44 y</th>
  <th  width="10%" align="center" colspan="2" class="text-center border-1 border-dark" bgcolor="#CEF6EC">45-64 y</th>
  <th  width="10%" align="center" colspan="2" class="text-center border-1 border-dark" bgcolor="#CEF6EC">65+y</th>
  <th  width="10%" align="center" colspan="2" class="text-center border-1 border-dark" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan">E</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink">K</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan">E</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink">K</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan">E</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink">K</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan">E</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink">K</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan">E</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink">K</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan">E</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink">K</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan">E</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink">K</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan">E</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink">K</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan">E</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink">K</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan">E</th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink">K</th>
  </tr>
  <tr>
    <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim4.'</font>'; ?></th>
    <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim5.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim6.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim7.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim8.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim9.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim10.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim11.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim12.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim13.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim14.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim15.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim16.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim17.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim18.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim19.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan"><?php echo '<font size="3" family="Arial">'.$verim20.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink"><?php echo '<font size="3" family="Arial">'.$verim21.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="cyan"><?php
  $etoplam=$verim4+$verim6+$verim8+$verim10+$verim12+$verim14+$verim16+$verim18+$verim20; echo '<font size="3" family="Arial">'.$etoplam.'</font>'; ?></th>
  <th  width="5%" align="center" colspan="1" class="text-center border-1 border-dark" bgcolor="pink"><?php $ktoplam=$verim5+$verim7+$verim9+$verim11+$verim13+$verim15+$verim17+$verim19+$verim21; echo '<font size="3" family="Arial">'.$ktoplam.'</font>'; ?></th>
  </tr>
<tr>

  </tr>
	<tr>
    <th  width="100%" align="left"colspan="20"  class="border-0" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $toplu; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="border-0"><?php echo '<font size="3" family="Arial">'.$verim22.'</font>'; ?></th>
  </tr>  
<tr>

  </tr>
	<tr>
    <th  width="100%" align="left"colspan="20"  class="border-0" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $ayniaile; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="border-0"><?php echo '<font size="3" family="Arial">'.$verim23.'</font>'; ?></th>
  </tr>
	<tr>

	</tr>
	<tr>
    <th  width="100%" align="left"colspan="20"  class="border-0" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $meslekgr; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="border-0"><?php echo '<font size="3" family="Arial">'.$verim25.'</font>'; ?></th>
  </tr>
  <tr>

  </tr>
	<tr>
    <th  width="100%" align="left"colspan="20" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $gaita; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="border-0"><?php echo '<font size="3" family="Arial">'.$hepsifir.''.$kultur.''.$parazit.''.$viral.'</font>'; ?></th>
  </tr>
<tr>

  </tr>
	<tr>
    <th  width="100%" align="left"colspan="20"  class="border-0" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $ayaktayatan; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="border-0"><?php echo '<font size="3" family="Arial">'.$verim35.'</font>'; ?></th>
  </tr>
<tr>

  </tr>
	<tr>
    <th  width="100%" align="left"colspan="20"  class="border-0" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $gorus; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="border-0"><?php echo '<font size="3" family="Arial">'.$verim36.'</font>'; ?></th>
  </tr>
<tr>

  </tr>
	<tr>
    <th  width="100%" align="left"colspan="20"  class="border-0" rowspan="1"><font size="2" family="times new roman" weight="bold"><?php echo $sunumunesi; ?></font></th>
  </tr>
  <tr>
  <th  width="100%" align="left" colspan="20"  class="border-0"><?php echo '<font size="3" family="Arial">'.$verim37.'</font>'; ?></th>
  </tr>		
  <tr>
<th  width="100%" align="center" colspan="20" class="border-1 bg-warning text-center"><?php echo $degraporbaslik; ?></th>  
</tr>
<tr>
  <th  width="100%" align="left" colspan="20"  class="border-0" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim38.'</font>'; ?></th>
  </tr>		
<tr>
  <th  width="100%" align="left" colspan="20"  class="border-0"><?php echo '<font size="3" family="Arial">'.$verim40.'</font>'; ?></th>
  </tr>		
   <tr>
	<th width="100%" align="center" colspan="20"  class="border-0" class="border-1"><?php echo $ikametbaslik; ?></th>
  </tr>
       <tr>
 <th width="25%" align="left" colspan="5" class="border-1"><?php echo $yerlesim; ?></th>
 <th width="25%" align="center" colspan="5" class="border-1"><?php echo $ikamet; ?></th>
 <th width="25%" align="left" colspan="5" class="border-1"><?php echo $yerlesim; ?></th>
 <th width="25%" align="center" colspan="5" class="border-1"><?php echo $ikamet; ?></th> 
       </tr>
	   
<tr>  
 <th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim41.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim42.'</font>'; ?></th>
 <th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim43.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim44.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim45.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim46.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim47.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim48.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim49.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim50.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim51.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim52.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim53.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim54.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim55.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim56.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim57.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim58.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim59.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim60.'</font>'; ?></th>
  </tr>	 
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim61.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim62.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim63.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim64.'</font>'; ?></th>
  </tr>	  
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim65.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim66.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim67.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim68.'</font>'; ?></th>
  </tr>   
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim69.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim70.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim71.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim72.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim73.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim74.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim75.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim76.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim77.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim78.'</font>'; ?></th>
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim79.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim80.'</font>'; ?></th>
  </tr>
<tr>
 <th width="50%" align="left" colspan="10" class="border-1">TOPLAM</th>
 <th width="50%" align="center" colspan="10" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim81.'</font>'; ?></th>
  </tr>  
<tr>
     </tr>
    <tr>
	<th width="100%" align="center" colspan="20" class="border-1"><?php echo $polibaslik; ?></th>
  </tr>
       <tr>
 <th width="25%" align="left" colspan="5" class="border-1"><?php echo $padi; ?></th>
 <th width="25%" align="center" colspan="5" class="border-1"><?php echo $bassay; ?></th>
 <th width="25%" align="left" colspan="5" class="border-1"><?php echo $musyatan; ?></th>
 <th width="25%" align="center" colspan="5" class="border-1"><?php echo $seryatan; ?></th> 
       </tr>
	   
<tr>  
 <th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim82.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim83.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim84.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim85.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim86.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim87.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim88.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim89.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim90.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim91.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim92.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim93.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim94.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim95.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim96.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim97.'</font>'; ?></th>
  </tr>
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim98.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim99.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim100.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim101.'</font>'; ?></th>
  </tr>	   
<tr>  
<th  width="25%" align="left" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim102.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim103.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim104.'</font>'; ?></th>
<th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim105.'</font>'; ?></th>
  </tr>	 
<tr>
 <th width="25%" align="left" colspan="5" class="border-1">TOPLAM</th>
 <th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim106.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim107.'</font>'; ?></th>
 <th  width="25%" align="center" colspan="5" class="border-1"><?php echo '<font size="3" family="Arial">'.$verim108.'</font>'; ?></th>
  </tr>      
</thead>
</table>
<table class="table table-responsive-sm table-sm table-bordered form013kayitustaralar" style="background-color:#CCFFFF">
    <thead>
 <tr>
<th  width="100%" align="center" bordercolor="black" colspan="20" class="border-1 bg-warning text-center"><?php echo $sonucbolum; ?></th>  
</tr>
<tr>
  <th  width="100%" align="left" colspan="20" class="border-1"><?php echo '<font size="3" family="Arial">'.$verideg.' '.$sonuctop.' '.$digerhast.' '.$verim22.' '.$verim3.' '.$verim35.' '.$hepsifir.''.$kultur.''.$parazit.''.$viral.' '.$episonuc.' '.$verim109.'</font>'; ?></th>
</tr>	
<tr>
   </tr>
</thead>
</table>
<table class="table table-responsive-sm table-sm table-bordered form013kayitustaralar" style="background-color:#CCFFFF">
    <thead>
  <tr>
    <th  width="24%" colspan="3"><?php echo $duzenleyen; ?></th>
    <th  width="8%" colspan="1" rowspan="11">&nbsp;</th>
    <th  width="8%" align="center" colspan="3">ONAYLAYAN</th>
	
  </tr>
  <tr>
    <th  width="8%" align="left" colspan="1">&nbsp;<?php echo $duzadbaslik; ?></th>
    <th  width="16%"align="left" colspan="2"><?php echo $asead ; ?></th>
    <th  width="8%" align="left" colspan="1">&nbsp;<?php echo $onadbaslik; ?></th>
    <th  width="16%"align="left" colspan="2"><?php echo $drad ; ?></th>
  </tr>
  <tr>
    <th  width="8%" align="left" colspan="1">&nbsp;<?php echo $duzunbaslik; ?></th>
    <th  width="16%"align="left" colspan="2"><?php echo $aseunv ; ?></th>
    <th  width="8%" align="left" colspan="1">&nbsp;<?php echo $onunbaslik; ?></th>
    <th  width="16%"align="left" colspan="2"><?php echo $ahkodum ;?></th>
  </tr>
  <tr>
  <th  width="8%" align="left" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" colspan="2"><?php echo $duztarih; ?></th>
    <th  width="8%" align="left" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" colspan="2"><?php echo $ontarih?></th>
  </tr>
  <tr>
    <th  width="8%" align="left" colspan="1">&nbsp;<?php echo $duzimzabaslik; ?></th>
    <th  width="16%"align="center" colspan="2">&nbsp;</th>
    <th  width="8%" align="left" colspan="1">&nbsp;<?php echo $onimzabaslik; ?></th>
    <th  width="16%"align="center" colspan="2">&nbsp;</th>
  </tr>
  </thead>
</table>
