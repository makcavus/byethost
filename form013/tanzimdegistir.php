<?php
ob_start();

include("../con_102.php");
include('frm013alanlari.php');
$form_say=$_GET['form_say'];
$formad=$_GET['formad'];
$aheilad=$_GET['aheilad']; 
$aheilunvan=$_GET['aheilunvan']; 
$aseilad=$_GET['aseilad']; 
$aseilunvan=$_GET['aseilunvan'];
$aheilcead=$_GET['aheilcead']; 
$aheilceunvan=$_GET["aheilceunvan"];
$aseilcead=$_GET["aseilcead"];
$aseilceunvan=$_GET["aseilceunvan"];
/*echo "Gelen:".$formad;
echo "Gelen:".$aheilad;
echo "Gelen:".$aheilunvan;
echo "Gelen:".$aseilad;
echo "Gelen:".$aseilunvan;
echo "Gelen:".$aheilcead;
echo "Gelen:".$aheilceunvan;
echo "Gelen:".$aseilcead;
echo "Gelen:".$aseilceunvan;*/
if($formad==NULL or $aheilcead==NULL or $aseilcead==NULL){
    echo '<div class="alert-dark d-flex flex-wrap justify-content-center">';
    echo'<meta http-equiv=refresh content="3; url=http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php" />
    <a class="btn btn-primary btn-sm mt-1 mb-1" href="http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php" _fcksavedurl="http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php">
    <i class="fa fa-reply-all fa-lg"></i> Formun adı ile düzenleyen ve onaylayan isimlerini girip tekrar Deneyiniz. Geri</div></a>';
}elseif($form_say==1 and $formad!=NULL){
$kayit="UPDATE birim SET  il_aheadi='$aheilad',il_aheunvani='$aheilunvan',il_aseadi='$aseilad',il_aseunvani='$aseilunvan',
ilce_aheadi='$aheilcead',ilce_aheunvani='$aheilceunvan',ilce_aseadi='$aseilcead',ilce_aseunvani='$aseilceunvan' 
where(form='$formad')";

if(mysqli_query($dbh102,$kayit)){
echo '<div class="alert-dark d-flex flex-wrap justify-content-center">';
echo'<meta http-equiv=refresh content="3; url=http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php" />
<a class="btn btn-primary btn-sm mt-1 mb-1" href="http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php" _fcksavedurl="http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php">
<i class="fa fa-reply-all fa-lg"></i> Kayıt Değiştirildi. Geri</div></a>';
}else{
    echo '<div class="alert-dark d-flex flex-wrap justify-content-center">';
    echo'<meta http-equiv=refresh content="3; url=http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php" />
    <a class="btn btn-primary btn-sm mt-1 mb-1" href="http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php" _fcksavedurl="http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php">
    <i class="fa fa-reply-all fa-lg"></i> Kayıt Değiştirilemedi. Tekrar Deneyiniz. Geri</div></a>';
echo mysqli_error();
 }
}else{
    $kayit="INSERT INTO birim(form,il_aheadi,il_aheunvani,il_aseadi,il_aseunvani,ilce_aheadi,ilce_aheunvani,ilce_aseadi,ilce_aseunvani) 
    VALUES('$formad','$aheilad','$aheilunvan','$aseilad','$aseilunvan','$aheilcead','$aheilceunvan','$aseilcead','$aseilceunvan')";
    
    if(mysqli_query($dbh102,$kayit)){
    echo '<div class="alert-dark d-flex flex-wrap justify-content-center">';
    echo'<meta http-equiv=refresh content="3; url=http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php" />
    <a class="btn btn-primary btn-sm mt-1 mb-1" href="http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php" _fcksavedurl="http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php">
    <i class="fa fa-reply-all fa-lg"></i> Kayıt Eklendi. Geri</div></a>';
    }else{
        echo '<div class="alert-dark d-flex flex-wrap justify-content-center">';
        echo'<meta http-equiv=refresh content="3; url=http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php" />
        <a class="btn btn-primary btn-sm mt-1 mb-1" href="http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php" _fcksavedurl="http://'.$siteadresi.'/byethost/form013/form_013_tanzim.php">
        <i class="fa fa-reply-all fa-lg"></i> Kayıt Değiştirilemedi. Tekrar Deneyiniz. Geri</div></a>';
    echo mysqli_error();
     }  
}
@mysqli_close($dbh102);
 ?>
<!-- Optional JavaScript -->
