<table class="table table-responsive-sm table-sm table-bordered table-light table-hover form013ustaralar" style="margin-top:-8px;">
<thead>
  <tr>
  <th class="bg-warning text-center" width="30%" colspan="3"><a class="btn btn-sm btn-success" style="width:100px" href=# onclick="kontrol();" title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a></th>
      <th class="bg-primary text-center" width="40%" colspan="3"><h6 style="color:#FFFF00;"><strong><?php echo $eklegorbaslik ; ?></strong></h6></th>
      <th class="bg-warning text-center" width="30%" colspan="3"><a class="btn btn-sm btn-info" style="width:100px" href="#" tabindex="1" title="Kaydet" onclick="girdiyiekle();"><i class="fa fa-floppy-o" aria-hidden="true"></i> Kaydet</a></th>
    <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
      <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
      <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
      <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
      <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
</tr>
</thead>
  </table>
<table class="table table-responsive-sm table-sm table-bordered table-light table-hover form013ustaralar" style="margin-top:-12px;">
<thead>
<tr>
<th  width="100%" colspan="8" class="border-dark text-center" bgcolor="#00FFCC"><?php echo $ygbaslik ; ?></th>
  </tr>
  <tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#33A2FF"><?php echo $yasgrubu ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="#33A2FF">KADIN</th>
  <th  width="25%" class="border-dark text-center" bgcolor="#33A2FF">ERKEK</th>
  <th  width="25%" class="border-dark text-center" bgcolor="#33A2FF">TOPLAM</th>
  </tr>
  <tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $sifiryas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v1" id="v1" type="text" value="0"  align="center" size="8" tabindex="1" onchange="toplayg1();" onkeydown="toplayg1();" onmouseout="toplayg1();" autofocus/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v19" id="v19" type="text" value="0"  align="center" size="8" tabindex="19" onchange="toplayg19();" onkeydown="toplayg1();" onmouseout="toplayg1();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg1" id="sonucyg1" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
  
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $besyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v2" id="v2" type="text" value="0"  align="center" size="8" tabindex="2" onchange="toplayg2();" onkeydown="toplayg2();" onmouseout="toplayg2();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v20" id="v20" type="text" value="0"  align="center" size="8" tabindex="20" onchange="toplayg2();" onkeydown="toplayg2();" onmouseout="toplayg2();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg2" id="sonucyg2" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $onyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v3" id="v3" type="text" value="0"  align="center" size="8" tabindex="3" onchange="toplayg3();" onkeydown="toplayg3();" onmouseout="toplayg3();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v21" id="v21" type="text" value="0"  align="center" size="8" tabindex="21" onchange="toplayg3();" onkeydown="toplayg3();" onmouseout="toplayg3();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg3" id="sonucyg3" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $onbesyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v4" id="v4" type="text" value="0"  align="center" size="8" tabindex="4" onchange="toplayg4();" onkeydown="toplayg4();" onmouseout="toplayg4();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v22" id="v22" type="text" value="0"  align="center" size="8" tabindex="22" onchange="toplayg4();" onkeydown="toplayg4();" onmouseout="toplayg4();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg4" id="sonucyg4" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $yirmiyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v5" id="v5" type="text" value="0"  align="center" size="8" tabindex="5" onchange="toplayg5();" onkeydown="toplayg5();" onmouseout="toplayg5();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v23" id="v23" type="text" value="0"  align="center" size="8" tabindex="23" onchange="toplayg5();" onkeydown="toplayg5();" onmouseout="toplayg5();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg5" id="sonucyg5" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>  
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $yirmibesyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v6" id="v6" type="text" value="0"  align="center" size="8" tabindex="6" onchange="toplayg6();" onkeydown="toplayg6();" onmouseout="toplayg6();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v24" id="v24" type="text" value="0"  align="center" size="8" tabindex="24" onchange="toplayg6();" onkeydown="toplayg6();" onmouseout="toplayg6();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg6" id="sonucyg6" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $otuzyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v7" id="v7" type="text" value="0"  align="center" size="8" tabindex="7" onchange="toplayg7();" onkeydown="toplayg7();" onmouseout="toplayg7();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v25" id="v25" type="text" value="0"  align="center" size="8" tabindex="25" onchange="toplayg7();" onkeydown="toplayg7();" onmouseout="toplayg7();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg7" id="sonucyg7" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $otuzbesyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v8" id="v8" type="text" value="0"  align="center" size="8" tabindex="8" onchange="toplayg8();" onkeydown="toplayg8();" onmouseout="toplayg8();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v26" id="v26" type="text" value="0"  align="center" size="8" tabindex="26" onchange="toplayg8();" onkeydown="toplayg8();" onmouseout="toplayg8();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg8" id="sonucyg8" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $kirkyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v9" id="v9" type="text" value="0"  align="center" size="8" tabindex="9" onchange="toplayg9();" onkeydown="toplayg9();" onmouseout="toplayg9();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v27" id="v27" type="text" value="0"  align="center" size="8" tabindex="27" onchange="toplayg9();" onkeydown="toplayg9();" onmouseout="toplayg9();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg9" id="sonucyg9" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $kirkbesyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v10" id="v10" type="text" value="0"  align="center" size="8" tabindex="10" onchange="toplayg10();" onkeydown="toplayg10();" onmouseout="toplayg10();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v28" id="v28" type="text" value="0"  align="center" size="8" tabindex="28" onchange="toplayg10();" onkeydown="toplayg10();" onmouseout="toplayg10();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg10" id="sonucyg10" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>  
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $elliyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v11" id="v11" type="text" value="0"  align="center" size="8" tabindex="11" onchange="toplayg11();" onkeydown="toplayg11();" onmouseout="toplayg11();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v29" id="v29" type="text" value="0"  align="center" size="8" tabindex="29" onchange="toplayg11();" onkeydown="toplayg11();" onmouseout="toplayg11();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg11" id="sonucyg11" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $ellibesyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v12" id="v12" type="text" value="0"  align="center" size="8" tabindex="12" onchange="toplayg12();" onkeydown="toplayg12();" onmouseout="toplayg12();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v30" id="v30" type="text" value="0"  align="center" size="8" tabindex="30" onchange="toplayg12();" onkeydown="toplayg12();" onmouseout="toplayg12();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg12" id="sonucyg12" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $atmisyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v13" id="v13" type="text" value="0"  align="center" size="8" tabindex="13" onchange="toplayg13();" onkeydown="toplayg13();" onmouseout="toplayg13();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v31" id="v31" type="text" value="0"  align="center" size="8" tabindex="31" onchange="toplayg13();" onkeydown="toplayg13();" onmouseout="toplayg13();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg13" id="sonucyg13" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $atmisbesyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v14" id="v14" type="text" value="0"  align="center" size="8" tabindex="14" onchange="toplayg14();" onkeydown="toplayg14();" onmouseout="toplayg14();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v32" id="v32" type="text" value="0"  align="center" size="8" tabindex="32" onchange="toplayg14();" onkeydown="toplayg14();" onmouseout="toplayg14();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg14" id="sonucyg14" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $yetmisyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v15" id="v15" type="text" value="0"  align="center" size="8" tabindex="15" onchange="toplayg15();" onkeydown="toplayg15();" onmouseout="toplayg15();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v33" id="v33" type="text" value="0"  align="center" size="8" tabindex="33" onchange="toplayg15();" onkeydown="toplayg15();" onmouseout="toplayg15();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg15" id="sonucyg15" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>    
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $yetmisbesyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v16" id="v16" type="text" value="0"  align="center" size="8" tabindex="16" onchange="toplayg16();" onkeydown="toplayg16();" onmouseout="toplayg16();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v34" id="v34" type="text" value="0"  align="center" size="8" tabindex="34" onchange="toplayg16();" onkeydown="toplayg16();" onmouseout="toplayg16();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg16" id="sonucyg16" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $seksenyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v17" id="v17" type="text" value="0"  align="center" size="8" tabindex="17" onchange="toplayg17();" onkeydown="toplayg17();" onmouseout="toplayg17();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v35" id="v35" type="text" value="0"  align="center" size="8" tabindex="35" onchange="toplayg17();" onkeydown="toplayg17();" onmouseout="toplayg17();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg17" id="sonucyg17" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $seksenbesyas ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v18" id="v18" type="text" value="0"  align="center" size="8" tabindex="18" onchange="toplayg18();" onkeydown="toplayg18();" onmouseout="toplayg18();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v36" id="v36" type="text" value="0"  align="center" size="8" tabindex="36" onchange="toplayg18();" onkeydown="toplayg18();" onmouseout="toplayg18();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucyg18" id="sonucyg18" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#FFE333">TOPLAM </th>
  <th  width="25%" class="border-dark text-center" bgcolor="FFE333"><input class="form-control text-center font-weight-bold" name="ygkadin" id="ygkadin" type="text" value="0"  align="center" size="8" tabindex="" onchange="toplaygk();" onkeydown="toplaygk();" onmouseout="toplaygk();" onclick="toplayg();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="FFE333"><input class="form-control text-center font-weight-bold" name="ygerkek" id="ygerkek" type="text" value="0"  align="center" size="8" tabindex="" onchange="toplayge();" onkeydown="toplayge();" onmouseout="toplayge();" onclick="toplayg();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="FFE333"><input class="form-control text-center font-weight-bold" name="sonucyg" id="sonucyg" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>   
</thead>                         
  </table>
 
  <table class="table table-responsive-sm table-sm table-bordered table-light table-hover form013ustaralar" style="margin-top:-12px;">
<thead>
  <tr>
  <th  width="100%" colspan="8" class="border-dark text-center" bgcolor="#00FFCC"><?php echo $mhalbaslik ; ?></th>
  </tr>
  <tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#33A2FF"><?php echo $medenihali ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="#33A2FF">KADIN</th>
  <th  width="25%" class="border-dark text-center" bgcolor="#33A2FF">ERKEK</th>
  <th  width="25%" class="border-dark text-center" bgcolor="#33A2FF">TOPLAM</th>
  </tr>
  <tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $mhcocuk ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v37" id="v37" type="text" value="0"  align="center" size="8" tabindex="37" onchange="toplamh1();" onkeydown="toplamh1();" onmouseout="toplamh1();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v42" id="v42" type="text" value="0"  align="center" size="8" tabindex="42" onchange="toplamh1();" onkeydown="toplamh1();" onmouseout="toplamh1();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucmh1" id="sonucmh1" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
  
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC">BEKAR </th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v38" id="v38" type="text" value="0"  align="center" size="8" tabindex="38" onchange="toplamh2();" onkeydown="toplamh2();" onmouseout="toplamh2();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v43" id="v43" type="text" value="0"  align="center" size="8" tabindex="43" onchange="toplamh2();" onkeydown="toplamh2();" onmouseout="toplamh2();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucmh2" id="sonucmh2" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $mhevli ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v39" id="v39" type="text" value="0"  align="center" size="8" tabindex="39" onchange="toplamh3();" onkeydown="toplamh3();" onmouseout="toplamh3();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v44" id="v44" type="text" value="0"  align="center" size="8" tabindex="44" onchange="toplamh3();" onkeydown="toplamh3();" onmouseout="toplamh3();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucmh3" id="sonucmh3" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $mhbosanmis ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v40" id="v40" type="text" value="0"  align="center" size="8" tabindex="40" onchange="toplamh4();" onkeydown="toplamh4();" onmouseout="toplamh4();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v45" id="v45" type="text" value="0"  align="center" size="8" tabindex="45" onchange="toplamh4();" onkeydown="toplamh4();" onmouseout="toplamh4();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucmh4" id="sonucmh4" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $mhesiolmus ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v41" id="v41" type="text" value="0"  align="center" size="8" tabindex="41" onchange="toplamh5();" onkeydown="toplamh5();" onmouseout="toplamh5();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v46" id="v46" type="text" value="0"  align="center" size="8" tabindex="46" onchange="toplamh5();" onkeydown="toplamh5();" onmouseout="toplamh5();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucmh5" id="sonucmh5" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>  
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#FFE333">TOPLAM </th>
  <th  width="25%" class="border-dark text-center" bgcolor="FFE333"><input class="form-control text-center font-weight-bold" name="mhkadin" id="mhkadin" type="text" value="0"  align="center" size="8" tabindex="" onchange="toplamhk();" onkeydown="toplamhk();" onmouseout="toplamhk();" onclick="toplamh();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="FFE333"><input class="form-control text-center font-weight-bold" name="mherkek" id="mherkek" type="text" value="0"  align="center" size="8" tabindex="" onchange="toplamhe();" onkeydown="toplamhe();" onmouseout="toplamhe();" onclick="toplamh();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="FFE333"><input class="form-control text-center font-weight-bold" name="sonucmh" id="sonucmh" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
</thead>                            
  </table>

  <table class="table table-responsive-sm table-sm table-bordered table-light table-hover form013ustaralar" style="margin-top:-12px;">
<thead>
  <tr>
  <th  width="100%" colspan="8" class="border-dark text-center" bgcolor="#00FFCC"><?php echo $odurbaslik ; ?></th>
  </tr>
  <tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#33A2FF"><?php echo $ogrenimdurumu ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="#33A2FF">KADIN</th>
  <th  width="25%" class="border-dark text-center" bgcolor="#33A2FF">ERKEK</th>
  <th  width="25%" class="border-dark text-center" bgcolor="#33A2FF">TOPLAM</th>
  </tr>
  <tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $odocd ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v47" id="v47" type="text" value="0"  align="center" size="8" tabindex="47" onchange="toplaod1();" onkeydown="toplaod1();" onmouseout="toplaod1();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v54" id="v54" type="text" value="0"  align="center" size="8" tabindex="54" onchange="toplaod1();" onkeydown="toplaod1();" onmouseout="toplaod1();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucod1" id="sonucod1" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
  
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $odoyd ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v48" id="v48" type="text" value="0"  align="center" size="8" tabindex="48" onchange="toplaod2();" onkeydown="toplaod2();" onmouseout="toplaod2();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v55" id="v55" type="text" value="0"  align="center" size="8" tabindex="55" onchange="toplaod2();" onkeydown="toplaod2();" onmouseout="toplaod2();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucod2" id="sonucod2" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC">OKUR YAZAR</th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v49" id="v49" type="text" value="0"  align="center" size="8" tabindex="49" onchange="toplaod3();" onkeydown="toplaod3();" onmouseout="toplaod3();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v56" id="v56" type="text" value="0"  align="center" size="8" tabindex="56" onchange="toplaod3();" onkeydown="toplaod3();" onmouseout="toplaod3();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucod3" id="sonucod3" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $odilk ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v50" id="v50" type="text" value="0"  align="center" size="8" tabindex="50" onchange="toplaod4();" onkeydown="toplaod4();" onmouseout="toplaod4();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v57" id="v57" type="text" value="0"  align="center" size="8" tabindex="57" onchange="toplaod4();" onkeydown="toplaod4();" onmouseout="toplaod4();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucod4" id="sonucod4" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC">ORTAOKUL </th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v51" id="v51" type="text" value="0"  align="center" size="8" tabindex="51" onchange="toplaod5();" onkeydown="toplaod5();" onmouseout="toplaod5();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v58" id="v58" type="text" value="0"  align="center" size="8" tabindex="58" onchange="toplaod5();" onkeydown="toplaod5();" onmouseout="toplaod5();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucod5" id="sonucod5" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>  
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $odlise ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v52" id="v52" type="text" value="0"  align="center" size="8" tabindex="52" onchange="toplaod6();" onkeydown="toplaod6();" onmouseout="toplaod6();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v59" id="v59" type="text" value="0"  align="center" size="8" tabindex="59" onchange="toplaod6();" onkeydown="toplaod6();" onmouseout="toplaod6();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucod6" id="sonucod6" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>    
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#CEF6EC"><?php echo $odyo ; ?></th>
  <th  width="25%" class="border-dark text-center" bgcolor="pink"><input class="form-control text-center font-weight-bold" name="v53" id="v53" type="text" value="0"  align="center" size="8" tabindex="53" onchange="toplaod7();" onkeydown="toplaod7();" onmouseout="toplaod7();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="cyan"><input class="form-control text-center font-weight-bold" name="v60" id="v60" type="text" value="0"  align="center" size="8" tabindex="60" onchange="toplaod7();" onkeydown="toplaod7();" onmouseout="toplaod7();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="YELLOW"><input class="form-control text-center font-weight-bold" name="sonucod7" id="sonucod7" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>    
<tr>
  <th  width="25%" class="border-dark text-center" bgcolor="#FFE333">TOPLAM </th>
  <th  width="25%" class="border-dark text-center" bgcolor="FFE333"><input class="form-control text-center font-weight-bold" name="odkadin" id="odkadin" type="text" value="0"  align="center" size="8" tabindex="" onchange="toplaodk();" onkeydown="toplaodk();" onmouseout="toplaodk();" onclick="toplaod();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="FFE333"><input class="form-control text-center font-weight-bold" name="oderkek" id="oderkek" type="text" value="0"  align="center" size="8" tabindex="" onchange="toplaode();" onkeydown="toplaode();" onmouseout="toplaode();" onclick="toplaod();"/></th>
  <th  width="25%" class="border-dark text-center" bgcolor="FFE333"><input class="form-control text-center font-weight-bold" name="sonucod" id="sonucod" type="text" value="0"  align="center" size="8" tabindex="" readonly="true"/></th>
  </tr>  
</thead>                          
  </table>  