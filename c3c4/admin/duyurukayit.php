<?
include("../index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<title>Duyuru Kaydı</title>
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

-->

</style>

</head>



<body>



<form id="form1" name="form1" method="POST" action="duyurukaydet.php" enctype="multipart/form-data">

<table width="53%" border="1" bgcolor="#000000" align="center">

<tr bordercolor="#FFFF00">

<td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Konu:</strong></span></strong></label>

<input name="konu" class="style5" id="konu" type="text" tabindex="1" size="97%" maxlength="254"/></td>

</tr>

<tr bordercolordark="#0000FF" bordercolor="#FFFF00">

<td bordercolor="#FFFF00"><label><strong><span class="style2">İçerik:</span></strong><span class="style2"></span> </label><br />

<textarea name="icerik" class="style5" id="icerik" cols="97%" rows="30" tabindex="2"></textarea></td>

 </tr>

 <tr bordercolor="#FFFF00">

<td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Eklenecek Dosya Adı:</strong></span></strong></label>

<input type="file" name="dosya" size="97%" class="style5"/>

</td>

</tr>

 <tr bordercolor="#FFFF00">

<td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Eklenenen Dosyanın Açıklaması:</strong></span></strong></label>

<input type="text" name="bilgi" size="97%" class="style5"/>

</td>

</tr>

<tr  bordercolordark="#0000FF" bordercolor="#FFFF00">

  <td bordercolor="#FFFF00" align="center">  

</td>

  </tr>

<tr bordercolor="#FFFF00">

<td bordercolor="#FFFF00"><label><strong><span class="style2"><strong>Eklenecek Resim:</strong></span></strong></label>

<input type="file" name="resim" size="97%" class="style5"/>

</td>

</tr>

<tr>

  <td><input name="tarih" id="tarih" type="hidden" tabindex="3" size="50%" maxlength="10" value="<?php $tarih=Date("Y-m-d");

  echo $tarih;?>"/></td>

  </tr>

<tr  bordercolordark="#0000FF" bordercolor="#FFFF00">

  <td bordercolor="#FFFF00" align="center"><input name="duyurukayit" type="submit" class="style5" id="duyurukayit" value="Duyuruyu Kaydet" align="center"  /></td>

  </tr>  

  

  

</table>

 

</form>

<?php
}
?>
</body>

</html>

