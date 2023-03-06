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

<script language="JavaScript" src="kontrol.js" type="text/javascript">
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
<div id="sonuc"><form name="form5" action="javascript:void(0)" method="get">

<?php
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ğüşıiöç', 'ĞÜŞIİÖÇ') );
}

//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
include("con_023.php");
include("../frm013alanlari.php");
$ilgelenx=iconv("utf-8","iso-8859-9",$_GET['ilgir']); // get metodu ile formdan gelen geğer alınıyor
$ilgelen=toUpperCase($ilgelenx);
//echo $ilno;
//echo $ilgelen;
//echo $ilgelenx;




$resultvyil = @mysql_query("select * from il where(ilad='$ilgelen')") ;
while($sonucum=mysql_fetch_array($resultvyil)){
$ilnom=$sonucum['ilid'];
$iladim=$sonucum['ilad'];
//echo $iladim;
}
?>

<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="25%"align="left" bordercolor="yellow" bgcolor="#FFCC00"><a href=# onClick="kontrolil();"><img src="images/iptal.png"></a></th>
<th class="style6" width="50%" align="center" bordercolor="white" bgcolor="blue"><font size="4" color="yellow"><?php echo trsuz($ilkaydeg); ?></font></th>
<th class="style6" width="25%" align="right" bordercolor="yellow" bgcolor="FFCC00"><a href=# onClick="ildegistir();"><img src="images/degistir.png"></a></th>
</table>
<br>
<table align="center" cellpadding="0" cellspacing="0">
<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo trsuz($iladim); ?>" />

          <th ><?php echo trsuz($degilismi); ?></th>
          <th>
            <input id="ilgir" name="ilgir" class="style1"  type="text" value="<?php echo trsuz($iladim); ?>">
          </th>
          
   </table> 
   </form></div>
<br>
</body>
</html>
