<?
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif;
border-style: none;
text-align: center; 
    font-size : 13px;
    color : #000000;
border-top-width: 1px;
	border-bottom-width: 1px;
border-right-width: 1px;
border-left-width: 1px;	
	}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	color: #000000;
	font-size: 13px;
	font-style:normal;
	border-top-width: 1px;
	border-bottom-width: 1px;
border-right-width: 1px;
border-left-width: 1px;
border-top-style: solid;
border-right-style: solid;
border-bottom-style: solid;
border-left-style: solid;
border-top-color: #0066CC;
border-right-color: #0066CC;
border-left-color: #0066CC;
border-bottom-color: #0066CC;
}
.style8 {font-family: "Times New Roman", Times, serif; font-weight: bold; }
.style18 {font-size: 9; }
.style19 {
	font-size: 13px;
	font-weight: bold;
}
.style21 {font-size: 12px}
.style22 {
	font-size: 12px;
	font-weight: bold;
}
.style23 {font-size: 12; }
.style25 {
	font-size: 16px;
	font-weight: bold;
}
.style26 {font-size: 14px; font-weight: bold; }
.style27 {font-size: 14px; }
-->
</style>
<script language="JavaScript" src="kaydet.js" type="text/javascript">
</script>	
<script type="text/javascript" src="jquery-latest.min.js"></script> 
    <script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script> 
    <script type="text/javascript"> 
        $(function() { 
            $("#masktest").mask("99.99.9999"); 
 $("#masktest1").mask("99.99.9999");
            // Contents of textboxes will be selected when receiving focus. 
            $("input[type=text]") 
                .focus(function() { 
                    $(this).select(); 
                }); 
        }); 
    </script> 
</head>

<body>
<?php
include('con_023.php');
$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yilgelen=$_GET['selectyil'];
$aygelen=iconv("UTF-8", "ISO-8859-9",$_GET['selectay']); 
include('devir.php');
?>
<?php
$iladine=@mysql_query("select * from il where(ilid='$ilgelen')");
while($ilsonucumne=mysql_fetch_array($iladine)){
$ilinadine=$ilsonucumne['ilad'];
}
?>
<?php
$ilceadine=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");
while($ilcesonucumne=mysql_fetch_array($ilceadine)){
$ilceninadine=$ilcesonucumne['ilcead'];
}
?>
<div id="sonuckay"><form name="girdiekle" action="javascript:void(0)" method="get">
  <table border="0" bordercolor="#000000" align="center" cellpadding="0" cellspacing="0" width="100%">
  <th class="style5" width="30%"align="left" bordercolor="white" bgcolor="#FFCC00" colspan="3"><a href=# onclick="kontrol();"><img src="images/iptal.png" /></a></th>
      <th class="style5" width="40%" align="center" bordercolor="white" bgcolor="blue" colspan="3"><font size="4" color="yellow">Yeni Kayıt Ekleme Ekranı</font></th>
    <th class="style5" width="30%" align="right" bordercolor="yellow" bgcolor="#FFCC00" colspan="3"><a href="#" tabindex="1" title="hayir" onclick="girdiyiekle();"><img src="images/kaydet.png" /></a></th>
    <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilgelen ;?>" />
      <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilcegelen ;?>" />
      <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ocgelen ;?>" />
      <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $yilgelen ;?>" />
      <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $aygelen ;?>" />
  </table>
	  <table width="100%" border="0">
        <tr>
          <td width="18%"><div align="center" class="style21">T.C.</div></td>
          <td width="38%"><span class="style18"></span></td>
          <td width="31%"><div align="right" class="style27">YIL:</div></td>
          <td width="13%"><div align="left" class="style27"><? echo $yilgelen ;?></div></td>
        </tr>
        <tr>
          <td><div align="center" class="style21">SAĞLIK BAKANLIĞI </div></td>
          <td><div align="right" class="style25"> AŞI SONUÇLARI ÇİZELGESİ</div></td>
          <td><div align="right" class="style27">AY:</div></td>
          <td><div align="left" class="style27"><? echo $aygelen ;?></div></td>
        </tr>
        <tr>
          <td><div align="center" class="style21">Form No:013 </div></td>
          <td><span class="style23"></span></td>
          <td><span class="style23"></span></td>
          <td><span class="style23"></span></td>
        </tr>
        <tr>
          <td><div align="left" class="style26">İL:</div></td>
          <td><div align="left" class="style26"><? echo $ilinadine ;?></div></td>
          <td><div align="right" class="style26">TOPLAM NÜFUS:</div></td>
          <td><span class="style26">
            <input class="style1" name="v118"  type="text" value="0" size="15" tabindex="128"/>
          </span></td>
        </tr>
        <tr>
          <td><div align="left" class="style26">İLÇE/TSM:</div></td>
          <td><div align="left" class="style26"><? echo $ilceninadine ;?></div></td>
          <td><div align="right" class="style26">0-11 AY BEBEK NÜFUSU:</div></td>
          <td><span class="style26"><input class="style1" name="v119"  type="text" value="0" size="15" tabindex="129"/></span></td>
        </tr>
        <tr>
          <td><div align="left" class="style26">KURUM/AH:</div></td>
          <td><div align="left" class="style26"><? echo $ocgelen ;?></div></td>
          <td><div align="right" class="style26">AYLIK 0-11 AY BEBEK NÜFUSU:</div></td>
          <td><span class="style26"><input class="style1" name="v135"  type="text" value="0" size="15" tabindex="130"/></span></td>
        </tr>
      </table>
	  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
          <th width="11%" rowspan="2" bordercolor="#000000" class="style5"><div align="center"><strong>AŞI</strong></div></th>
          <th colspan="9" bordercolor="#000000" class="style5" scope="col"><div align="center"><strong>YAŞ GRUPLARINA GÖRE YAPILAN AŞI DOZLARI</strong></div></th>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center"><strong>Uygu-lama</strong></div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center"><strong>0 YAŞ<br />
          (0-11 ay)</strong></div></td>
          <td width="10%" bordercolor="#000000" class="style5"><div align="center"><strong>1 YAŞ<br />
          (12-23 ay)</strong></div></td>
          <td width="10%" bordercolor="#000000" class="style5"><div align="center"><strong>2-4 YAŞ<br />
          (24-59 ay)</strong></div></td>
          <td width="10%" bordercolor="#000000" class="style5"><div align="center"><strong>5-9 YAŞ</strong></div></td>
          <td width="10%" bordercolor="#000000" class="style5"><div align="center"><strong>10-14 YAŞ</strong></div></td>
          <td width="10%" bordercolor="#000000" class="style5"><div align="center"><strong>15 YAŞ ve Üzeri</strong></div></td>
          <td width="2%" bordercolor="#000000" class="style5">&nbsp;</td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><strong>TOPLAM</strong></div></td>
        </tr>
        <tr>
          <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>DaBT-İPA-Hib AŞISI</strong></div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" id="v1" name="v1"  type="text" value="0" size="15" tabindex="1" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"> <input class="style1" id="v2" name="v2"  type="text" value="0" size="15" tabindex="2" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"> <input class="style1" id="v3" name="v3"  type="text" value="0" size="15" tabindex="3" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"> <input class="style1" id="v4" name="v4"  type="text" value="0" size="15" tabindex="4" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();"/></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input class="style1" name="buttonu" type="button"  onclick="topla();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonucu" name="sonucu" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">II</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v5"  type="text" value="0" size="15" tabindex="5" id="v5" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v6"  type="text" value="0" size="15" tabindex="6" id="v6" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v7"  type="text" value="0" size="15" tabindex="7" id="v7" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            
            <input class="style1" name="v8"  type="text" value="0" size="15" tabindex="8" id="v8" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();"/>
          </div></td>
          <td width="10%"  bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input class="style1" name="button1" type="button"  onclick="topla1();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc1" name="sonuc1" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">III</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v9"  type="text" value="0" size="15" tabindex="9" id="v9" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v10"  type="text" value="0" size="15" tabindex="10" id="v10" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v11"  type="text" value="0" size="15" tabindex="11" id="v11" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v12"  type="text" value="0" size="15" tabindex="12" id="v12" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();"/>
          </div></td>
          <td width="10%"  bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input class="style1" name="button2" type="button"  onclick="topla2();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc2" name="sonuc2" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">R</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v13"  type="text" value="0" size="15" tabindex="13" id="v13" onchange="topla3();" onkeydown="topla4();" onkeyup="topla4();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v14"  type="text" value="0" size="15" tabindex="14" id="v14" onchange="topla3();" onkeydown="topla4();" onkeyup="topla4();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v15"  type="text" value="0" size="15" tabindex="15" id="v15" onchange="topla3();" onkeydown="topla4();" onkeyup="topla4();"/>
          </div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input class="style1" name="button3" type="button"  onclick="topla3();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc3" name="sonuc3" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>TOPLAM DaBT-IPA-Hib</strong></div></th>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button4" type="button" class="style1"  onclick="topla4();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc4" name="sonuc4" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
  </table>
  <br>
  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>DaBT-İPA AŞISI</strong></div></th>
		  <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8"></div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center">
            <input class="style1" name="v16"  type="hidden" value="0" size="15" tabindex="16" id="v16" onchange="topla5();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center">
            
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v17"  type="text" value="0" size="15" tabindex="17" id="v17" onchange="topla5();"/>
          </div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><input class="style1" name="v18"  type="text" value="0" size="15" tabindex="18" id="v18" onchange="topla5();"/></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button5" type="button" class="style1"  onclick="topla5();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc5" name="sonuc5" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
  </table>
		 <br>
  <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center">KONJUGE PNOMOKOK AŞISI </div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v19"  type="text" value="0" size="15" tabindex="19" id="v19" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v20"  type="text" value="0" size="15" tabindex="20" id="v20" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v21"  type="text" value="0" size="15" tabindex="21" id="v21" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button6" type="button" class="style1"  onclick="topla6();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc6" name="sonuc6" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">II</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v22"  type="text" value="0" size="15" tabindex="22" id="v22" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v23"  type="text" value="0" size="15" tabindex="23" id="v23" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v24"  type="text" value="0" size="15" tabindex="24" id="v24" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button7" type="button" class="style1"  onclick="topla7();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc7" name="sonuc7" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">III</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v25"  type="text" value="0" size="15" tabindex="25" id="v25" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v26"  type="text" value="0" size="15" tabindex="26" id="v26" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v27"  type="text" value="0" size="15" tabindex="27" id="v27" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();"/></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button8" type="button" class="style1"  onclick="topla8();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" id="sonuc8" name="sonuc8" type="text" size="15" readonly="true" value="0"/>
          </div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">R</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v28"  type="text" value="0" size="15" tabindex="28" id="v28" onchange="topla9();" onkeydown="topla10();" onkeyup="topla10();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v29"  type="text" value="0" size="15" tabindex="29" id="v29" onchange="topla9();" onkeydown="topla10();" onkeyup="topla10();"/></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button9" type="button" class="style1"  onclick="topla9();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" id="sonuc9" name="sonuc9" type="text" size="15" readonly="true" value="0"/>
          </div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">TOPLAM KPA </div></th>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button10" type="button" class="style1"  onclick="topla10();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc10" name="sonuc10" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
  </table>
  <BR>
  <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center">ORAL POLİO  AŞISI </div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="18%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v30"  type="text" value="0" size="15" tabindex="30" id="v30" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v31"  type="text" value="0" size="15" tabindex="31" id="v31" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v32"  type="text" value="0" size="15" tabindex="32" id="v32" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="11%" class="style5"><div align="center">
            <input class="style1" name="v33"  type="text" value="0" size="15" tabindex="33" id="v33" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"/>
          </div></td>
          <td width="10%" class="style5"><div align="center"><input class="style1" name="v34"  type="text" value="0" size="15" tabindex="34" id="v34" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="10%" class="style5"><div align="center"><input class="style1" name="v35"  type="text" value="0" size="15" tabindex="35" id="v35" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button11" type="button" class="style1"  onclick="topla11();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc11" name="sonuc11" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">II</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"><input class="style1" name="v36"  type="hidden" value="0" size="15" tabindex="36" id="v36" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v37"  type="text" value="0" size="15" tabindex="37" id="v37" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v38"  type="text" value="0" size="15" tabindex="38" id="v38" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="11%" class="style5"><div align="center"><input class="style1" name="v39"  type="text" value="0" size="15" tabindex="39" id="v39" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="10%" class="style5"><div align="center"><input class="style1" name="v40"  type="text" value="0" size="15" tabindex="40" id="v40" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="10%" class="style5"><div align="center"><input class="style1" name="v41"  type="text" value="0" size="15" tabindex="41" id="v41" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button12" type="button" class="style1"  onclick="topla12();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" id="sonuc12" name="sonuc12" type="text" size="15" readonly="true" value="0"/>
          </div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">III</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"><input class="style1" name="v42"  type="hidden" value="0" size="15" tabindex="42" id="v42" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center">
            <input class="style1" name="v43"  type="hidden" value="0" size="15" tabindex="43" id="v43" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"><input class="style1" name="v44"  type="hidden" value="0" size="15" tabindex="44" id="v44" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="11%" bgcolor="#999999" class="style5"><div align="center"><input class="style1" name="v45"  type="hidden" value="0" size="15" tabindex="45" id="v45" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="10%" bgcolor="#999999" class="style5"><div align="center"><input class="style1" name="v46"  type="hidden" value="0" size="15" tabindex="46" id="v46" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="10%" bgcolor="#999999" class="style5"><div align="center"><input class="style1" name="v47"  type="hidden" value="0" size="15" tabindex="47" id="v47" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button13" type="button" class="style1"  onclick="topla13();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc13" name="sonuc13" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">R</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"><input class="style1" name="v48"  type="hidden" value="0" size="15" tabindex="48" id="v48" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center">
            <input class="style1" name="v49"  type="hidden" value="0" size="15" tabindex="49" id="v49" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();"/>
          </div></td>
          <td width="11%" bgcolor="#999999" class="style5"><div align="center"><input class="style1" name="v50"  type="hidden" value="0" size="15" tabindex="50" id="v50" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();"/></div></td>
          <td width="10%" bgcolor="#999999" class="style5"><div align="center">
            <input class="style1" name="v51"  type="hidden" value="0" size="15" tabindex="51" id="v51" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();"/>
          </div></td>
          <td width="10%" bgcolor="#999999" class="style5"><div align="center">
            <input class="style1" name="v52"  type="hidden" value="0" size="15" tabindex="52" id="v52" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();"/>
          </div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button14" type="button" class="style1"  onclick="topla14();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc14" name="sonuc14" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">TOPLAM ORAL POLİO </div></th>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button15" type="button" class="style1"  onclick="topla15();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc15" name="sonuc15" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
  </table>
   <BR>
  <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >
        <tr>
         <th width="11%" rowspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">K.K.K AŞISI </div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v53"  type="text" value="0" size="15" tabindex="53" id="v53" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v54"  type="text" value="0" size="15" tabindex="54" id="v54" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v55"  type="text" value="0" size="15" tabindex="55" id="v55" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"/>
          </div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><input class="style1" name="v56"  type="text" value="0" size="15" tabindex="56" id="v56" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><input class="style1" name="v57"  type="text" value="0" size="15" tabindex="57" id="v57" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"/>
          </div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button16" type="button" class="style1"  onclick="topla16();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc16" name="sonuc16" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">R</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v58"  type="text" value="0" size="15" tabindex="58" id="v58" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v59"  type="text" value="0" size="15" tabindex="59" id="v59" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v60"  type="text" value="0" size="15" tabindex="60" id="v60" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><input class="style1" name="v61"  type="text" value="0" size="15" tabindex="61" id="v61" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><input class="style1" name="v62"  type="text" value="0" size="15" tabindex="62" id="v62" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button17" type="button" class="style1"  onclick="topla17();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc17" name="sonuc17" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">TOPLAM K.K.K. </div></th>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button18" type="button" class="style1"  onclick="topla18();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc18" name="sonuc18" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
  </table>
   <br>
  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>PPD</strong></div></th>
		  <td width="5%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center" class="style8"></div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><input class="style1" name="v63"  type="text" value="0" size="15" tabindex="63" id="v63" onchange="topla19();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v64"  type="text" value="0" size="15" tabindex="64" id="v64" onchange="topla19();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v65"  type="text" value="0" size="15" tabindex="65" id="v65" onchange="topla19();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v66"  type="text" value="0" size="15" tabindex="66" id="v66" onchange="topla19();"/></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><input class="style1" name="v67"  type="text" value="0" size="15" tabindex="67" id="v67" onchange="topla19();"/></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><input class="style1" name="v68"  type="text" value="0" size="15" tabindex="68" id="v68" onchange="topla19();"/></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button19" type="button" class="style1"  onclick="topla19();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" id="sonuc19" name="sonuc19" type="text" size="15" readonly="true" value="0"/>
          </div></td>
        </tr>
  </table>
  <br>
  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>BCG AŞISI</strong></div></th>
		  <td width="5%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center" class="style8">I</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><input class="style1" name="v69"  type="text" value="0" size="15" tabindex="69" id="v69" onchange="topla20();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v70"  type="text" value="0" size="15" tabindex="70" id="v70" onchange="topla20();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v71"  type="text" value="0" size="15" tabindex="71" id="v71" onchange="topla20();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v72"  type="text" value="0" size="15" tabindex="72" id="v72" onchange="topla20();"/></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center">
            <input class="style1" name="v73"  type="hidden" value="0" size="15" tabindex="73" id="v73" onchange="topla20();"/>
          </div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button20" type="button" class="style1"  onclick="topla20();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" id="sonuc20" name="sonuc20" type="text" size="15" readonly="true" value="0"/>
          </div></td>
        </tr>
  </table>
  
  
   <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >
     <tr>
       <th width="16%" colspan="2">&nbsp;</th>
       <th width="6%" bordercolor="#000000" class="style5" scope="col"><div align="center">BD</div></th>
       <th width="6%" bordercolor="#000000" class="style5" scope="col"><div align="center">Bİ</div></th>
       <th width="6%" bordercolor="#000000" class="style5" scope="col"><div align="center">TOPLAM</div></th>
       <th width="66%" colspan="7">&nbsp;</th>
     </tr>
   
  
   
     <tr>
       <th width="11%" rowspan="3" bordercolor="#000000" class="style5" scope="row"><div align="center">HEPATİT-B AŞISI </div></th>
       <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
       <td width="6%" bordercolor="#000000" class="style5"><div align="center">
         <input class="style1" name="v74"  type="text" value="0" size="6" tabindex="74" id="v74" onchange="toplahep();" onmousedown="topla24();" onmouseup="topla24();"/>
       </div></td>
       <td width="6%" bordercolor="#000000" class="style5"><div align="center">
         <input class="style1" name="v75"  type="text" value="0" size="6" tabindex="75" id="v75" onchange="toplahep();" onmousedown="topla24();" onmouseup="topla24();"/>
       </div></td>
       <td width="6%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="v76" name="v76" type="text" size="6" readonly="true" value="0"/></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center">
         <input class="style1" name="v77"  type="text" value="0" size="15" tabindex="77" id="v77" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();"/>
       </div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center">
         <input class="style1" name="v78"  type="text" value="0" size="15" tabindex="78" id="v78" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();"/>
       </div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center">
         <input class="style1" name="v79"  type="text" value="0" size="15" tabindex="79" id="v79" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();"/>
       </div></td>
       <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
         <input class="style1" name="v80"  type="text" value="0" size="15" tabindex="80" id="v80" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();"/>
       </div></td>
       <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
         <input class="style1" name="v81"  type="text" value="0" size="15" tabindex="81" id="v81" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();"/>
       </div></td>
       <td width="2%" bordercolor="#000000" class="style5"><input name="button21" type="button" class="style1"  onclick="topla21();" value=" = " /></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc21" name="sonuc21" type="text" size="15" readonly="true" value="0"/></div></td>
     </tr>
     <tr>
       <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">II</div></td>
       <td width="18%" colspan="3" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v82"  type="text" value="0" size="15" tabindex="82" id="v82" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v83"  type="text" value="0" size="15" tabindex="83" id="v83" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v84"  type="text" value="0" size="15" tabindex="84" id="v84" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v85"  type="text" value="0" size="15" tabindex="85" id="v85" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
       <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><input class="style1" name="v86"  type="text" value="0" size="15" tabindex="86" id="v86" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
       <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><input class="style1" name="v87"  type="text" value="0" size="15" tabindex="87" id="v87" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
       <td width="2%" bordercolor="#000000" class="style5"><input name="button22" type="button" class="style1"  onclick="topla22();" value=" = " /></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc22" name="sonuc22" type="text" size="15" readonly="true" value="0"/></div></td>
     </tr>
     <tr>
       <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">III</div></td>
       <td cwidth="18%" colspan="3" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v88"  type="text" value="0" size="15" tabindex="88" id="v88" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v89"  type="text" value="0" size="15" tabindex="89" id="v89" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v90"  type="text" value="0" size="15" tabindex="90" id="v90" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v91"  type="text" value="0" size="15" tabindex="91" id="v91" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
       <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
         <input class="style1" name="v92"  type="text" value="0" size="15" tabindex="92" id="v92" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"/>
       </div></td>
       <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center"><input class="style1" name="v93"  type="text" value="0" size="15" tabindex="93" id="v93" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
       <td width="2%" bordercolor="#000000" class="style5"><input name="button23" type="button" class="style1"  onclick="topla23();" value=" = " /></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc23" name="sonuc23" type="text" size="15" readonly="true" value="0"/></div></td>
     </tr>
     <tr>
       <th width="16%" colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">TOPLAM HEPATİT-B </div></th>
       <td width="18%" colspan="3" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
       <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
       <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
       <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
       <td width="2%" bordercolor="#000000" class="style5"><input name="button24" type="button" class="style1"  onclick="topla24();" value=" = " /></td>
       <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc24" name="sonuc24" type="text" size="15" readonly="true" value="0"/></div></td>
     </tr>
   </table>
  <BR>
  <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >
        <tr>
         <th width="11%" rowspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">HEPATİT-A AŞISI </div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">I</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v120"  type="text" value="0" size="15" tabindex="94" id="v120" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v121"  type="text" value="0" size="15" tabindex="95" id="v121" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v122"  type="text" value="0" size="15" tabindex="96" id="v122" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();"/>
          </div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
            <input class="style1" name="v123"  type="text" value="0" size="15" tabindex="97" id="v123" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();"/>
          </div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
            <input class="style1" name="v124"  type="text" value="0" size="15" tabindex="98" id="v124" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();"/>
          </div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button36" type="button" class="style1"  onclick="topla36();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc36" name="sonuc36" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">R</div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
		  	<input class="style1" name="v125"  type="text" value="0" size="15" tabindex="99" id="v125" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v126"  type="text" value="0" size="15" tabindex="100" id="v126" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v127"  type="text" value="0" size="15" tabindex="101" id="v127" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"/></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
		  	<input class="style1" name="v128"  type="text" value="0" size="15" tabindex="102" id="v128" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"/></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
            <input class="style1" name="v129"  type="text" value="0" size="15" tabindex="103" id="v129" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"/></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button37" type="button" class="style1"  onclick="topla37();" value=" = " /></td>
		  <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc37" name="sonuc37" type="text" size="15" readonly="true" value="0"/>
          </div></td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center">TOPLAM HEPATİT-A </div></th>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button38" type="button" class="style1"  onclick="topla38();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc38" name="sonuc38" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
  </table> 
   <br>
  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>SU ÇİÇEĞİ AŞISI</strong></div></th>
		  <td width="5%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center" class="style8"></div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v130"  type="text" value="0" size="15" tabindex="104" id="v130" onchange="topla39();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v131"  type="text" value="0" size="15" tabindex="105" id="v131" onchange="topla39();"/>
          </div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v132"  type="text" value="0" size="15" tabindex="106" id="v132" onchange="topla39();"/>
          </div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
            <input class="style1" name="v133"  type="text" value="0" size="15" tabindex="107" id="v133" onchange="topla39();"/>
          </div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
            <input class="style1" name="v134"  type="text" value="0" size="15" tabindex="108" id="v134" onchange="topla39();"/>
          </div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button39" type="button" class="style1"  onclick="topla39();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" id="sonuc39" name="sonuc39" type="text" size="15" readonly="true" value="0"/>
          </div></td>
        </tr>
  </table>
   <br>
  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center" class="style22">KIZAMIKÇIK AŞISI </div></th>
		  <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8"></div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"><input class="style1" name="v94"  type="hidden" value="0" size="15" tabindex="94" id="v94" onchange="topla25();"/></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"><input class="style5" name="v95"  type="hidden" value="0" size="15" tabindex="95" id="v95" onchange="topla25();"/></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
            <input class="style1" name="v96"  type="text" value="0" size="15" tabindex="109" id="v96" onchange="topla25();"/>
          </div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button25" type="button" class="style1"  onclick="topla25();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc25" name="sonuc25" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
  </table>
  <br>
  <table width="100%" border="3"  cellpadding="0" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF" class="style8" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center" class="style19">OKUL Td AŞISI </div></th>
		  <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8"></div></td>
          <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"><input class="style1" name="v97"  type="hidden" value="0" size="15" tabindex="97" id="v97" onchange="topla26();"/></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"><input class="style1" name="v98"  type="hidden" value="0" size="15" tabindex="98" id="v98" onchange="topla26();"/></div></td>
          <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri"><div align="center"><input class="style1" name="v99"  type="hidden" value="0" size="15" tabindex="99" id="v99" onchange="topla26();"/></div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
            <input class="style1" name="v100"  type="text" value="0" size="15" tabindex="110" id="v100" onchange="topla26();"/>
          </div></td>
          <td width="10%" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
            <input class="style1" name="v101"  type="text" value="0" size="15" tabindex="111" id="v101" onchange="topla26();"/>
          </div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button26" type="button" class="style1"  onclick="topla26();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc26" name="sonuc26" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
  </table>
 <br>
  <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
         <th width="11%" rowspan="4" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>DİĞER Td </strong></div></th>
		  <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8"></div></td>
          <td width="18%" bordercolor="#F0F0F0" class="style5"><div align="center"><input class="style1" name="v102"  type="text" value="0" size="15" tabindex="112" id="v102" onchange="topla27();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v103"  type="text" value="0" size="15" tabindex="113" id="v103" onchange="topla27();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v104"  type="text" value="0" size="15" tabindex="114" id="v104" onchange="topla27();"/></div></td>
          <td width="10%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v105"  type="text" value="0" size="15" tabindex="115" id="v105" onchange="topla27();"/></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v106"  type="text" value="0" size="15" tabindex="116" id="v106" onchange="topla27();"/></div></td>
          <td width="10%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" name="v107"  type="text" value="0" size="15" tabindex="117" id="v107" onchange="topla27();"/></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button27" type="button" class="style1"  onclick="topla27();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc27" name="sonuc27" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
  </table>
   <table width="100%" border="3" bordercolor="#000000" bgcolor="#FFFFFF" class="style8"  cellpadding="0" cellspacing="0" >
        <tr>
          <th width="11%" bordercolor="#000000" class="style5"><div align="center"></div></th>
          <th width="5%" bordercolor="#000000" bgcolor="#999999"  class="gri" scope="col"><div align="center"></div></th>
          <th width="36%" bordercolor="#000000" bgcolor="#999999"  class="gri" scope="col">GEBE</th>
          <th width="35%" bordercolor="#000000" bgcolor="#999999"  class="gri" scope="col">GEBE DEĞİL </th>
          <th width="2%" bordercolor="#000000" bgcolor="#999999"  class="gri" scope="col">&nbsp;</th>
          <th width="11%" bordercolor="#000000" bgcolor="#999999"  class="gri" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <th width="11%" rowspan="5" bordercolor="#000000" class="style5"><div align="center"><strong>15-49 YAŞ KADIN Td AŞISI</strong></div></th>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center"><strong>Td1</strong></div></td>
          <td bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v108"  type="text" value="0" size="15" tabindex="118" id="v108" onchange="topla28();" onmousedown="topla35();" onmouseup="topla35();"/>
          </div>            
            <div align="center"></div>            <div align="center"></div></td>
          <td bordercolor="#000000" class="style5">
            <div align="center">
              <input class="style1" name="v113"  type="text" value="0" size="15" tabindex="123" id="v113" onchange="topla29();" onmousedown="topla35();" onmouseup="topla35();"/>
          </div>            <div align="center"></div>            <div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><div align="center"><input name="button30" type="button" class="style1"  onclick="topla30();" value=" = " /></div></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc30" name="sonuc30" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">Td2</div></td>
          <td bordercolor="#000000" class="style5"><div align="center">
            <input class="style1" name="v109"  type="text" value="0" size="15" tabindex="119" id="v109" onchange="topla28();" onmousedown="topla35();" onmouseup="topla35();"/>
          </div>            <div align="center"></div>            <div align="center"></div></td>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
            <input class="style1" name="v114"  type="text" value="0" size="15" tabindex="124" id="v114" onchange="topla29();" onmousedown="topla35();" onmouseup="topla35();"/>
          </div>            <div align="center"></div>            <div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button31" type="button" class="style1"  onclick="topla31();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc31" name="sonuc31" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">Td3</div></td>
          <td bordercolor="#000000" class="style5">
            <div align="center">
              <input class="style1" name="v110"  type="text" value="0" size="15" tabindex="120" id="v110" onchange="topla28();" onmousedown="topla35();" onmouseup="topla35();"/>
          </div>            <div align="center"></div>            <div align="center"></div></td>
			<td bordercolor="#000000" bgcolor="#FFFFFF" class="style5">
                <div align="center">
                  <input class="style1" name="v115"  type="text" value="0" size="15" tabindex="125" id="v115" onchange="topla29();" onmousedown="topla35();" onmouseup="topla35();"/>
          </div>            <div align="center"></div>            <div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button32" type="button" class="style1"  onclick="topla32();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc32" name="sonuc32" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">Td4</div></td>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
            <input class="style1" name="v111"  type="text" value="0" size="15" tabindex="121" id="v111" onchange="topla28();" onmousedown="topla35();" onmouseup="topla35();"/>
          </div>            <div align="center"></div>            <div align="center"></div></td>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5">
            <div align="center">
              <input class="style1" name="v116"  type="text" value="0" size="15" tabindex="126" id="v116" onchange="topla29();" onmousedown="topla35();" onmouseup="topla35();"/>
          </div>            <div align="center"></div>            <div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button33" type="button" class="style1"  onclick="topla33();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc33" name="sonuc33" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <td width="5%" bordercolor="#000000" class="style5"><div align="center" class="style8">Td5</div></td>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5">
            <div align="center">
              <input class="style1" name="v112"  type="text" value="0" size="15" tabindex="122" id="v112" onchange="topla28();" onmousedown="topla35();" onmouseup="topla35();"/>
          </div>            <div align="center"></div>            <div align="center"></div></td><td bordercolor="#000000" bgcolor="#FFFFFF" class="style5">
                <div align="center">
                  <input class="style1" name="v117"  type="text" value="0" size="15" tabindex="127" id="v117" onchange="topla29();" onmousedown="topla35();" onmouseup="topla35();"/>
                </div>            <div align="center"></div>            <div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button34" type="button" class="style1"  onclick="topla34();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc34" name="sonuc34" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
        <tr>
          <th bordercolor="#000000" class="style5" scope="row">&nbsp;</th>
          <th width="5%" bordercolor="#000000" class="style5" scope="row">&nbsp;</th>
          <td align="center" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
            <input name="button28" type="button" class="style1"  onclick="topla28();" value=" = " />
          </div>            <div align="center"></div>            <div align="center"></div></td>
          <td align="center" bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
            <input name="button29" type="button" class="style1"  onclick="topla29();" value=" = " />
          </div>            
          <div align="center"></div>            <div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5">&nbsp;</td>
          <td width="11%" bordercolor="#000000" class="style5">&nbsp;</td>
        </tr>
        <tr>
          <th colspan="2" bordercolor="#000000" class="style5" scope="row"><div align="center"><strong>TOPLAM Td </strong></div></th>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5"><div align="center">
            <input class="style1" id="sonuc28" name="sonuc28" type="text" size="15" readonly="true" value="0"/>
          </div>            <div align="center"></div>            <div align="center"></div></td>
          <td bordercolor="#000000" bgcolor="#FFFFFF" class="style5">
            <div align="center">
              <input class="style1" id="sonuc29" name="sonuc29" type="text" size="15" readonly="true" value="0"/>
          </div>            <div align="center"></div>            <div align="center"></div></td>
          <td width="2%" bordercolor="#000000" class="style5"><input name="button35" type="button" class="style1"  onclick="topla35();" value=" = " /></td>
          <td width="11%" bordercolor="#000000" class="style5"><div align="center"><input class="style1" id="sonuc35" name="sonuc35" type="text" size="15" readonly="true" value="0"/></div></td>
        </tr>
  </table>
  
  <br>
  
  <input name="v136"  type="hidden" value="0" size="15"/>
  <input name="v137"  type="hidden" value="0" size="15"/>
  <input name="v138"  type="hidden" value="0" size="15"/>
  <input name="v139"  type="hidden" value="0" size="15"/>
  <input name="v140"  type="hidden" value="0" size="15"/>
  <input name="v141"  type="hidden" value="0" size="15"/>
  <input name="v142"  type="hidden" value="0" size="15"/>
  <input name="v143"  type="hidden" value="0" size="15"/>
  <input name="v144"  type="hidden" value="0" size="15"/>
  <input name="v145"  type="hidden" value="0" size="15"/>
  <input name="v146"  type="hidden" value="0" size="15"/>
  <input name="v147"  type="hidden" value="0" size="15"/>
  <input name="v148"  type="hidden" value="0" size="15"/>
  <input name="v149"  type="hidden" value="0" size="15"/>
  <input name="v150"  type="hidden" value="0" size="15"/>
  <input name="v151"  type="hidden" value="0" size="15"/>
  <input name="v152"  type="hidden" value="0" size="15"/>
  <input name="v153"  type="hidden" value="0" size="15"/>
  <input name="v154"  type="hidden" value="0" size="15"/>
  <input name="v155"  type="hidden" value="0" size="15"/>
  <input name="v156"  type="hidden" value="0" size="15"/>
  <input name="v157"  type="hidden" value="0" size="15"/>
  <input name="v158"  type="hidden" value="0" size="15"/>
  <input name="v159"  type="hidden" value="0" size="15"/>
  <input name="v160"  type="hidden" value="0" size="15"/>
  <input name="v161"  type="hidden" value="0" size="15"/>
  <input name="v162"  type="hidden" value="0" size="15"/>
  <input name="v163"  type="hidden" value="0" size="15"/>
  <input name="v164"  type="hidden" value="0" size="15"/>
  <input name="v165"  type="hidden" value="0" size="15"/>
  <input name="v166"  type="hidden" value="0" size="15"/>
  <input name="v167"  type="hidden" value="0" size="15"/>
  <input name="v168"  type="hidden" value="0" size="15"/>
  <input name="v169"  type="hidden" value="0" size="15"/>
  <input name="v170"  type="hidden" value="0" size="15"/>
  <input name="v171"  type="hidden" value="0" size="15"/>
  <input name="v172"  type="hidden" value="0" size="15"/>
   <?
include('con_023.php');
$sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
  $sonucak=mysql_query($sql);
    while($satir=mysql_fetch_array($sonucak))
{
//@mysql_close($conn);
$ahkod=$satir['socad'];
$ahno='Nolu Aile Hekimi';
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];


          
}
?>
  
   <table width="100%" bgcolor="#FFFFFF" class="style5"  cellpadding="0" cellspacing="0" >
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Adı Soyadı</th>
       <th class="style5"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="style1" name="v173"  type="text" value="<? echo $asead ; ?>" size="40" tabindex="173"/>
       </div></th>
       <th width="27%" rowspan="4" align="left"bordercolor="#000000" bgcolor="white" class="style5">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Adı Soyadı</th>
       <th class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="style1" name="v176"  type="text" value="<? echo $drad ; ?>" size="40" tabindex="176"/>
       </div></th>
     </tr>
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Ünvanı</th>
       <th class="style5"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="style1" name="v174"  type="text" value="<? echo $aseunv ; ?>" size="40" tabindex="174"/>
       </div></th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Ünvanı</th>
	   <th class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="style1" name="v177"  type="text" value="<? echo $ahkod.' '.$ahno ;?>" size="40" tabindex="177"/></div></th>
     </tr>
     <tr>
       <?php
   $a=Date("d/m/Y");
   ?>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <th class="style5"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input id="masktest" class="style1" name="v175"  type="text" value=<? echo $a; ?> size="40" tabindex="175"/>
       </div></th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
       <th class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input id="masktest1" class="style1" name="v178"  type="text" value="<? echo $a;?>" size="40" tabindex="178"/>
       </div></th>
     </tr>
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;İmza</th>
       <th class="style5"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;İmza</th>
       <th class="style5" width="27%"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
     </tr>
   </table>
</form>
</body>
</html>
