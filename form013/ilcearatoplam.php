<?php
include('frm013alanlari.php');
$country=intval($_GET['selectil']);
include("../con_023.php");
$query="SELECT ilceid,ilinad,ilcead FROM ilce WHERE ilinad='$country' order by ilcead asc";
$result=mysqli_query($dbh,$query);
?>
<select name="selectilce" onchange="getocak(<?=$country?>,this.value)" onclick="toplamilce();">
<option><?php echo $ilcesecim;?></option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value=<?=$row['ilceid']?>><?=$row['ilcead']?></option>
<?php } ?>
</select>



