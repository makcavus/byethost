<table class="table table-responsive-sm table-sm">
  <thead>
  <tr>
    <th  width="30%" align="left" class="border border-primary" bgcolor="#CEF6EC" colspan="10"><?php echo $ageartiskurum; ?> </th>
    <th  width="70%" align="left" colspan="10" class="bg-light border border-primary"><?php echo '<span>'.$ilinadine.'-'.$ilceninadine.' '.$kurum.' '.$xtoplam.' '.$hastayla.'</span>' ;?></th>
  </tr>
  <tr>
    <th  width="30%" align="left"  colspan="10" class="border border-primary" bgcolor="#CEF6EC"><?php echo $ageartistarih; ?> </th>
    <th  width="70%" align="left"  colspan="10" class="bg-light border border-primary"><?php echo '<span>'.$noktatarih.'</span>' ;?></th>
  </tr>
  <tr>
    <th  width="30%" align="left" colspan="10" rowspan="2" class="border border-primary align-middle" bgcolor="#CEF6EC"><?php echo $verihatasi; ?></th>
    <th  width="10%" align="left" colspan="2" class="border border-primary" bgcolor="orange">Mevcut:</th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="verisec" value="verisecyes" onclick="verimev(this.value);" tabindex="1"/></th>
    <th  width="10%" align="right" colspan="2" class="border border-primary" bgcolor="orange"><?php echo $mevcutdegil; ?></th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="verisec" value="<?php echo $veridurumyok; ?>" checked="checked" onclick="verinamev(this.value);" tabindex="2"/></th>
    <th  width="30%" align="center"  colspan="2" class="border border-primary" bgcolor="#CEF6EC">&nbsp;</th>
  </tr>
  <tr>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle" bgcolor="yellow"><?php echo $aciklama; ?></th>
    <th  width="60%" align="left"  colspan="8" class="border border-primary" bgcolor="#CEF6EC"><input class="form-control"  style="font-weight:bold" align="left" name="v1" id="v1" type="text" value="<?php echo $veridurumyok; ?>" size="100%" tabindex="3"/></th>
  </tr>
  <tr>
    <th  width="30%" align="left" colspan="10" rowspan="2" class="border border-primary align-middle" bgcolor="#CEF6EC"><?php echo $mukerrerkayit; ?></th>
    <th  width="10%" align="left" colspan="2" class="border border-primary" bgcolor="orange">Mevcut:</th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="muksec" value="muksecyes" onclick="mukmev(this.value);" tabindex="4"/></th>
    <th  width="10%" align="right" colspan="2" class="border border-primary" bgcolor="orange"><?php echo $mevcutdegil; ?></th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="muksec" value="<?php echo $mukerrerkayitdurumuyok; ?>" checked="checked" onclick="muknamev(this.value);" tabindex="5"/></th>
    <th  width="30%" align="center"  colspan="2" class="border border-primary" bgcolor="#CEF6EC">&nbsp;</th>
  </tr>
  <tr>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle" bgcolor="yellow"><?php echo $aciklama; ?></th>
    <th  width="60%" align="left"  colspan="8" class="border border-primary" bgcolor="#CEF6EC"><input class="form-control" style="font-weight:bold" align="left" name="v2" id="v2" type="text" value="<?php echo $mukerrerkayitdurumuyok; ?>" size="100%" tabindex="6"/></th>
  </tr>
  <tr>
    <th  width="30%" align="left" colspan="10" rowspan="2" class="border border-primary align-middle" bgcolor="#CEF6EC"><?php echo $ikametkum; ?></th>
    <th  width="10%" align="left" colspan="2" class="border border-primary align-middle" bgcolor="orange">Mevcut:</th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="kumsec" id="kumsecyes" value="<?php echo $ikametdurumuvar; ?>" onclick="kummev(this.value);" tabindex="7"/></th>
    <th  width="10%" align="right" colspan="2" class="border border-primary align-middle" bgcolor="orange"><?php echo $mevcutdegil; ?></th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="kumsec" id="kumsecno" value="<?php echo $ikametdurumuyok; ?>" checked="checked" onclick="kumnamev(this.value);" tabindex="8"/></th>
    <th  width="30%" align="center"  colspan="2" class="border border-primary align-middle" bgcolor="#CEF6EC"><label id="kumelenme" for="kumsec"><?php echo $dagilimtablosu; ?></label>
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="ek" id="ek" value="<?php echo $ikametdurumuyokek; ?>" onclick="ekmev(this.value);"/></th>
  </tr>
  <tr>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle" bgcolor="yellow"><?php echo $aciklama; ?></th>
    <th  width="60%" align="left"  colspan="8" class="border border-primary" bgcolor="#CEF6EC"><input class="form-control"  style="font-weight:bold" align="left" name="v3" id="v3" type="text" value="<?php echo $ikametdurumuyok; ?>" size="100%" tabindex="9"/></th>
  </tr>
</thead>
</table>
<table class="table table-responsive-sm table-sm">
  <thead>
  <tr>
	<th width="100%" align="center" bordercolor="black" colspan="20" class="border border-primary text-center" bgcolor="#CEF6EC"><?php echo $yascinsgrubu; ?></th>
  </tr>
  <tr>
  <th  width="10%" align="center"  colspan="2" class="border border-primary text-center" bgcolor="#CEF6EC">0-11 ay</th>
  <th  width="10%" align="center"  colspan="2" class="border border-primary text-center" bgcolor="#CEF6EC">1-4 y</th>
  <th  width="10%" align="center"  colspan="2" class="border border-primary text-center" bgcolor="#CEF6EC">5-9 y</th>
  <th  width="10%" align="center"  colspan="2" class="border border-primary text-center" bgcolor="#CEF6EC">10-14 y</th>
  <th  width="10%" align="center"  colspan="2" class="border border-primary text-center" bgcolor="#CEF6EC">15-19 y</th>
  <th  width="10%" align="center"  colspan="2" class="border border-primary text-center" bgcolor="#CEF6EC">20-29 y</th>
  <th  width="10%" align="center"  colspan="2" class="border border-primary text-center" bgcolor="#CEF6EC">30-44 y</th>
  <th  width="10%" align="center"  colspan="2" class="border border-primary text-center" bgcolor="#CEF6EC">45-64 y</th>
  <th  width="10%" align="center"  colspan="2" class="border border-primary text-center" bgcolor="#CEF6EC">65+y</th>
  <th  width="10%" align="center"  colspan="2" class="border border-primary text-center" bgcolor="#CEF6EC">TOPLAM</th>
  </tr>
  <tr>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">E</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">K</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">E</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">K</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">E</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">K</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">E</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">K</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">E</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">K</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">E</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">K</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">E</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">K</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">E</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">K</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">E</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">K</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">E</th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">K</th>
  </tr>
  <tr>
    <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">
      <input class="form-control text-center" name="v4" id="v4" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="10" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
    <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">
      <input class="form-control text-center" name="v5" id="v5" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="11" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">
    <input class="form-control text-center" name="v6" id="v6" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="12" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">
    <input class="form-control text-center" name="v7" id="v7" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="13" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">
    <input class="form-control text-center" name="v8" id="v8" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="14" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">
    <input class="form-control text-center" name="v9" id="v9" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="15" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">
    <input class="form-control text-center" name="v10" id="v10" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="16" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">
    <input class="form-control text-center" name="v11" id="v11" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="17" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">
    <input class="form-control text-center" name="v12" id="v12" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="18" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">
    <input class="form-control text-center" name="v13" id="v13" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="19" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">
    <input class="form-control text-center" name="v14" id="v14" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="20" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">
    <input class="form-control text-center" name="v15" id="v15" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="21" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">
    <input class="form-control text-center" name="v16" id="v16" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="22" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">
    <input class="form-control text-center" name="v17" id="v17" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="23" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">
    <input class="form-control text-center" name="v18" id="v18" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="24" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">
    <input class="form-control text-center" name="v19" id="v19" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="25" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">
    <input class="form-control text-center" name="v20" id="v20" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="26" onchange="topla1();" onkeydown="topla1();" onmouseout="topla1();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">
    <input class="form-control text-center" name="v21" id="v21" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="27" onchange="topla2();" onkeydown="topla2();" onmouseout="topla2();"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="cyan">
    <input class="form-control text-center" name="sonuce" id="sonuce" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="28" readonly="true"/></th>
  <th  width="5%" align="center"  colspan="1" class="border border-primary text-center" bgcolor="pink">
    <input class="form-control text-center" name="sonuck" id="sonuck" type="text" value="0" style="font-weight:bold"  align="center" size="3" tabindex="29" readonly="true"/></th>
  </tr>
  </table>
  <table class="table table-responsive-sm table-sm">
  <thead>
<tr>
<th  width="30%" align="left" colspan="10" rowspan="2" class="border border-primary align-middle" bgcolor="#CEF6EC"><?php echo $topluyemek; ?></th>
	<th  width="10%" align="left"  colspan="2" class="border border-primary" bgcolor="orange">Mevcut:</th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="tyysec" value="tyysecyes" onclick="tyymev(this.value);" tabindex="30"/></th>
	<th  width="10%" align="right"  colspan="2" class="border border-primary" bgcolor="orange"><?php echo $mevcutdegil; ?></th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="tyysec" value="<?php echo $topluyemekyok; ?>" checked="checked"  onclick="tyynamev(this.value);" tabindex="31"/></th>
	<th  width="30" align="center"  colspan="2" class="border border-primary" bgcolor="#CEF6EC">&nbsp;</th>
  </tr>
  <tr>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle" bgcolor="yellow"><?php echo $aciklama; ?></th>
	<th  width="60%" align="left"  colspan="8" class="border border-primary" bgcolor="#CEF6EC"><input class="form-control" style="font-weight:bold" align="left" name="v22" id="v22" type="text" value="<?php echo $topluyemekyok; ?>" size="100%" tabindex="32"/></th>
    </tr>
<tr>
    <th  width="30%" align="left"colspan="10" rowspan="2" class="border border-primary align-middle" bgcolor="#CEF6EC"><?php echo $ayniaile; ?></th>
	<th  width="10%" align="left"colspan="2" class="border border-primary" bgcolor="orange">Mevcut:</th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="aamsec" value="aamsecyes" onclick="aammev(this.value);" tabindex="33"/></th>
	<th  width="10%" align="right"colspan="2" class="border border-primary" bgcolor="orange"><?php echo $mevcutdegil; ?></th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="aamsec" value="<?php echo $ayniaileyok; ?>" checked="checked"  onclick="aamnamev(this.value);" tabindex="34"/></th>
	<th  width="40%" align="center"  colspan="2" class="border border-primary" bgcolor="#CEF6EC">&nbsp;</th>
  </tr>
  <tr>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle" bgcolor="yellow"><?php echo $aciklama; ?></th>
	<th  width="60%" align="left"  colspan="8" class="border border-primary" bgcolor="#CEF6EC"><input class="form-control"  style="font-weight:bold" align="left" name="v23" id="v23" type="text" value="<?php echo $ayniaileyok; ?>" size="100%" tabindex="35"/></th>
    </tr>	
	<tr>
    <th  width="30%" align="left"colspan="10" rowspan="2" class="border border-primary align-middle" bgcolor="#CEF6EC">Meslek Grubu Durumu:</th>
	<th  width="10%" align="left"colspan="2" class="border border-primary" bgcolor="orange">Bilgi Mevcut:</th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="mgdsec" value="mgdsecyes" onclick="mgdmev(this.value);" tabindex="36"/></th>
    <th  width="10%" align="right"colspan="2" class="border border-primary" bgcolor="orange">Bilgi Yok:</th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="mgdsec" value="<?php echo $meslekyok; ?>" checked="checked"  onclick="mgdnamev(this.value);" tabindex="37"/></th>
	<th  width="30%" align="center"  colspan="2" class="border border-primary" bgcolor="#CEF6EC">&nbsp;</th>
  </tr>
  <tr>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle" bgcolor="yellow"><?php echo $aciklama; ?></th>
	<th  width="60%" align="left"  colspan="8" class="border border-primary" bgcolor="#CEF6EC"><input class="form-control" style="font-weight:bold" align="left" name="v25" id="v25" type="text" value="<?php echo $meslekyok; ?>" size="100%" tabindex="38"/></th>
    </tr>
    <thead>
</table>	
<table class="table table-responsive-sm table-sm">
  <thead>
  <tr>
	<th  width="100%" align="center" bordercolor="black" colspan="20" class="border border-primary text-center" bgcolor="#CEF6EC"><?php echo $gaitatestbaslik; ?></th>
  </tr>
  <tr>
  <th  width="13%" align="left"  colspan="8" class="border border-primary align-middle" bgcolor="#CEF6EC">Tahlilin Cinsi </th>
  <th  width="10%" align="center"  colspan="4" class="border border-primary text-center" bgcolor="#CEF6EC"><?php echo $gaitakultur; ?></th>
  <th  width="10%" align="center"  colspan="4" class="border border-primary text-center" bgcolor="#CEF6EC"><?php echo $gaitaparazit; ?></th>
  <th  width="10%" align="center"  colspan="4" class="border border-primary text-center" bgcolor="#CEF6EC"><?php echo $gaitaviral; ?></th>
  </tr>
  <tr>
  <th  width="5%" align="left"  colspan="8" class="border border-primary align-middle" bgcolor="#CEF6EC"><?php echo $sayi; ?></th>
  <th  width="5%" align="center"  colspan="4" class="border border-primary text-center" bgcolor="#CEF6EC">
    <input class="form-control text-center" align="center" name="v26" id="v26" type="text" value="<?php echo $verim7; ?>" style="font-weight:bold"  tabindex="39"/></th>
  <th  width="5%" align="center"  colspan="4" class="border border-primary text-center" bgcolor="#CEF6EC">
    <input class="form-control text-center" align="center" name="v27" id="v27" type="text" value="<?php echo $verim13; ?>" style="font-weight:bold"  tabindex="40" onchange="topla4();"/></th>
  <th  width="5%" align="center"  colspan="4" class="border border-primary text-center" bgcolor="#CEF6EC">
    <input class="form-control text-center" align="center" name="v28" id="v28" type="text" value="<?php echo $verim16; ?>" style="font-weight:bold"  tabindex="41" onchange="topla5();"/></th>
  </tr>
  <tr>
  <th  width="5%" align="left"  colspan="8" class="border border-primary align-middle" bgcolor="#CEF6EC">Negatif</th>
  <th  width="5%" align="center"  colspan="4" class="border border-primary text-center" bgcolor="#CEF6EC">
    <input class="form-control text-center" align="center" name="v29" id="v29" type="text" value="<?php echo $verim7; ?>" style="font-weight:bold"  tabindex="42" readonly="true"/></th>
  <th  width="5%" align="center"  colspan="4" class="border border-primary text-center" bgcolor="#CEF6EC">
    <input class="form-control text-center" align="center" name="v30" id="v30" type="text" value="<?php echo $verim13; ?>" style="font-weight:bold"  tabindex="43" onchange="topla7();"/></th>
  <th  width="5%" align="center"  colspan="4" class="border border-primary text-center" bgcolor="#CEF6EC">
    <input class="form-control text-center" align="center" name="v31" id="v31" type="text" value="<?php echo $verim16; ?>" style="font-weight:bold"  tabindex="44" onchange="topla8();"/></th>
  </tr>
  <tr>
  <th  width="5%" align="left"  colspan="8" class="border border-primary align-middle" bgcolor="#CEF6EC">Pozitif</th>
  <th  width="5%" align="center"  colspan="4" class="border border-primary text-center" bgcolor="#CEF6EC">
    <input class="form-control text-center" align="center" name="v32" id="v32" type="text" value="0" style="font-weight:bold"  tabindex="45" onchange="topla6();"/></th>
  <th  width="5%" align="center"  colspan="4" class="border border-primary text-center" bgcolor="#CEF6EC">
    <input class="form-control text-center" align="center" name="v33" id="v33" type="text" value="0" style="font-weight:bold"  tabindex="46" readonly="true"/></th>
  <th  width="5%" align="center"  colspan="4" class="border border-primary text-center" bgcolor="#CEF6EC">
    <input class="form-control text-center" align="center" name="v34" id="v34" type="text" value="0" style="font-weight:bold"  tabindex="47" readonly="true"/></th>
  </tr>
</thead>
  </table>  
  <table class="table table-responsive-sm table-sm">
  <thead>
<tr>
    <th  width="30%" align="left" colspan="10" rowspan="2" class="border border-primary align-middle" bgcolor="#CEF6EC">Ayaktan/Yatarak Tedavi Durumu:</th>
	<th  width="10%" align="left" colspan="2" class="border border-primary align-middle" bgcolor="orange">Yatarak Tedavi: </th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="atsec" id="atsecyes" value="<?php echo $yatandurumukotuyok; ?>" onclick="atmev(this.value);" tabindex="48"/></th>
    <th  width="10%" align="right" colspan="2" class="border border-primary align-middle" bgcolor="orange">Hepsi Ayaktan:</th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="atsec" id="atsecno" value="<?php echo $ayaktandurumukotuyok; ?>" checked="checked"  onclick="atnamev(this.value);" tabindex="49"/></th>
    <th  width="30%" align="center"  colspan="2" class="border border-primary align-middle" bgcolor="#CEF6EC"><label id="durah" for="atsec"><?php echo $durumukotu; ?></label>
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="dah" id="dah" value="<?php echo $durumukotuyatan; ?>" onclick="dahmev(this.value);" tabindex="50"/></th>
  </tr>
  <tr>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle" bgcolor="yellow"><?php echo $aciklama; ?></th>
	<th  width="60%" align="left"  colspan="8" class="border border-primary" bgcolor="#CEF6EC">
    <input class="form-control" style="font-weight:bold" align="left" name="v35" id="v35" type="text" value="<?php echo $ayaktandurumukotuyok; ?>" size="100%" tabindex="51"/></th>
    </tr>	
<tr>
    <th  width="30%" align="left"  colspan="10" class="border border-primary align-middle" bgcolor="#CEF6EC"><?php echo $klinisyengorusu; ?></th>
	<th  width="70%" align="left"  colspan="10" class="border border-primary" bgcolor="#CEF6EC"><input class="form-control" style="font-weight:bold" align="left" name="v36" id="v36" type="text" value="<?php echo $klinikvaka; ?>" size="118%" tabindex="52"/></th>
</tr>
<tr>
    <th  width="30%" align="left"  colspan="10" class="border border-primary align-middle" bgcolor="#CEF6EC"><?php echo $sunumune; ?></th>
	<th  width="70%" align="left"  colspan="10" class="border border-primary" bgcolor="#CEF6EC"><input class="form-control" style="font-weight:bold" align="left" name="v37" id="v37" type="text" value="<?php echo $sunumunesonuc; ?>" size="118%" tabindex="52"/></th>
</tr>			 
</thead>		 
</table>
<script type="text/javascript">
//Sinyal Türü
function sinyalnamev(sinyalno){
    document.getElementById("v38").value = "<?php $ilcemiz="İlçesi"; $tarihinde="tarihinde"; $bildirilen="nden bildirilen"; $vaka="A09,R11,K52 ICD-10 kodu ile teşhis almış"; $meydan="vakadan dolayı  meydana gelen"; $sinyaltur="C4 Sinyali nedeniyle bu değerlendirme raporu düzenlenmiştir."; echo $noktatarih.' '.$tarihinde.' '.$ilceninadine.' '.$ilcemiz.' '.$kurum.''.$bildirilen.' '.$vaka.' '.$toplamvaka.' '.$meydan.' '.$sinyaltur; ?>";
	document.getElementById("v38").readOnly = false;
}
function sinyalmev(sinyalyes){
    document.getElementById("v38").value = "<?php $ilcemiz="İlçesi"; $tarihinde="tarihinde"; $bildirilen="nden bildirilen"; $vaka="A09,R11,K52 ICD-10 kodu ile teşhis almış"; $meydan="vakadan dolayı  meydana gelen"; $sinyaltur="C3 Sinyali nedeniyle bu değerlendirme raporu düzenlenmiştir."; echo $noktatarih.' '.$tarihinde.' '.$ilceninadine.' '.$ilcemiz.' '.$kurum.''.$bildirilen.' '.$vaka.' '.$toplamvaka.' '.$meydan.' '.$sinyaltur; ?>";
	document.getElementById("v38").readOnly = false;
}
function yabuyr(){
var v39=parseInt(document.getElementById("v39").value);
var v40="<?php echo $yabanciuyrukdurumu; ?>";
var bos=v39+"<?php echo $yabanciuyrukvar; ?>";
if(document.getElementById("v39").value == 0){
    document.getElementById("v40").value =v40;
	return false;
}else{
document.getElementById("v40").value =bos;
}
return true;
}
</script>
<table class="table table-responsive-sm table-sm">
  <thead>
<tr>
<th  width="100%" align="center" bordercolor="black" colspan="20" class="border border-primary text-center" bgcolor="#CEF6EC"><?php echo $degraporbaslik; ?></th>  
</tr>
<tr>
    <th  width="30%" align="left"colspan="9" rowspan="2" class="border border-primary align-middle" bgcolor="#CEF6EC"><?php echo $sinyalturu; ?></th>
	<th  width="10%" align="left"colspan="3" class="border border-primary align-middle" bgcolor="orange">C3 Sinyali</th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="sinyalsec" id="sinyalsecyes" value="<?php $ilcemiz="İlçesi"; $tarihinde="tarihinde"; $bildirilen="nden bildirilen"; $vaka="A09,R11,K52 ICD-10 kodu ile teşhis almış"; $meydan="vakadan dolayı  meydana gelen"; $sinyaltur="C3 Sinyali nedeniyle bu değerlendirme raporu düzenlenmiştir."; echo $noktatarih.' '.$tarihinde.' '.$ilceninadine.' '.$ilcemiz.' '.$kurum.''.$bildirilen.' '.$vaka.' '.$toplamvaka.' '.$meydan.' '.$sinyaltur; ?>" checked="checked" onclick="sinyalmev(this.value);" tabindex="53"/></th>
    <th  width="10%" align="right"colspan="2" class="border border-primary align-middle" bgcolor="orange">C4 Sinyali</th>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle"><input class="form-control" type="radio" name="sinyalsec" id="sinyalsecno" value="<?php $ilcemiz="İlçesi"; $tarihinde="tarihinde"; $bildirilen="nden bildirilen"; $vaka="A09,R11,K52 ICD-10 kodu ile teþhis almýþ"; $meydan="vakadan dolayı  meydana gelen"; $sinyaltur="C4 Sinyali nedeniyle bu değerlendirme raporu düzenlenmiştir."; echo $noktatarih.' '.$tarihinde.' '.$ilceninadine.' '.$ilcemiz.' '.$kurum.''.$bildirilen.' '.$vaka.' '.$toplamvaka.' '.$meydan.' '.$sinyaltur; ?>" onclick="sinyalnamev(this.value);" tabindex="54"/></th>
<th  width="30%" align="center"  colspan="1" class="border border-primary" bgcolor="#CEF6EC">&nbsp;</th>	
  </tr>
  <tr>
    <th  width="10%" align="left"  colspan="2" class="border border-primary align-middle" bgcolor="yellow"><?php echo $aciklama; ?></th>
	<th  width="60%" align="left"  colspan="8" class="border border-primary" bgcolor="#CEF6EC"><textarea class="form-control"  style="font-weight:bold" align="left" name="v38" id="v38"  cols="108" rows="3" tabindex="55"><?php $ilcemiz="İlçesi"; $tarihinde="tarihinde"; $bildirilen="nden bildirilen"; $vaka="A09,R11,K52 ICD-10 kodu ile teşhis almış"; $meydan="vakadan dolayı  meydana gelen"; $sinyaltur="C3 Sinyali nedeniyle bu değerlendirme raporu düzenlenmiştir."; echo $noktatarih.' '.$tarihinde.' '.$ilceninadine.' '.$ilcemiz.' '.$kurum.''.$bildirilen.' '.$vaka.' '.$toplamvaka.' '.$meydan.' '.$sinyaltur; ?></textarea></th>
  </tr>
<tr>
    <th  width="10%" align="left"  colspan="9" class="border border-primary align-middle" bgcolor="#CEF6EC"><?php echo $yabanciuyruk; ?></th>
	<th  width="10%" align="left"  colspan="2" class="border border-primary align-middle" bgcolor="#CEF6EC"><?php echo $sayisi; ?></th>
	<th  width="10%" align="left"  colspan="2" class="border border-primary align-middle" bgcolor="#CEF6EC">
    <input class="form-control text-center" align="center" name="v39" id="v39" type="text" value="0" style="font-weight:bold" tabindex="56" onchange="yabuyr();"/></th>
	<th  width="10%" align="left"  colspan="2" class="border border-primary align-middle" bgcolor="#CEF6EC"><?php echo $aciklama; ?></th>
	<th  width="30%" align="left"  colspan="5" class="border border-primary align-middle" bgcolor="#CEF6EC">
    <input class="form-control" style="font-weight:bold" align="left" name="v40" id="v40" type="text" value="<?php echo $yabanciuyrukdurumu; ?>" tabindex="60"/></th>
    </tr>	
</thead>
</table>
<table class="table table-responsive-sm table-sm">
  <thead>
  <tr>
	<th  width="100%" align="center" bordercolor="black" colspan="20" class="border border-primary text-center" bgcolor="#CEF6EC"><?php echo $ikametbaslik; ?></th>
  </tr>
       <tr>
 <th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><?php echo $yerlesim; ?></th>
  <th  width="25%" align="center"  colspan="5" class="border border-primary text-center" bgcolor="#CEF6EC"><?php echo $ikamet; ?></th>
  <th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><?php echo $yerlesim; ?></th>
  <th  width="25%" align="center"  colspan="5" class="border border-primary text-center" bgcolor="#CEF6EC"><?php echo $ikamet; ?></th> 
       </tr>
	   
	   
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v41" id="v41" tabindex="61"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v42" id="v42" type="text" value="0" style="font-weight:bold" size="8" tabindex="62" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v43" id="v43" tabindex="63"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v44" id="v44" type="text" value="0" style="font-weight:bold" size="8" tabindex="64" onchange="topla10();"/></th>
    </tr>
     <?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v45" id="v45" tabindex="65"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v46" id="v46" type="text" value="0" style="font-weight:bold" size="8" tabindex="66" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v47" id="v47" tabindex="67"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v48" id="v48" type="text" value="0" style="font-weight:bold" size="8" tabindex="68" onchange="topla10();"/></th>
    </tr>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v49" id="v49" tabindex="69"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v50" id="v50" type="text" value="0" style="font-weight:bold" size="8" tabindex="70" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v51" id="v51" tabindex="71"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v52" id="v52" type="text" value="0" style="font-weight:bold" size="8" tabindex="72" onchange="topla10();"/></th>
    </tr>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v53" id="v53" tabindex="73"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v54" id="v54" type="text" value="0" style="font-weight:bold" size="8" tabindex="74" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v55" id="v55" tabindex="75"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v56" id="v56" type="text" value="0" style="font-weight:bold" size="8" tabindex="76" onchange="topla10();"/></th>
    </tr>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v57" id="v57" tabindex="77"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v58" id="v58" type="text" value="0" style="font-weight:bold" size="8" tabindex="78" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v59" id="v59" tabindex="79"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v60" id="v60" type="text" value="0" style="font-weight:bold" size="8" tabindex="80" onchange="topla10();"/></th>
    </tr>
     <?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v61" id="v61" tabindex="81"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v62" id="v62" type="text" value="0" style="font-weight:bold" size="8" tabindex="82" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v63" id="v63" tabindex="83"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v64" id="v64" type="text" value="0" style="font-weight:bold" size="8" tabindex="84" onchange="topla10();"/></th>
    </tr>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v65" id="v65" tabindex="85"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v66" id="v66" type="text" value="0" style="font-weight:bold" size="8" tabindex="86" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v67" id="v67" tabindex="87"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v68" id="v68" type="text" value="0" style="font-weight:bold" size="8" tabindex="88" onchange="topla10();"/></th>
</tr>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v69" id="v69" tabindex="89"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v70" id="v70" type="text" value="0" style="font-weight:bold" size="8" tabindex="90" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v71" id="v71" tabindex="91"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v72" id="v72" type="text" value="0" style="font-weight:bold" size="8" tabindex="92" onchange="topla10();"/></th>
    </tr>	
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v73" id="v73" tabindex="93"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v74" id="v74" type="text" value="0" style="font-weight:bold" size="8" tabindex="94" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v75" id="v75" tabindex="95"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v76" id="v76" type="text" value="0" style="font-weight:bold" size="8" tabindex="96" onchange="topla10();"/></th>
    </tr>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v77" id="v77" tabindex="97"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v78" id="v78" type="text" value="0" style="font-weight:bold" size="8" tabindex="98" onchange="topla10();"/></th>
<?php $resultmah = @mysqli_query($dbhabe,"select mahid,mahadi from mahalleler order by mahadi asc"); ?>	 
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v79" id="v79" tabindex="99"><option value=""><?php echo $mahalle;?></option><?php while($rowmah=mysqli_fetch_array($resultmah)) { ?><option value="<?=$rowmah['mahadi']?>"><?=$rowmah['mahadi']?></option><?php } ?></select></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v80" id="v80" type="text" value="0" style="font-weight:bold" size="8" tabindex="100" onchange="topla10();"/></th>
    </tr>	
<tr>
<th  width="50%" align="center"  colspan="10" class="border border-primary align-middle" bgcolor="#CEF6EC">TOPLAM</th>
<th  width="50%" align="center"  colspan="10" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" name="v81" id="v81" type="text" value="0" style="font-weight:bold"  align="center" size="10" tabindex="101" readonly="true"/></th>
    </tr>   	 
</thead>  	      	   
 </table>
 <table class="table table-responsive-sm table-sm">
  <thead>
  <tr>
	<th  width="100%" align="center" bordercolor="black" colspan="20" class="border border-primary text-center" bgcolor="#CEF6EC"><?php echo $polibaslik;?></th>
  </tr>
       <tr>
 <th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><?php echo $padi;?></th>
  <th  width="25%" align="center"  colspan="5" class="border border-primary text-center" bgcolor="#CEF6EC"><?php echo $bassay;?></th>
  <th  width="25%" align="center"  colspan="5" class="border border-primary text-center" bgcolor="#CEF6EC"><?php echo $musyatan;?></th>
  <th  width="25%" align="center"  colspan="5" class="border border-primary text-center" bgcolor="#CEF6EC"><?php echo $seryatan;?></th> 
       </tr>
	   
	   
<?php $resultpol = @mysqli_query($dbhabe,"select polid,poladi from poliklinikler order by poladi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v82" id="v82" tabindex="102"><option value=""><?php echo $polsec;?></option><?php while($rowpol=mysqli_fetch_array($resultpol)) { ?><option value="<?=$rowpol['poladi']?>"><?=$rowpol['poladi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v83" id="v83" type="text" value="0" style="font-weight:bold" size="8" tabindex="103" onchange="topla11();"/></th>
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v84" id="v84" type="text" value="0" style="font-weight:bold" size="8" tabindex="104" onchange="topla12();"/></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v85" id="v85" type="text" value="0" style="font-weight:bold" size="8" tabindex="105" onchange="topla13();"/></th>
</tr>
     <?php $resultpol = @mysqli_query($dbhabe,"select polid,poladi from poliklinikler order by poladi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v86" id="v86" tabindex="106"><option value=""><?php echo $polsec;?></option><?php while($rowpol=mysqli_fetch_array($resultpol)) { ?><option value="<?=$rowpol['poladi']?>"><?=$rowpol['poladi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v87" id="v87" type="text" value="0" style="font-weight:bold" size="8" tabindex="107" onchange="topla11();"/></th>
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v88" id="v88" type="text" value="0" style="font-weight:bold" size="8" tabindex="108" onchange="topla12();"/></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v89" id="v89" type="text" value="0" style="font-weight:bold" size="8" tabindex="109" onchange="topla13();"/></th>
    </tr>
<?php $resultpol = @mysqli_query($dbhabe,"select polid,poladi from poliklinikler order by poladi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v90" id="v90" tabindex="110"><option value=""><?php echo $polsec;?></option><?php while($rowpol=mysqli_fetch_array($resultpol)) { ?><option value="<?=$rowpol['poladi']?>"><?=$rowpol['poladi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v91" id="v91" type="text" value="0" style="font-weight:bold" size="8" tabindex="111" onchange="topla11();"/></th>
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v92" id="v92" type="text" value="0" style="font-weight:bold" size="8" tabindex="112" onchange="topla12();"/></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v93" id="v93" type="text" value="0" style="font-weight:bold" size="8" tabindex="113" onchange="topla13();"/></th>
    </tr>
<?php $resultpol = @mysqli_query($dbhabe,"select polid,poladi from poliklinikler order by poladi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v94" id="v94" tabindex="114"><option value=""><?php echo $polsec;?></option><?php while($rowpol=mysqli_fetch_array($resultpol)) { ?><option value="<?=$rowpol['poladi']?>"><?=$rowpol['poladi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v95" id="v95" type="text" value="0" style="font-weight:bold" size="8" tabindex="115" onchange="topla11();"/></th>
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v96" id="v96" type="text" value="0" style="font-weight:bold" size="8" tabindex="116" onchange="topla12();"/></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v97" id="v97" type="text" value="0" style="font-weight:bold" size="8" tabindex="117" onchange="topla13();"/></th>
    </tr>
<?php $resultpol = @mysqli_query($dbhabe,"select polid,poladi from poliklinikler order by poladi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v98" id="v98" tabindex="118"><option value=""><?php echo $polsec;?></option><?php while($rowpol=mysqli_fetch_array($resultpol)) { ?><option value="<?=$rowpol['poladi']?>"><?=$rowpol['poladi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v99" id="v99" type="text" value="0" style="font-weight:bold" size="8" tabindex="119" onchange="topla11();"/></th>
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v100" id="v100" type="text" value="0" style="font-weight:bold" size="8" tabindex="120" onchange="topla12();"/></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v101" id="v101" type="text" value="0" style="font-weight:bold" size="8" tabindex="121" onchange="topla13();"/></th>
    </tr>
     <?php $resultpol = @mysqli_query($dbhabe,"select polid,poladi from poliklinikler order by poladi asc"); ?>
<tr>  
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC"><select class="form-control" name="v102" id="v102" tabindex="122"><option value=""><?php echo $polsec;?></option><?php while($rowpol=mysqli_fetch_array($resultpol)) { ?><option value="<?=$rowpol['poladi']?>"><?=$rowpol['poladi']?></option><?php } ?></select></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v103" id="v103" type="text" value="0" style="font-weight:bold" size="8" tabindex="123" onchange="topla11();"/></th>
<th width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v104" id="v104" type="text" value="0" style="font-weight:bold" size="8" tabindex="124" onchange="topla12();"/></th>	
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" align="center" name="v105" id="v105" type="text" value="0" style="font-weight:bold" size="8" tabindex="125" onchange="topla13();"/></th>
    </tr>
<tr>
<th  width="25%" align="center"  colspan="5" class="border border-primary align-middle" bgcolor="#CEF6EC">TOPLAM</th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" name="v106" id="v106" type="text" value="0" style="font-weight:bold"  align="center" size="8" tabindex="126" readonly="true"/></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" name="v107" id="v107" type="text" value="0" style="font-weight:bold"  align="center" size="8" tabindex="127" readonly="true"/></th>
<th  width="25%" align="center"  colspan="5" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control text-center" name="v108" id="v108" type="text" value="0" style="font-weight:bold"  align="center" size="8" tabindex="128" readonly="true"/></th>
    </tr>   
</thead>
  </table> 
<script type="text/javascript">
//Ýkamet Tablosu Eki var mý?
function grafikmev(grafikyes){
if (document.getElementById("grafik").checked){
    document.getElementById("v109").value = "<?php echo $grafikvar;?>";
	document.getElementById("v109").readOnly = false;
	}else{
document.getElementById("v109").value = "";
document.getElementById("v109").readOnly = false;	
	}

}	

</script>
<table class="table table-responsive-sm table-sm">
  <thead>
<tr>
<th  width="30%" align="left"  colspan="8" class="border border-primary align-middle" bgcolor="#CEF6EC"><label id="grafiksec" for="grafik"><?php echo $grafik;?></label>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="grafik" id="grafik" value="" onclick="grafikmev(this.value);"/></th>
<th  width="30%" align="left"  colspan="12" class="border border-primary" bgcolor="#CEF6EC">
  <input class="form-control" style="font-weight:bold" align="left" name="v109" id="v109" type="text" value="" size="118%" tabindex="129"/></th>		
</tr>
</thead>
</table>