<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Silme Onayý</title>
</head>

<body>
<?php 
echo '<label><font size="2px" style="color:red" face="tahoma">Bu Kaydı Silmek İstediğinize Emin misiniz?</font></label>';
echo '<br>';
echo '<a href="#" tabindex="1" title="hayir" onClick="kontrol();"><img src="images/hayir.png"></a>';
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
echo '<a href="#" tabindex="2" title="evet" onClick="sil();"><img src="images/evet.png"></a>'
?>
</body>
</html>
