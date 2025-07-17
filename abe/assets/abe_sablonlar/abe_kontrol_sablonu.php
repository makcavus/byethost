<table class="table table-responsive-sm table-sm form013kayitustaralar" style="background-color:#CCFFFF">
<thead>
   <tr>
    <td width="100%"  class="border-0" colspan="12"><div align="center"><h5><?php echo $frmbaslik; ?></h5></div></td>
  </tr>  
  <tr>
    <td  width="12%" align="left"  class="border-0" colspan="1"><?php echo $ililcebaslik; ?></td>
    <td  width="88%"align="left"  class="border-0" colspan="11"><?php echo '<font size="3" family="Arial">'.$ilinadi.'-'.$ilceninadi.'</font>' ;?></td>
  </tr>
  <tr>
    <td  width="12%" align="left"  class="border-0" colspan="1"><?php echo $kurumbaslik; ?></td>
	<?php
	if($ocgelen=="" or substr($ocgelen,-9)=="Hastanesi"){
	$kurum=$asmninadine;
	}else{
	$kurum=$asmninadine.' - '.$ocgelen;
	}
	?>
    <td  width="88%"align="left"  class="border-0" colspan="11"><?php echo '<font size="3" family="Arial">'.$kurum.'</font>' ;?></td>
  </tr>
  <tr>
    <td  width="12%" align="left"  class="border-0" colspan="1"><?php echo $donembaslik; ?></td>
    <td  width="88%"align="left"   class="border-0"  colspan="11"><?php echo '<font size="3" family="Arial">'.$aygelen.'</font>' ;?></td>
  </tr>
  <tr>
    <td  width="100%"align="center"   class="border-0"  colspan="12">&nbsp;</td>
  </tr>
  <tr>
    <td  width="84%" colspan="10"  class="border border-primary"><div align="center"><?php echo $abevakabaslik; ?></div></td>
    <td  width="16%" align="center" class="border-0" colspan="2"><font face="Arial" size="3">&nbsp;</font></td>
  </tr>
  <tr>
    <td  width="36%"align="center"  class="border border-primary" colspan="4" rowspan="2"><font face="Arial" size="3"><?php echo $hastsinifbaslik; ?></font></td>
    <td  width="16%"align="center"  class="border border-primary" colspan="2" bgcolor="#CEF6EC"><font face="Arial" size="3">A09</font><br />
        <font face="Arial" size="2"><?php echo $addiarebaslik; ?></font><br />
      <font face="Arial" size="2"><?php echo $adenfbaslik; ?></font><br />
      <font face="Arial" size="2">tahmin edilen </font></td>
    <td  width="16%"align="center"  class="border border-primary" colspan="2" bgcolor="#CEF6EC"><font face="Arial" size="3">R11</font><br />
        &nbsp;<br />
      <font face="Arial" size="2"><?php echo $ronbirbaslik; ?></font><br />
      &nbsp;</td>
    <td  width="16%"align="center"  class="border border-primary" colspan="2" bgcolor="#CEF6EC"><font face="Arial" size="3">K52</font><br />
        &nbsp;<br />
      <font face="Arial" size="2"><?php echo $keienfbaslik; ?></font><br />
      <font face="Arial" size="2"><?php echo $keigastbaslik; ?></font></td>
    <td  width="16%" align="center" class="border-0" colspan="2"><font face="Arial" size="3">&nbsp;</font></td>
  </tr>
  <tr>
    <td  width="8%" align="center"  class="border border-primary" colspan="1" bgcolor="#CEF6EC"><font face="Arial" size="2"><?php echo $sifiryasbaslik; ?></font></td>
    <td  width="8%" align="center"  class="border border-primary" colspan="1" bgcolor="#CEF6EC"><font face="Arial" size="2"><?php echo $besyasbaslik; ?></font></td>
    <td  width="8%" align="center"  class="border border-primary" colspan="1" bgcolor="#CEF6EC"><font face="Arial" size="2"><?php echo $sifiryasbaslik; ?></font></td>
    <td  width="8%" align="center"  class="border border-primary" colspan="1" bgcolor="#CEF6EC"><font face="Arial" size="2"><?php echo $besyasbaslik; ?></font></td>
    <td  width="8%" align="center"  class="border border-primary" colspan="1" bgcolor="#CEF6EC"><font face="Arial" size="2"><?php echo $sifiryasbaslik; ?></font></td>
    <td  width="8%" align="center"  class="border border-primary" colspan="1" bgcolor="#CEF6EC"><font face="Arial" size="2"><?php echo $besyasbaslik; ?></font></td>
    <td  width="8%" align="center" class="border-0" colspan="1">&nbsp;</td>
    <td  width="8%" align="center" class="border-0" colspan="1">&nbsp;</td>
  </tr>
  <tr>
    <td width="36%" class="border border-primary" colspan="4"><div align="center"><?php echo $vakasaybaslik; ?></div></td>
    <td  width="8%" align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="1"><div align="center"><?php echo $verim1; ?></div></td>
    <td  width="8%" align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="1"><div align="center"><?php echo $verim2; ?></div></td>
    <td  width="8%" align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="1"><div align="center"><?php echo $verim3; ?></div></td>
    <td  width="8%" align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="1"><div align="center"><?php echo $verim4; ?></div></td>
    <td  width="8%" align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="1"><div align="center"><?php echo $verim5; ?></div></td>
    <td  width="8%" align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="1"><div align="center"><?php echo $verim6; ?></div></td>
    <td  width="8%" align="center" class="border-0">&nbsp;</td>
    <td  width="8%" align="center" colspan="1" class="border-0">&nbsp;</td>
  </tr>
  <tr>
    <td  width="100%" align="center" class="border-0" colspan="12">&nbsp;</td>
  </tr>
  <tr>
    <td  width="100%" align="center" class="border border-primary" colspan="12"><div align="center"><?php echo $labbaslik; ?></div></td>
  </tr>
  <tr>
    <td  width="20%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $kulturbaslik; ?></font></td>
    <td  width="16%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Vibrio cholerae (A00)</font></td>
    <td  width="16%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Salmonella sp.(A02)</font></td>
    <td  width="16%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Shigella sp.(A03)</font></td>
    <td  width="16%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Enterohemorrhagic</font><br />
        <font face="Arial" size="2">Escherichia Coli (A04.3)</font></td>
    <td  width="16%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Campylobacter (A04.5)</font></td>
  </tr>
  <tr>
    <td  width="20%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php if($verim7==NULL){$verim7="&nbsp;"; }else{$verim7=$verim7; }  echo $verim7; ?></td>
    <td  width="16%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $verim8; ?></td>
    <td  width="16%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $verim9; ?></td>
    <td  width="16%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $verim10; ?></td>
    <td  width="16%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $verim11; ?></td>
    <td  width="16%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $verim12; ?></td>
  </tr>
  <tr>
    <td  width="20%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $parazitbaslik; ?></font></td>
    <td  width="16%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Entamoeba histolytica (A06)</font></td>
    <td  width="16%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Cryptosporodium (A07.2)</font></td>
    <td  width="16%" align="center"  colspan="2" class="border-0">&nbsp;</td>
    <td  width="16%" align="center"  colspan="2" class="border-0">&nbsp;</td>
    <td  width="16%" align="center"  colspan="2" class="border-0">&nbsp;</td>
  </tr>
  <tr>
    <td  width="20%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $verim13; ?></td>
    <td  width="16%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $verim14; ?></td>
    <td  width="16%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $verim15; ?></td>
    <td  width="16%" align="center"  colspan="2" class="border-0">&nbsp;</td>
    <td  width="16%" align="center"  colspan="2" class="border-0">&nbsp;</td>
    <td  width="16%" align="center"  colspan="2" class="border-0">&nbsp;</td>
  </tr>
  <tr>
    <td  width="20%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $viralbaslik; ?></font></td>
    <td  width="16%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $rotabaslik; ?></font></td>
    <td  width="16%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $norobaslik; ?></font></td>
    <td  width="16%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $adenobaslik; ?></font></td>
    <td  width="16%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $hepabaslik; ?></font></td>
    <td  width="16%" align="center"  colspan="2" class="border-0">&nbsp;</td>
  </tr>
  <tr>
    <td  width="20%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $verim16; ?></td>
    <td  width="16%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $verim17; ?></td>
    <td  width="16%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $verim18; ?></td>
    <td  width="16%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $verim19; ?></td>
    <td  width="16%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $verim20; ?></td>
    <td  width="16%"align="center"  colspan="2" class="border-0">&nbsp;</td>
  </tr>
  <tr>
    <td  width="100%"align="center"  class="border-0" colspan="12">&nbsp;</td>
  </tr>
  <?php
include('../con_023.php');
include('../form013/tanimveyetkiler.php');
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
//@mysqli_close($conn);
$ahkod=$satir['socad'];
$asmadi=$satir['asmadi'];
if(substr($ocgelen,-3)==$kurumyetki){
  $ahkod=$satir['asmadi'];
$ahno='Sorumlu Tabibi';
}elseif(substr($ocgelen,-3)==$ilceyetki){
  $ahkod=$satir['asmadi'];
  $ahno='İlçe Sorumlusu';
}elseif(substr($ocgelen,-3)==$ilyetki){
$ahno='Birim Sorumlusu';
}elseif(substr($asmadi,-9)=='Hastanesi'){
  $ahkod=$satir['asmadi'];
$ahno='Baştabibi';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
$ahkodum=$ahkod.' '.$ahno;
}
include('gizli_input_kontrol.php');
?>
<tr>
<td  width="36%"  colspan="4" rowspan="6" class="border-0">&nbsp;</td>
</tr>
<tr>
<td  width="24%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="3"><?php echo $duzbaslik; ?></td>
<td  width="8%"  colspan="1" rowspan="5" class="border-0">&nbsp;</td>
<td  width="8%" align="center"  class="border border-primary" bgcolor="#CEF6EC" colspan="3">ONAYLAYAN</td>
<td  width="8%"  colspan="1" rowspan="5" class="border-0">&nbsp;</td>
</tr>
<tr>
   <td  width="8%" align="left"  class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzadbaslik; ?></td>
   <td  width="16%"align="left"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $asead ; ?></td>
   <td  width="8%" align="left"  class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onadbaslik; ?></td>
   <td  width="16%"align="left"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $drad ; ?></td>
  </tr>
  <tr>
    <td  width="8%" align="left"  class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzunbaslik; ?></td>
    <td  width="16%"align="left"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $aseunv ; ?></td>
    <td  width="8%" align="left"  class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onunbaslik; ?></td>
    <td  width="16%"align="left"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $ahkodum ;?></td>
  </tr>
  <tr>
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
    <td  width="8%" align="left"  class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</td>
    <td  width="16%"align="left"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $duztarih; ?></td>
    <td  width="8%" align="left"  class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</td>
    <td  width="16%"align="left"  class="border border-primary" bgcolor="#FFFFCC" colspan="2"><?php echo $ontarih?></td>
  </tr>
  <tr>
    <td  width="8%" align="left"  class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzimzabaslik; ?></td>
    <td  width="16%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2" class="border-0">&nbsp;</td>
    <td  width="8%" align="left"  class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onimzabaslik; ?></td>
    <td  width="16%"align="center"  class="border border-primary" bgcolor="#FFFFCC" colspan="2" class="border-0">&nbsp;</td>
  </tr>
  <tr>
    <td  width="100%"align="center"   class="border-0"  colspan="12">&nbsp;</td>
  </tr>
</thead>
</table>
