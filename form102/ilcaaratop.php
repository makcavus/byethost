<?php
$country=intval($_GET['selectil']);
include("../con_023.php");
include('frm102alanlari.php');
$query="SELECT ilceid,ilinad,ilcead FROM ilce WHERE ilinad='$country' order by ilcead asc";
$result=mysqli_query($dbh,$query);
?>
<select class="form-control form-control-sm" name="selectilce" onchange="getCityTop(<?=$country?>,this.value)" onclick="toplamilce();">
<option><?php echo $ilcesecim;?></option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option value=<?=$row['ilceid']?>><?=$row['ilcead']?></option>
<?php } ?>
</select>







