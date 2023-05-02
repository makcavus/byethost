<link rel="stylesheet" href="assets/css/form013style.css">
<script type="text/javascript" src="jquery-1.3.2.js"></script> 
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
<script type="text/javascript" src="/assets/js/mask_hightlight.js"></script> 
<script language="JavaScript" src="kaydet.js" type="text/javascript"></script>	
<script language="JavaScript" type="text/javascript" src="/assets/js/karekod_ayir.js"></script>
<body>
<div class="container">
<form class="form-control mt-2" id="testform" name="testform" action="karekod_kaydet.php" method="post" onreset="resetConsume()">

<div class="row">
<div class="text-center col-md-12 mt-2">
<input class="form-control" id="token" name="token" type="text"  onkeydown="karekod_keydown(event)" onkeypress="karekod_keypress(event)"size="70" placeholder="Barkodu okutunuz" autofocus required/>
 </div>
</div>
    

<div class="row">
<div class="col-md-2">
<!--<label for="gtin">GTIN:</label>--><input class="form-control" id="gtin" name="gtin" type="hidden" />
</div>
<div class="col-md-2">
<!--<label for="serial">Seri No:</label>--><input class="form-control" id="serial" name="serial" type="hidden" />
</div>
<div class="col-md-2">
<!--<label for="expdate">Son Kullanma Tarihi:</label>--><input class="form-control" id="expdate" name="expdate" type="hidden"/>
</div>
<div class="col-md-2">
<!--<label for="batch">Parti No:</label>--><input class="form-control" id="batch" name="batch" type="hidden"/>
</div>
<div class="col-md-2">
<!--<label for="cins">Cinsi:</label>--><input class="form-control" id="cins" name="cins" type="hidden"/>
</div>
<div class="col-md-2">
<!--<label for="mesaj">Takdim:</label>--><input class="form-control" id="mesaj" name="mesaj" type="hidden"/>
</div>
<div class="col-md-12 text-center mt-3 mb-3">
<input class="btn btn-primary btn-sm" type="submit" name="kaydet" id="kaydet" value="Kaydet"/>
<input class="btn btn-light btn-sm ml-5" type="button" onclick="resetConsume()" value="Temizle"/>
<a href="asi_kodlari.php" class="btn btn-sm btn-secondary ml-5">Aşı Adı Ekle</a>
</div>
</div>
</form>
</div>
<div class="container table-responsive">
<table class="table table-sm table-striped table-bordered table-hover">
<thead>
<th>GTIN No</th>
<th>Seri No</th>
<th>Parti No</th>
<th>Son Kullanma Tarihi</th>
<th>Aşının Adı</th>
<th>Doz Miktarı</th>
<th>Takdim Şekli</th>
<th>İşlem</th>
</thead>
	
<tbody>
<?php
    include('kontrol_basamagi_kontrol_fonksiyonu.php');
	include('../con_barkod.php');
    $sql_sorgu=mysqli_query($dbh_barkod ,"select * from bilgiler order by expdate,mesaj desc");
while($list=mysqli_fetch_array($sql_sorgu)){


	/*$sql=$dbh_barkod->prepare("select * from bilgiler order by expdate,mesaj desc");
	$sql->execute(array());
	while($list=$sql->fetch(PDO::FETCH_ASSOC)){		*/
?>
<tr>
<td><?php echo $list['gtin'];?></td>
<td><?php echo $list['serial'];?></td>
<td><?php echo $list['batch'];?></td>
<td><?php
//echo isValidBarcode($list['gtin']);
$tarih=$list['expdate'];
$yil=substr($tarih, 0,2);
$ay=substr($tarih, 2,2);
$gun=substr($tarih, 4,2);
$tarih=$yil."-".$ay."-".$gun;
$date = new DateTime(''.$tarih.'');
$tr_tarih=$date->format('d-m-Y');
 echo $tr_tarih;?></td>
<td><?php
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

<td><?php echo $list['mesaj'];?></td>
<?php
/* ARAŞTIRILACAK KISIM************************************************************
$takdim=substr($list['gtin'],0,1);
$takdim_sorgula=mysqli_query($dbh_barkod,"SELECT * from asi_takdim where takdim_no='$takdim'");
while($takdim_listele=mysqli_fetch_array($takdim_sorgula)){



/*$takdim=$db->prepare("SELECT * from asi_takdim where takdim_no=$takdim");
$takdim->execute();
while ($takdim_listele=$takdim->fetch(PDO::FETCH_ASSOC)) {*/
?>
<td><?php echo "Adet";?></td>
<!--<td><?php echo $takdim_listele['takdim_tur'];?></td>-->
<?php
//ARAŞTIRILACAK KISIM SONU  ************************************************************ }	
?>
<input class="form-control" id="miktari" name="miktari" type="hidden" value="<?php echo $list['mesaj'];?>"/>
<td>
<a class="btn btn-danger btn-sm delete-confirm" href="sil.php?id=<?= $list['id'] ?>">Sil</a>
</td>
</tr>
<?php
	}
	
	?>
</tbody>
</table>
<table class="table table-sm table-striped table-bordered table-hover">
<thead>
<th>Sıra</th>
<th>Aşı Kodu</th>
<th>Aşı Adı</th>
<th>Miktarı</th>
</thead>
	<tbody>
<?php
$sql_sorgusu=mysqli_query($dbh_barkod,"SELECT cins, SUM(mesaj) AS miktar from bilgiler GROUP BY cins");
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
            <td> <?php echo htmlentities($cnt);?></td>
            <td><?php echo htmlentities($sonuc['cins']);?></td>
<?php
if($asi_miktarim_say>0){
   // echo $asi['asi_adi'];
?>



<td><?php echo htmlentities ($asi['asi_adi']);?></td>
            <td><?php echo htmlentities ($sonuc['miktar']);?></td>
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
</div>
<script>
$('.delete-confirm').on('click', function (event) {
            event.preventDefault();
            const url = $(this).attr('href');
            const asi_marka = $("#asi_marka").val();
            const miktari = $("#miktari").val();
            var title='Kayıt Silinsin mi ?';            
            swal({
  title: "<h5 style='color:red'>" + title + "</h5>",
  //html: "<strong>"+asi_marka+"</strong> marka <strong>"+miktari+"</strong> adet aşı kaydı silinecek.",
  html: "<strong>Bu aşı stok kaydı silinecek.</strong>",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Evet, sil !",
  cancelButtonText: "Hayır, iptal et !",
  closeOnConfirm: false,
  closeOnCancel: false
                
            }).then((result) => {
                if (result.value) {
                    swal({
        title: "<h5 style='color:green'>Kayıt silindi</h5>",
        type: "success",
        text: "Kayıt başarı ile silindi.",
        showConfirmButton: false
    });
                    setTimeout(function() { 
                    window.location.href = url;
                }, 1000);
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    event.preventDefault();
                }
            })
        });

</script>
</body>
</html>
<!--<table class="table table-sm table-striped table-bordered table-hover">
<thead>
<th>Sıra</th>
<th>Aşı Adı</th>
<th>Miktarı</th>
</thead>
	<tbody>-->
<?php 
   /* $sql = "SELECT cins, SUM(mesaj) AS miktar from bilgiler GROUP BY cins";
    $query = $db -> prepare($sql);
    $query->execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    $cnt=1;
    if($query->rowCount() > 0) {
        foreach($results as $result) {
            $asi_adi=$result->cins;
            $asi_miktarim=$db->prepare("SELECT * from asi_kodlari where asi_kodu=$asi_adi");
$asi_miktarim->execute();
$asi_miktarim_say=$asi_miktarim->rowCount();

while($asi=$asi_miktarim->fetch(PDO::FETCH_ASSOC)){


            ?>  

        <tr>
            <td> <?php echo htmlentities($cnt);?></td>
            <td><?php echo htmlentities($result->cins);?></td>
<?php
if($asi_miktarim_say>0){
   // echo $asi['asi_adi'];
?>



<td><?php echo htmlentities ($asi['asi_adi']);?></td>
            <td><?php echo htmlentities ($result->miktar);?></td>
        </tr>

<?php 
}
            $cnt++;
        } 
    }
}*/
?>
<!--</tbody>
</table>	-->