<?php
//GEBE KISMI********************************************************************************************************************** 

//echo $Toplambuayeksi;
//DEV�R HESAPLAMALARI*************************************************************************************************************
require_once('../excelmysql/con_cekus.php');

$gebedevir = @mysql_query("select vocadi,sum(v2) as gsonucarti,sum(v3+v4) as gsonuceksi from veri where(ilidi='1' and ilceidi='1' and vyiladi<'2013') group by vocadi order by vocadi asc") ;
$basla=4;
while ($kayitlar = mysql_fetch_array($gebedevir)) {
$devredengebe=$kayitlar["gsonucarti"]-$kayitlar["gsonuceksi"];
$basla++;
echo $devredengebe;
$ocak=$kayitlar['vocadi'];
echo $ocak;
$yil="2003";
$ilk="2003"-1;
echo $ilk;
ECHO '</br>';
}
//echo "GE�EN YIL DEV�R:".$devir;
// AY DENEMES�
//GEBE GE�EN******************************************************************************************************************
//OCAK
/*$ocakGA = @mysql_query("select sum(v2) as ocaktopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakGA)) {
if($kayitlar['ocaktopGA']==""){
$ocaktotalGA=0 ;
}else{
$ocaktotalGA=$kayitlar['ocaktopGA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGA.".......";
//�UBAT
$subatGA = @mysql_query("select sum(v2) as subattopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='�UBAT')") ;
while ($kayitlar = mysql_fetch_array($subatGA)) {
if($kayitlar['subattopGA']==""){
$subattotalGA=0 ;
}else{
$subattotalGA=$kayitlar['subattopGA'];
}
}
//echo $Toplamgeksi;
//echo "�ubat: ".$subattotalGA.".......";
//MART
$martGA = @mysql_query("select sum(v2) as marttopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martGA)) {
if($kayitlar['marttopGA']==""){
$marttotalGA=0 ;
}else{
$marttotalGA=$kayitlar['marttopGA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalGA.".......";
//N�SAN
$nisanGA = @mysql_query("select sum(v2) as nisantopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='N�SAN')") ;
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
$mayisGA = @mysql_query("select sum(v2) as mayistopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisGA)) {
if($kayitlar['mayistopGA']==""){
$mayistotalGA=0 ;
}else{
$mayistotalGA=$kayitlar['mayistopGA'];
}
}
//echo $Toplamgeksi;
//echo "May�s: ".$mayistotalGA.".......";
//HAZ�RAN
$haziranGA = @mysql_query("select sum(v2) as hazirantopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZ�RAN')") ;
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
$temmuzGA = @mysql_query("select sum(v2) as temmuztopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzGA)) {
if($kayitlar['temmuztopGA']==""){
$temmuztotalGA=0 ;
}else{
$temmuztotalGA=$kayitlar['temmuztopGA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalGA.".......";
//A�USTOS
$agustosGA = @mysql_query("select sum(v2) as agustostopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='A�USTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosGA)) {
if($kayitlar['agustostopGA']==""){
$agustostotalGA=0 ;
}else{
$agustostotalGA=$kayitlar['agustostopGA'];
}
}
//echo $Toplamgeksi;
//echo "A�ustos: ".$agustostotalGA.".......";
//EYL�L
$eylulGA = @mysql_query("select sum(v2) as eylultopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYL�L')") ;
while ($kayitlar = mysql_fetch_array($eylulGA)) {
if($kayitlar['eylultopGA']==""){
$eylultotalGA=0 ;
}else{
$eylultotalGA=$kayitlar['eylultopGA'];
}
}
//echo $Toplamgeksi;
//echo "Eyl�l: ".$eylultotalGA.".......";
//EK�M
$ekimGA = @mysql_query("select sum(v2) as ekimtopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EK�M')") ;
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
$kasimGA = @mysql_query("select sum(v2) as kasimtopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimGA)) {
if($kayitlar['kasimtopGA']==""){
$kasimtotalGA=0 ;
}else{
$kasimtotalGA=$kayitlar['kasimtopGA'];
}
}
//echo $Toplamgeksi;
//echo "Kas�m: ".$kasimtotalGA.".......";
//ARALIK
$aralikGA = @mysql_query("select sum(v2) as araliktopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikGA)) {
if($kayitlar['araliktopGA']==""){
$araliktotalGA=0 ;
}else{
$araliktotalGA=$kayitlar['araliktopGA'];
}
}
//echo $Toplamgeksi;
//echo "Aral�k: ".$araliktotalGA.".......";
if($aygelen=="OCAK"){
$aytoplamGA=0 ;
}
if($aygelen=="�UBAT"){
$aytoplamGA=$ocaktotalGA ;
}
if($aygelen=="MART"){
$aytoplamGA=$ocaktotalGA+$subattotalGA ;
}
if($aygelen=="N�SAN"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA ;
}
if($aygelen=="MAYIS"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA ;
}
if($aygelen=="HAZ�RAN"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA ;
}
if($aygelen=="A�USTOS"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA ;
}
if($aygelen=="EYL�L"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA ;
}
if($aygelen=="EK�M"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA ;
}
if($aygelen=="KASIM"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA+$ekimtotalGA ;
}
if($aygelen=="ARALIK"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA+$ekimtotalGA+$kasimtotalGA ;
}
//echo "Ay toplam: ".$aytoplamGA ;

// GEBE �IKAN*****************************************************************************************************************
//OCAK
$ocakGE = @mysql_query("select sum(v3+v4) as ocaktopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakGE)) {
if($kayitlar['ocaktopGE']==""){
$ocaktotalGE=0 ;
}else{
$ocaktotalGE=$kayitlar['ocaktopGE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGE.".......";
//�UBAT
$subatGE = @mysql_query("select sum(v3+v4) as subattopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='�UBAT')") ;
while ($kayitlar = mysql_fetch_array($subatGE)) {
if($kayitlar['subattopGE']==""){
$subattotalGE=0 ;
}else{
$subattotalGE=$kayitlar['subattopGE'];
}
}
//echo $Toplamgeksi;
//echo "�ubat: ".$subattotalGE.".......";
//MART
$martGE = @mysql_query("select sum(v3+v4) as marttopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martGE)) {
if($kayitlar['marttopGE']==""){
$marttotalGE=0 ;
}else{
$marttotalGE=$kayitlar['marttopGE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalGE.".......";
//N�SAN
$nisanGE = @mysql_query("select sum(v3+v4) as nisantopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='N�SAN')") ;
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
$mayisGE = @mysql_query("select sum(v3+v4) as mayistopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisGE)) {
if($kayitlar['mayistopGE']==""){
$mayistotalGE=0 ;
}else{
$mayistotalGE=$kayitlar['mayistopGE'];
}
}
//echo $Toplamgeksi;
//echo "May�s: ".$mayistotalGE.".......";
//HAZ�RAN
$haziranGE = @mysql_query("select sum(v3+v4) as hazirantopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZ�RAN')") ;
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
$temmuzGE = @mysql_query("select sum(v3+v4) as temmuztopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzGE)) {
if($kayitlar['temmuztopGE']==""){
$temmuztotalGE=0 ;
}else{
$temmuztotalGE=$kayitlar['temmuztopGE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalGE.".......";
//A�USTOS
$agustosGE = @mysql_query("select sum(v3+v4) as agustostopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='A�USTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosGE)) {
if($kayitlar['agustostopGE']==""){
$agustostotalGE=0 ;
}else{
$agustostotalGE=$kayitlar['agustostopGE'];
}
}
//echo $Toplamgeksi;
//echo "A�ustos: ".$agustostotalGE.".......";
//EYL�L
$eylulGE = @mysql_query("select sum(v3+v4) as eylultopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYL�L')") ;
while ($kayitlar = mysql_fetch_array($eylulGE)) {
if($kayitlar['eylultopGE']==""){
$eylultotalGE=0 ;
}else{
$eylultotalGE=$kayitlar['eylultopGE'];
}
}
//echo $Toplamgeksi;
//echo "Eyl�l: ".$eylultotalGE.".......";
//EK�M
$ekimGE = @mysql_query("select sum(v3+v4) as ekimtopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EK�M')") ;
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
$kasimGE = @mysql_query("select sum(v3+v4) as kasimtopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimGE)) {
if($kayitlar['kasimtopGE']==""){
$kasimtotalGE=0 ;
}else{
$kasimtotalGE=$kayitlar['kasimtopGE'];
}
}
//echo $Toplamgeksi;
//echo "Kas�m: ".$kasimtotalGE.".......";
//ARALIK
$aralikGE = @mysql_query("select sum(v3+v4) as araliktopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikGE)) {
if($kayitlar['araliktopGE']==""){
$araliktotalGE=0 ;
}else{
$araliktotalGE=$kayitlar['araliktopGE'];
}
}
//echo $Toplamgeksi;
//echo "Aral�k: ".$araliktotalGE.".......";
if($aygelen=="OCAK"){
$aytoplamGE=0 ;
}
if($aygelen=="�UBAT"){
$aytoplamGE=$ocaktotalGE ;
}
if($aygelen=="MART"){
$aytoplamGE=$ocaktotalGE+$subattotalGE ;
}
if($aygelen=="N�SAN"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE ;
}
if($aygelen=="MAYIS"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE ;
}
if($aygelen=="HAZ�RAN"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE ;
}
if($aygelen=="A�USTOS"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE ;
}
if($aygelen=="EYL�L"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE+$agustostotalGE ;
}
if($aygelen=="EK�M"){
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
//echo "Ge�en aydan devreden gebe: ".$devredengebe ;
$aysonugebemevcudu=$devredengebe+$Toplambuayarti-$Toplambuayeksi;
//echo "Ay Sonu gebe mevcudu: ".$aysonugebemevcudu ;
//BEBEK KISMI******************************************************************************************************************************************************
//���NDE BULUNULAN AY TOPLAMLARI
$buayba = @mysql_query("select sum(v11) as buaybasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayba)) {
if($kayitlar['buaybasonuc']==""){
$Toplambuaybebekarti=0 ;
}else{
$Toplambuaybebekarti=$kayitlar['buaybasonuc'];
}
}
//echo $Toplambuaybebekarti;
$buaybe = @mysql_query("select sum(v12+v13) as buaybesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buaybe)) {
if($kayitlar['buaybesonuc']==""){
$Toplambuaybebekeksi=0 ;
}else{
$Toplambuaybebekeksi=$kayitlar['buaybesonuc'];
}
}
//echo $Toplambuaybebekeksi;
//DEV�R HESAPLAMALARI*************************************************************************************************************
$bebekarti = @mysql_query("select sum(v11) as bsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekarti)) {
if($kayitlar['bsonucarti']==""){
$Toplambarti=0 ;
}else{
$Toplambarti=$kayitlar['bsonucarti'];
}
}
//echo $Toplambarti;
$bebekeksi = @mysql_query("select sum(v12+v13) as bsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekeksi)) {
if($kayitlar['bsonuceksi']==""){
$Toplambeksi=0 ;
}else{
$Toplambeksi=$kayitlar['bsonuceksi'];
}
}
//echo $Toplambeksi;
$devirbebek=$Toplambarti-$Toplambeksi;
//echo "GE�EN YIL DEV�R:".$devirbebek;
// AY DENEMES�
//GEBE GE�EN******************************************************************************************************************
//OCAK
$ocakBA = @mysql_query("select sum(v11) as ocaktopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakBA)) {
if($kayitlar['ocaktopBA']==""){
$ocaktotalBA=0 ;
}else{
$ocaktotalBA=$kayitlar['ocaktopBA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalBA.".......";
//�UBAT
$subatBA = @mysql_query("select sum(v11) as subattopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='�UBAT')") ;
while ($kayitlar = mysql_fetch_array($subatBA)) {
if($kayitlar['subattopBA']==""){
$subattotalBA=0 ;
}else{
$subattotalBA=$kayitlar['subattopBA'];
}
}
//echo $Toplamgeksi;
//echo "�ubat: ".$subattotalBA.".......";
//MART
$martBA = @mysql_query("select sum(v11) as marttopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martBA)) {
if($kayitlar['marttopBA']==""){
$marttotalBA=0 ;
}else{
$marttotalBA=$kayitlar['marttopBA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalBA.".......";
//N�SAN
$nisanBA = @mysql_query("select sum(v11) as nisantopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='N�SAN')") ;
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
$mayisBA = @mysql_query("select sum(v11) as mayistopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisBA)) {
if($kayitlar['mayistopBA']==""){
$mayistotalBA=0 ;
}else{
$mayistotalBA=$kayitlar['mayistopBA'];
}
}
//echo $Toplamgeksi;
//echo "May�s: ".$mayistotalBA.".......";
//HAZ�RAN
$haziranBA = @mysql_query("select sum(v11) as hazirantopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZ�RAN')") ;
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
$temmuzBA = @mysql_query("select sum(v11) as temmuztopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzBA)) {
if($kayitlar['temmuztopBA']==""){
$temmuztotalBA=0 ;
}else{
$temmuztotalBA=$kayitlar['temmuztopBA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalBA.".......";
//A�USTOS
$agustosBA = @mysql_query("select sum(v11) as agustostopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='A�USTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosBA)) {
if($kayitlar['agustostopBA']==""){
$agustostotalBA=0 ;
}else{
$agustostotalBA=$kayitlar['agustostopBA'];
}
}
//echo $Toplamgeksi;
//echo "A�ustos: ".$agustostotalBA.".......";
//EYL�L
$eylulBA = @mysql_query("select sum(v11) as eylultopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYL�L')") ;
while ($kayitlar = mysql_fetch_array($eylulBA)) {
if($kayitlar['eylultopBA']==""){
$eylultotalBA=0 ;
}else{
$eylultotalBA=$kayitlar['eylultopBA'];
}
}
//echo $Toplamgeksi;
//echo "Eyl�l: ".$eylultotalBA.".......";
//EK�M
$ekimBA = @mysql_query("select sum(v11) as ekimtopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EK�M')") ;
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
$kasimBA = @mysql_query("select sum(v11) as kasimtopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimBA)) {
if($kayitlar['kasimtopBA']==""){
$kasimtotalBA=0 ;
}else{
$kasimtotalBA=$kayitlar['kasimtopBA'];
}
}
//echo $Toplamgeksi;
//echo "Kas�m: ".$kasimtotalBA.".......";
//ARALIK
$aralikBA = @mysql_query("select sum(v11) as araliktopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikBA)) {
if($kayitlar['araliktopBA']==""){
$araliktotalBA=0 ;
}else{
$araliktotalBA=$kayitlar['araliktopBA'];
}
}
//echo $Toplamgeksi;
//echo "Aral�k: ".$araliktotalBA.".......";
if($aygelen=="OCAK"){
$aytoplamBA=0 ;
}
if($aygelen=="�UBAT"){
$aytoplamBA=$ocaktotalBA ;
}
if($aygelen=="MART"){
$aytoplamBA=$ocaktotalBA+$subattotalBA ;
}
if($aygelen=="N�SAN"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA ;
}
if($aygelen=="MAYIS"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA ;
}
if($aygelen=="HAZ�RAN"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA ;
}
if($aygelen=="A�USTOS"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA ;
}
if($aygelen=="EYL�L"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA ;
}
if($aygelen=="EK�M"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA ;
}
if($aygelen=="KASIM"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA+$ekimtotalBA ;
}
if($aygelen=="ARALIK"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA+$ekimtotalBA+$kasimtotalBA ;
}
//echo "Ay toplam: ".$aytoplamBA ;

// GEBE �IKAN*****************************************************************************************************************
//OCAK
$ocakBE = @mysql_query("select sum(v12+v13) as ocaktopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakBE)) {
if($kayitlar['ocaktopBE']==""){
$ocaktotalBE=0 ;
}else{
$ocaktotalBE=$kayitlar['ocaktopBE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalBE.".......";
//�UBAT
$subatBE = @mysql_query("select sum(v12+v13) as subattopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='�UBAT')") ;
while ($kayitlar = mysql_fetch_array($subatBE)) {
if($kayitlar['subattopBE']==""){
$subattotalBE=0 ;
}else{
$subattotalBE=$kayitlar['subattopBE'];
}
}
//echo $Toplamgeksi;
//echo "�ubat: ".$subattotalBE.".......";
//MART
$martBE = @mysql_query("select sum(v12+v13) as marttopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martBE)) {
if($kayitlar['marttopBE']==""){
$marttotalBE=0 ;
}else{
$marttotalBE=$kayitlar['marttopBE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalBE.".......";
//N�SAN
$nisanBE = @mysql_query("select sum(v12+v13) as nisantopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='N�SAN')") ;
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
$mayisBE = @mysql_query("select sum(v12+v13) as mayistopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisBE)) {
if($kayitlar['mayistopBE']==""){
$mayistotalBE=0 ;
}else{
$mayistotalBE=$kayitlar['mayistopBE'];
}
}
//echo $Toplamgeksi;
//echo "May�s: ".$mayistotalBE.".......";
//HAZ�RAN
$haziranBE = @mysql_query("select sum(v12+v13) as hazirantopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZ�RAN')") ;
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
$temmuzBE = @mysql_query("select sum(v12+v13) as temmuztopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzBE)) {
if($kayitlar['temmuztopBE']==""){
$temmuztotalBE=0 ;
}else{
$temmuztotalBE=$kayitlar['temmuztopBE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalBE.".......";
//A�USTOS
$agustosBE = @mysql_query("select sum(v12+v13) as agustostopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='A�USTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosBE)) {
if($kayitlar['agustostopBE']==""){
$agustostotalBE=0 ;
}else{
$agustostotalBE=$kayitlar['agustostopBE'];
}
}
//echo $Toplamgeksi;
//echo "A�ustos: ".$agustostotalBE.".......";
//EYL�L
$eylulBE = @mysql_query("select sum(v12+v13) as eylultopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYL�L')") ;
while ($kayitlar = mysql_fetch_array($eylulBE)) {
if($kayitlar['eylultopBE']==""){
$eylultotalBE=0 ;
}else{
$eylultotalBE=$kayitlar['eylultopBE'];
}
}
//echo $Toplamgeksi;
//echo "Eyl�l: ".$eylultotalBE.".......";
//EK�M
$ekimBE = @mysql_query("select sum(v12+v13) as ekimtopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EK�M')") ;
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
$kasimBE = @mysql_query("select sum(v12+v13) as kasimtopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimBE)) {
if($kayitlar['kasimtopBE']==""){
$kasimtotalBE=0 ;
}else{
$kasimtotalBE=$kayitlar['kasimtopBE'];
}
}
//echo $Toplamgeksi;
//echo "Kas�m: ".$kasimtotalBE.".......";
//ARALIK
$aralikBE = @mysql_query("select sum(v12+v13) as araliktopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikBE)) {
if($kayitlar['araliktopBE']==""){
$araliktotalBE=0 ;
}else{
$araliktotalBE=$kayitlar['araliktopBE'];
}
}
//echo $Toplamgeksi;
//echo "Aral�k: ".$araliktotalBE.".......";
if($aygelen=="OCAK"){
$aytoplamBE=0 ;
}
if($aygelen=="�UBAT"){
$aytoplamBE=$ocaktotalBE ;
}
if($aygelen=="MART"){
$aytoplamBE=$ocaktotalBE+$subattotalBE ;
}
if($aygelen=="N�SAN"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE ;
}
if($aygelen=="MAYIS"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE ;
}
if($aygelen=="HAZ�RAN"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE ;
}
if($aygelen=="A�USTOS"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE ;
}
if($aygelen=="EYL�L"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE+$agustostotalBE ;
}
if($aygelen=="EK�M"){
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
//echo "Ge�en aydan devreden bebek: ".$devredenbebek ;
$aysonubebekmevcudu=$devredenbebek+$Toplambuaybebekarti-$Toplambuaybebekeksi;
//echo "Ay Sonu bebek mevcudu: ".$aysonubebekmevcudu ;
//LOHUSA KISMI****************************************************************************************************************** 
//���NDE BULUNULAN AY TOPLAMLARI
$buayla = @mysql_query("select sum(v20) as buaylasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayla)) {
if($kayitlar['buaylasonuc']==""){
$Toplambuaylarti=0 ;
}else{
$Toplambuaylarti=$kayitlar['buaylasonuc'];
}
}
//echo $Toplambuaylarti;
$buayle = @mysql_query("select sum(v21+v22) as buaylesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayle)) {
if($kayitlar['buaylesonuc']==""){
$Toplambuayleksi=0 ;
}else{
$Toplambuayleksi=$kayitlar['buaylesonuc'];
}
}
//echo $Toplambuayleksi;
//DEV�R HESAPLAMALARI*************************************************************************************************************
$lohusaarti = @mysql_query("select sum(v20) as lsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaarti)) {
if($kayitlar['lsonucarti']==""){
$Toplamlarti=0 ;
}else{
$Toplamlarti=$kayitlar['lsonucarti'];
}
}
//echo $Toplamlarti;
$lohusaeksi = @mysql_query("select sum(v21+v22) as lsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaeksi)) {
if($kayitlar['lsonuceksi']==""){
$Toplamleksi=0 ;
}else{
$Toplamleksi=$kayitlar['lsonuceksi'];
}
}
//echo $Toplamleksi;
$devirl=$Toplamlarti-$Toplamleksi;
//echo "GE�EN YIL DEV�R:".$devirl;
// AY DENEMES�
//LOHUSALI�A GE�EN*************************************************************************************************************
//OCAK
$ocakLA = @mysql_query("select sum(v20) as ocaktopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakLA)) {
if($kayitlar['ocaktopLA']==""){
$ocaktotalLA=0 ;
}else{
$ocaktotalLA=$kayitlar['ocaktopLA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalLA.".......";
//�UBAT
$subatLA = @mysql_query("select sum(v20) as subattopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='�UBAT')") ;
while ($kayitlar = mysql_fetch_array($subatLA)) {
if($kayitlar['subattopLA']==""){
$subattotalLA=0 ;
}else{
$subattotalLA=$kayitlar['subattopLA'];
}
}
//echo $Toplamgeksi;
//echo "�ubat: ".$subattotalLA.".......";
//MART
$martLA = @mysql_query("select sum(v20) as marttopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martLA)) {
if($kayitlar['marttopLA']==""){
$marttotalLA=0 ;
}else{
$marttotalLA=$kayitlar['marttopLA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalLA.".......";
//N�SAN
$nisanLA = @mysql_query("select sum(v20) as nisantopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='N�SAN')") ;
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
$mayisLA = @mysql_query("select sum(v20) as mayistopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisLA)) {
if($kayitlar['mayistopLA']==""){
$mayistotalLA=0 ;
}else{
$mayistotalLA=$kayitlar['mayistopLA'];
}
}
//echo $Toplamgeksi;
//echo "May�s: ".$mayistotalLA.".......";
//HAZ�RAN
$haziranLA = @mysql_query("select sum(v20) as hazirantopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZ�RAN')") ;
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
$temmuzLA = @mysql_query("select sum(v20) as temmuztopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzLA)) {
if($kayitlar['temmuztopLA']==""){
$temmuztotalLA=0 ;
}else{
$temmuztotalLA=$kayitlar['temmuztopLA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalLA.".......";
//A�USTOS
$agustosLA = @mysql_query("select sum(v20) as agustostopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='A�USTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosLA)) {
if($kayitlar['agustostopLA']==""){
$agustostotalLA=0 ;
}else{
$agustostotalLA=$kayitlar['agustostopLA'];
}
}
//echo $Toplamgeksi;
//echo "A�ustos: ".$agustostotalLA.".......";
//EYL�L
$eylulLA = @mysql_query("select sum(v20) as eylultopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYL�L')") ;
while ($kayitlar = mysql_fetch_array($eylulLA)) {
if($kayitlar['eylultopLA']==""){
$eylultotalLA=0 ;
}else{
$eylultotalLA=$kayitlar['eylultopLA'];
}
}
//echo $Toplamgeksi;
//echo "Eyl�l: ".$eylultotalLA.".......";
//EK�M
$ekimLA = @mysql_query("select sum(v20) as ekimtopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EK�M')") ;
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
$kasimLA = @mysql_query("select sum(v20) as kasimtopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimLA)) {
if($kayitlar['kasimtopLA']==""){
$kasimtotalLA=0 ;
}else{
$kasimtotalLA=$kayitlar['kasimtopLA'];
}
}
//echo $Toplamgeksi;
//echo "Kas�m: ".$kasimtotalLA.".......";
//ARALIK
$aralikLA = @mysql_query("select sum(v20) as araliktopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikLA)) {
if($kayitlar['araliktopLA']==""){
$araliktotalLA=0 ;
}else{
$araliktotalLA=$kayitlar['araliktopLA'];
}
}
//echo $Toplamgeksi;
//echo "Aral�k: ".$araliktotalLA.".......";
if($aygelen=="OCAK"){
$aytoplamLA=0 ;
}
if($aygelen=="�UBAT"){
$aytoplamLA=$ocaktotalLA ;
}
if($aygelen=="MART"){
$aytoplamLA=$ocaktotalLA+$subattotalLA ;
}
if($aygelen=="N�SAN"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA ;
}
if($aygelen=="MAYIS"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA ;
}
if($aygelen=="HAZ�RAN"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA ;
}
if($aygelen=="A�USTOS"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA ;
}
if($aygelen=="EYL�L"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA ;
}
if($aygelen=="EK�M"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA ;
}
if($aygelen=="KASIM"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA+$ekimtotalLA ;
}
if($aygelen=="ARALIK"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA+$ekimtotalLA+$kasimtotalLA ;
}
//echo "Ay toplam: ".$aytoplamLA ;

// LOHUSA �IKAN*****************************************************************************************************************
//OCAK
$ocakLE = @mysql_query("select sum(v21+v22) as ocaktopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakLE)) {
if($kayitlar['ocaktopLE']==""){
$ocaktotalLE=0 ;
}else{
$ocaktotalLE=$kayitlar['ocaktopLE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGE.".......";
//�UBAT
$subatLE = @mysql_query("select sum(v21+v22) as subattopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='�UBAT')") ;
while ($kayitlar = mysql_fetch_array($subatLE)) {
if($kayitlar['subattopLE']==""){
$subattotalLE=0 ;
}else{
$subattotalLE=$kayitlar['subattopLE'];
}
}
//echo $Toplamgeksi;
//echo "�ubat: ".$subattotalLE.".......";
//MART
$martLE = @mysql_query("select sum(v21+v22) as marttopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martLE)) {
if($kayitlar['marttopLE']==""){
$marttotalLE=0 ;
}else{
$marttotalLE=$kayitlar['marttopLE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalLE.".......";
//N�SAN
$nisanLE = @mysql_query("select sum(v21+v22) as nisantopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='N�SAN')") ;
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
$mayisLE = @mysql_query("select sum(v21+v22) as mayistopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisLE)) {
if($kayitlar['mayistopLE']==""){
$mayistotalLE=0 ;
}else{
$mayistotalLE=$kayitlar['mayistopLE'];
}
}
//echo $Toplamgeksi;
//echo "May�s: ".$mayistotalLE.".......";
//HAZ�RAN
$haziranLE = @mysql_query("select sum(v21+v22) as hazirantopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZ�RAN')") ;
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
$temmuzLE = @mysql_query("select sum(v21+v22) as temmuztopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzLE)) {
if($kayitlar['temmuztopLE']==""){
$temmuztotalLE=0 ;
}else{
$temmuztotalLE=$kayitlar['temmuztopLE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalLE.".......";
//A�USTOS
$agustosLE = @mysql_query("select sum(v21+v22) as agustostopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='A�USTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosLE)) {
if($kayitlar['agustostopLE']==""){
$agustostotalLE=0 ;
}else{
$agustostotalLE=$kayitlar['agustostopLE'];
}
}
//echo $Toplamgeksi;
//echo "A�ustos: ".$agustostotalLE.".......";
//EYL�L
$eylulLE = @mysql_query("select sum(v21+v22) as eylultopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYL�L')") ;
while ($kayitlar = mysql_fetch_array($eylulLE)) {
if($kayitlar['eylultopLE']==""){
$eylultotalLE=0 ;
}else{
$eylultotalLE=$kayitlar['eylultopLE'];
}
}
//echo $Toplamgeksi;
//echo "Eyl�l: ".$eylultotalLE.".......";
//EK�M
$ekimLE = @mysql_query("select sum(v21+v22) as ekimtopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EK�M')") ;
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
$kasimLE = @mysql_query("select sum(v21+v22) as kasimtopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimLE)) {
if($kayitlar['kasimtopLE']==""){
$kasimtotalLE=0 ;
}else{
$kasimtotalLE=$kayitlar['kasimtopLE'];
}
}
//echo $Toplamgeksi;
//echo "Kas�m: ".$kasimtotalLE.".......";
//ARALIK
$aralikLE = @mysql_query("select sum(v21+v22) as araliktopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikLE)) {
if($kayitlar['araliktopLE']==""){
$araliktotalLE=0 ;
}else{
$araliktotalLE=$kayitlar['araliktopLE'];
}
}
//echo $Toplamgeksi;
//echo "Aral�k: ".$araliktotalLE.".......";
if($aygelen=="OCAK"){
$aytoplamLE=0 ;
}
if($aygelen=="�UBAT"){
$aytoplamLE=$ocaktotalLE ;
}
if($aygelen=="MART"){
$aytoplamLE=$ocaktotalLE+$subattotalLE ;
}
if($aygelen=="N�SAN"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE ;
}
if($aygelen=="MAYIS"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE ;
}
if($aygelen=="HAZ�RAN"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE ;
}
if($aygelen=="A�USTOS"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE ;
}
if($aygelen=="EYL�L"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE+$agustostotalLE ;
}
if($aygelen=="EK�M"){
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
//echo "Ge�en aydan devreden lohusa: ".$devredenlohusa ;
$aysonulohusamevcudu=$devredenlohusa+$Toplambuaylarti-$Toplambuayleksi;
//echo "Ay Sonu lohusa mevcudu: ".$aysonulohusamevcudu ;
//�OCUK KISMI********************************************************************************************************************
//���NDE BULUNULAN AY TOPLAMLARI
$buayca = @mysql_query("select sum(v30) as buaycasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayca)) {
if($kayitlar['buaycasonuc']==""){
$Toplambuaycocukarti=0 ;
}else{
$Toplambuaycocukarti=$kayitlar['buaycasonuc'];
}
}
//echo $Toplambuaycocukarti;
$buayce = @mysql_query("select sum(v31+v32) as buaycesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayce)) {
if($kayitlar['buaycesonuc']==""){
$Toplambuaycocukeksi=0 ;
}else{
$Toplambuaycocukeksi=$kayitlar['buaycesonuc'];
}
}
//echo $Toplambuaycocukeksi;
//DEV�R HESAPLAMALARI*************************************************************************************************************
$cocukarti = @mysql_query("select sum(v30) as csonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukarti)) {
if($kayitlar['csonucarti']==""){
$Toplamcarti=0 ;
}else{
$Toplamcarti=$kayitlar['csonucarti'];
}
}
//echo $Toplamcarti;
$cocukeksi = @mysql_query("select sum(v31+v32) as csonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukeksi)) {
if($kayitlar['csonuceksi']==""){
$Toplamceksi=0 ;
}else{
$Toplamceksi=$kayitlar['csonuceksi'];
}
}
//echo $Toplamceksi;
$devircocuk=$Toplamcarti-$Toplamceksi;
//echo "GE�EN YIL DEV�R:".$devircocuk;
// AY DENEMES�
//�OCUK GE�EN******************************************************************************************************************
//OCAK
$ocakCA = @mysql_query("select sum(v30) as ocaktopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakCA)) {
if($kayitlar['ocaktopCA']==""){
$ocaktotalCA=0 ;
}else{
$ocaktotalCA=$kayitlar['ocaktopCA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalCA.".......";
//�UBAT
$subatCA = @mysql_query("select sum(v30) as subattopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='�UBAT')") ;
while ($kayitlar = mysql_fetch_array($subatCA)) {
if($kayitlar['subattopCA']==""){
$subattotalCA=0 ;
}else{
$subattotalCA=$kayitlar['subattopCA'];
}
}
//echo $Toplamgeksi;
//echo "�ubat: ".$subattotalCA.".......";
//MART
$martCA = @mysql_query("select sum(v30) as marttopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martCA)) {
if($kayitlar['marttopCA']==""){
$marttotalCA=0 ;
}else{
$marttotalCA=$kayitlar['marttopCA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalCA.".......";
//N�SAN
$nisanCA = @mysql_query("select sum(v30) as nisantopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='N�SAN')") ;
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
$mayisCA = @mysql_query("select sum(v30) as mayistopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisCA)) {
if($kayitlar['mayistopCA']==""){
$mayistotalCA=0 ;
}else{
$mayistotalCA=$kayitlar['mayistopCA'];
}
}
//echo $Toplamgeksi;
//echo "May�s: ".$mayistotalCA.".......";
//HAZ�RAN
$haziranCA = @mysql_query("select sum(v30) as hazirantopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZ�RAN')") ;
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
$temmuzCA = @mysql_query("select sum(v30) as temmuztopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzCA)) {
if($kayitlar['temmuztopCA']==""){
$temmuztotalCA=0 ;
}else{
$temmuztotalCA=$kayitlar['temmuztopCA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalCA.".......";
//A�USTOS
$agustosCA = @mysql_query("select sum(v30) as agustostopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='A�USTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosCA)) {
if($kayitlar['agustostopCA']==""){
$agustostotalCA=0 ;
}else{
$agustostotalCA=$kayitlar['agustostopCA'];
}
}
//echo $Toplamgeksi;
//echo "A�ustos: ".$agustostotalCA.".......";
//EYL�L
$eylulCA = @mysql_query("select sum(v30) as eylultopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYL�L')") ;
while ($kayitlar = mysql_fetch_array($eylulCA)) {
if($kayitlar['eylultopCA']==""){
$eylultotalCA=0 ;
}else{
$eylultotalCA=$kayitlar['eylultopCA'];
}
}
//echo $Toplamgeksi;
//echo "Eyl�l: ".$eylultotalCA.".......";
//EK�M
$ekimCA = @mysql_query("select sum(v30) as ekimtopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EK�M')") ;
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
$kasimCA = @mysql_query("select sum(v30) as kasimtopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimCA)) {
if($kayitlar['kasimtopCA']==""){
$kasimtotalCA=0 ;
}else{
$kasimtotalCA=$kayitlar['kasimtopCA'];
}
}
//echo $Toplamgeksi;
//echo "Kas�m: ".$kasimtotalCA.".......";
//ARALIK
$aralikCA = @mysql_query("select sum(v30) as araliktopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikCA)) {
if($kayitlar['araliktopCA']==""){
$araliktotalCA=0 ;
}else{
$araliktotalCA=$kayitlar['araliktopCA'];
}
}
//echo $Toplamgeksi;
//echo "Aral�k: ".$araliktotalCA.".......";
if($aygelen=="OCAK"){
$aytoplamCA=0 ;
}
if($aygelen=="�UBAT"){
$aytoplamCA=$ocaktotalCA ;
}
if($aygelen=="MART"){
$aytoplamCA=$ocaktotalCA+$subattotalCA ;
}
if($aygelen=="N�SAN"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA ;
}
if($aygelen=="MAYIS"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA ;
}
if($aygelen=="HAZ�RAN"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA ;
}
if($aygelen=="A�USTOS"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA ;
}
if($aygelen=="EYL�L"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA ;
}
if($aygelen=="EK�M"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA ;
}
if($aygelen=="KASIM"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA+$ekimtotalCA ;
}
if($aygelen=="ARALIK"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA+$ekimtotalCA+$kasimtotalCA ;
}
//echo "Ay toplam: ".$aytoplamCA ;

// �OCUK �IKAN*****************************************************************************************************************
//OCAK
$ocakCE = @mysql_query("select sum(v31+v32) as ocaktopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakCE)) {
if($kayitlar['ocaktopCE']==""){
$ocaktotalCE=0 ;
}else{
$ocaktotalCE=$kayitlar['ocaktopCE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalCE.".......";
//�UBAT
$subatCE = @mysql_query("select sum(v31+v32) as subattopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='�UBAT')") ;
while ($kayitlar = mysql_fetch_array($subatCE)) {
if($kayitlar['subattopCE']==""){
$subattotalCE=0 ;
}else{
$subattotalCE=$kayitlar['subattopCE'];
}
}
//echo $Toplamgeksi;
//echo "�ubat: ".$subattotalCE.".......";
//MART
$martCE = @mysql_query("select sum(v31+v32) as marttopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martCE)) {
if($kayitlar['marttopCE']==""){
$marttotalCE=0 ;
}else{
$marttotalCE=$kayitlar['marttopCE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalCE.".......";
//N�SAN
$nisanCE = @mysql_query("select sum(v31+v32) as nisantopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='N�SAN')") ;
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
$mayisCE = @mysql_query("select sum(v31+v32) as mayistopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisCE)) {
if($kayitlar['mayistopCE']==""){
$mayistotalCE=0 ;
}else{
$mayistotalCE=$kayitlar['mayistopCE'];
}
}
//echo $Toplamgeksi;
//echo "May�s: ".$mayistotalCE.".......";
//HAZ�RAN
$haziranCE = @mysql_query("select sum(v31+v32) as hazirantopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='HAZ�RAN')") ;
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
$temmuzCE = @mysql_query("select sum(v31+v32) as temmuztopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzCE)) {
if($kayitlar['temmuztopCE']==""){
$temmuztotalCE=0 ;
}else{
$temmuztotalCE=$kayitlar['temmuztopCE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalCE.".......";
//A�USTOS
$agustosCE = @mysql_query("select sum(v31+v32) as agustostopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='A�USTOS')") ;
while ($kayitlar = mysql_fetch_array($agustosCE)) {
if($kayitlar['agustostopCE']==""){
$agustostotalCE=0 ;
}else{
$agustostotalCE=$kayitlar['agustostopCE'];
}
}
//echo $Toplamgeksi;
//echo "A�ustos: ".$agustostotalCE.".......";
//EYL�L
$eylulCE = @mysql_query("select sum(v31+v32) as eylultopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EYL�L')") ;
while ($kayitlar = mysql_fetch_array($eylulCE)) {
if($kayitlar['eylultopCE']==""){
$eylultotalCE=0 ;
}else{
$eylultotalCE=$kayitlar['eylultopCE'];
}
}
//echo $Toplamgeksi;
//echo "Eyl�l: ".$eylultotalCE.".......";
//EK�M
$ekimCE = @mysql_query("select sum(v31+v32) as ekimtopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='EK�M')") ;
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
$kasimCE = @mysql_query("select sum(v31+v32) as kasimtopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimCE)) {
if($kayitlar['kasimtopCE']==""){
$kasimtotalCE=0 ;
}else{
$kasimtotalCE=$kayitlar['kasimtopCE'];
}
}
//echo $Toplamgeksi;
//echo "Kas�m: ".$kasimtotalCE.".......";
//ARALIK
$aralikCE = @mysql_query("select sum(v31+v32) as araliktopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikCE)) {
if($kayitlar['araliktopCE']==""){
$araliktotalCE=0 ;
}else{
$araliktotalCE=$kayitlar['araliktopCE'];
}
}
//echo $Toplamgeksi;
//echo "Aral�k: ".$araliktotalCE.".......";
if($aygelen=="OCAK"){
$aytoplamCE=0 ;
}
if($aygelen=="�UBAT"){
$aytoplamCE=$ocaktotalCE ;
}
if($aygelen=="MART"){
$aytoplamCE=$ocaktotalCE+$subattotalCE ;
}
if($aygelen=="N�SAN"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE ;
}
if($aygelen=="MAYIS"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE ;
}
if($aygelen=="HAZ�RAN"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE ;
}
if($aygelen=="A�USTOS"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE ;
}
if($aygelen=="EYL�L"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE+$agustostotalCE ;
}
if($aygelen=="EK�M"){
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
//echo "Ge�en aydan devreden cocuk: ".$devredencocuk ;
$aysonucocukmevcudu=$devredencocuk+$Toplambuaycocukarti-$Toplambuaycocukeksi;
//echo "Ay Sonu cocuk mevcudu: ".$aysonucocukmevcudu ;*/
?>
