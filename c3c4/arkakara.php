<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="arkakara.css" rel="stylesheet" type="text/css"/>

<script language="JavaScript" src="arkakara.js" type="text/javascript">
</script>	
</head>

<body>
<p>Giris yapmak için 
		<a href="javascript:goster();">buraya basinz</a></p>
		<div id="sifre" class="giris_zemin">
		  
		  <form action="onay.php" method="post" name="giris" id="giris">
		    <table width="100" border="0">
              
                <?php 
echo '<label><font size="2px" style="color:red" face="tahoma">Bu Kaydi Silmek Istediginize Emin misiniz?</font></label>';
echo '<br>';
echo '<a href="#" tabindex="1" title="hayir" onClick="kontrol();"><img src="images/hayir.png"></a>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="#" tabindex="2" title="evet" onClick="sil();"><img src="images/evet.png"></a>'
?>
              
           </table>
	
		  </form>
		</div>
	<div id="fon" class="arka_fon"></div>
</body>
</html>
