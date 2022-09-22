<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Duyuru İşlemleri</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--<link rel="stylesheet" type="text/css" href="duyuru.css">-->
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../../bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bootstrap-4/font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="jquery.js"></script><!--JQUEY Kütüphanemizi dahil ediyoruz.-->
<script type="text/javascript">
	
function noCache(
uri 
){
return uri.concat( 
/\?/.test(uri) ?
"&"
:
"?",
"noCache=",
(new Date).getTime(),
".",
Math.random()*1234567
);
};
function islem(id,komut) // islem  fonksiyomuzda id ve komut isimli iki değişken kullanacağız.id değişkeni ile verileri id değerini taşımak için, komut değişkenini ise güncelleme için kullanıcağız.
{
$.ajax({ 
type: 'GET',//verinin gönderilme yöntemini belirliyoruz.
url :noCache('islem.php?yaziid='+id+'&komut='+komut),//islem yapılacak dosyayı belirtiyoruz.fonksiyonumuzdan gelen değişkenleri islem.php sayfasına POST methodu ile gönderiyoruz.
data: $('form').serialize(),//gönderilecek veri olarak formdan elamlarının değerleri alıyoruz.
success: function(cevap) // işlem.php sayfasından gelen sonuçları id özniteliği liste olan bir div'de görüntülyouz.
	{
$('div#liste').html(cevap);
}
});}
</script>

</head>
<?php
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
function replace_tr($text) {
   $text = trim($text);
   $search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
   $replace = array('C','c','G','g','i','I','O','o','S','s','U','u','-');
   $new_text = str_replace($search,$replace,$text);
   return $new_text;
}
	
$tarih=$_POST["tarih"];
$konu=$_POST["konu"];
$icerik=$_POST["icerik"];
$dosya=$_POST["dosya"];
$bilgi=$_POST["bilgi"];
$resim=$_POST["resim"];	
$foto1=$_POST["foto1"];
$foto2=$_POST["foto2"];
$foto3=$_POST["foto3"];
$foto4=$_POST["foto4"];
$foto5=$_POST["foto5"];
$foto6=$_POST["foto6"];
$foto7=$_POST["foto7"];
$foto8=$_POST["foto8"];
$foto9=$_POST["foto9"];
$foto10=$_POST["foto10"];
//echo '<br><br>';
	/*
	//echo $tarih;
	echo $konu;
	echo $icerik;
	echo $dosya;
	echo $bilgi;
	echo $resim;
	//echo '<br><br>';
	
	echo $foto1;
	echo $foto2;
	echo $foto3;
	echo $foto4;
	echo $foto5;
	echo $foto6;
	echo $foto7;
	echo $foto8;
	echo $foto9;
	echo $foto10;
	
	*/
	$vtkonu=trsuz($konu);
	$vticerik=trsuz($icerik);
	$vtbilgi=trsuz($bilgi);
	/*
	echo $konu;
	echo $icerik;
	echo $bilgi;
	*/
	
$dosya=replace_tr($dosya);
$resim=replace_tr($resim);
$foto1=replace_tr($foto1);
$foto2=replace_tr($foto2);
$foto3=replace_tr($foto3);
$foto4=replace_tr($foto4);
$foto5=replace_tr($foto5);
$foto6=replace_tr($foto6);
$foto7=replace_tr($foto7);
$foto8=replace_tr($foto8);
$foto9=replace_tr($foto9);
$foto10=replace_tr($foto10);
	
//$resim=htmlspecialchars(replace_tr($_FILES["resim"]);

//$resim=htmlspecialchars(replace_tr($_FILES["resim"]);

//DOSYA EKLEME

if ($_FILES["dosya"]["error"] > 0)

        {

        //echo "Error: " . replace_tr($_FILES["dosya"]["error"] . "<br />";

        }

else

        {

       // echo "Yüklenen dosya: " . replace_tr($_FILES["dosya"]["name"]) . "<br />";

        //echo "Dosyanın türü: " . replace_tr($_FILES["dosya"]["type"] . "<br />";

       // echo "Dosyanın büyüklüğü: " . (replace_tr($_FILES["dosya"]["size"] / 1024) . " Kb<br />";

       // echo "Geçici depo adresi: " . replace_tr($_FILES["dosya"]["tmp_name"]) . "<br />";



        if (file_exists("Dosya/" . $_FILES["dosya"]["name"]))

             {

             echo $_FILES["dosya"]["name"] . " kalıcı olarak depolanamadı. Aynı adı taşıyan başka bir dosya bulunmakta. ";

             }

      else

            {

            move_uploaded_file($_FILES["dosya"]["tmp_name"], "Dosya/" . replace_tr($_FILES["dosya"]["name"]));

            //echo "Kalıcı depo adresi: " . "Dosya/" . $_FILES["dosya"]["name"];

			$dosya="Dosya/" . replace_tr($_FILES["dosya"]["name"]);

			//echo $dosya;

           }

        }
		//RESİM DOSYASI YÜKLEME

if ($_FILES["resim"]["error"] > 0)

        {

        //echo "Error: " . replace_tr($_FILES["resim"]["error"] . "<br />";

        }

else

        {

       // echo "Yüklenen dosya: " . replace_tr($_FILES["resim"]["name"]) . "<br />";

       // echo "Dosyanın türü: " . replace_tr($_FILES["resim"]["type"] . "<br />";

       // echo "Dosyanın büyüklüğü: " . (replace_tr($_FILES["resim"]["size"] / 1024) . " Kb<br />";

      //  echo "Geçici depo adresi: " . replace_tr($_FILES["resim"]["tmp_name"]) . "<br />";



        if (file_exists("Depo/" . $_FILES["resim"]["name"]))

             {
//echo '<br>';

             echo $_FILES["resim"]["name"] .''.'kalıcı olarak depolanamadı. Aynı adı taşıyan başka bir dosya bulunmakta.';

             }

      else

            {

            move_uploaded_file($_FILES["resim"]["tmp_name"], "Depo/" . replace_tr($_FILES["resim"]["name"]));
			
            //echo "Kalıcı depo adresi: " . "Depo/" . $_FILES["resim"]["name"];

			$resim="Depo/" . replace_tr($_FILES["resim"]["name"]);

			//echo $resim;
				}

        }
			if(!empty($_FILES["foto1"]["name"])){
			move_uploaded_file($_FILES["foto1"]["tmp_name"], "icerikfoto/" . replace_tr($_FILES["foto1"]["name"]));
			
            //echo "Kalıcı depo adresi: " . "icerikfoto/" . replace_tr($_FILES["foto1"]["name"]);

			$foto1="icerikfoto/" . replace_tr($_FILES["foto1"]["name"]);
}else{$foto1=NULL;}
			//echo $foto1;
				if(!empty($_FILES["foto2"]["name"])){
			move_uploaded_file($_FILES["foto2"]["tmp_name"], "icerikfoto/" . replace_tr($_FILES["foto2"]["name"]));
			
            //echo "Kalıcı depo adresi: " . "icerikfoto/" . $_FILES["foto2"]["name"];

			$foto2="icerikfoto/" . replace_tr($_FILES["foto2"]["name"]);
}else{$foto2=NULL;}
			//echo $foto2;
				if(!empty($_FILES["foto3"]["name"])){
			move_uploaded_file($_FILES["foto3"]["tmp_name"], "icerikfoto/" . replace_tr($_FILES["foto3"]["name"]));
			
            //echo "Kalıcı depo adresi: " . "icerikfoto/" . $_FILES["foto3"]["name"];

			$foto3="icerikfoto/" . replace_tr($_FILES["foto3"]["name"]);
}else{$foto3=NULL;}
			//echo $foto3;
				if(!empty($_FILES["foto4"]["name"])){
			move_uploaded_file($_FILES["foto4"]["tmp_name"], "icerikfoto/" . replace_tr($_FILES["foto4"]["name"]));
			
            //echo "Kalıcı depo adresi: " . "icerikfoto/" . $_FILES["foto4"]["name"];

			$foto4="icerikfoto/" . replace_tr($_FILES["foto4"]["name"]);
}else{$foto4=NULL;}
			//echo $foto4;
				if(!empty($_FILES["foto5"]["name"])){
			move_uploaded_file($_FILES["foto5"]["tmp_name"], "icerikfoto/" . replace_tr($_FILES["foto5"]["name"]));
			
            //echo "Kalıcı depo adresi: " . "icerikfoto/" . $_FILES["foto5"]["name"];

			$foto5="icerikfoto/" . replace_tr($_FILES["foto5"]["name"]);
}else{$foto5=NULL;}
			//echo $foto5;
				if(!empty($_FILES["foto6"]["name"])){
			move_uploaded_file($_FILES["foto6"]["tmp_name"], "icerikfoto/" . replace_tr($_FILES["foto6"]["name"]));
			
            //echo "Kalıcı depo adresi: " . "icerikfoto/" . $_FILES["foto6"]["name"];

			$foto6="icerikfoto/" . replace_tr($_FILES["foto6"]["name"]);
}else{$foto6=NULL;}
			//echo $foto6;
				if(!empty($_FILES["foto7"]["name"])){
			move_uploaded_file($_FILES["foto7"]["tmp_name"], "icerikfoto/" . replace_tr($_FILES["foto7"]["name"]));
			
            //echo "Kalıcı depo adresi: " . "icerikfoto/" . $_FILES["foto7"]["name"];

			$foto7="icerikfoto/" . replace_tr($_FILES["foto7"]["name"]);
}else{$foto7=NULL;}
			//echo $foto7;
				if(!empty($_FILES["foto8"]["name"])){
			move_uploaded_file($_FILES["foto8"]["tmp_name"], "icerikfoto/" . replace_tr($_FILES["foto8"]["name"]));
			
            //echo "Kalıcı depo adresi: " . "icerikfoto/" . $_FILES["foto8"]["name"];

			$foto8="icerikfoto/" . replace_tr($_FILES["foto8"]["name"]);
}else{$foto8=NULL;}
			//echo $foto8;
				if(!empty($_FILES["foto9"]["name"])){
			move_uploaded_file($_FILES["foto9"]["tmp_name"], "icerikfoto/" . replace_tr($_FILES["foto9"]["name"]));
			
            //echo "Kalıcı depo adresi: " . "icerikfoto/" . $_FILES["foto9"]["name"];

			$foto9="icerikfoto/" . replace_tr($_FILES["foto9"]["name"]);
}else{$foto9=NULL;}
			//echo $foto9;
				if(!empty($_FILES["foto10"]["name"])){
			move_uploaded_file($_FILES["foto10"]["tmp_name"], "icerikfoto/" . replace_tr($_FILES["foto10"]["name"]));
			
            //echo "Kalıcı depo adresi: " . "icerikfoto/" . $_FILES["foto10"]["name"];

			$foto10="icerikfoto/" . replace_tr($_FILES["foto10"]["name"]);

}else{$foto10=NULL;}			
			//echo $foto10;

           

include("../../connect.php");

//$conn=mysql_connect("sql304.byetcluster.com","b12_10384566","malika") or die("Bağlanılamadı");

if($dbh){

if(mysql_select_db("b12_10384566_etf",$dbh)){

$sql = mysql_query("SELECT konu,icerik FROM duyuru WHERE konu = '$konu' and icerik = '$icerik' ");
                $kontrol = mysql_num_rows($sql);
                        if (empty($konu)){
                            echo '<table class="table table-sm table-responsive-lg table-stripped table-bordered table-hover">';

//echo '<br>';
echo '<div class="alert alert-info text-dark">'."Konuyu Girmediniz.".'</div>';

//echo '</table>';

                        }elseif ($kontrol == TRUE) {
                            echo '<div class="alert alert-info text-dark">'."Bu Konu Daha Önce Eklenmiş...".'</div>';
                        }else{

$SQLInsert="insert into duyuru (tarih,konu,icerik,dosya,bilgi,resim,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8,foto9,foto10) values('$tarih','$vtkonu','$vticerik','$dosya','$vtbilgi','$resim','$foto1','$foto2','$foto3','$foto4','$foto5','$foto6','$foto7','$foto8','$foto9','$foto10')";

}

}

}

if(mysql_query($SQLInsert)){

//echo '<table class="table table-sm table-responsive table-stripped table-bordered">';

echo '<div class="alert alert-info text-dark">'."Duyuru Kaydı Yapıldı.".'</div>';

//echo '</table>';

}else{

//echo '<table class="table table-sm table-responsive table-stripped table-bordered">';
	
echo '<div class="alert alert-info text-dark">'."Duyuru Kaydı Yapılamadı.Tekrar deneyiniz.Silme veya Düzeltme Yapılabilir.".'</div>';

//echo '</table>';

}

@mysql_close($dbh);

?>

 <body onload="islem('','')">

<table class="table table-sm table-responsive-lg table-stripped table-bordered table-hover">
<thead>
   
<tr><th>Duyuru Tarihi</th>

<th>Duyuru Konusu</th>

<th>Duyurunun İçeriği</th>

<th>Dosya Yolu</th>

<th>Dosya Açıklaması</th>

<th>Resim</th>

<th>İşlemler</th>

</tr>
	</thead>
</table>

<div id="liste" align="center"></div> 


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../../../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
<script src="../../../bootstrap-4/popper.js"></script>
<script src="../../../bootstrap-4/js/bootstrap.min.js"></script>
</body>

</html>



 