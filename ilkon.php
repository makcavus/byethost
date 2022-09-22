<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Untitled Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!--<link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-4/font-awesome/css/font-awesome.min.css">-->
<body>
<?php
include('tanimlaranadizin.php');

function metin_bol($metin,$baslangic,$uzunluk,$yaziid)
{
//$sayfa=$_SERVER['PHP_SELF'];

$devam="";

$harfsayi=strlen(trim($metin));

$metin=substr($metin,$baslangic,$uzunluk);

$dizi=explode(' ',$metin);

array_pop($dizi);

$metin=implode(' ',$dizi);

$metin=trim($metin);

$sonsayi=strlen($metin);

if($harfsayi>$sonsayi)

{

$devam='...<br><a href="yazilar.php?yaziid='.$yaziid.'" class="btn btn-success btn-sm"><b><i class="fa fa-hand-o-right" aria-hidden="true"></i> Okumaya Devam et...</b></a>';

}

$metin="$metin $devam";

return $metin;

}

include('connect.php');

//echo metin_bol($cumle,0,150,$yazino).'<br>';

//echo $sonucum['icerik'].'<hr>';

$ek="Ekli Dosya:";

$sorgum1="select yaziid,date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya,resim,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8,foto9,foto10 from duyuru order by yaziid desc limit 0,1";

$basla1=mysqli_query($dbh,$sorgum1);

$sonucum1=mysqli_fetch_array($basla1);

$tarih1=$sonucum1['tarih1'];

 $konum1=$sonucum1['konu'];

$yaziid1=$sonucum1['yaziid'];

$muh1=$sonucum1['icerik'];

$bilgisi1=$sonucum1['bilgi'];
																					
$resim1=$sonucum1['resim'];

$foto1=$sonucum1['foto1'];

$foto2=$sonucum1['foto2'];

$foto3=$sonucum1['foto3'];  

$foto4=$sonucum1['foto4'];  

$foto5=$sonucum1['foto5'];

$foto6=$sonucum1['foto6'];  

$foto7=$sonucum1['foto7'];  
	
$foto8=$sonucum1['foto8'];

$foto9=$sonucum1['foto9'];  

$foto10=$sonucum1['foto10']; 

$muh1=str_replace("\n","<br />",$muh1);

if($sonucum1['dosya']!=NULL){

$link1='<br><font color="red" style="font-weight:bold"></font><a class="btn btn-warning btn-sm mt-1" href="form013/admin/'.$sonucum1['dosya'].'">&nbsp;<font color="blue" style="font-weight:bold"><i class="fa fa-download" fa-lg aria-hidden="true"></i> '.$bilgisi1.'</font></a>';

}else{

$link1="";

}
if(strlen($foto1)>11 or strlen($foto2)>11 or strlen($foto3)>11 or strlen($foto4)>11 or strlen($foto5)>11 or strlen($foto6)>11 or strlen($foto7)>11 or strlen($foto8)>11 or strlen($foto9)>11 or strlen($foto10)>11){ $resimgoster='<button type="button" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#exampleModal1">
  '.$konuresimbaslikilkon.'</button></td></tr></tbody>';
  ?>
 
  <!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $konuresimbaslikilkon;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php if(strlen($foto1)>11){?>  
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><?php } ?>
<?php if(strlen($foto2)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li><?php } ?>
<?php if(strlen($foto3)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li><?php } ?>
<?php if(strlen($foto4)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li><?php } ?>
<?php if(strlen($foto5)>11){?>	
	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li><?php } ?>
<?php if(strlen($foto6)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li><?php } ?>
<?php if(strlen($foto7)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li><?php } ?>
<?php if(strlen($foto8)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="7"></li><?php } ?>
<?php if(strlen($foto9)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="8"></li><?php } ?>
<?php if(strlen($foto10)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="9"></li><?php } ?>
	
  </ol>
  <div class="carousel-inner">
<?php if(strlen($foto1)>11){?>   
    <div class="carousel-item active" align="center">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto1; ?>" alt="First slide">
    </div><?php } ?>
<?php if(strlen($foto2)>11){?>  
   <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto2; ?>" alt="Second slide">
    </div><?php } ?>
<?php if(strlen($foto3)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto3; ?>" alt="Third slide">
    </div><?php } ?>
<?php if(strlen($foto4)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto4; ?>" alt="four slide">
    </div><?php } ?>
<?php if(strlen($foto5)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto5; ?>" alt="five slide">
    </div><?php } ?>
<?php if(strlen($foto6)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto6; ?>" alt="six slide">
    </div><?php } ?>
<?php if(strlen($foto7)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto7; ?>" alt="seven slide">
    </div><?php } ?>
<?php if(strlen($foto8)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto8; ?>" alt="eight slide">
    </div><?php } ?>
<?php if(strlen($foto9)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto9; ?>" alt="dokuz slide">
    </div><?php } ?>
<?php if(strlen($foto10)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto10; ?>" alt="ten slide">
    </div><?php } ?> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="modal-footer bg-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        
      </div>
    </div>
  </div>
</div>

 <?php
  }else{
	$resimgoster="";
}
if(strlen($muh1)>660)

{

$bol1=metin_bol($muh1,0,660,$yaziid1);

$alo1=$bol1.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link1.' '.$resimgoster ;

}else{

$alo1=$muh1.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link1.' '.$resimgoster ;

}

$harfsayi1=strlen(trim($konum1));

if($harfsayi1>50){

$konum1r='<marquee SCROLLAMOUNT="4"><font color="red">'.$konum1.'</font></marquee>';

$konum1k='<marquee SCROLLAMOUNT="4"><font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih1.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum1.'&nbsp; &nbsp;&nbsp;</font></marquee>';

$konum1s='<marquee SCROLLAMOUNT="4">&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih1.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum1.'</font>&nbsp; &nbsp;&nbsp;</marquee>';

}else{

$konum1r='<font color="red">'.$konum1.'</font>';

$konum1k='<font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih1.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum1.'&nbsp; &nbsp;&nbsp;</font>';

$konum1s='&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih1.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum1.'</font>&nbsp; &nbsp;&nbsp;';

}

$sorgum2="select yaziid,date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya,resim,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8,foto9,foto10 from duyuru order by yaziid desc limit 1,1";

$basla2=mysqli_query($dbh,$sorgum2);

$sonucum2=mysqli_fetch_array($basla2); 

$tarih2=$sonucum2['tarih1'];

$konum2=$sonucum2['konu'];

$yaziid2=$sonucum2['yaziid'];
$muh2=$sonucum2['icerik'];

$bilgisi2=$sonucum2['bilgi'];

$resim2=$sonucum2['resim'];

$foto1=$sonucum2['foto1'];

$foto2=$sonucum2['foto2'];

$foto3=$sonucum2['foto3'];  

$foto4=$sonucum2['foto4'];  

$foto5=$sonucum2['foto5'];

$foto6=$sonucum2['foto6'];  

$foto7=$sonucum2['foto7'];  
	
$foto8=$sonucum2['foto8'];

$foto9=$sonucum2['foto9'];  

$foto10=$sonucum2['foto10']; 

$muh2=str_replace("\n","<br />",$muh2); 



if($sonucum2['dosya']!=NULL){



$link2='<br><font color="red" style="font-weight:bold"></font><a class="btn btn-warning btn-sm mt-1" href="form013/admin/'.$sonucum2['dosya'].'">&nbsp;<font color="blue" style="font-weight:bold"><i class="fa fa-download" fa-lg aria-hidden="true"></i> '.$bilgisi2.'</font></a>';

}else{

$link2="";
  
}

if(strlen($foto1)>11 or strlen($foto2)>11 or strlen($foto3)>11 or strlen($foto4)>11 or strlen($foto5)>11 or strlen($foto6)>11 or strlen($foto7)>11 or strlen($foto8)>11 or strlen($foto9)>11 or strlen($foto10)>11){ $resimgoster='<button type="button" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#exampleModal2">
  '.$konuresimbaslikilkon.'</button></td></tr></tbody>';
  ?>
 
  <!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $konuresimbaslikilkon;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php if(strlen($foto1)>11){?>  
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><?php } ?>
<?php if(strlen($foto2)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li><?php } ?>
<?php if(strlen($foto3)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li><?php } ?>
<?php if(strlen($foto4)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li><?php } ?>
<?php if(strlen($foto5)>11){?>	
	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li><?php } ?>
<?php if(strlen($foto6)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li><?php } ?>
<?php if(strlen($foto7)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li><?php } ?>
<?php if(strlen($foto8)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="7"></li><?php } ?>
<?php if(strlen($foto9)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="8"></li><?php } ?>
<?php if(strlen($foto10)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="9"></li><?php } ?>
	
  </ol>
  <div class="carousel-inner">
<?php if(strlen($foto1)>11){?>   
    <div class="carousel-item active" align="center">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto1; ?>" alt="First slide">
    </div><?php } ?>
<?php if(strlen($foto2)>11){?>  
   <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto2; ?>" alt="Second slide">
    </div><?php } ?>
<?php if(strlen($foto3)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto3; ?>" alt="Third slide">
    </div><?php } ?>
<?php if(strlen($foto4)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto4; ?>" alt="four slide">
    </div><?php } ?>
<?php if(strlen($foto5)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto5; ?>" alt="five slide">
    </div><?php } ?>
<?php if(strlen($foto6)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto6; ?>" alt="six slide">
    </div><?php } ?>
<?php if(strlen($foto7)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto7; ?>" alt="seven slide">
    </div><?php } ?>
<?php if(strlen($foto8)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto8; ?>" alt="eight slide">
    </div><?php } ?>
<?php if(strlen($foto9)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto9; ?>" alt="dokuz slide">
    </div><?php } ?>
<?php if(strlen($foto10)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto10; ?>" alt="ten slide">
    </div><?php } ?> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="modal-footer bg-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        
      </div>
    </div>
  </div>
</div>

 <?php
  }else{
	$resimgoster="";
}

if(strlen($muh2)>660)



{



$bol2=metin_bol($muh2,0,660,$yaziid2);



$alo2=$bol2.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link2.' '.$resimgoster ;



}else{



$alo2=$muh2.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link2.' '.$resimgoster ;



}



$harfsayi2=strlen(trim($konum2));



if($harfsayi2>50){



$konum2r='<marquee SCROLLAMOUNT="4"><font color="red">'.$konum2.'</font></marquee>';

$konum2k='<marquee SCROLLAMOUNT="4"><font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih2.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum2.'&nbsp; &nbsp;&nbsp;</font></marquee>';

$konum2s='<marquee SCROLLAMOUNT="4">&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih2.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum2.'</font>&nbsp; &nbsp;&nbsp;</marquee>';

}else{



$konum2r='<font color="red">'.$konum2.'</font>';

$konum2k='<font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih2.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum2.'&nbsp; &nbsp;&nbsp;</font>';

$konum2s='&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih2.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum2.'</font>&nbsp; &nbsp;&nbsp;';



}



$sorgum3="select yaziid,date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya,resim,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8,foto9,foto10 from duyuru order by yaziid desc limit 2,1";



$basla3=mysqli_query($dbh,$sorgum3);



$sonucum3=mysqli_fetch_array($basla3); 



$tarih3=$sonucum3['tarih1'];



 $konum3=$sonucum3['konu'];



$yaziid3=$sonucum3['yaziid'];



$muh3=$sonucum3['icerik'];



$bilgisi3=$sonucum3['bilgi'];


$resim3=$sonucum3['resim'];

$foto1=$sonucum3['foto1'];

$foto2=$sonucum3['foto2'];

$foto3=$sonucum3['foto3'];  

$foto4=$sonucum3['foto4'];  

$foto5=$sonucum3['foto5'];

$foto6=$sonucum3['foto6'];  

$foto7=$sonucum3['foto7'];  
	
$foto8=$sonucum3['foto8'];

$foto9=$sonucum3['foto9'];  

$foto10=$sonucum3['foto10']; 

$muh3=str_replace("\n","<br />",$muh3);  

if($sonucum3['dosya']!=NULL){

$link3='<br><font color="red" style="font-weight:bold"></font><a class="btn btn-warning btn-sm mt-1" href="form013/admin/'.$sonucum3['dosya'].'">&nbsp;<font color="blue" style="font-weight:bold"><i class="fa fa-download" fa-lg aria-hidden="true"></i> '.$bilgisi3.'</font></a>';

}else{

$link3="";

}

if(strlen($foto1)>11 or strlen($foto2)>11 or strlen($foto3)>11 or strlen($foto4)>11 or strlen($foto5)>11 or strlen($foto6)>11 or strlen($foto7)>11 or strlen($foto8)>11 or strlen($foto9)>11 or strlen($foto10)>11){ $resimgoster='<button type="button" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#exampleModal3">
  '.$konuresimbaslikilkon.'</button></td></tr></tbody>';
  ?>
 
  <!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $konuresimbaslikilkon;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php if(strlen($foto1)>11){?>  
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><?php } ?>
<?php if(strlen($foto2)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li><?php } ?>
<?php if(strlen($foto3)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li><?php } ?>
<?php if(strlen($foto4)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li><?php } ?>
<?php if(strlen($foto5)>11){?>	
	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li><?php } ?>
<?php if(strlen($foto6)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li><?php } ?>
<?php if(strlen($foto7)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li><?php } ?>
<?php if(strlen($foto8)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="7"></li><?php } ?>
<?php if(strlen($foto9)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="8"></li><?php } ?>
<?php if(strlen($foto10)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="9"></li><?php } ?>
	
  </ol>
  <div class="carousel-inner">
<?php if(strlen($foto1)>11){?>   
    <div class="carousel-item active" align="center">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto1; ?>" alt="First slide">
    </div><?php } ?>
<?php if(strlen($foto2)>11){?>  
   <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto2; ?>" alt="Second slide">
    </div><?php } ?>
<?php if(strlen($foto3)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto3; ?>" alt="Third slide">
    </div><?php } ?>
<?php if(strlen($foto4)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto4; ?>" alt="four slide">
    </div><?php } ?>
<?php if(strlen($foto5)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto5; ?>" alt="five slide">
    </div><?php } ?>
<?php if(strlen($foto6)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto6; ?>" alt="six slide">
    </div><?php } ?>
<?php if(strlen($foto7)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto7; ?>" alt="seven slide">
    </div><?php } ?>
<?php if(strlen($foto8)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto8; ?>" alt="eight slide">
    </div><?php } ?>
<?php if(strlen($foto9)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto9; ?>" alt="dokuz slide">
    </div><?php } ?>
<?php if(strlen($foto10)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto10; ?>" alt="ten slide">
    </div><?php } ?> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="modal-footer bg-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        
      </div>
    </div>
  </div>
</div>

 <?php
  }else{
	$resimgoster="";
}

if(strlen($muh3)>660)



{



$bol3=metin_bol($muh3,0,660,$yaziid3);



$alo3=$bol3.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link3.' '.$resimgoster ;



}else{



$alo3=$muh3.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link3.' '.$resimgoster ;



}



$harfsayi3=strlen(trim($konum3));



if($harfsayi3>50){



$konum3r='<marquee SCROLLAMOUNT="4"><font color="red">'.$konum3.'</font></marquee>';

$konum3k='<marquee SCROLLAMOUNT="4"><font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih3.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum3.'&nbsp; &nbsp;&nbsp;</font></marquee>';

$konum3s='<marquee SCROLLAMOUNT="4">&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih3.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum3.'</font>&nbsp; &nbsp;&nbsp;</marquee>';

}else{



$konum3r='<font color="red">'.$konum3.'</font>';

$konum3k='<font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih3.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum3.'&nbsp; &nbsp;&nbsp;</font>';

$konum3s='&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih3.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum3.'</font>&nbsp; &nbsp;&nbsp;';





}



$sorgum4="select yaziid,date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya,resim,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8,foto9,foto10 from duyuru order by yaziid desc limit 3,1";



$basla4=mysqli_query($dbh,$sorgum4);



$sonucum4=mysqli_fetch_array($basla4); 



$tarih4=$sonucum4['tarih1'];



 $konum4=$sonucum4['konu'];



$yaziid4=$sonucum4['yaziid'];



$muh4=$sonucum4['icerik'];



$bilgisi4=$sonucum4['bilgi'];

$resim4=$sonucum4['resim'];

$foto1=$sonucum4['foto1'];

$foto2=$sonucum4['foto2'];

$foto3=$sonucum4['foto3'];  

$foto4=$sonucum4['foto4'];  

$foto5=$sonucum4['foto5'];

$foto6=$sonucum4['foto6'];  

$foto7=$sonucum4['foto7'];  
	
$foto8=$sonucum4['foto8'];

$foto9=$sonucum4['foto9'];  

$foto10=$sonucum4['foto10']; 

$muh4=str_replace("\n","<br />",$muh4);  



if($sonucum4['dosya']!=NULL){



$link4='<br><font color="red" style="font-weight:bold"></font><a class="btn btn-warning btn-sm mt-1" href="form013/admin/'.$sonucum4['dosya'].'">&nbsp;<font color="blue" style="font-weight:bold"><i class="fa fa-download" fa-lg aria-hidden="true"></i> '.$bilgisi4.'</font></a>';

}else{

$link4="";

}

if(strlen($foto1)>11 or strlen($foto2)>11 or strlen($foto3)>11 or strlen($foto4)>11 or strlen($foto5)>11 or strlen($foto6)>11 or strlen($foto7)>11 or strlen($foto8)>11 or strlen($foto9)>11 or strlen($foto10)>11){ $resimgoster='<button type="button" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#exampleModal5">
  '.$konuresimbaslikilkon.'</button></td></tr></tbody>';
  ?>
 
  <!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $konuresimbaslikilkon;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php if(strlen($foto1)>11){?>  
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><?php } ?>
<?php if(strlen($foto2)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li><?php } ?>
<?php if(strlen($foto3)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li><?php } ?>
<?php if(strlen($foto4)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li><?php } ?>
<?php if(strlen($foto5)>11){?>	
	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li><?php } ?>
<?php if(strlen($foto6)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li><?php } ?>
<?php if(strlen($foto7)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li><?php } ?>
<?php if(strlen($foto8)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="7"></li><?php } ?>
<?php if(strlen($foto9)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="8"></li><?php } ?>
<?php if(strlen($foto10)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="9"></li><?php } ?>
	
  </ol>
  <div class="carousel-inner">
<?php if(strlen($foto1)>11){?>   
    <div class="carousel-item active" align="center">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto1; ?>" alt="First slide">
    </div><?php } ?>
<?php if(strlen($foto2)>11){?>  
   <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto2; ?>" alt="Second slide">
    </div><?php } ?>
<?php if(strlen($foto3)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto3; ?>" alt="Third slide">
    </div><?php } ?>
<?php if(strlen($foto4)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto4; ?>" alt="four slide">
    </div><?php } ?>
<?php if(strlen($foto5)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto5; ?>" alt="five slide">
    </div><?php } ?>
<?php if(strlen($foto6)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto6; ?>" alt="six slide">
    </div><?php } ?>
<?php if(strlen($foto7)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto7; ?>" alt="seven slide">
    </div><?php } ?>
<?php if(strlen($foto8)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto8; ?>" alt="eight slide">
    </div><?php } ?>
<?php if(strlen($foto9)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto9; ?>" alt="dokuz slide">
    </div><?php } ?>
<?php if(strlen($foto10)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto10; ?>" alt="ten slide">
    </div><?php } ?> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="modal-footer bg-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        
      </div>
    </div>
  </div>
</div>

 <?php
  }else{
	$resimgoster="";
}

if(strlen($muh4)>660)



{



$bol4=metin_bol($muh4,0,660,$yaziid4);



$alo4=$bol4.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link4.' '.$resimgoster ;



}else{



$alo4=$muh4.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link4.' '.$resimgoster ;



}



$harfsayi4=strlen(trim($konum4));



if($harfsayi4>50){



$konum4r='<marquee SCROLLAMOUNT="4"><font color="red">'.$konum4.'</font></marquee>';

$konum4k='<marquee SCROLLAMOUNT="4"><font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih4.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum4.'&nbsp; &nbsp;&nbsp;</font></marquee>';

$konum4s='<marquee SCROLLAMOUNT="4">&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih4.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum4.'</font>&nbsp; &nbsp;&nbsp;</marquee>';

}else{



$konum4r='<font color="red">'.$konum4.'</font>';

$konum4k='<font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih4.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum4.'&nbsp; &nbsp;&nbsp;</font>';

$konum4s='&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih4.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum4.'</font>&nbsp; &nbsp;&nbsp;';





}



//5. sorgu



$sorgum5="select yaziid,date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya,resim,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8,foto9,foto10 from duyuru order by yaziid desc limit 4,1";



$basla5=mysqli_query($dbh,$sorgum5);



$sonucum5=mysqli_fetch_array($basla5); 



$tarih5=$sonucum5['tarih1'];



 $konum5=$sonucum5['konu'];



$yaziid5=$sonucum5['yaziid'];



$muh5=$sonucum5['icerik'];



$bilgisi5=$sonucum5['bilgi'];



$resim5=$sonucum5['resim'];

$foto1=$sonucum5['foto1'];

$foto2=$sonucum5['foto2'];

$foto3=$sonucum5['foto3'];  

$foto4=$sonucum5['foto4'];  

$foto5=$sonucum5['foto5'];

$foto6=$sonucum5['foto6'];  

$foto7=$sonucum5['foto7'];  
	
$foto8=$sonucum5['foto8'];

$foto9=$sonucum5['foto9'];  

$foto10=$sonucum5['foto10']; 

$muh5=str_replace("\n","<br />",$muh5); 

 

if($sonucum5['dosya']!=NULL){



$link5='<br><font color="red" style="font-weight:bold"></font><a class="btn btn-warning btn-sm mt-1" href="form013/admin/'.$sonucum5['dosya'].'">&nbsp;<font color="blue" style="font-weight:bold"><i class="fa fa-download" fa-lg aria-hidden="true"></i> '.$bilgisi5.'</font></a>';

}else{

$link5="";

}

if(strlen($foto1)>11 or strlen($foto2)>11 or strlen($foto3)>11 or strlen($foto4)>11 or strlen($foto5)>11 or strlen($foto6)>11 or strlen($foto7)>11 or strlen($foto8)>11 or strlen($foto9)>11 or strlen($foto10)>11){ $resimgoster='<button type="button" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#exampleModal5">
  '.$konuresimbaslikilkon.'</button></td></tr></tbody>';
  ?>
 
  <!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $konuresimbaslikilkon;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php if(strlen($foto1)>11){?>  
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><?php } ?>
<?php if(strlen($foto2)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li><?php } ?>
<?php if(strlen($foto3)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li><?php } ?>
<?php if(strlen($foto4)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li><?php } ?>
<?php if(strlen($foto5)>11){?>	
	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li><?php } ?>
<?php if(strlen($foto6)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li><?php } ?>
<?php if(strlen($foto7)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li><?php } ?>
<?php if(strlen($foto8)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="7"></li><?php } ?>
<?php if(strlen($foto9)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="8"></li><?php } ?>
<?php if(strlen($foto10)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="9"></li><?php } ?>
	
  </ol>
  <div class="carousel-inner">
<?php if(strlen($foto1)>11){?>   
    <div class="carousel-item active" align="center">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto1; ?>" alt="First slide">
    </div><?php } ?>
<?php if(strlen($foto2)>11){?>  
   <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto2; ?>" alt="Second slide">
    </div><?php } ?>
<?php if(strlen($foto3)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto3; ?>" alt="Third slide">
    </div><?php } ?>
<?php if(strlen($foto4)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto4; ?>" alt="four slide">
    </div><?php } ?>
<?php if(strlen($foto5)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto5; ?>" alt="five slide">
    </div><?php } ?>
<?php if(strlen($foto6)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto6; ?>" alt="six slide">
    </div><?php } ?>
<?php if(strlen($foto7)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto7; ?>" alt="seven slide">
    </div><?php } ?>
<?php if(strlen($foto8)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto8; ?>" alt="eight slide">
    </div><?php } ?>
<?php if(strlen($foto9)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto9; ?>" alt="dokuz slide">
    </div><?php } ?>
<?php if(strlen($foto10)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto10; ?>" alt="ten slide">
    </div><?php } ?> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="modal-footer bg-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        
      </div>
    </div>
  </div>
</div>

 <?php
  }else{
	$resimgoster="";
}

if(strlen($muh5)>400)



{



$bol5=metin_bol($muh5,0,400,$yaziid5);



$alo5=$bol5.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link5.' '.$resimgoster ;



}else{



$alo5=$muh5.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link5.' '.$resimgoster ;



}



$harfsayi5=strlen(trim($konum5));



if($harfsayi5>50){



$konum5r='<marquee SCROLLAMOUNT="4"><font color="red">'.$konum5.'</font></marquee>';

$konum5k='<marquee SCROLLAMOUNT="4"><font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih5.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum5.'&nbsp; &nbsp;&nbsp;</font></marquee>';

$konum5s='<marquee SCROLLAMOUNT="4">&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih5.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum5.'</font>&nbsp; &nbsp;&nbsp;</marquee>';

}else{



$konum5r='<font color="red">'.$konum5.'</font>';

$konum5k='<font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih5.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum5.'&nbsp; &nbsp;&nbsp;</font>';

$konum5s='&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih5.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum5.'</font>&nbsp; &nbsp;&nbsp;';





}



//6. sorgu



$sorgum6="select yaziid,date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya,resim,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8,foto9,foto10 from duyuru order by yaziid desc limit 5,1";



$basla6=mysqli_query($dbh,$sorgum6);



$sonucum6=mysqli_fetch_array($basla6); 



$tarih6=$sonucum6['tarih1'];



 $konum6=$sonucum6['konu'];



$yaziid6=$sonucum6['yaziid'];



$muh6=$sonucum6['icerik'];



$bilgisi6=$sonucum6['bilgi'];



$resim6=$sonucum6['resim'];

$foto1=$sonucum6['foto1'];

$foto2=$sonucum6['foto2'];

$foto3=$sonucum6['foto3'];  

$foto4=$sonucum6['foto4'];  

$foto5=$sonucum6['foto5'];

$foto6=$sonucum6['foto6'];  

$foto7=$sonucum6['foto7'];  
	
$foto8=$sonucum6['foto8'];

$foto9=$sonucum6['foto9'];  

$foto10=$sonucum6['foto10']; 

$muh6=str_replace("\n","<br />",$muh6); 

 

if($sonucum6['dosya']!=NULL){



$link6='<br><font color="red" style="font-weight:bold"></font><a class="btn btn-warning btn-sm mt-1" href="form013/admin/'.$sonucum6['dosya'].'">&nbsp;<font color="blue" style="font-weight:bold"><i class="fa fa-download" fa-lg aria-hidden="true"></i> '.$bilgisi6.'</font></a>';

}else{

$link6="";
 
}

if(strlen($foto1)>11 or strlen($foto2)>11 or strlen($foto3)>11 or strlen($foto4)>11 or strlen($foto5)>11 or strlen($foto6)>11 or strlen($foto7)>11 or strlen($foto8)>11 or strlen($foto9)>11 or strlen($foto10)>11){ $resimgoster='<button type="button" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#exampleModal6">
  '.$konuresimbaslikilkon.'</button></td></tr></tbody>';
  ?>
 
  <!-- Modal -->
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $konuresimbaslikilkon;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php if(strlen($foto1)>11){?>  
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><?php } ?>
<?php if(strlen($foto2)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li><?php } ?>
<?php if(strlen($foto3)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li><?php } ?>
<?php if(strlen($foto4)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li><?php } ?>
<?php if(strlen($foto5)>11){?>	
	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li><?php } ?>
<?php if(strlen($foto6)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li><?php } ?>
<?php if(strlen($foto7)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li><?php } ?>
<?php if(strlen($foto8)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="7"></li><?php } ?>
<?php if(strlen($foto9)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="8"></li><?php } ?>
<?php if(strlen($foto10)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="9"></li><?php } ?>
	
  </ol>
  <div class="carousel-inner">
<?php if(strlen($foto1)>11){?>   
    <div class="carousel-item active" align="center">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto1; ?>" alt="First slide">
    </div><?php } ?>
<?php if(strlen($foto2)>11){?>  
   <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto2; ?>" alt="Second slide">
    </div><?php } ?>
<?php if(strlen($foto3)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto3; ?>" alt="Third slide">
    </div><?php } ?>
<?php if(strlen($foto4)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto4; ?>" alt="four slide">
    </div><?php } ?>
<?php if(strlen($foto5)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto5; ?>" alt="five slide">
    </div><?php } ?>
<?php if(strlen($foto6)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto6; ?>" alt="six slide">
    </div><?php } ?>
<?php if(strlen($foto7)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto7; ?>" alt="seven slide">
    </div><?php } ?>
<?php if(strlen($foto8)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto8; ?>" alt="eight slide">
    </div><?php } ?>
<?php if(strlen($foto9)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto9; ?>" alt="dokuz slide">
    </div><?php } ?>
<?php if(strlen($foto10)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto10; ?>" alt="ten slide">
    </div><?php } ?> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="modal-footer bg-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        
      </div>
    </div>
  </div>
</div>

 <?php
  }else{
	$resimgoster="";
}

if(strlen($muh6)>660)



{



$bol6=metin_bol($muh6,0,660,$yaziid6);



$alo6=$bol6.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link6.' '.$resimgoster ;



}else{



$alo6=$muh6.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link6.' '.$resimgoster ;



}



$harfsayi6=strlen(trim($konum6));



if($harfsayi6>50){



$konum6r='<marquee SCROLLAMOUNT="4"><font color="red">'.$konum6.'</font></marquee>';

$konum6k='<marquee SCROLLAMOUNT="4"><font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih6.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum6.'&nbsp; &nbsp;&nbsp;</font></marquee>';

$konum6s='<marquee SCROLLAMOUNT="4">&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih6.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum6.'</font>&nbsp; &nbsp;&nbsp;</marquee>';

}else{



$konum6r='<font color="red">'.$konum6.'</font>';

$konum6k='<font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih6.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum6.'&nbsp; &nbsp;&nbsp;</font>';

$konum6s='&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih6.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum6.'</font>&nbsp; &nbsp;&nbsp;';





}



//7. sorgu



$sorgum7="select yaziid,date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya,resim,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8,foto9,foto10 from duyuru order by yaziid desc limit 6,1";



$basla7=mysqli_query($dbh,$sorgum7);



$sonucum7=mysqli_fetch_array($basla7); 



$tarih7=$sonucum7['tarih1'];



 $konum7=$sonucum7['konu'];



$yaziid7=$sonucum7['yaziid'];



$muh7=$sonucum7['icerik'];



$bilgisi7=$sonucum7['bilgi'];



$resim7=$sonucum7['resim'];

$foto1=$sonucum7['foto1'];

$foto2=$sonucum7['foto2'];

$foto3=$sonucum7['foto3'];  

$foto4=$sonucum7['foto4'];  

$foto5=$sonucum7['foto5'];

$foto6=$sonucum7['foto6'];  

$foto7=$sonucum7['foto7'];  
	
$foto8=$sonucum7['foto8'];

$foto9=$sonucum7['foto9'];  

$foto10=$sonucum7['foto10']; 

$muh7=str_replace("\n","<br />",$muh7);  



if($sonucum7['dosya']!=NULL){



$link7='<br><font color="red" style="font-weight:bold"></font><a class="btn btn-warning btn-sm mt-1" href="form013/admin/'.$sonucum7['dosya'].'">&nbsp;<font color="blue" style="font-weight:bold"><i class="fa fa-download" fa-lg aria-hidden="true"></i> '.$bilgisi7.'</font></a>';

}else{

$link7="";

}

if(strlen($foto1)>11 or strlen($foto2)>11 or strlen($foto3)>11 or strlen($foto4)>11 or strlen($foto5)>11 or strlen($foto6)>11 or strlen($foto7)>11 or strlen($foto8)>11 or strlen($foto9)>11 or strlen($foto10)>11){ $resimgoster='<button type="button" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#exampleModal7">
  '.$konuresimbaslikilkon.'</button></td></tr></tbody>';
  ?>
 
  <!-- Modal -->
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $konuresimbaslikilkon;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php if(strlen($foto1)>11){?>  
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><?php } ?>
<?php if(strlen($foto2)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li><?php } ?>
<?php if(strlen($foto3)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li><?php } ?>
<?php if(strlen($foto4)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li><?php } ?>
<?php if(strlen($foto5)>11){?>	
	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li><?php } ?>
<?php if(strlen($foto6)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li><?php } ?>
<?php if(strlen($foto7)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li><?php } ?>
<?php if(strlen($foto8)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="7"></li><?php } ?>
<?php if(strlen($foto9)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="8"></li><?php } ?>
<?php if(strlen($foto10)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="9"></li><?php } ?>
	
  </ol>
  <div class="carousel-inner">
<?php if(strlen($foto1)>11){?>   
    <div class="carousel-item active" align="center">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto1; ?>" alt="First slide">
    </div><?php } ?>
<?php if(strlen($foto2)>11){?>  
   <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto2; ?>" alt="Second slide">
    </div><?php } ?>
<?php if(strlen($foto3)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto3; ?>" alt="Third slide">
    </div><?php } ?>
<?php if(strlen($foto4)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto4; ?>" alt="four slide">
    </div><?php } ?>
<?php if(strlen($foto5)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto5; ?>" alt="five slide">
    </div><?php } ?>
<?php if(strlen($foto6)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto6; ?>" alt="six slide">
    </div><?php } ?>
<?php if(strlen($foto7)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto7; ?>" alt="seven slide">
    </div><?php } ?>
<?php if(strlen($foto8)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto8; ?>" alt="eight slide">
    </div><?php } ?>
<?php if(strlen($foto9)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto9; ?>" alt="dokuz slide">
    </div><?php } ?>
<?php if(strlen($foto10)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto10; ?>" alt="ten slide">
    </div><?php } ?> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="modal-footer bg-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        
      </div>
    </div>
  </div>
</div>

 <?php
  }else{
	$resimgoster="";
}

if(strlen($muh7)>660)



{



$bol7=metin_bol($muh7,0,660,$yaziid7);



$alo7=$bol7.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link7.' '.$resimgoster ;



}else{



$alo7=$muh7.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link7.' '.$resimgoster ;



}



$harfsayi7=strlen(trim($konum7));



if($harfsayi7>50){



$konum7r='<marquee SCROLLAMOUNT="4"><font color="red">'.$konum7.'</font></marquee>';

$konum7k='<marquee SCROLLAMOUNT="4"><font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih7.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum7.'&nbsp; &nbsp;&nbsp;</font></marquee>';

$konum7s='<marquee SCROLLAMOUNT="4">&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih7.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum7.'</font>&nbsp; &nbsp;&nbsp;</marquee>';

}else{



$konum7r='<font color="red">'.$konum7.'</font>';

$konum7k='<font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih7.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum7.'&nbsp; &nbsp;&nbsp;</font>';

$konum7s='&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih7.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum7.'</font>&nbsp; &nbsp;&nbsp;';





}



//8. sorgu



$sorgum8="select yaziid,date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya,resim,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8,foto9,foto10 from duyuru order by yaziid desc limit 7,1";



$basla8=mysqli_query($dbh,$sorgum8);



$sonucum8=mysqli_fetch_array($basla8); 



$tarih8=$sonucum8['tarih1'];



 $konum8=$sonucum8['konu'];



$yaziid8=$sonucum8['yaziid'];



$muh8=$sonucum8['icerik'];



$bilgisi8=$sonucum8['bilgi'];



$resim8=$sonucum8['resim'];

$foto1=$sonucum8['foto1'];

$foto2=$sonucum8['foto2'];

$foto3=$sonucum8['foto3'];  

$foto4=$sonucum8['foto4'];  

$foto5=$sonucum8['foto5'];

$foto6=$sonucum8['foto6'];  

$foto7=$sonucum8['foto7'];  
	
$foto8=$sonucum8['foto8'];

$foto9=$sonucum8['foto9'];  

$foto10=$sonucum8['foto10']; 

$muh8=str_replace("\n","<br />",$muh8); 

 

if($sonucum8['dosya']!=NULL){



$link8='<br><font color="red" style="font-weight:bold"></font><a class="btn btn-warning btn-sm mt-1" href="form013/admin/'.$sonucum8['dosya'].'">&nbsp;<font color="blue" style="font-weight:bold"><i class="fa fa-download" fa-lg aria-hidden="true"></i> '.$bilgisi8.'</font></a>';

}else{

$link8="";

}

if(strlen($foto1)>11 or strlen($foto2)>11 or strlen($foto3)>11 or strlen($foto4)>11 or strlen($foto5)>11 or strlen($foto6)>11 or strlen($foto7)>11 or strlen($foto8)>11 or strlen($foto9)>11 or strlen($foto10)>11){ $resimgoster='<button type="button" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#exampleModal8">
  '.$konuresimbaslikilkon.'</button></td></tr></tbody>';
  ?>
 
  <!-- Modal -->
<div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $konuresimbaslikilkon;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php if(strlen($foto1)>11){?>  
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><?php } ?>
<?php if(strlen($foto2)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li><?php } ?>
<?php if(strlen($foto3)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li><?php } ?>
<?php if(strlen($foto4)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li><?php } ?>
<?php if(strlen($foto5)>11){?>	
	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li><?php } ?>
<?php if(strlen($foto6)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li><?php } ?>
<?php if(strlen($foto7)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li><?php } ?>
<?php if(strlen($foto8)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="7"></li><?php } ?>
<?php if(strlen($foto9)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="8"></li><?php } ?>
<?php if(strlen($foto10)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="9"></li><?php } ?>
	
  </ol>
  <div class="carousel-inner">
<?php if(strlen($foto1)>11){?>   
    <div class="carousel-item active" align="center">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto1; ?>" alt="First slide">
    </div><?php } ?>
<?php if(strlen($foto2)>11){?>  
   <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto2; ?>" alt="Second slide">
    </div><?php } ?>
<?php if(strlen($foto3)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto3; ?>" alt="Third slide">
    </div><?php } ?>
<?php if(strlen($foto4)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto4; ?>" alt="four slide">
    </div><?php } ?>
<?php if(strlen($foto5)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto5; ?>" alt="five slide">
    </div><?php } ?>
<?php if(strlen($foto6)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto6; ?>" alt="six slide">
    </div><?php } ?>
<?php if(strlen($foto7)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto7; ?>" alt="seven slide">
    </div><?php } ?>
<?php if(strlen($foto8)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto8; ?>" alt="eight slide">
    </div><?php } ?>
<?php if(strlen($foto9)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto9; ?>" alt="dokuz slide">
    </div><?php } ?>
<?php if(strlen($foto10)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto10; ?>" alt="ten slide">
    </div><?php } ?> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="modal-footer bg-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        
      </div>
    </div>
  </div>
</div>

 <?php
  }else{
	$resimgoster="";
}

if(strlen($muh8)>660)



{



$bol8=metin_bol($muh8,0,660,$yaziid8);



$alo8=$bol8.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link8.' '.$resimgoster ;



}else{



$alo8=$muh8.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link8.' '.$resimgoster ;



}



$harfsayi8=strlen(trim($konum8));



if($harfsayi8>50){



$konum8r='<marquee SCROLLAMOUNT="4"><font color="red">'.$konum8.'</font></marquee>';

$konum8k='<marquee SCROLLAMOUNT="4"><font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih8.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum8.'&nbsp; &nbsp;&nbsp;</font></marquee>';

$konum8s='<marquee SCROLLAMOUNT="4">&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih8.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum8.'</font>&nbsp; &nbsp;&nbsp;</marquee>';

}else{



$konum8r='<font color="red">'.$konum8.'</font>';

$konum8k='<font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih8.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum8.'&nbsp; &nbsp;&nbsp;</font>';

$konum8s='&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih8.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum8.'</font>&nbsp; &nbsp;&nbsp;';





}



//9. sorgu



$sorgum9="select yaziid,date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya,resim,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8,foto9,foto10 from duyuru order by yaziid desc limit 8,1";



$basla9=mysqli_query($dbh,$sorgum9);



$sonucum9=mysqli_fetch_array($basla9); 



$tarih9=$sonucum9['tarih1'];



 $konum9=$sonucum9['konu'];



$yaziid9=$sonucum9['yaziid'];



$muh9=$sonucum9['icerik'];



$bilgisi9=$sonucum9['bilgi'];



$resim9=$sonucum9['resim'];

$foto1=$sonucum9['foto1'];

$foto2=$sonucum9['foto2'];

$foto3=$sonucum9['foto3'];  

$foto4=$sonucum9['foto4'];  

$foto5=$sonucum9['foto5'];

$foto6=$sonucum9['foto6'];  

$foto7=$sonucum9['foto7'];  
	
$foto8=$sonucum9['foto8'];

$foto9=$sonucum9['foto9'];  

$foto10=$sonucum9['foto10']; 

$muh9=str_replace("\n","<br />",$muh9);  



if($sonucum9['dosya']!=NULL){



$link9='<br><font color="red" style="font-weight:bold"></font><a class="btn btn-warning btn-sm mt-1" href="form013/admin/'.$sonucum9['dosya'].'">&nbsp;<font color="blue" style="font-weight:bold"><i class="fa fa-download" fa-lg aria-hidden="true"></i> '.$bilgisi9.'</font></a>';

}else{

$link9="";

}

if(strlen($foto1)>11 or strlen($foto2)>11 or strlen($foto3)>11 or strlen($foto4)>11 or strlen($foto5)>11 or strlen($foto6)>11 or strlen($foto7)>11 or strlen($foto8)>11 or strlen($foto9)>11 or strlen($foto10)>11){ $resimgoster='<button type="button" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#exampleModal9">
  '.$konuresimbaslikilkon.'</button></td></tr></tbody>';
  ?>
 
  <!-- Modal -->
<div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $konuresimbaslikilkon;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php if(strlen($foto1)>11){?>  
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><?php } ?>
<?php if(strlen($foto2)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li><?php } ?>
<?php if(strlen($foto3)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li><?php } ?>
<?php if(strlen($foto4)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li><?php } ?>
<?php if(strlen($foto5)>11){?>	
	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li><?php } ?>
<?php if(strlen($foto6)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li><?php } ?>
<?php if(strlen($foto7)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li><?php } ?>
<?php if(strlen($foto8)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="7"></li><?php } ?>
<?php if(strlen($foto9)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="8"></li><?php } ?>
<?php if(strlen($foto10)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="9"></li><?php } ?>
	
  </ol>
  <div class="carousel-inner">
<?php if(strlen($foto1)>11){?>   
    <div class="carousel-item active" align="center">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto1; ?>" alt="First slide">
    </div><?php } ?>
<?php if(strlen($foto2)>11){?>  
   <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto2; ?>" alt="Second slide">
    </div><?php } ?>
<?php if(strlen($foto3)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto3; ?>" alt="Third slide">
    </div><?php } ?>
<?php if(strlen($foto4)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto4; ?>" alt="four slide">
    </div><?php } ?>
<?php if(strlen($foto5)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto5; ?>" alt="five slide">
    </div><?php } ?>
<?php if(strlen($foto6)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto6; ?>" alt="six slide">
    </div><?php } ?>
<?php if(strlen($foto7)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto7; ?>" alt="seven slide">
    </div><?php } ?>
<?php if(strlen($foto8)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto8; ?>" alt="eight slide">
    </div><?php } ?>
<?php if(strlen($foto9)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto9; ?>" alt="dokuz slide">
    </div><?php } ?>
<?php if(strlen($foto10)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto10; ?>" alt="ten slide">
    </div><?php } ?> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="modal-footer bg-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        
      </div>
    </div>
  </div>
</div>

 <?php
  }else{
	$resimgoster="";
}

if(strlen($muh9)>660)



{



$bol9=metin_bol($muh9,0,660,$yaziid9);



$alo9=$bol9.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link9.' '.$resimgoster ;



}else{



$alo9=$muh9.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link9.' '.$resimgoster ;



}



$harfsayi9=strlen(trim($konum9));



if($harfsayi9>50){



$konum9r='<marquee SCROLLAMOUNT="4"><font color="red">'.$konum9.'</font></marquee>';

$konum9k='<marquee SCROLLAMOUNT="4"><font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih9.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum9.'&nbsp; &nbsp;&nbsp;</font></marquee>';

$konum9s='<marquee SCROLLAMOUNT="4">&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih9.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum9.'</font>&nbsp; &nbsp;&nbsp;</marquee>';

}else{



$konum9r='<font color="red">'.$konum9.'</font>';

$konum9k='<font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih9.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum9.'&nbsp; &nbsp;&nbsp;</font>';

$konum9s='&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih9.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum9.'</font>&nbsp; &nbsp;&nbsp;';





}

/*

if(empty($yaziid9['yaziid'] and $sonucum9['resim'])){

$konum9r='<font color="red">Resim Yok</font>';

$konum9k='<font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;Resim Yok</font>';

$sorgup9=mysqli_query($dbh,"update duyuru set resim='Depo/asi-takvimi.jpg' where yaziid='$yaziid9'");

$upres9=mysqli_fetch_array($sorgup9); 

$path="form013/admin/" ;

$resim9= $path.''.$upres9['resim'];

$alo9="konu yok";

}*/

//10. sorgu



$sorgum10="select yaziid,date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya,resim,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8,foto9,foto10 from duyuru order by yaziid desc limit 9,1";



$basla10=mysqli_query($dbh,$sorgum10);



$sonucum10=mysqli_fetch_array($basla10); 



$tarih10=$sonucum10['tarih1'];



 $konum10=$sonucum10['konu'];



$yaziid10=$sonucum10['yaziid'];



$muh10=$sonucum10['icerik'];



$bilgisi10=$sonucum10['bilgi'];



$resim10= $sonucum10['resim'];

$foto1=$sonucum10['foto1'];

$foto2=$sonucum10['foto2'];

$foto3=$sonucum10['foto3'];  

$foto4=$sonucum10['foto4'];  

$foto5=$sonucum10['foto5'];

$foto6=$sonucum10['foto6'];  

$foto7=$sonucum10['foto7'];  
	
$foto8=$sonucum10['foto8'];

$foto9=$sonucum10['foto9'];  

$foto10=$sonucum10['foto10']; 

$muh10=str_replace("\n","<br />",$muh10);

  

if($sonucum10['dosya']!=NULL){



$link10='<br><font color="red" style="font-weight:bold"></font><a class="btn btn-warning btn-sm mt-1" href="form013/admin/'.$sonucum10['dosya'].'">&nbsp;<font color="blue" style="font-weight:bold"><i class="fa fa-download" fa-lg aria-hidden="true"></i> '.$bilgisi10.'</font></a>';

}else{

$link10="";

}

if(strlen($foto1)>11 or strlen($foto2)>11 or strlen($foto3)>11 or strlen($foto4)>11 or strlen($foto5)>11 or strlen($foto6)>11 or strlen($foto7)>11 or strlen($foto8)>11 or strlen($foto9)>11 or strlen($foto10)>11){ $resimgoster='<button type="button" class="btn btn-sm btn-primary mt-1" data-toggle="modal" data-target="#exampleModal10">
  '.$konuresimbaslikilkon.'</button></td></tr></tbody>';
  ?>
 
  <!-- Modal -->
<div class="modal fade" id="exampleModal10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $konuresimbaslikilkon;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php if(strlen($foto1)>11){?>  
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><?php } ?>
<?php if(strlen($foto2)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li><?php } ?>
<?php if(strlen($foto3)>11){?>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li><?php } ?>
<?php if(strlen($foto4)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="3"></li><?php } ?>
<?php if(strlen($foto5)>11){?>	
	<li data-target="#carouselExampleIndicators" data-slide-to="4"></li><?php } ?>
<?php if(strlen($foto6)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="5"></li><?php } ?>
<?php if(strlen($foto7)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="6"></li><?php } ?>
<?php if(strlen($foto8)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="7"></li><?php } ?>
<?php if(strlen($foto9)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="8"></li><?php } ?>
<?php if(strlen($foto10)>11){?>
	<li data-target="#carouselExampleIndicators" data-slide-to="9"></li><?php } ?>
	
  </ol>
  <div class="carousel-inner">
<?php if(strlen($foto1)>11){?>   
    <div class="carousel-item active" align="center">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto1; ?>" alt="First slide">
    </div><?php } ?>
<?php if(strlen($foto2)>11){?>  
   <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto2; ?>" alt="Second slide">
    </div><?php } ?>
<?php if(strlen($foto3)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto3; ?>" alt="Third slide">
    </div><?php } ?>
<?php if(strlen($foto4)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto4; ?>" alt="four slide">
    </div><?php } ?>
<?php if(strlen($foto5)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto5; ?>" alt="five slide">
    </div><?php } ?>
<?php if(strlen($foto6)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto6; ?>" alt="six slide">
    </div><?php } ?>
<?php if(strlen($foto7)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto7; ?>" alt="seven slide">
    </div><?php } ?>
<?php if(strlen($foto8)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto8; ?>" alt="eight slide">
    </div><?php } ?>
<?php if(strlen($foto9)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto9; ?>" alt="dokuz slide">
    </div><?php } ?>
<?php if(strlen($foto10)>11){?>  
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $altduyururesimdizin.''.$foto10; ?>" alt="ten slide">
    </div><?php } ?> 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="modal-footer bg-success">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
        
      </div>
    </div>
  </div>
</div>

 <?php
  }else{
	$resimgoster="";
}

if(strlen($muh10)>660)



{



$bol10=metin_bol($muh10,0,660,$yaziid10);



$alo10=$bol10.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link10.' '.$resimgoster ;



}else{



$alo10=$muh10.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link10.' '.$resimgoster ;



}



$harfsayi10=strlen(trim($konum10));



if($harfsayi10>50){



$konum10r='<marquee SCROLLAMOUNT="4"><font color="red">'.$konum10.'</font></marquee>';

$konum10k='<marquee SCROLLAMOUNT="4"><font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih10.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum10.'&nbsp; &nbsp;&nbsp;</font></marquee>';

$konum10s='<marquee SCROLLAMOUNT="4">&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih10.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum10.'</font>&nbsp; &nbsp;&nbsp;</marquee>';

}else{



$konum10r='<font color="red">'.$konum10.'</font>';

$konum10k='<font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;'.$tarih10.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue">'.$konum10.'&nbsp; &nbsp;&nbsp;</font>';

$konum10s='&nbsp; &nbsp;&nbsp;<font color="red" style="font-weight:bold">'.$tarih10.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="orange">'.$konum10.'</font>&nbsp; &nbsp;&nbsp;';





}
	

/*

if(empty($yaziid10['yaziid'] and $sonucum10['resim'])){

$konum10r='<font color="red">Resim Yok</font>';

$konum10k='<font color="red" style="font-weight:bold">&nbsp; &nbsp;&nbsp;Resim Yok</font>';

$sorgup10=mysqli_query($dbh,"update duyuru set resim='Depo/asi-takvimi.jpg' where yaziid='$yaziid10'");

$upres10=mysqli_fetch_array($sorgup10); 

$path="form013/admin/" ;

$resim10= $path.''.$upres10['resim'];

$alo10="konu yok";

}*/

@mysqli_close($dbh);

?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
<script src="bootstrap-4/popper.js"></script>
<script src="bootstrap-4/js/bootstrap.min.js"></script>
</body>
</html>
