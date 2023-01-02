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
<link href="Style.css" rel="stylesheet" type="text/css"/>

<script language="JavaScript" src="kontrolilce.js" type="text/javascript">
</script>	
<script type="text/javascript" src="jquery-latest.min.js"></script> 
    <script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
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
<div id="sonuc1"><form name="form6" action="javascript:void(0)" method="get">

<?php
include("con_023.php");
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ğüşıiöç', 'ĞÜŞIİÖÇ') );
}
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 

$ilsecgelen=$_GET['selectilno']; // get metodu ile formdan gelen geğer alınıyor
$ilcegelenx=$_GET['ilcegir']; // get metodu ile formdan gelen geğer alınıyor
$ilcegeleny=trsuz($ilcegelenx);
$ilcegelen=toUpperCase($ilcegeleny);


//echo $ilgelenx;
//echo $ilgeleny;

//echo $ilgelenz;
//echo $ilsecgelen;
//echo $ilcegelen;
//echo $ilcegelenx;
//echo $ilcegeleny;




$resultilce = @mysql_query("select * from ilce where(ilinad='$ilsecgelen' and ilcead='$ilcegelen')");
while($sonucum2=mysql_fetch_array($resultilce)){
$ilcenom=$sonucum2['ilceid'];
$ilnom=$sonucum2['ilinad'];
$ilceadi=$sonucum2['ilcead'];

//echo $ilnom;
//echo $ilceadi;

}
?>

<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="25%"align="left" bordercolor="yellow" bgcolor="#FFCC00"><a href=# onClick="kontrolilce();"><img src="images/iptal.png"></a></th>
<th class="style6" width="50%" align="center" bordercolor="white" bgcolor="blue"><font size="4" color="yellow">İlçe Kayıt Değiştirme Ekranı</font></th>
<th class="style6" width="25%" align="right" bordercolor="yellow" bgcolor="FFCC00"><a href=# onclick="ilcedegistir();"><img src="images/degistir.png" /></a></th>
</table>
<br>
<table align="center" cellpadding="0" cellspacing="0">
<input type="hidden" name="selectilno" id="selectilno" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilnom ;?>" />
<input type="hidden" name="ilcegirgelen" id="ilcegirgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilceadi ;?>" />

          <th >Değiştirilecek İlçenin Adı:</th>
          <th>
            <input id="ilcegir" name="ilcegir" class="style1"  type="text" value="<?php echo $ilceadi ; ?>">
          </th>
          
  </table> 
</form></div>
<br>
</body>
</html>
