<?php
include('../con_barkod.php');
include('barkodalanlari.php');
$kurumid=$_POST['kurumid'];
$gtin=$_POST['gtin'];
$serino=$_POST['serino'];
$expdate=$_POST['expdate'];
$batch=$_POST['batch']; 
$cins=$_POST['cins'];
$mesaj=$_POST['mesaj'];
$miktar_kod=substr($gtin,0,1);
$token=$_POST['token'];
?>

<table class="table table-sm table-striped table-bordered table-hover table-info">
<thead>
    <tr>
<th class="border border-1 border-dark">GTIN No</th>
<th class="border border-1 border-dark">Seri No</th>
<th class="border border-1 border-dark">Parti No</th>
<th class="border border-1 border-dark">Son Kullanma Tarihi</th>
<th class="border border-1 border-dark">Aşının Adı</th>
<th class="border border-1 border-dark">Doz Miktarı</th>
<th class="border border-1 border-dark">Takdim Şekli</th>
<th class="border border-1 border-dark">İşlem</th>
</tr>
</thead>
<tbody>
  <?php
    $sql_sorgu=mysqli_query($dbh_barkod ,"select * from bilgiler where kurum_id='$kurum_id' order by expdate,mesaj desc");
while($list=mysqli_fetch_array($sql_sorgu)){


	/*$sql=$dbh_barkod->prepare("select * from bilgiler order by expdate,mesaj desc");
	$sql->execute(array());
	while($list=$sql->fetch(PDO::FETCH_ASSOC)){		*/
?>
<tr>
<td class="border border-1 border-dark"><?php echo $list['gtin'];?></td>
<td class="border border-1 border-dark"><?php echo $list['serino'];?></td>
<td class="border border-1 border-dark"><?php echo $list['batch'];?></td>
<td class="border border-1 border-dark"><?php
//echo isValidBarcode($list['gtin']);
$tarih=$list['expdate'];
$yilx=substr($tarih, 0,2);
$ayx=substr($tarih, 2,2);
$gun=substr($tarih, 4,2);
$tarih=$yilx."-".$ayx."-".$gun;
$date = new DateTime(''.$tarih.'');
$tr_tarih=$date->format('d-m-Y');
 echo $tr_tarih;?></td>
<td class="border border-1 border-dark"><?php
$asi_kodu=$list['cins'];
$asi_gtin=$list['gtin'];
$asi_gtin=substr($asi_gtin,1,12);
$asi_sorgu=mysqli_query($dbh_barkod,"SELECT * from asi_tanim where (asi_kod=$asi_kodu and gtin=$asi_gtin)");
while($listele=mysqli_fetch_array($asi_sorgu)){
/*
$asi=$db->prepare("SELECT * from asi_tanim where (asi_kod=$asi_kodu and gtin=$asi_gtin)");
$asi->execute();
while ($listele=$asi->fetch(PDO::FETCH_ASSOC)) {*/
 echo $listele['asi_marka'];?></td>
 <input class="form-control" id="asi_marka" name="asi_marka" type="hidden" value="<?php echo $listele['asi_marka'];?>"/>
<?php
}	
?>
<td class="border border-1 border-dark"><?php echo $list['mesaj'];?></td>
<?php
/* ARAŞTIRILACAK KISIM************************************************************
$takdim=substr($list['gtin'],0,1);
$takdim_sorgula=mysqli_query($dbh_barkod,"SELECT * from asi_takdim where takdim_no='$takdim'");
while($takdim_listele=mysqli_fetch_array($takdim_sorgula)){

/*$takdim=$db->prepare("SELECT * from asi_takdim where takdim_no=$takdim");
$takdim->execute();
while ($takdim_listele=$takdim->fetch(PDO::FETCH_ASSOC)) {*/
?>
<td class="border border-1 border-dark"><?php echo "Adet";?></td>
<!--<td><?php echo $takdim_listele['takdim_tur'];?></td>-->
<?php
//ARAŞTIRILACAK KISIM SONU  ************************************************************ }	
?>
<input class="form-control" id="miktari" name="miktari" type="hidden" value="<?php echo $list['mesaj'];?>"/>
<input class="form-control" id="miktari" name="miktari" type="text" value="<?php echo $list['id'];?>"/>
<td class="border border-1 border-dark">
<a class="btn btn-danger btn-sm delete-confirm" href="#" onClick="barkodsil();">Sil</a>
</td>
</tr>
<?php
}
	?>
</tbody>
</table>
<table class="table table-sm table-striped table-bordered table-hover table-info">
<thead>
    <tr>
<th class="border border-1 border-dark">Sıra</th>
<th class="border border-1 border-dark">Aşı Kodu</th>
<th class="border border-1 border-dark">Aşı Adı</th>
<th class="border border-1 border-dark">Miktarı</th>
</tr>
</thead>
	<tbody>
<?php
$sql_sorgusu=mysqli_query($dbh_barkod,"SELECT cins, SUM(mesaj) AS miktar from bilgiler where kurum_id='$kurum_id' GROUP BY cins");
while($sonuc=mysqli_fetch_array($sql_sorgusu)){
//echo $sonuc['cins'];

$asi_dokumu_say=mysqli_num_rows($sql_sorgusu);
//echo $asi_dokumu_say;
   /* $sql = "SELECT cins, SUM(mesaj) AS miktar from bilgiler GROUP BY cins";
    $query = $db -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);*/
    $cnt=1;
    if($asi_dokumu_say > 0){
    //if($query->rowCount() > 0) {
        
            $asi_adi=$sonuc['cins'];
            //$asi_adi=$result->cins;
            //echo "Aşı Adı: ".$asi_adi;
            
            $asi_miktarim_sorgula=mysqli_query($dbh_barkod,"SELECT * from asi_kodlari where asi_kodu='$asi_adi'");
            $asi_miktarim_say=mysqli_num_rows($asi_miktarim_sorgula);
            while($asi=mysqli_fetch_array($asi_miktarim_sorgula)){
            /*$asi_miktarim=$db->prepare("SELECT * from asi_kodlari where asi_kodu=$asi_adi");
$asi_miktarim->execute();
$asi_miktarim_say=$asi_miktarim->rowCount();

while($asi=$asi_miktarim->fetch(PDO::FETCH_ASSOC)){*/


            ?>  

        <tr>
            <td class="border border-1 border-dark"> <?php echo htmlentities($cnt);?></td>
            <td class="border border-1 border-dark"><?php echo htmlentities($sonuc['cins']);?></td>
<?php
if($asi_miktarim_say>0){
   // echo $asi['asi_adi'];
?>



<td class="border border-1 border-dark"><?php echo htmlentities ($asi['asi_adi']);?></td>
            <td class="border border-1 border-dark"><?php echo htmlentities ($sonuc['miktar']);?></td>
        </tr>

<?php 
}
            $cnt++;
        } 
    }
}

?>
</tbody>
</table>		