<!--//---------------------------------+
//  Developed by Roshan Bhattarai    |
//	http://roshanbh.com.np           |
//  Contact for custom scripts       |
//  or implementation help.          |
//  email-nepaliboy007@yahoo.com     |
//---------------------------------+-->
<?
include('piramitalanlari.php');

//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
#### Roshan's Ajax dropdown code with php
#### Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
#### if you have any problem contact me at http://roshanbh.com.np
#### fell free to visit my blog http://php-ajax-guru.blogspot.com
?>

<? $countryId=intval($_GET['selectil']);
$stateId=intval($_GET['selectilce']);
include("con_023.php");
/*$link = mysql_connect('localhost', 'root', 'malika'); //changet the configuration in required
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('frm023');*/
$query="SELECT ocid,ilinad,ilce,socad FROM ocak WHERE ilinad='$countryId' AND ilce='$stateId' order by socad asc";
$result=mysql_query($query);

?>
<select id="selectoc" name="selectoc" onclick="toplamocak();" >
<option><?php echo trsuz($ahsecim);?></option>
<? while($row=mysql_fetch_array($result)) { ?>
<option><?=trsuz($row['socad'])?></option>


<? } ?>
</select>
