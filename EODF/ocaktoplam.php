<link rel="stylesheet" href="assets/css/eodfstyle.css">
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>
<?php
ini_set("display_errors", 0);
include('../con_023.php');
include('../con_102.php');
include('eodfalanlari.php');
include('tanimveyetkiler.php');
//session_destroy();
include('sumocak.php');
$ilgelen=$_GET['selectil'];
$ilcegelen=$_GET['selectilce'];
$ocgelen=$_GET['selectoc'];
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay'];

if($yilgelen==""){
    $resultvyil = @mysqli_query($dbh102,"select * from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen')") ;
}elseif($ocgelen>0 and $yilgelen>0){
    $resultvyil = @mysqli_query($dbh102,"select * from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen')") ;
}
while($sonucum=mysqli_fetch_array($resultvyil)){
$ilim=$sonucum['ilidi'];
$ilcem=$sonucum['ilceidi'];
$socadi=$sonucum['vocadi'];
$yilim=$sonucum['vyiladi'];
$ayim=$sonucum['vayadi'];
}
$say=mysqli_num_rows($resultvyil);
echo '<input type="hidden" name="ilsec" id="ilsec" value="'.$ilgelen.'">';
echo '<input type="hidden" name="ilcesec" id="ilcesec" value="'.$ilcegelen.'">';
echo '<input type="hidden" name="ocaksec" id="ocaksec" value="'.$ocgelen.'">';
echo '<input type="hidden" name="say" id="say" value="'.$say.'">';

$iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysqli_fetch_array($iladi)){

$ilinadi=$ilsonucum['ilad'];

}
$ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");

while($ilcesonucum=mysqli_fetch_array($ilceadi)){

$ilceninadi=$ilcesonucum['ilcead'];

}

$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";

  $sonucak=@mysqli_query($dbh, $sql);

    while($satir=mysqli_fetch_array($sonucak))

{

$asmninadine=$satir['asmadi'];

//@mysqli_close($conn);

$ahkod=$satir['socad'];

if(substr($ocgelen,-3)=='TSM'){

$ahno='Sorumlu Tabibi';

}elseif(substr($ocgelen,-3)=='HSM'){

$ahno='Birim Sorumlusu';

}else{

$ahno='Nolu Aile Hekimi';

}

$drad=$satir['dradi'];

$asead=$satir['aseadi'];

$aseunv=$satir['aseunvan'];

$unvan=$ahkod.' '.$ahno ;

}
if($yilgelen==""){
    $yilgelen="TÜM YILLAR TOPLAMI";
    $aygelen='';
}
$aygelen="";
if($ocgelen>0 and $say>0){
    ?>
    <a id="basadon"></a>
    <table class="table table-sm table-responsive-sm form013ustaralarenust">
        <th class="bg-warning text-center" width="25%">
            <?php
            echo '<form action="../pdfmysqli/ilcepdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
            echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
            echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
            echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
            echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
            echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
            echo '<input type="hidden" name="ilceyetki" id="ilceyetki" value="'.$ilceyetki.'">';
            echo '<input type="hidden" name="ilceunvan" id="ilceunvan" value="'.$ilceunvan.'">';
            include('assets/form013_sablonlar/gizliinput.php');
            ?>
            <button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 120px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <?php echo $pdfbaslik; ?></button></th>
        <?php
        echo '</form>';
        ?>
        <th class="bg-primary text-center" width="50%"><h6 style="color:#FFFF00;padding-top: 8px;"><strong><?php echo $ocakgorbaslik; ?></strong></h6></th>
        <?php
        echo '</form>';
        ?>
        <th class="bg-warning text-center" width="25%">
            <?php
            echo '<form action="../excelmysqli/form013ilcexls.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">' ;
            echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
            echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
            echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
            echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
            echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
            echo '<input type="hidden" name="ilceyetki" id="ilceyetki" value="'.$ilceyetki.'">';
            echo '<input type="hidden" name="ilceunvan" id="ilceunvan" value="'.$ilceunvan.'">';
            ?>
            <button type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-light" style="width: 120px;"><i class="fa fa-file-excel-o" aria-hidden="true"></i> <?php echo $excelbaslik; ?></button>
            <?php
            echo '</form>';
            ?>	</th>
    </table>
<?php
$dvks=$verim1+$verim2+$verim3+$verim4+$verim5+$verim6+$verim7+$verim8;
$srdks=$verim16+$verim17+$verim18+$verim19+$verim20+$verim21+$verim22+$verim23;
$dves=$verim31+$verim32+$verim33+$verim34+$verim35+$verim36+$verim37+$verim38;
$srdes=$verim46+$verim47+$verim48+$verim49+$verim50+$verim51+$verim52+$verim53;
include("assets/eodf_sablonlar/eodftoplam_sablonu.php");
}
include("../assets/sablon/form013/footer.php");
?>
<!-- Optional JavaScript -->
<script src="../assets/js/sayfa_linkleri_altdizin.js"></script>
<script>
    var ilsec=$("#ilsec").val();
    var ilcesec=$("#ilcesec").val();
    var ocaksec=$("#ocaksec").val();
    if(ilsec=='' || ilsec=='İl Seçiniz' || ilsec==0){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'warning',
            title: 'Önce İli İlçeyi Seçiniz !!!'
        })
    }else if(ilcesec=='İlçe Seçiniz'){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'warning',
            title: 'Önce İlçeyi Seçiniz !!!'
        })
    }else if(ilcesec>0 && ocaksec=='Aile Hekimini Seçiniz'){
					const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 1500,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'warning',
  title: 'Aile Hekimini Seçiniz !!!'
})
				}
</script>



<script>
        var ocaksec=$("#ocaksec").val();
				var say=$("#say").val();
				//alert(say);
				console.log(say);

				if(say==0){
					const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 1500,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'warning',
  title: 'Kayıt bulunamadı !!!'
})
				}

			</script>

