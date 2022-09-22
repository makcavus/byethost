<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["uye"])){
    echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
}
?>
<link rel="stylesheet" href="assets/css/013Bstyle.css">
<script type="text/javascript" src="degistir.js"></script>
<script type="text/javascript" src="jquery-latest.min.js"></script>
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script>
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script>
<div id="sonuckay"><form name="girdiekleme" action="javascript:void(0)" method="get" onKeyUp="highlight(event)" onClick="highlight(event)">
<?php
include('../con_023.php');
include('frm013alanlari.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$resultvyil = @mysqli_query($dbh,"select * from verib where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while($sonucum=mysqli_fetch_array($resultvyil)){
include('assets/013B_sablonlar/013B_veri_seti.php');
}
include('assets/013B_sablonlar/toplamsutunu.php');
        $iladi=@mysqli_query($dbh,"select * from il where(ilid='$ilim')");
        while($ilsonucum=mysqli_fetch_array($iladi)){
            $ilinadi=$ilsonucum['ilad'];
        }
        $ilceadi=@mysqli_query($dbh,"select * from ilce where(ilinad='$ilim' and ilceid='$ilcem')");
        while($ilcesonucum=mysqli_fetch_array($ilceadi)){
            $ilceninadi=$ilcesonucum['ilcead'];
        }
        ?>
        <table class="table table-responsive-sm table-sm">
            <thead>
            <tr>
                <th class="bg-warning text-center" width="30%" colspan="3">
                    <a class="btn btn-sm btn-success" style="width:100px" href=# onClick="kontrol();"title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a>
                </th>
                <th class="bg-primary text-center" width="40%" colspan="3"><h6 style="color:#FFFF00;">Kayıt Değiştirme Ekranı</h6></th>
                <th class="bg-warning text-center" width="30%" colspan="3"><a class="btn btn-sm btn-primary" style="width:100px" href=# onClick="girdiyidegistir();"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Değiştir</a>
                </th>
            </tr>
            </thead>
        </table>
<input type="hidden" name="selectil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilgelen ;?>" />
<input type="hidden" name="selectilce" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ilcegelen ;?>" />
<input type="hidden" name="selectoc" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $ocgelen ;?>" />
<input type="hidden" name="selectyil" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $yilgelen ;?>" />
<input type="hidden" name="selectay" width="0" height="0" vspace="0" hspace="0" border="0" size="0" value="<?php echo $aygelen ;?>" />
        <?php
        include('assets/013B_sablonlar/013Bdegistir_sablonu.php');
        include('assets/013B_sablonlar/gizli_input_degistir.php');
        $sql="SELECT * FROM ocak where(ilinad='$ilgelen' and ilce='$ilcegelen' and socad='$ocgelen')order by dradi asc";
        $sonucak=mysqli_query($dbh,$sql);
        while($satir=mysqli_fetch_array($sonucak))
        {
//@mysql_close($conn);
           $ahkod=$satir['socad'];
            if(substr($ocgelen,-3)=='TSM'){
                $ahno='Sorumlu Tabibi';
            }elseif(substr($ocgelen,-3)=='HSM'){
                $ahno='Birim Sorumlusu';
            }else{
                $ahno='Nolu Aile Hekimi';
            }
            $drad=$satir['dradi'];
            $asead=$satir['aseadi'];
            $aseunv=$satir['aseunvan'];
        }
        ?>
            <table class="table table-responsive-sm table-sm form013ustaralar" style="background-color:#CCFFFF">
            <thead>
            <tr>
                <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Adı Soyadı</th>
                <th class="border border-primary"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
                        <input class="form-control form-control-sm text-center border-0" name="v173"  type="text" value="<?php echo $asead ; ?>" size="40" tabindex="173"/>
                    </div></th>
                <th width="27%" rowspan="4" align="left" class="border border-0 align-middle text-center"><a class="btn btn-sm btn-success" style="width:100px" href=# onclick="kontrol();" title="İptal"><i class="fa fa-reply-all" aria-hidden="true"></i> İptal</a><br>
                    <a class="btn btn-sm btn-info mt-3" style="width:100px" href="#" tabindex="179" title="Değiştir" onclick="girdiyidegistir();"><i class="fa fa-floppy-o" aria-hidden="true"></i> Değiştir</a></th>
                <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Adı Soyadı</th>
                <th class="border border-primary" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
                        <input class="form-control form-control-sm text-center border-0" name="v176"  type="text" value="<?php echo $drad ; ?>" size="40" tabindex="176"/>
                    </div></th>
            </tr>
            <tr>
                <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Ünvanı</th>
                <th class="border border-primary"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
                        <input class="form-control form-control-sm text-center border-0" name="v174"  type="text" value="<?php echo $aseunv ; ?>" size="40" tabindex="174"/>
                    </div></th>
                <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Ünvanı</th>
                <th class="border border-primary" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
                        <input class="form-control form-control-sm text-center border-0" name="v177"  type="text" value="<?php echo $ahkod.' '.$ahno ;?>" size="40" tabindex="177"/></div></th>
            </tr>
            <tr>
                <?php
                $a=Date("d/m/Y");
                ?>
                <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
                <th class="border border-primary"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
                        <input id="masktest" class="form-control form-control-sm text-center border-0" name="v175"  type="text" value=<?php echo $a; ?> size="40" tabindex="175"/>
                    </div></th>
                <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;Tarih</th>
                <th class="border border-primary" width="27%"align="left" bordercolor="#000000" bgcolor="white" colspan="7"><div align="center">
                        <input id="masktest1" class="form-control form-control-sm text-center border-0" name="v178"  type="text" value="<?php echo $a;?>" size="40" tabindex="178"/>
                    </div></th>
            </tr>
            <tr>
                <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;İmza</th>
                <th class="border border-primary"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
                <th class="border border-primary" align="left"bordercolor="#000000" bgcolor="white" colspan="2">&nbsp;İmza</th>
                <th class="border border-primary" width="27%"align="center" bordercolor="#000000" bgcolor="white" colspan="7">&nbsp;</th>
            </tr>
            </thead>
        </table>
    </form>
