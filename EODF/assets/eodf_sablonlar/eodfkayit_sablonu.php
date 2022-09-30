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
        <th class="border border-primary align-middle" width="5%" colspan="1"><div align="center"><input class="form-control form-control-sm text-center border-0" name="v60" id="v60" type="text" value="0" size="2" tabindex="60" onchange="topla13();" onkeydown="topla13();"></div></th>
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
        <th class="border border-primary align-middle" width="25%" colspan="8"><div align="left">
        <input class="form-control form-control-sm text-left border-0" name="v173"  type="text" onkeyup="esitmisrdes();" value="<?php echo $asead; ?>" size="40" tabindex="173"></div></th>
        <td class="border border-primary align-middle" width="25%" colspan="2"><div align="left">&nbsp;<?php echo $onadbaslik; ?></div></td>
        <th class="border border-primary align-middle" width="30%" colspan="8"><div align="left">
        <input class="form-control form-control-sm text-left border-0" name="v176"  type="text" value="<?php echo $drad; ?>" size="40" tabindex="176"></div></th>
    </tr>
    <tr>
        <td class="border border-primary align-middle" width="20%" colspan="2"><div align="left">&nbsp;<?php echo $duzunbaslik; ?></div></td>
        <th class="border border-primary align-middle" width="25%" colspan="8"><div align="left">
        <input class="form-control form-control-sm text-left border-0" name="v174"  type="text" value="<?php echo $aseunv; ?>" size="40" tabindex="174"></div></th>
        <td class="border border-primary align-middle" width="25%" colspan="2"><div align="left">&nbsp;<?php echo $onunbaslik; ?></div></td>
        <th class="border border-primary align-middle" width="30%" colspan="8"><div align="left">
        <input class="form-control form-control-sm text-left border-0" name="v177"  type="text" value="<?php echo $unvan; ?>" size="40" tabindex="177"></div></th>
    </tr>
    <tr>
        <?php
        $a=Date("d/m/Y");
        ?>
        <td class="border border-primary align-middle" width="20%" colspan="2"><div align="left">&nbsp;Tarih</div></td>
        <th class="border border-primary align-middle" width="25%" colspan="8"><div align="left">
        <input class="form-control form-control-sm text-left border-0" name="v175"  type="text" value="<?php echo $a; ?>" size="40" tabindex="175"></div></th>
        <td class="border border-primary align-middle" width="25%" colspan="2"><div align="left">&nbsp;Tarih</div></td>
        <th class="border border-primary align-middle" width="30%" colspan="8"><div align="left">
          <input class="form-control form-control-sm text-left border-0" name="v178"  type="text" value="<?php echo $a; ?>" size="40" tabindex="178"></div></th>
    </tr>
        <tr>
        <td class="border border-primary align-middle" width="20%" colspan="2"><div align="left">&nbsp;<?php echo $duzimzabaslik; ?></div></td>
        <th class="border border-primary align-middle" width="25%" colspan="8"><div align="left">&nbsp;</div></th>
        <td class="border border-primary align-middle" width="25%" colspan="2"><div align="left">&nbsp;<?php echo $onimzabaslik; ?></div></td>
        <th class="border border-primary align-middle" width="20%" colspan="8"><div align="left">&nbsp;</div></th>
    </tr>
    </thead>
</table>
