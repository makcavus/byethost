<?php
//GEBE KISMI********************************************************************************************************************** 
//ÝÇÝNDE BULUNULAN AY TOPLAMLARI
$buayga = @mysql_query("select sum(v119+v120) as buaygasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayga)) {
if($kayitlar['buaygasonuc']==""){
$Toplambuayarti=0 ;
}else{
$Toplambuayarti=$kayitlar['buaygasonuc'];
}
}
//echo $Toplambuayarti;
$buayge = @mysql_query("select sum(v121+v122+v123+v124) as buaygesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayge)) {
if($kayitlar['buaygesonuc']==""){
$Toplambuayeksi=0 ;
}else{
$Toplambuayeksi=$kayitlar['buaygesonuc'];
}
}
//echo $Toplambuayeksi;
//DEVÝR HESAPLAMALARI*************************************************************************************************************
$gebearti = @mysql_query("select sum(v119+v120) as gsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($gebearti)) {
if($kayitlar['gsonucarti']==""){
$Toplamgarti=0 ;
}else{
$Toplamgarti=$kayitlar['gsonucarti'];
}
}
//echo $Toplamgarti;
$gebeeksi = @mysql_query("select sum(v121+v122+v123+v124) as gsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($gebeeksi)) {
if($kayitlar['gsonuceksi']==""){
$Toplamgeksi=0 ;
}else{
$Toplamgeksi=$kayitlar['gsonuceksi'];
}
}
//echo $Toplamgeksi;
$devir=$Toplamgarti-$Toplamgeksi;
//echo "GEÇEN YIL DEVÝR:".$devir;
// AY DENEMESÝ
//GEBE GEÇEN******************************************************************************************************************
//OCAK
$ocakGA = @mysql_query("select sum(v119+v120) as ocaktopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakGA)) {
if($kayitlar['ocaktopGA']==""){
$ocaktotalGA=0 ;
}else{
$ocaktotalGA=$kayitlar['ocaktopGA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGA.".......";
//ÞUBAT
$subatGA = @mysql_query("select sum(v119+v120) as subattopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ÞUBAT')") ;
while ($kayitlar = mysql_fetch_array($subatGA)) {
if($kayitlar['subattopGA']==""){
$subattotalGA=0 ;
}else{
$subattotalGA=$kayitlar['subattopGA'];
}
}
//echo $Toplamgeksi;
//echo "Þubat: ".$subattotalGA.".......";
//MART
$martGA = @mysql_query("select sum(v119+v120) as marttopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martGA)) {
if($kayitlar['marttopGA']==""){
$marttotalGA=0 ;
}else{
$marttotalGA=$kayitlar['marttopGA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalGA.".......";
//NÝSAN
$nisanGA = @mysql_query("select sum(v119+v120) as nisantopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='NÝSAN')") ;
while ($kayitlar = mysql_fetch_array($nisanGA)) {
if($kayitlar['nisantopGA']==""){
$nisantotalGA=0 ;
}else{
$nisantotalGA=$kayitlar['nisantopGA'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalGA.".......";
//MAYIS
$mayisGA = @mysql_query("select sum(v119+v120) as mayistopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisGA)) {
if($kayitlar['mayistopGA']==""){
$mayistotalGA=0 ;
}else{
$mayistotalGA=$kayitlar['mayistopGA'];
}
}
//echo $Toplamgeksi;
//echo "Mayýs: ".$mayistotalGA.".......";
//HAZÝRAN
$haziranGA = @mysql_query("select sum(v119+v120) as hazirantopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZÝRAN')") ;
while ($kayitlar = mysql_fetch_array($haziranGA)) {
if($kayitlar['hazirantopGA']==""){
$hazirantotalGA=0 ;
}else{
$hazirantotalGA=$kayitlar['hazirantopGA'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalGA.".......";
//TEMMUZ
$temmuzGA = @mysql_query("select sum(v119+v120) as temmuztopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzGA)) {
if($kayitlar['temmuztopGA']==""){
$temmuztotalGA=0 ;
}else{
$temmuztotalGA=$kayitlar['temmuztopGA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalGA.".......";
//AÐUSTOS
$agustosGA = @mysql_query("select sum(v119+v120) as agustostopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='AÐUSTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosGA)) {
if($kayitlar['agustostopGA']==""){
$agustostotalGA=0 ;
}else{
$agustostotalGA=$kayitlar['agustostopGA'];
}
}
//echo $Toplamgeksi;
//echo "Aðustos: ".$agustostotalGA.".......";
//EYLÜL
$eylulGA = @mysql_query("select sum(v119+v120) as eylultopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYLÜL')") ;
while ($kayitlar = mysql_fetch_array($eylulGA)) {
if($kayitlar['eylultopGA']==""){
$eylultotalGA=0 ;
}else{
$eylultotalGA=$kayitlar['eylultopGA'];
}
}
//echo $Toplamgeksi;
//echo "Eylül: ".$eylultotalGA.".......";
//EKÝM
$ekimGA = @mysql_query("select sum(v119+v120) as ekimtopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EKÝM')") ;
while ($kayitlar = mysql_fetch_array($ekimGA)) {
if($kayitlar['ekimtopGA']==""){
$ekimtotalGA=0 ;
}else{
$ekimtotalGA=$kayitlar['ekimtopGA'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalGA.".......";
//KASIM
$kasimGA = @mysql_query("select sum(v119+v120) as kasimtopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimGA)) {
if($kayitlar['kasimtopGA']==""){
$kasimtotalGA=0 ;
}else{
$kasimtotalGA=$kayitlar['kasimtopGA'];
}
}
//echo $Toplamgeksi;
//echo "Kasým: ".$kasimtotalGA.".......";
//ARALIK
$aralikGA = @mysql_query("select sum(v119+v120) as araliktopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikGA)) {
if($kayitlar['araliktopGA']==""){
$araliktotalGA=0 ;
}else{
$araliktotalGA=$kayitlar['araliktopGA'];
}
}
//echo $Toplamgeksi;
//echo "Aralýk: ".$araliktotalGA.".......";
if($aygelen=="OCAK"){
$aytoplamGA=0 ;
}
if($aygelen=="ÞUBAT"){
$aytoplamGA=$ocaktotalGA ;
}
if($aygelen=="MART"){
$aytoplamGA=$ocaktotalGA+$subattotalGA ;
}
if($aygelen=="NÝSAN"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA ;
}
if($aygelen=="MAYIS"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA ;
}
if($aygelen=="HAZÝRAN"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA ;
}
if($aygelen=="AÐUSTOS"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA ;
}
if($aygelen=="EYLÜL"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA ;
}
if($aygelen=="EKÝM"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA ;
}
if($aygelen=="KASIM"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA+$ekimtotalGA ;
}
if($aygelen=="ARALIK"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA+$ekimtotalGA+$kasimtotalGA ;
}
//echo "Ay toplam: ".$aytoplamGA ;

// GEBE ÇIKAN*****************************************************************************************************************
//OCAK
$ocakGE = @mysql_query("select sum(v121+v122+v123+v124) as ocaktopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakGE)) {
if($kayitlar['ocaktopGE']==""){
$ocaktotalGE=0 ;
}else{
$ocaktotalGE=$kayitlar['ocaktopGE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGE.".......";
//ÞUBAT
$subatGE = @mysql_query("select sum(v121+v122+v123+v124) as subattopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ÞUBAT')") ;
while ($kayitlar = mysql_fetch_array($subatGE)) {
if($kayitlar['subattopGE']==""){
$subattotalGE=0 ;
}else{
$subattotalGE=$kayitlar['subattopGE'];
}
}
//echo $Toplamgeksi;
//echo "Þubat: ".$subattotalGE.".......";
//MART
$martGE = @mysql_query("select sum(v121+v122+v123+v124) as marttopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martGE)) {
if($kayitlar['marttopGE']==""){
$marttotalGE=0 ;
}else{
$marttotalGE=$kayitlar['marttopGE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalGE.".......";
//NÝSAN
$nisanGE = @mysql_query("select sum(v121+v122+v123+v124) as nisantopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='NÝSAN')") ;
while ($kayitlar = mysql_fetch_array($nisanGE)) {
if($kayitlar['nisantopGE']==""){
$nisantotalGE=0 ;
}else{
$nisantotalGE=$kayitlar['nisantopGE'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalGE.".......";
//MAYIS
$mayisGE = @mysql_query("select sum(v121+v122+v123+v124) as mayistopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisGE)) {
if($kayitlar['mayistopGE']==""){
$mayistotalGE=0 ;
}else{
$mayistotalGE=$kayitlar['mayistopGE'];
}
}
//echo $Toplamgeksi;
//echo "Mayýs: ".$mayistotalGE.".......";
//HAZÝRAN
$haziranGE = @mysql_query("select sum(v121+v122+v123+v124) as hazirantopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZÝRAN')") ;
while ($kayitlar = mysql_fetch_array($haziranGE)) {
if($kayitlar['hazirantopGE']==""){
$hazirantotalGE=0 ;
}else{
$hazirantotalGE=$kayitlar['hazirantopGE'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalGE.".......";
//TEMMUZ
$temmuzGE = @mysql_query("select sum(v121+v122+v123+v124) as temmuztopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzGE)) {
if($kayitlar['temmuztopGE']==""){
$temmuztotalGE=0 ;
}else{
$temmuztotalGE=$kayitlar['temmuztopGE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalGE.".......";
//AÐUSTOS
$agustosGE = @mysql_query("select sum(v121+v122+v123+v124) as agustostopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='AÐUSTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosGE)) {
if($kayitlar['agustostopGE']==""){
$agustostotalGE=0 ;
}else{
$agustostotalGE=$kayitlar['agustostopGE'];
}
}
//echo $Toplamgeksi;
//echo "Aðustos: ".$agustostotalGE.".......";
//EYLÜL
$eylulGE = @mysql_query("select sum(v121+v122+v123+v124) as eylultopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYLÜL')") ;
while ($kayitlar = mysql_fetch_array($eylulGE)) {
if($kayitlar['eylultopGE']==""){
$eylultotalGE=0 ;
}else{
$eylultotalGE=$kayitlar['eylultopGE'];
}
}
//echo $Toplamgeksi;
//echo "Eylül: ".$eylultotalGE.".......";
//EKÝM
$ekimGE = @mysql_query("select sum(v121+v122+v123+v124) as ekimtopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EKÝM')") ;
while ($kayitlar = mysql_fetch_array($ekimGE)) {
if($kayitlar['ekimtopGE']==""){
$ekimtotalGE=0 ;
}else{
$ekimtotalGE=$kayitlar['ekimtopGE'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalGE.".......";
//KASIM
$kasimGE = @mysql_query("select sum(v121+v122+v123+v124) as kasimtopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimGE)) {
if($kayitlar['kasimtopGE']==""){
$kasimtotalGE=0 ;
}else{
$kasimtotalGE=$kayitlar['kasimtopGE'];
}
}
//echo $Toplamgeksi;
//echo "Kasým: ".$kasimtotalGE.".......";
//ARALIK
$aralikGE = @mysql_query("select sum(v121+v122+v123+v124) as araliktopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikGE)) {
if($kayitlar['araliktopGE']==""){
$araliktotalGE=0 ;
}else{
$araliktotalGE=$kayitlar['araliktopGE'];
}
}
//echo $Toplamgeksi;
//echo "Aralýk: ".$araliktotalGE.".......";
if($aygelen=="OCAK"){
$aytoplamGE=0 ;
}
if($aygelen=="ÞUBAT"){
$aytoplamGE=$ocaktotalGE ;
}
if($aygelen=="MART"){
$aytoplamGE=$ocaktotalGE+$subattotalGE ;
}
if($aygelen=="NÝSAN"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE ;
}
if($aygelen=="MAYIS"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE ;
}
if($aygelen=="HAZÝRAN"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE ;
}
if($aygelen=="AÐUSTOS"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE ;
}
if($aygelen=="EYLÜL"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE+$agustostotalGE ;
}
if($aygelen=="EKÝM"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE+$agustostotalGE+$eylultotalGE ;
}
if($aygelen=="KASIM"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE+$agustostotalGE+$eylultotalGE+$ekimtotalGE ;
}
if($aygelen=="ARALIK"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE+$agustostotalGE+$eylultotalGE+$ekimtotalGE+$kasimtotalGE ;
}
//echo "Ay toplam: ".$aytoplamGE ;
$gtoplam=$aytoplamGA-$aytoplamGE ;
//echo "GENEL TOPLAM: ".$gtoplam ;
$devredengebe=$devir+$aytoplamGA-$aytoplamGE ;
//echo "Geçen aydan devreden gebe: ".$devredengebe ;
$aysonugebemevcudu=$devredengebe+$Toplambuayarti-$Toplambuayeksi;
//echo "Ay Sonu gebe mevcudu: ".$aysonugebemevcudu ;
//BEBEK KISMI******************************************************************************************************************************************************
//ÝÇÝNDE BULUNULAN AY TOPLAMLARI
$buayba = @mysql_query("select sum(v128+v129+v130) as buaybasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayba)) {
if($kayitlar['buaybasonuc']==""){
$Toplambuaybebekarti=0 ;
}else{
$Toplambuaybebekarti=$kayitlar['buaybasonuc'];
}
}
//echo $Toplambuaybebekarti;
$buaybe = @mysql_query("select sum(v131+v132+v133) as buaybesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buaybe)) {
if($kayitlar['buaybesonuc']==""){
$Toplambuaybebekeksi=0 ;
}else{
$Toplambuaybebekeksi=$kayitlar['buaybesonuc'];
}
}
//echo $Toplambuaybebekeksi;
//DEVÝR HESAPLAMALARI*************************************************************************************************************
$bebekarti = @mysql_query("select sum(v128+v129+v130) as bsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekarti)) {
if($kayitlar['bsonucarti']==""){
$Toplambarti=0 ;
}else{
$Toplambarti=$kayitlar['bsonucarti'];
}
}
//echo $Toplambarti;
$bebekeksi = @mysql_query("select sum(v131+v132+v133) as bsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekeksi)) {
if($kayitlar['bsonuceksi']==""){
$Toplambeksi=0 ;
}else{
$Toplambeksi=$kayitlar['bsonuceksi'];
}
}
//echo $Toplambeksi;
$devirbebek=$Toplambarti-$Toplambeksi;
//echo "GEÇEN YIL DEVÝR:".$devirbebek;
// AY DENEMESÝ
//GEBE GEÇEN******************************************************************************************************************
//OCAK
$ocakBA = @mysql_query("select sum(v128+v129+v130) as ocaktopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakBA)) {
if($kayitlar['ocaktopBA']==""){
$ocaktotalBA=0 ;
}else{
$ocaktotalBA=$kayitlar['ocaktopBA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalBA.".......";
//ÞUBAT
$subatBA = @mysql_query("select sum(v128+v129+v130) as subattopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ÞUBAT')") ;
while ($kayitlar = mysql_fetch_array($subatBA)) {
if($kayitlar['subattopBA']==""){
$subattotalBA=0 ;
}else{
$subattotalBA=$kayitlar['subattopBA'];
}
}
//echo $Toplamgeksi;
//echo "Þubat: ".$subattotalBA.".......";
//MART
$martBA = @mysql_query("select sum(v128+v129+v130) as marttopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martBA)) {
if($kayitlar['marttopBA']==""){
$marttotalBA=0 ;
}else{
$marttotalBA=$kayitlar['marttopBA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalBA.".......";
//NÝSAN
$nisanBA = @mysql_query("select sum(v128+v129+v130) as nisantopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='NÝSAN')") ;
while ($kayitlar = mysql_fetch_array($nisanBA)) {
if($kayitlar['nisantopBA']==""){
$nisantotalBA=0 ;
}else{
$nisantotalBA=$kayitlar['nisantopBA'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalBA.".......";
//MAYIS
$mayisBA = @mysql_query("select sum(v128+v129+v130) as mayistopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisBA)) {
if($kayitlar['mayistopBA']==""){
$mayistotalBA=0 ;
}else{
$mayistotalBA=$kayitlar['mayistopBA'];
}
}
//echo $Toplamgeksi;
//echo "Mayýs: ".$mayistotalBA.".......";
//HAZÝRAN
$haziranBA = @mysql_query("select sum(v128+v129+v130) as hazirantopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZÝRAN')") ;
while ($kayitlar = mysql_fetch_array($haziranBA)) {
if($kayitlar['hazirantopBA']==""){
$hazirantotalBA=0 ;
}else{
$hazirantotalBA=$kayitlar['hazirantopBA'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalBA.".......";
//TEMMUZ
$temmuzBA = @mysql_query("select sum(v128+v129+v130) as temmuztopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzBA)) {
if($kayitlar['temmuztopBA']==""){
$temmuztotalBA=0 ;
}else{
$temmuztotalBA=$kayitlar['temmuztopBA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalBA.".......";
//AÐUSTOS
$agustosBA = @mysql_query("select sum(v128+v129+v130) as agustostopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='AÐUSTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosBA)) {
if($kayitlar['agustostopBA']==""){
$agustostotalBA=0 ;
}else{
$agustostotalBA=$kayitlar['agustostopBA'];
}
}
//echo $Toplamgeksi;
//echo "Aðustos: ".$agustostotalBA.".......";
//EYLÜL
$eylulBA = @mysql_query("select sum(v128+v129+v130) as eylultopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYLÜL')") ;
while ($kayitlar = mysql_fetch_array($eylulBA)) {
if($kayitlar['eylultopBA']==""){
$eylultotalBA=0 ;
}else{
$eylultotalBA=$kayitlar['eylultopBA'];
}
}
//echo $Toplamgeksi;
//echo "Eylül: ".$eylultotalBA.".......";
//EKÝM
$ekimBA = @mysql_query("select sum(v128+v129+v130) as ekimtopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EKÝM')") ;
while ($kayitlar = mysql_fetch_array($ekimBA)) {
if($kayitlar['ekimtopBA']==""){
$ekimtotalBA=0 ;
}else{
$ekimtotalBA=$kayitlar['ekimtopBA'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalBA.".......";
//KASIM
$kasimBA = @mysql_query("select sum(v128+v129+v130) as kasimtopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimBA)) {
if($kayitlar['kasimtopBA']==""){
$kasimtotalBA=0 ;
}else{
$kasimtotalBA=$kayitlar['kasimtopBA'];
}
}
//echo $Toplamgeksi;
//echo "Kasým: ".$kasimtotalBA.".......";
//ARALIK
$aralikBA = @mysql_query("select sum(v128+v129+v130) as araliktopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikBA)) {
if($kayitlar['araliktopBA']==""){
$araliktotalBA=0 ;
}else{
$araliktotalBA=$kayitlar['araliktopBA'];
}
}
//echo $Toplamgeksi;
//echo "Aralýk: ".$araliktotalBA.".......";
if($aygelen=="OCAK"){
$aytoplamBA=0 ;
}
if($aygelen=="ÞUBAT"){
$aytoplamBA=$ocaktotalBA ;
}
if($aygelen=="MART"){
$aytoplamBA=$ocaktotalBA+$subattotalBA ;
}
if($aygelen=="NÝSAN"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA ;
}
if($aygelen=="MAYIS"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA ;
}
if($aygelen=="HAZÝRAN"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA ;
}
if($aygelen=="AÐUSTOS"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA ;
}
if($aygelen=="EYLÜL"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA ;
}
if($aygelen=="EKÝM"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA ;
}
if($aygelen=="KASIM"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA+$ekimtotalBA ;
}
if($aygelen=="ARALIK"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA+$ekimtotalBA+$kasimtotalBA ;
}
//echo "Ay toplam: ".$aytoplamBA ;

// GEBE ÇIKAN*****************************************************************************************************************
//OCAK
$ocakBE = @mysql_query("select sum(v131+v132+v133) as ocaktopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakBE)) {
if($kayitlar['ocaktopBE']==""){
$ocaktotalBE=0 ;
}else{
$ocaktotalBE=$kayitlar['ocaktopBE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalBE.".......";
//ÞUBAT
$subatBE = @mysql_query("select sum(v131+v132+v133) as subattopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ÞUBAT')") ;
while ($kayitlar = mysql_fetch_array($subatBE)) {
if($kayitlar['subattopBE']==""){
$subattotalBE=0 ;
}else{
$subattotalBE=$kayitlar['subattopBE'];
}
}
//echo $Toplamgeksi;
//echo "Þubat: ".$subattotalBE.".......";
//MART
$martBE = @mysql_query("select sum(v131+v132+v133) as marttopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martBE)) {
if($kayitlar['marttopBE']==""){
$marttotalBE=0 ;
}else{
$marttotalBE=$kayitlar['marttopBE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalBE.".......";
//NÝSAN
$nisanBE = @mysql_query("select sum(v131+v132+v133) as nisantopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='NÝSAN')") ;
while ($kayitlar = mysql_fetch_array($nisanBE)) {
if($kayitlar['nisantopBE']==""){
$nisantotalBE=0 ;
}else{
$nisantotalBE=$kayitlar['nisantopBE'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalBE.".......";
//MAYIS
$mayisBE = @mysql_query("select sum(v131+v132+v133) as mayistopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisBE)) {
if($kayitlar['mayistopBE']==""){
$mayistotalBE=0 ;
}else{
$mayistotalBE=$kayitlar['mayistopBE'];
}
}
//echo $Toplamgeksi;
//echo "Mayýs: ".$mayistotalBE.".......";
//HAZÝRAN
$haziranBE = @mysql_query("select sum(v131+v132+v133) as hazirantopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZÝRAN')") ;
while ($kayitlar = mysql_fetch_array($haziranBE)) {
if($kayitlar['hazirantopBE']==""){
$hazirantotalBE=0 ;
}else{
$hazirantotalBE=$kayitlar['hazirantopBE'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalBE.".......";
//TEMMUZ
$temmuzBE = @mysql_query("select sum(v131+v132+v133) as temmuztopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzBE)) {
if($kayitlar['temmuztopBE']==""){
$temmuztotalBE=0 ;
}else{
$temmuztotalBE=$kayitlar['temmuztopBE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalBE.".......";
//AÐUSTOS
$agustosBE = @mysql_query("select sum(v131+v132+v133) as agustostopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='AÐUSTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosBE)) {
if($kayitlar['agustostopBE']==""){
$agustostotalBE=0 ;
}else{
$agustostotalBE=$kayitlar['agustostopBE'];
}
}
//echo $Toplamgeksi;
//echo "Aðustos: ".$agustostotalBE.".......";
//EYLÜL
$eylulBE = @mysql_query("select sum(v131+v132+v133) as eylultopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYLÜL')") ;
while ($kayitlar = mysql_fetch_array($eylulBE)) {
if($kayitlar['eylultopBE']==""){
$eylultotalBE=0 ;
}else{
$eylultotalBE=$kayitlar['eylultopBE'];
}
}
//echo $Toplamgeksi;
//echo "Eylül: ".$eylultotalBE.".......";
//EKÝM
$ekimBE = @mysql_query("select sum(v131+v132+v133) as ekimtopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EKÝM')") ;
while ($kayitlar = mysql_fetch_array($ekimBE)) {
if($kayitlar['ekimtopBE']==""){
$ekimtotalBE=0 ;
}else{
$ekimtotalBE=$kayitlar['ekimtopBE'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalBE.".......";
//KASIM
$kasimBE = @mysql_query("select sum(v131+v132+v133) as kasimtopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimBE)) {
if($kayitlar['kasimtopBE']==""){
$kasimtotalBE=0 ;
}else{
$kasimtotalBE=$kayitlar['kasimtopBE'];
}
}
//echo $Toplamgeksi;
//echo "Kasým: ".$kasimtotalBE.".......";
//ARALIK
$aralikBE = @mysql_query("select sum(v131+v132+v133) as araliktopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikBE)) {
if($kayitlar['araliktopBE']==""){
$araliktotalBE=0 ;
}else{
$araliktotalBE=$kayitlar['araliktopBE'];
}
}
//echo $Toplamgeksi;
//echo "Aralýk: ".$araliktotalBE.".......";
if($aygelen=="OCAK"){
$aytoplamBE=0 ;
}
if($aygelen=="ÞUBAT"){
$aytoplamBE=$ocaktotalBE ;
}
if($aygelen=="MART"){
$aytoplamBE=$ocaktotalBE+$subattotalBE ;
}
if($aygelen=="NÝSAN"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE ;
}
if($aygelen=="MAYIS"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE ;
}
if($aygelen=="HAZÝRAN"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE ;
}
if($aygelen=="AÐUSTOS"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE ;
}
if($aygelen=="EYLÜL"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE+$agustostotalBE ;
}
if($aygelen=="EKÝM"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE+$agustostotalBE+$eylultotalBE ;
}
if($aygelen=="KASIM"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE+$agustostotalBE+$eylultotalBE+$ekimtotalBE ;
}
if($aygelen=="ARALIK"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE+$agustostotalBE+$eylultotalBE+$ekimtotalBE+$kasimtotalBE ;
}
//echo "Ay toplam: ".$aytoplamBE ;
$btoplam=$aytoplamBA-$aytoplamBE ;
//echo "GENEL TOPLAM: ".$btoplam ;
$devredenbebek=$devirbebek+$aytoplamBA-$aytoplamBE ;
//echo "Geçen aydan devreden bebek: ".$devredenbebek ;
$aysonubebekmevcudu=$devredenbebek+$Toplambuaybebekarti-$Toplambuaybebekeksi;
//echo "Ay Sonu bebek mevcudu: ".$aysonubebekmevcudu ;
//LOHUSA KISMI****************************************************************************************************************** 
//ÝÇÝNDE BULUNULAN AY TOPLAMLARI
$buayla = @mysql_query("select sum(v137+v138+v139) as buaylasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayla)) {
if($kayitlar['buaylasonuc']==""){
$Toplambuaylarti=0 ;
}else{
$Toplambuaylarti=$kayitlar['buaylasonuc'];
}
}
//echo $Toplambuaylarti;
$buayle = @mysql_query("select sum(v140+v141+v142) as buaylesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayle)) {
if($kayitlar['buaylesonuc']==""){
$Toplambuayleksi=0 ;
}else{
$Toplambuayleksi=$kayitlar['buaylesonuc'];
}
}
//echo $Toplambuayleksi;
//DEVÝR HESAPLAMALARI*************************************************************************************************************
$lohusaarti = @mysql_query("select sum(v137+v138+v139) as lsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaarti)) {
if($kayitlar['lsonucarti']==""){
$Toplamlarti=0 ;
}else{
$Toplamlarti=$kayitlar['lsonucarti'];
}
}
//echo $Toplamlarti;
$lohusaeksi = @mysql_query("select sum(v140+v141+v142) as lsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaeksi)) {
if($kayitlar['lsonuceksi']==""){
$Toplamleksi=0 ;
}else{
$Toplamleksi=$kayitlar['lsonuceksi'];
}
}
//echo $Toplamleksi;
$devirl=$Toplamlarti-$Toplamleksi;
//echo "GEÇEN YIL DEVÝR:".$devirl;
// AY DENEMESÝ
//LOHUSALIÐA GEÇEN*************************************************************************************************************
//OCAK
$ocakLA = @mysql_query("select sum(v137+v138+v139) as ocaktopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakLA)) {
if($kayitlar['ocaktopLA']==""){
$ocaktotalLA=0 ;
}else{
$ocaktotalLA=$kayitlar['ocaktopLA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalLA.".......";
//ÞUBAT
$subatLA = @mysql_query("select sum(v137+v138+v139) as subattopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ÞUBAT')") ;
while ($kayitlar = mysql_fetch_array($subatLA)) {
if($kayitlar['subattopLA']==""){
$subattotalLA=0 ;
}else{
$subattotalLA=$kayitlar['subattopLA'];
}
}
//echo $Toplamgeksi;
//echo "Þubat: ".$subattotalLA.".......";
//MART
$martLA = @mysql_query("select sum(v137+v138+v139) as marttopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martLA)) {
if($kayitlar['marttopLA']==""){
$marttotalLA=0 ;
}else{
$marttotalLA=$kayitlar['marttopLA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalLA.".......";
//NÝSAN
$nisanLA = @mysql_query("select sum(v137+v138+v139) as nisantopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='NÝSAN')") ;
while ($kayitlar = mysql_fetch_array($nisanLA)) {
if($kayitlar['nisantopLA']==""){
$nisantotalLA=0 ;
}else{
$nisantotalLA=$kayitlar['nisantopLA'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalLA.".......";
//MAYIS
$mayisLA = @mysql_query("select sum(v137+v138+v139) as mayistopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisLA)) {
if($kayitlar['mayistopLA']==""){
$mayistotalLA=0 ;
}else{
$mayistotalLA=$kayitlar['mayistopLA'];
}
}
//echo $Toplamgeksi;
//echo "Mayýs: ".$mayistotalLA.".......";
//HAZÝRAN
$haziranLA = @mysql_query("select sum(v137+v138+v139) as hazirantopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZÝRAN')") ;
while ($kayitlar = mysql_fetch_array($haziranLA)) {
if($kayitlar['hazirantopLA']==""){
$hazirantotalLA=0 ;
}else{
$hazirantotalLA=$kayitlar['hazirantopLA'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalLA.".......";
//TEMMUZ
$temmuzLA = @mysql_query("select sum(v137+v138+v139) as temmuztopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzLA)) {
if($kayitlar['temmuztopLA']==""){
$temmuztotalLA=0 ;
}else{
$temmuztotalLA=$kayitlar['temmuztopLA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalLA.".......";
//AÐUSTOS
$agustosLA = @mysql_query("select sum(v137+v138+v139) as agustostopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='AÐUSTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosLA)) {
if($kayitlar['agustostopLA']==""){
$agustostotalLA=0 ;
}else{
$agustostotalLA=$kayitlar['agustostopLA'];
}
}
//echo $Toplamgeksi;
//echo "Aðustos: ".$agustostotalLA.".......";
//EYLÜL
$eylulLA = @mysql_query("select sum(v137+v138+v139) as eylultopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYLÜL')") ;
while ($kayitlar = mysql_fetch_array($eylulLA)) {
if($kayitlar['eylultopLA']==""){
$eylultotalLA=0 ;
}else{
$eylultotalLA=$kayitlar['eylultopLA'];
}
}
//echo $Toplamgeksi;
//echo "Eylül: ".$eylultotalLA.".......";
//EKÝM
$ekimLA = @mysql_query("select sum(v137+v138+v139) as ekimtopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EKÝM')") ;
while ($kayitlar = mysql_fetch_array($ekimLA)) {
if($kayitlar['ekimtopLA']==""){
$ekimtotalLA=0 ;
}else{
$ekimtotalLA=$kayitlar['ekimtopLA'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalLA.".......";
//KASIM
$kasimLA = @mysql_query("select sum(v137+v138+v139) as kasimtopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimLA)) {
if($kayitlar['kasimtopLA']==""){
$kasimtotalLA=0 ;
}else{
$kasimtotalLA=$kayitlar['kasimtopLA'];
}
}
//echo $Toplamgeksi;
//echo "Kasým: ".$kasimtotalLA.".......";
//ARALIK
$aralikLA = @mysql_query("select sum(v137+v138+v139) as araliktopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikLA)) {
if($kayitlar['araliktopLA']==""){
$araliktotalLA=0 ;
}else{
$araliktotalLA=$kayitlar['araliktopLA'];
}
}
//echo $Toplamgeksi;
//echo "Aralýk: ".$araliktotalLA.".......";
if($aygelen=="OCAK"){
$aytoplamLA=0 ;
}
if($aygelen=="ÞUBAT"){
$aytoplamLA=$ocaktotalLA ;
}
if($aygelen=="MART"){
$aytoplamLA=$ocaktotalLA+$subattotalLA ;
}
if($aygelen=="NÝSAN"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA ;
}
if($aygelen=="MAYIS"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA ;
}
if($aygelen=="HAZÝRAN"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA ;
}
if($aygelen=="AÐUSTOS"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA ;
}
if($aygelen=="EYLÜL"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA ;
}
if($aygelen=="EKÝM"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA ;
}
if($aygelen=="KASIM"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA+$ekimtotalLA ;
}
if($aygelen=="ARALIK"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA+$ekimtotalLA+$kasimtotalLA ;
}
//echo "Ay toplam: ".$aytoplamLA ;

// LOHUSA ÇIKAN*****************************************************************************************************************
//OCAK
$ocakLE = @mysql_query("select sum(v140+v141+v142) as ocaktopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakLE)) {
if($kayitlar['ocaktopLE']==""){
$ocaktotalLE=0 ;
}else{
$ocaktotalLE=$kayitlar['ocaktopLE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGE.".......";
//ÞUBAT
$subatLE = @mysql_query("select sum(v140+v141+v142) as subattopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ÞUBAT')") ;
while ($kayitlar = mysql_fetch_array($subatLE)) {
if($kayitlar['subattopLE']==""){
$subattotalLE=0 ;
}else{
$subattotalLE=$kayitlar['subattopLE'];
}
}
//echo $Toplamgeksi;
//echo "Þubat: ".$subattotalLE.".......";
//MART
$martLE = @mysql_query("select sum(v140+v141+v142) as marttopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martLE)) {
if($kayitlar['marttopLE']==""){
$marttotalLE=0 ;
}else{
$marttotalLE=$kayitlar['marttopLE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalLE.".......";
//NÝSAN
$nisanLE = @mysql_query("select sum(v140+v141+v142) as nisantopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='NÝSAN')") ;
while ($kayitlar = mysql_fetch_array($nisanLE)) {
if($kayitlar['nisantopLE']==""){
$nisantotalLE=0 ;
}else{
$nisantotalLE=$kayitlar['nisantopLE'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalLE.".......";
//MAYIS
$mayisLE = @mysql_query("select sum(v140+v141+v142) as mayistopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisLE)) {
if($kayitlar['mayistopLE']==""){
$mayistotalLE=0 ;
}else{
$mayistotalLE=$kayitlar['mayistopLE'];
}
}
//echo $Toplamgeksi;
//echo "Mayýs: ".$mayistotalLE.".......";
//HAZÝRAN
$haziranLE = @mysql_query("select sum(v140+v141+v142) as hazirantopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZÝRAN')") ;
while ($kayitlar = mysql_fetch_array($haziranLE)) {
if($kayitlar['hazirantopLE']==""){
$hazirantotalLE=0 ;
}else{
$hazirantotalLE=$kayitlar['hazirantopLE'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalLE.".......";
//TEMMUZ
$temmuzLE = @mysql_query("select sum(v140+v141+v142) as temmuztopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzLE)) {
if($kayitlar['temmuztopLE']==""){
$temmuztotalLE=0 ;
}else{
$temmuztotalLE=$kayitlar['temmuztopLE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalLE.".......";
//AÐUSTOS
$agustosLE = @mysql_query("select sum(v140+v141+v142) as agustostopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='AÐUSTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosLE)) {
if($kayitlar['agustostopLE']==""){
$agustostotalLE=0 ;
}else{
$agustostotalLE=$kayitlar['agustostopLE'];
}
}
//echo $Toplamgeksi;
//echo "Aðustos: ".$agustostotalLE.".......";
//EYLÜL
$eylulLE = @mysql_query("select sum(v140+v141+v142) as eylultopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYLÜL')") ;
while ($kayitlar = mysql_fetch_array($eylulLE)) {
if($kayitlar['eylultopLE']==""){
$eylultotalLE=0 ;
}else{
$eylultotalLE=$kayitlar['eylultopLE'];
}
}
//echo $Toplamgeksi;
//echo "Eylül: ".$eylultotalLE.".......";
//EKÝM
$ekimLE = @mysql_query("select sum(v140+v141+v142) as ekimtopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EKÝM')") ;
while ($kayitlar = mysql_fetch_array($ekimLE)) {
if($kayitlar['ekimtopLE']==""){
$ekimtotalLE=0 ;
}else{
$ekimtotalLE=$kayitlar['ekimtopLE'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalLE.".......";
//KASIM
$kasimLE = @mysql_query("select sum(v140+v141+v142) as kasimtopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimLE)) {
if($kayitlar['kasimtopLE']==""){
$kasimtotalLE=0 ;
}else{
$kasimtotalLE=$kayitlar['kasimtopLE'];
}
}
//echo $Toplamgeksi;
//echo "Kasým: ".$kasimtotalLE.".......";
//ARALIK
$aralikLE = @mysql_query("select sum(v140+v141+v142) as araliktopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikLE)) {
if($kayitlar['araliktopLE']==""){
$araliktotalLE=0 ;
}else{
$araliktotalLE=$kayitlar['araliktopLE'];
}
}
//echo $Toplamgeksi;
//echo "Aralýk: ".$araliktotalLE.".......";
if($aygelen=="OCAK"){
$aytoplamLE=0 ;
}
if($aygelen=="ÞUBAT"){
$aytoplamLE=$ocaktotalLE ;
}
if($aygelen=="MART"){
$aytoplamLE=$ocaktotalLE+$subattotalLE ;
}
if($aygelen=="NÝSAN"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE ;
}
if($aygelen=="MAYIS"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE ;
}
if($aygelen=="HAZÝRAN"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE ;
}
if($aygelen=="AÐUSTOS"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE ;
}
if($aygelen=="EYLÜL"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE+$agustostotalLE ;
}
if($aygelen=="EKÝM"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE+$agustostotalLE+$eylultotalLE ;
}
if($aygelen=="KASIM"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE+$agustostotalLE+$eylultotalLE+$ekimtotalLE ;
}
if($aygelen=="ARALIK"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE+$agustostotalLE+$eylultotalLE+$ekimtotalLE+$kasimtotalLE ;
}
//echo "Ay toplam: ".$aytoplamLE ;
$ltoplam=$aytoplamLA-$aytoplamLE ;
//echo "GENEL TOPLAM: ".$ltoplam ;
$devredenlohusa=$devirl+$aytoplamLA-$aytoplamLE ;
//echo "Geçen aydan devreden lohusa: ".$devredenlohusa ;
$aysonulohusamevcudu=$devredenlohusa+$Toplambuaylarti-$Toplambuayleksi;
//echo "Ay Sonu lohusa mevcudu: ".$aysonulohusamevcudu ;
//ÇOCUK KISMI********************************************************************************************************************
//ÝÇÝNDE BULUNULAN AY TOPLAMLARI
$buayca = @mysql_query("select sum(v145+v146+v147) as buaycasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayca)) {
if($kayitlar['buaycasonuc']==""){
$Toplambuaycocukarti=0 ;
}else{
$Toplambuaycocukarti=$kayitlar['buaycasonuc'];
}
}
//echo $Toplambuaycocukarti;
$buayce = @mysql_query("select sum(v148+v149+v150) as buaycesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayce)) {
if($kayitlar['buaycesonuc']==""){
$Toplambuaycocukeksi=0 ;
}else{
$Toplambuaycocukeksi=$kayitlar['buaycesonuc'];
}
}
//echo $Toplambuaycocukeksi;
//DEVÝR HESAPLAMALARI*************************************************************************************************************
$cocukarti = @mysql_query("select sum(v145+v146+v147) as csonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukarti)) {
if($kayitlar['csonucarti']==""){
$Toplamcarti=0 ;
}else{
$Toplamcarti=$kayitlar['csonucarti'];
}
}
//echo $Toplamcarti;
$cocukeksi = @mysql_query("select sum(v148+v149+v150) as csonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukeksi)) {
if($kayitlar['csonuceksi']==""){
$Toplamceksi=0 ;
}else{
$Toplamceksi=$kayitlar['csonuceksi'];
}
}
//echo $Toplamceksi;
$devircocuk=$Toplamcarti-$Toplamceksi;
//echo "GEÇEN YIL DEVÝR:".$devircocuk;
// AY DENEMESÝ
//ÇOCUK GEÇEN******************************************************************************************************************
//OCAK
$ocakCA = @mysql_query("select sum(v145+v146+v147) as ocaktopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakCA)) {
if($kayitlar['ocaktopCA']==""){
$ocaktotalCA=0 ;
}else{
$ocaktotalCA=$kayitlar['ocaktopCA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalCA.".......";
//ÞUBAT
$subatCA = @mysql_query("select sum(v145+v146+v147) as subattopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ÞUBAT')") ;
while ($kayitlar = mysql_fetch_array($subatCA)) {
if($kayitlar['subattopCA']==""){
$subattotalCA=0 ;
}else{
$subattotalCA=$kayitlar['subattopCA'];
}
}
//echo $Toplamgeksi;
//echo "Þubat: ".$subattotalCA.".......";
//MART
$martCA = @mysql_query("select sum(v145+v146+v147) as marttopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martCA)) {
if($kayitlar['marttopCA']==""){
$marttotalCA=0 ;
}else{
$marttotalCA=$kayitlar['marttopCA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalCA.".......";
//NÝSAN
$nisanCA = @mysql_query("select sum(v145+v146+v147) as nisantopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='NÝSAN')") ;
while ($kayitlar = mysql_fetch_array($nisanCA)) {
if($kayitlar['nisantopCA']==""){
$nisantotalCA=0 ;
}else{
$nisantotalCA=$kayitlar['nisantopCA'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalCA.".......";
//MAYIS
$mayisCA = @mysql_query("select sum(v145+v146+v147) as mayistopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisCA)) {
if($kayitlar['mayistopCA']==""){
$mayistotalCA=0 ;
}else{
$mayistotalCA=$kayitlar['mayistopCA'];
}
}
//echo $Toplamgeksi;
//echo "Mayýs: ".$mayistotalCA.".......";
//HAZÝRAN
$haziranCA = @mysql_query("select sum(v145+v146+v147) as hazirantopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZÝRAN')") ;
while ($kayitlar = mysql_fetch_array($haziranCA)) {
if($kayitlar['hazirantopCA']==""){
$hazirantotalCA=0 ;
}else{
$hazirantotalCA=$kayitlar['hazirantopCA'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalCA.".......";
//TEMMUZ
$temmuzCA = @mysql_query("select sum(v145+v146+v147) as temmuztopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzCA)) {
if($kayitlar['temmuztopCA']==""){
$temmuztotalCA=0 ;
}else{
$temmuztotalCA=$kayitlar['temmuztopCA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalCA.".......";
//AÐUSTOS
$agustosCA = @mysql_query("select sum(v145+v146+v147) as agustostopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='AÐUSTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosCA)) {
if($kayitlar['agustostopCA']==""){
$agustostotalCA=0 ;
}else{
$agustostotalCA=$kayitlar['agustostopCA'];
}
}
//echo $Toplamgeksi;
//echo "Aðustos: ".$agustostotalCA.".......";
//EYLÜL
$eylulCA = @mysql_query("select sum(v145+v146+v147) as eylultopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYLÜL')") ;
while ($kayitlar = mysql_fetch_array($eylulCA)) {
if($kayitlar['eylultopCA']==""){
$eylultotalCA=0 ;
}else{
$eylultotalCA=$kayitlar['eylultopCA'];
}
}
//echo $Toplamgeksi;
//echo "Eylül: ".$eylultotalCA.".......";
//EKÝM
$ekimCA = @mysql_query("select sum(v145+v146+v147) as ekimtopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EKÝM')") ;
while ($kayitlar = mysql_fetch_array($ekimCA)) {
if($kayitlar['ekimtopCA']==""){
$ekimtotalCA=0 ;
}else{
$ekimtotalCA=$kayitlar['ekimtopCA'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalCA.".......";
//KASIM
$kasimCA = @mysql_query("select sum(v145+v146+v147) as kasimtopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimCA)) {
if($kayitlar['kasimtopCA']==""){
$kasimtotalCA=0 ;
}else{
$kasimtotalCA=$kayitlar['kasimtopCA'];
}
}
//echo $Toplamgeksi;
//echo "Kasým: ".$kasimtotalCA.".......";
//ARALIK
$aralikCA = @mysql_query("select sum(v145+v146+v147) as araliktopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikCA)) {
if($kayitlar['araliktopCA']==""){
$araliktotalCA=0 ;
}else{
$araliktotalCA=$kayitlar['araliktopCA'];
}
}
//echo $Toplamgeksi;
//echo "Aralýk: ".$araliktotalCA.".......";
if($aygelen=="OCAK"){
$aytoplamCA=0 ;
}
if($aygelen=="ÞUBAT"){
$aytoplamCA=$ocaktotalCA ;
}
if($aygelen=="MART"){
$aytoplamCA=$ocaktotalCA+$subattotalCA ;
}
if($aygelen=="NÝSAN"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA ;
}
if($aygelen=="MAYIS"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA ;
}
if($aygelen=="HAZÝRAN"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA ;
}
if($aygelen=="AÐUSTOS"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA ;
}
if($aygelen=="EYLÜL"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA ;
}
if($aygelen=="EKÝM"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA ;
}
if($aygelen=="KASIM"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA+$ekimtotalCA ;
}
if($aygelen=="ARALIK"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA+$ekimtotalCA+$kasimtotalCA ;
}
//echo "Ay toplam: ".$aytoplamCA ;

// ÇOCUK ÇIKAN*****************************************************************************************************************
//OCAK
$ocakCE = @mysql_query("select sum(v148+v149+v150) as ocaktopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakCE)) {
if($kayitlar['ocaktopCE']==""){
$ocaktotalCE=0 ;
}else{
$ocaktotalCE=$kayitlar['ocaktopCE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalCE.".......";
//ÞUBAT
$subatCE = @mysql_query("select sum(v148+v149+v150) as subattopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ÞUBAT')") ;
while ($kayitlar = mysql_fetch_array($subatCE)) {
if($kayitlar['subattopCE']==""){
$subattotalCE=0 ;
}else{
$subattotalCE=$kayitlar['subattopCE'];
}
}
//echo $Toplamgeksi;
//echo "Þubat: ".$subattotalCE.".......";
//MART
$martCE = @mysql_query("select sum(v148+v149+v150) as marttopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martCE)) {
if($kayitlar['marttopCE']==""){
$marttotalCE=0 ;
}else{
$marttotalCE=$kayitlar['marttopCE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalCE.".......";
//NÝSAN
$nisanCE = @mysql_query("select sum(v148+v149+v150) as nisantopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='NÝSAN')") ;
while ($kayitlar = mysql_fetch_array($nisanCE)) {
if($kayitlar['nisantopCE']==""){
$nisantotalCE=0 ;
}else{
$nisantotalCE=$kayitlar['nisantopCE'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalCE.".......";
//MAYIS
$mayisCE = @mysql_query("select sum(v148+v149+v150) as mayistopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisCE)) {
if($kayitlar['mayistopCE']==""){
$mayistotalCE=0 ;
}else{
$mayistotalCE=$kayitlar['mayistopCE'];
}
}
//echo $Toplamgeksi;
//echo "Mayýs: ".$mayistotalCE.".......";
//HAZÝRAN
$haziranCE = @mysql_query("select sum(v148+v149+v150) as hazirantopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZÝRAN')") ;
while ($kayitlar = mysql_fetch_array($haziranCE)) {
if($kayitlar['hazirantopCE']==""){
$hazirantotalCE=0 ;
}else{
$hazirantotalCE=$kayitlar['hazirantopCE'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalCE.".......";
//TEMMUZ
$temmuzCE = @mysql_query("select sum(v148+v149+v150) as temmuztopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzCE)) {
if($kayitlar['temmuztopCE']==""){
$temmuztotalCE=0 ;
}else{
$temmuztotalCE=$kayitlar['temmuztopCE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalCE.".......";
//AÐUSTOS
$agustosCE = @mysql_query("select sum(v148+v149+v150) as agustostopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='AÐUSTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosCE)) {
if($kayitlar['agustostopCE']==""){
$agustostotalCE=0 ;
}else{
$agustostotalCE=$kayitlar['agustostopCE'];
}
}
//echo $Toplamgeksi;
//echo "Aðustos: ".$agustostotalCE.".......";
//EYLÜL
$eylulCE = @mysql_query("select sum(v148+v149+v150) as eylultopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYLÜL')") ;
while ($kayitlar = mysql_fetch_array($eylulCE)) {
if($kayitlar['eylultopCE']==""){
$eylultotalCE=0 ;
}else{
$eylultotalCE=$kayitlar['eylultopCE'];
}
}
//echo $Toplamgeksi;
//echo "Eylül: ".$eylultotalCE.".......";
//EKÝM
$ekimCE = @mysql_query("select sum(v148+v149+v150) as ekimtopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EKÝM')") ;
while ($kayitlar = mysql_fetch_array($ekimCE)) {
if($kayitlar['ekimtopCE']==""){
$ekimtotalCE=0 ;
}else{
$ekimtotalCE=$kayitlar['ekimtopCE'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalCE.".......";
//KASIM
$kasimCE = @mysql_query("select sum(v148+v149+v150) as kasimtopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimCE)) {
if($kayitlar['kasimtopCE']==""){
$kasimtotalCE=0 ;
}else{
$kasimtotalCE=$kayitlar['kasimtopCE'];
}
}
//echo $Toplamgeksi;
//echo "Kasým: ".$kasimtotalCE.".......";
//ARALIK
$aralikCE = @mysql_query("select sum(v148+v149+v150) as araliktopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikCE)) {
if($kayitlar['araliktopCE']==""){
$araliktotalCE=0 ;
}else{
$araliktotalCE=$kayitlar['araliktopCE'];
}
}
//echo $Toplamgeksi;
//echo "Aralýk: ".$araliktotalCE.".......";
if($aygelen=="OCAK"){
$aytoplamCE=0 ;
}
if($aygelen=="ÞUBAT"){
$aytoplamCE=$ocaktotalCE ;
}
if($aygelen=="MART"){
$aytoplamCE=$ocaktotalCE+$subattotalCE ;
}
if($aygelen=="NÝSAN"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE ;
}
if($aygelen=="MAYIS"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE ;
}
if($aygelen=="HAZÝRAN"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE ;
}
if($aygelen=="AÐUSTOS"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE ;
}
if($aygelen=="EYLÜL"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE+$agustostotalCE ;
}
if($aygelen=="EKÝM"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE+$agustostotalCE+$eylultotalCE ;
}
if($aygelen=="KASIM"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE+$agustostotalCE+$eylultotalCE+$ekimtotalCE ;
}
if($aygelen=="ARALIK"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE+$agustostotalCE+$eylultotalCE+$ekimtotalCE+$kasimtotalCE ;
}
//echo "Ay toplam: ".$aytoplamCE ;
$ctoplam=$aytoplamCA-$aytoplamCE ;
//echo "GENEL TOPLAM: ".$ctoplam ;
$devredencocuk=$devircocuk+$aytoplamCA-$aytoplamCE ;
//echo "Geçen aydan devreden cocuk: ".$devredencocuk ;
$aysonucocukmevcudu=$devredencocuk+$Toplambuaycocukarti-$Toplambuaycocukeksi;
//echo "Ay Sonu cocuk mevcudu: ".$aysonucocukmevcudu ;
?>
