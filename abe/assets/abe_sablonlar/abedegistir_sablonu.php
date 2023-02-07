<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
  <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
  <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
  <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
  <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
  <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
  <tr>
    <th  width="100%" align="center"bordercolor="white" colspan="12"><font size="3"><?php echo $frmbaslik; ?></font></th>
  </tr>
  <tr>
    <th  width="100%"align="center" bordercolor="white" colspan="12">&nbsp;</th>
  </tr>
  <tr>
    <th  width="12%" align="left"bordercolor="white" colspan="1"><?php echo $ililcebaslik; ?></th>
    <th  width="88%"align="left" bordercolor="white" colspan="11"><?php echo '<font size="3" family="Arial">'.$ilinadi.'-'.$ilceninadi.'</font>' ;?></th>
  </tr>
  <tr>
    <th  width="12%" align="left"bordercolor="white" colspan="1"><?php echo $kurumbaslik; ?></th>
    <th  width="88%"align="left" bordercolor="white" colspan="11"><?php echo '<font size="3" family="Arial">'.$kurum.'</font>' ;?></th>
  </tr>
  <tr>
    <th  width="12%" align="left"bordercolor="white"colspan="1"><?php echo $donembaslik; ?></th>
    <th  width="88%"align="left" bordercolor="white" colspan="11"><?php echo '<font size="3" family="Arial">'.$xaygelentam.'</font>' ;?></th>
  </tr>
  <tr>
    <th  width="100%"align="center" bordercolor="white" colspan="12">&nbsp;</th>
  </tr>
  <tr>
    <th  width="84%" align="center" class="style5" bgcolor="white" colspan="10"><font face="Arial" size="3"><?php echo $abevakabaslik; ?></font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="3">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="36%"align="center" class="style5" bgcolor="#CEF6EC" colspan="4" rowspan="2"><font face="Arial" size="3"><?php echo $hastsinifbaslik; ?></font></th>
    <th  width="16%"align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="3">A09</font><br />
        <font face="Arial" size="2"><?php echo $addiarebaslik; ?></font><br />
      <font face="Arial" size="2"><?php echo $adenfbaslik; ?></font><br />
      <font face="Arial" size="2">tahmin edilen </font></th>
    <th  width="16%"align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="3">R11</font><br />
        <font face="Arial" size="2">&nbsp;</font><br />
      <font face="Arial" size="2"><?php echo $ronbirbaslik; ?></font><br />
      <font face="Arial" size="2">&nbsp;</font></th>
    <th  width="16%"align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="3">K52</font><br />
        <font face="Arial" size="2">&nbsp;</font><br />
      <font face="Arial" size="2"><?php echo $keienfbaslik; ?></font><br />
      <font face="Arial" size="2"><?php echo $keigastbaslik; ?></font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="3">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo $sifiryasbaslik; ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo $besyasbaslik; ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo $sifiryasbaslik; ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo $besyasbaslik; ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo $sifiryasbaslik; ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#CEF6EC" colspan="1"><font face="Arial" size="2"><?php echo $besyasbaslik; ?></font></th>
    <th  width="8%"align="center" bgcolor="white" colspan="1"><font face="Arial" size="2">&nbsp;</font></th>
    <th  width="8%"align="center" bgcolor="white" colspan="1"><font face="Arial" size="2">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="36%"align="center" class="style5" bgcolor="#CEF6EC" colspan="4"><font face="Arial" size="3"><?php echo $vakasaybaslik; ?></font></th>
    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><input class="style1" name="v1" id="v1" type="text" value="<?php echo $verim1; ?>" size="5" tabindex="1" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><input class="style1" name="v2" id="v2" type="text" value="<?php echo $verim2; ?>" size="5" tabindex="2" onchange="topla1();" onkeyup="topla1();" onmouseout="topla1();"/></th>
    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><input class="style1" name="v3" id="v3" type="text" value="<?php echo $verim3; ?>" size="5" tabindex="3" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><input class="style1" name="v4" id="v4" type="text" value="<?php echo $verim4; ?>" size="5" tabindex="4" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><input class="style1" name="v5" id="v5" type="text" value="<?php echo $verim5; ?>" size="5" tabindex="5" onchange="topla3();" onkeydown="topla3();" onmouseout="topla3();"/></th>
    <th  width="8%"align="center" class="style5" bgcolor="#FFFFCC" colspan="1"><input class="style1" name="v6" id="v6" type="text" value="<?php echo $verim6; ?>" size="5" tabindex="6" onchange="topla3();" onkeydown="topla3();" onmouseout="topla3();"/></th>
    <th  width="8%"align="center" bgcolor="white" colspan="1"><font face="Arial" size="3">&nbsp;</font></th>
    <th  width="8%"align="center" bgcolor="white" colspan="1"><font face="Arial" size="2">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="100%"align="center" bordercolor="white" colspan="12">&nbsp;</th>
  </tr>
  <tr>
    <th  width="100%" align="center" class="style5" bgcolor="white" colspan="12"><font face="Arial" size="3"><?php echo $labbaslik; ?></font></th>
  </tr>
  <tr>
    <th  width="20%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $kulturbaslik; ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Vibrio cholerae (A00)</font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Salmonella sp.(A02)</font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Shigella sp.(A03)</font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Enterohemorrhagic</font><br />
        <font face="Arial" size="2">Escherichia Coli (A04.3)</font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Campylobacter (A04.5)</font></th>
  </tr>
  <tr>
    <th  width="20%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v7" id="v7" type="text" value="<?php echo $verim7; ?>" size="5" tabindex="7"/></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v8" id="v8" type="text" value="<?php echo $verim8; ?>" size="5" tabindex="8"/></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v9" id="v9" type="text" value="<?php echo $verim9; ?>" size="5" tabindex="9"/></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v10" id="v10" type="text" value="<?php echo $verim10; ?>" size="5" tabindex="10"/></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v11" id="v11" type="text" value="<?php echo $verim11; ?>" size="5" tabindex="11"/></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v12" id="v12" type="text" value="<?php echo $verim12; ?>" size="5" tabindex="12"/></th>
  </tr>
  <tr>
    <th  width="20%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $parazitbaslik; ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Entamoeba histolytica (A06)</font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2">Cryptosporodium (A07.2)</font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2"><input class="style1" name="v21" id="v21" type="hidden" value="<?php echo $verim21; ?>" size="5"/>
    </font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2"><input class="style1" name="v22" id="v22" type="hidden" value="<?php echo $verim22; ?>" size="5"/></font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2"><input class="style1" name="v23" id="v23" type="hidden" value="<?php echo $verim23; ?>" size="5"/></font></th>
  </tr>
  <tr>
    <th  width="20%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v13" id="v13" type="text" value="<?php echo $verim13; ?>" size="5" tabindex="13"/></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v14" id="v14" type="text" value="<?php echo $verim14; ?>" size="5" tabindex="14"/></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v15" id="v15" type="text" value="<?php echo $verim15; ?>" size="5" tabindex="15"/></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2">&nbsp;</font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2">&nbsp;</font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="20%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $viralbaslik; ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $rotabaslik; ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $norobaslik; ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $adenobaslik; ?></font></th>
    <th  width="16%" align="center" class="style5" bgcolor="#CEF6EC" colspan="2"><font face="Arial" size="2"><?php echo $hepabaslik; ?></font></th>
    <th  width="16%" align="center" bgcolor="white" colspan="2"><font face="Arial" size="2">&nbsp;</font></th>
  </tr>
  <tr>
    <th  width="20%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v16" id="v16" type="text" value="<?php echo $verim16; ?>" size="5" tabindex="16"/></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v17" id="v17" type="text" value="<?php echo $verim17; ?>" size="5" tabindex="17"/></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v18" id="v18" type="text" value="<?php echo $verim18; ?>" size="5" tabindex="18"/></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v19" id="v19" type="text" value="<?php echo $verim19; ?>" size="5" tabindex="19"/></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v20" id="v20" type="text" value="<?php echo $verim20; ?>" size="5" tabindex="20"/></th>
    <th  width="16%"align="center" bgcolor="white" colspan="2">&nbsp;</th>
  </tr>
  <tr>
    <th  width="100%"align="center" bordercolor="white" colspan="12">&nbsp;</th>
  </tr>
    <tr>
    <th  width="36%" bgcolor="white" colspan="4" rowspan="6">&nbsp;</th>
  </tr>
  <tr>
    <th  width="24%" align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><?php echo $duzbaslik; ?></th>
    <th  width="8%" bgcolor="white" colspan="1" rowspan="5">&nbsp;</th>
    <th  width="8%" align="center" class="style5" bgcolor="#CEF6EC" colspan="3">ONAYLAYAN</th>
	<th  width="8%" bgcolor="white" colspan="1" rowspan="5">&nbsp;</th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzadbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v173"  type="text" onkeyup="esitmigebedvit();" value="<?php echo $asead ; ?>" size="30" tabindex="173"/></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onadbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v176"  type="text" value="<?php echo $drad ; ?>" size="30" tabindex="176"/></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzunbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v174"  type="text" value="<?php echo $aseunv ; ?>" size="30" tabindex="174"/></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onunbaslik; ?></th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input class="style1" name="v177"  type="text" value="<?php echo $ahkod.' '.$ahno ;?>" size="30" tabindex="177"/></th>
  </tr>
  <tr>
     
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input id="masktest" class="style1" name="v175"  type="text" value="<?php echo $duztarih; ?>" size="30" tabindex="175"/></th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;Tarih</th>
    <th  width="16%"align="left" class="style5" bgcolor="#FFFFCC" colspan="2"><input id="masktest1" class="style1" name="v178"  type="text" value="<?php echo $ontarih;?>" size="30" tabindex="178"/></th>
  </tr>
  <tr>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $duzimzabaslik; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
    <th  width="8%" align="left" class="style5" bgcolor="#CEF6EC" colspan="1">&nbsp;<?php echo $onimzabaslik; ?></th>
    <th  width="16%"align="center" class="style5" bgcolor="#FFFFCC" colspan="2">&nbsp;</th>
	</tr>
</table>