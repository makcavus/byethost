<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}
include('piramitalanlari.php');
?>
<table>
<th class="style6" width="100%" align="center" bordercolor="white" bgcolor="white"><div style="font-family:Arial, Helvetica, sans-serif","font-size:14px,border-style:none" id="sonuc">
<form name="yil" id="yil" action="yilkekle.php" method="get">
<input type="text" name="yeniyil" id="yeniyil" value="<?php echo date("Y"); ?>" align="middle" size="3" />
<input name="submit" id="submit" type="submit"  style="color:#000000;font-weight:bold;background:#66FF00" onmouseover="this.style.color='orange'" onmouseout="this.style.color='black'" value="<?php echo trsuz($yilekle) ; ?>"/>
</form>
</div></th>
</table>
