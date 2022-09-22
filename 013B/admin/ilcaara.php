<!--//---------------------------------+
//  Developed by Roshan Bhattarai    |
//	http://roshanbh.com.np           |
//  Contact for custom scripts       |
//  or implementation help.          |
//  email-nepaliboy007@yahoo.com     |
//---------------------------------+-->
<?
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
#### Roshan's Ajax dropdown code with php
#### Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
#### if you have any problem contact me at http://roshanbh.com.np
#### fell free to visit my blog http://roshanbh.com.np
?>

<? $country=intval($_GET['selectil']);
include("con_023.php");
/*$link = mysql_connect('localhost', 'root', 'malika'); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('frm023');*/
$query="SELECT ilceid,ilinad,ilcead FROM ilce WHERE ilinad='$country' order by ilcead asc";
$result=mysql_query($query);

?>
<select name="selectilce">
<option><?php echo trsuz('İlçe Seçiniz');?></option>
<? while($row=mysql_fetch_array($result)) { ?>
<option value=<?=$row['ilceid']?>><?=$row['ilcead']?></option>
<? } ?>
</select>
