<?php
include('devir.php');
?>
<table class="table table-responsive-sm table-sm table-bordered table-striped table-light table-hover form013ustaralar" style="margin-top:-12px;">
  <thead>
  <tr>
    <td class="border-0" width="5%" colspan="2"><div align="center">T.C.</div></td>
    <th class="border-0" width="5%" colspan="10"><div align="center"><?php echo $frmbaslik; ?></div></th>
    <td class="border-0" width="5%" colspan="1"><div align="center">YIL:</div></td>
    <th class="border-0" width="5%" colspan="1"><div align="left"><?php echo ''.$yilgelen.'' ;?></div></th>
  </tr>
  <tr>
    <td class="border-0" width="5%" colspan="2"><div align="center"><div align="center"><?php echo $sbbaslik; ?></div></td>
    <th class="border-0" width="5%" colspan="10"><div align="center">Form 102</div></th>
    <td class="border-0" width="5%" colspan="1"><div align="center">AY:</div></td>
    <th class="border-0" width="5%" colspan="1"><div align="left"><?php echo ''.$aygelen.'' ;?></div></th>
  </tr>
  <tr>
    <td class="border-0" width="5%" colspan="1"><div align="left"><?php echo $ilcebaslik; ?></div></td>
    <th  width="5%"align="left" class="border-0" colspan="5"><?php echo ''.$ilceninadi.'' ;?></th>  
    <th  width="5%"align="left" class="border-0" colspan="8">&nbsp;</th>
  </tr>
  <tr>	
    <td class="border-0" width="5%" colspan="1"><div align="left">ASM ADI:</div></td>
    <th  width="5%"align="left" class="border-0" colspan="5"><?php echo ''.$asmninadine.'' ;?></th>
    <th  width="5%"align="left" class="border-0" colspan="8">&nbsp;</th>
  </tr>
  <tr>
    <td class="border-0" width="5%" colspan="2"><div align="left"><?php echo $ahekkodbaslik; ?></div></td>
    <th  width="5%"align="left" class="border-0" colspan="5"><?php echo ''.$ocgelen.' / '.$drad.'' ;?></th>
    <th  width="5%" align="center" class="border-0" colspan="7">&nbsp;</th>
  </tr>
  <tr>
  <th class="border-0" width="5%" colspan="14"><div align="left"><?php echo $apybaslik; ?></div></th>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><small><?php echo $basvuranbaslik; ?></small></div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><small><?php echo $apdanismanbaslik; ?></small></div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">&nbsp;</div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">Hap</div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">Kondom</div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">Enjeksiyon</div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><?php echo $riabaslik; ?></div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><?php echo $implantbaslik; ?></div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><?php echo $tupbaslik; ?></div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">Vazektomi</div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><small style="font-size:8pt"><?php echo $digerbaslik; ?></small></div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><?php echo $gebelikbaslik; ?></div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><small style="font-size:8pt"><?php echo $dusukbaslik; ?></small></div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><small style="font-size:8pt"><?php echo $dogumsonubaslik; ?></small></div></td>
  </tr>
  <tr>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1" rowspan="2"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v1" id="v1" type="text" value="<?php echo $verim1; ?>" size="5" tabindex="1" autofocus/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1" rowspan="2"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v2" id="v2" type="text" value="<?php echo $verim2; ?>" size="5" tabindex="2"/></div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="left"><small style="font-size:10pt"><?php echo $yenibaslik;?></small></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v3" id="v3" type="text" value="<?php echo $verim3; ?>" size="5" tabindex="3"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v4" id="v4" type="text" value="<?php echo $verim4; ?>" size="5" tabindex="4"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v5" id="v5" type="text" value="<?php echo $verim5; ?>" size="5" tabindex="5"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v6" id="v6" type="text" value="<?php echo $verim6; ?>" size="5" tabindex="6"/></div></td>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input class="form-control form-control-sm text-center border-0" name="v7" id="v7" type="hidden" value="<?php echo $verim7; ?>" size="5" tabindex="7"/></div></td>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input class="form-control form-control-sm text-center border-0" name="v8" id="v8" type="hidden" value="<?php echo $verim8; ?>" size="5" tabindex="8"/></div></td>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input class="form-control form-control-sm text-center border-0" name="v9" id="v9" type="hidden" value="<?php echo $verim9; ?>" size="5" tabindex="9"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v10" id="v10" type="text" value="<?php echo $verim10; ?>" size="5" tabindex="10"/></div></td>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input class="form-control form-control-sm text-center border-0" name="v11" id="v11" type="hidden" value="<?php echo $verim11; ?>" size="5" tabindex="11"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v12" id="v12" type="text" value="<?php echo $verim12; ?>" size="5" tabindex="12"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v13" id="v13" type="text" value="<?php echo $verim13; ?>" size="5" tabindex="13"/></div></td>
  </tr>
  <tr>
<td class="border border-primary align-middle" width="5%" colspan="1"><div align="left"><small style="font-size:10pt"><?php echo $eskibaslik;?></small></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v14" id="v14" type="text" value="<?php echo $verim14; ?>" size="5" tabindex="14"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v15" id="v15" type="text" value="<?php echo $verim15; ?>" size="5" tabindex="15"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v16" id="v16" type="text" value="<?php echo $verim16; ?>" size="5" tabindex="16"/></div></td>
    <th  width="5%" align="center" bgcolor="white" class="border-0">&nbsp;</th>
  </tr>
  <tr>
  </tr>
  <tr>
  <th class="border-0" width="5%" colspan="8"><div align="left">2.MALZEME DURUMU</div></th>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="center">&nbsp;</div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">Hap</div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">Kondom</div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">Enjeksiyon</div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><?php echo $riabaslik;?></div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><div align="center"><small style="font-size:10pt"><?php echo $implantbaslik;?></small></div></td>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><?php echo $devirbaslik; ?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="hapdevir" id="hapdevir" type="text" value="<?php echo $devredengebe ; ?>" size="5" readonly="true"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="kondevir" id="kondevir" type="text" value="<?php echo $devredenbebek ; ?>" size="5" readonly="true"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="enjdevir" id="enjdevir" type="text" value="<?php echo $devredenlohusa ; ?>" size="5" readonly="true"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="riadevir" id="riadevir" type="text" value="<?php echo $devredencocuk ; ?>" size="5" readonly="true"/></div></td>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="impdevir" id="impdevir" type="hidden" value="<?php echo $devredenimp ; ?>" size="5" readonly="true"/></th>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><?php echo $gelenbaslik; ?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v17" id="v17"  type="text"  onchange="topla10();" onkeydown="topla10();" value="<?php echo $verim17; ?>" size="5" tabindex="17"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v22" id="v22"  type="text"  onchange="topla11();" onkeydown="topla11();"  onkeyup="esitmihap();" value="<?php echo $verim22; ?>" size="5" tabindex="22"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v27" id="v27" type="text" onchange="topla12();" onkeydown="topla12();" value="<?php echo $verim27; ?>" size="5" tabindex="27"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v32" id="v32" type="text" onchange="topla13();" onkeydown="topla13();"  onkeyup="esitmienj();" value="<?php echo $verim32; ?>" size="5" tabindex="32"/></div></td>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input class="form-control form-control-sm text-center border-0" name="v37" id="v37" type="hidden" onchange="topla14();" onkeydown="topla14();" value="<?php echo $verim37; ?>" size="5" tabindex="37"/></th>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><small style="font-size:9pt"><?php echo $digergelenbaslik;?></small></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v18" id="v18"  type="text"  onchange="topla10();" onkeydown="topla10();" value="<?php echo $verim18; ?>" size="5" tabindex="18"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v23" id="v23"  type="text"  onchange="topla11();" onkeydown="topla11();" value="<?php echo $verim23; ?>" size="5" tabindex="23"/></th>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v28" id="v28" type="text" onchange="topla12();" onkeydown="topla12();" value="<?php echo $verim28; ?>" size="5" tabindex="28"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v33" id="v33" type="text" onchange="topla13();" onkeydown="topla13();" value="<?php echo $verim33; ?>" size="5" tabindex="33"/></div></td>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input class="form-control form-control-sm text-center border-0" name="v38" id="v38" type="hidden" onchange="topla14();" onkeydown="topla14();" value="<?php echo $verim38; ?>" size="5" tabindex="38"/></th>
    <th class="border-0"  width="5%" align="center" bgcolor="white" colspan="2">&nbsp;</th>
	<td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><?php echo $cikarilanriabaslik;?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="2"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v42" id="v42" type="text" value="<?php echo $verim42; ?>" onkeyup="esitmiria();" size="5" tabindex="42"/></div></td>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><?php echo $zayibaslik; ?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v19" id="v19"  type="text"  onchange="topla10();" onkeydown="topla10();" value="<?php echo $verim19; ?>" size="5" tabindex="19"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v24" id="v24"  type="text"  onchange="topla11();" onkeydown="topla11();" value="<?php echo $verim24; ?>" size="5" tabindex="24"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v29" id="v29" type="text" onchange="topla12();" onkeydown="topla12();" value="<?php echo $verim29; ?>" size="5" tabindex="29"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v34" id="v34" type="text" onchange="topla13();" onkeydown="topla13();" value="<?php echo $verim34; ?>" size="5" tabindex="34"/></div></td>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input class="form-control form-control-sm text-center border-0" name="v39" id="v39" type="hidden" onchange="topla14();" onkeydown="topla14();" value="<?php echo $verim39; ?>" size="5" tabindex="39"/></th>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><?php echo $geribaslik; ?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v20" id="v20"  type="text"  onchange="topla10();" onkeydown="topla10();" value="<?php echo $verim20; ?>" size="5" tabindex="20"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v25" id="v25"  type="text"  onchange="topla11();" onkeydown="topla11();" value="<?php echo $verim25; ?>" size="5" tabindex="25"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v30" id="v30" type="text" onchange="topla12();" onkeydown="topla12();" value="<?php echo $verim30; ?>" size="5" tabindex="30"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v35" id="v35" type="text" onchange="topla13();" onkeydown="topla13();" value="<?php echo $verim35; ?>" size="5" tabindex="35"/></div></td>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input class="form-control form-control-sm text-center border-0" name="v40" id="v40" type="hidden" onchange="topla14();" onkeydown="topla14();" value="<?php echo $verim40; ?>" size="5" tabindex="40"/></th>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left">Sarf Edilen Malzeme</div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v21" id="v21"  type="text"  onchange="topla10();" onkeydown="topla10();" value="<?php echo $verim21; ?>" size="5" tabindex="21"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v26" id="v26"  type="text"  onchange="topla11();" onkeydown="topla11();" value="<?php echo $verim26; ?>" size="5" tabindex="26"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v31" id="v31" type="text" onchange="topla12();" onkeydown="topla12();" value="<?php echo $verim31; ?>" size="5" tabindex="31"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v36" id="v36" type="text" onchange="topla13();" onkeydown="topla13();" value="<?php echo $verim36; ?>" size="5" tabindex="36"/></div></td>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input class="form-control form-control-sm text-center border-0" name="v41" id="v41" type="hidden" onchange="topla14();" onkeydown="topla14();" value="<?php echo $verim41; ?>" size="5" tabindex="41"/></th>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><?php echo $sonucbaslik; ?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input name="button2" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla10();" value=" = " /></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input name="button22" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla11();" value=" = " /></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input name="button23" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla12();" value=" = " /></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input name="button2" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla13();" value=" = " /></div></td>
    <th  width="5%" align="center" class="border border-primary align-middle" bgcolor="#999999"><input name="button2" type="hidden" class="form-control form-control-sm text-center border-0"  onclick="topla14();" value=" = " /></div></td>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left">Kalan Malzeme</div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="haptop" id="haptop" type="text" value="<?php echo $aysonugebemevcudu ; ?>" size="5" readonly="true"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="kontop" id="kontop" type="text" value="<?php echo $aysonubebekmevcudu ; ?>" size="5" readonly="true"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="enjtop" id="enjtop" type="text" value="<?php echo $aysonulohusamevcudu ; ?>" size="5" readonly="true"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="riatop" id="riatop" type="text" value="<?php echo $aysonucocukmevcudu ; ?>" size="5" readonly="true"/></div></td>
    <th  width="5%" align="center" class="border border-primary align-middle" bgcolor="#999999"><input class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="imptop" id="imptop" type="hidden" value="<?php echo $aysonuimpmevcudu ; ?>" size="5" readonly="true"/></td>
  </tr>
  <tr>
    <th class="border-0"  width="5%" align="left" colspan="6">&nbsp;</th>
	</tr>	
  <tr>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="6"><div align="center"><?php echo $duzenleyen;?></div></td>
    <th width="27%" rowspan="5" colspan="2" align="left" class="border border-0 align-middle text-center"><a class="btn btn-sm btn-success" style="width:100px" href=# onClick="kontrol();"title="??ptal" tabindex="41"><i class="fa fa-reply-all" aria-hidden="true"></i> ??ptal</a><br><a class="btn btn-sm btn-primary mt-3" style="width:100px" href=# onClick="girdiyidegistir();" tabindex="40"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> De??i??tir</a></th>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="6"><div align="center">ONAYLAYAN</div></td>
  </tr>
  <tr>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="2"><div align="left">&nbsp;<?php echo $duzadbaslik;?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="4"><div align="left"><input  class="form-control form-control-sm text-center border-0" name="v173"  type="text" onkeyup="esitmigebedvit();" value="<?php echo $asead ; ?>" size="40" tabindex="173"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="2"><div align="left">&nbsp;<?php echo $onadbaslik;?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="4"><div align="left"><input  class="form-control form-control-sm text-center border-0" name="v176"  type="text" value="<?php echo $drad ; ?>" size="40" tabindex="176"/></div></td>
  </tr>
  <tr>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="2"><div align="left">&nbsp;<?php echo $duzunbaslik;?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="4"><div align="left"><input  class="form-control form-control-sm text-center border-0" name="v174"  type="text" value="<?php echo $aseunv ; ?>" size="40" tabindex="174"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="2"><div align="left">&nbsp;<?php echo $onunbaslik;?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="4"><div align="left"><input  class="form-control form-control-sm text-center border-0" name="v177"  type="text" value="<?php echo $ahkod.' '.$ahno ;?>" size="40" tabindex="177"/></div></td>
  </tr>
  <tr>
    <?php
   $a=Date("d/m/Y");
   ?>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="2"><div align="left">&nbsp;Tarih</div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="4"><div align="center"><input id="masktest"  class="form-control form-control-sm text-center border-0" name="v175"  type="text" value=<?php echo $a; ?> size="40" tabindex="175"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="2"><div align="left">&nbsp;Tarih</div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="4"><div align="center"><input id="masktest1"  class="form-control form-control-sm text-center border-0" name="v178"  type="text" value="<?php echo $a;?>" size="40" tabindex="178"/></div></td>
  </tr>
  <tr>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="2"><div align="left">&nbsp;<?php echo $duzimzabaslik;?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="4"><div align="left">&nbsp;</div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="2"><div align="left">&nbsp;<?php echo $onimzabaslik;?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="4"><div align="left">&nbsp;</div></td>
  </tr>
  </table>