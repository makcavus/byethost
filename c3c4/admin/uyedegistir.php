<?
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<link href="Style.css" rel="stylesheet" type="text/css"/>

<script language="JavaScript" src="kontroluye.js" type="text/javascript">
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
<div id="drdiv"><form name="form8" action="javascript:void(0)" method="get">

<?php
include("con_023.php");
include('../frm013alanlari.php');

function toUpperCase( $input ){	
return strtoupper( strtr( $input,'����i��', '���I���') );
}
//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
function ucwords_tr($deger)
         {
         $deger = split(" ",trim($deger));
         $deger_tr = ""; 

         for($x=0; $x < count($deger); $x++)
             {
             $deger_bas = substr($deger[$x],0,1);
             $deger_son = substr($deger[$x],1);
             $deger_bas = toUpperCase($deger_bas); 

             $deger_tr .= $deger_bas.$deger_son." ";
             } 

         $deger_tr = trim($deger_tr); 

         return $deger_tr;
         } 

$ilseckrgelen=iconv("utf-8","iso-8859-9",$_GET['uyekodum']);
$ilceseckrgelen=iconv("utf-8","iso-8859-9",$_GET['doktoradi']);
$kurumgelen=iconv("utf-8","iso-8859-9",$_GET['kuladi']);
$asmgelen=iconv("utf-8","iso-8859-9",$_GET['kulsifre']);

//echo $ilseckrgelen;
//echo $ilceseckrgelen;
//echo $kurumgelen;
//echo $asmgelen;
//echo $drgelen;
//echo $asegelen;
//echo $aseungelen;




$resultkurum = @mysql_query("select * from uyeler where(uyekod='$ilseckrgelen')");
while($sonucum3=mysql_fetch_array($resultkurum)){
$kurumnom=$sonucum3['uyeno'];
$ilnom=$sonucum3['uyead'];
$ilcenom=$sonucum3['uyekim'];
$kurumadi=$sonucum3['uyesifre'];
$asmadi=$sonucum3['uyekod'];


//echo $ilnom;
//echo $ilcenom;
//echo $kurumadi;
//echo $asmadi;
//echo $tbbadi;
//echo $aseadi;
//echo $aseunv;

}
?>

<table class="cizgi" align="center" cellpadding="0" cellspacing="0" width="100%">
<th class="style6" width="25%"align="left" bordercolor="yellow" bgcolor="#FFCC00"><a href=# onClick="kontroluye();"><img src="images/iptal.png"></a></th>
<th class="style6" width="50%" align="center" bordercolor="white" bgcolor="blue"><font size="4" color="yellow"><?php echo trsuz($kuldeg) ; ?></font></th>
<th class="style6" width="25%" align="right" bordercolor="yellow" bgcolor="FFCC00"><a href=# onClick="uyedegistir();"><img src="images/degistir.png"></a></th>
</table>
<br>
<table align="center" cellpadding="0" cellspacing="0" width="100%">
<tr>
<input type="hidden" name="krselectilno" id="krselectilno" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo trsuz($asmadi) ;?>" />


          <th ><?php echo trsuz($dradi) ; ?></th>
          <th>
            <input id="kurumgirdeg" name="kurumgirdeg" class="style1"  type="text" value="<?php echo trsuz($ilcenom) ; ?>">
          </th>

 <th><?php echo trsuz($kuladi) ; ?></th>
            <th><input id="asmgir" name="asmgir" class="style1"  type="text" value="<?php echo trsuz($ilnom) ; ?>">
          </th>  
		  <th ><?php echo trsuz($kulsifre) ; ?></th> 
		  <th>
            <input id="tbbgir" name="tbbgir" class="style1"  type="text" value="<?php echo trsuz($kurumadi) ; ?>">
          </th> 
</tr>
   </table> 
</form></div>
<br>
</body>
</html>
