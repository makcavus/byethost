<?php
function ilkBuyukTR($str){
	$str = mb_strtolower($str);
return str_replace('i̇','i',ltrim(mb_convert_case(str_replace(array('i','I'),array('İ','ı'),$str),MB_CASE_TITLE,'UTF-8')));
}
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
?>
<link rel="stylesheet" href="assets/css/form013style.css">
<link rel="stylesheet" href="assets/bootstrap-4/sweetalert2/sweetalert2.min.css">
<link rel="stylesheet" href="assets/bootstrap-4/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/bootstrap-4/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/navbar_style.css">
  <style>
      body{margin:0 0px;cursor:default;background-color:#000000;}
  </style>
<?php
  //include("../assets/sablon/form013/header.php");
  ?>
<?php
    include('kontrol_basamagi_kontrol_fonksiyonu.php');
    include('../con_023.php');
	include('../con_barkod.php');
    include('../form013/tanimveyetkiler.php');
    $form_klasoru=basename(dirname(__FILE__));
    //$kurum_id=$_GET['kurum_id']; 
    //echo $kurum_id;
    //exit;
    $ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$vtsec="select * from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and asmadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')";
$socsorgu=mysqli_query($dbh_barkod,$vtsec);
$sorgu_sonucu=mysqli_fetch_array($socsorgu);

if($sorgu_sonucu){
$kurum_id=$sorgu_sonucu['id'];
$barkod_sorgula=mysqli_query($dbh_barkod,"SELECT * from bilgiler where kurum_id='$kurum_id'");
$barkod_sonucu=mysqli_fetch_array($barkod_sorgula);
}else{
  $kurum_id='';
}
$say=mysqli_num_rows($socsorgu);
//echo "SAYI: ".$say;

$iladine=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucumne=mysqli_fetch_array($iladine)){
$ilinadine=$ilsonucumne['ilad'];
}
$ilceadine=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucumne=mysqli_fetch_array($ilceadine)){
$ilceninadine=$ilcesonucumne['ilcead'];
}
if(substr($ocgelen,-3,3)==$bakanlikyetki){
	//echo "doğru....";
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and right(socad,3)='$bakanlikyetki')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
$ahkod=$satir['socad'];
if(substr($ocgelen,-3,3)==$kurumyetki){
$ahno='Sorumlu Tabibi';
}elseif(substr($ocgelen,-3,3)==$ilyetki){
$ahno='Birim Sorumlusu';
}elseif(substr($ocgelen,-3,3)==$bakanlikyetki){
$ahno='Bakanlık Yetkilisi';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
}
}elseif(substr($ocgelen,-3,3)==$ilyetki){
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and right(socad,3)='$ilyetki')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
  $frm102yetkili=@mysqli_query($dbh102,"select form,il_aheadi,il_aheunvani,il_aseadi,il_aseunvani from birim where(form='$form_klasoru')");
  while($frm102yetkilisi=mysqli_fetch_array($frm102yetkili)){
    $asead=$frm102yetkilisi['il_aseadi'];
    $aseunv=$frm102yetkilisi['il_aseunvani'];
    $drad=$frm102yetkilisi['il_aheadi'];
    $ahno="";
            $ahkod=ilkBuyukTR($ilinadine)." ".$frm102yetkilisi['il_aheunvani'];
}
  $asmninadine=$satir['asmadi'];
  /*$drad=$satir['dradi'];
  $asead=$satir['aseadi'];
  $aseunv=$satir['aseunvan'];

//@mysqli_close($conn);
  $unvan=$satir['socad'];
  if(substr($ocgelen,-3,3)==$kurumyetki){
      $unvan='Sorumlu Tabibi';
  }elseif(substr($ocgelen,-3,3)==$ilyetki){
      $unvan=$ilinadine. ' İl Sağlık Müdürü';
  }else{
      $unvan=$ocgelen. ' Nolu Aile Hekimi';
  }
  $drad=$satir['dradi'];
  $asead=$satir['aseadi'];
  $aseunv=$satir['aseunvan'];*/

//echo $kurumyetki;
//echo $ilyetki;
}
}elseif(substr($ocgelen,-3,3)==$ilceyetki){
  //echo "doğru....";
  $sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and right(socad,3)='$ilceyetki')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
  while($satir=mysqli_fetch_array($sonucak))
  {
      $frm102yetkili=@mysqli_query($dbh102,"select form,ilce_aheadi,ilce_aheunvani,ilce_aseadi,ilce_aseunvani from birim where(form='$form_klasoru')");
        while($frm102yetkilisi=mysqli_fetch_array($frm102yetkili)){
            $asead=$frm102yetkilisi['ilce_aseadi'];
            $aseunv=$frm102yetkilisi['ilce_aseunvani'];
            $drad=$frm102yetkilisi['ilce_aheadi'];
            $ahno="";
            $ahkod=ilkBuyukTR($ilceninadine)." ".$frm102yetkilisi['ilce_aheunvani'];
        }
        $asmninadine=$satir['asmadi'];
        //$drad=$satir['dradi'];
        //$asead=$satir['aseadi'];
        //$aseunv=$satir['aseunvan'];
//@mysqli_close($conn);
       /* $unvan=$satir['socad'];
        if(substr($ocgelen,-3,3)==$kurumyetki){
            $unvan=$ilceninadine.' İlçe Sağlık Müdürü';
        }elseif(substr($ocgelen,-3,3)==$ilyetki){
            $unvan=$ilinadine. ' İl Sağlık Müdürü';
        }else{
            $unvan=$ocgelen.' Nolu Aile Hekimi';
        }*/
        $asmninadine=$satir['asmadi'];
        //$drad=$satir['dradi'];
        //$asead=$satir['aseadi'];
        //$aseunv=$satir['aseunvan'];
  }
}elseif(substr($ocgelen,-3,3)==$kurumyetki){
	//echo "doğru....";
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and right(socad,3)='$kurumyetki')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
  $frm102yetkili=@mysqli_query($dbh102,"select form,ilce_aheadi,ilce_aheunvani,ilce_aseadi,ilce_aseunvani from birim where(form='$form_klasoru')");
  while($frm102yetkilisi=mysqli_fetch_array($frm102yetkili)){
      $asead=$frm102yetkilisi['ilce_aseadi'];
      $aseunv=$frm102yetkilisi['ilce_aseunvani'];
      $drad=$frm102yetkilisi['ilce_aheadi'];
      $ahno="";
      $ahkod=ilkBuyukTR($ilceninadine)." ".$frm102yetkilisi['ilce_aheunvani'];
  }
  $asmninadine=$satir['asmadi'];
  //$drad=$satir['dradi'];
  //$asead=$satir['aseadi'];
  //$aseunv=$satir['aseunvan'];
//@mysqli_close($conn);
 /* $unvan=$satir['socad'];
  if(substr($ocgelen,-3,3)==$kurumyetki){
      $unvan=$ilceninadine.' İlçe Sağlık Müdürü';
  }elseif(substr($ocgelen,-3,3)==$ilyetki){
      $unvan=$ilinadine. ' İl Sağlık Müdürü';
  }else{
      $unvan=$ocgelen.' Nolu Aile Hekimi';
  }*/
  $asmninadine=$satir['asmadi'];
  //$drad=$satir['dradi'];
  //$asead=$satir['aseadi'];
  //$aseunv=$satir['aseunvan'];
}
	}else{
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
{
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
$ahkod=$satir['socad'];
if(substr($ocgelen,-3,3)==$kurumyetki){
$ahno='Sorumlu Tabibi';
}elseif(substr($ocgelen,-3,3)==$ilyetki){
$ahno='Birim Sorumlusu';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];
//echo $kurumyetki;
//echo $ilyetki;
}
}

?>
  <?php
  if($say==0){
    mysqli_query($dbh_barkod,"INSERT INTO veri(ilidi,ilceidi,asmadi,vyiladi,vayadi) VALUES('$ilgelen','$ilcegelen','$ocgelen','$yilgelen','$aygelen')");
    $son_kayit=mysqli_query($dbh_barkod,"select * from veri ORDER BY id DESC LIMIT 1");
    while($last_record=mysqli_fetch_assoc($son_kayit)){
    $son_kayit_goster=$last_record['id'];
    //echo "Son Kayıt: ".$son_kayit_goster;
    }
    //exit;
    ?>
<div class="container">
<form class="form-control mb-2 mt-4" id="testform" name="testform" action="javascript:void(0)" method="GET" onKeyUp="highlight(event)" onClick="highlight(event)" onreset="resetConsume()">
<div class="row">
<div class="text-center col-md-12">
<input class="form-control" id="token" name="token" type="text"  onkeydown="karekod_keydown(event)" onkeypress="karekod_keypress(event)" size="70" placeholder="Barkodu okutunuz" autofocus required/>
</div>
</div>
<div class="row">
<div class="col-md-2">
<input type="hidden" name="kurum_id" id="kurum_id" value="<?php echo $son_kayit_goster ;?>" />
<!--<label for="gtin">GTIN:</label>--><input class="form-control" id="gtin" name="gtin" type="hidden" />
</div>
<div class="col-md-2">
<!--<label for="serino">Seri No:</label>--><input class="form-control" id="serino" name="serino" type="hidden" />
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
<input class="btn btn-primary btn-sm" type="button" name="kaydet" id="kaydet" value="Kaydet" onclick="girdiyiekle();"/>
<input class="btn btn-light btn-sm ml-5" type="button" onclick="resetConsume()" value="Temizle"/>
<a href="asi_kodlari.php" class="btn btn-sm btn-secondary ml-5">Aşı Adı Ekle</a>
</div>
</div>
</form>
</div>
<div id="sonuckay"></div>
<?php
}else if($say>0){    
    $son_kayit_goster=$sorgu_sonucu['id'];
    //echo "Son Kayıt: ".$son_kayit_goster;
?>
<div class="container">
<form class="form-control mb-2 mt-3" id="testform" name="testform" action="javascript:void(0)" method="GET" onKeyUp="highlight(event)" onClick="highlight(event)" onreset="resetConsume()">
<div class="row">
<div class="text-center col-md-12">
<input class="form-control" id="token" name="token" type="text"  onkeydown="karekod_keydown(event)" onkeypress="karekod_keypress(event)" size="70" placeholder="Barkodu okutunuz" autofocus required/>
</div>
</div>
<div class="row">
<div class="col-md-2">
<input type="hidden" name="kurum_id" id="kurum_id" value="<?php echo $son_kayit_goster ;?>" />
<!--<label for="gtin">GTIN:</label>--><input class="form-control" id="gtin" name="gtin" type="hidden" />
</div>
<div class="col-md-2">
<!--<label for="serino">Seri No:</label>--><input class="form-control" id="serino" name="serino" type="hidden" />
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
<input class="btn btn-primary btn-sm" type="button" name="kaydet" id="kaydet" value="Kaydet" onclick="girdiyiekle();"/>
<input class="btn btn-light btn-sm ml-5" type="button" onclick="resetConsume()" value="Temizle"/>
<a href="asi_kodlari.php" class="btn btn-sm btn-secondary ml-5">Aşı Adı Ekle</a>
</div>
</div>
</form>
</div>
<div id="sonuckay"></div>
<div class="container table-responsive" id="listele"></div>
<div class="container table-responsive">
<?php
if($barkod_sonucu){
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
  $sql_sorgu=mysqli_query($dbh_barkod ,"select * from bilgiler where kurum_id='$son_kayit_goster' order by expdate,mesaj desc");
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
$yil=substr($tarih, 0,2);
$ay=substr($tarih, 2,2);
$gun=substr($tarih, 4,2);
$tarih=$yil."-".$ay."-".$gun;
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
<td class="border border-1 border-dark">
<form class="form-control-sm" action="#">
<input type="hidden" name="id" id="id" value="<?php echo $list['id']; ?>">
<a class="btn btn-sm btn-danger mb-2" href="#" data-toggle="modal" data-target=".bd-example-modal-sm-barkod" style="width: 50px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</a></form>
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
$sql_sorgusu=mysqli_query($dbh_barkod,"SELECT serino,cins, SUM(mesaj) AS miktar from bilgiler where kurum_id='$son_kayit_goster' GROUP BY cins");
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
<!-- Barkod Silme Modal -->
<div class="modal fade bd-example-modal-sm-barkod" id="silmenubarkod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelbarkod" aria-hidden="true">
  <div class="modal-dialog modal-sm-barkod">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabelbarkod"><?php echo $silmeonay;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h5 class="text-secondary bg-warning text-center"><?php echo '<div><h6>
       -<font style="color:blue">'.$sonuc['serino'].'</font> Seri Nolu-<font style="color:blue">'.$asi['asi_adi'].'</font></h6></div>'; ?></h5>
       <h5 class="text-danger"><?php echo $silemin;?></h5>
      </div>
      <div class="modal-footer bg-success justify-content-center">
        <button type="button" class="btn btn-primary btn-sm mr-5" data-dismiss="modal"><i class="fa fa-reply-all fa-lg"></i> <?php echo $hayir;?></button>
        <a href="#" tabindex="2" title="evet" onClick="barkodsil();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> Evet</a>
               
      </div>
      <div id="sonucsil" align="center"></div>
    </div>
  </div>
</div>	
<?php 
}
            $cnt++;
        } 
    }
}
  }
?>
</tbody>
</table>		
<?php
}
}
    ?>
</div>
<script src="assets/bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
<script src="assets/bootstrap-4/sweetalert2/sweetalert2.min.js"></script>
<script src="assets/bootstrap-4/popper.js"></script>
<script src="assets/bootstrap-4/js/bootstrap.min.js"></script>
<script src="assets/bootstrap-4/js/deleter.js"></script>
<script>
/*$('.delete-confirm').on('click', function (event) {
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
        });*/

</script>

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

<script type="text/javascript" src="jquery-1.3.2.js"></script> 
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script> 
<script language="JavaScript" type="text/javascript" src="assets/js/karekod_ayir.js"></script>