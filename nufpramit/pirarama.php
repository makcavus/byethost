<?
include('con_023.php');
$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yilgelen=$_GET['selectyil'];
$ocakyazi=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']);
//echo $yilim;
$resultvyil=@mysql_query("select * from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen')") ;
while($sonucum=mysql_fetch_array($resultvyil)){
$ilim=$sonucum['ilidi'];
$ilcem=$sonucum['ilceidi'];
$socadi=$sonucum['vocadi'];
$yilim=$sonucum['vyiladi'];
$ayim=$sonucum['vayadi'];

$kad0=$sonucum['0K']; 
$kad5=$sonucum['5K']; 
$kad10=$sonucum['10K']; 
$kad15=$sonucum['15K']; 
$kad20=$sonucum['20K']; 
$kad25=$sonucum['25K']; 
$kad30=$sonucum['30K']; 
$kad35=$sonucum['35K']; 
$kad40=$sonucum['40K']; 
$kad45=$sonucum['45K']; 
$kad50=$sonucum['50K']; 
$kad55=$sonucum['55K']; 
$kad60=$sonucum['60K']; 
$kad65=$sonucum['65K']; 
$kad70=$sonucum['70K']; 
$kad75=$sonucum['75K']; 
$kad80=$sonucum['80K']; 
$kad85=$sonucum['85K']; 
$er0=$sonucum['0E']; 
$er5=$sonucum['5E']; 
$er10=$sonucum['10E']; 
$er15=$sonucum['15E']; 
$er20=$sonucum['20E']; 
$er25=$sonucum['25E']; 
$er30=$sonucum['30E']; 
$er35=$sonucum['35E']; 
$er40=$sonucum['40E']; 
$er45=$sonucum['45E']; 
$er50=$sonucum['50E']; 
$er55=$sonucum['55E']; 
$er60=$sonucum['60E']; 
$er65=$sonucum['65E']; 
$er70=$sonucum['70E']; 
$er75=$sonucum['75E']; 
$er80=$sonucum['80E']; 
$er85=$sonucum['85E']; 
}
}
@mysql_close($connt);
$conn=mysql_connect("sql304.byetcluster.com","b12_10384566","malika");
if($conn){
if(mysql_select_db("b12_10384566_etf",$conn)){
$vtsec="select * from soc where(SOCID='$socak')";
$socsorgu=mysql_query($vtsec);
while($socsonuc=mysql_fetch_array($socsorgu)){
$ocakad=$socsonuc['SOC']; 
}
 }
 }
 @mysql_close($conn);
?>
