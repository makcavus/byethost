<?php
include("assets/sablon/anadizin/header.php");
include("assets/sablon/anadizin/sidebar.php");
        ?>        
<style>
	.solaresim{
		float: left;
		padding: 0 10px 10px 0;	}
	</style>
<script type="text/javascript" src="jquery-latest.pack.js"></script>
<div class="height-100 bg-light" id="nav-placeholder">
<?php
function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
include('tanimlaranadizin.php');
include('connect.php');
$yaziid=$_GET['yaziid'];
$fotosorgum="select konu,foto1,foto2,foto3,foto4,foto5,foto6,foto7,foto8,foto9,foto10 from duyuru where(yaziid='$yaziid')";
$fotobasla=mysqli_query($dbh,$fotosorgum);
while($fotosonucum=mysqli_fetch_array($fotobasla)){
$foto1=$fotosonucum['foto1'];
$foto2=$fotosonucum['foto2'];
$foto3=$fotosonucum['foto3'];  
$foto4=$fotosonucum['foto4'];  
$foto5=$fotosonucum['foto5'];
$foto6=$fotosonucum['foto6'];  
$foto7=$fotosonucum['foto7'];  
$foto8=$fotosonucum['foto8'];
$foto9=$fotosonucum['foto9'];  
$foto10=$fotosonucum['foto10']; 
$konu=$fotosonucum['konu'];
}
?>
<div class="card" style="background-color: #CCFFCC">
<div class="card-body">
<h5 class="card-title">
<?php
if($_GET['yaziid']==0 || !is_numeric($_GET['yaziid']) || $_GET['yaziid']<0)
{
header("duyuru.php");
}
$yaziid=$_GET['yaziid'];
$sorgum="select date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya,resim from duyuru where(yaziid='$yaziid')";
$basla=mysqli_query($dbh,$sorgum);
if(mysqli_num_rows($basla)==0)
{
echo "Böyle bir duyuru yok";
}else{
while($sonucum=mysqli_fetch_array($basla)){
echo'<table class="table table-responsive-lg table-sm">';
$cumle=$sonucum['icerik'];
//$yaziid=$sonucum['yaziid'];
$bilgisi= $sonucum['bilgi'];  
$resim= $sonucum['resim'];  
if($sonucum['dosya']!=NULL){
$link='<a href="admin/'.$sonucum['dosya'].'" class="btn btn-sm mr-3 btn-success"><i class="fa fa-download fa-lg text-danger" aria-hidden="true"></i> '.$bilgisi.'</a>';
}else{
$link="";
}
$alo=$cumle.' '.$link ;	
$alo=str_replace("\n","<br>",$alo);
?>
<?php
echo '<tbody><tr><td class="bg-warning text-primary">'.$sonucum['konu'].'<small style="float:right" text-danger"> '.$yayintarihi.' '.$sonucum['tarih1'].'</small></h5></td></tr>
<tr><td class="card-text" style="font-size="14px"><img class="solaresim" src="admin/'.$resim.'" width="200px" height="200px" >'.$alo; if(strlen($foto1)>11 or strlen($foto2)>11 or strlen($foto3)>11 or strlen($foto4)>11 or strlen($foto5)>11 or strlen($foto6)>11 or strlen($foto7)>11 or strlen($foto8)>11 or strlen($foto9)>11 or strlen($foto10)>11){ echo '<button type="button" class="btn btn-sm btn-primary " data-toggle="modal" data-target="#exampleModal">
'.$konu.' '.$konuresimbaslik.'</button></td></tr></tbody>';}
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $konu.' '.$konuresimbaslik;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Kapat">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
<?php if(strlen($foto1)>11){?>  
    <li class="bg-danger" data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li><?php } ?>
<?php if(strlen($foto2)>11){?>
    <li class="bg-danger" data-target="#carouselExampleIndicators" data-slide-to="1"></li><?php } ?>
<?php if(strlen($foto3)>11){?>
    <li class="bg-danger" data-target="#carouselExampleIndicators" data-slide-to="2"></li><?php } ?>
<?php if(strlen($foto4)>11){?>
	<li class="bg-danger" data-target="#carouselExampleIndicators" data-slide-to="3"></li><?php } ?>
<?php if(strlen($foto5)>11){?>	
	<li class="bg-danger" data-target="#carouselExampleIndicators" data-slide-to="4"></li><?php } ?>
<?php if(strlen($foto6)>11){?>
	<li class="bg-danger" data-target="#carouselExampleIndicators" data-slide-to="5"></li><?php } ?>
<?php if(strlen($foto7)>11){?>
	<li class="bg-danger" data-target="#carouselExampleIndicators" data-slide-to="6"></li><?php } ?>
<?php if(strlen($foto8)>11){?>
	<li class="bg-danger" data-target="#carouselExampleIndicators" data-slide-to="7"></li><?php } ?>
<?php if(strlen($foto9)>11){?>
	<li class="bg-danger" data-target="#carouselExampleIndicators" data-slide-to="8"></li><?php } ?>
<?php if(strlen($foto10)>11){?>
	<li class="bg-danger" data-target="#carouselExampleIndicators" data-slide-to="9"></li><?php } ?>
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
}
echo'<tr>';
echo '<td class="bg-warning text-center"><a href="javascript:history.back();" title="Geri Don" target="_self" style="display:block;text-decoration:none;background:black"><i class="fa fa-reply-all fa-lg" aria-hidden="true"></i> <small> Anasayfa</small></a></td>';
echo'</tr>';
echo '</table>'; 
}
@mysqli_close($dbh);
?>
</div>
</div>
</div>
<!-- Optional JavaScript -->
<?php
include("assets/sablon/anadizin/footer.php");
?>        



