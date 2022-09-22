<?php
echo '<div class="renk">';
echo'<table bgcolor="#000000" width="100%" class="table table-sm table-responsive-sm table-bordered">';

echo'<tr>';
  echo '<th width="28%" align="center" class="renk" style="background-color:yellow;border-color:black;">&nbsp;&nbsp;<font color="#006600" style="font-weight:bold">Sağlık Kurumunun Adı</font></th>';
  echo '<th width="42%"align="center"  class="renk" style="background-color:yellow;border-color:black;">&nbsp;&nbsp;<font color="#006600" style="font-weight:bold">Adresi</font></th>';
  echo '<th width="13%"align="center"  class="renk" style="background-color:yellow;border-color:black;">&nbsp;&nbsp;<font color="#006600" style="font-weight:bold">Telefon</font></th>';
	echo '<th width="13%"align="center"  class="renk" style="background-color:yellow;border-color:black;">&nbsp;&nbsp;<font color="#006600" style="font-weight:bold">Faks</font></th>';
	echo '<th width="1%"align="center"  class="renk" style="background-color:yellow;border-color:black;"><font color="#006600" style="font-weight:bold">mail</font></th>';
	echo '<th width="1%"align="center"  class="renk" style="background-color:yellow;border-color:black;"><font color="#006600" style="font-weight:bold">web</font></th>';
	echo '<th width="2%"align="center"  class="renk" style="background-color:yellow;border-color:black;"><font color="#006600" style="font-weight:bold">Yeri</font></th>';
  echo '</tr>';
for($i=0; $i<$sonuc; $i++)
{
    while($array_galeri=mysqli_fetch_array($sorgu)){    
    if($i%1==0) //yan yana ka� resim istiyorsan 2 yarine o rakami yaz
    {
	?>
        <tr bgcolor="#CCFFCC" onMouseover="this.bgColor='#dcdcdc';" onMouseout="this.bgColor='#CCFFCC';">
		<?php
    }
        echo'<td width="28%" align="left" style="border-color:black;"><i class="fa fa-building-o" aria-hidden="true"></i>&nbsp;
            '.$array_galeri['adi'].' 
        </td>';
		echo'<td width="42%" align="left" style="border-color:black;"><i class="fa fa-map-signs fa-sm" aria-hidden="true"></i>&nbsp;
            '.$array_galeri['adres'].' 
        </td>';
		echo'<td width="13%" align="left" style="border-color:black;"><i class="fa fa-phone fa-sm" aria-hidden="true"></i>&nbsp;
            '.$array_galeri['telefon'].' 
        </td>';
		echo'<td width="13%" align="left" style="border-color:black;"><i class="fa fa-fax fa-sm" aria-hidden="true"></i>&nbsp;
            '.$array_galeri['fax'].' 
        </td>';
		if($array_galeri['email']==""){
			$email='...';
			}else{
			$email='<a href='.$array_galeri['email'].' title=' .$array_galeri['email'].'><img align="center" alt="Ana Sayfa" src="images/email.png"></a>';
			}
		echo'<td width="1%" align="left" style="border-color:black;">&nbsp;
            '.$email.'
        </td>';
		if($array_galeri['web']==""){
			$web='...';
			}else{
			$web='<a href='.$array_galeri['web'].' title=' .$array_galeri['web'].'><img align="center" alt="Ana Sayfa" src="images/web.png"></a>';
			}
		echo'<td width="1%" align="left" style="border-color:black;">&nbsp;
            '.$web.'
        </td>';
		$haritayolu='harita.php?adrid=' ;
		$haritaidi=$array_galeri['adrid'] ;
		
		if($array_galeri['harita']==""){
		
		?>
		<td width="2%" align="left" style="border-color:black;">&nbsp;&nbsp;...</td>
		<?php
				}else{
 		?>
		<td width="2%" align="left" style="border-color:black;"><a href="javascript://"onclick="javascript:window.open('<?php echo $haritayolu.''.$haritaidi; ?>','HB','toolbar=1, location=0, scrollbars=0,resizable=0, width=605,height=455');"><img align="center" alt="Ana Sayfa" src="images/konum.png"></a></td>

<?php
				}
     if($i%2==1) //burayida yan yana ka� resim istiyorsan onun  1 eksigine esitle yani 3 sira i�in $i%3==2 gibi
    {
        echo'</tr>';
    }
}
echo'
</table>';  
echo '</div>';
}
?>