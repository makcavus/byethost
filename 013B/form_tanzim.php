<script src="tanzim_degistir.js"></script>
<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["uye"])){
}else{
// timeout periyodu, sn olarak
$inactive = 1300;
if(isset($_SESSION['timeout']) ) {
$session_life = time() - $_SESSION['timeout'];
if($session_life > $inactive)
{
unset($_SESSION['uye']); // oturumda olan değişkenimiz siliniyor
session_destroy(); header("Location: cikis.php"); }
}
$_SESSION['timeout'] = time();  
include("../assets/sablon/form013/header.php");
include("../assets/sablon/form013/sidebar.php");
include('../con_102.php');
include('tanimveyetkiler.php');
$form_klasoru=basename(dirname(__FILE__));
$sorgu_tanzim=mysqli_query($dbh102, "SELECT * from birim where form='$form_klasoru'");
$form_say=mysqli_num_rows($sorgu_tanzim);
if($form_say>0){
while($sonuc_tanzim=mysqli_fetch_array($sorgu_tanzim)){ 
?>
<div class="container">
<div class="form-group">
 <form class="form" name="tanzim_update" id="tanzim_update" method="GET" action="javascript:void(0)" onKeyUp="highlight(event)" onClick="highlight(event)">
<input type="hidden" name="form_say" id="form_say" value="<?php echo $form_say ; ?>">
<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">
<thead class="thead-dark" align="center">
<tbody>
  <tr>
  <th class="bg-primary text-center" width="40%" colspan="3"><h6 style="color:#FFFF00;"><strong>Kayıt Değiştirme Ekranı</strong></h6></th>
  </tr>
<tr>
           <td><font class="Yazi">Form Adı:</font></td>
           <td>             
             <input name="formad" type="text" id="formad" class="form-control form-control-sm w-100 sm" tabindex="1" value="<?php  echo $sonuc_tanzim['form']; ?>" readonly></td>
           </tr>           
           <tr>
            <?php
            if($koduc==$bakanlikyetki or $koduc==$ilyetki){
              ?>
<th colspan="2" class="bg-warning text-center">İL SEVİYESİ</th>
</tr>
           <tr>
             <td><font class="Yazi">İl Kullanıcı Onaylayan Adı:</font></td>
             <td><input name="aheilad" type="text" id="aheilad" class="form-control form-control-sm w-100 sm" tabindex="2" value="<?php  echo $sonuc_tanzim['il_aheadi']; ?>" autofocus></td>
           </tr>
           <tr>
             <td><font class="Yazi">İl Kullanıcı Onaylayan Ünvanı:</font></td>
             <td><input name="aheilunvan" type="text" id="aheilunvan" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['il_aheunvani']; ?>" tabindex="3" required></td>
           </tr>
           <tr>
             <td><font class="Yazi">İl Kullanıcı Düzenleyen Adı:</font></td>
             <td><input name="aseilad" type="text" id="aseilad" class="form-control form-control-sm w-100 sm" tabindex="4" value="<?php  echo $sonuc_tanzim['il_aseadi']; ?>"></td>
           </tr>
           <tr>
             <td><font class="Yazi">İl Kullanıcı Düzenleyen Ünvanı:</font></td>
             <td><input name="aseilunvan" type="text" id="aseilunvan" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['il_aseunvani']; ?>" tabindex="5" required></td>
           </tr>   
           <th colspan="2" class="bg-warning text-center">İLÇE SEVİYESİ</th></tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Onaylayan Adı:</font></td>
             <td><input name="aheilcead" type="text" id="aheilcead" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['ilce_aheadi']; ?>" tabindex="6"></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Onaylayan Ünvanı:</font></td>
             <td><input name="aheilceunvan" type="text" id="aheilceunvan" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['ilce_aheunvani']; ?>" tabindex="7" required></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Düzenleyen Adı:</font></td>
             <td><input name="aseilcead" type="text" id="aseilcead" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['ilce_aseadi']; ?>" tabindex="8"></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Düzenleyen Ünvanı:</font></td>
             <td><input name="aseilceunvan" type="text" id="aseilceunvan" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['ilce_aseunvani']; ?>" tabindex="9" required></td>
           </tr> 
           <?php
            }elseif($koduc==$ilceyetki or $koduc==$kurumyetki){
           ?>                   
            <input name="aheilad" type="hidden" id="aheilad" class="form-control form-control-sm w-100 sm" tabindex="2" value="">
            <input name="aheilunvan" type="hidden" id="aheilunvan" class="form-control form-control-sm w-100 sm" value="" tabindex="3">
            <input name="aseilad" type="hidden" id="aseilad" class="form-control form-control-sm w-100 sm" tabindex="4" value="">
            <input name="aseilunvan" type="hidden" id="aseilunvan" class="form-control form-control-sm w-100 sm" value="" tabindex="5">
            <th colspan="2" class="bg-warning text-center">İLÇE SEVİYESİ</th></tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Onaylayan Adı:</font></td>
             <td><input name="aheilcead" type="text" id="aheilcead" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['ilce_aheadi']; ?>" tabindex="6"></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Onaylayan Ünvanı:</font></td>
             <td><input name="aheilceunvan" type="text" id="aheilceunvan" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['ilce_aheunvani']; ?>" tabindex="7" required></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Düzenleyen Adı:</font></td>
             <td><input name="aseilcead" type="text" id="aseilcead" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['ilce_aseadi']; ?>" tabindex="8"></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Düzenleyen Ünvanı:</font></td>
             <td><input name="aseilceunvan" type="text" id="aseilceunvan" class="form-control form-control-sm w-100 sm" value="<?php  echo $sonuc_tanzim['ilce_aseunvani']; ?>" tabindex="9" required></td>
           </tr>    
           <?php
            }
           ?> 
  </thead>
 </tbody>
 </table> 
 </form> 
 </div> 
 <div class="d-flex flex-wrap justify-content-center"><div class="col-md-6 bg-warning border border-danger text-center"><a href="frm023kayit.php" class="text-center" 
 style="padding:10px;display:block;text-decoration:none;"><i class="fa fa-reply-all fa-lg"></i> İptal</a></div>
<div class="col-md-6 bg-success border border-danger text-center"><a  href=# onClick="tanzimidegistir();" class="text-center text-danger" 
style="padding:10px;display:block;text-decoration:none;"><i class="fa fa-pencil-square-o"></i> Değiştir</a></div>
</div>
<div id="sonuctanzim"></div>
</div>

 <!-- Optional JavaScript -->

<?php

}

}else{
   ?>
<div class="container">
<div class="form-group">
 <form class="form" name="tanzim_update" id="tanzim_update" method="GET" action="javascript:void(0)" onKeyUp="highlight(event)" onClick="highlight(event)">
 <input type="hidden" name="form_say" id="form_say" value="<?php echo $form_say ; ?>">
<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">
<thead class="thead-dark" align="center">
<tbody>
  <tr>
  <th class="bg-primary text-center" width="40%" colspan="3"><h6 style="color:#FFFF00;"><strong>Yeni Kayıt Ekleme Ekranı</strong></h6></th>
  </tr>
<tr>
           <td><font class="Yazi">Form Adı:</font></td>
           <td>             
             <input name="formad" type="text" id="formad" class="form-control form-control-sm w-100 sm" tabindex="1" placeholder="Form adını giriniz." value="<?php  echo $form_klasoru; ?>" readonly></td>
           </tr>           
           <tr>
            <?php
            if($koduc==$bakanlikyetki or $koduc==$ilyetki){
              ?>
<th colspan="2" class="bg-warning text-center">İL SEVİYESİ</th>
</tr>
           <tr>
             <td><font class="Yazi">İl Kullanıcı Onaylayan Adı:</font></td>
             <td><input name="aheilad" type="text" id="aheilad" class="form-control form-control-sm w-100 sm" tabindex="2"  placeholder="İl onaylayan adını giriniz."  autofocus></td>
           </tr>
           <tr>
             <td><font class="Yazi">İl Kullanıcı Onaylayan Ünvanı:</font></td>
             <td><input name="aheilunvan" type="text" id="aheilunvan" class="form-control form-control-sm w-100 sm" placeholder="İl onaylayan ünvanını giriniz." tabindex="3" required></td>
           </tr>
           <tr>
             <td><font class="Yazi">İl Kullanıcı Düzenleyen Adı:</font></td>
             <td><input name="aseilad" type="text" id="aseilad" class="form-control form-control-sm w-100 sm" tabindex="4" placeholder="İl düzenleyen adını giriniz."></td>
           </tr>
           <tr>
             <td><font class="Yazi">İl Kullanıcı Düzenleyen Ünvanı:</font></td>
             <td><input name="aseilunvan" type="text" id="aseilunvan" class="form-control form-control-sm w-100 sm" placeholder="İl düzenleyen ünvanını giriniz." tabindex="5" required></td>
           </tr>   
           <th colspan="2" class="bg-warning text-center">İLÇE SEVİYESİ</th></tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Onaylayan Adı:</font></td>
             <td><input name="aheilcead" type="text" id="aheilcead" class="form-control form-control-sm w-100 sm" placeholder="İlçe onaylayan adını giriniz." tabindex="6"></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Onaylayan Ünvanı:</font></td>
             <td><input name="aheilceunvan" type="text" id="aheilceunvan" class="form-control form-control-sm w-100 sm" placeholder="İlçe onaylayan ünvanını giriniz." tabindex="7" required></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Düzenleyen Adı:</font></td>
             <td><input name="aseilcead" type="text" id="aseilcead" class="form-control form-control-sm w-100 sm" placeholder="İlçe düzenleyen adını giriniz." tabindex="8"></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Düzenleyen Ünvanı:</font></td>
             <td><input name="aseilceunvan" type="text" id="aseilceunvan" class="form-control form-control-sm w-100 sm" placeholder="İlçe düzenleyen ünvanını giriniz." tabindex="9" required></td>
           </tr> 
           <?php
            }elseif($koduc==$ilceyetki or $koduc==$kurumyetki){
           ?>                   
            <input name="aheilad" type="hidden" id="aheilad" class="form-control form-control-sm w-100 sm" tabindex="2" value="">
            <input name="aheilunvan" type="hidden" id="aheilunvan" class="form-control form-control-sm w-100 sm" value="" tabindex="3">
            <input name="aseilad" type="hidden" id="aseilad" class="form-control form-control-sm w-100 sm" tabindex="4" value="">
            <input name="aseilunvan" type="hidden" id="aseilunvan" class="form-control form-control-sm w-100 sm" value="" tabindex="5">
            <th colspan="2" class="bg-warning text-center">İLÇE SEVİYESİ</th></tr>
            <tr>
             <td><font class="Yazi">İlçe Kullanıcı Onaylayan Adı:</font></td>
             <td><input name="aheilcead" type="text" id="aheilcead" class="form-control form-control-sm w-100 sm" placeholder="İlçe onaylayan adını giriniz." tabindex="6" autofocus></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Onaylayan Ünvanı:</font></td>
             <td><input name="aheilceunvan" type="text" id="aheilceunvan" class="form-control form-control-sm w-100 sm" placeholder="İlçe onaylayan ünvanını giriniz." tabindex="7" required></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Düzenleyen Adı:</font></td>
             <td><input name="aseilcead" type="text" id="aseilcead" class="form-control form-control-sm w-100 sm" placeholder="İlçe düzenleyen adını giriniz." tabindex="8"></td>
           </tr>
           <tr>
             <td><font class="Yazi">İlçe Kullanıcı Düzenleyen Ünvanı:</font></td>
             <td><input name="aseilceunvan" type="text" id="aseilceunvan" class="form-control form-control-sm w-100 sm" placeholder="İlçe düzenleyen ünvanını giriniz." tabindex="9" required></td>
           </tr>     
           <?php
            }
           ?> 
  </thead>
 </tbody>
 </table> 
 </form> 
 </div> 
 <div class="d-flex flex-wrap justify-content-center"><div class="col-md-6 bg-warning border border-danger text-center"><a href="frm023kayit.php" class="text-center" 
 style="padding:10px;display:block;text-decoration:none;"><i class="fa fa-reply-all fa-lg"></i> İptal</a></div>
<div class="col-md-6 bg-info border border-danger text-center"><a  href=# onClick="tanzimidegistir();" class="text-center text-danger" 
style="padding:10px;display:block;text-decoration:none;"><i class="fa fa-pencil-square-o"></i> Kaydet</a></div>
</div>
<div id="sonuctanzim"></div>
</div>

<?php
}
}
include("../assets/sablon/form013/footer.php");
?>

<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
<script src="assets/js/mask_hightlight.js"></script>