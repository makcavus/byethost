<?php
$countryId=intval($_GET['selectil']);
$stateId=intval($_GET['selectilce']);
include("../con_023.php");
include('eodfalanlari.php');
$query="SELECT ocid,ilinad,ilce,socad FROM ocak WHERE ilinad='$countryId' AND ilce='$stateId' order by socad asc";
$result=mysqli_query($dbh,$query);
?>
<select class="form-control form-control-sm" id="selectoc" name="selectoc" onclick="toplamocak();">
<option><?php echo $ahsecim;?></option>
<?php while($row=mysqli_fetch_array($result)) { ?>
<option><?=$row['socad']?></option>
<?php } ?>
</select>

