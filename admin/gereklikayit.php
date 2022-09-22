<?
include("../index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}else{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Duyuru Kayd�</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
<!--  
<script language="javascript" type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
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

<style type="text/css">

<!--

body {

	background-color: #000000;



}

body,td,th {

	font-family: Arial, Helvetica, sans-serif;

	color: #0000FF;

}

a:link {

	color: #000000;

	text-decoration: none;

}

a:hover {

	color: #FF0000;

	text-decoration: none;

}

a:visited {

	text-decoration: none;

}

a:active {

	text-decoration: none;

}

.style2 {color: #00FF00}

.style5 {

	font-family: Arial, Helvetica, sans-serif;

	color: #000000;

	font-weight: bold;

}



</style>-->

</head>

<body style="background-color: black;">

<?php
include("../../connect.php");
$result_birim = @mysql_query("select birim_id,birim_ad from birim order by birim_ad asc");
?>


<form class="form-group" id="form1" name="form1" method="POST" action="gereklikaydet.php" enctype="multipart/form-data">

<div class="row">
  <div class="col-md-8 offset-md-2 mt-1 mb-auto">
    <div class="card" style="background-color: black;">
      <div class="card-body">
	  <div class="card-header bg-success" align="left" style="max-height: 3rem;">
        <h5 class="card-title bg-success" align="left">Belge-Form Ekleme<a href="ilekle.php" style="text-decoration:none" tabindex="6"  class="close close-lg" aria-label="Close">
          <span aria-hidden="true"><h4>&times;</h4></span>
        </a></h5>
		</div>
        <div class="card-text">

 
  <table class="table table-sm table-hover table-striped table-responsive-sm table-bordered" align="center">
    <tbody>

<tr>

<td>

<select name="selectbirim" id="selectbirim" class="form-control form-control-sm" tabindex="1" onChange="getState(this.value)">

	<option value=""><?php echo "Birimi Seçiniz";?></option>

<? while($row=mysql_fetch_array($result_birim)) { ?>

<option value="<?=$row['birim_id']?>"><?=trsuz($row['birim_ad'])?></option>

<? } ?>

	</select>
	</td>

</tr>

<tr>

<td>
<div class="input-group">
        <div class="input-group-prepend">
          
        </div>
<input type="text" name="icerik" id="icerik" class="form-control form-control-sm" tabindex="2" placeholder="<?php echo 'İçerik';?>" required><!--required-->
	</div>
 </td>

 </tr>

 <tr>

<td>

<input type="file" name="dosya" id="dosya" class="form-control form-control-sm btn-dark text-danger bg-dark" tabindex="3">

</td>

</tr>

 <tr>

<td>

<input type="text" name="bilgi" id="bilgi" class="form-control form-control-sm" value="<?php
   $a=Date("d.m.Y");
   echo $a;
   ?> " tabindex="4">

</td>

</tr>

<tr bordercolor="#FFFF00">

<td>

<input type="file" name="resim" id="resim" class="form-control form-control-sm btn-dark text-danger bg-dark" tabindex="5">

</td>

</tr>

<tr>

  <td>
  <input name="tamtarih" id="tamtarih" type="hidden" tabindex="3" class="form-control form-control-sm" value="<?php $tarih=Date("Y-m-d");

  echo $tarih;?>"/></td>

  </tr>

<tr  bordercolordark="#0000FF" bordercolor="#FFFF00">

  <td align="center">
  <input name="gereklikayit" type="submit" class="form-control form-control-sm btn-success" id="gereklikayit" value="Belgeyi Kaydet" align="center">
  </td>

  </tr>  

</table>
</div>
		</div>
	  </div>
	</div>
	</div>
</form>

<?php
@mysql_close($gerekli);
}
?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
<script src="../bootstrap-4/popper.js"></script>
<script src="../bootstrap-4/js/bootstrap.min.js"></script>
</body>

</html>

