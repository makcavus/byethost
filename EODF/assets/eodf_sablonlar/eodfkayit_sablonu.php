<?php
//include('devir.php');
?>
<table class="table table-responsive-sm table-sm table-bordered table-striped table-light table-hover form013ustaralar" style="margin-top:-8px;">
    <thead>
    <tr>
        <th class="bg-warning text-center"  width="30%" colspan="3"><a class="btn btn-sm btn-success" style="width:100px" href=# onclick="kontrol();" title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a></th>
        <th class="bg-primary text-center" width="40%" colspan="3"><h6 style="color:#FFFF00;"><strong><?php echo $eklegorbaslik;?></strong></h6></th>
        <th class="bg-warning text-center" width="30%" colspan="3"><a class="btn btn-sm btn-primary" style="width:100px" href="#" tabindex="1" title="Kaydet" onclick="girdiyiekle();"><i class="fa fa-floppy-o" aria-hidden="true"></i> Kaydet</a></th>
    </tr>
    </thead>
</table>


<table class="table table-responsive-sm table-sm table-bordered table-light table-hover form013ustaralar">
    <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
    <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
    <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
    <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
    <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
    <thead>
    <tr>
        <th class="border-0" width="4%" colspan="25"><div align="left">EK 3</div></th>
    </tr>
    <tr>
        <th class="border-0  text-center" width="4%" colspan="25"><div class=" text-center"><?php echo $frmbaslik; ?></div></th>
    </tr>
    <tr>
        <td class="border-0" width="24%" colspan="7"><div align="left"><?php echo $ililcebaslik; ?></div></td>
        <th  width="76%" align="left" class="border-0" colspan="18"><?php echo $ilinadine.' / '.$ilceninadine ;?></th>
    </tr>
    <tr>
        <td  width="24%" align="left" class="border-0" colspan="7"><?php echo $ahekkodbaslik; ?></td>
        <th  width="76%" align="left" class="border-0" colspan="18"><?php echo '<font size="3" family="Arial">'.$asmninadine.'&nbsp;&nbsp;'.$ocgelen.'</font>' ;?></th>
    </tr>
    <tr>
        <td  width="24%" align="left"  class="border-0" colspan="7"><?php echo $sagrapdonembaslik; ?></td>
        <th  width="76%"align="left"  class="border-0" colspan="18"><?php echo '<font size="3" family="Arial">'.$aygelen.'-'.$yilgelen.'</font>' ;?></th>
    </tr>
    <tr>
        <td class="border border-primary align-middle" width="20%" rowspan="2" colspan="6"><div align="center">&nbsp;</div></td>
        <td class="border border-primary align-middle" width="4%" rowspan="2" colspan="1"><div align="center">TOPLAM</div></td>
        <td class="border border-primary align-middle" width="32%" colspan="8"><div align="center"><?php echo $ygdagilimbaslik; ?></div></td>
        <td class="border border-primary align-middle" width="20%" colspan="5"><div align="center"><?php echo $oddagilimbaslik; ?></div></td>
        <td class="border border-primary align-middle" width="8%" colspan="2"><div align="center">AKRABALIK DURUMU*</div></td>
    </tr>

    <tr>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><?php echo $onyedibaslik; ?></div></td>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">18-24</div></td>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">25-29</div></td>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">30-34</div></td>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">35-39</div></td>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">40-44</div></td>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">45-49</div></td>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><?php echo $ellibaslik; ?></div></td>
        <td class="border border-primary align-middle" width="6%" colspan="1"><div align="center"><?php echo $oydbaslik; ?></div></td>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">Okur Yazar</div></td>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><?php echo $ilkortabaslik; ?></div></td>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><?php echo $lisebaslik; ?></div></td>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><?php echo $yobaslik; ?></div></td>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">VAR</div></td>
        <td class="border border-primary align-middle" width="5%" colspan="1"><div align="center">YOK</div></td>
    </tr>

    <tr>
        <td class="border border-primary align-middle" width="5%" colspan="6"><div align="center"><?php echo $danverkadin; ?></div></td>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="dvks" id="dvks" type="text" value="0" size="2" readonly="true"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v1" id="v1" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="1"  autofocus></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v2" id="v2" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="2"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v3" id="v3" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="3"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v4" id="v4" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="4"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v5" id="v5" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="5"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v6" id="v6" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="6"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v7" id="v7" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="7"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v8" id="v8" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="8"></div></th>
        <th class="border border-primary align-middle" width="6%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v9" id="v9" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="9"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v10" id="v10" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="10"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v11" id="v11" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="11"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v12" id="v12" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="12"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v13" id="v13" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="13"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v14" id="v14" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="14"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v15" id="v15" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="15"></div></th>
    </tr>

    <tr>
        <td class="border border-primary align-middle" width="5%" colspan="6"><div align="center"><?php echo $sagrapverkadin; ?></div></td>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="srdks" id="srdks" type="text" value="0" size="2" readonly="true"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v16" id="v16" type="text" value="0" size="2" tabindex="16" onchange="topla11();" onkeydown="topla11();" onkeyup="esitmidvks();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v17" id="v17" type="text" value="0" size="2" tabindex="17" onchange="topla11();" onkeydown="topla11();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v18" id="v18" type="text" value="0" size="2" tabindex="18" onchange="topla11();" onkeydown="topla11();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v19" id="v19" type="text" value="0" size="2" tabindex="19" onchange="topla11();" onkeydown="topla11();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v20" id="v20" type="text" value="0" size="2" tabindex="20" onchange="topla11();" onkeydown="topla11();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v21" id="v21" type="text" value="0" size="2" tabindex="21" onchange="topla11();" onkeydown="topla11();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v22" id="v22" type="text" value="0" size="2" tabindex="22" onchange="topla11();" onkeydown="topla11();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v23" id="v23" type="text" value="0" size="2" tabindex="23" onchange="topla11();" onkeydown="topla11();"></div></th>
        <th class="border border-primary align-middle" width="6%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v24" id="v24" type="text" value="0" size="2" tabindex="24" onchange="topla11();" onkeydown="topla11();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v25" id="v25" type="text" value="0" size="2" tabindex="25" onchange="topla11();" onkeydown="topla11();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v26" id="v26" type="text" value="0" size="2" tabindex="26" onchange="topla11();" onkeydown="topla11();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v27" id="v27" type="text" value="0" size="2" tabindex="27" onchange="topla11();" onkeydown="topla11();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v28" id="v28" type="text" value="0" size="2" tabindex="28" onchange="topla11();" onkeydown="topla11();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v29" id="v29" type="text" value="0" size="2" tabindex="29" onchange="topla11();" onkeydown="topla11();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v30" id="v30" type="text" value="0" size="2" tabindex="30" onchange="topla11();" onkeydown="topla11();"></div></th>
    </tr>
    <tr>
        <td class="border border-primary align-middle" width="5%" colspan="6"><div align="center"><?php echo $danvererkek; ?></div></td>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="dves" id="dves" type="text" value="0" size="2" readonly="true"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v31" id="v31" type="text" value="0" size="2" tabindex="31" onchange="topla12();" onkeydown="topla12();"  onkeyup="esitmisrdks();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v32" id="v32" type="text" value="0" size="2" tabindex="32" onchange="topla12();" onkeydown="topla12();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v33" id="v33" type="text" value="0" size="2" tabindex="33" onchange="topla12();" onkeydown="topla12();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v34" id="v34" type="text" value="0" size="2" tabindex="34" onchange="topla12();" onkeydown="topla12();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v35" id="v35" type="text" value="0" size="2" tabindex="35" onchange="topla12();" onkeydown="topla12();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v36" id="v36" type="text" value="0" size="2" tabindex="36" onchange="topla12();" onkeydown="topla12();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v37" id="v37" type="text" value="0" size="2" tabindex="37" onchange="topla12();" onkeydown="topla12();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v38" id="v38" type="text" value="0" size="2" tabindex="38" onchange="topla12();" onkeydown="topla12();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v39" id="v39" type="text" value="0" size="2" tabindex="39" onchange="topla12();" onkeydown="topla12();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v40" id="v40" type="text" value="0" size="2" tabindex="40" onchange="topla12();" onkeydown="topla12();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v41" id="v41" type="text" value="0" size="2" tabindex="41" onchange="topla12();" onkeydown="topla12();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v42" id="v42" type="text" value="0" size="2" tabindex="42" onchange="topla12();" onkeydown="topla12();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v43" id="v43" type="text" value="0" size="2" tabindex="43" onchange="topla12();" onkeydown="topla12();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v44" id="v44" type="text" value="0" size="2" tabindex="44" onchange="topla12();" onkeydown="topla12();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v45" id="v45" type="text" value="0" size="2" tabindex="45" onchange="topla12();" onkeydown="topla12();"></div></th>
    <tr>
        <td class="border border-primary align-middle" width="5%" colspan="6"><?php echo $sagrapvererkek; ?></div></td>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="srdes" id="srdes" type="text" value="0" size="2" readonly="true"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v46" id="v46" type="text" value="0" size="2" tabindex="46" onchange="topla13();" onkeydown="topla13();"  onkeyup="esitmidves();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v47" id="v47" type="text" value="0" size="2" tabindex="47" onchange="topla13();" onkeydown="topla13();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v48" id="v48" type="text" value="0" size="2" tabindex="48" onchange="topla13();" onkeydown="topla13();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v49" id="v49" type="text" value="0" size="2" tabindex="49" onchange="topla13();" onkeydown="topla13();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v50" id="v50" type="text" value="0" size="2" tabindex="50" onchange="topla13();" onkeydown="topla13();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v51" id="v51" type="text" value="0" size="2" tabindex="51" onchange="topla13();" onkeydown="topla13();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v52" id="v52" type="text" value="0" size="2" tabindex="52" onchange="topla13();" onkeydown="topla13();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v53" id="v53" type="text" value="0" size="2" tabindex="53" onchange="topla13();" onkeydown="topla13();"></div></th>
        <th class="border border-primary align-middle" width="6%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v54" id="v54" type="text" value="0" size="2" tabindex="54" onchange="topla13();" onkeydown="topla13();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v55" id="v55" type="text" value="0" size="2" tabindex="55" onchange="topla13();" onkeydown="topla13();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v56" id="v56" type="text" value="0" size="2" tabindex="56" onchange="topla13();" onkeydown="topla13();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v57" id="v57" type="text" value="0" size="2" tabindex="57" onchange="topla13();" onkeydown="topla13();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v58" id="v58" type="text" value="0" size="2" tabindex="58" onchange="topla13();" onkeydown="topla13();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v59" id="v59" type="text" value="0" size="2" tabindex="59" onchange="topla13();" onkeydown="topla13();"></div></th>
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v60" id="v60" type="text" value="0" size="2" tabindex="60" onchange="topla13();" onkeydown="topla13();" onblur="esitmidvks();"></div></th>
    </tr>
    <tr>
        <td class="border-0 align-middle" width="100%" colspan="25">&nbsp;</td>
    </tr>
    <tr>
        <td class="border border-primary align-middle" width="30%" colspan="10"><div align="center"><?php echo $duzenleyen; ?></div></td>
        <th class="border-0 align-middle" width="40%" rowspan="5" colspan="5"><div align="center"></div></th>
        <td class="border border-primary align-middle" width="30%" colspan="10"><div align="center">ONAYLAYAN</div></td>
    </tr>
    <tr>
        <td class="border border-primary align-middle" width="20%" colspan="2"><div align="left">&nbsp;<?php echo $duzadbaslik; ?></div></td>
        <th class="border border-primary align-middle" width="25%" colspan="8"><div align="left"><?php echo $asead ; ?></div></th>
        <td class="border border-primary align-middle" width="25%" colspan="2"><div align="left">&nbsp;<?php echo $onadbaslik; ?></div></td>
        <th class="border border-primary align-middle" width="30%" colspan="8"><div align="left"><?php echo $drad ; ?></div></th>
    </tr>
    <tr>
        <td class="border border-primary align-middle" width="20%" colspan="2"><div align="left">&nbsp;<?php echo $duzunbaslik; ?></div></td>
        <th class="border border-primary align-middle" width="25%" colspan="8"><div align="left"><?php echo $aseunv ; ?></div></th>
        <td class="border border-primary align-middle" width="25%" colspan="2"><div align="left">&nbsp;<?php echo $onunbaslik; ?></div></td>
        <th class="border border-primary align-middle" width="30%" colspan="8"><div align="left"><?php echo $unvan ;?></div></th>
    </tr>
    <tr>
        <?php
        $a=Date("d/m/Y");
        ?>
        <td class="border border-primary align-middle" width="20%" colspan="2"><div align="left">&nbsp;Tarih</div></td>
        <th class="border border-primary align-middle" width="25%" colspan="8"><div align="left"><?php echo $a; ?></div></th>
        <td class="border border-primary align-middle" width="25%" colspan="2"><div align="left">&nbsp;Tarih</div></td>
        <th class="border border-primary align-middle" width="30%" colspan="8"><div align="left"><?php echo $a;?></div></th>
    </tr>
    <tr>
        <td class="border border-primary align-middle" width="20%" colspan="2"><div align="left">&nbsp;<?php echo $duzimzabaslik; ?></div></td>
        <th class="border border-primary align-middle" width="25%" colspan="8"><div align="left">&nbsp;</div></th>
        <td class="border border-primary align-middle" width="25%" colspan="2"><div align="left">&nbsp;<?php echo $onimzabaslik; ?></div></td>
        <th class="border border-primary align-middle" width="20%" colspan="8"><div align="left">&nbsp;</div></th>
    </tr>
    </thead>
</table>




<!--
<table class="cizgi" border="0" bordercolor="#FFFFFF" align="center" cellpadding="0" cellspacing="0" width="100%">
    <input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
    <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
    <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
    <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
    <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
    <tr>
        <th  width="4%" align="left"bordercolor="white" colspan="25">EK 3</th>
    </tr>
    <tr>
        <th  width="4%" align="center" bordercolor="white" colspan="25"><font face="Arial" size="4"><?php echo trsuz("EVL�L�K �NCES� DANI�MANLIK FORMU");?></font></th>
    </tr>
    <tr>
        <th  width="4%" align="center" bordercolor="white" colspan="25">&nbsp;</th>
    </tr>
    <tr>
        <th  width="4%" align="left"bordercolor="white" colspan="9"><font size="2" family="Arial"><?php echo trsuz("�L�N/�L�EN�N ADI:");?></font></th>
        <th  width="4%"align="left" bordercolor="white" colspan="16"><?php echo '<font size="3" family="Arial">'.trsuz($ilinadine).' / '.trsuz($ilceninadine).'</font>' ;?></th>
    </tr>
    <tr>
        <th  width="4%" align="left"bordercolor="white" colspan="9"><font size="2" family="Arial"><?php echo trsuz("SA�LIK RAPORU D�ZENLEYEN KURULU�UN ADI:");?></font></th>
        <th  width="4%"align="left" bordercolor="white" colspan="16"><?php echo '<font size="3" family="Arial">'.$asmninadine.'&nbsp;&nbsp;'.trsuz($ocgelen).'&nbsp;&nbsp;'.trsuz($ahb).'</font>' ;?></th>
    </tr>
    <tr>
        <th  width="4%" align="left"bordercolor="white"colspan="9"><font size="2" family="Arial"><?php echo trsuz("SA�LIK RAPORUNUN D�ZENLEND��� D�NEM:");?></font></th>
        <th  width="4%"align="left" bordercolor="white" colspan="16"><?php echo '<font size="3" family="Arial">'.trsuz($aygelen).'-'.$yilgelen.'</font>' ;?></th>
    </tr>
    <tr>
        <th  width="4%"align="center" bordercolor="white" colspan="25">&nbsp;</th>
    </tr>
    <tr>
        <th  width="10%" align="center" class="style5" bgcolor="white" rowspan="2" colspan="5"><font face="Arial" size="3">&nbsp;</font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" rowspan="2" colspan="3"><font face="Arial" size="2">TOPLAM</font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="8"><font face="Arial" size="2"><?php echo trsuz("YA� GRUPLARINA G�RE DA�ILIM");?></font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="7"><font face="Arial" size="2"><?php echo trsuz("��REN�M DURUMUNA G�RE DA�ILIM");?></font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="2"><font face="Arial" size="2">AKRABALIK DURUMU*</font></th>
    </tr>
    <tr>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2"><?php echo trsuz("17 ve alt�");?></font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">18-24</font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">25-29</font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">30-34</font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">35-39</font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">40-44</font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">45-49</font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2"><?php echo trsuz("50 ve �zeri");?></font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2"><?php echo trsuz("Okur Yazar De�il");?></font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">Okur Yazar</font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2"><?php echo trsuz("�lk - Orta");?></font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">Lise</font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="3"><font face="Arial" size="2"><?php echo trsuz("Y�ksekokul/ �niversite");?></font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">VAR</font></th>
        <th  width="4%" align="center" class="style5" bgcolor="white" colspan="1"><font face="Arial" size="2">YOK</font></th>
    </tr>
    <tr>
        <th  width="10%" height="50" align="center" class="style5" bgcolor="white" colspan="5"><font face="Arial" size="2"><?php echo trsuz("DANI�MANLIK VER�LEN KADIN SAYISI");?></font></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" style="background:#FFFF00" name="dvks" id="dvks" type="text" value="0" size="2" readonly="true"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v1" id="v1" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="1"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v2" id="v2" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="2"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v3" id="v3" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="3"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v4" id="v4" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="4"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v5" id="v5" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="5"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v6" id="v6" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="6"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v7" id="v7" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="7"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v8" id="v8" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="8"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v9" id="v9" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="9"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v10" id="v10" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="10"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v11" id="v11" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="11"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v12" id="v12" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="12"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" name="v13" onchange="topla10();" onkeydown="topla10();" id="v13" type="text" value="0" size="2" tabindex="13"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v14" id="v14" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="14"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v15" id="v15" onchange="topla10();" onkeydown="topla10();" type="text" value="0" size="2" tabindex="15"/></th>
    </tr>
    <tr>
        <th  width="10%" height="50" colspan="5" align="center" bgcolor="white" class="style5"><font face="Arial" size="2"><?php echo trsuz("SA�LIK RAPORU D�ZENLENEN KADIN SAYISI");?></font></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" style="background:#FFFF00" name="srdks" id="srdks" type="text" value="0" size="2" readonly="true"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v16" id="v16" type="text" value="0" size="2" tabindex="16" onchange="topla11();" onkeydown="topla11();"  onkeyup="esitmidvks();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v17" id="v17" type="text" value="0" size="2" tabindex="17" onchange="topla11();" onkeydown="topla11();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v18" id="v18" type="text" value="0" size="2" tabindex="18" onchange="topla11();" onkeydown="topla11();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v19" id="v19" type="text" value="0" size="2" tabindex="19" onchange="topla11();" onkeydown="topla11();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v20" id="v20" type="text" value="0" size="2" tabindex="20" onchange="topla11();" onkeydown="topla11();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v21" id="v21" type="text" value="0" size="2" tabindex="21" onchange="topla11();" onkeydown="topla11();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v22" id="v22" type="text" value="0" size="2" tabindex="22" onchange="topla11();" onkeydown="topla11();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v23" id="v23" type="text" value="0" size="2" tabindex="23" onchange="topla11();" onkeydown="topla11();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v24" id="v24" type="text" value="0" size="2" tabindex="24" onchange="topla11();" onkeydown="topla11();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v25" id="v25" type="text" value="0" size="2" tabindex="25" onchange="topla11();" onkeydown="topla11();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v26" id="v26" type="text" value="0" size="2" tabindex="26" onchange="topla11();" onkeydown="topla11();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v27" id="v27" type="text" value="0" size="2" tabindex="27" onchange="topla11();" onkeydown="topla11();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" name="v28" id="v28" type="text" value="0" size="2" tabindex="28" onchange="topla11();" onkeydown="topla11();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v29" id="v29" type="text" value="0" size="2" tabindex="29" onchange="topla11();" onkeydown="topla11();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v30" id="v30" type="text" value="0" size="2" tabindex="30" onchange="topla11();" onkeydown="topla11();"/></th>
    </tr>
    <tr>
        <th  width="10%"  height="50"align="center" class="style5" bgcolor="white" colspan="5"><font face="Arial" size="2"><?php echo trsuz("DANI�MANLIK VER�LEN ERKEK SAYISI");?></font></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" style="background:#FFFF00" name="dves" id="dves" type="text" value="0" size="2" readonly="true"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v31" id="v31" type="text" value="0" size="2" tabindex="31" onchange="topla12();" onkeydown="topla12();"  onkeyup="esitmisrdks();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v32" id="v32" type="text" value="0" size="2" tabindex="32" onchange="topla12();" onkeydown="topla12();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v33" id="v33" type="text" value="0" size="2" tabindex="33" onchange="topla12();" onkeydown="topla12();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v34" id="v34" type="text" value="0" size="2" tabindex="34" onchange="topla12();" onkeydown="topla12();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v35" id="v35" type="text" value="0" size="2" tabindex="35" onchange="topla12();" onkeydown="topla12();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v36" id="v36" type="text" value="0" size="2" tabindex="36" onchange="topla12();" onkeydown="topla12();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v37" id="v37" type="text" value="0" size="2" tabindex="37" onchange="topla12();" onkeydown="topla12();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v38" id="v38" type="text" value="0" size="2" tabindex="38" onchange="topla12();" onkeydown="topla12();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v39" id="v39" type="text" value="0" size="2" tabindex="39" onchange="topla12();" onkeydown="topla12();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v40" id="v40" type="text" value="0" size="2" tabindex="40" onchange="topla12();" onkeydown="topla12();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v41" id="v41" type="text" value="0" size="2" tabindex="41" onchange="topla12();" onkeydown="topla12();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v42" id="v42" type="text" value="0" size="2" tabindex="42" onchange="topla12();" onkeydown="topla12();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" name="v43" id="v43" type="text" value="0" size="2" tabindex="43" onchange="topla12();" onkeydown="topla12();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v44" id="v44" type="text" value="0" size="2" tabindex="44" onchange="topla12();" onkeydown="topla12();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v45" id="v45" type="text" value="0" size="2" tabindex="45" onchange="topla12();" onkeydown="topla12();"/></th>
    </tr>
    <tr>
        <th  width="10%"  height="50"align="center" class="style5" bgcolor="white" colspan="5"><font face="Arial" size="2"><?php echo trsuz("SA�LIK RAPORU D�ZENLENEN ERKEK SAYISI");?></font></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" style="background:#FFFF00" name="srdes" id="srdes" type="text" value="0" size="2" readonly="true"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v46" id="v46" type="text" value="0" size="2" tabindex="46" onchange="topla13();" onkeydown="topla13();"  onkeyup="esitmidves();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v47" id="v47" type="text" value="0" size="2" tabindex="47" onchange="topla13();" onkeydown="topla13();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v48" id="v48" type="text" value="0" size="2" tabindex="48" onchange="topla13();" onkeydown="topla13();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v49" id="v49" type="text" value="0" size="2" tabindex="49" onchange="topla13();" onkeydown="topla13();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v50" id="v50" type="text" value="0" size="2" tabindex="50" onchange="topla13();" onkeydown="topla13();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v51" id="v51" type="text" value="0" size="2" tabindex="51" onchange="topla13();" onkeydown="topla13();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v52" id="v52" type="text" value="0" size="2" tabindex="52" onchange="topla13();" onkeydown="topla13();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v53" id="v53" type="text" value="0" size="2" tabindex="53" onchange="topla13();" onkeydown="topla13();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v54" id="v54" type="text" value="0" size="2" tabindex="54" onchange="topla13();" onkeydown="topla13();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v55" id="v55" type="text" value="0" size="2" tabindex="55" onchange="topla13();" onkeydown="topla13();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v56" id="v56" type="text" value="0" size="2" tabindex="56" onchange="topla13();" onkeydown="topla13();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v57" id="v57" type="text" value="0" size="2" tabindex="57" onchange="topla13();" onkeydown="topla13();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="3"><input class="style1" name="v58" id="v58" type="text" value="0" size="2" tabindex="58" onchange="topla13();" onkeydown="topla13();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v59" id="v59" type="text" value="0" size="2" tabindex="59" onchange="topla13();" onkeydown="topla13();"/></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC"><input class="style1" name="v60" id="v60" type="text" value="0" size="2" tabindex="60" onchange="topla13();" onkeydown="topla13();"/></th>
    </tr>
       <tr>
        <th  width="4%" align="center" bgcolor="white" colspan="25">&nbsp;</th>
    </tr>
    <tr>
        <th  width="4%" align="center" class="style5" bgcolor="#CEF6EC" colspan="10"><?php echo trsuz("D�ZENLEYEN");?></th>
        <th  width="4%" bgcolor="white" colspan="5" rowspan="5"></th>
        <th  width="4%" align="center" class="style5" bgcolor="#CEF6EC" colspan="10">ONAYLAYAN</th>
    </tr>
    <tr>
        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz("Ad� Soyad�");?></th>
        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><input class="style1" name="v173"  type="text" onkeyup="esitmisrdes();" value="<?php echo trsuz($asead) ; ?>" size="40" tabindex="61"/></th>
        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz("Ad� Soyad�");?></th>
        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><input class="style1" name="v176"  type="text" value="<?php echo trsuz($drad) ; ?>" size="40" tabindex="64"/></th>
    </tr>
    <tr>
        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz("�nvan�");?></th>
        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><input class="style1" name="v174"  type="text" value="<?php echo trsuz($aseunv) ; ?>" size="40" tabindex="62"/></th>
        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz("�nvan�");?></th>
        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><input class="style1" name="v177"  type="text" value="<?php echo trsuz($ahkod).' '.trsuz($ahno) ;?>" size="40" tabindex="65"/></th>
    </tr>
    <tr>
        <?php
        $a=Date("d/m/Y");
        ?>
        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;Tarih</th>
        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><input id="masktest" class="style1" name="v175"  type="text" value="<?php echo $a; ?>" size="40" tabindex="63"/></th>
        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;Tarih</th>
        <th  width="4%"align="left" class="style5" bgcolor="#CEF6EC" colspan="8"><input id="masktest1" class="style1" name="v178"  type="text" value="<?php echo $a;?>" size="40" tabindex="66"/></th>
    </tr>
    <tr>
        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz("�mza");?></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="8">&nbsp;</th>
        <th  width="4%" align="left" class="style5" bgcolor="#CEF6EC" colspan="2">&nbsp;<?php echo trsuz("�mza");?></th>
        <th  width="4%"align="center" class="style5" bgcolor="#CEF6EC" colspan="8">&nbsp;</th>
    </tr>
    <tr>
        <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;</font></th>
    </tr>
    <tr>
        <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;NOT:</font></th>
    </tr>
    <tr>
        <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo trsuz("*  Form ayl�k olarak,sa�l�k raporu d�zenleyen kurum ve kurulu� taraf�ndan TSM'ye,TSM taraf�ndan da �l Halk Sa�l��� M�d�rl���ne g�nderilecektir.");?></font></th>
    </tr>
    <tr>
        <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo trsuz("*  Halk Sa�l��� M�d�rl���nce 3 ayda bir formun icmali al�narak THSK Kad�n ve �reme Sa�l��� Daire Ba�kanl���na bildirilecektir.");?></font></th>
    </tr>
    <tr>
        <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo trsuz("*  *�iftler ilgili s�tuna ayr� ayr� kaydedilecektir.");?></font></th>
    </tr>
    <tr>
        <th  width="4%" align="left" colspan="25"><font face="Arial" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo trsuz("*  Ya� Gruplar�na G�re Da��l�m = ��renim Durumuna G�re Da��l�m = Akrabal�k Durumu = Toplam olmal�d�r.");?></font></th>
    </tr>
</table>
</form>










<!--
<table class="table table-responsive-sm table-sm table-bordered table-striped table-light table-hover form013ustaralar" style="margin-top:-8px;">
  <thead>
  <tr>
  <th class="bg-warning text-center"  width="30%" colspan="3"><a class="btn btn-sm btn-success" style="width:100px" href=# onclick="kontrol();" title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a></th>
      <th class="bg-primary text-center" width="40%" colspan="3"><h6 style="color:#FFFF00;"><strong><?php echo $eklegorbaslik;?></strong></h6></th>
    <th class="bg-warning text-center" width="30%" colspan="3"><a class="btn btn-sm btn-primary" style="width:100px" href="#" tabindex="1" title="Kaydet" onclick="girdiyiekle();"><i class="fa fa-floppy-o" aria-hidden="true"></i> Kaydet</a></th>
</tr>
	  </thead>
</table>
<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
      <input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
      <input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
      <input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
      <input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
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
    <th  width="5%"align="left" class="border-0" colspan="5"><?php echo ''.$ilceninadine.'' ;?></th>  
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
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1" rowspan="2"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v1" id="v1" type="text" value="0" size="5" tabindex="1" autofocus/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1" rowspan="2"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v2" id="v2" type="text" value="0" size="5" tabindex="2"/></div></td>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="left"><small style="font-size:10pt"><?php echo $yenibaslik;?></small></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v3" id="v3" type="text" value="0" size="5" tabindex="3"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v4" id="v4" type="text" value="0" size="5" tabindex="4"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v5" id="v5" type="text" value="0" size="5" tabindex="5"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v6" id="v6" type="text" value="0" size="5" tabindex="6"/></div></td>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input  class="form-control form-control-sm text-center border-0" name="v7" id="v7" type="hidden" value="0" size="5" tabindex="7"/></th>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input  class="form-control form-control-sm text-center border-0" name="v8" id="v8" type="hidden" value="0" size="5" tabindex="8"/></th>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input  class="form-control form-control-sm text-center border-0" name="v9" id="v9" type="hidden" value="0" size="5" tabindex="9"/></th>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v10" id="v10" type="text" value="0" size="5" tabindex="10"/></div></td>
    <th  width="5%" align="center" class="border border-primary" bgcolor="#999999"><input  class="form-control form-control-sm text-center border-0" name="v11" id="v11" type="hidden" value="0" size="5" tabindex="11"/></th>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v12" id="v12" type="text" value="0" size="5" tabindex="12"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v13" id="v13" type="text" value="0" size="5" tabindex="13"/></div></td>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="1"><div align="left"><small style="font-size:10pt"><?php echo $eskibaslik;?></small></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v14" id="v14" type="text" value="0" size="5" tabindex="14"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v15" id="v15" type="text" value="0" size="5" tabindex="15"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v16" id="v16" type="text" value="0" size="5" tabindex="16"/></div></td>
    <th  width="5%" align="center" bgcolor="white" class="border-0">&nbsp;</th>
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
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><?php echo $devirbaslik;?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="hapdevir" id="hapdevir" type="text" value="<?php echo $devredengebe ; ?>" size="5" readonly="true"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="kondevir" id="kondevir" type="text" value="<?php echo $devredenbebek ; ?>" size="5" readonly="true"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="enjdevir" id="enjdevir" type="text" value="<?php echo $devredenlohusa ; ?>" size="5" readonly="true"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="riadevir" id="riadevir" type="text" value="<?php echo $devredencocuk ; ?>" size="5" readonly="true"/></div></td>
    <th  width="5%" align="center" class="border border-primary align-middle" bgcolor="#999999"><input  class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="impdevir" id="impdevir" type="hidden" value="<?php echo $devredenimp ; ?>" size="5" readonly="true"/></th>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><?php echo $gelenbaslik;?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v17" id="v17"  type="text"  onchange="topla10();" onkeydown="topla10();" value="0" size="5" tabindex="17"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v22" id="v22"  type="text"  onchange="topla11();" onkeydown="topla11();"  onkeyup="esitmihap();" value="0" size="5" tabindex="22"/></div>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v27" id="v27" type="text" onchange="topla12();" onkeydown="topla12();" value="0" size="5" tabindex="27"/></div>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v32" id="v32" type="text" onchange="topla13();" onkeydown="topla13();"  onkeyup="esitmienj();" value="0" size="5" tabindex="32"/></div>
    <th  width="5%" align="center" class="border border-primary align-middle" bgcolor="#999999"><input  class="form-control form-control-sm text-center border-0" name="v37" id="v37" type="hidden" onchange="topla14();" onkeydown="topla14();" value="0" size="5" tabindex="37"/></th>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><small style="font-size:9pt"><?php echo $digergelenbaslik;?></small></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v18" id="v18"  type="text"  onchange="topla10();" onkeydown="topla10();" value="0" size="5" tabindex="18"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v23" id="v23"  type="text"  onchange="topla11();" onkeydown="topla11();" value="0" size="5" tabindex="23"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v28" id="v28" type="text" onchange="topla12();" onkeydown="topla12();" value="0" size="5" tabindex="28"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v33" id="v33" type="text" onchange="topla13();" onkeydown="topla13();" value="0" size="5" tabindex="33"/></div></td>
    <th  width="5%" align="center" class="border border-primary align-middle" bgcolor="#999999"><input  class="form-control form-control-sm text-center border-0" name="v38" id="v38" type="hidden" onchange="topla14();" onkeydown="topla14();" value="0" size="5" tabindex="38"/></th>
	<th class="border-0"  width="5%" align="center" bgcolor="white" colspan="2">&nbsp;</th>
	<td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><?php echo $cikarilanriabaslik;?></div></td>
	<td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="2"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v42" id="v42" type="text" value="0" onkeyup="esitmiria();" size="5" tabindex="42"/></div></td>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><?php echo $zayibaslik;?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v19" id="v19"  type="text"  onchange="topla10();" onkeydown="topla10();" value="0" size="5" tabindex="19"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v24" id="v24"  type="text"  onchange="topla11();" onkeydown="topla11();" value="0" size="5" tabindex="24"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v29" id="v29" type="text" onchange="topla12();" onkeydown="topla12();" value="0" size="5" tabindex="29"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v34" id="v34" type="text" onchange="topla13();" onkeydown="topla13();" value="0" size="5" tabindex="34"/></div></td>
    <th  width="5%" align="center" class="border border-primary align-middle" bgcolor="#999999"><input  class="form-control form-control-sm text-center border-0" name="v39" id="v39" type="hidden" onchange="topla14();" onkeydown="topla14();" value="0" size="5" tabindex="39"/></th>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><?php echo $geribaslik;?></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v20" id="v20"  type="text"  onchange="topla10();" onkeydown="topla10();" value="0" size="5" tabindex="20"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v25" id="v25"  type="text"  onchange="topla11();" onkeydown="topla11();" value="0" size="5" tabindex="25"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v30" id="v30" type="text" onchange="topla12();" onkeydown="topla12();" value="0" size="5" tabindex="30"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v35" id="v35" type="text" onchange="topla13();" onkeydown="topla13();" value="0" size="5" tabindex="35"/></div></td>
    <th  width="5%" align="center" class="border border-primary align-middle" bgcolor="#999999"><input  class="form-control form-control-sm text-center border-0" name="v40" id="v40" type="hidden" onchange="topla14();" onkeydown="topla14();" value="0" size="5" tabindex="40"/></th>
  </tr>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left">Sarf Edilen Malzeme</div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v21" id="v21"  type="text"  onchange="topla10();" onkeydown="topla10();" value="0" size="5" tabindex="21"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v26" id="v26"  type="text"  onchange="topla11();" onkeydown="topla11();" value="0" size="5" tabindex="26"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v31" id="v31" type="text" onchange="topla12();" onkeydown="topla12();" value="0" size="5" tabindex="31"/></div></td>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" name="v36" id="v36" type="text" onchange="topla13();" onkeydown="topla13();" value="0" size="5" tabindex="36"/></div></td>
    <th  width="5%" align="center" class="border border-primary align-middle" bgcolor="#999999"><input  class="form-control form-control-sm text-center border-0" name="v41" id="v41" type="hidden" onchange="topla14();" onkeydown="topla14();" value="0" size="5" tabindex="41"/></th>
  </tr>
  <tr>
  <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left"><?php echo $sonucbaslik;?></div></td>
  <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input name="button2" type="button"  class="form-control form-control-sm text-center border-0"  onclick="topla10();" value=" = " /></div></td>
  <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input name="button22" type="button"  class="form-control form-control-sm text-center border-0"  onclick="topla11();" value=" = " /></div></td>
  <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input name="button23" type="button"  class="form-control form-control-sm text-center border-0"  onclick="topla12();" value=" = " /></div></td>
  <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input name="button2" type="button"  class="form-control form-control-sm text-center border-0"  onclick="topla13();" value=" = " /></div></td>
  <th  width="5%" align="center" class="border border-primary align-middle" bgcolor="#999999"><input name="button2" type="hidden"  class="form-control form-control-sm text-center border-0"  onclick="topla14();" value=" = " /></th>
  <tr>
    <td class="border border-primary align-middle" width="5%" colspan="3"><div align="left">Kalan Malzeme</div></td>
	<td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="haptop" id="haptop" type="text" value="<?php echo $aysonugebemevcudu ; ?>" size="5" readonly="true"/></div></td>
     <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="kontop" id="kontop" type="text" value="<?php echo $aysonubebekmevcudu ; ?>" size="5" readonly="true"/></div></td>
   <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="enjtop" id="enjtop" type="text" value="<?php echo $aysonulohusamevcudu ; ?>" size="5" readonly="true"/></div></td>
   <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="1"><div align="center"><input  class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="riatop" id="riatop" type="text" value="<?php echo $aysonucocukmevcudu ; ?>" size="5" readonly="true"/></div></td>
    <th  width="5%" align="center" class="border border-primary align-middle" bgcolor="#999999"><input  class="form-control form-control-sm text-center border-0" style="background:#FFFF00" name="imptop" id="imptop" type="hidden" value="<?php echo $aysonuimpmevcudu ; ?>" size="5" readonly="true"/></th>
  </tr>
<tr>
    <th class="border-0"  width="5%" align="left" colspan="6">&nbsp;</th>
	</tr>	
  <tr>
    <td class="border border-primary align-middle" style="background-color:#CCFFFF" width="5%" colspan="6"><div align="center"><?php echo $duzenleyen;?></div></td>
    <th width="27%" rowspan="5" colspan="2" align="left" class="border border-0 align-middle text-center"><a class="btn btn-sm btn-success" style="width:100px" href=# onclick="kontrol();" title="İptal" tabindex="41"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a><br><a class="btn btn-sm btn-info mt-3" style="width:100px" href="#" tabindex="41" title="Kaydet" onclick="girdiyiekle();"><i class="fa fa-floppy-o" aria-hidden="true"></i> Kaydet</a></th>
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
-->