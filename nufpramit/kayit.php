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
<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>
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
<script language="JavaScript1.2">

//Highlight form element- © Dynamic Drive (www.dynamicdrive.com)
//For full source code, 100's more DHTML scripts, and TOS,
//visit http://www.dynamicdrive.com

var highlightcolor="yellow"

var ns6=document.getElementById&&!document.all
var previous=''
var eventobj

//Regular expression to highlight only form elements
var intended=/INPUT|TEXTAREA|SELECT|OPTION/

//Function to check whether element clicked is form element
function checkel(which){
if (which.style&&intended.test(which.tagName)){
if (ns6&&eventobj.nodeType==3)
eventobj=eventobj.parentNode.parentNode
return true
}
else
return false
}

//Function to highlight form element
function highlight(e){
eventobj=ns6? e.target : event.srcElement
if (previous!=''){
if (checkel(previous))
previous.style.backgroundColor=''
previous=eventobj
if (checkel(eventobj))
eventobj.style.backgroundColor=highlightcolor
}
else{
if (checkel(eventobj))
eventobj.style.backgroundColor=highlightcolor
previous=eventobj
}
}

</script>	
</head>

<body>
<?php
include('con_023.php');
include('piramitalanlari.php');
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
<div id="sonuckay"><form name="girdiekle" action="javascript:void(0)" method="get" onKeyUp="highlight(event)" onClick="highlight(event)">
  <table border="0" bordercolor="#000000" align="center" cellpadding="0" cellspacing="0" width="100%">
  <th class="style5" width="30%"align="left" bordercolor="white" bgcolor="#FFCC00" colspan="3"><a href=# onclick="kontrol();"><img src="images/iptal.PNG" /></a></th>
      <th class="style5" width="40%" align="center" bordercolor="white" bgcolor="blue" colspan="3"><font size="4" color="yellow"><?php echo trsuz($eklegorbaslik) ; ?></font></th>
    <th class="style5" width="30%" align="right" bordercolor="yellow" bgcolor="#FFCC00" colspan="3"><a href="#" tabindex="1" title="hayir" onclick="girdiyiekle();"><img src="images/kaydet.PNG" /></a></th>
    <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilgelen ;?>" />
      <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ilcegelen ;?>" />
      <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $ocgelen ;?>" />
      <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $yilgelen ;?>" />
      <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<? echo $aygelen ;?>" />
  </table>
	 <table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr class="style5">
	<th  width="100%" align="center" bordercolor="black" colspan="8" class="style5" bgcolor="#00FFCC"><?php echo trsuz($ygbaslik) ; ?></th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yasgrubu) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">KADIN</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ERKEK</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($sifiryas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v1" id="v1" type="text" value="0"  align="center" size="8" tabindex="1" onchange="toplayg1();" onkeydown="toplayg1();" onmouseout="toplayg1();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v19" id="v19" type="text" value="0"  align="center" size="8" tabindex="19" onchange="toplayg19();" onkeydown="toplayg1();" onmouseout="toplayg1();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg1" id="sonucyg1" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($besyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v2" id="v2" type="text" value="0"  align="center" size="8" tabindex="2" onchange="toplayg2();" onkeydown="toplayg2();" onmouseout="toplayg2();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v20" id="v20" type="text" value="0"  align="center" size="8" tabindex="20" onchange="toplayg2();" onkeydown="toplayg2();" onmouseout="toplayg2();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg2" id="sonucyg2" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($onyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v3" id="v3" type="text" value="0"  align="center" size="8" tabindex="3" onchange="toplayg3();" onkeydown="toplayg3();" onmouseout="toplayg3();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v21" id="v21" type="text" value="0"  align="center" size="8" tabindex="21" onchange="toplayg3();" onkeydown="toplayg3();" onmouseout="toplayg3();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg3" id="sonucyg3" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($onbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v4" id="v4" type="text" value="0"  align="center" size="8" tabindex="4" onchange="toplayg4();" onkeydown="toplayg4();" onmouseout="toplayg4();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v22" id="v22" type="text" value="0"  align="center" size="8" tabindex="22" onchange="toplayg4();" onkeydown="toplayg4();" onmouseout="toplayg4();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg4" id="sonucyg4" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yirmiyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v5" id="v5" type="text" value="0"  align="center" size="8" tabindex="5" onchange="toplayg5();" onkeydown="toplayg5();" onmouseout="toplayg5();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v23" id="v23" type="text" value="0"  align="center" size="8" tabindex="23" onchange="toplayg5();" onkeydown="toplayg5();" onmouseout="toplayg5();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg5" id="sonucyg5" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yirmibesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v6" id="v6" type="text" value="0"  align="center" size="8" tabindex="6" onchange="toplayg6();" onkeydown="toplayg6();" onmouseout="toplayg6();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v24" id="v24" type="text" value="0"  align="center" size="8" tabindex="24" onchange="toplayg6();" onkeydown="toplayg6();" onmouseout="toplayg6();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg6" id="sonucyg6" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($otuzyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v7" id="v7" type="text" value="0"  align="center" size="8" tabindex="7" onchange="toplayg7();" onkeydown="toplayg7();" onmouseout="toplayg7();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v25" id="v25" type="text" value="0"  align="center" size="8" tabindex="25" onchange="toplayg7();" onkeydown="toplayg7();" onmouseout="toplayg7();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg7" id="sonucyg7" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($otuzbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v8" id="v8" type="text" value="0"  align="center" size="8" tabindex="8" onchange="toplayg8();" onkeydown="toplayg8();" onmouseout="toplayg8();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v26" id="v26" type="text" value="0"  align="center" size="8" tabindex="26" onchange="toplayg8();" onkeydown="toplayg8();" onmouseout="toplayg8();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg8" id="sonucyg8" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($kirkyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v9" id="v9" type="text" value="0"  align="center" size="8" tabindex="9" onchange="toplayg9();" onkeydown="toplayg9();" onmouseout="toplayg9();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v27" id="v27" type="text" value="0"  align="center" size="8" tabindex="27" onchange="toplayg9();" onkeydown="toplayg9();" onmouseout="toplayg9();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg9" id="sonucyg9" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($kirkbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v10" id="v10" type="text" value="0"  align="center" size="8" tabindex="10" onchange="toplayg10();" onkeydown="toplayg10();" onmouseout="toplayg10();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v28" id="v28" type="text" value="0"  align="center" size="8" tabindex="28" onchange="toplayg10();" onkeydown="toplayg10();" onmouseout="toplayg10();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg10" id="sonucyg10" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($elliyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v11" id="v11" type="text" value="0"  align="center" size="8" tabindex="11" onchange="toplayg11();" onkeydown="toplayg11();" onmouseout="toplayg11();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v29" id="v29" type="text" value="0"  align="center" size="8" tabindex="29" onchange="toplayg11();" onkeydown="toplayg11();" onmouseout="toplayg11();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg11" id="sonucyg11" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($ellibesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v12" id="v12" type="text" value="0"  align="center" size="8" tabindex="12" onchange="toplayg12();" onkeydown="toplayg12();" onmouseout="toplayg12();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v30" id="v30" type="text" value="0"  align="center" size="8" tabindex="30" onchange="toplayg12();" onkeydown="toplayg12();" onmouseout="toplayg12();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg12" id="sonucyg12" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($atmisyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v13" id="v13" type="text" value="0"  align="center" size="8" tabindex="13" onchange="toplayg13();" onkeydown="toplayg13();" onmouseout="toplayg13();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v31" id="v31" type="text" value="0"  align="center" size="8" tabindex="31" onchange="toplayg13();" onkeydown="toplayg13();" onmouseout="toplayg13();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg13" id="sonucyg13" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($atmisbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v14" id="v14" type="text" value="0"  align="center" size="8" tabindex="14" onchange="toplayg14();" onkeydown="toplayg14();" onmouseout="toplayg14();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v32" id="v32" type="text" value="0"  align="center" size="8" tabindex="32" onchange="toplayg14();" onkeydown="toplayg14();" onmouseout="toplayg14();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg14" id="sonucyg14" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yetmisyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v15" id="v15" type="text" value="0"  align="center" size="8" tabindex="15" onchange="toplayg15();" onkeydown="toplayg15();" onmouseout="toplayg15();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v33" id="v33" type="text" value="0"  align="center" size="8" tabindex="33" onchange="toplayg15();" onkeydown="toplayg15();" onmouseout="toplayg15();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg15" id="sonucyg15" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>    
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($yetmisbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v16" id="v16" type="text" value="0"  align="center" size="8" tabindex="16" onchange="toplayg16();" onkeydown="toplayg16();" onmouseout="toplayg16();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v34" id="v34" type="text" value="0"  align="center" size="8" tabindex="34" onchange="toplayg16();" onkeydown="toplayg16();" onmouseout="toplayg16();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg16" id="sonucyg16" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($seksenyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v17" id="v17" type="text" value="0"  align="center" size="8" tabindex="17" onchange="toplayg17();" onkeydown="toplayg17();" onmouseout="toplayg17();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v35" id="v35" type="text" value="0"  align="center" size="8" tabindex="35" onchange="toplayg17();" onkeydown="toplayg17();" onmouseout="toplayg17();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg17" id="sonucyg17" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($seksenbesyas) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v18" id="v18" type="text" value="0"  align="center" size="8" tabindex="18" onchange="toplayg18();" onkeydown="toplayg18();" onmouseout="toplayg18();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v36" id="v36" type="text" value="0"  align="center" size="8" tabindex="36" onchange="toplayg18();" onkeydown="toplayg18();" onmouseout="toplayg18();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg18" id="sonucyg18" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="ygkadin" id="ygkadin" type="text" value="0"  align="center" size="8" tabindex="" onchange="toplaygk();" onkeydown="toplaygk();" onmouseout="toplaygk();" onclick="toplayg();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="ygerkek" id="ygerkek" type="text" value="0"  align="center" size="8" tabindex="" onchange="toplayge();" onkeydown="toplayge();" onmouseout="toplayge();" onclick="toplayg();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucyg" id="sonucyg" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>                            
  </table>
  <br />
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr class="style5">
	<th  width="100%" align="center" bordercolor="black" colspan="8" class="style5" bgcolor="#00FFCC"><?php echo trsuz($mhalbaslik) ; ?></th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($medenihali) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">KADIN</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ERKEK</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhcocuk) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v37" id="v37" type="text" value="0"  align="center" size="8" tabindex="37" onchange="toplamh1();" onkeydown="toplamh1();" onmouseout="toplamh1();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v42" id="v42" type="text" value="0"  align="center" size="8" tabindex="42" onchange="toplamh1();" onkeydown="toplamh1();" onmouseout="toplamh1();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucmh1" id="sonucmh1" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">BEKAR </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v38" id="v38" type="text" value="0"  align="center" size="8" tabindex="38" onchange="toplamh2();" onkeydown="toplamh2();" onmouseout="toplamh2();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v43" id="v43" type="text" value="0"  align="center" size="8" tabindex="43" onchange="toplamh2();" onkeydown="toplamh2();" onmouseout="toplamh2();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucmh2" id="sonucmh2" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhevli) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v39" id="v39" type="text" value="0"  align="center" size="8" tabindex="39" onchange="toplamh3();" onkeydown="toplamh3();" onmouseout="toplamh3();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v44" id="v44" type="text" value="0"  align="center" size="8" tabindex="44" onchange="toplamh3();" onkeydown="toplamh3();" onmouseout="toplamh3();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucmh3" id="sonucmh3" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhbosanmis) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v40" id="v40" type="text" value="0"  align="center" size="8" tabindex="40" onchange="toplamh4();" onkeydown="toplamh4();" onmouseout="toplamh4();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v45" id="v45" type="text" value="0"  align="center" size="8" tabindex="45" onchange="toplamh4();" onkeydown="toplamh4();" onmouseout="toplamh4();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucmh4" id="sonucmh4" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($mhesiolmus) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v41" id="v41" type="text" value="0"  align="center" size="8" tabindex="41" onchange="toplamh5();" onkeydown="toplamh5();" onmouseout="toplamh5();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v46" id="v46" type="text" value="0"  align="center" size="8" tabindex="46" onchange="toplamh5();" onkeydown="toplamh5();" onmouseout="toplamh5();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucmh5" id="sonucmh5" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="mhkadin" id="mhkadin" type="text" value="0"  align="center" size="8" tabindex="" onchange="toplamhk();" onkeydown="toplamhk();" onmouseout="toplamhk();" onclick="toplamh();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="mherkek" id="mherkek" type="text" value="0"  align="center" size="8" tabindex="" onchange="toplamhe();" onkeydown="toplamhe();" onmouseout="toplamhe();" onclick="toplamh();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucmh" id="sonucmh" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>                            
  </table>
<BR />
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr class="style5">
	<th  width="100%" align="center" bordercolor="black" colspan="8" class="style5" bgcolor="#00FFCC"><?php echo trsuz($odurbaslik) ; ?></th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($ogrenimdurumu) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">KADIN</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ERKEK</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odocd) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v47" id="v47" type="text" value="0"  align="center" size="8" tabindex="47" onchange="toplaod1();" onkeydown="toplaod1();" onmouseout="toplaod1();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v54" id="v54" type="text" value="0"  align="center" size="8" tabindex="54" onchange="toplaod1();" onkeydown="toplaod1();" onmouseout="toplaod1();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod1" id="sonucod1" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odoyd) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v48" id="v48" type="text" value="0"  align="center" size="8" tabindex="48" onchange="toplaod2();" onkeydown="toplaod2();" onmouseout="toplaod2();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v55" id="v55" type="text" value="0"  align="center" size="8" tabindex="55" onchange="toplaod2();" onkeydown="toplaod2();" onmouseout="toplaod2();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod2" id="sonucod2" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">OKUR YAZAR</th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v49" id="v49" type="text" value="0"  align="center" size="8" tabindex="49" onchange="toplaod3();" onkeydown="toplaod3();" onmouseout="toplaod3();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v56" id="v56" type="text" value="0"  align="center" size="8" tabindex="56" onchange="toplaod3();" onkeydown="toplaod3();" onmouseout="toplaod3();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod3" id="sonucod3" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odilk) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v50" id="v50" type="text" value="0"  align="center" size="8" tabindex="50" onchange="toplaod4();" onkeydown="toplaod4();" onmouseout="toplaod4();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v57" id="v57" type="text" value="0"  align="center" size="8" tabindex="57" onchange="toplaod4();" onkeydown="toplaod4();" onmouseout="toplaod4();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod4" id="sonucod4" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">ORTAOKUL </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v51" id="v51" type="text" value="0"  align="center" size="8" tabindex="51" onchange="toplaod5();" onkeydown="toplaod5();" onmouseout="toplaod5();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v58" id="v58" type="text" value="0"  align="center" size="8" tabindex="58" onchange="toplaod5();" onkeydown="toplaod5();" onmouseout="toplaod5();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod5" id="sonucod5" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>  
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odlise) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v52" id="v52" type="text" value="0"  align="center" size="8" tabindex="52" onchange="toplaod6();" onkeydown="toplaod6();" onmouseout="toplaod6();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v59" id="v59" type="text" value="0"  align="center" size="8" tabindex="59" onchange="toplaod6();" onkeydown="toplaod6();" onmouseout="toplaod6();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod6" id="sonucod6" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>    
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC"><?php echo trsuz($odyo) ; ?></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="v53" id="v53" type="text" value="0"  align="center" size="8" tabindex="53" onchange="toplaod7();" onkeydown="toplaod7();" onmouseout="toplaod7();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="v60" id="v60" type="text" value="0"  align="center" size="8" tabindex="60" onchange="toplaod7();" onkeydown="toplaod7();" onmouseout="toplaod7();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod7" id="sonucod7" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>    
<tr class="style5">
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="#CEF6EC">TOPLAM </th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="pink"><input class="style1" name="odkadin" id="odkadin" type="text" value="0"  align="center" size="8" tabindex="" onchange="toplaodk();" onkeydown="toplaodk();" onmouseout="toplaodk();" onclick="toplaod();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="cyan"><input class="style1" name="oderkek" id="oderkek" type="text" value="0"  align="center" size="8" tabindex="" onchange="toplaode();" onkeydown="toplaode();" onmouseout="toplaode();" onclick="toplaod();"/></th>
  <th  width="25%" align="center" bordercolor="white" class="style5" bgcolor="YELLOW"><input class="style1" name="sonucod" id="sonucod" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>                            
  </table>  
  <input name="v61"  type="hidden" value="0" size="15"/>
  <input name="v62"  type="hidden" value="0" size="15"/>
  <input name="v63"  type="hidden" value="0" size="15"/>
  <input name="v64"  type="hidden" value="0" size="15"/>
  <input name="v65"  type="hidden" value="0" size="15"/>
  <input name="v66"  type="hidden" value="0" size="15"/>
  <input name="v67"  type="hidden" value="0" size="15"/>
  <input name="v68"  type="hidden" value="0" size="15"/>
  <input name="v69"  type="hidden" value="0" size="15"/>
  <input name="v70"  type="hidden" value="0" size="15"/>
  <input name="v71"  type="hidden" value="0" size="15"/>
  <input name="v72"  type="hidden" value="0" size="15"/>
  <input name="v73"  type="hidden" value="0" size="15"/>
  <input name="v74"  type="hidden" value="0" size="15"/>
  <input name="v75"  type="hidden" value="0" size="15"/>
  <input name="v76"  type="hidden" value="0" size="15"/>
  <input name="v77"  type="hidden" value="0" size="15"/>
  <input name="v78"  type="hidden" value="0" size="15"/>
  <input name="v79"  type="hidden" value="0" size="15"/>
  <input name="v80"  type="hidden" value="0" size="15"/>
  <input name="v81"  type="hidden" value="0" size="15"/>
  <input name="v82"  type="hidden" value="0" size="15"/>
  <input name="v83"  type="hidden" value="0" size="15"/>
  <input name="v84"  type="hidden" value="0" size="15"/>
  <input name="v85"  type="hidden" value="0" size="15"/>
  <input name="v86"  type="hidden" value="0" size="15"/>
  <input name="v87"  type="hidden" value="0" size="15"/>
  <input name="v88"  type="hidden" value="0" size="15"/>
  <input name="v89"  type="hidden" value="0" size="15"/>
  <input name="v90"  type="hidden" value="0" size="15"/>
  <input name="v91"  type="hidden" value="0" size="15"/>
  <input name="v92"  type="hidden" value="0" size="15"/>
  <input name="v93"  type="hidden" value="0" size="15"/>
  <input name="v94"  type="hidden" value="0" size="15"/>
  <input name="v95"  type="hidden" value="0" size="15"/>
  <input name="v96"  type="hidden" value="0" size="15"/>
  <input name="v97"  type="hidden" value="0" size="15"/>
  <input name="v98"  type="hidden" value="0" size="15"/>
  <input name="v99"  type="hidden" value="0" size="15"/>
  <input name="v100"  type="hidden" value="0" size="15"/>
  <input name="v101"  type="hidden" value="0" size="15"/>
  <input name="v102"  type="hidden" value="0" size="15"/>
  <input name="v103"  type="hidden" value="0" size="15"/>
  <input name="v104"  type="hidden" value="0" size="15"/>
  <input name="v105"  type="hidden" value="0" size="15"/>
  <input name="v106"  type="hidden" value="0" size="15"/>
  <input name="v107"  type="hidden" value="0" size="15"/>
  <input name="v108"  type="hidden" value="0" size="15"/>
  <input name="v109"  type="hidden" value="0" size="15"/>
  <input name="v110"  type="hidden" value="0" size="15"/>
  <input name="v111"  type="hidden" value="0" size="15"/>
  <input name="v112"  type="hidden" value="0" size="15"/>
  <input name="v113"  type="hidden" value="0" size="15"/>
  <input name="v114"  type="hidden" value="0" size="15"/>
  <input name="v115"  type="hidden" value="0" size="15"/>
  <input name="v116"  type="hidden" value="0" size="15"/>
  <input name="v117"  type="hidden" value="0" size="15"/>
  <input name="v118"  type="hidden" value="0" size="15"/>
  <input name="v119"  type="hidden" value="0" size="15"/>
  <input name="v120"  type="hidden" value="0" size="15"/>
  <input name="v121"  type="hidden" value="0" size="15"/>
  <input name="v122"  type="hidden" value="0" size="15"/>
  <input name="v123"  type="hidden" value="0" size="15"/>
  <input name="v124"  type="hidden" value="0" size="15"/>
  <input name="v125"  type="hidden" value="0" size="15"/>
  <input name="v126"  type="hidden" value="0" size="15"/>
  <input name="v127"  type="hidden" value="0" size="15"/>
  <input name="v128"  type="hidden" value="0" size="15"/>
  <input name="v129"  type="hidden" value="0" size="15"/>
  <input name="v130"  type="hidden" value="0" size="15"/>
  <input name="v131"  type="hidden" value="0" size="15"/>
  <input name="v132"  type="hidden" value="0" size="15"/>
  <input name="v133"  type="hidden" value="0" size="15"/>
  <input name="v134"  type="hidden" value="0" size="15"/>
  <input name="v135"  type="hidden" value="0" size="15"/>
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
if(substr($ocgelen,-3)=='TSM'){
$ahno='Sorumlu Tabibi';
}elseif(substr($ocgelen,-3)=='HSM'){
$ahno='Birim Sorumlusu';
}else{
$ahno='Nolu Aile Hekimi';
}
$drad=$satir['dradi'];
$asead=$satir['aseadi'];
$aseunv=$satir['aseunvan'];


          
}
?>
  <BR />
   <table width="100%" bgcolor="#FFFFFF" class="style5"  cellpadding="0" cellspacing="0" >
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($duzadbaslik) ; ?></th>
       <th class="style5"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="style1" name="v173"  type="text" value="<? echo trsuz($asead) ; ?>" size="40" tabindex="173"/>
       </div></th>
       <th width="27%" rowspan="4" align="left"bordercolor="#000000" bgcolor="white" class="style5">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($onadbaslik) ; ?></th>
       <th class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="style1" name="v176"  type="text" value="<? echo trsuz($drad) ; ?>" size="40" tabindex="176"/>
       </div></th>
     </tr>
     <tr>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($duzunbaslik) ; ?></th>
       <th class="style5"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="style1" name="v174"  type="text" value="<? echo trsuz($aseunv) ; ?>" size="40" tabindex="174"/>
       </div></th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($onunbaslik) ; ?></th>
	   <th class="style5" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
         <input class="style1" name="v177"  type="text" value="<? echo trsuz($ahkod).' '.trsuz($ahno) ;?>" size="40" tabindex="177"/></div></th>
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
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($duzimzabaslik) ; ?></th>
       <th class="style5"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
       <th class="style5" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;<?php echo trsuz($onimzabaslik) ; ?></th>
       <th class="style5" width="27%"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
     </tr>
   </table>
</form>
</body>
</html>
