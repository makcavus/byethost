<?
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif;
border-style: none;
text-align: center; 
    font-size : 13px;
    color : #000000;
border-top-width: 1px;
	border-bottom-width: 1px;
border-right-width: 1px;
border-left-width: 1px;	
	}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 13px;
	font-style:normal;
	border-top-width: 1px;
	border-bottom-width: 1px;
border-right-width: 1px;
border-left-width: 1px;
border-top-style: solid;
border-right-style: solid;
border-bottom-style: solid;
border-left-style: solid;
border-top-color: #0066CC;
border-right-color: #0066CC;
border-left-color: #0066CC;
border-bottom-color: #0066CC;
}
.style8 {font-family: "Times New Roman", Times, serif; font-weight: bold; }
.style18 {font-size: 9; }
.style19 {
	font-size: 13px;
	font-weight: bold;
}
.style21 {font-size: 12px}
.style22 {
	font-size: 12px;
	font-weight: bold;
}
.style23 {font-size: 12; }
.style25 {
	font-size: 16px;
	font-weight: bold;
}
.style26 {font-size: 14px; font-weight: bold; }
.style27 {font-size: 14px; }
-->
</style>
<script language="JavaScript" src="kaydet.js" type="text/javascript">
</script>	
<script type="text/javascript" src="../jquery-latest.min.js"></script> 
    <script type="text/javascript" src="../jquery.maskedinput-1.2.1.pack.js"></script> 
    <script type="text/javascript"> 
        $(function() { 
            $("#masktest").mask("99.99.9999"); 
 $("#masktest1").mask("99.99.9999");
            // Contents of textboxes will be selected when receiving focus. 
            $("input[type=text]") 
                .focus(function() { 
                    $(this).select(); 
                }); 
        }); 
    </script> 
</head>

<body>
<?php
include('con_023.php');
$uyekodu=iconv("utf-8","iso-8859-9",$_GET['uyekodum']);
?>
<div id="drdiv"><form name="girdiekle" action="javascript:void(0)" method="get">
  <table border="0" bordercolor="#000000" align="center" cellpadding="0" cellspacing="0" width="100%">
  <th class="style5" width="30%"align="left" bordercolor="white" bgcolor="#FFCC00" colspan="3"><a href=# onclick="kontroluye();"><img src="../images/iptal.png" /></a></th>
      <th class="style5" width="40%" align="center" bordercolor="white" bgcolor="blue" colspan="3"><font size="4" color="yellow">Yeni Kullanıcı Ekleme Ekranı</font></th>
    <th class="style5" width="30%" align="right" bordercolor="yellow" bgcolor="#FFCC00" colspan="3"><a href="#" tabindex="1" title="Kaydet" onclick="uyeekle();"><img src="../images/kaydet.png" /></a></th>
     </table>

<table bordercolor="white" border="0" align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<th bordercolor="white" bgcolor="yellow" align="center" colspan="7">&nbsp;</th>
</tr>
<tr>
<input type="hidden" name="kulkay" id="kulkay" value="<? echo $uyekodu; ?>">
<th bordercolor="white" bgcolor="yellow" align="left"> 
<label class="style3" >Doktor Adı:</label></th>
<th bordercolor="white" bgcolor="yellow" align="left"><input type="text" name="doktoradi" id="doktoradi" /></th>
<th bordercolor="white" bgcolor="yellow" align="left"> 
<label class="style3" >Kullanıcı Adı:</label></th>
<th bordercolor="white" bgcolor="yellow" align="left"> 
<input type="text" name="kuladi" id="kuladi"></th>
<th bordercolor="white" bgcolor="yellow" align="left"> 
<label class="style3" >Kullanıcı Şifresi:</label></th>
<th bordercolor="white" bgcolor="yellow" align="left"> 
<input type="text" name="kulsifre" id="kulsifre"></th>
<th bordercolor="white" bgcolor="yellow" align="left">  
</tr>
<tr>
<th bordercolor="white" bgcolor="yellow" align="left" colspan="7">  
<div id="uyealan"></div></th>
</tr>
</table>
</form></div>
</body>
</html>
