<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["uye"])){
}else{
include("../assets/sablon/form013/header.php");
include("../assets/sablon/form013/sidebar.php");
include('../con_102.php');
$sorgu_tanzim=mysqli_query($dbh102, "SELECT * from birim where form='Form013'");
$form_say=mysqli_num_rows($sorgu_tanzim);
if($form_say>0){
while($sonuc_tanzim=mysqli_fetch_array($sorgu_tanzim)){ 
?>
<div class="container">
<div class="form-group">
 <form class="form" name="bizeulasin" id="bizeulasin" method="GET" action="javascript:void(0)" onKeyUp="highlight(event)" onClick="highlight(event)">

<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">
<thead class="thead-dark" align="center">
<tbody>
<tr>
           <td><font class="Yazi">Form Adı:</font></td>
           <td>
             <input name="tarih" type="hidden" id="tarih" class="form-control form-control-sm" value="<?php $tarih=date("Y-m-d"); echo $tarih; ?>">
             <input name="formad" type="text" id="formad" class="form-control form-control-sm w-100 sm" tabindex="1" value="<?php  echo $sonuc_tanzim['form']; ?>" required></td>
           </tr>
           <tr>
<th colspan="2" class="bg-warning text-center">İL SEVİYESİ</th>
</tr>
           <tr>
             <td><font class="Yazi">İl Kullanıcı Onaylayan Adı:</font></td>
             <td><input name="aheilad" type="text" id="aheilad" class="form-control form-control-sm w-100 sm" tabindex="2" value="<?php  echo $sonuc_tanzim['il_aheadi']; ?>"></td>
           </tr>
           <tr>
             <td><font class="Yazi">İl Kullanıcı Onaylayan Ünvanı:</font></td>
             <td><input name="aheilunvan" type="text" id="aheilunvan" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['il_aheunvani']; ?>" tabindex="3" required></td>
           </tr>
           <tr>
             <td><font class="Yazi">İl Kullanıcı Düzenleyen Adı:</font></td>
             <td><input name="aseilad" type="text" id="aseilad" class="form-control form-control-sm w-100 sm" tabindex="2" value="<?php  echo $sonuc_tanzim['il_aseadi']; ?>"></td>
           </tr>
           <tr>
             <td><font class="Yazi">İl Kullanıcı Düzenleyen Ünvanı:</font></td>
             <td><input name="aseilunvan" type="text" id="aseilunvan" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['il_aseunvani']; ?>" tabindex="3" required></td>
           </tr>
           <tr>
<th colspan="2" class="bg-warning text-center">İLÇE SEVİYESİ</th>
</tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Onaylayan Adı:</font></td>
             <td><input name="aheilcead" type="text" id="aheilcead" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['ilce_aheadi']; ?>" tabindex="2"></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Onaylayan Ünvanı:</font></td>
             <td><input name="aheilceunvan" type="text" id="aheilceunvan" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['ilce_aheunvani']; ?>" tabindex="3" required></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Düzenleyen Adı:</font></td>
             <td><input name="aseilcead" type="text" id="aseilcead" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['ilce_aseadi']; ?>" tabindex="2"></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Düzenleyen Ünvanı:</font></td>
             <td><input name="aseilceunvan" type="text" id="aseilceunvan" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['ilce_aseunvani']; ?>" tabindex="3" required></td>
           </tr>
  </thead>
 </tbody>
 </table>
 </form> 
 </div>
 <div class="col-md-12 bg-light text-center"><a href="frm023kayit.php" class="text-center" style="padding:10px;display:block;text-decoration:none;"><i class="fa fa-reply-all fa-lg"></i> Kapat</a></div>
</div>
 <!-- Optional JavaScript -->

<?php

}

}else{
    echo "kayıt";
}
}
include("../assets/sablon/form013/footer.php");

?>

<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>