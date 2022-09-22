<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">





<html xmlns="http://www.w3.org/1999/xhtml">



<head>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />



<title>Jquery ile Manşet Yapımı</title>



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





        $("#sayfa_no span").css("background-color","#CCFFCC")





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



	



    <style type="text/css">





      *{padding:0; margin:0;}





      body{margin:0 0px;cursor:default;background-color:#000000;}



      #manset {display: block;

 max-width: 100%;

 height: auto!important;



    border: 1px solid #CCCCCC;



    background-color: #FFFFFF;



    padding: 0px;}

	

	div {



   border-radius:5px



}





      #manset div{font-family:trebuchet ms; width:100%; height:100%;}





      .sayfaxxx{float:left;padding:2px 0;margin:0 2px 0 0;color:#369;cursor:default;font-family:calibri;font-size:11pt;border:solid 1px #369; width:1374px; text-align:center;}





	  .sayfa{float:left;padding:0px 0;margin:0px 1px 0px 1px;color:black;cursor:default;font-family:calibri;font-size:11pt;border:solid 1px orange; width:37px; text-align:center;border-radius: 10px;}





      .manset_f{float:left;border:0;}



      .manset_h{float:left;background-color: #FFFFCC;color:#333;display: block;

 max-width: 100%;

 height: auto!important; margin:0 0 0px 0; font-size:11pt;color:#800;font-weight:bold;padding:0 0px;}



	  .manset_g{float:left;background-color:#CCFFCC;color:#000000;display: block;

 max-width: 96%;

 height: auto!important; margin:2px 2px 2px 15px; font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:left;}



	  .manset_tarih{float:left;background-color:#CCFFCC;color:#000000;width:100px;margin:0 0 5px 0;height:15px;font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:left;}



	  .manset_serit{float:left;background-color:#CCFFCC;color:#000000;display: block;

 max-width: 100%;

 height: auto!important; margin:0 0 0px 0;font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:left;}



	  

	  .manset_resim{float:center;background-color:#CCFFCC;color:#000000;display: block;

 max-width: 100%;

 height: auto!important; margin:0 0 0px 0;font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:center;}



	  .ara{float:left; background-color:#CCFFCC; border:solid 3px; border-color:#000000;color:#000000;margin:0 0 0px 0;font-size:11pt;color: #000066;font-weight:bold;padding:0 15px;text-align:left;cursor:default;font-family:trebuchet ms;}



      #manset a{text-decoration:none; cursor:default;}



#hint {cursor:default;font-family:trebuchet ms; display: block;

 max-width: 100%;

 height: auto!important; border:none #ccc; background-color:#000000; padding:0px;margin:0 0 0px 0;display:none;font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:left;}



#hint div{font-family:trebuchet ms; display: block;

 max-width: 100%;

 height: auto!important;}



.sayi{float:center;background-color: #000000;color:#333;display: block;

 max-width: 100%;

 height: auto!important; margin:0 0 0 0; font-size:11pt;color:#800;font-weight:bold;padding:0 0px;text-align:center;}



.bant{float:left;background-color:#000000;color:#000000;display: block;

 max-width: 100%;

 height: auto!important; margin:0 0 0px 0; font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:left;}



.bantserit{float:left;background-color:#000000;color:#000000;display: block;

 max-width: 100%;

 height: auto!important; margin:0px 1px 0px 1px;color:#369;cursor:default;font-size:10pt; text-align:left;}



.serit_tarih{float:left;background-color:#000000;color:#000000;display: block;

 max-width: 100%;

 height: auto!important; margin:0 0 0px 0; font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:left;}



.tumduyuru{float:left; background-color:#CCFFCC; border:solid 0px; border-color:#000000;margin:0 0 0px 0;font-size:11pt;color: #000066;font-weight:bold;padding:0 15px;text-align:left;cursor:default;font-family:trebuchet ms;display: block;

 max-width: 100%;

 height: auto!important;}



.tdtarih{float:left; background-color:#CCFFCC; border:solid 0px; border-color:#000000;color:#000000;margin:0 0 0 0;font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:center;cursor:default;font-family:trebuchet ms;display: block;

 max-width: 100%;

 height: 22px;}

.tdkonu{float:left; background-color:#CCFFCC; border:solid 0px; border-color:#000000;color:#000000;margin:0 0 0px 5px;font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:left;cursor:default;font-family:trebuchet ms;display: block;

 max-width: 100%;

 height: auto!important;}

.tdek{float:left; background-color:#CCFFCC; border:solid 0px; border-color:#000000;color:#000000;margin:0 0 0px 5px;font-size:11pt;color: #000066;font-weight:bold;padding:0 0px;text-align:left;cursor:default;font-family:trebuchet ms;display: block;

 max-width: 100%;

 height: auto!important;}



.resboyut{float:left;background-color: #FFFFCC;color:#333;display: block;

 max-width: 440px;

min-height: 330px!important;}

 

 .ximg{



 display: block;

 max-width: 99.4%;

 height: auto!important;



   border: 1px solid #CCCCCC;



    background-color: #FFFFFF;



    padding: 0px;



}

    </style>

	





</head>



<body>





<div id="manset">



    <div>

  <table width="100%" border="2">

   <th width="30%" height="10%" bordercolor="#000000" colspan="1"><? echo '<span class="manset_resim">'.$konum1r.'</span>' ?></th>

  <th width="70%" height="10%" bordercolor="#000000" bgcolor="#CCFFCC"><? echo '<span class="manset_serit">'.$konum1k.'</span>' ?></th>

  <tr>

  <th width="30%" height="90%" bordercolor="#000000"><img class="ximg" src="/form013/admin/<?php echo $resim1; ?>"/></th>

  <th width="70%" height="90%" bordercolor="#ffccff" bgcolor="#CCFFCC" valign="top"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo1.'</font></span>' ?></th>

  </tr>

  </table>

</div>



    <div>

  <table width="100%" border="2">

  <th width="30%" height="10%" bordercolor="#000000" colspan="1"><? echo '<span class="manset_resim">'.$konum2r.'</span>' ?></th>

  <th width="70%" height="10%" bordercolor="#000000" bgcolor="#CCFFCC"><? echo '<span class="manset_serit">'.$konum2k.'</span>' ?></th>

  <tr>

  <th width="30%" height="90%" bordercolor="#000000"><img class="ximg" src="/form013/admin/<?php echo $resim2; ?>"/></th>

  <th width="70%" height="90%" bordercolor="#ffccff" bgcolor="#CCFFCC" valign="top"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo2.'</font></span>' ?></th>

  </tr>

  </table>

</div>



    <div>

  <table width="100%" border="2">

  <th width="30%" height="10%" bordercolor="#000000" colspan="1"><? echo '<span class="manset_resim">'.$konum3r.'</span>' ?></th>

  <th width="70%" height="10%" bordercolor="#000000" bgcolor="#CCFFCC"><? echo '<span class="manset_serit">'.$konum3k.'</span>' ?></th>

  <tr>

  <th width="30%" height="90%" bordercolor="#000000"><img class="ximg" src="/form013/admin/<?php echo $resim3; ?>"/></th>

  <th width="70%" height="90%" bordercolor="#ffccff" bgcolor="#CCFFCC" valign="top"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo3.'</font></span>' ?></th>

  </tr>

  </table>

</div>



    <div>

  <table width="100%" border="2">

   <th width="30%" height="10%" bordercolor="#000000" colspan="1"><? echo '<span class="manset_resim">'.$konum4r.'</span>' ?></th>

  <th width="70%" height="10%" bordercolor="#000000" bgcolor="#CCFFCC"><? echo '<span class="manset_serit">'.$konum4k.'</span>' ?></th>

  <tr>

  <th width="30%" height="90%" bordercolor="#000000"><img class="ximg" src="/form013/admin/<?php echo $resim4; ?>"/></th>

  <th width="70%" height="90%" bordercolor="#ffccff" bgcolor="#CCFFCC" valign="top"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo4.'</font></span>' ?></th>

  </tr>

  </table>

</div>



	<div>

  <table width="100%" border="2">

   <th width="30%" height="10%" bordercolor="#000000" colspan="1"><? echo '<span class="manset_resim">'.$konum5r.'</span>' ?></th>

  <th width="70%" height="10%" bordercolor="#000000" bgcolor="#CCFFCC"><? echo '<span class="manset_serit">'.$konum5k.'</span>' ?></th>

  <tr>

  <th width="30%" height="90%" bordercolor="#000000"><img class="ximg" src="/form013/admin/<?php echo $resim5; ?>"/></th>

  <th width="70%" height="90%" bordercolor="#ffccff" bgcolor="#CCFFCC" valign="top"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo5.'</font></span>' ?></th>

  </tr>

  </table>

</div>



	<div>

  <table width="100%" border="2">

   <th width="30%" height="10%" bordercolor="#000000" colspan="1"><? echo '<span class="manset_resim">'.$konum6r.'</span>' ?></th>

  <th width="70%" height="10%" bordercolor="#000000" bgcolor="#CCFFCC"><? echo '<span class="manset_serit">'.$konum6k.'</span>' ?></th>

  <tr>

  <th width="30%" height="90%" bordercolor="#000000"><img class="ximg" src="/form013/admin/<?php echo $resim6; ?>"/></th>

  <th width="70%" height="90%" bordercolor="#ffccff" bgcolor="#CCFFCC" valign="top"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo6.'</font></span>' ?></th>

  </tr>

  </table>

</div>



	<div>

  <table width="100%" border="2">

   <th width="30%" height="10%" bordercolor="#000000" colspan="1"><? echo '<span class="manset_resim">'.$konum7r.'</span>' ?></th>

  <th width="70%" height="10%" bordercolor="#000000" bgcolor="#CCFFCC"><? echo '<span class="manset_serit">'.$konum7k.'</span>' ?></th>

  <tr>

  <th width="30%" height="90%" bordercolor="#000000"><img class="ximg" src="/form013/admin/<?php echo $resim7; ?>"/></th>

  <th width="70%" height="90%" bordercolor="#ffccff" bgcolor="#CCFFCC" valign="top"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo7.'</font></span>' ?></th>

  </tr>

  </table>

</div>



	<div>

  <table width="100%" border="2">

   <th width="30%" height="10%" bordercolor="#000000" colspan="1"><? echo '<span class="manset_resim">'.$konum8r.'</span>' ?></th>

  <th width="70%" height="10%" bordercolor="#000000" bgcolor="#CCFFCC"><? echo '<span class="manset_serit">'.$konum8k.'</span>' ?></th>

  <tr>

  <th width="30%" height="90%" bordercolor="#000000"><img class="ximg" src="/form013/admin/<?php echo $resim8; ?>"/></th>

  <th width="70%" height="90%" bordercolor="#ffccff" bgcolor="#CCFFCC" valign="top"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo8.'</font></span>' ?></th>

  </tr>

  </table>

</div>



	<div>

  <table width="100%" border="2">

   <th width="30%" height="10%" bordercolor="#000000" colspan="1"><? echo '<span class="manset_resim">'.$konum9r.'</span>' ?></th>

  <th width="70%" height="10%" bordercolor="#000000" bgcolor="#CCFFCC"><? echo '<span class="manset_serit">'.$konum9k.'</span>' ?></th>

  <tr>

  <th width="30%" height="90%" bordercolor="#000000"><img class="ximg" src="/form013/admin/<?php echo $resim9; ?>"/></th>

  <th width="70%" height="90%" bordercolor="#ffccff" bgcolor="#CCFFCC" valign="top"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo9.'</font></span>' ?></th>

  </tr>

  </table>

</div>



	<div>

  <table width="100%" border="2">

   <th width="30%" height="10%" bordercolor="#000000" colspan="1"><? echo '<span class="manset_resim">'.$konum10r.'</span>' ?></th>

  <th width="70%" height="10%" bordercolor="#000000" bgcolor="#CCFFCC"><? echo '<span class="manset_serit">'.$konum10k.'</span>' ?></th>

  <tr>

  <th width="30%" height="90%" bordercolor="#000000"><img class="ximg" src="/form013/admin/<?php echo $resim10; ?>"/></th>

  <th width="70%" height="90%" bordercolor="#ffccff" bgcolor="#CCFFCC" valign="top"><?php echo '<span class="manset_g" style="text-align:justify" align="left"><font color="blue">'.$alo10.'</font></span>' ?></th>

  </tr>

  </table>

</div>



	</div>



  <table border="1" bordercolor="orange" width="100%"><th width="30%" height="10%" bordercolor="#000000" align="center"><div class="sayi"><span id="sayfa_no"></span></div></th><th align="center"><div id="hint">



    <div><table border="0"><th width="70%" height="10%"><? echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum1s.'</span>' ?></th></table></div>



    <div><table border="0"><th width="70%" height="10%"><? echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum2s.'</span>' ?></th></table></div>



    <div><table border="0"><th width="70%" height="10%"><? echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum3s.'</span>' ?></th></table></div>



   	<div><table border="0"><th width="70%" height="10%"><? echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum4s.'</span>' ?></th></table></div>



	<div><table border="0"><th width="70%" height="10%"><? echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum5s.'</span>' ?></th></table></div>



	<div><table border="0"><th width="70%" height="10%"><? echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum6s.'</span>' ?></th></table></div>



	<div><table border="0"><th width="70%" height="10%"><? echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum7s.'</span>' ?></th></table></div>



	<div><table border="0"><th width="70%" height="10%"><? echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum8s.'</span>' ?></th></table></div>



	<div><table border="0"><th width="70%" height="10%"><? echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum9s.'</span>' ?></th></table></div>



	<div><table border="0"><th width="70%" height="10%"><? echo '<span class="bantserit"><font color="red" style="font-weight:bold">'.$konum10s.'</span>' ?></th></table></div></div></th></table>





<? 



include('connect.php');



$ek="Ekli Dosya:";



$sorgum="select yaziid,date_format(tarih, '%d.%m.%Y')  AS tarih1,konu,icerik,bilgi,dosya from duyuru order by yaziid desc";



$basla=mysql_query($sorgum);



$ksay=mysql_num_rows($basla);



echo'



<table border="1" bordercolor="black" bgcolor="#CCFFCC" align="center" cellpadding="0" cellspacing="0" width="100%">';



for($i=0; $i<$ksay; $i++)



{



    $sonucum=mysql_fetch_array($basla); 



	$cumle=$sonucum['icerik'];



$yaziid=$sonucum['yaziid'];  



$bilgisi= $sonucum['bilgi'];



    if($i%1==0) //yan yana kaç resim istiyorsan 2 yarine o rakami yaz

	

    {

  

      echo'<tr align="left" bordercolor="#000000">';



    }



$cumle=str_replace("\n","<br />",$cumle);  



if($sonucum['dosya']!=NULL){

/*



$link='<div align="center" style="background-repeat:no-repeat; background-attachment:fixed; background-position:center;  background:url(images/Resim.jpg);"><font color="red" style="font-weight:bold">'.$ek.'</font><a href="form013/admin/'.$sonucum['dosya'].'"><font color="blue" style="font-weight:bold">'.$bilgisi.'</div></font></a>';



*/



$link=$ek.'</font><a href="form013/admin/'.$sonucum['dosya'].'"><font color="blue" style="font-weight:bold">'.$bilgisi.'</div></font></a>';



}else{



$link="...";



}





if(strlen($cumle)>300)



{



$bol=metin_bol($cumle,0,300,$yaziid);



$alo=$bol.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link ;



}else{



$alo=$cumle.' &nbsp;&nbsp;&nbsp;&nbsp;'.$link ;



}

/*

echo '<td width="1418px" align="center" class="tumduyuru">Tarih :<font color="red" style="font-weight:bold">'.$sonucum['tarih1'].'</font>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font color="blue"><b>'.$sonucum['konu'].'</b></font><hr style="border:1px solid orange;" />'.$alo;

*/

?>

<th width="6%" align="center" bordercolor="#000000"><?php echo '<span class="tdtarih"><font color="red" style="font-weight:bold">'.$sonucum['tarih1'].'</font></span>' ?></th>

<th width="66%" align="center" bordercolor="#000000"><?php echo '<span class="tdkonu"><a href="yazilar.php?yaziid='.$yaziid.'"><font color="blue">'.$sonucum['konu'].'</font></a></span>' ?></th>

<th width="28%" align="center" bordercolor="#000000"><?php echo '<span class="tdek"><font color="red" style="font-weight:bold">'.$link.'</span>' ?></th>';



<?php

if($i%1==1) //burayida yan yana kaç resim istiyorsan onun  1 eksigine esitle yani 3 sira için $i%3==2 gibi



    {



        echo'</tr>';



    }



}



echo'



</table>'; 



 ?>



<table border="1" bordercolor="black" bgcolor="#CCFFCC" align="center" cellpadding="0" cellspacing="0" width="100%"><th width="100%" align="center"><a href="#top" _fcksavedurl="#top" _fcksavedurl="#top"><img src="images/basadon.png"/></a>



</th>



</table>



</body>



</html>