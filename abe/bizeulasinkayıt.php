<?
$conn=mysql_connect("localhost","root","malika");
if($conn){
if(mysql_select_db("katalog",$conn)){
$SQLInsert="insert into bizeulasin(AdSoyad,EmailAdresi,Dusunceniz) values
('".$_GET["AdSoyad"]."',
'".$_GET["EmailAdresi"]."',
 '".$_GET["Dusunceniz"]."')";
 if(mysql_query($SQLInsert)){
 echo "<br><br>Görüþünüz eklendi.Teþekkür ederiz.<br><br>";
 }else{
 echo "<br><br>Görüþünüz eklenenmedi.Tekrar deneyiniz.<br><br>";
 }
 }
 }
 @mysql_close($conn);
 ?>