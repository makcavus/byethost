<table class="table table-responsive-sm table-sm form013ustaralar" style="background-color:#CCFFFF">
    <thead>
    <tbody>
    <tr>
        <th class="border-0" width="18%"><div align="center">T.C.</div></th>
        <th class="border-0" width="38%"><span></span></th>
        <th class="border-0" width="31%"><div align="right">YIL:</div></th>
        <td class="border-0" width="13%"><div align="left"><strong><?php echo $yilgelen ;?></strong></div></td>
    </tr>
    <tr>
        <th class="border-0"><div align="center">SAĞLIK BAKANLIĞI </div></th>
        <th class="border-0" rowspan="2"><div align="right"><h5>AŞI SONUÇLARI ÇİZELGESİ (SURİYELİLER İÇİN FORM013)</h5></div></th>
        <th class="border-0"><div align="right">AY:</div></th>
        <td class="border-0"><div align="left"><strong><?php echo $aygelen ;?></strong></div></td>
    </tr>
    <tr>
        <th class="border-0"><div align="center">Form No:013 </div></th>
        <th class="border-0"><span></span></th>
        <th class="border-0"><span></span></th>
        <th class="border-0"><span></span></th>
    </tr>
    <tr>
        <th class="border-0"><div align="left">İL:</div></th>
        <td class="border-0"><div align="left"><strong><?php echo $ilinadi ;?></strong></div></td>
        <th class="border-0"><div align="right">TOPLAM NÜFUS:</div></th>
        <td class="border-0"><span>
		  <input class="form-control form-control-sm text-center border-0" name="v118"  type="text" value="<?php echo $verim118 ; ?>" size="15" tabindex="128"></span></td>
    </tr>
    <tr>
        <th class="border-0"><div align="left">İLÇE/TSM:</div></th>
        <td class="border-0"><div align="left"><strong><?php echo $ilceninadi ;?></strong></div></td>
        <th class="border-0"><div align="right">0-11 AY BEBEK NÜFUSU:</div></th>
        <td class="border-0"><span><input class="form-control form-control-sm text-center border-0" name="v119"  type="text" value="<?php echo $verim119 ; ?>" size="15" tabindex="129"></span></td>
    </tr>
    <tr>
        <th class="border-0"><div align="left">KURUM/AH:</div></th>
        <td class="border-0"><div align="left"><strong><?php echo $ocgelen ;?></div></td>
        <th class="border-0"><div align="right">AYLIK 0-11 AY BEBEK NÜFUSU:</div></th>
        <td class="border-0"><span>
		  <input class="form-control form-control-sm text-center border-0" name="v135"  type="text" value="<?php echo $verim135 ; ?>" size="15" tabindex="130"></span></td>
    </tr>
    </tbody>
    </thead>
</table>
<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="2" class="border border-primary align-middle"><div align="center">AŞI</div></th>
        <th colspan="8" scope="col" class="border border-primary"><div align="center">YAŞ GRUPLARINA GÖRE YAPILAN AŞI DOZLARI</div></th>
    </tr>
    <tr>
        <td width="5%" class="border border-primary"><div align="center">Uygu-lama</div></td>
        <td width="18%" class="border border-primary"><div align="center">0 YAŞ<br>(0-11 ay)</div></td>
        <td width="11%" class="border border-primary"><div align="center">1 YAŞ<br>(12-23 ay)</div></td>
        <td width="11%" class="border border-primary"><div align="center">2-4 YAŞ<br>(24-59 ay)</div></td>
        <td width="11%" class="border border-primary align-middle"><div align="center">5-9 YAŞ</div></td>
        <td width="11%" class="border border-primary align-middle"><div align="center">10-14 YAŞ</div></td>
        <td width="11%" class="border border-primary align-middle"><div align="center">15 YAŞ ve Üzeri</div></td>
        <td width="11%" class="border border-primary align-middle"><div align="center">TOPLAM</div></td>
    </tr>
    <tr>
        <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">DaBT-İPA-Hib AŞISI</div></th>
        <th width="5%" class="border border-primary"><div align="center">I</div></th>
        <td width="18%" class="border border-primary"><div align="center">
                <input id="v1" name="v1" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim1 ; ?>" size="15" tabindex="1" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v2" name="v2" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim2 ; ?>" size="15" tabindex="2" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v3" name="v3" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim3 ; ?>" size="15" tabindex="3" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v4" name="v4" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim4 ; ?>" size="15" tabindex="4" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonucu" name="sonucu" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamdbt1 ; ?>" onchange="topla4();"></div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">II</div></th>
        <td width="18%" class="border border-primary"><div align="center">
                <input id="v5" name="v5" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim5 ; ?>" size="15" tabindex="5" onchange="topla1()" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v6" name="v6" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim6 ; ?>" size="15" tabindex="6" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v7" name="v7" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim7 ; ?>" size="15" tabindex="7" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v8" name="v8" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim8 ; ?>" size="15" tabindex="8" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc1" name="sonuc1" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamdbt2 ; ?>" onchange="topla4();">
            </div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">III</div></th>
        <td width="18%" class="border border-primary"><div align="center"><input id="v9" name="v9" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim9 ; ?>" size="15" tabindex="9" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v10" name="v10" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim10 ; ?>" size="15" tabindex="10" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v11" name="v11" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim11 ; ?>" size="15" tabindex="11" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v12" name="v12" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim12 ; ?>" size="15" tabindex="12" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc2" name="sonuc2" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamdbt3 ; ?>" onchange="topla4();">
            </div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">R</div></th>
        <td width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v13" name="v13" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim13 ; ?>" size="15" tabindex="13" onchange="topla3();" onkeydown="topla4();" onkeyup="topla4();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v14" name="v14" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim14 ; ?>" size="15" tabindex="14" onchange="topla3();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v15" name="v15" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim15 ; ?>" size="15" tabindex="15" onchange="topla3();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc3" name="sonuc3" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamdbtR ; ?>" onchange="topla4();"></div></td>
    </tr>
    <tr>
        <th colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM DaBT-IPA-Hib</div></th>
        <td width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc4" name="sonuc4" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamdbt ; ?>">
            </div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013degistirustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr style="border:double;border-color:#0066FF">
        <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center">DaBT-İPA AŞISI</div></th>
        <th width="5%" class="border border-primary"><div align="center"></div></th>
        <td width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center">
                <input id="v16" name="v16" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim16 ; ?>" size="15" tabindex="16" onchange="topla5();"></div></td>
        <td width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v17" name="v17" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim17 ; ?>" size="15" tabindex="17" onchange="topla5();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v18" name="v18" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim18 ; ?>" size="15" tabindex="18" onchange="topla5();"></div></td>
        <td width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc5" name="sonuc5" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamhib ; ?>">
            </div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013degistirustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">KONJUGE PNOMOKOK AŞISI </div></th>
        <th width="5%" class="border border-primary"><div align="center">I</div></th>
        <td width="18%" class="border border-primary"><div align="center"><input id="v19" name="v19" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim19 ; ?>" size="15" tabindex="19" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v20" name="v20" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim20 ; ?>" size="15" tabindex="20" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v21" name="v21" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim21 ; ?>" size="15" tabindex="21" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();">
            </div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v142" name="v142" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim142 ; ?>" size="15" tabindex="21" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc6" name="sonuc6" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamkpa1 ; ?>"></div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">II</div></th>
        <td width="18%" class="border border-primary"><div align="center"><input id="v22" name="v22" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim22 ; ?>" size="15" tabindex="22" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v23" name="v23" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim23 ; ?>" size="15" tabindex="23" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v24" name="v24" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim24 ; ?>" size="15" tabindex="24" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc7" name="sonuc7" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamkpa2 ; ?>"></div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">III</div></th>
        <td width="18%" class="border border-primary"><div align="center"><input id="v25" name="v25" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim25 ; ?>" size="15" tabindex="25" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v26" name="v26" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim26 ; ?>" size="15" tabindex="26" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v27" name="v27" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim27 ; ?>" size="15" tabindex="27" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc8" name="sonuc8" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamkpa3 ; ?>"></div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">R</div></th>
        <td width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v28" name="v28" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim28 ; ?>" size="15" tabindex="28" onchange="topla9();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v29" name="v29" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim29 ; ?>" size="15" tabindex="29" onchange="topla9();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc9" name="sonuc9" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamkpar ; ?>"></div></td>
    </tr>
    <tr>
        <th colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM KPA </div></th>
        <td width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc10" name="sonuc10" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamkpa ; ?>"></div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013degistirustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">ORAL POLİO AŞISI </div></th>
        <th width="5%" class="border border-primary"><div align="center">I</div></th>
        <td width="18%" class="border border-primary"><div align="center"><input id="v30" name="v30" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim30 ; ?>" size="15" tabindex="30" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v31" name="v31" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim31 ; ?>" size="15" tabindex="31" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v32" name="v32" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim32 ; ?>" size="15" tabindex="32" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v33" name="v33" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim33 ; ?>" size="15" tabindex="33" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v34" name="v34" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim34 ; ?>" size="15" tabindex="34" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v35" name="v35" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim35 ; ?>" size="15" tabindex="35" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc11" name="sonuc11" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamopv1 ; ?>">
            </div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">II</div></th>
        <td width="18%"bgcolor="#999999" class="border border-primary gri"><div align="center">
                <input id="v36" name="v36" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim36 ; ?>" size="15" tabindex="36" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v37" name="v37" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim37 ; ?>" size="15" tabindex="37" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v38" name="v38" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim38 ; ?>" size="15" tabindex="38" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v39" name="v39" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim39 ; ?>" size="15" tabindex="39" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v40" name="v40" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim40 ; ?>" size="15" tabindex="40" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v41" name="v41" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim41 ; ?>" size="15" tabindex="41" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc12" name="sonuc12" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamopv2 ; ?>"></div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">III</div></th>
        <td width="18%"bgcolor="#999999" class="border border-primary gri"><div align="center"><input id="v42" name="v42" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim42 ; ?>" size="15" tabindex="42" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"><input id="v43" name="v43" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim43 ; ?>" size="15" tabindex="43" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"><input id="v44" name="v44" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim44 ; ?>" size="15" tabindex="44" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"><input id="v45" name="v45" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim45 ; ?>" size="15" tabindex="45" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"><input id="v46" name="v46" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim46 ; ?>" size="15" tabindex="46" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"><input id="v47" name="v47" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim47 ; ?>" size="15" tabindex="47" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc13" name="sonuc13" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamopv3 ; ?>"></div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">R</div></th>
        <td width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"><input id="v48" name="v48" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim48 ; ?>" size="15" tabindex="48" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"><input id="v49" name="v49" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim49 ; ?>" size="15" tabindex="49" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"><input id="v50" name="v50" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim50 ; ?>" size="15" tabindex="50" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"><input id="v51" name="v51" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim51 ; ?>" size="15" tabindex="51" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center">
                <input id="v52" name="v52" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim52 ; ?>" size="15" tabindex="52" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc14" name="sonuc14" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamopvr ; ?>"></div></td>
    </tr>
    <tr>
        <th colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM ORAL POLİO </div></th>
        <td width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc15" name="sonuc15" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamopv ; ?>"></div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013degistirustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="2" class="border border-primary align-middle" scope="row"><div align="center">K.K.K AŞISI </div></th>
        <th width="5%" class="border border-primary"><div align="center">I</div></th>
        <td width="18%"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v53" name="v53" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim53 ; ?>" size="15" tabindex="53" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v54" name="v54" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim54 ; ?>" size="15" tabindex="54" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v55" name="v55" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim55 ; ?>" size="15" tabindex="55" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v56" name="v56" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim56 ; ?>" size="15" tabindex="56" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v57" name="v57" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim57 ; ?>" size="15" tabindex="57" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc16" name="sonuc16" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamkkk1 ; ?>"></div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">R</div></th>
        <td width="18%"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v58" name="v58" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim58 ; ?>" size="15" tabindex="58" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v59" name="v59" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim59 ; ?>" size="15" tabindex="59" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v60" name="v60" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim60 ; ?>" size="15" tabindex="60" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v61" name="v61" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim61 ; ?>" size="15" tabindex="61" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v62" name="v62" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim62 ; ?>" size="15" tabindex="62" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc17" name="sonuc17" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamkkkr ; ?>"></div></td>
    </tr>
    <tr>
        <th colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM K.K.K. </div></th>
        <td width="18%"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc18" name="sonuc18" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamkkk ; ?>"></div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013degistirustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr style="border:double;border-color:#0066FF">
        <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center">PPD</div></th>
        <th width="5%" class="border border-primary"><div align="center"></div></th>
        <td width="18%" class="border border-primary"><div align="center"><input id="v63" name="v63" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim63 ; ?>" size="15" tabindex="63" onchange="topla19();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v64" name="v64" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim64 ; ?>" size="15" tabindex="64" onchange="topla19();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v65" name="v65" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim65 ; ?>" size="15" tabindex="65" onchange="topla19();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v66" name="v66" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim66 ; ?>" size="15" tabindex="66" onchange="topla19();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v67" name="v67" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim67 ; ?>" size="15" tabindex="67" onchange="topla19();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v68" name="v68" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim68 ; ?>" size="15" tabindex="68" onchange="topla19();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc19" name="sonuc19" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamppd ; ?>">
            </div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013degistirustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr style="border:double;border-color:#0066FF">
        <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center">BCG AŞISI</div></th>
        <th width="5%" class="border border-primary"><div align="center">I</div></th>
        <td width="18%" class="border border-primary"><div align="center"><input id="v69" name="v69" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim69 ; ?>" size="15" tabindex="69" onchange="topla20();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v70" name="v70" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim70 ; ?>" size="15" tabindex="70" onchange="topla20();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v71" name="v71" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim71 ; ?>" size="15" tabindex="71" onchange="topla20();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v72" name="v72" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim72 ; ?>" size="15" tabindex="72" onchange="topla20();">
            </div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"><input id="v73" name="v73" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim73 ; ?>" size="15" tabindex="73" onchange="topla20();"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc20" name="sonuc20" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplambcg ; ?>"></div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013degistirustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <thead>
    <tr>
        <th width="16%" class="border border-primary" colspan="2">&nbsp;</th>
        <th width="6%" class="border border-primary" scope="col"><div align="center">BD</div></th>
        <th width="6%" class="border border-primary" scope="col"><div align="center">Bİ</div></th>
        <th width="6%" class="border border-primary" scope="col"><div align="center">TOPLAM</div></th>
        <th width="66%" class="border border-primary" colspan="6">&nbsp;</th>
    </tr>

    </thead>
    <tbody>

    <tr>
        <th width="11%" rowspan="3" class="border border-primary align-middle" scope="row"><div align="center">HEPATİT-B AŞISI </div></th>
        <th width="5%" class="border border-primary"><div align="center" class="style8">I</div></th>
        <td width="6%" class="border border-primary"><div align="center">
                <input id="v74" name="v74" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim74 ; ?>" size="6" tabindex="74" onchange="toplahep();" onkeydown="topla21();" onkeyup="topla21();" onmousedown="topla24();" onmouseup="topla24();">
            </div></td>
        <td width="6%" class="border border-primary"><div align="center"><input id="v75" name="v75" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim75 ; ?>" size="6" tabindex="75" onchange="toplahep();" onkeydown="topla21();" onkeyup="topla21();" onmousedown="topla24();" onmouseup="topla24();"></div></td>
        <td width="6%" class="border border-primary"><div align="center"><input id="v76" name="v76" class="form-control form-control-sm text-center border-0" type="text" size="6" readonly="true" value="<?php echo $toplamhepbid ; ?>"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v77" name="v77"  class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim77 ; ?>" size="15" tabindex="77" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v78" name="v78" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim78 ; ?>" size="15" tabindex="78" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v79" name="v79" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim79 ; ?>" size="15" tabindex="79" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v80" name="v80" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim80 ; ?>" size="15" tabindex="80" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v81" name="v81" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim81 ; ?>" size="15" tabindex="81" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc21" name="sonuc21" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamhep1 ; ?>"></div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">II</div></th>
        <td width="18%" colspan="3" class="border border-primary"><div align="center"><input id="v82" name="v82" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim82 ; ?>" size="15" tabindex="82" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v83" name="v83" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim83 ; ?>" size="15" tabindex="83" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v84" name="v84" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim84 ; ?>" size="15" tabindex="84" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v85" name="v85" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim85 ; ?>" size="15" tabindex="85" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v86" name="v86" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim86 ; ?>" size="15" tabindex="86" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v87" name="v87" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim87 ; ?>" size="15" tabindex="87" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc22" name="sonuc22" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamhep2 ; ?>"></div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">III</div></th>
        <td width="18%" colspan="3" class="border border-primary"><div align="center">
                <input id="v88" name="v88" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim88 ; ?>" size="15" tabindex="88" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v89" name="v89" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim89 ; ?>" size="15" tabindex="89" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v90" name="v90" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim90 ; ?>" size="15" tabindex="90" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v91" name="v91" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim91 ; ?>" size="15" tabindex="91" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v92" name="v92" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim92 ; ?>" size="15" tabindex="92" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v93" name="v93" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim93 ; ?>" size="15" tabindex="93" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc23" name="sonuc23" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamhep3 ; ?>">
            </div></td>
    </tr>
    <tr>
        <th colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM HEPATİT-B </div></th>
        <td width="18%" colspan="3"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc24" name="sonuc24" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamhep ; ?>"></div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013degistirustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="2" class="border border-primary align-middle" scope="row"><div align="center">HEPATİT-A AŞISI </div></th>
        <th width="5%" class="border border-primary"><div align="center">I</div></th>
        <td width="18%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v1202"  type="text" value="<?php echo $verim120 ; ?>" size="15" tabindex="94" id="v120" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v121"  type="text" value="<?php echo $verim121 ; ?>" size="15" tabindex="95" id="v121" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v122"  type="text" value="<?php echo $verim122 ; ?>" size="15" tabindex="96" id="v122" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v123"  type="text" value="<?php echo $verim123 ; ?>" size="15" tabindex="97" id="v123" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v124"  type="text" value="<?php echo $verim124 ; ?>" size="15" tabindex="98" id="v124" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();">
            </div></td>

        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" id="sonuc36" name="sonuc36" type="text" size="15" readonly="true" value="<?php echo $hepa1top ; ?>">
            </div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">R</div></th>
        <td width="18%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v125"  type="text" value="<?php echo $verim125 ; ?>" size="15" tabindex="99" id="v125" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v126"  type="text" value="<?php echo $verim126 ; ?>" size="15" tabindex="100" id="v126" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v127"  type="text" value="<?php echo $verim127 ; ?>" size="15" tabindex="101" id="v127" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v128"  type="text" value="<?php echo $verim128 ; ?>" size="15" tabindex="102" id="v128" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v129"  type="text" value="<?php echo $verim129 ; ?>" size="15" tabindex="103" id="v129" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();">
            </div></td>

        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" id="sonuc37" name="sonuc37" type="text" size="15" readonly="true" value="<?php echo $heparaptop ; ?>">
            </div></td>
    </tr>
    <tr>
        <th colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM HEPATİT-A </div></th>
        <td width="18%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>

        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc38" name="sonuc38" type="text" size="15" readonly="true" value="<?php echo $toplamhepa ; ?>"></div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013degistirustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr style="border:double;border-color:#0066FF">
        <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center">SU ÇİÇEĞİ AŞISI</div></th>
        <th width="5%" class="border border-primary"><div align="center"></div></th>
        <td width="18%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v130"  type="text" value="<?php echo $verim130 ; ?>" size="15" tabindex="104" id="v130" onchange="topla39();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v131"  type="text" value="<?php echo $verim131 ; ?>" size="15" tabindex="105" id="v131" onchange="topla39();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v132"  type="text" value="<?php echo $verim132 ; ?>" size="15" tabindex="106" id="v132" onchange="topla39();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v133"  type="text" value="<?php echo $verim133 ; ?>" size="15" tabindex="107" id="v133" onchange="topla39();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v134"  type="text" value="<?php echo $verim134 ; ?>" size="15" tabindex="108" id="v134" onchange="topla39();"></div></td>

        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" id="sonuc39" name="sonuc39" type="text" size="15" readonly="true" value="<?php echo $suctop ; ?>">
            </div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013degistirustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr style="border:double;border-color:#0066FF">
        <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center" class="style7">KIZAMIKÇIK AŞISI </div></th>
        <th width="5%" class="border border-primary"><div align="center"></div></th>
        <td width="18%"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"><input id="v94" name="v94" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim94 ; ?>" size="15" tabindex="94" onchange="topla25();"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center">
                <input id="v95" name="v95" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim95 ; ?>" size="15" tabindex="95" onchange="topla25();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v96" name="v96" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim96 ; ?>" size="15" tabindex="109" onchange="topla25();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc25" name="sonuc25" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamkizcik ; ?>"></div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013degistirustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr style="border:double;border-color:#0066FF">
        <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center" class="style19">OKUL Td  AŞISI </div></th>
        <th width="5%" class="border border-primary"><div align="center"></div></th>
        <td width="18%"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center"><input id="v97" name="v97" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim97 ; ?>" size="15" tabindex="97" onchange="topla26();"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center">
                <input id="v98" name="v98" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim98 ; ?>" size="15" tabindex="98" onchange="topla26();"></div></td>
        <td width="11%"bgcolor="#999999" class="border border-primary gri"><div align="center">
                <input id="v99" name="v99" class="form-control form-control-sm text-center border-0"  type="hidden" value="<?php echo $verim99 ; ?>" size="15" tabindex="99" onchange="topla26();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v100" name="v100" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim100 ; ?>" size="15" tabindex="110" onchange="topla26();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="v101" name="v101" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim101 ; ?>" size="15" tabindex="111" onchange="topla26();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc26" name="sonuc26" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamokul ; ?>">
            </div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013degistirustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr style="border:double;border-color:#0066FF">
        <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center">DİĞER Td</div></th>
        <th width="5%" class="border border-primary"><div align="center"></div></th>
        <td width="18%" class="border border-primary"><div align="center"><input id="v102" name="v102" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim102 ; ?>" size="15" tabindex="112" onchange="topla27();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v103" name="v103" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim103 ; ?>" size="15" tabindex="113" onchange="topla27();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v104" name="v104" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim104 ; ?>" size="15" tabindex="114" onchange="topla27();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v105" name="v105" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim105 ; ?>" size="15" tabindex="115" onchange="topla27();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v106" name="v106" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim106 ; ?>" size="15" tabindex="116" onchange="topla27();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="v107" name="v107" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim107 ; ?>" size="15" tabindex="117" onchange="topla27();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input id="sonuc27" name="sonuc27" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamdigertd ; ?>"></div></td>
    </tr>
    </tbody>
</table>
<table class="table table-responsive-sm table-sm form013degistirtdaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" class="border border-primary"  scope="col"><div align="center">&nbsp;</div></th>
        <th width="5%" class="border border-primary" scope="col"><div align="center">&nbsp;</div></th>
        <th width="40%" bgcolor="#999999"  class="border border-primary" scope="col" colspan="3"><div align="center">GEBE</div></th>
        <th width="33%" bgcolor="#999999"  class="border border-primary" scope="col" colspan="3"><div align="center">GEBE DEĞİL</div> </th>
        <th width="11%" bgcolor="#999999"  class="border border-primary" scope="col"><div align="center">&nbsp;</div></th>
    </tr>
    <tr>
        <th width="11%" rowspan="5" class="border border-primary align-middle"><div align="center">15-49 YAŞ KADIN Td  AŞISI</div></th>
        <th width="5%" class="border border-primary"><div align="center">Td1</div></th>
        <td width="35%" class="border border-primary" colspan="3"><div align="center">
                <input id="v108" name="v108" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim108 ; ?>" size="15" tabindex="118" onchange="topla28();" onkeydown="topla30();" onkeyup="topla30();" onmousedown="topla35();" onmouseup="topla35();">
            </div>
        </td>
        <td width="38%" class="border border-primary" colspan="3"><div align="center">
                <input id="v113" name="v113" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim113 ; ?>" size="15" tabindex="123" onchange="topla29();" onkeydown="topla30();" onkeyup="topla30();" onmousedown="topla35();" onmouseup="topla35();">
            </div>
        </td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc30" name="sonuc30" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamgebetet1 ; ?>">
            </div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">Td2</div></th>
        <td  width="35%" class="border border-primary" colspan="3"><div align="center">
                <input id="v109" name="v109" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim109 ; ?>" size="15" tabindex="119" onchange="topla28();" onkeydown="topla31();" onkeyup="topla31();" onmousedown="topla35();" onmouseup="topla35();">
            </div>
        </td>
        <td width="38%"   class="border border-primary" colspan="3"><div align="center">
                <input id="v114" name="v114" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim114 ; ?>" size="15" tabindex="124" onchange="topla29();" onkeydown="topla31();" onkeyup="topla31();" onmousedown="topla35();" onmouseup="topla35();">
            </div>
        </td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc31" name="sonuc31" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamgebetet2 ; ?>">
            </div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">Td3</div></th>
        <td  width="35%" class="border border-primary" colspan="3"><div align="center">
                <input id="v110" name="v110" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim110 ; ?>" size="15" tabindex="120" onchange="topla28();" onkeydown="topla32();" onkeyup="topla32();" onmousedown="topla35();" onmouseup="topla35();">
            </div>
        </td>
        <td  width="38%"   class="border border-primary" colspan="3"><div align="center">
                <input id="v115" name="v115" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim115 ; ?>" size="15" tabindex="125" onchange="topla29();" onkeydown="topla32();" onkeyup="topla32();" onmousedown="topla35();" onmouseup="topla35();">
            </div>
        </td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc32" name="sonuc32" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamgebetet3 ; ?>">
            </div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">Td4</div></th>
        <td  width="35%"   class="border border-primary" colspan="3"><div align="center">
                <input id="v111" name="v111" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim111 ; ?>" size="15" tabindex="121" onchange="topla28();" onkeydown="topla33();" onkeyup="topla33();" onmousedown="topla35();" onmouseup="topla35();">
            </div>
        </td>
        <td  width="38%"   class="border border-primary" colspan="3"><div align="center">
                <input id="v116" name="v116" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim116 ; ?>" size="15" tabindex="126" onchange="topla29();" onkeydown="topla33();" onkeyup="topla33();" onmousedown="topla35();" onmouseup="topla35();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc33" name="sonuc33" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamgebetet4 ; ?>">
            </div></td>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">Td5</div></th>
        <td  width="35%"   class="border border-primary" colspan="3"><div align="center">
                <input id="v112" name="v112" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim112 ; ?>" size="15" tabindex="122" onchange="topla28();" onkeydown="topla34();" onkeyup="topla34();" onmousedown="topla35();" onmouseup="topla35();">
            </div>
        </td>
        <td  width="38%"   class="border border-primary" colspan="3"><div align="center">
                <input id="v117" name="v117" class="form-control form-control-sm text-center border-0"  type="text" value="<?php echo $verim117 ; ?>" size="15" tabindex="127" onchange="topla29();" onkeydown="topla34();" onkeyup="topla34();" onmousedown="topla35();" onmouseup="topla35();">
            </div>
        </td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc34" name="sonuc34" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamgebetet5 ; ?>">
            </div></td>
    </tr>
    <tr>
        <th colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM Td</div></th>
        <td  width="35%"  class="border border-primary" colspan="3"><div align="center">
                <input id="sonuc28" name="sonuc28" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamgebe ; ?>">
            </div>
        </td>
        <td  width="38%"   class="border border-primary" colspan="3"><div align="center">
                <input id="sonuc29" name="sonuc29" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamgebedegil ; ?>">
            </div>
        </td>
        <td width="11%" class="border border-primary"><div align="center">
                <input id="sonuc35" name="sonuc35" class="form-control form-control-sm text-center border-0" type="text" size="15" readonly="true" value="<?php echo $toplamgebetettop ; ?>">
            </div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013degistirustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr style="border:double;border-color:#0066FF">
        <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center">KIZAMIK AŞISI</div></th>
        <td width="5%" class="border border-primary"><div align="center"></div></td>
        <td width="18%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v136" type="text" value="<?php echo $verim136 ; ?>" size="15" id="v136" tabindex="34" onchange="topla40();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v137" type="text" value="<?php echo $verim137 ; ?>" size="15" id="v137" onchange="topla40();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v138" type="text" value="<?php echo $verim138 ; ?>" size="15" id="v138" onchange="topla40();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v139" type="text" value="<?php echo $verim139 ; ?>" size="15" id="v139" onchange="topla40();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v140" type="text" value="<?php echo $verim140 ; ?>" size="15"  id="v140" onchange="topla40();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v141" type="text" value="<?php echo $verim141 ; ?>" size="15" id="v141" onchange="topla40();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" id="sonuc40" name="sonuc40" type="text" size="15" readonly="true"  value="<?php echo $toplamkizamik ; ?>">
            </div></td>
    </tr>
    </tbody>
</table>
