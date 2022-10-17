<table class="table table-responsive-sm table-sm form013kayitustaralar" style="background-color:#CCFFFF">
    <thead>
    <tr>
        <td class="border-0" width="18%"><div align="center">T.C.</div></td>
        <td class="border-0" width="38%"><span></span></td>
        <td class="border-0" width="31%"><div align="right">YIL:</div></td>
        <td class="border-0" width="13%"><div align="left"><strong><?php echo $yilgelen ;?></strong></div></td>
    </tr>
    <tr>
        <td class="border-0"><div align="center">SAĞLIK BAKANLIĞI </div></td>
        <td class="border-0" rowspan="2"><div align="right"><h5>AŞI SONUÇLARI ÇİZELGESİ (SURİYELİLER İÇİN FORM013)</h5></div></td>
        <td class="border-0"><div align="right">AY:</div></td>
        <td class="border-0"><div align="left"><strong><?php echo $aygelen ;?></strong></div></td>
    </tr>
    <tr>
        <td class="border-0"><div align="center">Form No:013 </div></td>
        <td class="border-0"><span></span></td>
        <td class="border-0"><span></span></td>
        <td class="border-0"><span></span></td>
    </tr>
    <tr>
        <td class="border-0"><div align="left">İL:</div></td>
        <td class="border-0"><div align="left"><strong><?php echo $ilinadine ;?></strong></div></td>
        <td class="border-0"><div align="right">TOPLAM NÜFUS:</div></td>
        <td class="border-0"><span>
            <input autofocus class="form-control form-control-sm text-center border-0" name="v118"  type="text" value="0" tabindex="1">
          </span></td>
    </tr>
    <tr>
        <td class="border-0"><div align="left">İLÇE/TSM:</div></td>
        <td class="border-0"><div align="left"><strong><?php echo $ilceninadine ;?></strong></div></td>
        <td class="border-0"><div align="right">0-11 AY BEBEK NÜFUSU:</div></td>
        <td class="border-0"><span>
            <input class="form-control form-control-sm text-center border-0" name="v119"  type="text" value="0" tabindex="2">
          </span></td>
    </tr>
    <tr>
        <td class="border-0"><div align="left">KURUM/AH:</div></td>
        <td class="border-0"><div align="left"><strong><?php echo $ocgelen ;?></div></td>
        <td class="border-0"><div align="right">AYLIK 0-11 AY BEBEK NÜFUSU:</div></td>
        <td class="border-0"><span>
		  <input class="form-control form-control-sm text-center border-0" name="v135"  type="text" value="0" tabindex="3"></span></td>
    </tr>
    </thead>
</table>
<table class="table table-responsive-sm table-sm form013kayitustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="2" class="border border-primary align-middle"><div align="center">AŞI</div></th>
        <th colspan="9" scope="col" class="border border-primary"><div align="center">YAŞ GRUPLARINA GÖRE YAPILAN AŞI DOZLARI</div></th>
    </tr>
    <tr>
        <td width="5%" class="border border-primary"><div align="center">Uygu-lama</div></td>
        <td width="18%" class="border border-primary"><div align="center">0 YAŞ<br>(0-11 ay)</div></td>
        <td width="10%" class="border border-primary"><div align="center">1 YAŞ<br>(12-23 ay)</div></td>
        <td width="10%" class="border border-primary"><div align="center">2-4 YAŞ<br>(24-59 ay)</div></td>
        <td width="10%" class="border border-primary align-middle"><div align="center">5-9 YAŞ</div></td>
        <td width="10%" class="border border-primary align-middle"><div align="center">10-14 YAŞ</div></td>
        <td width="10%" class="border border-primary align-middle"><div align="center">15 YAŞ ve Üzeri</div></td>
        <td width="2%" class="border border-primary">&nbsp;</td>
        <td width="11%" class="border border-primary align-middle"><div align="center">TOPLAM</div></td>
    </tr>
    <tr>
        <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">DaBT-İPA-Hib AŞISI</div></th>
        <td width="5%" class="border border-primary"><div align="center">I</div></td>
        <td width="18%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" id="v1" name="v1"  type="text" value="0" size="15" tabindex="4" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"> <input class="form-control form-control-sm text-center border-0" id="v2" name="v2"  type="text" value="0" size="15" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"> <input class="form-control form-control-sm text-center border-0" id="v3" name="v3"  type="text" value="0" size="15" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"> <input class="form-control form-control-sm text-center border-0" id="v4" name="v4"  type="text" value="0" size="15" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" class="border border-primary"><input class="style1" name="button" type="button"  onclick="topla();" value=" = "></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonucu" name="sonucu" type="text" size="15" readonly="true" value="0"></div></td>
    </tr>
    <tr>
        <td width="5%" class="border border-primary"><div align="center" class="style8">II</div></td>
        <td width="18%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v5"  type="text" value="0" size="15" tabindex="5" id="v5" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v6"  type="text" value="0" size="15" id="v6" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v7"  type="text" value="0" size="15" id="v7" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">

                <input class="form-control form-control-sm text-center border-0" name="v8"  type="text" value="0" size="15" id="v8" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="10%"  bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" class="border border-primary"><input class="style1" name="button1" type="button"  onclick="topla1();" value=" = "></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc1" name="sonuc1" type="text" size="15" readonly="true" value="0"></div></td>
    </tr>
    <tr>
        <td width="5%" class="border border-primary"><div align="center" class="style8">III</div></td>
        <td width="18%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v9"  type="text" value="0" size="15" tabindex="6" id="v9" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v10"  type="text" value="0" size="15" id="v10" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v11"  type="text" value="0" size="15" id="v11" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v12"  type="text" value="0" size="15" id="v12" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="10%"  bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" class="border border-primary"><input class="style1" name="button2" type="button"  onclick="topla2();" value=" = "></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc2" name="sonuc2" type="text" size="15" readonly="true" value="0"></div></td>
    </tr>
    <tr>
        <td width="5%" class="border border-primary"><div align="center" class="style8">R</div></td>
        <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v13"  type="text" value="0" size="15" tabindex="7" id="v13" onchange="topla3();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v14"  type="text" value="0" size="15" id="v14" onchange="topla3();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v15"  type="text" value="0" size="15" id="v15" onchange="topla3();" onkeydown="topla4();" onkeyup="topla4();">
            </div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%"  bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"></td>
        <td width="2%" class="border border-primary"><input class="style1" name="button3" type="button"  onclick="topla3();" value=" = "></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc3" name="sonuc3" type="text" size="15" readonly="true" value="0"></div></td>
    </tr>
    <tr>
        <th colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM DaBT-IPA-Hib</div></th>
        <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" class="border border-primary"><input name="button4" type="button" class="style1"  onclick="topla4();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc4" name="sonuc4" type="text" size="15" readonly="true" value="0"></div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr style="border:double;border-color:#0066FF">
        <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center">DaBT-İPA AŞISI</div></th>
        <td width="5%" class="border border-primary"><div align="center">&nbsp;</div></td>
        <td width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v16"  type="hidden" value="0" size="15" tabindex="16" id="v16" onchange="topla5();">
            </div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center">

            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v17"  type="text" value="0" size="15" id="v17" onchange="topla5();">
            </div></td>
        <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v18"  type="text" value="0" size="15"  id="v18" onchange="topla5();"></div></td>
        <td width="10%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" class="border border-primary"><input name="button5" type="button" class="style1"  onclick="topla5();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc5" name="sonuc5" type="text" size="15" readonly="true" value="0"></div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">KONJUGE PNOMOKOK AŞISI </div></th>
        <td width="5%" class="border border-primary"><div align="center" class="style8">I</div></td>
        <td width="18%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v19"  type="text" value="0" size="15" tabindex="8" id="v19" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v20"  type="text" value="0" size="15" id="v20" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v21"  type="text" value="0" size="15" id="v21" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();">
            </div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v142"  type="text" value="0" size="15" id="v142" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();">
            </div></td>
        <td width="2%" class="border border-primary"><input name="button6" type="button" class="style1"  onclick="topla6();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc6" name="sonuc6" type="text" size="15" readonly="true" value="0"></div></td>
    </tr>
    <tr>
        <td width="5%" class="border border-primary"><div align="center" class="style8">II</div></td>
        <td width="18%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v22"  type="text" value="0" size="15" tabindex="9" id="v22" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v23"  type="text" value="0" size="15" id="v23" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v24"  type="text" value="0" size="15" id="v24" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();">
            </div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" class="border border-primary"><input name="button7" type="button" class="style1"  onclick="topla7();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc7" name="sonuc7" type="text" size="15" readonly="true" value="0"></div></td>
    </tr>
    <tr>
        <td width="5%" class="border border-primary"><div align="center" class="style8">III</div></td>
        <td width="18%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v25"  type="text" value="0" size="15" tabindex="10" id="v25" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v26"  type="text" value="0" size="15" id="v26" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v27"  type="text" value="0" size="15" id="v27" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" class="border border-primary"><input name="button8" type="button" class="style1"  onclick="topla8();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" id="sonuc8" name="sonuc8" type="text" size="15" readonly="true" value="0">
            </div></td>
    </tr>
    <tr>
        <td width="5%" class="border border-primary"><div align="center" class="style8">R</div></td>
        <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v28"  type="text" value="0" size="15" tabindex="11" id="v28" onchange="topla9();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v29"  type="text" value="0" size="15" id="v29" onchange="topla9();" onkeydown="topla10();" onkeyup="topla10();"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" class="border border-primary"><input name="button9" type="button" class="style1"  onclick="topla9();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" id="sonuc9" name="sonuc9" type="text" size="15" readonly="true" value="0">
            </div></td>
    </tr>
    <tr>
        <th colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM KPA </div></th>
        <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" class="border border-primary"><input name="button10" type="button" class="style1"  onclick="topla10();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc10" name="sonuc10" type="text" size="15" readonly="true" value="0"></div></td>
    </tr>
</table>
</tbody>

<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">ORAL POLİO  AŞISI </div></th>
        <td width="5%" class="border border-primary"><div align="center" class="style8">I</div></td>
        <td width="18%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v30"  type="text" value="0" size="15" tabindex="12" id="v30" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v31"  type="text" value="0" size="15" id="v31" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v32"  type="text" value="0" size="15" id="v32" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v33"  type="text" value="0" size="15" id="v33" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();">
            </div></td>
        <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v34"  type="text" value="0" size="15" id="v34" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v35"  type="text" value="0" size="15" id="v35" onchange="topla11();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="2%" class="border border-primary"><input name="button11" type="button" class="style1"  onclick="topla11();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc11" name="sonuc11" type="text" size="15" readonly="true" value="0"></div></td>
    </tr>
    <tr>
        <td width="5%" class="border border-primary"><div align="center" class="style8">II</div></td>
        <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v36"  type="hidden" value="0" size="15" tabindex="36" id="v36" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v37"  type="text" value="0" size="15" tabindex="13" id="v37" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();">
            </div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v38"  type="text" value="0" size="15" id="v38" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v39"  type="text" value="0" size="15" id="v39" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v40"  type="text" value="0" size="15" id="v40" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v41"  type="text" value="0" size="15" id="v41" onchange="topla12();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="2%" class="border border-primary"><input name="button12" type="button" class="style1"  onclick="topla12();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" id="sonuc12" name="sonuc12" type="text" size="15" readonly="true" value="0">
            </div></td>
    </tr>
    <tr>
        <td width="5%" class="border border-primary"><div align="center" class="style8">III</div></td>
        <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v42"  type="hidden" value="0" size="15" tabindex="42" id="v42" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v43"  type="hidden" value="0" size="15" tabindex="43" id="v43" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();">
            </div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v44"  type="hidden" value="0" size="15" tabindex="44" id="v44" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v45"  type="hidden" value="0" size="15" tabindex="45" id="v45" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="10%" bgcolor="#999999" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v46"  type="hidden" value="0" size="15" tabindex="46" id="v46" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="10%" bgcolor="#999999" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v47"  type="hidden" value="0" size="15" tabindex="47" id="v47" onchange="topla13();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="2%" class="border border-primary"><input name="button13" type="button" class="style1"  onclick="topla13();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc13" name="sonuc13" type="text" size="15" readonly="true" value="0"></div></td>
    </tr>
    <tr>
        <td width="5%" class="border border-primary"><div align="center" class="style8">R</div></td>
        <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v48"  type="hidden" value="0" size="15" tabindex="48" id="v48" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v49"  type="hidden" value="0" size="15" tabindex="49" id="v49" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();">
            </div></td>
        <td width="11%" bgcolor="#999999" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v50"  type="hidden" value="0" size="15" tabindex="50" id="v50" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();"></div></td>
        <td width="10%" bgcolor="#999999" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v51"  type="hidden" value="0" size="15" tabindex="51" id="v51" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();">
            </div></td>
        <td width="10%" bgcolor="#999999" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v52"  type="hidden" value="0" size="15" tabindex="52" id="v52" onchange="topla14();" onkeydown="topla15();" onkeyup="topla15();">
            </div></td>
        <td width="2%" class="border border-primary"><input name="button14" type="button" class="style1"  onclick="topla14();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc14" name="sonuc14" type="text" size="15" readonly="true" value="0"></div></td>
    </tr>
    <tr>
        <th colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM ORAL POLİO </div></th>
        <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" class="border border-primary"><input name="button15" type="button" class="style1"  onclick="topla15();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc15" name="sonuc15" type="text" size="15" readonly="true" value="0"></div></td>
    </tr>
    </tbody>

    <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
        <tbody>
        <tr>
            <th width="11%" rowspan="2" class="border border-primary align-middle" scope="row"><div align="center">K.K.K AŞISI </div></th>
            <td width="5%" class="border border-primary"><div align="center" class="style8">I</div></td>
            <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v53"  type="text" value="0" size="15" tabindex="14" id="v53" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();">
                </div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v54"  type="text" value="0" size="15" id="v54" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v55"  type="text" value="0" size="15" id="v55" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();">
                </div></td>
            <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v56"  type="text" value="0" size="15" id="v56" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
            <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v57"  type="text" value="0" size="15"  id="v57" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();">
                </div></td>
            <td width="2%" class="border border-primary"><input name="button16" type="button" class="style1"  onclick="topla16();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc16" name="sonuc16" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        <tr>
            <td width="5%" class="border border-primary"><div align="center" class="style8">R</div></td>
            <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v58"  type="text" value="0" size="15" id="v58" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v59"  type="text" value="0" size="15" id="v59" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v60"  type="text" value="0" size="15" id="v60" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
            <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v61"  type="text" value="0" size="15"  id="v61" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
            <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v62"  type="text" value="0" size="15" id="v62" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"></div></td>
            <td width="2%" class="border border-primary"><input name="button17" type="button" class="style1"  onclick="topla17();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc17" name="sonuc17" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        <tr>
            <th colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM K.K.K. </div></th>
            <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="2%" class="border border-primary"><input name="button18" type="button" class="style1"  onclick="topla18();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc18" name="sonuc18" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        </tbody>
    </table>

    <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
        <tbody>
        <tr style="border:double;border-color:#0066FF">
            <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center">PPD</div></th>
            <td width="5%" class="border border-primary"><div align="center" class="style8"></div></td>
            <td width="18%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v63"  type="text" value="0" size="15" id="v63" onchange="topla19();">
                </div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v64"  type="text" value="0" size="15" id="v64" onchange="topla19();">
                </div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v65"  type="text" value="0" size="15" id="v65" onchange="topla19();"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v66"  type="text" value="0" size="15" id="v66" onchange="topla19();"></div></td>
            <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v67"  type="text" value="0" size="15"  id="v67" onchange="topla19();"></div></td>
            <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v68"  type="text" value="0" size="15" id="v68" onchange="topla19();"></div></td>
            <td width="2%" class="border border-primary"><input name="button19" type="button" class="style1"  onclick="topla19();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" id="sonuc19" name="sonuc19" type="text" size="15" readonly="true" value="0">
                </div></td>
        </tr>
        </tbody>
    </table>

    <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
        <tbody>
        <tr style="border:double;border-color:#0066FF">
            <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center">BCG AŞISI</div></th>
            <td width="5%" class="border border-primary"><div align="center" class="style8">I</div></td>
            <td width="18%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v69"  type="text" value="0" size="15" tabindex="15" id="v69" onchange="topla20();">
                </div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v70"  type="text" value="0" size="15" id="v70" onchange="topla20();"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v71"  type="text" value="0" size="15" id="v71" onchange="topla20();"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v72"  type="text" value="0" size="15" id="v72" onchange="topla20();"></div></td>
            <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v73"  type="hidden" value="0" size="15" tabindex="73" id="v73" onchange="topla20();">
                </div></td>
            <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="2%" class="border border-primary"><input name="button20" type="button" class="style1"  onclick="topla20();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" id="sonuc20" name="sonuc20" type="text" size="15" readonly="true" value="0">
                </div></td>
        </tr>
        </tbody>
    </table>


    <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
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
            <td width="5%" class="border border-primary"><div align="center" class="style8">I</div></td>
            <td width="6%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v74"  type="text" value="0" size="6" tabindex="16" id="v74" onchange="toplahep();" onmousedown="topla24();" onmouseup="topla24();">
                </div></td>
            <td width="6%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v75"  type="text" value="0" size="6" tabindex="17" id="v75" onchange="toplahep();" onmousedown="topla24();" onmouseup="topla24();">
                </div></td>
            <td width="6%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="v76" name="v76" type="text" size="6" readonly="true" value="0"></div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v77"  type="text" value="0" size="15" id="v77" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();">
                </div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v78"  type="text" value="0" size="15" id="v78" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();">
                </div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v79"  type="text" value="0" size="15" id="v79" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();">
                </div></td>
            <td width="10%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v80"  type="text" value="0" size="15" id="v80" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();">
                </div></td>
            <td width="10%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v81"  type="text" value="0" size="15" id="v81" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();">
                </div></td>
            <td width="2%" class="border border-primary"><input name="button21" type="button" class="style1"  onclick="topla21();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc21" name="sonuc21" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        <tr>
            <td width="5%" class="border border-primary"><div align="center" class="style8">II</div></td>
            <td width="18%" colspan="3" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v82"  type="text" value="0" size="15" tabindex="18" id="v82" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v83"  type="text" value="0" size="15" id="v83" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v84"  type="text" value="0" size="15" id="v84" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v85"  type="text" value="0" size="15" id="v85" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
            <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v86"  type="text" value="0" size="15" id="v86" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
            <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v87"  type="text" value="0" size="15" id="v87" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
            <td width="2%" class="border border-primary"><input name="button22" type="button" class="style1"  onclick="topla22();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc22" name="sonuc22" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        <td width="5%" class="border border-primary"><div align="center" class="style8">III</div></td>
        <td cwidth="18%" colspan="3" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v88"  type="text" value="0" size="15" tabindex="19" id="v88" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v89"  type="text" value="0" size="15" id="v89" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v90"  type="text" value="0" size="15" id="v90" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v91"  type="text" value="0" size="15" id="v91" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="10%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v92"  type="text" value="0" size="15" id="v92" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();">
            </div></td>
        <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v93"  type="text" value="0" size="15" id="v93" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"></div></td>
        <td width="2%" class="border border-primary"><input name="button23" type="button" class="style1"  onclick="topla23();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc23" name="sonuc23" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        <tr>
            <th width="16%" colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM HEPATİT-B </div></th>
            <td width="18%" colspan="3" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="2%" class="border border-primary"><input name="button24" type="button" class="style1"  onclick="topla24();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc24" name="sonuc24" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        </tbody>
    </table>

    <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
        <tbody>
        <tr>
            <th width="11%" rowspan="2" class="border border-primary align-middle" scope="row"><div align="center">HEPATİT-A AŞISI </div></th>
            <td width="5%" class="border border-primary"><div align="center" class="style8">I</div></td>
            <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v120"  type="text" value="0" size="15" tabindex="20" id="v120" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();">
                </div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v121"  type="text" value="0" size="15" id="v121" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();">
                </div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v122"  type="text" value="0" size="15" id="v122" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();">
                </div></td>
            <td width="10%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v123"  type="text" value="0" size="15" id="v123" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();">
                </div></td>
            <td width="10%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v124"  type="text" value="0" size="15" id="v124" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();">
                </div></td>
            <td width="2%" class="border border-primary"><input name="button36" type="button" class="style1"  onclick="topla36();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc36" name="sonuc36" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        <tr>
            <td width="5%" class="border border-primary"><div align="center" class="style8">R</div></td>
            <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v125"  type="text" value="0" size="15" id="v125" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"></div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v126"  type="text" value="0" size="15" tabindex="21" id="v126" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();">
                </div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v127"  type="text" value="0" size="15" id="v127" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"></div></td>
            <td width="10%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v128"  type="text" value="0" size="15" id="v128" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"></div></td>
            <td width="10%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v129"  type="text" value="0" size="15" id="v129" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"></div></td>
            <td width="2%" class="border border-primary"><input name="button37" type="button" class="style1"  onclick="topla37();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc37" name="sonuc37" type="text" size="15" readonly="true" value="0">
                </div></td>
        </tr>
        <tr>
            <th colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM HEPATİT-A </div></th>
            <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="2%" class="border border-primary"><input name="button38" type="button" class="style1"  onclick="topla38();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc38" name="sonuc38" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        </tbody>
    </table>
    <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
        <tbody>
        <tr style="border:double;border-color:#0066FF">
            <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center">SU ÇİÇEĞİ AŞISI</div></th>
            <td width="5%" class="border border-primary"><div align="center" class="style8"></div></td>
            <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v130"  type="text" value="0" size="15" tabindex="22" id="v130" onchange="topla39();">
                </div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v131"  type="text" value="0" size="15" id="v131" onchange="topla39();">
                </div></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v132"  type="text" value="0" size="15" id="v132" onchange="topla39();">
                </div></td>
            <td width="10%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v133"  type="text" value="0" size="15" id="v133" onchange="topla39();">
                </div></td>
            <td width="10%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v134"  type="text" value="0" size="15" id="v134" onchange="topla39();">
                </div></td>
            <td width="2%" class="border border-primary"><input name="button39" type="button" class="style1"  onclick="topla39();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" id="sonuc39" name="sonuc39" type="text" size="15" readonly="true" value="0">
                </div></td>
        </tr>
        </tbody>
    </table>

    <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
        <tbody>
        <tr style="border:double;border-color:#0066FF">
            <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center" class="style22">KIZAMIKÇIK AŞISI </div></th>
            <td width="5%" class="border border-primary"><div align="center" class="style8"></div></td>
            <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v94"  type="hidden" value="0" size="15" tabindex="94" id="v94" onchange="topla25();"></div></td>
            <td width="10%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"><input class="border border-primary" name="v95"  type="hidden" value="0" size="15" tabindex="95" id="v95" onchange="topla25();"></div></td>
            <td width="10%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v96"  type="text" value="0" size="15" id="v96" onchange="topla25();">
                </div></td>
            <td width="2%" class="border border-primary"><input name="button25" type="button" class="style1"  onclick="topla25();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc25" name="sonuc25" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        </tbody>
    </table>

    <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
        <tbody>
        <tr style="border:double;border-color:#0066FF">
            <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center" class="style19">OKUL Td AŞISI </div></th>
            <td width="5%" class="border border-primary"><div align="center" class="style8"></div></td>
            <td width="18%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v97"  type="hidden" value="0" size="15" tabindex="97" id="v97" onchange="topla26();"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v98"  type="hidden" value="0" size="15" tabindex="98" id="v98" onchange="topla26();"></div></td>
            <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v99"  type="hidden" value="0" size="15" tabindex="99" id="v99" onchange="topla26();"></div></td>
            <td width="10%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v100"  type="text" value="0" size="15"  id="v100" onchange="topla26();">
                </div></td>
            <td width="10%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v101"  type="text" value="0" size="15" id="v101" onchange="topla26();">
                </div></td>
            <td width="2%" class="border border-primary"><input name="button26" type="button" class="style1"  onclick="topla26();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc26" name="sonuc26" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        </tbody>
    </table>

    <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
        <tbody>
        <tr>
            <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center">DİĞER Td</div></th>
            <td width="5%" class="border border-primary"><div align="center" class="style8"></div></td>
            <td width="18%" bordercolor="#F0F0F0" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v102"  type="text" value="0" size="15" id="v102" onchange="topla27();">
                </div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v103"  type="text" value="0" size="15" id="v103" onchange="topla27();"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v104"  type="text" value="0" size="15" id="v104" onchange="topla27();"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v105"  type="text" value="0" size="15" id="v105" onchange="topla27();"></div></td>
            <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v106"  type="text" value="0" size="15" id="v106" onchange="topla27();"></div></td>
            <td width="10%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v107"  type="text" value="0" size="15" tabindex="23" id="v107" onchange="topla27();">
                </div></td>
            <td width="2%" class="border border-primary"><input name="button27" type="button" class="style1"  onclick="topla27();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc27" name="sonuc27" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        </tbody>
    </table>

    <table class="table table-responsive-sm table-sm form013veritdaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
        <tbody>
        <tr>
            <th width="11%" class="border border-primary"><div align="center"></div></th>
            <th width="5%" bordercolor="#000000" class="border border-primary" scope="col"><div align="center"></div></th>
            <th width="36%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri text-center" scope="col">GEBE</th>
            <th width="35%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri text-center" scope="col">GEBE DEĞİL </th>
            <th width="2%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri" scope="col">&nbsp;</th>
            <th width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri" scope="col">&nbsp;</th>
        </tr>
        <tr>
            <th width="11%" rowspan="5" class="border border-primary align-middle"><div align="center">15-49 YAŞ KADIN Td AŞISI</div></th>
            <td width="5%" class="border border-primary"><div align="center">Td1</div></td>
            <td class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v108"  type="text" value="0" size="15" tabindex="24" id="v108" onchange="topla28();" onmousedown="topla35();" onmouseup="topla35();">
                </div>
                <div align="center"></div>            <div align="center"></div></td>
            <td class="border border-primary">
                <div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v113"  type="text" value="0" size="15" tabindex="29" id="v113" onchange="topla29();" onmousedown="topla35();" onmouseup="topla35();">
                </div>            <div align="center"></div>            <div align="center"></div></td>
            <td width="2%" class="border border-primary"><div align="center"><input name="button30" type="button" class="style1"  onclick="topla30();" value=" = " /></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc30" name="sonuc30" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        <tr>
            <td width="5%" class="border border-primary"><div align="center" class="style8">Td2</div></td>
            <td class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v109"  type="text" value="0" size="15" tabindex="25" id="v109" onchange="topla28();" onmousedown="topla35();" onmouseup="topla35();">
                </div>            <div align="center"></div>            <div align="center"></div></td>
            <td class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v114"  type="text" value="0" size="15" tabindex="30" id="v114" onchange="topla29();" onmousedown="topla35();" onmouseup="topla35();">
                </div>            <div align="center"></div>            <div align="center"></div></td>
            <td width="2%" class="border border-primary"><input name="button31" type="button" class="style1"  onclick="topla31();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc31" name="sonuc31" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        <tr>
            <td width="5%" class="border border-primary"><div align="center" class="style8">Td3</div></td>
            <td class="border border-primary">
                <div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v110"  type="text" value="0" size="15" tabindex="26" id="v110" onchange="topla28();" onmousedown="topla35();" onmouseup="topla35();">
                </div>            <div align="center"></div>            <div align="center"></div></td>
            <td class="border border-primary">
                <div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v115"  type="text" value="0" size="15" tabindex="31" id="v115" onchange="topla29();" onmousedown="topla35();" onmouseup="topla35();">
                </div>            <div align="center"></div>            <div align="center"></div></td>
            <td width="2%" class="border border-primary"><input name="button32" type="button" class="style1"  onclick="topla32();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc32" name="sonuc32" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        <tr>
            <td width="5%" class="border border-primary"><div align="center" class="style8">Td4</div></td>
            <td class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v111"  type="text" value="0" size="15" tabindex="27" id="v111" onchange="topla28();" onmousedown="topla35();" onmouseup="topla35();">
                </div>            <div align="center"></div>            <div align="center"></div></td>
            <td class="border border-primary">
                <div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v116"  type="text" value="0" size="15" tabindex="32" id="v116" onchange="topla29();" onmousedown="topla35();" onmouseup="topla35();">
                </div>            <div align="center"></div>            <div align="center"></div></td>
            <td width="2%" class="border border-primary"><input name="button33" type="button" class="style1"  onclick="topla33();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc33" name="sonuc33" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        <tr>
            <td width="5%" class="border border-primary"><div align="center" class="style8">Td5</div></td>
            <td class="border border-primary">
                <div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v112"  type="text" value="0" size="15" tabindex="28" id="v112" onchange="topla28();" onmousedown="topla35();" onmouseup="topla35();">
                </div>
                <div align="center"></div>            <div align="center"></div></td><td class="border border-primary">
                <div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v117"  type="text" value="0" size="15" tabindex="33" id="v117" onchange="topla29();" onmousedown="topla35();" onmouseup="topla35();">
                </div>            <div align="center"></div>            <div align="center"></div></td>
            <td width="2%" class="border border-primary"><input name="button34" type="button" class="style1"  onclick="topla34();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc34" name="sonuc34" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        <tr>
            <th class="border border-primary" scope="row">&nbsp;</th>
            <th width="5%" class="border border-primary" scope="row">&nbsp;</th>
            <td align="center" class="border border-primary"><div align="center">
                    <input name="button28" type="button" class="style1"  onclick="topla28();" value=" = " />
                </div>            <div align="center"></div>            <div align="center"></div></td>
            <td align="center" class="border border-primary"><div align="center">
                    <input name="button29" type="button" class="style1"  onclick="topla29();" value=" = " />
                </div>
                <div align="center"></div>            <div align="center"></div></td>
            <td width="2%" class="border border-primary">&nbsp;</td>
            <td width="11%" class="border border-primary">&nbsp;</td>
        </tr>
        <tr>
            <th colspan="2" class="border border-primary" scope="row"><div align="center">TOPLAM Td</div></th>
            <td class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" id="sonuc28" name="sonuc28" type="text" size="15" readonly="true" value="0">
                </div>            <div align="center"></div>            <div align="center"></div></td>
            <td class="border border-primary">
                <div align="center">
                    <input class="form-control form-control-sm text-center border-0" id="sonuc29" name="sonuc29" type="text" size="15" readonly="true" value="0">
                </div>            <div align="center"></div>            <div align="center"></div></td>
            <td width="2%" class="border border-primary"><input name="button35" type="button" class="style1"  onclick="topla35();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc35" name="sonuc35" type="text" size="15" readonly="true" value="0"></div></td>
        </tr>
        </tbody>
    </table>

    <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
        <tbody>
        <tr style="border:double;border-color:#0066FF">
            <th width="11%" rowspan="4" class="border border-primary" scope="row"><div align="center">KIZAMIK AŞISI</div></th>
            <td width="5%" class="border border-primary"><div align="center" class="style8"></div></td>
            <td width="18%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" name="v136" type="text" value="0" size="15" id="v136" tabindex="34" onchange="topla40();"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v137" type="text" value="0" size="15" id="v137" onchange="topla40();"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v138" type="text" value="0" size="15" id="v138" onchange="topla40();"></div></td>
            <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v139" type="text" value="0" size="15" id="v139" onchange="topla40();"></div></td>
            <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v140" type="text" value="0" size="15"  id="v140" onchange="topla40();"></div></td>
            <td width="10%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v141" type="text" value="0" size="15" id="v141" onchange="topla40();"></div></td>
            <td width="2%" class="border border-primary"><input name="button40" type="button" class="style1"  onclick="topla40();" value=" = " /></td>
            <td width="11%" class="border border-primary"><div align="center">
                    <input class="form-control form-control-sm text-center border-0" id="sonuc40" name="sonuc40" type="text" size="15" readonly="true" value="0">
                </div></td>
        </tr>
        </tbody>
    </table>
