<table class="table table-responsive-sm table-sm form013ustaralar" style="background-color:#CCFFFF">
    <thead>
    <tr>
        <td class="border-0" width="11%"><div align="center">T.C.</div></td>
        <td class="border-0" width="38%"><span></span></td>
        <td class="border-0" width="31%"><div align="right"></div></td>
        <td class="border-0" width="13%"><div align="left"></div></td>
    </tr>
    <tr>
        <td class="border-0"><div align="center">SAĞLIK BAKANLIĞI </div></td>
        <td class="border-0" rowspan="2" colspan="3"><div align="center"><h5>ÖZEL HEKİM AŞI UYGULAMALARI     (FORM 013B)</h5></div></td>
        <td class="border-0"><div align="right"></div></td>
        <td class="border-0"><div align="left"></div></td>
    </tr>
    <tr>
        <td class="border-0"><div align="center">Form No:013-B </div></td>
        <td class="border-0"><span></span></td>
        <td class="border-0"><span></span></td>
        <td class="border-0"><span></span></td>
    </tr>
    <tr>
        <td class="border-0"><div align="left">İL:</div></td>
        <td class="border-0"><div align="left"><strong><?php echo $ilinadine ;?></strong></div></td>
        <td class="border-0"><div align="right"></div></td>
        <td class="border-0"><span></td>
    </tr>
    <tr>
        <td class="border-0"><div align="left">İLÇE/TSM:</div></td>
        <td class="border-0"><div align="left"><strong><?php echo $ilceninadine ;?></strong></div></td>
        <td class="border-0"><div align="right">YIL:</div></td>
        <td class="border-0"><div align="left"><strong><?php echo $yilgelen ;?></strong></div></td>
    </tr>
    <tr>
        <td class="border-0"><div align="left">KURUM/AH:</div></td>
        <td class="border-0"><div align="left"><strong><?php echo $ocgelen ;?></div></td>
        <td class="border-0"><div align="right">AY:</div></td>
        <td class="border-0"><div align="left"><strong><?php echo $aygelen ;?></div></td>
    </tr>
    </thead>
</table>
<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="2" class="border border-primary align-middle"><div align="center">AŞI</div></th>
        <th colspan="9" scope="col" class="border border-primary"><div align="center">YAŞ GRUPLARINA GÖRE YAPILAN AŞI DOZLARI</div></th>
    </tr>
    <tr>
        <td width="5%" class="border border-primary"><div align="center">Uygu-lama</div></td>
        <td width="11%" class="border border-primary"><div align="center">0 YAŞ<br>(0-11 ay)</div></td>
        <td width="11%" class="border border-primary"><div align="center">1 YAŞ<br>(12-23 ay)</div></td>
        <td width="11%" class="border border-primary"><div align="center">2-4 YAŞ<br>(24-59 ay)</div></td>
        <td width="11%" class="border border-primary align-middle"><div align="center">5-9 YAŞ</div></td>
        <td width="11%" class="border border-primary align-middle"><div align="center">10-14 YAŞ</div></td>
        <td width="11%" class="border border-primary align-middle"><div align="center">15 YAŞ ve Üzeri</div></td>
        <td width="2%" class="border border-primary">&nbsp;</td>
        <td width="11%" class="border border-primary align-middle"><div align="center">TOPLAM</div></td>
    </tr>
    <tr>
        <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center"><strong>DaBT-İPA-Hib AŞISI</strong></div></th>
        <td width="5%" class="border border-primary"><div align="center">I</div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" id="v1" name="v1"  type="text" value="0" size="15" tabindex="1" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"> <input class="form-control form-control-sm text-center border-0" id="v2" name="v2"  type="text" value="0" size="15" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"> <input class="form-control form-control-sm text-center border-0" id="v3" name="v3"  type="text" value="0" size="15" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();"/></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"> <input class="form-control form-control-sm text-center border-0" id="v4" name="v4"  type="hidden" value="0" size="15" onchange="topla();" onkeydown="topla4();" onkeyup="topla4();"/></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary""><input class="form-control form-control-sm text-center border-0" name="buttonu" type="button"  onclick="topla();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonucu" name="sonucu" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000"  class="border border-primary""><div align="center" class="style8">II</div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v5"  type="text" value="0" size="15" tabindex="2" id="v5" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v6"  type="text" value="0" size="15" id="v6" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v7"  type="text" value="0" size="15" id="v7" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();"/></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center">

                <input class="form-control form-control-sm text-center border-0" name="v8"  type="hidden" value="0" size="15" id="v8" onchange="topla1();" onkeydown="topla4();" onkeyup="topla4();"/>
            </div></td>
        <td width="11%"  bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary""><input class="form-control form-control-sm text-center border-0" name="button1" type="button"  onclick="topla1();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc1" name="sonuc1" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000"  class="border border-primary""><div align="center" class="style8">III</div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v9"  type="text" value="0" size="15" tabindex="3" id="v9" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v10"  type="text" value="0" size="15" id="v10" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v11"  type="text" value="0" size="15" id="v11" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();"/></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v12"  type="hidden" value="0" size="15" id="v12" onchange="topla2();" onkeydown="topla4();" onkeyup="topla4();"/>
            </div></td>
        <td width="11%"  bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary""><input class="form-control form-control-sm text-center border-0" name="button2" type="button"  onclick="topla2();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc2" name="sonuc2" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000"  class="border border-primary""><div align="center" class="style8">R</div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v13"  type="text" value="0" size="15" tabindex="4" id="v13" onchange="topla3();" onkeydown="topla4();" onkeyup="topla4();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v14"  type="text" value="0" size="15" id="v14" onchange="topla3();" onkeydown="topla4();" onkeyup="topla4();"/>
            </div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v15"  type="hidden" value="0" size="15" id="v15" onchange="topla3();" onkeydown="topla4();" onkeyup="topla4();"/>
            </div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary""><input class="form-control form-control-sm text-center border-0" name="button3" type="button"  onclick="topla3();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc3" name="sonuc3" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    <tr>
        <th colspan="2" bordercolor="#000000"  class="border border-primary"" scope="row"><div align="center"><strong>TOPLAM</strong></div></th>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary""><input name="button4" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla4();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc4" name="sonuc4" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center"><strong>KONJUGE PNOMOKOK AŞISI</strong></div></th>
        <td width="5%" class="border border-primary"><div align="center">I</div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v16"  type="text" value="0" size="15" tabindex="5" id="v16" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v17"  type="text" value="0" size="15" id="v17" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v18"  type="text" value="0" size="15" id="v18" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v19"  type="text" value="0" size="15" id="v19" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v20"  type="text" value="0" size="15" id="v20" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v21"  type="text" value="0" size="15" id="v21" onchange="topla6();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="2%" class="border border-primary"><input name="button6" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla6();" value=" = " /></td>
        <td width="11%" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc6" name="sonuc6" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000"  class="border border-primary"><div align="center" class="style8">II</div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v22"  type="text" value="0" size="15" tabindex="6" id="v22" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v23"  type="text" value="0" size="15" id="v23" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v24"  type="text" value="0" size="15" id="v24" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v25"  type="text" value="0" size="15" id="v25" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v26"  type="text" value="0" size="15" id="v26" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v27"  type="text" value="0" size="15" id="v27" onchange="topla7();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button7" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla7();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc7" name="sonuc7" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000"  class="border border-primary"><div align="center" class="style8">III</div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v28"  type="text" value="0" size="15" tabindex="7" id="v28" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v29"  type="text" value="0" size="15" id="v29" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v30"  type="text" value="0" size="15" id="v30" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v31"  type="text" value="0" size="15" id="v31" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v32"  type="text" value="0" size="15" id="v32" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v33"  type="text" value="0" size="15" id="v33" onchange="topla8();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button8" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla8();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" id="sonuc8" name="sonuc8" type="text" size="15" readonly="true" value="0"/>
            </div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000"  class="border border-primary"><div align="center" class="style8">R</div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v34"  type="text" value="0" size="15" tabindex="8" id="v34" onchange="topla9();" onkeydown="topla10();" onkeyup="topla10();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v35"  type="text" value="0" size="15" id="v35" onchange="topla9();" onkeydown="topla10();" onkeyup="topla10();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v36"  type="text" value="0" size="15" id="v36" onchange="topla9();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v37"  type="text" value="0" size="15" id="v37" onchange="topla9();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v38"  type="text" value="0" size="15" id="v38" onchange="topla9();" onkeydown="topla10();" onkeyup="topla10();"/>
            </div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button9" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla9();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" id="sonuc9" name="sonuc9" type="text" size="15" readonly="true" value="0"/>
            </div></td>
    </tr>
    <tr>
        <th colspan="2" bordercolor="#000000"  class="border border-primary" scope="row"><div align="center">TOPLAM </div></th>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button10" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla10();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc10" name="sonuc10" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
</table>
<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="2" class="border border-primary align-middle" scope="row"><div align="center"><strong>K.K.K AŞISI</strong></div></th>
        <td width="5%" bordercolor="#000000"  class="border border-primary"><div align="center" class="style8">I</div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v39"  type="text" value="0" size="15" tabindex="11" id="v39" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v40"  type="text" value="0" size="15" id="v40" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v41"  type="text" value="0" size="15" id="v41" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"/>
            </div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v42"  type="text" value="0" size="15" id="v42" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v43"  type="text" value="0" size="15"  id="v43" onchange="topla16();" onkeydown="topla18();" onkeyup="topla18();"/>
            </div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button16" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla16();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc16" name="sonuc16" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000"  class="border border-primary"><div align="center" class="style8">R</div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v44"  type="text" value="0" size="15" id="v44" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v45"  type="text" value="0" size="15" id="v45" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v46"  type="text" value="0" size="15" id="v46" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v47"  type="text" value="0" size="15"  id="v47" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v48"  type="text" value="0" size="15" id="v48" onchange="topla17();" onkeydown="topla18();" onkeyup="topla18();"/></div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button17" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla17();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc17" name="sonuc17" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    <tr>
        <th colspan="2" bordercolor="#000000"  class="border border-primary" scope="row"><div align="center">TOPLAM </div></th>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button18" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla18();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc18" name="sonuc18" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    </tbody>
</table>

<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="3" class="border border-primary align-middle" scope="row"><div align="center"><strong>HEPATİT-B AŞISI </strong></div></th>
        <td width="5%" bordercolor="#000000"  class="border border-primary"><div align="center" class="style8">I</div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v49"  type="text" value="0" size="15" tabindex="13" id="v49" onchange="topla21();" onmousedown="topla24();" onmouseup="topla24();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v50"  type="text" value="0" size="15" id="v50" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v51"  type="text" value="0" size="15" id="v51" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v52"  type="text" value="0" size="15" id="v52" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();"/>
            </div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v53"  type="text" value="0" size="15" id="v53" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();"/>
            </div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v54"  type="text" value="0" size="15" id="v54" onchange="topla21();" onkeydown="topla24();" onkeyup="topla24();"/>
            </div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button21" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla21();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc21" name="sonuc21" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000"  class="border border-primary"><div align="center" class="style8">II</div></td>
        <td width="11%"  bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v55"  type="text" value="0" size="15" tabindex="15" id="v55" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v56"  type="text" value="0" size="15" id="v56" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v57"  type="text" value="0" size="15" id="v57" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v58"  type="text" value="0" size="15" id="v58" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v59"  type="text" value="0" size="15" id="v59" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v60"  type="text" value="0" size="15" id="v60" onchange="topla22();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button22" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla22();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc22" name="sonuc22" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000"  class="border border-primary"><div align="center" class="style8">III</div></td>
        <td cwidth="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v61"  type="text" value="0" size="15" tabindex="16" id="v61" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v62"  type="text" value="0" size="15" id="v62" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v63"  type="text" value="0" size="15" id="v63" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v64"  type="text" value="0" size="15" id="v64" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v65"  type="text" value="0" size="15" id="v65" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"/>
            </div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v66"  type="text" value="0" size="15" id="v66" onchange="topla23();" onkeydown="topla24();" onkeyup="topla24();"/></div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button23" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla23();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc23" name="sonuc23" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    <tr>
        <th width="16%" colspan="2" bordercolor="#000000"  class="border border-primary" scope="row"><div align="center">TOPLAM </div></th>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button24" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla24();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc24" name="sonuc24" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    </tbody>
</table>
<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="2" class="border border-primary align-middle" scope="row"><div align="center"><strong>HEPATİT-A AŞISI </strong></div></th>
        <td width="5%" bordercolor="#000000"  class="border border-primary"><div align="center" class="style8">I</div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v67"  type="text" value="0" size="15" tabindex="17" id="v67" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v68"  type="text" value="0" size="15" id="v68" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v69"  type="text" value="0" size="15" id="v69" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();"/>
            </div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v70"  type="text" value="0" size="15" id="v70" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();"/>
            </div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v71"  type="text" value="0" size="15" id="v71" onchange="topla36();" onkeydown="topla38();" onkeyup="topla38();"/>
            </div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button36" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla36();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc36" name="sonuc36" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000"  class="border border-primary"><div align="center" class="style8">R</div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v72"  type="text" value="0" size="15" id="v72" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"/></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v73"  type="text" value="0" size="15" tabindex="18" id="v73" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v74"  type="text" value="0" size="15" id="v74" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"/></div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v75"  type="text" value="0" size="15" id="v75" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"/></div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v76"  type="text" value="0" size="15" id="v76" onchange="topla37();" onkeydown="topla38();" onkeyup="topla38();"/></div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button37" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla37();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc37" name="sonuc37" type="text" size="15" readonly="true" value="0"/>
            </div></td>
    </tr>
    <tr>
        <th colspan="2" bordercolor="#000000"  class="border border-primary" scope="row"><div align="center">TOPLAM </div></th>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button38" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla38();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center"><input class="form-control form-control-sm text-center border-0" id="sonuc38" name="sonuc38" type="text" size="15" readonly="true" value="0"/></div></td>
    </tr>
    </tbody>
</table>
<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" class="border border-primary align-middle" scope="row"><div align="center"><strong>SU ÇİÇEĞİ AŞISI</strong></div></th>
        <td width="5%" bordercolor="#000000" class="border border-primary"><div align="center" class="style8"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v77"  type="text" value="0" size="15" tabindex="19" id="v77" onchange="topla39();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v78"  type="text" value="0" size="15" id="v78" onchange="topla39();"/>
            </div></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v79"  type="text" value="0" size="15" id="v79" onchange="topla39();"/>
            </div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v80"  type="text" value="0" size="15" id="v80" onchange="topla39();"/>
            </div></td>
        <td width="11%" bordercolor="#000000" class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" name="v81"  type="text" value="0" size="15" id="v81" onchange="topla39();"/>
            </div></td>
        <td width="2%" bordercolor="#000000"  class="border border-primary"><input name="button39" type="button" class="form-control form-control-sm text-center border-0"  onclick="topla39();" value=" = " /></td>
        <td width="11%" bordercolor="#000000"  class="border border-primary"><div align="center">
                <input class="form-control form-control-sm text-center border-0" id="sonuc39" name="sonuc39" type="text" size="15" readonly="true" value="0"/>
            </div></td>
    </tr>
</table>
