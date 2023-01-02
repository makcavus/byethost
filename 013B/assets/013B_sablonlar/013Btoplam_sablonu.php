<table class="table table-responsive table-sm toplamenust" style="background-color:#CCFFFF">
	  <thead>
	  <tbody>
        <tr>
          <th class="border-0" width="18%"><div align="center">T.C.</div></th>
          <th class="border-0" width="38%"><span></span></th>          
        </tr>
        <tr>
          <th class="border-0"><div align="center">SAĞLIK BAKANLIĞI </div></th>
          <th class="border-0" rowspan="2"><div align="right"><h5>ÖZEL HEKİM AŞI UYGULAMALARI     (FORM 013B)</h5></div></th>          
        </tr>
        <tr>
          <th class="border-0"><div align="center">Form No:013-B </div></th>
          <th class="border-0"><spa></span></th>
          <th class="border-0"><span></span></th>
          <th class="border-0"><span></span></th>
        </tr>
        <tr>
          <th class="border-0"><div align="left">İL:</div></th>
          <th class="border-0"><div align="left"><?php echo $ilinadi ;?></div></th>
          </tr>
        <tr>
          <th class="border-0"><div align="left">İLÇE/TSM:</div></th>
          <th class="border-0"><div align="left"><?php echo $ilceninadi ;?></div></th>
          <th class="border-0" width="31%"><div align="right">YIL:</div></th>
          <th class="border-0" width="13%"><div align="left"><?php echo $yilgelen ;?></div></th>
        </tr>
        <tr>
          <th class="border-0"><div align="left">KURUM/AH:</div></th>
          <th class="border-0"><div align="left"><?php echo $ocgelen; ?></div></th>
          <th class="border-0"><div align="right">AY:</div></th>
          <th class="border-0"><div align="left"><?php echo $aygelen ;?></div></th>
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
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamdbt1 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">II</div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim5 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim6 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim7 ; ?></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamdbt2 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">III</div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim9 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim10 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim11 ; ?></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamdbt3 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">R</div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim13 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim14 ; ?></div></th>
          <th width="11%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
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
        <tr>
         <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center">KONJUGE PNOMOKOK AŞISI </div></th>
          <th width="5%" class="border border-primary"><div align="center" class="style8">I</div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim16 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim17 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim18 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim19 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim20 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim21; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkpa1 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">II</div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim22 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim23 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim24 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim25 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim26 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim27 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkpa2 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">III</div></th>
          <th width="18%" class="border border-primary"><div align="center"><?php echo $verim28 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim29 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim30 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim31 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim32 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim33 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkpa3 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">R</div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim34 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim35 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim36 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim37 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim38 ; ?></div></th>
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
         <th width="11%" rowspan="2" class="border border-primary align-middle" scope="row"><div align="center">K.K.K AŞISI </div></th>
          <th width="5%" class="border border-primary"><div align="center" class="style8">I</div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim39 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim40 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim41 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim42 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim43 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamkkk1 ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">R</div></th>
          <th width="18%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim44 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim45 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim46 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim47 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim48 ; ?></div></th>
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
    
    <tr>
        <th width="11%" rowspan="3" class="border border-primary align-middle" scope="row"><div align="center"><?php echo $hepbbaslik ;?></div></th>
        <th width="5%" class="border border-primary"><div align="center">I</div></th>
        <th width="18%" colspan="3" class="border border-primary"><div align="center"><?php echo $verim49 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim50 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim51 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim52 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim53 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim54 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamhep1 ; ?></div></th>
        </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">II</div></th>
        <th width="18%" colspan="3" class="border border-primary"><div align="center"><?php echo $verim55 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim56 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim57 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim58 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim59 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim60 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamhep2 ; ?></div></th>
    </tr>
    <tr>
        <th width="5%" class="border border-primary"><div align="center">III</div></th>
        <th width="18%" colspan="3" class="border border-primary"><div align="center"><?php echo $verim61 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim62 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim63 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim64 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim65 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $verim66 ; ?></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamhep3 ; ?></div></th>
    </tr>
    <tr>
        <th colspan="2" class="border border-primary" scope="row"><div align="center"><?php echo $tophepbbaslik ;?> </div></th>
        <th width="18%" colspan="3"bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
        <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
        <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
        <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
        <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
        <th width="11%" bgcolor="#999999" class="border border-primary gri"><div align="center"></div></th>
        <th width="11%" class="border border-primary"><div align="center"><?php echo $toplamhep ; ?></div></th>
    </tr>
    </tbody>
</table>
   <table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
       <tbody>
        <tr>
          <th width="11%" rowspan="2" class="border border-primary align-middle" scope="row"><div align="center">HEPATİT-A AŞISI </div></th>
          <th width="5%" class="border border-primary"><div align="center" class="style8">I</div></th>
          <th width="18%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim67 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim68 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim69 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim70 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim71 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $hepa1top ; ?></div></th>
        </tr>
        <tr>
          <th width="5%" class="border border-primary"><div align="center" class="style8">R</div></th>
          <th width="18%" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim72 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim73 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim74 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim75 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim76 ; ?></div></th>
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
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim77 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim78 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim79 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim80 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $verim81 ; ?></div></th>
          <th width="11%" class="border border-primary"><div align="center"><?php echo $suctop ; ?></div></th>
        </tr>
	   </tbody>
  </table>  
  
