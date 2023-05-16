<?php
include('../con_deneme.php');
$sorgulama=mysqli_query($dbh_deneme,"SELECT * from kayitlar order by ad DESC");
?>
<table>
<thead>
<tr>
<th>Adı</th>
<th>Soyadı</th>
<th>Telefon</th>
</tr>
</thead>
<tbody>
    <?php
while($listele=mysqli_fetch_array($sorgulama)){
    ?>
<tr>
<td><?php echo $listele['ad']; ?></td>
<td><?php echo $listele['soyad']; ?></td>
<td><?php echo $listele['tel']; ?></td>
</tr>
<?php
}

?>
</tbody>
</table>

