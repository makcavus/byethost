<?php
include("assets/sablon/anadizin/header.php");
include("assets/sablon/anadizin/sidebar.php");
?>
<link rel="stylesheet" href="assets/css/tablo_form_styles.css"> 
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115962978-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-115962978-1');
</script>
<script type="text/javascript" src="iletikaydet.js">
</script>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
</head>
<body style="background-color:#000000" onload="JavaScript:timedRefresh(10000000);">
<?php
include("connect.php");
//include("tanimveyetkiler.php");
//include('form013/frm013alanlari.php');
include('altlink.php');
$resultuser = @mysqli_query($dbh , "select * from bizeulasin where(cevap is not null and yayinda='1') order by tarih desc");
?>
<div class="container-fluid">
<div><h6 class="text-warning" align="center">SIK SORULAN SORULAR</h6></div>
<div class="panel-group" id="accordion">
<?php
while($rowuser=mysqli_fetch_array($resultuser)) {
$viletiid=$rowuser['iltiid'];
$vileti=$rowuser['dusunceniz'];
$vcevap=$rowuser['cevap'];
$vctarih=$rowuser['cevaptarihi'];
$tarihorg=substr($vctarih,0,10);
$yil=substr($tarihorg,0,4);
$ay=substr($tarihorg,5,2);
$gun=substr($tarihorg,8,2);
$vctarihn=$gun.'.'.$ay.'.'.$yil;
?>
<p>
<div class="row bg-warning">
<div class="col-md-12 text-dark" align="left" style="background-color:#CCFFCC;text-decoration:none; margin-top:3px;"><h6><a class="btn-block text-primary" style="padding-top:4px;text-decoration:none;" href="#<?php echo $viletiid;?>" data-toggle="collapse" data-parent="#accordion"><strong><?php echo $vileti;?></strong></a></h6></div>
</div>
<div id="<?php echo $viletiid;?>" class="panel-collapse collapse in">
<div class="row bg-primary">
<div class="col-md-12 ml-auto mt-1 mb-1 bg-light" align="left"><?php echo $vctarihn.'-'. $vcevap;?></div>
</div>
</div>
</p>
<?php } ?>
</div>
</div>
     <div id="sonuciletiyaz"></div>
    </div>
  </div>
</div>  
<!-- Optional JavaScript -->
<?php
    include("assets/sablon/anadizin/footer.php");
?>
<script type="text/javascript" src="iletikaydet.js">
</script>
  <script type="text/javascript" src="jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="jquery-latest.pack.js"></script>
  <script type="text/javascript" src="iletikaydet.js"></script>