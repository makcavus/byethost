<?php
include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
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
?>
<script language="javascript" type="text/javascript" src="assets/js/tiny_mce/tiny_mce.js"></script>
<script language="javascript" type="text/javascript">
tinyMCE.init({
    // General options
    mode : "textareas",
    theme : "advanced",
    plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

    // Theme options
    theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
    theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
    theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
    theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",
    theme_advanced_statusbar_location : "bottom",
    theme_advanced_resizing : true,

    // Example content CSS (should be your site CSS)
    content_css : "css/content.css",

    // Drop lists for link/image/media/template dialogs
    template_external_list_url : "lists/template_list.js",
    external_link_list_url : "lists/link_list.js",
    external_image_list_url : "lists/image_list.js",
    media_external_list_url : "lists/media_list.js",

    // Replace values for the template plugin
    template_replace_values : {
        username : "Some User",
        staffid : "991234"
    }
});
</script>
<?php include('../form013/tanimveyetkiler.php'); ?>
<form class="form-group" id="form1" name="form1" method="POST" action="duyurukaydet.php" enctype="multipart/form-data">
<div class="row">
  <div class="col-md-8 offset-md-2 mt-1 mb-auto">
    <div class="card" style="background-color: black;">
      <div class="card-body">
	  <div class="card-header bg-success" align="left" style="max-height: 3rem;">
        <h5 class="card-title bg-success" align="left">Duyuru Ekleme<a href="admin.php" style="text-decoration:none" tabindex="6"  class="close close-lg" aria-label="Close">
          <span aria-hidden="true"><h4>&times;</h4></span>
        </a></h5>
		</div>
        <div class="card-text">

 
  <table class="table table-sm table-hover table-striped table-responsive-sm table-bordered" align="center">
    <tbody>
     <tr>
      <td colspan="2">
          <div class="input-group">
        <div class="input-group-prepend">
          
        </div>
        <input type="text" class="form-control form-control-sm w-100" id="konu" name="konu" tabindex="1" placeholder="Konuyu Giriniz..." aria-describedby="inputGroupPrepend2" required><!--required-->
      </div>
      </td>
    </tr>
    <tr>
      <td colspan="2">
         <div class="input-group">
        <div class="input-group-prepend">
          
        </div>
          <textarea name="icerik" class="form-control form-control-sm" id="icerik" rows="15" tabindex="2" placeholder="Duyuru Metnini Giriniz..."></textarea>
          </div>
          </td>
    </tr>
    <tr>
      <td>
           <input type="file" name="dosya" id="dosya" class="form-control form-control-sm btn-dark text-danger bg-dark" value="Dosya:">
	  
      <td>
          <input type="text" name="bilgi" class="form-control form-control-md" placeholder="Yüklenen Dosyanın Açıklamasını Giriniz.">
          </td>
    </tr>
    <tr>      
      <td>
      <input type="text" name="resimaaciklama" class="form-control form-control-md text-danger bg-dark" placeholder="Ana Sayfa Resmini yükleyiniz..." disabled></td>
      <td>
      <input type="file" name="resim" class="form-control form-control-sm btn-dark text-danger bg-dark"></td>
    </tr>
    <tr>
      <td>
      <input type="file" name="foto1" class="form-control form-control-sm btn-dark text-danger bg-dark">
      </td>
      <td>
          <input type="file" name="foto2" class="form-control form-control-sm btn-dark text-danger bg-dark">
          </td>
    </tr>
	<tr>
      <td>
          <input type="file" name="foto3" class="form-control form-control-sm btn-dark text-danger bg-dark">
          </td>
      <td>
          <input type="file" name="foto4" class="form-control form-control-sm btn-dark text-danger bg-dark">
          </td>
    </tr>
	<tr>
      <td>
          <input type="file" name="foto5" class="form-control form-control-sm btn-dark text-danger bg-dark">
          </td>
      <td>
          <input type="file" name="foto6" class="form-control form-control-sm btn-dark text-danger bg-dark">
          </td>
    </tr>
	<tr>
      <td>
          <input type="file" name="foto7" class="form-control form-control-sm btn-dark text-danger bg-dark">
          </td>
      <td>
          <input type="file" name="foto8" class="form-control form-control-sm btn-dark text-danger bg-dark">
          </td>
    </tr>
	<tr>
      <td>
          <input type="file" name="foto9" class="form-control form-control-sm btn-dark text-danger bg-dark">
          </td>
      <td>
          <input type="file" name="foto10" class="form-control form-control-sm btn-dark text-danger bg-dark">
          </td>
    </tr>
    <tr>
      <td colspan="2"><input name="tarih" id="tarih" type="hidden" tabindex="3" class="form-control form-control-sm" value="<?php $tarih=Date("Y-m-d");
  echo $tarih;?>"></td>
    </tr>
    <tr>
      <td colspan="2" class="text-center"><input name="duyurukayit" type="submit" class="form-control form-control-sm btn-success" id="duyurukayit" value="Duyuruyu Kaydet" align="center"></td>
    </tr>
    </tbody>
  </table>
  
  </div>
		</div>
	  </div>
	</div>
	</div>
	</form>
<?php 
}
?>
<!-- Optional JavaScript -->
<?php
include("../assets/sablon/form013/footer.php");
?>
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>



 