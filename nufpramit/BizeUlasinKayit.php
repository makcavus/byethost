<?
$conn=mysql_connect("localhost","root","malika");
if($conn){
if(mysql_select_db("katalog",$conn)){
$SQLInsert="insert into bizeulasin(adsoyad,emailadresi,dusunceniz) values
('".$_POST["AdSoyad"]."',
'".$_POST["EmailAdresi"]."',
 '".$_POST["Dusunceniz"]."')";
 if(mysql_query($SQLInsert)){
 echo "<br><br>Görüþünüz eklendi.Teþekkür ederiz.<br><br>";
 }else{
 echo "<br><br>Görüþünüz eklenenmedi.Tekrar deneyiniz.<br><br>";
 }
 }
 }
 @mysql_close($conn);
 ?>