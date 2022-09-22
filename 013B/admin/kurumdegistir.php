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

<script language="JavaScript" src="kontrolkurum.js" type="text/javascript">
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
<div id="sonuc2"><form name="form7" action="javascript:void(0)" method="get">

<?php
include("con_023.php");
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ğüşıiöç', 'ĞÜŞIİÖÇ') );
}
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
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

$ilseckrgelen=iconv("utf-8","iso-8859-9",$_GET['selectil']);
$ilceseckrgelen=iconv("utf-8","iso-8859-9",$_GET['selectilce']);

$kurumgelenx=$_GET['kurumgir'];
$kurumgeleny=trsuz($kurumgelenx);
$kurumgelen=toUpperCase($kurumgeleny);

$asmgelenx=$_GET['asmgir'];
$asmgeleny=trsuz($asmgelenx);
$asmgelen=ucwords_tr($asmgeleny);

$drgelenx=$_GET['drgir'];
$drgelen=trsuz($drgelenx);

$asegelenx=$_GET['asegir'];
$asegelen=trsuz($asegelenx);


$aseungelenx=$_GET['aseungir'];
$aseungelen=trsuz($aseungelenx);


//echo $ilseckrgelen;
//echo $ilceseckrgelen;
//echo $kurumgelen;
//echo $asmgelen;
//echo $drgelen;
//echo $asegelen;
//echo $aseungelen;




$resultkurum = @mysql_query("select * from ocak where(ilinad='$ilseckrgelen' and ilce='$ilceseckrgelen' and socad='$kurumgelen')");
while($sonucum3=mysql_fetch_array($resultkurum)){
$kurumnom=$sonucum3['ocid'];
$ilnom=$sonucum3['ilinad'];
$ilcenom=$sonucum3['ilce'];
$kurumadi=$sonucum3['socad'];
$asmadi=$sonucum3['asmadi'];
$tbbadi=$sonucum3['dradi'];
$aseadi=$sonucum3['aseadi'];
$aseunv=$sonucum3['aseunvan'];

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
<th class="style6" width="25%"align="left" bordercolor="yellow" bgcolor="#FFCC00"><a href=# onClick="kontrolkurum();"><img src="images/iptal.png"></a></th>
<th class="style6" width="50%" align="center" bordercolor="white" bgcolor="blue"><font size="4" color="yellow">Kurum Kayıt Değiştirme Ekranı</font></th>
<th class="style6" width="25%" align="right" bordercolor="yellow" bgcolor="FFCC00"><a href=# onClick="kurumdegistir();"><img src="images/degistir.png"></a></th>
</table>
<br>
<table align="center" cellpadding="0" cellspacing="0" width="96%">
<tr>
<input type="hidden" name="krselectilno" id="krselectilno" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilnom ;?>" />
<input type="hidden" name="krilcegirgelen" id="krilcegirgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilcenom ;?>" />
<input type="hidden" name="kurumgirgelen" id="kurumgirgelen" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $kurumadi ;?>" />

          <th >Kurum Adı:</th>
          <th>
            <input id="kurumgir" name="kurumgirdeg" class="style1"  type="text" value="<?php echo $kurumadi ; ?>">
          </th>

 <th>A.S.M.Adı:</th>
            <th><input id="asmgir" name="asmgir" class="style1"  type="text" value="<?php echo $asmadi ; ?>">
          </th>  
		  <th >A.Hek.Adı:</th> 
		  <th>
            <input id="tbbgir" name="tbbgir" class="style1"  type="text" value="<?php echo $tbbadi ; ?>">
          </th> 
</tr>
<tr>
<th >A.S.E.Adı:</th>		  
		 <th>
            <input id="asegir" name="asegir" class="style1"  type="text" value="<?php echo $aseadi ; ?>">
          </th>
		  <th >A.S.E.Ünvanı:</th>
		 <th>
            <input id="aseungir" name="aseungir" class="style1"  type="text" value="<?php echo $aseunv ; ?>">
          </th>   
		  </tr>    
   </table> 
</form></div>
<br>
</body>
</html>
