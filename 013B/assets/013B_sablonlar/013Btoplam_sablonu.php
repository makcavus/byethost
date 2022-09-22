<table class="table table-responsive table-sm toplamenust" style="background-color:#CCFFFF">
	  <thead>
	  <tbody>
        <tr>
          <th class="border-0" width="18%"><div align="center">T.C.</div></th>
          <th class="border-0" width="38%"><span></span></th>
          <th class="border-0" width="31%"><div align="right">YIL:</div></th>
          <th class="border-0" width="13%"><div align="left"><?php echo $yilgelen ;?></div></th>
        </tr>
        <tr>
          <th class="border-0"><div align="center">SAĞLIK BAKANLIĞI </div></th>
          <th class="border-0" rowspan="2"><div align="right"><h5>AŞI SONUÇLARI ÇİZELGESİ</h5></div></th>
          <th class="border-0"><div align="right">AY:</div></th>
          <th class="border-0"><div align="left"><?php echo $aygelen ;?></div></th>
        </tr>
        <tr>
          <th class="border-0"><div align="center">Form No:013 </div></th>
          <th class="border-0"><spa></span></th>
          <th class="border-0"><span></span></th>
          <th class="border-0"><span></span></th>
        </tr>
        <tr>
          <th class="border-0"><div align="left">İL:</div></th>
          <th class="border-0"><div align="left"><?php echo $ilinadi ;?></div></th>
          <th class="border-0"><div align="right">TOPLAM NÜFUS:</div></th>
          <th class="border-0"><?php echo $verim118 ; ?></th>
        </tr>
        <tr>
          <th class="border-0"><div align="left">İLÇE/TSM:</div></th>
          <th class="border-0"><div align="left"><?php echo $ilceninadi ;?></div></th>
          <th class="border-0"><div align="right">0-11 AY BEBEK NÜFUSU:</div></th>
          <th class="border-0"><?php echo $verim119 ; ?></th>
        </tr>
        <tr>
          <th class="border-0"><div align="left">KURUM/AH:</div></th>
          <th class="border-0"><div align="left"><?php echo $ocgelen; ?></div></th>
          <th class="border-0"><div align="right">AYLIK 0-11 AY BEBEK NÜFUSU:</div></th>
          <th class="border-0"><?php echo $verim135 ; ?></th>
        </tr>
		</tbody>
		</thead>
      </table>
<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
<table class="table table-responsive-sm table-sm toplamenust" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
	  <thead>
        <tr>
          <th width="11%" rowspan="2" class="border border-primary align-middle"><div align="center">AŞI</div></th>
          <th colspan="8" scope="col" class="border border-primary"><div align="center">YAŞ GRUPLARINA GÖRE YAPILAN AŞI DOZLARI</div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center">Uygu-lama</div></th>
          <th width="18%" class="border border-primary"><div align="center">0 YAŞ<br>(0-11 ay)</div></th>
          <th width="11%" class="border border-primary"><div align="center">1 YAŞ<br>(12-23 ay)</div></th>
          <th width="11%" class="border border-primary"><div align="center">2-4 YAŞ<br>(24-59 ay)</div></th>
          <th width="11%" class="border border-primary align-middle"><div align="center">5-9 YAŞ</div></th>
          <th width="11%" class="border border-primary align-middle"><div align="center">10-14 YAŞ</div></th>
          <th width="11%" class="border border-primary align-middle"><div align="center">15 YAŞ ve Üzeri</div></th>
          <th width="11%" class="border border-primary align-middle"><div align="center">TOPLAM</div></th>
        </tr>
        <tr>
          <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">DaBT-İPA-Hib AŞISI</div></th>
          <th width="5%" class="border border-primary"><div align="center">I</div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim1 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim2 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim3 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim4 ; ?></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamdbt1 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">II</div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim5 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim6 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim7 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim8 ; ?></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamdbt2 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">III</div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim9 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim10 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim11 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim12 ; ?></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamdbt3 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">R</div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim13 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim14 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim15 ; ?></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamdbtR ; ?></div></th>
        </tr>
        <tr>
          <th colspan="2" class="border border-primary align-middle" scope="row"><div align="center">TOPLAM DaBT-IPA-Hib</div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamdbt ; ?></div></th>
        </tr>
</thead>
        <tbody>
</table>
  <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
  <tbody>
        <tr style="border:double;border-color:#0066FF">
         <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">DaBT-İPA AŞISI</div></th>
		  <th width="5%" class="border border-primary"><div align="center" class="style8"></div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim17 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim18 ; ?></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamhib ; ?></div></th>
        </tr>
	  </tbody>
  </table>
  <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
       <tbody>
        <tr>
         <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">KONJUGE PNOMOKOK AŞISI </div></th>
          <th width="5%" class="border border-primary"><div align="center" class="style8">I</div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim19 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim20 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim21 ; ?></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim142; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkpa1 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">II</div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim22 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim23 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim24 ; ?></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkpa2 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">III</div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim25 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim26 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim27 ; ?></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkpa3 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">R</div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim28 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim29 ; ?></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkpar ; ?></div></th>
        </tr>
        <tr>
          <th colspan="2" class="border border-primary align-middle" scope="row"><div align="center">TOPLAM KPA </div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkpa ; ?></div></th>
        </tr>
</tbody>
  </table>
  <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
       <tbody>
        <tr>
          <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">ORAL POLİO AŞISI </div></th>
          <th width="5%" class="border border-primary"><div align="center" class="style8">I</div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim30 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim31 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim32 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim33 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim34 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim35 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamopv1 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">II</div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim37 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim38 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim39 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim40 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim41 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamopv2 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">III</div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamopv3 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">R</div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamopvr ; ?></div></th>
        </tr>
        <tr>
          <th colspan="2" class="border border-primary align-middle" scope="row"><div align="center">TOPLAM ORAL POLİO </div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamopv ; ?></div></th>
        </tr>
	  </tbody>
  </table>
  <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
       <tbody>
        <tr>
         <th width="11%" rowspan="2" class="border border-primary align-middle" scope="row"><div align="center">K.K.K AŞISI </div></th>
          <th width="5%" class="border border-primary"><div align="center" class="style8">I</div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim53 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim54 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim55 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim56 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim57 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkkk1 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">R</div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim58 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim59 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim60 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim61 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim62 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkkkr ; ?></div></th>
        </tr>
        <tr>
          <th colspan="2" class="border border-primary align-middle" scope="row"><div align="center">TOPLAM K.K.K. </div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkkk ; ?></div></th>
        </tr>
	 </tbody>
  </table>
   <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
       <tbody>
        <tr style="border:double;border-color:#0066FF">
         <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">PPD</div></th>
		  <th width="5%" class="border border-primary"><div align="center" class="style8"></div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim63 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim64 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim65 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim66 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim67 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim68 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamppd ; ?></div></th>
        </tr>
	   </tbody>
  </table>
  <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
       <tbody>
        <tr style="border:double;border-color:#0066FF">
          <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">BCG AŞISI</div></th>
		  <th width="5%" class="border border-primary"><div align="center" class="style8">I</div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim69 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim70 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim71 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim72 ; ?></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplambcg ; ?></div></th>
        </tr>
	  </tbody>
  </table>
   <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
       <tbody>
        <tr>
          <th width="11%" rowspan="2" class="border border-primary align-middle" scope="row"><div align="center">HEPATİT-A AŞISI </div></th>
          <th width="5%" class="border border-primary"><div align="center" class="style8">I</div></th>
          <th width="18%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
		  <th width="11%" class="border border-primary"><div align="center"><?php echo $verim120 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim121 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim122 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim123 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim124 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $hepa1top ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">R</div></th>
          <th width="18%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim125 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim126 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim127 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim128 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim129 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $heparaptop ; ?></div></th>
        </tr>
        <tr>
          <th colspan="2" class="border border-primary align-middle" scope="row"><div align="center">TOPLAM HEPATİT-A </div></th>
          <th width="18%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamhepa ; ?></div></th>
        </tr>
	   </tbody>
  </table> 
   <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
       <tbody>
        <tr style="border:double;border-color:#0066FF">
          <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">SU ÇİÇEĞİ AŞISI</div></th>
		  <th width="5%" class="border border-primary"><div align="center" class="style8"></div></th>
          <th width="18%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim130 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim131 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim132 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim133 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim134 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $suctop ; ?></div></th>
        </tr>
	   </tbody>
  </table>  
  <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
       <tbody>
        <tr style="border:double;border-color:#0066FF">
          <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center" class="style7">KIZAMIKÇIK AŞISI </div></th>
		  <th width="5%" class="border border-primary"><div align="center" class="style8"></div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim96 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkizcik ; ?></div></th>
        </tr>
	  </tbody>
  </table>
  <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
       <tbody>
        <tr style="border:double;border-color:#0066FF">
          <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center" class="style19">OKUL Td AŞISI </div></th>
		  <th width="5%" class="border border-primary"><div align="center" class="style8"></div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim100 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim101 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamokul ; ?></div></th>
        </tr>
	  </tbody>
  </table>
 <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
       <tbody>
   <tr>
     <th width="11%" class="border border-primary align-middle" scope="row"><div align="center">DİĞER Td </div></th>
     <th width="5%" class="border border-primary"><div align="center" class="style8"></div></th>
     <th width="18%" bordercolor="#F0F0F0" class="style5"><div align="center"><?php echo $verim102 ; ?></div></th>
     <th width="11%" class="border border-primary"><div align="center"><?php echo $verim103 ; ?></div></th>
     <th width="11%" class="border border-primary"><div align="center"><?php echo $verim104 ; ?></div></th>
     <th width="11%" class="border border-primary"><div align="center"><?php echo $verim105 ; ?></div></th>
     <th width="11%" class="border border-primary"><div align="center"><?php echo $verim106 ; ?></div></th>
     <th width="11%" class="border border-primary"><div align="center"><?php echo $verim107 ; ?></div></th>
     <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamdigertd ; ?></div></th>
   </tr>
	 </tbody>
</table>
 <table class="table table-responsive-sm table-sm form013tdaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
       <tbody>  
   <tr>
     <th width="11%" class="border border-primary align-middle"><div align="center">&nbsp;</div></th>
     <th width="5%" class="border border-primary" scope="col"><div align="center">&nbsp;</div></th>
     <th width="36%" bgcolor="#999999" class="border border-primary gri" scope="col" colspan="3"><div align="center">GEBE</div></th>
     <th width="36%" bgcolor="#999999" class="border border-primary gri" scope="col" colspan="3"><div align="center">GEBE DEĞİL</div></th>
     <th   width="10%" class="border border-primary" scope="col">&nbsp;</th>
   </tr>
   <tr>
     <th width="11%" rowspan="5" class="border border-primary align-middle"><div align="center">15-49 YAŞ KADIN Td  AŞISI</div></th>
     <th width="5%" class="border border-primary"><div align="center">Td1</div></th>
     <th class="border border-primary align-middle" colspan="3"><div align="center"><?php echo $verim108 ; ?></div>
         <div align="center"></div>
       <div align="center"></div></th>
     <th class="border border-primary align-middle" colspan="3"><div align="center"><?php echo $verim113 ; ?></div>
         <div align="center"></div>
         <div align="center"></div></th>
     <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamgebetet1 ; ?></div></th>
   </tr>
   <tr>
     <th width="5%" class="border border-primary"><div align="center">Td2</div></th>
     <th class="border border-primary align-middle" colspan="3"><div align="center"><?php echo $verim109 ; ?></div>
         <div align="center"></div>
         <div align="center"></div></th>
     <th class="border border-primary align-middle" colspan="3"><div align="center"><?php echo $verim114 ; ?></div>
         <div align="center"></div>
       <div align="center"></div></th>
     <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamgebetet2 ; ?></div></th>
   </tr>
   <tr>
     <th width="5%" class="border border-primary"><div align="center" class="style8">Td3</div></th>
     <th class="border border-primary align-middle" colspan="3"><div align="center"><?php echo $verim110 ; ?></div>
         <div align="center"></div>
         <div align="center"></div></th>
     <th class="border border-primary align-middle" colspan="3"><div align="center"><?php echo $verim115 ; ?></div>
         <div align="center"></div>
         <div align="center"></div></th>
     <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamgebetet3 ; ?></div></th>
   </tr>
   <tr>
     <th width="5%" class="border border-primary"><div align="center" class="style8">Td4</div></th>
     <th class="border border-primary align-middle" colspan="3"><div align="center"><?php echo $verim111 ; ?></div>
         <div align="center"></div>
       <div align="center"></div></th>
     <th class="border border-primary align-middle" colspan="3"><div align="center"><?php echo $verim116 ; ?></div>
         <div align="center"></div>
         <div align="center"></div></th>
     <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamgebetet4 ; ?></div></th>
   </tr>
   <tr>
     <th width="5%" class="border border-primary"><div align="center" class="style8">Td5</div></th>
     <th class="border border-primary align-middle" colspan="3"><div align="center"><?php echo $verim112 ; ?></div>
         <div align="center"></div>
         <div align="center"></div></th>
     <th class="border border-primary align-middle" colspan="3"><div align="center"><?php echo $verim117 ; ?></div>
         <div align="center"></div>
         <div align="center"></div></th>
     <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamgebetet5 ; ?></div></th>
   </tr>
   <tr>
     <th colspan="2" class="border border-primary align-middle" scope="row"><div align="center">TOPLAM Td </div></th>
     <th class="border border-primary align-middle" colspan="3"><div align="center"><?php echo $toplamgebe ; ?></div>
         <div align="center"></div>
         <div align="center"></div></th>
     <th class="border border-primary align-middle" colspan="3"><div align="center"><?php echo $toplamgebedegil ; ?></div>
         <div align="center"></div>
         <div align="center"></div></th>
     <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamgebetettop ; ?></div></th>
   </tr>
	 </tbody>
 </table>
   <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
       <tbody>
        <tr style="border:double;border-color:#0066FF">
         <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">KIZAMIK AŞISI</div></th>
		  <th width="5%" class="border border-primary"><div align="center" class="style8">
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim136 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim137 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim138 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim139 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim140 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim141 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkizamik ; ?></div></th>
        </tr>
	   </tbody>
  </table>
