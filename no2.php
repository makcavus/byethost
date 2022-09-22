<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">







<html xmlns="http://www.w3.org/1999/xhtml">







<head>







<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />







<title>Untitled Document</title>







<style type="text/css">







<!--







body {







	background-color: #000000;















}







body,td,th {







	font-family: Arial, Helvetica, sans-serif;







	color: #0000FF;







}







a:link {







	color: #000000;







	text-decoration: none;







}







a:hover {







	color: #FF0000;







	text-decoration: none;







}







a:visited {







	text-decoration: none;







}







a:active {







	text-decoration: none;







}







.style1 {font-family: Verdana;







font-size:10px;







}







.style2 {font-family:Verdana;







font-size: 11px;







}







.style3 {font-family:Verdana;







font-size: 13px;







color:#FF0000;







}







.style4 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }







-->







</style>



<style type="text/css">





      *{padding:0; margin:0;}





      body{margin:0 0px;cursor:default;background-color:#000000;}



      #manset {cursor:default;font-family:trebuchet ms; width:100%; height:366px; border:solid 1px #ccc; background-color:#eee; padding:5px;margin:0 0 5px 0;display:none;}





      #manset div{font-family:trebuchet ms; width:400px; height:330px;}





      .sayfaxxx{float:left;padding:2px 0;margin:0 2px 0 0;color:#369;cursor:default;font-family:calibri;font-size:11pt;border:solid 1px #369; width:1374px; text-align:center;}





	  .sayfa{float:left;padding:2px 0;margin:0px 0px 0px 13px;color:#369;cursor:default;font-family:calibri;font-size:11pt;border:solid 1px #369; width:31px; text-align:center;}





      .manset_f{float:left;border:0;}



      .manset_h{float:left;background-color: #FFFFCC;color:#333;width:430px;margin:0 0 5px 0;height:20px;font-size:11pt;color:#800;font-weight:bold;padding:0 10px;}



	  .manset_g{float:left;background-color:#CCFFCC;color:#000000;width:550px;margin:0 0 5px 0;height:355px;font-size:11pt;color: #000066;font-weight:bold;padding:0 10px;text-align:left;}



	  .manset_tarih{float:left;background-color:#CCFFCC;color:#000000;width:100px;margin:0 0 5px 0;height:15px;font-size:11pt;color: #000066;font-weight:bold;padding:0 10px;text-align:left;}



	  .manset_serit{float:left;background-color:#CCFFCC;color:#000000;width:800px;margin:0 0 5px 0;height:15px;font-size:11pt;color: #000066;font-weight:bold;padding:0 10px;text-align:left;}



	  .ara{float:left; background-color:#CCFFCC; border:solid 3px; border-color:#000000;color:#000000;margin:0 0 0px 0;font-size:11pt;color: #000066;font-weight:bold;padding:0 15px;text-align:left;cursor:default;font-family:trebuchet ms;}



      #manset a{text-decoration:none; cursor:default;}



#hint {cursor:default;font-family:trebuchet ms; width:100%; height:16px; border:none #ccc; background-color:#000000; padding:5px;margin:0 0 5px 0;display:none;font-size:11pt;color: #000066;font-weight:bold;padding:0 10px;text-align:left;}



#hint div{font-family:trebuchet ms; width:100%; height:16px;}



.sayi{float:left;background-color: #000000;color:#333;width:460px;margin:0 0 5px 0;height:15px;font-size:11pt;color:#800;font-weight:bold;padding:0 10px;}



.bant{float:left;background-color:#000000;color:#000000;width:100px;margin:0 0 5px 0;height:15px;font-size:11pt;color: #000066;font-weight:bold;padding:0 10px;text-align:left;}



.bantserit{float:left;background-color:#000000;color:#000000;width:800px;margin:0 0 5px 0;height:15px;font-size:11pt;color: #000066;font-weight:bold;padding:0 10px;text-align:left;}



    </style>



<script type="text/javascript" src="jquery-latest.pack.js"></script>



<SCRIPT LANGUAGE="JavaScript">



<!-- Begin



function expandingWindow(website,yukseklik,genislik) {



 



// Dikine açılma hizi (Yüksek değer=hızlı)



var heightspeed = 2;



 



// Genişlemesine açılma hizi (Yüksek değer=hızlı)



var widthspeed = 7;



 



// Soldan Kaç Piksel solda görünecek



var leftdist = 0;



 



// Yukarıdan Kaç Piksel aşağıda görünecek



var topdist = 0; 



 



if (document.all) {



var winwidth = genislik;



var winheight = yukseklik;



var sizer = window.open("","_blank","left=" + leftdist + ",top=" + topdist + ",width=1,height=1,scrollbars=yes, location=yes, status=yes, toolbar=yes,menubar=yes");



for (sizeheight = 1; sizeheight < winheight; sizeheight += heightspeed) {



sizer.resizeTo("1", sizeheight);



}



for (sizewidth = 1; sizewidth < winwidth; sizewidth += widthspeed) {



sizer.resizeTo(sizewidth, sizeheight);



}



sizer.location = website;



}



else



window.location = website;



}



//  End -->



</script>

<? include('ilkon.php'); ?>	



<script type="text/javascript" src="jquery-1.9.1.min.js"></script>



<script type="text/javascript">



var aktif = 1; var timer; var adet;



var ttaktif = 1; var timer; var ttadet;



$(document).ready(function(){



$("#manset").show();



$("#manset div").hide();



$("#manset div:first").show();



adet = $("#manset div").length;



sayfalar();



renk(1);



timer = setInterval(degistir,20000);



$("#hint").show();



$("#hint div").hide();



$("#hint div:first").hide();



ttadet = $("#hint div").length;



ttsayfalar();



ttrenk(1);



timer = setInterval(ttdegistir,15000);



});



function degistir()



{



$("#manset div:nth-child("+aktif+")").slideUp();



aktif = (aktif + 1) % adet;



if(aktif == 0) aktif = adet;



$("#manset div:nth-child("+aktif+")").slideDown();



renk(aktif);





      }





      function tikla(deger)







      {








        renk(deger);





        $("#manset div:nth-child("+aktif+")").slideUp();





        aktif = deger;





        $("#manset div:nth-child("+aktif+")").slideDown();





        clearInterval(timer);





        timer = setInterval(degistir,20000);





      }





      function renk(deger)



      {





        $("#sayfa_no span").css("background-color","blue")





        $("#sayfa_no span:nth-child("+deger+")").css("background-color","yellow");





      }



      

      function ttdegistir()



      {





        $("#hint div:nth-child("+ttaktif+")").slideUp(0);





        ttaktif = (ttaktif + 1) % ttadet;





        if(ttaktif == 0) ttaktif = ttadet;





        $("#hint div:nth-child("+aktif+")").slideDown(0);





        ttrenk(ttaktif);





      }





      function tttikla(ttdeger)





      {





        ttrenk(ttdeger);





        $("#hint div:nth-child("+ttaktif+")").slideUp(0);





        ttaktif = ttdeger;





        $("#hint div:nth-child("+ttaktif+")").slideDown(0);





        clearInterval(timer);





        timer = setInterval(degistir,8000);





      }





      function ttrenk(ttdeger)



      {





        $("#hint_no span").css("background-color","black")





        $("#hint_no span:nth-child("+ttdeger+")").css("background-color","black");





      }





function gizle()



{



$("#hint div").hide();



clearInterval(timer);



timer = setInterval(degistir,8000);



}

    



function sayfalar()



      {





        var sayfa_no = "";





        for(var i = 1; i < adet ; i++)



        {





          sayfa_no += "<span class='sayfa' onClick=tikla("+i+") onMouseOver=tttikla("+i+") onMouseOut=gizle()>"+i+"</span>"





        }





        $("#sayfa_no").html(sayfa_no);





      }



    </script>

<script type="text/javascript">



function getcss(cssfile){



loadcss = document.createElement('link')



loadcss.setAttribute("rel", "stylesheet")



loadcss.setAttribute("type", "text/css")



loadcss.setAttribute("href", cssfile)



document.getElementsByTagName("head")[0].appendChild(loadcss)



}



if(screen.width == 1680)



{



getcss('manset1680.css')



}



else if(screen.width == 1440)



{



getcss('manset1440.css')



}



else if(screen.width == 1600)



{



getcss('manset1600.css')





}



else if(screen.width == 1280)



{



getcss('manset.css')



}



else



{



getcss('manset.css')



}



</script>



</head>















<body>







<div align="center">



<table width="100%">



<tr>



<th><a href="http://www.mhrs.gov.tr/Vatandas/" target="sag"><img align="center" width="100%" height="100%" alt="Ana Sayfa" src="/images/logo182.PNG"></a></th>



<th><a href="https://tsim.saglik.gov.tr/" target="sag"><img align="center" width="100%" height="100%" alt="Ana Sayfa" src="/images/tsim.jpg"></a></th>



<th><a href="https://www.antalyaeo.org.tr/tr/nobetci-eczaneler" target="sag"><img align="center" width="100%" height="100%" alt="Ana Sayfa" src="/images/nobecz.jpg"></a></th>



<th><a href="javascript://"onclick="javascript:window.open('asi.html','HB','toolbar=1, location=0, scrollbars=0,resizable=0, width=900,height=770');"><img align="center" width="100%" height="100%" alt="Ana Sayfa" src="/images/asi_simge.jpg"></a></th>



<th><a href="duyuru.php" target="sag"><img align="center" width="100%" height="100%" alt="Ana Sayfa" src="/images/SerikTSM5.jpg"></a></th>



<th><a href="http://sbu.saglik.gov.tr/sbahbs/" target="sag"><img align="center" width="100%" height="100%" alt="Ana Sayfa" src="/images/ahekbul2.jpg"></a></th>



<th><a href="javascript://"onclick="javascript:window.open('https://eposta.saglik.gov.tr','HB','toolbar=1, location=0, scrollbars=0,resizable=0, width=900,height=770');"><img align="center" width="100%" height="100%" alt="Ana Sayfa" src="/images/webmail.jpg"></a></th>



<th><a href="duyuru.php" target="sag"><img align="center" width="100%" height="100%" alt="Ana Sayfa" src="/images/alo184.jpg"></a></th>



</tr>



</table>



</div>



<div id="manset">



    <div><table border="2" width="100%" class="manset_h"><th><a href="#"><span class="manset_h"><? echo $konum1; ?></span> <img src="/form013/admin/<?php echo $resim1;?>" class="manset_f" /></a></th><th class="manset_g"><span class="manset_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih1.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="manset_serit"><font color="blue"><b>'.$konum1.'</b></font></span><br><br><hr style="border:1px solid orange;" /><br>'.$alo1; ?></th></table></div>



    <div><table border="2" width="100%" class="manset_h"><th><a href="#"><span class="manset_h"><? echo $konum2; ?></span> <img src="/form013/admin/<?php echo $resim2;?>" class="manset_f" /></a></th><th class="manset_g"><span class="manset_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih2.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="manset_serit"><font color="blue"><b>'.$konum2.'</b></font></span><br><br><hr style="border:1px solid orange;" /><br>'.$alo2; ?></th></table></div>



    <div><table border="2" width="100%" class="manset_h"><th><a href="#"><span class="manset_h"><? echo $konum3; ?></span> <img src="/form013/admin/<?php echo $resim3;?>" class="manset_f" /></a></th><th class="manset_g"><span class="manset_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih3.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="manset_serit"><font color="blue"><b>'.$konum3.'</b></font></span><br><br><hr style="border:1px solid orange;" /><br>'.$alo3; ?></th></table></div>



    <div><table border="2" width="100%" class="manset_h"><th><a href="#"><span class="manset_h"><? echo $konum4; ?></span> <img src="/form013/admin/<?php echo $resim4;?>" class="manset_f" /></a></th><th class="manset_g"><span class="manset_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih4.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="manset_serit"><font color="blue"><b>'.$konum4.'</b></font></span><br><br><hr style="border:1px solid orange;" /><br>'.$alo4; ?></th></table></div>



	<div><table border="2" width="100%" class="manset_h"><th><a href="#"><span class="manset_h"><? echo $konum5; ?></span> <img src="/form013/admin/<?php echo $resim5;?>" class="manset_f" /></a></th><th class="manset_g"><span class="manset_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih5.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="manset_serit"><font color="blue"><b>'.$konum5.'</b></font></span><br><br><hr style="border:1px solid orange;" /><br>'.$alo5; ?></th></table></div>



	<div><table border="2" width="100%" class="manset_h"><th><a href="#"><span class="manset_h"><? echo $konum6; ?></span> <img src="/form013/admin/<?php echo $resim6;?>" class="manset_f" /></a></th><th class="manset_g"><span class="manset_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih6.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="manset_serit"><font color="blue"><b>'.$konum6.'</b></font></span><br><br><hr style="border:1px solid orange;" /><br>'.$alo6; ?></th></table></div>



	<div><table border="2" width="100%" class="manset_h"><th><a href="#"><span class="manset_h"><? echo $konum7; ?></span> <img src="/form013/admin/<?php echo $resim7;?>" class="manset_f" /></a></th><th class="manset_g"><span class="manset_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih7.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="manset_serit"><font color="blue"><b>'.$konum7.'</b></font></span><br><br><hr style="border:1px solid orange;" /><br>'.$alo7; ?></th></table></div>



	<div><table border="2" width="100%" class="manset_h"><th><a href="#"><span class="manset_h"><? echo $konum8; ?></span> <img src="/form013/admin/<?php echo $resim8;?>" class="manset_f" /></a></th><th class="manset_g"><span class="manset_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih8.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="manset_serit"><font color="blue"><b>'.$konum8.'</b></font></span><br><br><hr style="border:1px solid orange;" /><br>'.$alo8; ?></th></table></div>



	<div><table border="2" width="100%" class="manset_h"><th><a href="#"><span class="manset_h"><? echo $konum9; ?></span> <img src="/form013/admin/<?php echo $resim9;?>" class="manset_f" /></a></th><th class="manset_g"><span class="manset_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih9.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="manset_serit"><font color="blue"><b>'.$konum9.'</b></font></span><br><br><hr style="border:1px solid orange;" /><br>'.$alo9; ?></th></table></div>



	<div><table border="2" width="100%" class="manset_h"><th><a href="#"><span class="manset_h"><? echo $konum10; ?></span> <img src="/form013/admin/<?php echo $resim10;?>" class="manset_f" /></a></th><th class="manset_g"><span class="manset_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih10.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</span><span class="manset_serit"><font color="blue"><b>'.$konum10.'</b></font></span><br><br><hr style="border:1px solid orange;" /><br>'.$alo10; ?></th></table></div>



	</div>



  <table border="1" bordercolor="orange"><th align="center"><div class="sayi"><span id="sayfa_no"></span></div></th><th align="center"><div id="hint">



    	<div><table border="0" width="100%"><th class="serit_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih1.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</th><th class="bantserit"><font color="orange">'.$konum1 ;?></th></table></div>



    	<div><table border="0" width="100%"><th class="serit_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih2.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</th><th class="bantserit"><font color="orange">'.$konum2; ?></th></table></div>



    	<div><table border="0" width="100%"><th class="serit_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih3.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</th><th class="bantserit"><font color="orange">'.$konum3; ?></th></table></div>



   	<div><table border="0" width="100%"><th class="serit_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih4.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</th><th class="bantserit"><font color="orange">'.$konum4; ?></th></table></div>



	<div><table border="0" width="100%"><th class="serit_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih5.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</th><th class="bantserit"><font color="orange">'.$konum5; ?></th></table></div>



	<div><table border="0" width="100%"><th class="serit_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih6.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</th><th class="bantserit"><font color="orange">'.$konum6; ?></th></table></div>



	<div><table border="0" width="100%"><th class="serit_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih7.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</th><th class="bantserit"><font color="orange">'.$konum7; ?></th></table></div>



	<div><table border="0" width="100%"><th class="serit_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih8.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</th><th class="bantserit"><font color="orange">'.$konum8; ?></th></table></div>



	<div><table border="0" width="100%"><th class="serit_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih9.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</th><th class="bantserit"><font color="orange">'.$konum9; ?></th></table></div>



	<div><table border="0" width="100%"><th class="serit_tarih"><? echo '<font color="red" style="font-weight:bold">'.$tarih10.'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</th><th class="bantserit"><font color="orange">'.$konum10; ?></th></table></div></div></th></table>



</BODY>



</HTML>















