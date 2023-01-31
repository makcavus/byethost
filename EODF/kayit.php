<?php
function ilkBuyukTR($str){
	$str = mb_strtolower($str);
return str_replace('i̇','i',ltrim(mb_convert_case(str_replace(array('i','I'),array('İ','ı'),$str),MB_CASE_TITLE,'UTF-8')));
}
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
    echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>
<link rel="stylesheet" href="assets/css/eodfstyle.css">
<script type="text/javaScript" src="kaydet.js"></script>
<script type="text/javascript" src="jquery-latest.min.js"></script>
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script>
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script>
<script type="text/javascript" src="toplama.js"></script>
<?php
include('../con_023.php');
include('../con_102.php');
include('eodfalanlari.php');
include("tanimveyetkiler.php");
$form_klasoru=basename(dirname(__FILE__));
$ilgelen=$_GET['selectil'];
$ilcegelen=$_GET['selectilce'];
$ocgelen=$_GET['selectoc'];
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay'];
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
        $asmninadine=$satir['asmadi'];
        $drad=$satir['dradi'];
        $asead=$satir['aseadi'];
        $aseunv=$satir['aseunvan'];

//@mysqli_close($conn);
        $unvan=$satir['socad'];
        if(substr($ocgelen,-3,3)==$kurumyetki){
            $unvan='Sorumlu Tabibi';
        }elseif(substr($ocgelen,-3,3)==$ilyetki){
            $unvan=$ocgelen. ' İl Sağlık Müdürü';
        }elseif(substr($ocgelen,-3,3)==$bakanlikyetki){
            $unvan='Halk Sağlığı Genel Müdürü';
        }else{
            $unvan=$ocgelen. ' Nolu Aile Hekimi';
        }
        $drad=$satir['dradi'];
        $asead=$satir['aseadi'];
        $aseunv=$satir['aseunvan'];
    }
}elseif(substr($ocgelen,-3,3)==$ilyetki){
    //echo "doğru....";
    $sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and right(socad,3)='$ilyetki')order by dradi asc";
    $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
    {
        $frm102yetkili=@mysqli_query($dbh102,"select form,il_aheadi,il_aheunvani,il_aseadi,il_aseunvani from birim where(form='$form_klasoru')");
        while($frm102yetkilisi=mysqli_fetch_array($frm102yetkili)){
          $asead=$frm102yetkilisi['il_aseadi'];
          $aseunv=$frm102yetkilisi['il_aseunvani'];
          $drad=$frm102yetkilisi['il_aheadi'];
          $unvan=ilkBuyukTR($ilinadine).' '.$frm102yetkilisi['il_aheunvani'];
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
            $unvan=ilkBuyukTR($ilceninadine)." ".$frm102yetkilisi['ilce_aheunvani'];
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
        $drad=$satir['dradi'];
        $asead=$satir['aseadi'];
        $aseunv=$satir['aseunvan'];
//@mysqli_close($conn);
        $unvan=$satir['socad'];
        if(substr($ocgelen,-3,3)==$kurumyetki){
            $unvan='Sorumlu Tabibi';
        }elseif(substr($ocgelen,-3,3)==$ilyetki){
            $unvan=$ilceadine. ' İl Sağlık Müdürü';
        }else{
            $unvan=$ocgelen. ' Nolu Aile Hekimi';
        }
        $drad=$satir['dradi'];
        $asead=$satir['aseadi'];
        $aseunv=$satir['aseunvan'];
//echo $kurumyetki;
//echo $ilyetki;
    }
}else{
    $sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
    $sonucak=mysqli_query($dbh,$sql);
    while($satir=mysqli_fetch_array($sonucak))
    {
        $asmninadine=$satir['asmadi'];
        $drad=$satir['dradi'];
        $asead=$satir['aseadi'];
        $aseunv=$satir['aseunvan'];
        $unvan=$satir['socad'];
        if(substr($ocgelen,-3,3)==$kurumyetki){
            $unvan='Sorumlu Tabibi';
        }elseif(substr($ocgelen,-3,3)==$ilyetki){
            $unvan=$ocgelen. ' İl Sağlık Müdürü';
        }else{
            $unvan=$ocgelen. ' Nolu Aile Hekimi';
        }
        //$drad=$satir['dradi'];
        $asead=$satir['aseadi'];
        $aseunv=$satir['aseunvan'];
//echo $kurumyetki;
//echo $ilyetki;
    }
}
?>
<div id="sonuckay"><form class="form" name="girdiekle" action="javascript:void(0)" method="get" onKeyUp="highlight(event)" onClick="highlight(event)">
          <?php
        include('assets/eodf_sablonlar/eodfkayit_sablonu.php');
        include('assets/eodf_sablonlar/gizli_input_kayit.php');
        ?>
</form>
?>


