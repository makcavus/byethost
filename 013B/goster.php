<?php
session_start();
if(!isset($_SESSION["uye"])){
    echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}else{
?>
<style type="text/css">
    .form013ust {
        margin-top: -33px !important;
    }
    .form013ustaralar {
        margin-top: -8px !important;
    }
    .form013ustaralarenust {
        margin-top: -16px !important;
    }
    .form013tdaralar {
        margin-top: -19px !important;
    }
</style>
<script language="JavaScript" src="degistir.js" type="text/javascript">
</script>
<?php
include('../con_023.php');
include("tanimveyetkiler.php");
include('frm013alanlari.php');
$ahekgelen=$_GET['ahekkod'];
$ilgelen=$_GET['selectil'];
$ilcegelen=$_GET['selectilce'];
$ocgelen=$_GET['selectoc'];
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay'];
$ocakyazi=$_GET['selectoc'];
$ayyazi=$_GET['selectay'];
?>
<?php
$resultvyil = @mysqli_query($dbh,"select * from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
    $ilim=$sonucum['ilidi'];
    $ilcem=$sonucum['ilceidi'];
    $socadi=$sonucum['vocadi'];
    $yilim=$sonucum['vyiladi'];
    $ayim=$sonucum['vayadi'];
    $verim1=$sonucum['v1'];
    $verim2=$sonucum['v2'];
    $verim3=$sonucum['v3'];
    $verim4=$sonucum['v4'];
    $verim5=$sonucum['v5'];
    $verim6=$sonucum['v6'];
    $verim7=$sonucum['v7'];
    $verim8=$sonucum['v8'];
    $verim9=$sonucum['v9'];
    $verim10=$sonucum['v10'];
    $verim11=$sonucum['v11'];
    $verim12=$sonucum['v12'];
    $verim13=$sonucum['v13'];
    $verim14=$sonucum['v14'];
    $verim15=$sonucum['v15'];
    $verim16=$sonucum['v16'];
    $verim17=$sonucum['v17'];
    $verim18=$sonucum['v18'];
    $verim19=$sonucum['v19'];
    $verim20=$sonucum['v20'];
    $verim21=$sonucum['v21'];
    $verim22=$sonucum['v22'];
    $verim23=$sonucum['v23'];
    $verim24=$sonucum['v24'];
    $verim25=$sonucum['v25'];
    $verim26=$sonucum['v26'];
    $verim27=$sonucum['v27'];
    $verim28=$sonucum['v28'];
    $verim29=$sonucum['v29'];
    $verim30=$sonucum['v30'];
    $verim31=$sonucum['v31'];
    $verim32=$sonucum['v32'];
    $verim33=$sonucum['v33'];
    $verim34=$sonucum['v34'];
    $verim35=$sonucum['v35'];
    $verim36=$sonucum['v36'];
    $verim37=$sonucum['v37'];
    $verim38=$sonucum['v38'];
    $verim39=$sonucum['v39'];
    $verim40=$sonucum['v40'];
    $verim41=$sonucum['v41'];
    $verim42=$sonucum['v42'];
    $verim43=$sonucum['v43'];
    $verim44=$sonucum['v44'];
    $verim45=$sonucum['v45'];
    $verim46=$sonucum['v46'];
    $verim47=$sonucum['v47'];
    $verim48=$sonucum['v48'];
    $verim49=$sonucum['v49'];
    $verim50=$sonucum['v50'];
    $verim51=$sonucum['v51'];
    $verim52=$sonucum['v52'];
    $verim53=$sonucum['v53'];
    $verim54=$sonucum['v54'];
    $verim55=$sonucum['v55'];
    $verim56=$sonucum['v56'];
    $verim57=$sonucum['v57'];
    $verim58=$sonucum['v58'];
    $verim59=$sonucum['v59'];
    $verim60=$sonucum['v60'];
    $verim61=$sonucum['v61'];
    $verim62=$sonucum['v62'];
    $verim63=$sonucum['v63'];
    $verim64=$sonucum['v64'];
    $verim65=$sonucum['v65'];
    $verim66=$sonucum['v66'];
    $verim67=$sonucum['v67'];
    $verim68=$sonucum['v68'];
    $verim69=$sonucum['v69'];
    $verim70=$sonucum['v70'];
    $verim71=$sonucum['v71'];
    $verim72=$sonucum['v72'];
    $verim73=$sonucum['v73'];
    $verim74=$sonucum['v74'];
    $verim75=$sonucum['v75'];
    $verim76=$sonucum['v76'];
    $verim77=$sonucum['v77'];
    $verim78=$sonucum['v78'];
    $verim79=$sonucum['v79'];
    $verim80=$sonucum['v80'];
    $verim81=$sonucum['v81'];
    $verim82=$sonucum['v82'];
    $verim83=$sonucum['v83'];
    $verim84=$sonucum['v84'];
    $verim85=$sonucum['v85'];
    $verim86=$sonucum['v86'];
    $verim87=$sonucum['v87'];
    $verim88=$sonucum['v88'];
    $verim89=$sonucum['v89'];
    $verim90=$sonucum['v90'];
    $verim91=$sonucum['v91'];
    $verim92=$sonucum['v92'];
    $verim93=$sonucum['v93'];
    $verim94=$sonucum['v94'];
    $verim95=$sonucum['v95'];
    $verim96=$sonucum['v96'];
    $verim97=$sonucum['v97'];
    $verim98=$sonucum['v98'];
    $verim99=$sonucum['v99'];
    $verim100=$sonucum['v100'];
    $verim101=$sonucum['v101'];
    $verim102=$sonucum['v102'];
    $verim103=$sonucum['v103'];
    $verim104=$sonucum['v104'];
    $verim105=$sonucum['v105'];
    $verim106=$sonucum['v106'];
    $verim107=$sonucum['v107'];
    $verim108=$sonucum['v108'];
    $verim109=$sonucum['v109'];
    $verim110=$sonucum['v110'];
    $verim111=$sonucum['v111'];
    $verim112=$sonucum['v112'];
    $verim113=$sonucum['v113'];
    $verim114=$sonucum['v114'];
    $verim115=$sonucum['v115'];
    $verim116=$sonucum['v116'];
    $verim117=$sonucum['v117'];
    $verim118=$sonucum['v118'];
    $verim119=$sonucum['v119'];
    $verim120=$sonucum['v120'];
    $verim121=$sonucum['v121'];
    $verim122=$sonucum['v122'];
    $verim123=$sonucum['v123'];
    $verim124=$sonucum['v124'];
    $verim125=$sonucum['v125'];
    $verim126=$sonucum['v126'];
    $verim127=$sonucum['v127'];
    $verim128=$sonucum['v128'];
    $verim129=$sonucum['v129'];
    $verim130=$sonucum['v130'];
    $verim131=$sonucum['v131'];
    $verim132=$sonucum['v132'];
    $verim133=$sonucum['v133'];
    $verim134=$sonucum['v134'];
    $verim135=$sonucum['v135'];
    $verim136=$sonucum['v136'];
    $verim137=$sonucum['v137'];
    $verim138=$sonucum['v138'];
    $verim139=$sonucum['v139'];
    $verim140=$sonucum['v140'];
    $verim141=$sonucum['v141'];
    $verim142=$sonucum['v142'];
    $verim143=$sonucum['v143'];
    $verim144=$sonucum['v144'];
    $verim145=$sonucum['v145'];
    $verim146=$sonucum['v146'];
    $verim147=$sonucum['v147'];
    $verim148=$sonucum['v148'];
    $verim149=$sonucum['v149'];
    $verim150=$sonucum['v150'];
    $verim151=$sonucum['v151'];
    $verim152=$sonucum['v152'];
    $verim153=$sonucum['v153'];
    $verim154=$sonucum['v154'];
    $verim155=$sonucum['v155'];
    $verim156=$sonucum['v156'];
    $verim157=$sonucum['v157'];
    $verim158=$sonucum['v158'];
    $verim159=$sonucum['v159'];
    $verim160=$sonucum['v160'];
    $verim161=$sonucum['v161'];
    $verim162=$sonucum['v162'];
    $verim163=$sonucum['v163'];
    $verim164=$sonucum['v164'];
    $verim165=$sonucum['v165'];
    $verim166=$sonucum['v166'];
    $verim167=$sonucum['v167'];
    $verim168=$sonucum['v168'];
    $verim169=$sonucum['v169'];
    $verim170=$sonucum['v170'];
    $verim171=$sonucum['v171'];
    $verim172=$sonucum['v172'];
    $verim173=$sonucum['v173'];
    $verim174=$sonucum['v174'];
    $verim175=$sonucum['v175'];
    $verim176=$sonucum['v176'];
    $verim177=$sonucum['v177'];
    $verim178=$sonucum['v178'];
}
include('assets/013B_sablonlar/toplamsutunu.php');
?>
<?php
$iladi=@mysqli_query($dbh, "select * from il where(ilid='$ilim')");
while($ilsonucum=mysqli_fetch_array($iladi)){
    $ilinadi=$ilsonucum['ilad'];
}
?>
<?php
$ilceadi=@mysqli_query($dbh, "select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
while($ilcesonucum=mysqli_fetch_array($ilceadi)){
    $ilceninadi=$ilcesonucum['ilcead'];
}
$atarih=mysqli_query($dbh,"SELECT date_format(v175, '%d.%m.%Y')  AS yeni_tarih FROM verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($duztarih=mysqli_fetch_array($atarih)){
    $dtarih=$duztarih['yeni_tarih'];
}
$btarih=mysqli_query($dbh,"SELECT date_format(v178, '%d.%m.%Y')  AS yeni_tarih FROM verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($ontarih=mysqli_fetch_array($btarih)){
    $otarih=$ontarih['yeni_tarih'];
}
?>
<table class="table table-responsive-sm table-sm">
    <thead>
    <tr>
        <th class="bg-warning text-center" width="8%"align="left"><a class="btn btn-sm btn-success mb-3" style="width:100px" href=# onClick="kontrol();"title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a></th>
        <th class="bg-warning text-center" width="8%" align="center">
            <?php
            echo '<form class="form-control-sm" action="form023pdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
            echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
            echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
            echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
            echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
            echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
            ?>
            <button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" s style="width: 100px;margin-bottom: 12px;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                PDF</button></th>
        <?php
        echo '</form>';
        ?>
        <th class="bg-warning text-center" width="8%" align="right">
            <?php
            echo '<form class="form-control-sm" action="../excelmysqli/013Bayxls.php" method="get" name="gor">' ;
            echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
            echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
            echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
            echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
            echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
            ?>
            <button type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-light" style="width: 100px;margin-bottom: 12px;"><i class="fa fa-file-excel-o" aria-hidden="true"></i>
                Excel</button></th>
        <?php
        echo '</form>';
        ?>
        <th class="bg-primary text-center" width="50%" colspan="3"><h6 class="mb-4" style="color:#FFFF00;"><strong>Kayıt Görüntüleme Ekranı</strong></h6></th>
        <?php
        $kim=$_SESSION["uye"];
        $resultx = @mysqli_query($dbh, "select uyekod from uyeler where(uyekim='$kim') order by uyekod asc");
        while($xkod=mysqli_fetch_array($resultx)) {
            $kod=substr($xkod['uyekod'],0,5);
            $kodhsm=substr($xkod['uyekod'],0,2);
//echo $kod;
        }
        $resultkod = @mysqli_query($dbh, "select socad from ocak where(select left(socad,5)='$kod') order by socad asc");
        while($rowkod=mysqli_fetch_array($resultkod)) {
            $kodbu=substr($rowkod['socad'],0,5);
//echo $kodbu;
        }
        if($kod==substr($ocgelen,0,5) and $ahekgelen==$ocgelen or $kod==substr($ocgelen,0,5) and substr($ahekgelen,-3,3)==$kurumyetki or $kodhsm==substr($ocgelen,0,2) and substr($ahekgelen,-3,3)==$ilyetki or substr($ahekgelen,-3,3)==$bakanlikyetki){
            echo '<th class="bg-warning text-center" width="12%" align="right"><a class="btn btn-sm btn-success mb-3" href=# onClick="deg();" style="width: 100px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Değiştir</a></th>';
            echo '<th class="bg-warning text-center" width="13%" align="right"><a class="btn btn-sm btn-danger mb-3" href="#" data-toggle="modal" data-target=".bd-example-modal-sm" style="width: 100px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</a></th>';
        }else{
            echo '<th class="bg-warning text-center" width="12%" align="right"></th>';
            echo '<th class="bg-warning text-center" width="13%" align="right"></th>';
        }
        ?>
    </tr>
    </thead>
</table>
<!-- Modal -->
<div class="modal fade bd-example-modal-sm" id="silmenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title" id="exampleModalLabel">Kayıt Silme Onayı</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="text-secondary bg-warning text-center"><?php echo '<div><h6>'.$ilinadi.'-'.$ilceninadi.'-<font style="color:blue">'.$ocakyazi.'</FONT><br>'.$yilgelen.'-'.$ayyazi.'</h6></div>'; ?></h5>
                <h5 class="text-danger">Bu Kaydı Silmek İstediğinize Emin misiniz?</h5>
            </div>
            <div class="modal-footer bg-success justify-content-center">
                <button type="button" class="btn btn-primary btn-sm mr-5" data-dismiss="modal"><i class="fa fa-reply-all fa-lg"></i> Hayır</button>
                <a href="#" tabindex="2" title="evet" onClick="sil();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> Evet</a>
            </div>
            <div id="sonucsil" align="center"></div>
        </div>
    </div>
</div>
<table class="table table-responsive-sm table-sm form013ust" style="background-color:#CCFFFF">
    <thead>
<tbody>
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
        <td class="border-0"><div align="left"><strong><?php echo $ilinadi ;?></strong></div></td>
        <td class="border-0"><div align="right"></div></td>
        <td class="border-0"><span></td>
    </tr>
    <tr>
        <td class="border-0"><div align="left">İLÇE/İSM:</div></td>
        <td class="border-0"><div align="left"><strong><?php echo $ilceninadi ;?></strong></div></td>
        <td class="border-0"><div align="right">YIL:</div></td>
        <td class="border-0"><div align="left"><strong><?php echo $yilgelen ;?></strong></div></td>
    </tr>
    <tr>
        <td class="border-0"><div align="left">KURUM/AH:</div></td>
        <td class="border-0"><div align="left"><strong><?php echo $ocgelen ;?></div></td>
        <td class="border-0"><div align="right">AY:</div></td>
        <td class="border-0"><div align="left"><strong><?php echo $aygelen ;?></div></td>
    </tr>
   </tbody>
   </thead>
</table>
<form>
<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
    <table class="table table-responsive-sm table-sm form013ustaralarenust" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
        <tbody>
    <tr>
        <th width="11%" rowspan="2" class="border border-primary align-middle"><div align="center">AŞI</div></th>
        <th colspan="8" scope="col" class="border border-primary"><div align="center">YAŞ GRUPLARINA GÖRE YAPILAN AŞI DOZLARI</div></th>
    </tr>
    <tr>
        <td width="5%" class="border border-primary"><div align="center">Uygu-lama</div></td>
        <td width="11%" class="border border-primary"><div align="center">0 YAŞ<br>(0-11 ay)</div></td>
        <td width="11%" class="border border-primary"><div align="center">1 YAŞ<br>(12-23 ay)</div></td>
        <td width="11%" class="border border-primary"><div align="center">2-4 YAŞ<br>(24-59 ay)</div></td>
        <td width="11%" class="border border-primary align-middle"><div align="center">5-9 YAŞ</div></td>
        <td width="11%" class="border border-primary align-middle"><div align="center">10-14 YAŞ</div></td>
        <td width="11%" class="border border-primary align-middle"><div align="center">15 YAŞ ve üzeri</div></td>
        <td width="11%" class="border border-primary align-middle"><div align="center">TOPLAM</div></td>
    </tr>
    <tr>
        <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center"><strong>DaBT-İPA-Hib AŞISI</strong></div></th>
        <td width="5%" class="border border-primary"><div align="center">I</div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim1 ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim2  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim3  ; ?></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"><?php $verim4  ; ?></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamdbt1  ; ?></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000" class="border border-primary"><div align="center" class="style8">II</div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim5  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim6  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim7  ; ?></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"><?php $verim8  ; ?></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamdbt2  ; ?></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000" class="border border-primary"><div align="center" class="style8">III</div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim9  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim10  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim11  ; ?></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"><?php $verim12  ; ?></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamdbt3  ; ?></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000" class="border border-primary"><div align="center" class="style8">R</div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim13  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim14  ; ?></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"><?php $verim15  ; ?></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamdbtR  ; ?></div></td>
    </tr>
    <tr>
        <th colspan="2" bordercolor="#000000" class="border border-primary" scope="row"><div align="center"><strong>TOPLAM</strong></div></th>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamdbt  ; ?></div></td>
    </tr>
    </tbody>
</table>
<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="4" class="border border-primary align-middle" scope="row"><div align="center"><strong>KONJUGE PNOMOKOK AŞISI</strong></div></th>
        <td width="5%" class="border border-primary"><div align="center">I</div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim16  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim17  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim18  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim19  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim20  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim21  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamkpa1  ; ?></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000" class="border border-primary"><div align="center" class="style8">II</div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim22  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim23  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim24  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim25  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim26  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim27  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamkpa2  ; ?></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000" class="border border-primary"><div align="center" class="style8">III</div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim28  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim29  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim30  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim31  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim32  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim33  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamkpa3  ; ?></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000" class="border border-primary"><div align="center" class="style8">R</div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim34  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim35  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim36  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim37  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim38  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamkpar  ; ?></div></td>
    </tr>
    <tr>
        <th colspan="2" bordercolor="#000000" class="border border-primary" scope="row"><div align="center">TOPLAM </div></th>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamkpa  ; ?></div></td>
    </tr>
    </tbody>
</table>
<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="2" class="border border-primary align-middle" scope="row"><div align="center"><strong>K.K.K AŞISI</strong></div></th>
        <td width="5%" bordercolor="#000000"  class="border border-primary"><div align="center" class="style8">I</div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim39  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim40  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim41  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim42  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim43  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamkkk1  ; ?></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000" class="border border-primary"><div align="center" class="style8">R</div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim44  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim45  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim46  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim47  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim48  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamkkkr  ; ?></div></td>
    </tr>
    <tr>
        <th colspan="2" bordercolor="#000000" class="border border-primary" scope="row"><div align="center">TOPLAM </div></th>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamkkk  ; ?></div></td>
    </tr>
    </tbody>
</table>
<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="3" class="border border-primary align-middle" scope="row"><div align="center"><strong>HEPATİT-B AŞISI </strong></div></th>
        <td width="5%" bordercolor="#000000"  class="border border-primary"><div align="center" class="style8">I</div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim49  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim50  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim51  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim52  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim53  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim54  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamhep1  ; ?></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000" class="border border-primary"><div align="center" class="style8">II</div></td>
        <td width="11%"  bordercolor="#000000" class="border border-primary"><div align="center"><?php echo $verim55  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim56  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim57  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim58  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim59  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim60  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamhep2  ; ?></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000" class="border border-primary"><div align="center" class="style8">III</div></td>
        <td cwidth="11%" bordercolor="#000000" class="border border-primary"><div align="center"><?php echo $verim61  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim62  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim63  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim64  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim65  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim66  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamhep3  ; ?></div></td>
    </tr>
    <tr>
        <th width="16%" colspan="2" bordercolor="#000000" class="border border-primary" scope="row"><div align="center">TOPLAM </div></th>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamhep  ; ?></div></td>
    </tr>
    </tbody>
</table>
<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <tbody>
    <tr>
        <th width="11%" rowspan="2" class="border border-primary align-middle" scope="row"><div align="center"><strong>HEPATİT-A AŞISI </strong></div></th>
        <td width="5%" bordercolor="#000000"  class="border border-primary"><div align="center" class="style8">I</div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim67  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim68  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim69  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim70  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim71  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $hepa1top  ; ?></div></td>
    </tr>
    <tr>
        <td width="5%" bordercolor="#000000" class="border border-primary"><div align="center" class="style8">R</div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim72  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim73  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim74  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim75  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim76  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $heparaptop  ; ?></div></td>
    </tr>
    <tr>
        <th colspan="2" bordercolor="#000000" class="border border-primary" scope="row"><div align="center">TOPLAM </div></th>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $toplamhepa  ; ?></div></td>
    </tr>
    </tbody>
</table>
<table class="table table-responsive-sm table-sm form013ustaralar" style="border:double;border-color:#0066FF;background-color:#CCFFFF">
    <thead>
    <tr>
        <th width="11%" class="border border-primary align-middle" scope="row"><div align="center"><strong>SU ÇİÇEĞİ AŞISI</strong></div></th>
        <td width="5%" bordercolor="#000000" class="border border-primary"><div align="center" class="style8"></div></td>
        <td width="11%" bordercolor="#000000" bgcolor="#999999"  class="border border-primary gri"><div align="center"></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim77  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim78  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim79  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim80  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $verim81  ; ?></div></td>
        <td width="11%" class="border border-primary"><div align="center"><?php echo $suctop  ; ?></div></td>
    </tr>
    </thead>
</table>
    <table class="table table-responsive-sm table-sm form013ustaralar" style="background-color:#CCFFFF">
       <thead>
       <tr>
            <th  class="border border-primary" align="left" colspan="2">&nbsp;Adı Soyadı</th>
            <th  class="border border-primary"align="left"  colspan="7"><div align="center"><?php echo $verim173 ; ?></div></th>
            <th width="27%" rowspan="4" class="border border-0 align-middle text-center">
                <a class="btn btn-sm btn-warning" style="width:100px" href=# onClick="kontrol();"title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a>
                <?php
                echo '<form class="form-control-sm" action="form023pdf.php" method="get" name="gor" target="hoppa" onSubmit="hoppa()">';
                echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
                echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
                echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
                echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
                echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
                ?>
                <button type="SUBMIT" class="btn btn-sm btn-primary form-control form-control-sm" style="width: 100px"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                    PDF</button>
                <?php
                echo '</form>';
                ?>
                <?php
                echo '<form class="form-control-sm" action="../excelmysqli/013Bayxls.php" method="get" name="gor">' ;
                echo '<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilgelen.'" />';
                echo '<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ilcegelen.'" />';
                echo '<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$ocgelen.'" />';
                echo '<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$yilgelen.'" />';
                echo '<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="'.$aygelen.'" />';
                ?>
                <button type="SUBMIT" class="form-control form-control-sm btn btn-sm btn-outline-success" style="width: 100px"><i class="fa fa-file-excel-o" aria-hidden="true"></i>
                    Excel</button>
                <?php
                echo '</form>';
                if($kod==substr($ocgelen,0,5) and $ahekgelen==$ocgelen or $kod==substr($ocgelen,0,5) and substr($ahekgelen,-3,3)==$kurumyetki or $kodhsm==substr($ocgelen,0,2) and substr($ahekgelen,-3,3)==$ilyetki or substr($ahekgelen,-3,3)==$bakanlikyetki){
                    ?>
                    <a class="btn btn-sm btn-success" href=# onClick="deg();" style="width: 100px"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Değiştir</a>
                    <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target=".bd-example-modal-sm" style="width: 100px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</a>
                <?php } ?>
            </th>
            <th  class="border border-primary" align="left" colspan="2">&nbsp;Adı Soyadı</th>
            <th  class="border border-primary" width="27%"align="left"  colspan="7"><div align="center"><?php echo $verim176 ; ?></div></th>
        </tr>
        <tr>
            <th  class="border border-primary" align="left" colspan="2">&nbsp;Ünvanı</th>
            <th  class="border border-primary"align="left"  colspan="7"><div align="center"><?php echo $verim174 ; ?></div></th>
            <th  class="border border-primary" align="left" colspan="2">&nbsp;Ünvanı</th>
            <th  class="border border-primary" width="27%"align="left"  colspan="7"><div align="center"><?php echo $verim177 ; ?></div></th>
        </tr>
        <tr>
            <?php
            $a=Date("d/m/Y");
            ?>
            <th  class="border border-primary" align="left" colspan="2">&nbsp;Tarih</th>
            <th  class="border border-primary"align="left"  colspan="7"><div align="center"><?php echo $a; ?></div></th>
            <th  class="border border-primary" align="left" colspan="2">&nbsp;Tarih</th>
            <th  class="border border-primary" width="27%"align="left"  colspan="7"><div align="center"><?php echo $a;?></div></th>
        </tr>
        <tr>
            <th  class="border border-primary" align="left" colspan="2">&nbsp;İmza</th>
            <th  class="border border-primary"align="center"  colspan="7">&nbsp;</th>
            <th  class="border border-primary" align="left" colspan="2">&nbsp;İmza</th>
            <th  class="border border-primary" width="27%"align="center"  colspan="7">&nbsp;</th>
        </tr>
        </thead>
    </table>
</form>
<?php
}
?>
<!-- Optional JavaScript -->
