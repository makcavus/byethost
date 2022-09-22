<?php



		function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   } 



		?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



	<link href="solmenu.css" rel="stylesheet" type="text/css"/>



	<link href="solmenuyarim.css" rel="stylesheet" type="text/css"/>



	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



	<title>Butonlar</title>



	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



	<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="../bootstrap-4/css/bootstrap.min.css">

	<link rel="stylesheet" href="../bootstrap-4/font-awesome/css/font-awesome.min.css">





	<style type="text/css">



	<!--



	body {



		background-color: #CCFFCC;



	}



	

	a:link {



		color: #000000;



		text-decoration: none;

		font-weight: bold;

text-align: left;

	}



	a:hover {



		color: #FF0000;



		text-decoration: none;

		font-weight: bold;



	}



	a:visited {

		color: #000000;



		text-decoration: none;

		font-weight: bold;



	}



	a:active {

		color: #FFcc00;



		text-decoration: none;

		font-weight: bold;



	}



	.style4 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }



	.style7 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; }



	.arkafon {background-color: yellow; font-weight: bold;font-family: Arial, Helvetica, sans-serif; font-size: 14px; }



	-->



	div {



		border-radius:5px



	}



	.enboy{



		max-width: 100%;



		height: auto!important;



	}

		

.showall {

    width: 170px;

	margin-left: -12px;

    padding: 0px 0;

    text-align: center;

    background-color: lightblue;

    margin-top: 0px;

	display: block;

	font-family: Helvetica, Arial, sans-serif;

	font-size: 12px;

}

input[type="checkbox"] {

  display: none;

}

input[type="checkbox"]:checked ~ label {

  background-color: #f2bb67;

}

input[type="checkbox"]:checked ~ label:after {

  content: 'Hepsini Gizle';

}

input[type="checkbox"]:checked ~ .icerik {

  max-height: 5000px;

}



label {

  background-color: #7cc086;

  border: 0;

  width: 50px;

  color: white;

  padding: 0px 0px;

  border-radius: 0px;

  font-size: 14px;

  cursor: pointer;

  display: block;

  width: 176px;

  text-align: center;

}

label:after {

  content: '<?php $menugoster="Menüleri Göster"; echo $menugoster;?>';

}



.icerik {

  margin-top: -8px;

  max-height: 0;

  height: auto!important;

  -webkit-transition: all 500ms ease;

  transition: all 500ms ease;

  overflow: hidden;

  //background-color: #d5d1c5;

  width: 176px;

  -webkit-box-shadow: 0px 0px 0px rgba(192, 188, 177, 0.9);

          box-shadow: 0px 0px 0px rgba(192, 188, 177, 0.9);

}

</style>



<script type="text/javascript" src="jquery-latest.pack.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115962978-1"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'UA-115962978-1');

</script>



</head>



<body>



<input type="checkbox" name="gizleGoster" id="gizleGoster" checked/>

<label for="gizleGoster"><i class="fa fa-expand" aria-hidden="true"></i> </label>

<div class="icerik">



	<div class="container-fluid">

		

		

	<div class="badge-dark showall"><a href="#" id="gizle3"><i class="fa fa-expand" aria-hidden="true"></i> <?php echo "Menüleri Gizle/Göster";?> <i class="fa fa-compress" aria-hidden="true"></i></a></div>

<div id="showhide3">	



		<div class="row bg-succes">

			



			<ul class="nav flex-column">

				<li class="nav-item">

					<a href="duyuru.php" target="sag" class="btn btn-danger btn-sm btn-block ml-1 mb-1 mt-1" style="width: 170px">Ana Sayfa</a>

				</li>

				<li class="nav-item">

					<a href="adressecim.php" target="sag" class="btn btn-danger btn-sm btn-block ml-1 mb-1" style="width: 170px"><?php echo 'İletişim Bilgileri' ; ?></a>

				</li>

				<li class="nav-item">

					<a href="formmenu.php" target="sag" class="btn btn-danger btn-sm btn-block ml-1 mb-1" style="width: 170px"><?php echo 'Çalışma Formları' ; ?></a>

				</li>

				<li class="nav-item">

					<a href="birimler.php" target="sag" class="btn btn-danger btn-sm btn-block ml-1 mb-1" style="width: 170px"><?php echo 'Gerekli Dökümanlar' ; ?></a>

				</li>

				<li class="nav-item">

					<a href="sss.php" target="sag" class="btn btn-danger btn-sm btn-block ml-1 mb-1" style="width: 170px"><?php echo 'Sık Sorulan Sorular' ; ?></a>

				</li>

				</ul>

		</div>

		</div>



	<div class="badge-dark showall"><a href="#" id="gizle2"><i class="fa fa-expand" aria-hidden="true"></i> <?php echo "Linkleri Gizle/Göster";?> <i class="fa fa-compress" aria-hidden="true"></i></a></div>

<div id="showhide2">	



		<div class="row bg-succes">

			



			<ul class="nav flex-column">			<li class="nav-item">

					<a href="#" class="btn btn-primary btn-sm btn-block ml-1 mb-1 disabled" role="button" aria-disabled="true" style="width: 170px">Linkler</a>

				</li>



				<li class="nav-item">

					<a href="https://www.antalyasm.gov.tr" title="<?php echo 'Antalya Sağlık Müdürlüğü' ; ?>" target="_blank" class="btn btn-danger btn-sm btn-block ml-1 mb-1" style="width: 170px"><?php echo 'Antalya Sağlık Müd.' ; ?></a>

				</li>

				<li class="nav-item">

					<a href="https://serik.antalyasm.gov.tr" title="<?php echo 'Serik İlçe Sağlık Müdürlüğü' ; ?>" target="sag" class="btn btn-danger btn-sm btn-block ml-1 mb-1" style="width: 170px"><?php echo 'İlçe Sağlık Müdürlüğü' ; ?></a>

				</li>

				<li class="nav-item">

					<a href="https://www.sb.gov.tr" title="<?php echo 'Sağlık Bakanlığı' ; ?>" target="_blank" class="btn btn-danger btn-sm btn-block ml-1 mb-1" style="width: 170px"><?php echo 'Sağlık Bakanlığı' ; ?></a>

				</li>

				<li class="nav-item">

					<a href="https://hsgm.saglik.gov.tr/tr/" title="<?php echo 'Halk Sağlığı Gen.Müd.' ; ?>" target="_blank" class="btn btn-danger btn-sm btn-block ml-1 mb-1" style="width: 170px"><?php echo 'Halk Sağlığı Gen.Müd.' ; ?></a>

				</li>

				<li class="nav-item">

					<a href="https://ekipportal.saglik.gov.tr" title="<?php echo trsuz('EK�P Portal'); ?>" target="sag" class="btn btn-danger btn-sm btn-block ml-1 mb-1" style="width: 170px"><?php echo trsuz('EK�P Portal'); ?></a>

				</li>

			</ul>

		</div>

		</div>

		<div class="badge-dark showall"><a href="#" id="gizle1"><i class="fa fa-expand" aria-hidden="true"></i> <?php echo "İçeriği Gizle/Göster";?> <i class="fa fa-compress" aria-hidden="true"></i></a></div>

<div id="showhide1">	



		<div class="row bg-succes">

			<div align=center class="mb-1 ml-1 mr-1" style="width: 170px">



				<embed src="http://saat.bbs.tr/126.swf" quality="high" wmode="transparent" class="enboy" name="superpimper" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />



			</embed>

		</div>

		<!-- 4:3 aspect ratio -->

		<div class="embed-responsive embed-responsive-4by3 ml-1 mr-1" style="width: 170px">

			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wSNQHd67pME" allowfullscreen></iframe>

		</div>

	</div>

	</div>



	</div>

<!--





	<table class="enboy" align="center" bgcolor="#CCFFCC">



		<?php



		//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 



		?>



		<tr>



			<th>



				<div align="center" class="arkafon">



					<a href="duyuru.php" target="sag" class="sol_buton">Ana Sayfa</a>

					<br>

					<a href="adressecim.php" target="sag" class="sol_buton"><?php echo trsuz('İletişim Bilgileri') ; ?></a>

					<br>

					<a href="formmenu.php" target="sag" class="sol_buton"><?php echo trsuz('Çalışma Formları') ; ?></a>

					<br>

					<a href="birimler.php" target="sag" class="sol_buton"><?php echo trsuz('Gerekli Dökümanlar') ; ?></a>

				</div></th>



			</tr>



			<tr>



				<th>



					<div align=center class="enboy">



						<embed src="http://saat.bbs.tr/126.swf" quality="high" wmode="transparent" class="enboy" name="superpimper" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /><font face="Arial" size="1" color="#008080">



						</embed>







					</div></th>



				</tr>



				<tr>



					<th>



						<div align="center" class="arkafon">



							<label><font class="style7" color="black">Linkler</font></label><br>



							<a href="https://www.antalyasm.gov.tr" title="<?php echo trsuz('Antalya Sağlık Müdürlüğü') ; ?>" target="sag" class="sol_buton" ><?php echo trsuz('Antalya Sağlık Müd.') ; ?></a><br>



							<a href="https://serik.antalyasm.gov.tr" title="<?php echo trsuz('Serik İlçe Sağlık Müdürlüğü') ; ?>" target="sag" class="sol_buton" ><?php echo trsuz('İlçe Sağlık Müdürlüğü') ; ?></a><br>



							<a href="https://www.sb.gov.tr" title="<?php echo trsuz('Sağlık Bakanlığı') ; ?>" target="_blank" class="sol_buton" ><?php echo trsuz('Sağlık Bakanlığı') ; ?></a><br>



							<a href="https://hsgm.saglik.gov.tr/tr/" title="<?php echo trsuz('Halk Sağlığı Gen.Müd.') ; ?>" target="_blank" class="sol_buton" ><?php echo trsuz('Halk Sağlığı Gen.Müd.') ; ?></a><br>



							<a href="https://ekipportal.saglik.gov.tr" title="<?php echo 'Personel Bilgi Sistemi'; ?>" target="sag" class="sol_buton" ><?php echo 'Personel Bilgi Sistemi'; ?></a></div></th>



						</tr>



						<tr>



							<th>



								<div align="center">



									<center>



										<iframe class="enboy" src="https://www.youtube.com/embed/wSNQHd67pME" frameborder="0" allowfullscreen></iframe>



									</center>



								</div></th>



							</tr>



						</table>



					-->



					<!-- Optional JavaScript -->

					<!-- jQuery first, then Popper.js, then Bootstrap JS -->

					<script src="../bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>

					<script src="../bootstrap-4/popper.js"></script>

					<script src="../bootstrap-4/js/bootstrap.min.js"></script>

<script type="text/javascript">

   $('#gizle1').click(function() {

     $('#showhide1').toggle("slow");

   });

	

	$('#gizle2').click(function() {

     $('#showhide2').toggle("slow");

   });

	$('#gizle3').click(function() {

     $('#showhide3').toggle("slow");

   });

	$('#gizle4').click(function() {

     $('#showhide4').toggle("slow");

   });

	/*$('#goster').click(function() {

     $('#showall').toggle("show");

   });*/

</script>

				</body>



				</html>































