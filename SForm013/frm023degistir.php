<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>
<link rel="stylesheet" href="assets/css/form013style.css">
<script type="text/javascript" src="degistir.js"></script>
<script type="text/javascript" src="jquery-latest.min.js"></script> 
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script>
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script>
<div id="sonuckay"><form class="form" name="girdiekleme" action="javascript:void(0)" method="get" onKeyUp="highlight(event)" onClick="highlight(event)">
<?php
include('../con_023.php');
include('frm013alanlari.php');
//include("tanimveyetkiler.php");
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen= $_GET['selectay'];
$resultvyil = @mysqli_query($dbh,"select * from veris where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
include('assets/form013_sablonlar/form013_veri_seti.php');
}
include('assets/form013_sablonlar/toplamsutunu.php');
?>
<?php
$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
$ilceninadi=$ilcesonucum['ilcead'];
}
?>
<table class="table table-responsive-sm table-sm">
<thead>
  <tr>
  <th class="bg-warning text-center" width="30%" colspan="3">
  <a class="btn btn-sm btn-success" style="width:100px" href=# onClick="kontrol();"title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a>
  </th>
<th class="bg-primary text-center" width="40%" colspan="3"><h6 style="color:#FFFF00;">Kayıt Değiştirme Ekranı</h6></th>
<th class="bg-warning text-center" width="30%" colspan="3"><a class="btn btn-sm btn-primary" style="width:100px" href=# onClick="girdiyidegistir();"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Değiştir</a>
</th>
</tr>
</thead>
</table>
<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>">
<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>">
<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>">
<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>">
<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>">
 

<?php
include('assets/form013_sablonlar/form013degistir_sablonu.php');
include('assets/form013_sablonlar/gizli_input_degistir.php');
?>
   <table class="table table-responsive-sm table-sm form013degistirustaralar" style="background-color:#CCFFFF">
   <thead>
     <tr>
       <th  class="border border-primary" align="left"bgcolor="white" colspan="2">&nbsp;Adı Soyadı</th>
       <td  class="border border-primary"align="left" bgcolor="white" colspan="7"><input name="v173" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim173 ; ?>" size="40" tabindex="173" align="middle"></td>
       <th width="27%" rowspan="4" align="left" class="border border-0 align-middle text-center"><a class="btn btn-sm btn-success" style="width:100px" href=# onClick="kontrol();"title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a><br><a class="btn btn-sm btn-primary mt-3" style="width:100px" href=# onClick="girdiyidegistir();" tabindex="179"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Değiştir</a></th>
       <th  class="border border-primary" align="left"bgcolor="white" colspan="2">&nbsp;Adı Soyadı</th>
       <td  class="border border-primary" width="27%"align="left" bgcolor="white" colspan="7"><input name="v176" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim176 ; ?>" size="40" tabindex="176" align="middle"></td>
     </tr>
     <tr>
       <th  class="border border-primary" align="left"bgcolor="white" colspan="2">&nbsp;Ünvanı</th>
       <td  class="border border-primary"align="left" bgcolor="white" colspan="7"><input name="v174" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim174 ; ?>" size="40" tabindex="174" align="middle"></td>
       <th  class="border border-primary" align="left"bgcolor="white" colspan="2">&nbsp;Ünvanı</th>
       <td  class="border border-primary" width="27%"align="left" bgcolor="white" colspan="7"><input name="v177" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim177 ; ?>" size="40" tabindex="177" align="middle"></td>
     </tr>
     <tr>
       <?php
   $a=Date("d/m/Y");
   ?>
       <th  class="border border-primary" align="left"bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <td  class="border border-primary"align="left" bgcolor="white" colspan="7"><input id="masktest" class="form-control form-control-sm text-center border-0" name="v175"  type="text" value="<?php echo $a; ?>" size="40" tabindex="175"></td>
       <th  class="border border-primary" align="left"bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <td  class="border border-primary" width="27%"align="left" bgcolor="white" colspan="7"><input id="masktest1" class="form-control form-control-sm text-center border-0" name="v178"  type="text" value="<?php echo $a;?>" size="40" tabindex="178"></td>
     </tr>
     <tr>
       <th  class="border border-primary" align="left"bgcolor="white" colspan="2">&nbsp;İmza</th>
       <th  class="border border-primary"align="center" bgcolor="white" colspan="7">&nbsp;</th>
       <th  class="border border-primary" align="left"bgcolor="white" colspan="2">&nbsp;İmza</th>
       <th  class="border border-primary" width="27%"align="center" bgcolor="white" colspan="7">&nbsp;</th>
     </tr>
	   </thead>
   </table> 
</form>
<!-- Optional JavaScript -->
      