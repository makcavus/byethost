<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}
?>
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script>
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>
<script language="JavaScript" src="kaydet.js" type="text/javascript"></script>	
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script> 
<?php
include('../con_023.php');
include('piramitalanlari.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
//$aygelen=$_GET['selectay']; 
$iladine=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucumne=mysqli_fetch_array($iladine)){
$ilinadine=$ilsonucumne['ilad'];
}
$ilceadine=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucumne=mysqli_fetch_array($ilceadine)){
$ilceninadine=$ilcesonucumne['ilcead'];
}
?>
<div id="sonuckay"><form name="girdiekle" action="javascript:void(0)" method="get" onKeyUp="highlight(event)" onClick="highlight(event)">
<?php
   include('assets/etf_sablonlar/npkayit_sablonu.php');
   include('assets/etf_sablonlar/gizliinput.php');
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
//@mysqli_close($conn);
$ahkod=$satir['socad'];
if(substr($ocgelen,-3)=='TSM'){
$ahno='Sorumlu Tabibi';
}elseif(substr($ocgelen,-3)=='HSM'){
$ahno='Birim Sorumlusu';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
         
}
?>
   <table class="table table-responsive-sm table-sm table-hover form013ustaralar" style="margin-top:-12px;">
    <thead>
   <tr>
    <th  width="24%" align="center" class="border border-primary text-center" bgcolor="#CEF6EC" colspan="3"><?php echo $duzenleyen ; ?></th>
    <th  width="8%" colspan="1" rowspan="11" bgcolor="#CEF6EC">&nbsp;</th>
    <th  width="24%" align="center" class="border border-primary text-center" bgcolor="#CEF6EC" colspan="3">ONAYLAYAN</th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzadbaslik ; ?></th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input class="form-control" style="font-weight:bold" name="v173"  type="text" onkeyup="esitmigebedvit();" value="<?php echo $asead ; ?>" size="30" tabindex="173"/>
      </th>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onadbaslik ; ?></th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input class="form-control" style="font-weight:bold" name="v176"  type="text" value="<?php echo $drad ; ?>" size="30" tabindex="176"/></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzunbaslik ; ?></th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input class="form-control" style="font-weight:bold" name="v174"  type="text" value="<?php echo $aseunv ; ?>" size="30" tabindex="174"/></th>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onunbaslik ; ?></th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input class="form-control" style="font-weight:bold" name="v177"  type="text" value="<?php echo $ahkod.' '.$ahno ;?>" size="30" tabindex="177"/></th>
  </tr>
  <tr>
    <?php
   $a=Date("d/m/Y");
     ?>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input id="masktest" class="form-control" style="font-weight:bold" name="v175"  type="text" value=<?php echo $a; ?> size="30" tabindex="175"/></th>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" class="border border-primary" bgcolor="#FFFFCC" colspan="2"><input id="masktest1" class="form-control" style="font-weight:bold" name="v178"  type="text" value="<?php echo $a;?>" size="30" tabindex="178"/></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzimzabaslik ; ?></th>
    <th  width="16%"align="center" class="border border-primary" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
    <th  width="8%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onimzabaslik ; ?></th>
    <th  width="16%"align="center" class="border border-primary" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
	</tr>
</thead>
</table>
</form>
