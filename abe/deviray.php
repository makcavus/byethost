<?php
$subat=iconv("UTF-8", "ISO-8859-9","ŞUBAT");
$nisan=iconv("UTF-8", "ISO-8859-9","NİSAN");
$haziran=iconv("UTF-8", "ISO-8859-9","HAZİRAN");
$agustos=iconv("UTF-8", "ISO-8859-9","AĞUSTOS");
$eylul=iconv("UTF-8", "ISO-8859-9","EYLÜL");
$ekim=iconv("UTF-8", "ISO-8859-9","EKİM");
if($ilcegelen==iconv("UTF-8", "ISO-8859-9","İlçe Seçiniz")){
//GEBE KISMI********************************************************************************************************************** 
//NDE BULUNULAN AY TOPLAMLARI
$buayga = @mysql_query("select sum(v17+v18) as buaygasonuc from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayga)) {
if($kayitlar['buaygasonuc']==""){
$Toplambuayarti=0 ;
}else{
$Toplambuayarti=$kayitlar['buaygasonuc'];
}
}
//echo $Toplambuayarti;
$buayge = @mysql_query("select sum(v19+v20+v21) as buaygesonuc from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayge)) {
if($kayitlar['buaygesonuc']==""){
$Toplambuayeksi=0 ;
}else{
$Toplambuayeksi=$kayitlar['buaygesonuc'];
}
}
//echo $Toplambuayeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$gebearti = @mysql_query("select sum(v17+v18) as gsonucarti from veri where(ilidi='$ilgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($gebearti)) {
if($kayitlar['gsonucarti']==""){
$Toplamgarti=0 ;
}else{
$Toplamgarti=$kayitlar['gsonucarti'];
}
}
//echo $Toplamgarti;
$gebeeksi = @mysql_query("select sum(v19+v20+v21) as gsonuceksi from veri where(ilidi='$ilgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($gebeeksi)) {
if($kayitlar['gsonuceksi']==""){
$Toplamgeksi=0 ;
}else{
$Toplamgeksi=$kayitlar['gsonuceksi'];
}
}
//echo $Toplamgeksi;
$devir=$Toplamgarti-$Toplamgeksi;
//echo "GEEN YIL DEVR:".$devir;
// AY DENEMES
//GEBE GEEN******************************************************************************************************************
//OCAK
$ocakGA = @mysql_query("select sum(v17+v18) as ocaktopGA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakGA)) {
if($kayitlar['ocaktopGA']==""){
$ocaktotalGA=0 ;
}else{
$ocaktotalGA=$kayitlar['ocaktopGA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGA.".......";
//UBAT
$subatGA = @mysql_query("select sum(v17+v18) as subattopGA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatGA)) {
if($kayitlar['subattopGA']==""){
$subattotalGA=0 ;
}else{
$subattotalGA=$kayitlar['subattopGA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalGA.".......";
//MART
$martGA = @mysql_query("select sum(v17+v18) as marttopGA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martGA)) {
if($kayitlar['marttopGA']==""){
$marttotalGA=0 ;
}else{
$marttotalGA=$kayitlar['marttopGA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalGA.".......";
//NSAN
$nisanGA = @mysql_query("select sum(v17+v18) as nisantopGA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisGA = @mysql_query("select sum(v17+v18) as mayistopGA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisGA)) {
if($kayitlar['mayistopGA']==""){
$mayistotalGA=0 ;
}else{
$mayistotalGA=$kayitlar['mayistopGA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalGA.".......";
//HAZRAN
$haziranGA = @mysql_query("select sum(v17+v18) as hazirantopGA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzGA = @mysql_query("select sum(v17+v18) as temmuztopGA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzGA)) {
if($kayitlar['temmuztopGA']==""){
$temmuztotalGA=0 ;
}else{
$temmuztotalGA=$kayitlar['temmuztopGA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalGA.".......";
//AUSTOS
$agustosGA = @mysql_query("select sum(v17+v18) as agustostopGA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosGA)) {
if($kayitlar['agustostopGA']==""){
$agustostotalGA=0 ;
}else{
$agustostotalGA=$kayitlar['agustostopGA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalGA.".......";
//EYLL
$eylulGA = @mysql_query("select sum(v17+v18) as eylultopGA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulGA)) {
if($kayitlar['eylultopGA']==""){
$eylultotalGA=0 ;
}else{
$eylultotalGA=$kayitlar['eylultopGA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalGA.".......";
//EKM
$ekimGA = @mysql_query("select sum(v17+v18) as ekimtopGA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimGA = @mysql_query("select sum(v17+v18) as kasimtopGA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimGA)) {
if($kayitlar['kasimtopGA']==""){
$kasimtotalGA=0 ;
}else{
$kasimtotalGA=$kayitlar['kasimtopGA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalGA.".......";
//ARALIK
$aralikGA = @mysql_query("select sum(v17+v18) as araliktopGA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikGA)) {
if($kayitlar['araliktopGA']==""){
$araliktotalGA=0 ;
}else{
$araliktotalGA=$kayitlar['araliktopGA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalGA.".......";
if($aygelen=="OCAK"){
$aytoplamGA=0 ;
}
if($aygelen=="$subat"){
$aytoplamGA=$ocaktotalGA ;
}
if($aygelen=="MART"){
$aytoplamGA=$ocaktotalGA+$subattotalGA ;
}
if($aygelen=="$nisan"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA ;
}
if($aygelen=="MAYIS"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA ;
}
if($aygelen=="$haziran"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA ;
}
if($aygelen=="$agustos"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA ;
}
if($aygelen=="$eylul"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA ;
}
if($aygelen=="$ekim"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA ;
}
if($aygelen=="KASIM"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA+$ekimtotalGA ;
}
if($aygelen=="ARALIK"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA+$ekimtotalGA+$kasimtotalGA ;
}
//echo "Ay toplam: ".$aytoplamGA ;

// GEBE IKAN*****************************************************************************************************************
//OCAK
$ocakGE = @mysql_query("select sum(v19+v20+v21) as ocaktopGE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakGE)) {
if($kayitlar['ocaktopGE']==""){
$ocaktotalGE=0 ;
}else{
$ocaktotalGE=$kayitlar['ocaktopGE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGE.".......";
//UBAT
$subatGE = @mysql_query("select sum(v19+v20+v21) as subattopGE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatGE)) {
if($kayitlar['subattopGE']==""){
$subattotalGE=0 ;
}else{
$subattotalGE=$kayitlar['subattopGE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalGE.".......";
//MART
$martGE = @mysql_query("select sum(v19+v20+v21) as marttopGE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martGE)) {
if($kayitlar['marttopGE']==""){
$marttotalGE=0 ;
}else{
$marttotalGE=$kayitlar['marttopGE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalGE.".......";
//NSAN
$nisanGE = @mysql_query("select sum(v19+v20+v21) as nisantopGE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisGE = @mysql_query("select sum(v19+v20+v21) as mayistopGE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisGE)) {
if($kayitlar['mayistopGE']==""){
$mayistotalGE=0 ;
}else{
$mayistotalGE=$kayitlar['mayistopGE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalGE.".......";
//HAZRAN
$haziranGE = @mysql_query("select sum(v19+v20+v21) as hazirantopGE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzGE = @mysql_query("select sum(v19+v20+v21) as temmuztopGE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzGE)) {
if($kayitlar['temmuztopGE']==""){
$temmuztotalGE=0 ;
}else{
$temmuztotalGE=$kayitlar['temmuztopGE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalGE.".......";
//AUSTOS
$agustosGE = @mysql_query("select sum(v19+v20+v21) as agustostopGE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosGE)) {
if($kayitlar['agustostopGE']==""){
$agustostotalGE=0 ;
}else{
$agustostotalGE=$kayitlar['agustostopGE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalGE.".......";
//EYLL
$eylulGE = @mysql_query("select sum(v19+v20+v21) as eylultopGE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulGE)) {
if($kayitlar['eylultopGE']==""){
$eylultotalGE=0 ;
}else{
$eylultotalGE=$kayitlar['eylultopGE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalGE.".......";
//EKM
$ekimGE = @mysql_query("select sum(v19+v20+v21) as ekimtopGE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimGE = @mysql_query("select sum(v19+v20+v21) as kasimtopGE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimGE)) {
if($kayitlar['kasimtopGE']==""){
$kasimtotalGE=0 ;
}else{
$kasimtotalGE=$kayitlar['kasimtopGE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalGE.".......";
//ARALIK
$aralikGE = @mysql_query("select sum(v19+v20+v21) as araliktopGE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikGE)) {
if($kayitlar['araliktopGE']==""){
$araliktotalGE=0 ;
}else{
$araliktotalGE=$kayitlar['araliktopGE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalGE.".......";
if($aygelen=="OCAK"){
$aytoplamGE=0 ;
}
if($aygelen=="$subat"){
$aytoplamGE=$ocaktotalGE ;
}
if($aygelen=="MART"){
$aytoplamGE=$ocaktotalGE+$subattotalGE ;
}
if($aygelen=="$nisan"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE ;
}
if($aygelen=="MAYIS"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE ;
}
if($aygelen=="$haziran"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE ;
}
if($aygelen=="$agustos"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE ;
}
if($aygelen=="$eylul"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE+$agustostotalGE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden gebe: ".$devredengebe ;
$aysonugebemevcudu=$devredengebe+$Toplambuayarti-$Toplambuayeksi;
//echo "Ay Sonu gebe mevcudu: ".$aysonugebemevcudu ;
//BEBEK KISMI******************************************************************************************************************************************************
//NDE BULUNULAN AY TOPLAMLARI
$buayba = @mysql_query("select sum(v22+v23) as buaybasonuc from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayba)) {
if($kayitlar['buaybasonuc']==""){
$Toplambuaybebekarti=0 ;
}else{
$Toplambuaybebekarti=$kayitlar['buaybasonuc'];
}
}
//echo $Toplambuaybebekarti;
$buaybe = @mysql_query("select sum(v24+v25+v26) as buaybesonuc from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buaybe)) {
if($kayitlar['buaybesonuc']==""){
$Toplambuaybebekeksi=0 ;
}else{
$Toplambuaybebekeksi=$kayitlar['buaybesonuc'];
}
}
//echo $Toplambuaybebekeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$bebekarti = @mysql_query("select sum(v22+v23) as bsonucarti from veri where(ilidi='$ilgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekarti)) {
if($kayitlar['bsonucarti']==""){
$Toplambarti=0 ;
}else{
$Toplambarti=$kayitlar['bsonucarti'];
}
}
//echo $Toplambarti;
$bebekeksi = @mysql_query("select sum(v24+v25+v26) as bsonuceksi from veri where(ilidi='$ilgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekeksi)) {
if($kayitlar['bsonuceksi']==""){
$Toplambeksi=0 ;
}else{
$Toplambeksi=$kayitlar['bsonuceksi'];
}
}
//echo $Toplambeksi;
$devirbebek=$Toplambarti-$Toplambeksi;
//echo "GEEN YIL DEVR:".$devirbebek;
// AY DENEMES
//GEBE GEEN******************************************************************************************************************
//OCAK
$ocakBA = @mysql_query("select sum(v22+v23) as ocaktopBA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakBA)) {
if($kayitlar['ocaktopBA']==""){
$ocaktotalBA=0 ;
}else{
$ocaktotalBA=$kayitlar['ocaktopBA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalBA.".......";
//UBAT
$subatBA = @mysql_query("select sum(v22+v23) as subattopBA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatBA)) {
if($kayitlar['subattopBA']==""){
$subattotalBA=0 ;
}else{
$subattotalBA=$kayitlar['subattopBA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalBA.".......";
//MART
$martBA = @mysql_query("select sum(v22+v23) as marttopBA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martBA)) {
if($kayitlar['marttopBA']==""){
$marttotalBA=0 ;
}else{
$marttotalBA=$kayitlar['marttopBA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalBA.".......";
//NSAN
$nisanBA = @mysql_query("select sum(v22+v23) as nisantopBA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisBA = @mysql_query("select sum(v22+v23) as mayistopBA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisBA)) {
if($kayitlar['mayistopBA']==""){
$mayistotalBA=0 ;
}else{
$mayistotalBA=$kayitlar['mayistopBA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalBA.".......";
//HAZRAN
$haziranBA = @mysql_query("select sum(v22+v23) as hazirantopBA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzBA = @mysql_query("select sum(v22+v23) as temmuztopBA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzBA)) {
if($kayitlar['temmuztopBA']==""){
$temmuztotalBA=0 ;
}else{
$temmuztotalBA=$kayitlar['temmuztopBA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalBA.".......";
//AUSTOS
$agustosBA = @mysql_query("select sum(v22+v23) as agustostopBA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosBA)) {
if($kayitlar['agustostopBA']==""){
$agustostotalBA=0 ;
}else{
$agustostotalBA=$kayitlar['agustostopBA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalBA.".......";
//EYLL
$eylulBA = @mysql_query("select sum(v22+v23) as eylultopBA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulBA)) {
if($kayitlar['eylultopBA']==""){
$eylultotalBA=0 ;
}else{
$eylultotalBA=$kayitlar['eylultopBA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalBA.".......";
//EKM
$ekimBA = @mysql_query("select sum(v22+v23) as ekimtopBA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimBA = @mysql_query("select sum(v22+v23) as kasimtopBA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimBA)) {
if($kayitlar['kasimtopBA']==""){
$kasimtotalBA=0 ;
}else{
$kasimtotalBA=$kayitlar['kasimtopBA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalBA.".......";
//ARALIK
$aralikBA = @mysql_query("select sum(v22+v23) as araliktopBA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikBA)) {
if($kayitlar['araliktopBA']==""){
$araliktotalBA=0 ;
}else{
$araliktotalBA=$kayitlar['araliktopBA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalBA.".......";
if($aygelen=="OCAK"){
$aytoplamBA=0 ;
}
if($aygelen=="$subat"){
$aytoplamBA=$ocaktotalBA ;
}
if($aygelen=="MART"){
$aytoplamBA=$ocaktotalBA+$subattotalBA ;
}
if($aygelen=="$nisan"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA ;
}
if($aygelen=="MAYIS"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA ;
}
if($aygelen=="$haziran"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA ;
}
if($aygelen=="$agustos"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA ;
}
if($aygelen=="$eylul"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA ;
}
if($aygelen=="$ekim"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA ;
}
if($aygelen=="KASIM"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA+$ekimtotalBA ;
}
if($aygelen=="ARALIK"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA+$ekimtotalBA+$kasimtotalBA ;
}
//echo "Ay toplam: ".$aytoplamBA ;

// GEBE IKAN*****************************************************************************************************************
//OCAK
$ocakBE = @mysql_query("select sum(v24+v25+v26) as ocaktopBE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakBE)) {
if($kayitlar['ocaktopBE']==""){
$ocaktotalBE=0 ;
}else{
$ocaktotalBE=$kayitlar['ocaktopBE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalBE.".......";
//UBAT
$subatBE = @mysql_query("select sum(v24+v25+v26) as subattopBE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatBE)) {
if($kayitlar['subattopBE']==""){
$subattotalBE=0 ;
}else{
$subattotalBE=$kayitlar['subattopBE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalBE.".......";
//MART
$martBE = @mysql_query("select sum(v24+v25+v26) as marttopBE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martBE)) {
if($kayitlar['marttopBE']==""){
$marttotalBE=0 ;
}else{
$marttotalBE=$kayitlar['marttopBE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalBE.".......";
//NSAN
$nisanBE = @mysql_query("select sum(v24+v25+v26) as nisantopBE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisBE = @mysql_query("select sum(v24+v25+v26) as mayistopBE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisBE)) {
if($kayitlar['mayistopBE']==""){
$mayistotalBE=0 ;
}else{
$mayistotalBE=$kayitlar['mayistopBE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalBE.".......";
//HAZRAN
$haziranBE = @mysql_query("select sum(v24+v25+v26) as hazirantopBE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzBE = @mysql_query("select sum(v24+v25+v26) as temmuztopBE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzBE)) {
if($kayitlar['temmuztopBE']==""){
$temmuztotalBE=0 ;
}else{
$temmuztotalBE=$kayitlar['temmuztopBE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalBE.".......";
//AUSTOS
$agustosBE = @mysql_query("select sum(v24+v25+v26) as agustostopBE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosBE)) {
if($kayitlar['agustostopBE']==""){
$agustostotalBE=0 ;
}else{
$agustostotalBE=$kayitlar['agustostopBE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalBE.".......";
//EYLL
$eylulBE = @mysql_query("select sum(v24+v25+v26) as eylultopBE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulBE)) {
if($kayitlar['eylultopBE']==""){
$eylultotalBE=0 ;
}else{
$eylultotalBE=$kayitlar['eylultopBE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalBE.".......";
//EKM
$ekimBE = @mysql_query("select sum(v24+v25+v26) as ekimtopBE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimBE = @mysql_query("select sum(v24+v25+v26) as kasimtopBE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimBE)) {
if($kayitlar['kasimtopBE']==""){
$kasimtotalBE=0 ;
}else{
$kasimtotalBE=$kayitlar['kasimtopBE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalBE.".......";
//ARALIK
$aralikBE = @mysql_query("select sum(v24+v25+v26) as araliktopBE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikBE)) {
if($kayitlar['araliktopBE']==""){
$araliktotalBE=0 ;
}else{
$araliktotalBE=$kayitlar['araliktopBE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalBE.".......";
if($aygelen=="OCAK"){
$aytoplamBE=0 ;
}
if($aygelen=="$subat"){
$aytoplamBE=$ocaktotalBE ;
}
if($aygelen=="MART"){
$aytoplamBE=$ocaktotalBE+$subattotalBE ;
}
if($aygelen=="$nisan"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE ;
}
if($aygelen=="MAYIS"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE ;
}
if($aygelen=="$haziran"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE ;
}
if($aygelen=="$agustos"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE ;
}
if($aygelen=="$eylul"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE+$agustostotalBE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden bebek: ".$devredenbebek ;
$aysonubebekmevcudu=$devredenbebek+$Toplambuaybebekarti-$Toplambuaybebekeksi;
//echo "Ay Sonu bebek mevcudu: ".$aysonubebekmevcudu ;
//LOHUSA KISMI****************************************************************************************************************** 
//NDE BULUNULAN AY TOPLAMLARI
$buayla = @mysql_query("select sum(v27+v28) as buaylasonuc from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayla)) {
if($kayitlar['buaylasonuc']==""){
$Toplambuaylarti=0 ;
}else{
$Toplambuaylarti=$kayitlar['buaylasonuc'];
}
}
//echo $Toplambuaylarti;
$buayle = @mysql_query("select sum(v29+v30+v31) as buaylesonuc from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayle)) {
if($kayitlar['buaylesonuc']==""){
$Toplambuayleksi=0 ;
}else{
$Toplambuayleksi=$kayitlar['buaylesonuc'];
}
}
//echo $Toplambuayleksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$lohusaarti = @mysql_query("select sum(v27+v28) as lsonucarti from veri where(ilidi='$ilgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaarti)) {
if($kayitlar['lsonucarti']==""){
$Toplamlarti=0 ;
}else{
$Toplamlarti=$kayitlar['lsonucarti'];
}
}
//echo $Toplamlarti;
$lohusaeksi = @mysql_query("select sum(v29+v30+v31) as lsonuceksi from veri where(ilidi='$ilgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaeksi)) {
if($kayitlar['lsonuceksi']==""){
$Toplamleksi=0 ;
}else{
$Toplamleksi=$kayitlar['lsonuceksi'];
}
}
//echo $Toplamleksi;
$devirl=$Toplamlarti-$Toplamleksi;
//echo "GEEN YIL DEVR:".$devirl;
// AY DENEMES
//LOHUSALIA GEEN*************************************************************************************************************
//OCAK
$ocakLA = @mysql_query("select sum(v27+v28) as ocaktopLA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakLA)) {
if($kayitlar['ocaktopLA']==""){
$ocaktotalLA=0 ;
}else{
$ocaktotalLA=$kayitlar['ocaktopLA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalLA.".......";
//UBAT
$subatLA = @mysql_query("select sum(v27+v28) as subattopLA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatLA)) {
if($kayitlar['subattopLA']==""){
$subattotalLA=0 ;
}else{
$subattotalLA=$kayitlar['subattopLA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalLA.".......";
//MART
$martLA = @mysql_query("select sum(v27+v28) as marttopLA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martLA)) {
if($kayitlar['marttopLA']==""){
$marttotalLA=0 ;
}else{
$marttotalLA=$kayitlar['marttopLA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalLA.".......";
//NSAN
$nisanLA = @mysql_query("select sum(v27+v28) as nisantopLA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisLA = @mysql_query("select sum(v27+v28) as mayistopLA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisLA)) {
if($kayitlar['mayistopLA']==""){
$mayistotalLA=0 ;
}else{
$mayistotalLA=$kayitlar['mayistopLA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalLA.".......";
//HAZRAN
$haziranLA = @mysql_query("select sum(v27+v28) as hazirantopLA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzLA = @mysql_query("select sum(v27+v28) as temmuztopLA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzLA)) {
if($kayitlar['temmuztopLA']==""){
$temmuztotalLA=0 ;
}else{
$temmuztotalLA=$kayitlar['temmuztopLA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalLA.".......";
//AUSTOS
$agustosLA = @mysql_query("select sum(v27+v28) as agustostopLA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosLA)) {
if($kayitlar['agustostopLA']==""){
$agustostotalLA=0 ;
}else{
$agustostotalLA=$kayitlar['agustostopLA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalLA.".......";
//EYLL
$eylulLA = @mysql_query("select sum(v27+v28) as eylultopLA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulLA)) {
if($kayitlar['eylultopLA']==""){
$eylultotalLA=0 ;
}else{
$eylultotalLA=$kayitlar['eylultopLA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalLA.".......";
//EKM
$ekimLA = @mysql_query("select sum(v27+v28) as ekimtopLA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimLA = @mysql_query("select sum(v27+v28) as kasimtopLA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimLA)) {
if($kayitlar['kasimtopLA']==""){
$kasimtotalLA=0 ;
}else{
$kasimtotalLA=$kayitlar['kasimtopLA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalLA.".......";
//ARALIK
$aralikLA = @mysql_query("select sum(v27+v28) as araliktopLA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikLA)) {
if($kayitlar['araliktopLA']==""){
$araliktotalLA=0 ;
}else{
$araliktotalLA=$kayitlar['araliktopLA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalLA.".......";
if($aygelen=="OCAK"){
$aytoplamLA=0 ;
}
if($aygelen=="$subat"){
$aytoplamLA=$ocaktotalLA ;
}
if($aygelen=="MART"){
$aytoplamLA=$ocaktotalLA+$subattotalLA ;
}
if($aygelen=="$nisan"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA ;
}
if($aygelen=="MAYIS"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA ;
}
if($aygelen=="$haziran"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA ;
}
if($aygelen=="$agustos"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA ;
}
if($aygelen=="$eylul"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA ;
}
if($aygelen=="$ekim"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA ;
}
if($aygelen=="KASIM"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA+$ekimtotalLA ;
}
if($aygelen=="ARALIK"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA+$ekimtotalLA+$kasimtotalLA ;
}
//echo "Ay toplam: ".$aytoplamLA ;

// LOHUSA IKAN*****************************************************************************************************************
//OCAK
$ocakLE = @mysql_query("select sum(v29+v30+v31) as ocaktopLE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakLE)) {
if($kayitlar['ocaktopLE']==""){
$ocaktotalLE=0 ;
}else{
$ocaktotalLE=$kayitlar['ocaktopLE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGE.".......";
//UBAT
$subatLE = @mysql_query("select sum(v29+v30+v31) as subattopLE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatLE)) {
if($kayitlar['subattopLE']==""){
$subattotalLE=0 ;
}else{
$subattotalLE=$kayitlar['subattopLE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalLE.".......";
//MART
$martLE = @mysql_query("select sum(v29+v30+v31) as marttopLE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martLE)) {
if($kayitlar['marttopLE']==""){
$marttotalLE=0 ;
}else{
$marttotalLE=$kayitlar['marttopLE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalLE.".......";
//NSAN
$nisanLE = @mysql_query("select sum(v29+v30+v31) as nisantopLE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisLE = @mysql_query("select sum(v29+v30+v31) as mayistopLE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisLE)) {
if($kayitlar['mayistopLE']==""){
$mayistotalLE=0 ;
}else{
$mayistotalLE=$kayitlar['mayistopLE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalLE.".......";
//HAZRAN
$haziranLE = @mysql_query("select sum(v29+v30+v31) as hazirantopLE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzLE = @mysql_query("select sum(v29+v30+v31) as temmuztopLE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzLE)) {
if($kayitlar['temmuztopLE']==""){
$temmuztotalLE=0 ;
}else{
$temmuztotalLE=$kayitlar['temmuztopLE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalLE.".......";
//AUSTOS
$agustosLE = @mysql_query("select sum(v29+v30+v31) as agustostopLE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosLE)) {
if($kayitlar['agustostopLE']==""){
$agustostotalLE=0 ;
}else{
$agustostotalLE=$kayitlar['agustostopLE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalLE.".......";
//EYLL
$eylulLE = @mysql_query("select sum(v29+v30+v31) as eylultopLE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulLE)) {
if($kayitlar['eylultopLE']==""){
$eylultotalLE=0 ;
}else{
$eylultotalLE=$kayitlar['eylultopLE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalLE.".......";
//EKM
$ekimLE = @mysql_query("select sum(v29+v30+v31) as ekimtopLE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimLE = @mysql_query("select sum(v29+v30+v31) as kasimtopLE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimLE)) {
if($kayitlar['kasimtopLE']==""){
$kasimtotalLE=0 ;
}else{
$kasimtotalLE=$kayitlar['kasimtopLE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalLE.".......";
//ARALIK
$aralikLE = @mysql_query("select sum(v29+v30+v31) as araliktopLE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikLE)) {
if($kayitlar['araliktopLE']==""){
$araliktotalLE=0 ;
}else{
$araliktotalLE=$kayitlar['araliktopLE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalLE.".......";
if($aygelen=="OCAK"){
$aytoplamLE=0 ;
}
if($aygelen=="$subat"){
$aytoplamLE=$ocaktotalLE ;
}
if($aygelen=="MART"){
$aytoplamLE=$ocaktotalLE+$subattotalLE ;
}
if($aygelen=="$nisan"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE ;
}
if($aygelen=="MAYIS"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE ;
}
if($aygelen=="$haziran"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE ;
}
if($aygelen=="$agustos"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE ;
}
if($aygelen=="$eylul"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE+$agustostotalLE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden lohusa: ".$devredenlohusa ;
$aysonulohusamevcudu=$devredenlohusa+$Toplambuaylarti-$Toplambuayleksi;
//echo "Ay Sonu lohusa mevcudu: ".$aysonulohusamevcudu ;
//OCUK KISMI********************************************************************************************************************
//NDE BULUNULAN AY TOPLAMLARI
$buayca = @mysql_query("select sum(v32+v33) as buaycasonuc from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayca)) {
if($kayitlar['buaycasonuc']==""){
$Toplambuaycocukarti=0 ;
}else{
$Toplambuaycocukarti=$kayitlar['buaycasonuc'];
}
}
//echo $Toplambuaycocukarti;
$buayce = @mysql_query("select sum(v34+v35+v36) as buaycesonuc from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayce)) {
if($kayitlar['buaycesonuc']==""){
$Toplambuaycocukeksi=0 ;
}else{
$Toplambuaycocukeksi=$kayitlar['buaycesonuc'];
}
}
//echo $Toplambuaycocukeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$cocukarti = @mysql_query("select sum(v32+v33) as csonucarti from veri where(ilidi='$ilgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukarti)) {
if($kayitlar['csonucarti']==""){
$Toplamcarti=0 ;
}else{
$Toplamcarti=$kayitlar['csonucarti'];
}
}
//echo $Toplamcarti;
$cocukeksi = @mysql_query("select sum(v34+v35+v36) as csonuceksi from veri where(ilidi='$ilgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukeksi)) {
if($kayitlar['csonuceksi']==""){
$Toplamceksi=0 ;
}else{
$Toplamceksi=$kayitlar['csonuceksi'];
}
}
//echo $Toplamceksi;
$devircocuk=$Toplamcarti-$Toplamceksi;
//echo "GEEN YIL DEVR:".$devircocuk;
// AY DENEMES
//OCUK GEEN******************************************************************************************************************
//OCAK
$ocakCA = @mysql_query("select sum(v32+v33) as ocaktopCA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakCA)) {
if($kayitlar['ocaktopCA']==""){
$ocaktotalCA=0 ;
}else{
$ocaktotalCA=$kayitlar['ocaktopCA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalCA.".......";
//UBAT
$subatCA = @mysql_query("select sum(v32+v33) as subattopCA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatCA)) {
if($kayitlar['subattopCA']==""){
$subattotalCA=0 ;
}else{
$subattotalCA=$kayitlar['subattopCA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalCA.".......";
//MART
$martCA = @mysql_query("select sum(v32+v33) as marttopCA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martCA)) {
if($kayitlar['marttopCA']==""){
$marttotalCA=0 ;
}else{
$marttotalCA=$kayitlar['marttopCA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalCA.".......";
//NSAN
$nisanCA = @mysql_query("select sum(v32+v33) as nisantopCA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisCA = @mysql_query("select sum(v32+v33) as mayistopCA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisCA)) {
if($kayitlar['mayistopCA']==""){
$mayistotalCA=0 ;
}else{
$mayistotalCA=$kayitlar['mayistopCA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalCA.".......";
//HAZRAN
$haziranCA = @mysql_query("select sum(v32+v33) as hazirantopCA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzCA = @mysql_query("select sum(v32+v33) as temmuztopCA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzCA)) {
if($kayitlar['temmuztopCA']==""){
$temmuztotalCA=0 ;
}else{
$temmuztotalCA=$kayitlar['temmuztopCA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalCA.".......";
//AUSTOS
$agustosCA = @mysql_query("select sum(v32+v33) as agustostopCA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosCA)) {
if($kayitlar['agustostopCA']==""){
$agustostotalCA=0 ;
}else{
$agustostotalCA=$kayitlar['agustostopCA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalCA.".......";
//EYLL
$eylulCA = @mysql_query("select sum(v32+v33) as eylultopCA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulCA)) {
if($kayitlar['eylultopCA']==""){
$eylultotalCA=0 ;
}else{
$eylultotalCA=$kayitlar['eylultopCA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalCA.".......";
//EKM
$ekimCA = @mysql_query("select sum(v32+v33) as ekimtopCA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimCA = @mysql_query("select sum(v32+v33) as kasimtopCA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimCA)) {
if($kayitlar['kasimtopCA']==""){
$kasimtotalCA=0 ;
}else{
$kasimtotalCA=$kayitlar['kasimtopCA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalCA.".......";
//ARALIK
$aralikCA = @mysql_query("select sum(v32+v33) as araliktopCA from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikCA)) {
if($kayitlar['araliktopCA']==""){
$araliktotalCA=0 ;
}else{
$araliktotalCA=$kayitlar['araliktopCA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalCA.".......";
if($aygelen=="OCAK"){
$aytoplamCA=0 ;
}
if($aygelen=="$subat"){
$aytoplamCA=$ocaktotalCA ;
}
if($aygelen=="MART"){
$aytoplamCA=$ocaktotalCA+$subattotalCA ;
}
if($aygelen=="$nisan"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA ;
}
if($aygelen=="MAYIS"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA ;
}
if($aygelen=="$haziran"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA ;
}
if($aygelen=="$agustos"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA ;
}
if($aygelen=="$eylul"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA ;
}
if($aygelen=="$ekim"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA ;
}
if($aygelen=="KASIM"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA+$ekimtotalCA ;
}
if($aygelen=="ARALIK"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA+$ekimtotalCA+$kasimtotalCA ;
}
//echo "Ay toplam: ".$aytoplamCA ;

// OCUK IKAN*****************************************************************************************************************
//OCAK
$ocakCE = @mysql_query("select sum(v34+v35+v36) as ocaktopCE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakCE)) {
if($kayitlar['ocaktopCE']==""){
$ocaktotalCE=0 ;
}else{
$ocaktotalCE=$kayitlar['ocaktopCE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalCE.".......";
//UBAT
$subatCE = @mysql_query("select sum(v34+v35+v36) as subattopCE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatCE)) {
if($kayitlar['subattopCE']==""){
$subattotalCE=0 ;
}else{
$subattotalCE=$kayitlar['subattopCE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalCE.".......";
//MART
$martCE = @mysql_query("select sum(v34+v35+v36) as marttopCE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martCE)) {
if($kayitlar['marttopCE']==""){
$marttotalCE=0 ;
}else{
$marttotalCE=$kayitlar['marttopCE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalCE.".......";
//NSAN
$nisanCE = @mysql_query("select sum(v34+v35+v36) as nisantopCE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisCE = @mysql_query("select sum(v34+v35+v36) as mayistopCE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisCE)) {
if($kayitlar['mayistopCE']==""){
$mayistotalCE=0 ;
}else{
$mayistotalCE=$kayitlar['mayistopCE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalCE.".......";
//HAZRAN
$haziranCE = @mysql_query("select sum(v34+v35+v36) as hazirantopCE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzCE = @mysql_query("select sum(v34+v35+v36) as temmuztopCE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzCE)) {
if($kayitlar['temmuztopCE']==""){
$temmuztotalCE=0 ;
}else{
$temmuztotalCE=$kayitlar['temmuztopCE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalCE.".......";
//AUSTOS
$agustosCE = @mysql_query("select sum(v34+v35+v36) as agustostopCE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosCE)) {
if($kayitlar['agustostopCE']==""){
$agustostotalCE=0 ;
}else{
$agustostotalCE=$kayitlar['agustostopCE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalCE.".......";
//EYLL
$eylulCE = @mysql_query("select sum(v34+v35+v36) as eylultopCE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulCE)) {
if($kayitlar['eylultopCE']==""){
$eylultotalCE=0 ;
}else{
$eylultotalCE=$kayitlar['eylultopCE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalCE.".......";
//EKM
$ekimCE = @mysql_query("select sum(v34+v35+v36) as ekimtopCE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimCE = @mysql_query("select sum(v34+v35+v36) as kasimtopCE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimCE)) {
if($kayitlar['kasimtopCE']==""){
$kasimtotalCE=0 ;
}else{
$kasimtotalCE=$kayitlar['kasimtopCE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalCE.".......";
//ARALIK
$aralikCE = @mysql_query("select sum(v34+v35+v36) as araliktopCE from veri where(ilidi='$ilgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikCE)) {
if($kayitlar['araliktopCE']==""){
$araliktotalCE=0 ;
}else{
$araliktotalCE=$kayitlar['araliktopCE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalCE.".......";
if($aygelen=="OCAK"){
$aytoplamCE=0 ;
}
if($aygelen=="$subat"){
$aytoplamCE=$ocaktotalCE ;
}
if($aygelen=="MART"){
$aytoplamCE=$ocaktotalCE+$subattotalCE ;
}
if($aygelen=="$nisan"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE ;
}
if($aygelen=="MAYIS"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE ;
}
if($aygelen=="$haziran"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE ;
}
if($aygelen=="$agustos"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE ;
}
if($aygelen=="$eylul"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE+$agustostotalCE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden cocuk: ".$devredencocuk ;
$aysonucocukmevcudu=$devredencocuk+$Toplambuaycocukarti-$Toplambuaycocukeksi;
//echo "Ay Sonu cocuk mevcudu: ".$aysonucocukmevcudu ;
//IMPLANT KISMI********************************************************************************************************************
//NDE BULUNULAN AY TOPLAMLARI
$buayxa = @mysql_query("select sum(v37+v38) as buayxasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayxa)) {
if($kayitlar['buayxasonuc']==""){
$Toplambuayimparti=0 ;
}else{
$Toplambuayimparti=$kayitlar['buayxasonuc'];
}
}
//echo $Toplambuayimparti;
$buayxe = @mysql_query("select sum(v39+v40+v41) as buayxesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayxe)) {
if($kayitlar['buayxesonuc']==""){
$Toplambuayimpeksi=0 ;
}else{
$Toplambuayimpeksi=$kayitlar['buayxesonuc'];
}
}
//echo $Toplambuayimpeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$imparti = @mysql_query("select sum(v37+v38) as xsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($imparti)) {
if($kayitlar['xsonucarti']==""){
$Toplamxarti=0 ;
}else{
$Toplamxarti=$kayitlar['xsonucarti'];
}
}
//echo $Toplamxarti;
$impeksi = @mysql_query("select sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($impeksi)) {
if($kayitlar['xsonuceksi']==""){
$Toplamxeksi=0 ;
}else{
$Toplamxeksi=$kayitlar['xsonuceksi'];
}
}
//echo $Toplamxeksi;
$devirimp=$Toplamxarti-$Toplamxeksi;
//echo "GEEN YIL DEVR:".$devirimp;
// AY DENEMES
//OCUK GEEN******************************************************************************************************************
//OCAK
$ocakXA = @mysql_query("select sum(v37+v38) as ocaktopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakXA)) {
if($kayitlar['ocaktopXA']==""){
$ocaktotalXA=0 ;
}else{
$ocaktotalXA=$kayitlar['ocaktopXA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalXA.".......";
//UBAT
$subatXA = @mysql_query("select sum(v37+v38) as subattopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatXA)) {
if($kayitlar['subattopXA']==""){
$subattotalXA=0 ;
}else{
$subattotalXA=$kayitlar['subattopXA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalXA.".......";
//MART
$martXA = @mysql_query("select sum(v37+v38) as marttopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martXA)) {
if($kayitlar['marttopXA']==""){
$marttotalXA=0 ;
}else{
$marttotalXA=$kayitlar['marttopXA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalXA.".......";
//NSAN
$nisanXA = @mysql_query("select sum(v37+v38) as nisantopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
while ($kayitlar = mysql_fetch_array($nisanXA)) {
if($kayitlar['nisantopXA']==""){
$nisantotalXA=0 ;
}else{
$nisantotalXA=$kayitlar['nisantopXA'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalXA.".......";
//MAYIS
$mayisXA = @mysql_query("select sum(v37+v38) as mayistopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisXA)) {
if($kayitlar['mayistopXA']==""){
$mayistotalXA=0 ;
}else{
$mayistotalXA=$kayitlar['mayistopXA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalXA.".......";
//HAZRAN
$haziranXA = @mysql_query("select sum(v37+v38) as hazirantopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
while ($kayitlar = mysql_fetch_array($haziranXA)) {
if($kayitlar['hazirantopXA']==""){
$hazirantotalXA=0 ;
}else{
$hazirantotalXA=$kayitlar['hazirantopXA'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalXA.".......";
//TEMMUZ
$temmuzXA = @mysql_query("select sum(v37+v38) as temmuztopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzXA)) {
if($kayitlar['temmuztopXA']==""){
$temmuztotalXA=0 ;
}else{
$temmuztotalXA=$kayitlar['temmuztopXA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalXA.".......";
//AUSTOS
$agustosXA = @mysql_query("select sum(v37+v38) as agustostopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosXA)) {
if($kayitlar['agustostopXA']==""){
$agustostotalXA=0 ;
}else{
$agustostotalXA=$kayitlar['agustostopXA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalXA.".......";
//EYLL
$eylulXA = @mysql_query("select sum(v37+v38) as eylultopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulXA)) {
if($kayitlar['eylultopXA']==""){
$eylultotalXA=0 ;
}else{
$eylultotalXA=$kayitlar['eylultopXA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalXA.".......";
//EKM
$ekimXA = @mysql_query("select sum(v37+v38) as ekimtopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
while ($kayitlar = mysql_fetch_array($ekimXA)) {
if($kayitlar['ekimtopXA']==""){
$ekimtotalXA=0 ;
}else{
$ekimtotalXA=$kayitlar['ekimtopXA'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalXA.".......";
//KASIM
$kasimXA = @mysql_query("select sum(v37+v38) as kasimtopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimXA)) {
if($kayitlar['kasimtopXA']==""){
$kasimtotalXA=0 ;
}else{
$kasimtotalXA=$kayitlar['kasimtopXA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalXA.".......";
//ARALIK
$aralikXA = @mysql_query("select sum(v37+v38) as araliktopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikXA)) {
if($kayitlar['araliktopXA']==""){
$araliktotalXA=0 ;
}else{
$araliktotalXA=$kayitlar['araliktopXA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalXA.".......";
if($aygelen=="OCAK"){
$aytoplamXA=0 ;
}
if($aygelen=="$subat"){
$aytoplamXA=$ocaktotalXA ;
}
if($aygelen=="MART"){
$aytoplamXA=$ocaktotalXA+$subattotalXA ;
}
if($aygelen=="$nisan"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA ;
}
if($aygelen=="MAYIS"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA ;
}
if($aygelen=="$haziran"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA ;
}
if($aygelen=="$agustos"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA ;
}
if($aygelen=="$eylul"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA ;
}
if($aygelen=="$ekim"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA+$eylultotalXA ;
}
if($aygelen=="KASIM"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA+$eylultotalXA+$ekimtotalXA ;
}
if($aygelen=="ARALIK"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA+$eylultotalXA+$ekimtotalXA+$kasimtotalXA ;
}
//echo "Ay toplam: ".$aytoplamXA ;

// OCUK IKAN*****************************************************************************************************************
//OCAK
$ocakXE = @mysql_query("select sum(v39+v40+v41) as ocaktopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakXE)) {
if($kayitlar['ocaktopXE']==""){
$ocaktotalXE=0 ;
}else{
$ocaktotalXE=$kayitlar['ocaktopXE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalXE.".......";
//UBAT
$subatXE = @mysql_query("select sum(v39+v40+v41) as subattopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatXE)) {
if($kayitlar['subattopXE']==""){
$subattotalXE=0 ;
}else{
$subattotalXE=$kayitlar['subattopXE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalXE.".......";
//MART
$martXE = @mysql_query("select sum(v39+v40+v41) as marttopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martXE)) {
if($kayitlar['marttopXE']==""){
$marttotalXE=0 ;
}else{
$marttotalXE=$kayitlar['marttopXE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalXE.".......";
//NSAN
$nisanXE = @mysql_query("select sum(v39+v40+v41) as nisantopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
while ($kayitlar = mysql_fetch_array($nisanXE)) {
if($kayitlar['nisantopXE']==""){
$nisantotalXE=0 ;
}else{
$nisantotalXE=$kayitlar['nisantopXE'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalXE.".......";
//MAYIS
$mayisXE = @mysql_query("select sum(v39+v40+v41) as mayistopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisXE)) {
if($kayitlar['mayistopXE']==""){
$mayistotalXE=0 ;
}else{
$mayistotalXE=$kayitlar['mayistopXE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalXE.".......";
//HAZRAN
$haziranXE = @mysql_query("select sum(v39+v40+v41) as hazirantopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
while ($kayitlar = mysql_fetch_array($haziranXE)) {
if($kayitlar['hazirantopXE']==""){
$hazirantotalXE=0 ;
}else{
$hazirantotalXE=$kayitlar['hazirantopXE'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalXE.".......";
//TEMMUZ
$temmuzXE = @mysql_query("select sum(v39+v40+v41) as temmuztopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzXE)) {
if($kayitlar['temmuztopXE']==""){
$temmuztotalXE=0 ;
}else{
$temmuztotalXE=$kayitlar['temmuztopXE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalXE.".......";
//AUSTOS
$agustosXE = @mysql_query("select sum(v39+v40+v41) as agustostopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosXE)) {
if($kayitlar['agustostopXE']==""){
$agustostotalXE=0 ;
}else{
$agustostotalXE=$kayitlar['agustostopXE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalXE.".......";
//EYLL
$eylulXE = @mysql_query("select sum(v39+v40+v41) as eylultopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulXE)) {
if($kayitlar['eylultopXE']==""){
$eylultotalXE=0 ;
}else{
$eylultotalXE=$kayitlar['eylultopXE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalXE.".......";
//EKM
$ekimXE = @mysql_query("select sum(v39+v40+v41) as ekimtopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
while ($kayitlar = mysql_fetch_array($ekimXE)) {
if($kayitlar['ekimtopXE']==""){
$ekimtotalXE=0 ;
}else{
$ekimtotalXE=$kayitlar['ekimtopXE'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalXE.".......";
//KASIM
$kasimXE = @mysql_query("select sum(v39+v40+v41) as kasimtopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimXE)) {
if($kayitlar['kasimtopXE']==""){
$kasimtotalXE=0 ;
}else{
$kasimtotalXE=$kayitlar['kasimtopXE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalXE.".......";
//ARALIK
$aralikXE = @mysql_query("select sum(v39+v40+v41) as araliktopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikXE)) {
if($kayitlar['araliktopXE']==""){
$araliktotalXE=0 ;
}else{
$araliktotalXE=$kayitlar['araliktopXE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalXE.".......";
if($aygelen=="OCAK"){
$aytoplamXE=0 ;
}
if($aygelen=="$subat"){
$aytoplamXE=$ocaktotalXE ;
}
if($aygelen=="MART"){
$aytoplamXE=$ocaktotalXE+$subattotalXE ;
}
if($aygelen=="$nisan"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE ;
}
if($aygelen=="MAYIS"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE ;
}
if($aygelen=="$haziran"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE ;
}
if($aygelen=="$agustos"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE ;
}
if($aygelen=="$eylul"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE ;
}
if($aygelen=="$ekim"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE+$eylultotalXE ;
}
if($aygelen=="KASIM"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE+$eylultotalXE+$ekimtotalXE ;
}
if($aygelen=="ARALIK"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE+$eylultotalXE+$ekimtotalXE+$kasimtotalXE ;
}
//echo "Ay toplam: ".$aytoplamXE ;
$xtoplam=$aytoplamXA-$aytoplamXE ;
//echo "GENEL TOPLAM: ".$xtoplam ;
$devredenimp=$devirimp+$aytoplamXA-$aytoplamXE ;
//echo "Geen aydan devreden implant: ".$devredenimp ;
$aysonuimpmevcudu=$devredenimp+$Toplambuayimparti-$Toplambuayimpeksi;
//echo "Ay Sonu implant mevcudu: ".$aysonuimpmevcudu ;
}elseif($ocgelen==iconv("UTF-8", "ISO-8859-9","Aile Hekimini Seçiniz")){
//GEBE KISMI********************************************************************************************************************** 
//NDE BULUNULAN AY TOPLAMLARI
$buayga = @mysql_query("select sum(v17+v18) as buaygasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayga)) {
if($kayitlar['buaygasonuc']==""){
$Toplambuayarti=0 ;
}else{
$Toplambuayarti=$kayitlar['buaygasonuc'];
}
}
//echo $Toplambuayarti;
$buayge = @mysql_query("select sum(v19+v20+v21) as buaygesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayge)) {
if($kayitlar['buaygesonuc']==""){
$Toplambuayeksi=0 ;
}else{
$Toplambuayeksi=$kayitlar['buaygesonuc'];
}
}
//echo $Toplambuayeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$gebearti = @mysql_query("select sum(v17+v18) as gsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($gebearti)) {
if($kayitlar['gsonucarti']==""){
$Toplamgarti=0 ;
}else{
$Toplamgarti=$kayitlar['gsonucarti'];
}
}
//echo $Toplamgarti;
$gebeeksi = @mysql_query("select sum(v19+v20+v21) as gsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($gebeeksi)) {
if($kayitlar['gsonuceksi']==""){
$Toplamgeksi=0 ;
}else{
$Toplamgeksi=$kayitlar['gsonuceksi'];
}
}
//echo $Toplamgeksi;
$devir=$Toplamgarti-$Toplamgeksi;
//echo "GEEN YIL DEVR:".$devir;
// AY DENEMES
//GEBE GEEN******************************************************************************************************************
//OCAK
$ocakGA = @mysql_query("select sum(v17+v18) as ocaktopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakGA)) {
if($kayitlar['ocaktopGA']==""){
$ocaktotalGA=0 ;
}else{
$ocaktotalGA=$kayitlar['ocaktopGA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGA.".......";
//UBAT
$subatGA = @mysql_query("select sum(v17+v18) as subattopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatGA)) {
if($kayitlar['subattopGA']==""){
$subattotalGA=0 ;
}else{
$subattotalGA=$kayitlar['subattopGA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalGA.".......";
//MART
$martGA = @mysql_query("select sum(v17+v18) as marttopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martGA)) {
if($kayitlar['marttopGA']==""){
$marttotalGA=0 ;
}else{
$marttotalGA=$kayitlar['marttopGA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalGA.".......";
//NSAN
$nisanGA = @mysql_query("select sum(v17+v18) as nisantopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisGA = @mysql_query("select sum(v17+v18) as mayistopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisGA)) {
if($kayitlar['mayistopGA']==""){
$mayistotalGA=0 ;
}else{
$mayistotalGA=$kayitlar['mayistopGA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalGA.".......";
//HAZRAN
$haziranGA = @mysql_query("select sum(v17+v18) as hazirantopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzGA = @mysql_query("select sum(v17+v18) as temmuztopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzGA)) {
if($kayitlar['temmuztopGA']==""){
$temmuztotalGA=0 ;
}else{
$temmuztotalGA=$kayitlar['temmuztopGA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalGA.".......";
//AUSTOS
$agustosGA = @mysql_query("select sum(v17+v18) as agustostopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosGA)) {
if($kayitlar['agustostopGA']==""){
$agustostotalGA=0 ;
}else{
$agustostotalGA=$kayitlar['agustostopGA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalGA.".......";
//EYLL
$eylulGA = @mysql_query("select sum(v17+v18) as eylultopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulGA)) {
if($kayitlar['eylultopGA']==""){
$eylultotalGA=0 ;
}else{
$eylultotalGA=$kayitlar['eylultopGA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalGA.".......";
//EKM
$ekimGA = @mysql_query("select sum(v17+v18) as ekimtopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimGA = @mysql_query("select sum(v17+v18) as kasimtopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimGA)) {
if($kayitlar['kasimtopGA']==""){
$kasimtotalGA=0 ;
}else{
$kasimtotalGA=$kayitlar['kasimtopGA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalGA.".......";
//ARALIK
$aralikGA = @mysql_query("select sum(v17+v18) as araliktopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikGA)) {
if($kayitlar['araliktopGA']==""){
$araliktotalGA=0 ;
}else{
$araliktotalGA=$kayitlar['araliktopGA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalGA.".......";
if($aygelen=="OCAK"){
$aytoplamGA=0 ;
}
if($aygelen=="$subat"){
$aytoplamGA=$ocaktotalGA ;
}
if($aygelen=="MART"){
$aytoplamGA=$ocaktotalGA+$subattotalGA ;
}
if($aygelen=="$nisan"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA ;
}
if($aygelen=="MAYIS"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA ;
}
if($aygelen=="$haziran"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA ;
}
if($aygelen=="$agustos"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA ;
}
if($aygelen=="$eylul"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA ;
}
if($aygelen=="$ekim"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA ;
}
if($aygelen=="KASIM"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA+$ekimtotalGA ;
}
if($aygelen=="ARALIK"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA+$ekimtotalGA+$kasimtotalGA ;
}
//echo "Ay toplam: ".$aytoplamGA ;

// GEBE IKAN*****************************************************************************************************************
//OCAK
$ocakGE = @mysql_query("select sum(v19+v20+v21) as ocaktopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakGE)) {
if($kayitlar['ocaktopGE']==""){
$ocaktotalGE=0 ;
}else{
$ocaktotalGE=$kayitlar['ocaktopGE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGE.".......";
//UBAT
$subatGE = @mysql_query("select sum(v19+v20+v21) as subattopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatGE)) {
if($kayitlar['subattopGE']==""){
$subattotalGE=0 ;
}else{
$subattotalGE=$kayitlar['subattopGE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalGE.".......";
//MART
$martGE = @mysql_query("select sum(v19+v20+v21) as marttopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martGE)) {
if($kayitlar['marttopGE']==""){
$marttotalGE=0 ;
}else{
$marttotalGE=$kayitlar['marttopGE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalGE.".......";
//NSAN
$nisanGE = @mysql_query("select sum(v19+v20+v21) as nisantopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisGE = @mysql_query("select sum(v19+v20+v21) as mayistopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisGE)) {
if($kayitlar['mayistopGE']==""){
$mayistotalGE=0 ;
}else{
$mayistotalGE=$kayitlar['mayistopGE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalGE.".......";
//HAZRAN
$haziranGE = @mysql_query("select sum(v19+v20+v21) as hazirantopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzGE = @mysql_query("select sum(v19+v20+v21) as temmuztopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzGE)) {
if($kayitlar['temmuztopGE']==""){
$temmuztotalGE=0 ;
}else{
$temmuztotalGE=$kayitlar['temmuztopGE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalGE.".......";
//AUSTOS
$agustosGE = @mysql_query("select sum(v19+v20+v21) as agustostopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosGE)) {
if($kayitlar['agustostopGE']==""){
$agustostotalGE=0 ;
}else{
$agustostotalGE=$kayitlar['agustostopGE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalGE.".......";
//EYLL
$eylulGE = @mysql_query("select sum(v19+v20+v21) as eylultopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulGE)) {
if($kayitlar['eylultopGE']==""){
$eylultotalGE=0 ;
}else{
$eylultotalGE=$kayitlar['eylultopGE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalGE.".......";
//EKM
$ekimGE = @mysql_query("select sum(v19+v20+v21) as ekimtopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimGE = @mysql_query("select sum(v19+v20+v21) as kasimtopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimGE)) {
if($kayitlar['kasimtopGE']==""){
$kasimtotalGE=0 ;
}else{
$kasimtotalGE=$kayitlar['kasimtopGE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalGE.".......";
//ARALIK
$aralikGE = @mysql_query("select sum(v19+v20+v21) as araliktopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikGE)) {
if($kayitlar['araliktopGE']==""){
$araliktotalGE=0 ;
}else{
$araliktotalGE=$kayitlar['araliktopGE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalGE.".......";
if($aygelen=="OCAK"){
$aytoplamGE=0 ;
}
if($aygelen=="$subat"){
$aytoplamGE=$ocaktotalGE ;
}
if($aygelen=="MART"){
$aytoplamGE=$ocaktotalGE+$subattotalGE ;
}
if($aygelen=="$nisan"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE ;
}
if($aygelen=="MAYIS"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE ;
}
if($aygelen=="$haziran"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE ;
}
if($aygelen=="$agustos"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE ;
}
if($aygelen=="$eylul"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE+$agustostotalGE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden gebe: ".$devredengebe ;
$aysonugebemevcudu=$devredengebe+$Toplambuayarti-$Toplambuayeksi;
//echo "Ay Sonu gebe mevcudu: ".$aysonugebemevcudu ;
//BEBEK KISMI******************************************************************************************************************************************************
//NDE BULUNULAN AY TOPLAMLARI
$buayba = @mysql_query("select sum(v22+v23) as buaybasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayba)) {
if($kayitlar['buaybasonuc']==""){
$Toplambuaybebekarti=0 ;
}else{
$Toplambuaybebekarti=$kayitlar['buaybasonuc'];
}
}
//echo $Toplambuaybebekarti;
$buaybe = @mysql_query("select sum(v24+v25+v26) as buaybesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buaybe)) {
if($kayitlar['buaybesonuc']==""){
$Toplambuaybebekeksi=0 ;
}else{
$Toplambuaybebekeksi=$kayitlar['buaybesonuc'];
}
}
//echo $Toplambuaybebekeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$bebekarti = @mysql_query("select sum(v22+v23) as bsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekarti)) {
if($kayitlar['bsonucarti']==""){
$Toplambarti=0 ;
}else{
$Toplambarti=$kayitlar['bsonucarti'];
}
}
//echo $Toplambarti;
$bebekeksi = @mysql_query("select sum(v24+v25+v26) as bsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekeksi)) {
if($kayitlar['bsonuceksi']==""){
$Toplambeksi=0 ;
}else{
$Toplambeksi=$kayitlar['bsonuceksi'];
}
}
//echo $Toplambeksi;
$devirbebek=$Toplambarti-$Toplambeksi;
//echo "GEEN YIL DEVR:".$devirbebek;
// AY DENEMES
//GEBE GEEN******************************************************************************************************************
//OCAK
$ocakBA = @mysql_query("select sum(v22+v23) as ocaktopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakBA)) {
if($kayitlar['ocaktopBA']==""){
$ocaktotalBA=0 ;
}else{
$ocaktotalBA=$kayitlar['ocaktopBA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalBA.".......";
//UBAT
$subatBA = @mysql_query("select sum(v22+v23) as subattopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatBA)) {
if($kayitlar['subattopBA']==""){
$subattotalBA=0 ;
}else{
$subattotalBA=$kayitlar['subattopBA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalBA.".......";
//MART
$martBA = @mysql_query("select sum(v22+v23) as marttopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martBA)) {
if($kayitlar['marttopBA']==""){
$marttotalBA=0 ;
}else{
$marttotalBA=$kayitlar['marttopBA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalBA.".......";
//NSAN
$nisanBA = @mysql_query("select sum(v22+v23) as nisantopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisBA = @mysql_query("select sum(v22+v23) as mayistopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisBA)) {
if($kayitlar['mayistopBA']==""){
$mayistotalBA=0 ;
}else{
$mayistotalBA=$kayitlar['mayistopBA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalBA.".......";
//HAZRAN
$haziranBA = @mysql_query("select sum(v22+v23) as hazirantopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzBA = @mysql_query("select sum(v22+v23) as temmuztopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzBA)) {
if($kayitlar['temmuztopBA']==""){
$temmuztotalBA=0 ;
}else{
$temmuztotalBA=$kayitlar['temmuztopBA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalBA.".......";
//AUSTOS
$agustosBA = @mysql_query("select sum(v22+v23) as agustostopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosBA)) {
if($kayitlar['agustostopBA']==""){
$agustostotalBA=0 ;
}else{
$agustostotalBA=$kayitlar['agustostopBA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalBA.".......";
//EYLL
$eylulBA = @mysql_query("select sum(v22+v23) as eylultopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulBA)) {
if($kayitlar['eylultopBA']==""){
$eylultotalBA=0 ;
}else{
$eylultotalBA=$kayitlar['eylultopBA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalBA.".......";
//EKM
$ekimBA = @mysql_query("select sum(v22+v23) as ekimtopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimBA = @mysql_query("select sum(v22+v23) as kasimtopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimBA)) {
if($kayitlar['kasimtopBA']==""){
$kasimtotalBA=0 ;
}else{
$kasimtotalBA=$kayitlar['kasimtopBA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalBA.".......";
//ARALIK
$aralikBA = @mysql_query("select sum(v22+v23) as araliktopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikBA)) {
if($kayitlar['araliktopBA']==""){
$araliktotalBA=0 ;
}else{
$araliktotalBA=$kayitlar['araliktopBA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalBA.".......";
if($aygelen=="OCAK"){
$aytoplamBA=0 ;
}
if($aygelen=="$subat"){
$aytoplamBA=$ocaktotalBA ;
}
if($aygelen=="MART"){
$aytoplamBA=$ocaktotalBA+$subattotalBA ;
}
if($aygelen=="$nisan"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA ;
}
if($aygelen=="MAYIS"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA ;
}
if($aygelen=="$haziran"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA ;
}
if($aygelen=="$agustos"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA ;
}
if($aygelen=="$eylul"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA ;
}
if($aygelen=="$ekim"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA ;
}
if($aygelen=="KASIM"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA+$ekimtotalBA ;
}
if($aygelen=="ARALIK"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA+$ekimtotalBA+$kasimtotalBA ;
}
//echo "Ay toplam: ".$aytoplamBA ;

// GEBE IKAN*****************************************************************************************************************
//OCAK
$ocakBE = @mysql_query("select sum(v24+v25+v26) as ocaktopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakBE)) {
if($kayitlar['ocaktopBE']==""){
$ocaktotalBE=0 ;
}else{
$ocaktotalBE=$kayitlar['ocaktopBE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalBE.".......";
//UBAT
$subatBE = @mysql_query("select sum(v24+v25+v26) as subattopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatBE)) {
if($kayitlar['subattopBE']==""){
$subattotalBE=0 ;
}else{
$subattotalBE=$kayitlar['subattopBE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalBE.".......";
//MART
$martBE = @mysql_query("select sum(v24+v25+v26) as marttopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martBE)) {
if($kayitlar['marttopBE']==""){
$marttotalBE=0 ;
}else{
$marttotalBE=$kayitlar['marttopBE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalBE.".......";
//NSAN
$nisanBE = @mysql_query("select sum(v24+v25+v26) as nisantopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisBE = @mysql_query("select sum(v24+v25+v26) as mayistopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisBE)) {
if($kayitlar['mayistopBE']==""){
$mayistotalBE=0 ;
}else{
$mayistotalBE=$kayitlar['mayistopBE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalBE.".......";
//HAZRAN
$haziranBE = @mysql_query("select sum(v24+v25+v26) as hazirantopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzBE = @mysql_query("select sum(v24+v25+v26) as temmuztopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzBE)) {
if($kayitlar['temmuztopBE']==""){
$temmuztotalBE=0 ;
}else{
$temmuztotalBE=$kayitlar['temmuztopBE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalBE.".......";
//AUSTOS
$agustosBE = @mysql_query("select sum(v24+v25+v26) as agustostopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosBE)) {
if($kayitlar['agustostopBE']==""){
$agustostotalBE=0 ;
}else{
$agustostotalBE=$kayitlar['agustostopBE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalBE.".......";
//EYLL
$eylulBE = @mysql_query("select sum(v24+v25+v26) as eylultopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulBE)) {
if($kayitlar['eylultopBE']==""){
$eylultotalBE=0 ;
}else{
$eylultotalBE=$kayitlar['eylultopBE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalBE.".......";
//EKM
$ekimBE = @mysql_query("select sum(v24+v25+v26) as ekimtopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimBE = @mysql_query("select sum(v24+v25+v26) as kasimtopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimBE)) {
if($kayitlar['kasimtopBE']==""){
$kasimtotalBE=0 ;
}else{
$kasimtotalBE=$kayitlar['kasimtopBE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalBE.".......";
//ARALIK
$aralikBE = @mysql_query("select sum(v24+v25+v26) as araliktopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikBE)) {
if($kayitlar['araliktopBE']==""){
$araliktotalBE=0 ;
}else{
$araliktotalBE=$kayitlar['araliktopBE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalBE.".......";
if($aygelen=="OCAK"){
$aytoplamBE=0 ;
}
if($aygelen=="$subat"){
$aytoplamBE=$ocaktotalBE ;
}
if($aygelen=="MART"){
$aytoplamBE=$ocaktotalBE+$subattotalBE ;
}
if($aygelen=="$nisan"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE ;
}
if($aygelen=="MAYIS"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE ;
}
if($aygelen=="$haziran"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE ;
}
if($aygelen=="$agustos"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE ;
}
if($aygelen=="$eylul"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE+$agustostotalBE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden bebek: ".$devredenbebek ;
$aysonubebekmevcudu=$devredenbebek+$Toplambuaybebekarti-$Toplambuaybebekeksi;
//echo "Ay Sonu bebek mevcudu: ".$aysonubebekmevcudu ;
//LOHUSA KISMI****************************************************************************************************************** 
//NDE BULUNULAN AY TOPLAMLARI
$buayla = @mysql_query("select sum(v27+v28) as buaylasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayla)) {
if($kayitlar['buaylasonuc']==""){
$Toplambuaylarti=0 ;
}else{
$Toplambuaylarti=$kayitlar['buaylasonuc'];
}
}
//echo $Toplambuaylarti;
$buayle = @mysql_query("select sum(v29+v30+v31) as buaylesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayle)) {
if($kayitlar['buaylesonuc']==""){
$Toplambuayleksi=0 ;
}else{
$Toplambuayleksi=$kayitlar['buaylesonuc'];
}
}
//echo $Toplambuayleksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$lohusaarti = @mysql_query("select sum(v27+v28) as lsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaarti)) {
if($kayitlar['lsonucarti']==""){
$Toplamlarti=0 ;
}else{
$Toplamlarti=$kayitlar['lsonucarti'];
}
}
//echo $Toplamlarti;
$lohusaeksi = @mysql_query("select sum(v29+v30+v31) as lsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaeksi)) {
if($kayitlar['lsonuceksi']==""){
$Toplamleksi=0 ;
}else{
$Toplamleksi=$kayitlar['lsonuceksi'];
}
}
//echo $Toplamleksi;
$devirl=$Toplamlarti-$Toplamleksi;
//echo "GEEN YIL DEVR:".$devirl;
// AY DENEMES
//LOHUSALIA GEEN*************************************************************************************************************
//OCAK
$ocakLA = @mysql_query("select sum(v27+v28) as ocaktopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakLA)) {
if($kayitlar['ocaktopLA']==""){
$ocaktotalLA=0 ;
}else{
$ocaktotalLA=$kayitlar['ocaktopLA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalLA.".......";
//UBAT
$subatLA = @mysql_query("select sum(v27+v28) as subattopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatLA)) {
if($kayitlar['subattopLA']==""){
$subattotalLA=0 ;
}else{
$subattotalLA=$kayitlar['subattopLA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalLA.".......";
//MART
$martLA = @mysql_query("select sum(v27+v28) as marttopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martLA)) {
if($kayitlar['marttopLA']==""){
$marttotalLA=0 ;
}else{
$marttotalLA=$kayitlar['marttopLA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalLA.".......";
//NSAN
$nisanLA = @mysql_query("select sum(v27+v28) as nisantopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisLA = @mysql_query("select sum(v27+v28) as mayistopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisLA)) {
if($kayitlar['mayistopLA']==""){
$mayistotalLA=0 ;
}else{
$mayistotalLA=$kayitlar['mayistopLA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalLA.".......";
//HAZRAN
$haziranLA = @mysql_query("select sum(v27+v28) as hazirantopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzLA = @mysql_query("select sum(v27+v28) as temmuztopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzLA)) {
if($kayitlar['temmuztopLA']==""){
$temmuztotalLA=0 ;
}else{
$temmuztotalLA=$kayitlar['temmuztopLA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalLA.".......";
//AUSTOS
$agustosLA = @mysql_query("select sum(v27+v28) as agustostopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosLA)) {
if($kayitlar['agustostopLA']==""){
$agustostotalLA=0 ;
}else{
$agustostotalLA=$kayitlar['agustostopLA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalLA.".......";
//EYLL
$eylulLA = @mysql_query("select sum(v27+v28) as eylultopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulLA)) {
if($kayitlar['eylultopLA']==""){
$eylultotalLA=0 ;
}else{
$eylultotalLA=$kayitlar['eylultopLA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalLA.".......";
//EKM
$ekimLA = @mysql_query("select sum(v27+v28) as ekimtopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimLA = @mysql_query("select sum(v27+v28) as kasimtopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimLA)) {
if($kayitlar['kasimtopLA']==""){
$kasimtotalLA=0 ;
}else{
$kasimtotalLA=$kayitlar['kasimtopLA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalLA.".......";
//ARALIK
$aralikLA = @mysql_query("select sum(v27+v28) as araliktopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikLA)) {
if($kayitlar['araliktopLA']==""){
$araliktotalLA=0 ;
}else{
$araliktotalLA=$kayitlar['araliktopLA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalLA.".......";
if($aygelen=="OCAK"){
$aytoplamLA=0 ;
}
if($aygelen=="$subat"){
$aytoplamLA=$ocaktotalLA ;
}
if($aygelen=="MART"){
$aytoplamLA=$ocaktotalLA+$subattotalLA ;
}
if($aygelen=="$nisan"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA ;
}
if($aygelen=="MAYIS"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA ;
}
if($aygelen=="$haziran"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA ;
}
if($aygelen=="$agustos"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA ;
}
if($aygelen=="$eylul"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA ;
}
if($aygelen=="$ekim"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA ;
}
if($aygelen=="KASIM"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA+$ekimtotalLA ;
}
if($aygelen=="ARALIK"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA+$ekimtotalLA+$kasimtotalLA ;
}
//echo "Ay toplam: ".$aytoplamLA ;

// LOHUSA IKAN*****************************************************************************************************************
//OCAK
$ocakLE = @mysql_query("select sum(v29+v30+v31) as ocaktopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakLE)) {
if($kayitlar['ocaktopLE']==""){
$ocaktotalLE=0 ;
}else{
$ocaktotalLE=$kayitlar['ocaktopLE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGE.".......";
//UBAT
$subatLE = @mysql_query("select sum(v29+v30+v31) as subattopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatLE)) {
if($kayitlar['subattopLE']==""){
$subattotalLE=0 ;
}else{
$subattotalLE=$kayitlar['subattopLE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalLE.".......";
//MART
$martLE = @mysql_query("select sum(v29+v30+v31) as marttopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martLE)) {
if($kayitlar['marttopLE']==""){
$marttotalLE=0 ;
}else{
$marttotalLE=$kayitlar['marttopLE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalLE.".......";
//NSAN
$nisanLE = @mysql_query("select sum(v29+v30+v31) as nisantopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisLE = @mysql_query("select sum(v29+v30+v31) as mayistopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisLE)) {
if($kayitlar['mayistopLE']==""){
$mayistotalLE=0 ;
}else{
$mayistotalLE=$kayitlar['mayistopLE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalLE.".......";
//HAZRAN
$haziranLE = @mysql_query("select sum(v29+v30+v31) as hazirantopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzLE = @mysql_query("select sum(v29+v30+v31) as temmuztopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzLE)) {
if($kayitlar['temmuztopLE']==""){
$temmuztotalLE=0 ;
}else{
$temmuztotalLE=$kayitlar['temmuztopLE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalLE.".......";
//AUSTOS
$agustosLE = @mysql_query("select sum(v29+v30+v31) as agustostopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosLE)) {
if($kayitlar['agustostopLE']==""){
$agustostotalLE=0 ;
}else{
$agustostotalLE=$kayitlar['agustostopLE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalLE.".......";
//EYLL
$eylulLE = @mysql_query("select sum(v29+v30+v31) as eylultopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulLE)) {
if($kayitlar['eylultopLE']==""){
$eylultotalLE=0 ;
}else{
$eylultotalLE=$kayitlar['eylultopLE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalLE.".......";
//EKM
$ekimLE = @mysql_query("select sum(v29+v30+v31) as ekimtopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimLE = @mysql_query("select sum(v29+v30+v31) as kasimtopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimLE)) {
if($kayitlar['kasimtopLE']==""){
$kasimtotalLE=0 ;
}else{
$kasimtotalLE=$kayitlar['kasimtopLE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalLE.".......";
//ARALIK
$aralikLE = @mysql_query("select sum(v29+v30+v31) as araliktopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikLE)) {
if($kayitlar['araliktopLE']==""){
$araliktotalLE=0 ;
}else{
$araliktotalLE=$kayitlar['araliktopLE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalLE.".......";
if($aygelen=="OCAK"){
$aytoplamLE=0 ;
}
if($aygelen=="$subat"){
$aytoplamLE=$ocaktotalLE ;
}
if($aygelen=="MART"){
$aytoplamLE=$ocaktotalLE+$subattotalLE ;
}
if($aygelen=="$nisan"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE ;
}
if($aygelen=="MAYIS"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE ;
}
if($aygelen=="$haziran"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE ;
}
if($aygelen=="$agustos"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE ;
}
if($aygelen=="$eylul"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE+$agustostotalLE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden lohusa: ".$devredenlohusa ;
$aysonulohusamevcudu=$devredenlohusa+$Toplambuaylarti-$Toplambuayleksi;
//echo "Ay Sonu lohusa mevcudu: ".$aysonulohusamevcudu ;
//OCUK KISMI********************************************************************************************************************
//NDE BULUNULAN AY TOPLAMLARI
$buayca = @mysql_query("select sum(v32+v33) as buaycasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayca)) {
if($kayitlar['buaycasonuc']==""){
$Toplambuaycocukarti=0 ;
}else{
$Toplambuaycocukarti=$kayitlar['buaycasonuc'];
}
}
//echo $Toplambuaycocukarti;
$buayce = @mysql_query("select sum(v34+v35+v36) as buaycesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayce)) {
if($kayitlar['buaycesonuc']==""){
$Toplambuaycocukeksi=0 ;
}else{
$Toplambuaycocukeksi=$kayitlar['buaycesonuc'];
}
}
//echo $Toplambuaycocukeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$cocukarti = @mysql_query("select sum(v32+v33) as csonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukarti)) {
if($kayitlar['csonucarti']==""){
$Toplamcarti=0 ;
}else{
$Toplamcarti=$kayitlar['csonucarti'];
}
}
//echo $Toplamcarti;
$cocukeksi = @mysql_query("select sum(v34+v35+v36) as csonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukeksi)) {
if($kayitlar['csonuceksi']==""){
$Toplamceksi=0 ;
}else{
$Toplamceksi=$kayitlar['csonuceksi'];
}
}
//echo $Toplamceksi;
$devircocuk=$Toplamcarti-$Toplamceksi;
//echo "GEEN YIL DEVR:".$devircocuk;
// AY DENEMES
//OCUK GEEN******************************************************************************************************************
//OCAK
$ocakCA = @mysql_query("select sum(v32+v33) as ocaktopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakCA)) {
if($kayitlar['ocaktopCA']==""){
$ocaktotalCA=0 ;
}else{
$ocaktotalCA=$kayitlar['ocaktopCA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalCA.".......";
//UBAT
$subatCA = @mysql_query("select sum(v32+v33) as subattopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatCA)) {
if($kayitlar['subattopCA']==""){
$subattotalCA=0 ;
}else{
$subattotalCA=$kayitlar['subattopCA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalCA.".......";
//MART
$martCA = @mysql_query("select sum(v32+v33) as marttopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martCA)) {
if($kayitlar['marttopCA']==""){
$marttotalCA=0 ;
}else{
$marttotalCA=$kayitlar['marttopCA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalCA.".......";
//NSAN
$nisanCA = @mysql_query("select sum(v32+v33) as nisantopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisCA = @mysql_query("select sum(v32+v33) as mayistopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisCA)) {
if($kayitlar['mayistopCA']==""){
$mayistotalCA=0 ;
}else{
$mayistotalCA=$kayitlar['mayistopCA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalCA.".......";
//HAZRAN
$haziranCA = @mysql_query("select sum(v32+v33) as hazirantopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzCA = @mysql_query("select sum(v32+v33) as temmuztopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzCA)) {
if($kayitlar['temmuztopCA']==""){
$temmuztotalCA=0 ;
}else{
$temmuztotalCA=$kayitlar['temmuztopCA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalCA.".......";
//AUSTOS
$agustosCA = @mysql_query("select sum(v32+v33) as agustostopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosCA)) {
if($kayitlar['agustostopCA']==""){
$agustostotalCA=0 ;
}else{
$agustostotalCA=$kayitlar['agustostopCA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalCA.".......";
//EYLL
$eylulCA = @mysql_query("select sum(v32+v33) as eylultopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulCA)) {
if($kayitlar['eylultopCA']==""){
$eylultotalCA=0 ;
}else{
$eylultotalCA=$kayitlar['eylultopCA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalCA.".......";
//EKM
$ekimCA = @mysql_query("select sum(v32+v33) as ekimtopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimCA = @mysql_query("select sum(v32+v33) as kasimtopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimCA)) {
if($kayitlar['kasimtopCA']==""){
$kasimtotalCA=0 ;
}else{
$kasimtotalCA=$kayitlar['kasimtopCA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalCA.".......";
//ARALIK
$aralikCA = @mysql_query("select sum(v32+v33) as araliktopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikCA)) {
if($kayitlar['araliktopCA']==""){
$araliktotalCA=0 ;
}else{
$araliktotalCA=$kayitlar['araliktopCA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalCA.".......";
if($aygelen=="OCAK"){
$aytoplamCA=0 ;
}
if($aygelen=="$subat"){
$aytoplamCA=$ocaktotalCA ;
}
if($aygelen=="MART"){
$aytoplamCA=$ocaktotalCA+$subattotalCA ;
}
if($aygelen=="$nisan"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA ;
}
if($aygelen=="MAYIS"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA ;
}
if($aygelen=="$haziran"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA ;
}
if($aygelen=="$agustos"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA ;
}
if($aygelen=="$eylul"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA ;
}
if($aygelen=="$ekim"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA ;
}
if($aygelen=="KASIM"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA+$ekimtotalCA ;
}
if($aygelen=="ARALIK"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA+$ekimtotalCA+$kasimtotalCA ;
}
//echo "Ay toplam: ".$aytoplamCA ;

// OCUK IKAN*****************************************************************************************************************
//OCAK
$ocakCE = @mysql_query("select sum(v34+v35+v36) as ocaktopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakCE)) {
if($kayitlar['ocaktopCE']==""){
$ocaktotalCE=0 ;
}else{
$ocaktotalCE=$kayitlar['ocaktopCE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalCE.".......";
//UBAT
$subatCE = @mysql_query("select sum(v34+v35+v36) as subattopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatCE)) {
if($kayitlar['subattopCE']==""){
$subattotalCE=0 ;
}else{
$subattotalCE=$kayitlar['subattopCE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalCE.".......";
//MART
$martCE = @mysql_query("select sum(v34+v35+v36) as marttopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martCE)) {
if($kayitlar['marttopCE']==""){
$marttotalCE=0 ;
}else{
$marttotalCE=$kayitlar['marttopCE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalCE.".......";
//NSAN
$nisanCE = @mysql_query("select sum(v34+v35+v36) as nisantopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisCE = @mysql_query("select sum(v34+v35+v36) as mayistopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisCE)) {
if($kayitlar['mayistopCE']==""){
$mayistotalCE=0 ;
}else{
$mayistotalCE=$kayitlar['mayistopCE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalCE.".......";
//HAZRAN
$haziranCE = @mysql_query("select sum(v34+v35+v36) as hazirantopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzCE = @mysql_query("select sum(v34+v35+v36) as temmuztopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzCE)) {
if($kayitlar['temmuztopCE']==""){
$temmuztotalCE=0 ;
}else{
$temmuztotalCE=$kayitlar['temmuztopCE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalCE.".......";
//AUSTOS
$agustosCE = @mysql_query("select sum(v34+v35+v36) as agustostopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosCE)) {
if($kayitlar['agustostopCE']==""){
$agustostotalCE=0 ;
}else{
$agustostotalCE=$kayitlar['agustostopCE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalCE.".......";
//EYLL
$eylulCE = @mysql_query("select sum(v34+v35+v36) as eylultopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulCE)) {
if($kayitlar['eylultopCE']==""){
$eylultotalCE=0 ;
}else{
$eylultotalCE=$kayitlar['eylultopCE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalCE.".......";
//EKM
$ekimCE = @mysql_query("select sum(v34+v35+v36) as ekimtopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimCE = @mysql_query("select sum(v34+v35+v36) as kasimtopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimCE)) {
if($kayitlar['kasimtopCE']==""){
$kasimtotalCE=0 ;
}else{
$kasimtotalCE=$kayitlar['kasimtopCE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalCE.".......";
//ARALIK
$aralikCE = @mysql_query("select sum(v34+v35+v36) as araliktopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikCE)) {
if($kayitlar['araliktopCE']==""){
$araliktotalCE=0 ;
}else{
$araliktotalCE=$kayitlar['araliktopCE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalCE.".......";
if($aygelen=="OCAK"){
$aytoplamCE=0 ;
}
if($aygelen=="$subat"){
$aytoplamCE=$ocaktotalCE ;
}
if($aygelen=="MART"){
$aytoplamCE=$ocaktotalCE+$subattotalCE ;
}
if($aygelen=="$nisan"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE ;
}
if($aygelen=="MAYIS"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE ;
}
if($aygelen=="$haziran"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE ;
}
if($aygelen=="$agustos"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE ;
}
if($aygelen=="$eylul"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE+$agustostotalCE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden cocuk: ".$devredencocuk ;
$aysonucocukmevcudu=$devredencocuk+$Toplambuaycocukarti-$Toplambuaycocukeksi;
//echo "Ay Sonu cocuk mevcudu: ".$aysonucocukmevcudu ;
//IMPLANT KISMI********************************************************************************************************************
//NDE BULUNULAN AY TOPLAMLARI
$buayxa = @mysql_query("select sum(v37+v38) as buayxasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayxa)) {
if($kayitlar['buayxasonuc']==""){
$Toplambuayimparti=0 ;
}else{
$Toplambuayimparti=$kayitlar['buayxasonuc'];
}
}
//echo $Toplambuayimparti;
$buayxe = @mysql_query("select sum(v39+v40+v41) as buayxesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayxe)) {
if($kayitlar['buayxesonuc']==""){
$Toplambuayimpeksi=0 ;
}else{
$Toplambuayimpeksi=$kayitlar['buayxesonuc'];
}
}
//echo $Toplambuayimpeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$imparti = @mysql_query("select sum(v37+v38) as xsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($imparti)) {
if($kayitlar['xsonucarti']==""){
$Toplamxarti=0 ;
}else{
$Toplamxarti=$kayitlar['xsonucarti'];
}
}
//echo $Toplamxarti;
$impeksi = @mysql_query("select sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($impeksi)) {
if($kayitlar['xsonuceksi']==""){
$Toplamxeksi=0 ;
}else{
$Toplamxeksi=$kayitlar['xsonuceksi'];
}
}
//echo $Toplamxeksi;
$devirimp=$Toplamxarti-$Toplamxeksi;
//echo "GEEN YIL DEVR:".$devirimp;
// AY DENEMES
//OCUK GEEN******************************************************************************************************************
//OCAK
$ocakXA = @mysql_query("select sum(v37+v38) as ocaktopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakXA)) {
if($kayitlar['ocaktopXA']==""){
$ocaktotalXA=0 ;
}else{
$ocaktotalXA=$kayitlar['ocaktopXA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalXA.".......";
//UBAT
$subatXA = @mysql_query("select sum(v37+v38) as subattopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatXA)) {
if($kayitlar['subattopXA']==""){
$subattotalXA=0 ;
}else{
$subattotalXA=$kayitlar['subattopXA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalXA.".......";
//MART
$martXA = @mysql_query("select sum(v37+v38) as marttopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martXA)) {
if($kayitlar['marttopXA']==""){
$marttotalXA=0 ;
}else{
$marttotalXA=$kayitlar['marttopXA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalXA.".......";
//NSAN
$nisanXA = @mysql_query("select sum(v37+v38) as nisantopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
while ($kayitlar = mysql_fetch_array($nisanXA)) {
if($kayitlar['nisantopXA']==""){
$nisantotalXA=0 ;
}else{
$nisantotalXA=$kayitlar['nisantopXA'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalXA.".......";
//MAYIS
$mayisXA = @mysql_query("select sum(v37+v38) as mayistopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisXA)) {
if($kayitlar['mayistopXA']==""){
$mayistotalXA=0 ;
}else{
$mayistotalXA=$kayitlar['mayistopXA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalXA.".......";
//HAZRAN
$haziranXA = @mysql_query("select sum(v37+v38) as hazirantopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
while ($kayitlar = mysql_fetch_array($haziranXA)) {
if($kayitlar['hazirantopXA']==""){
$hazirantotalXA=0 ;
}else{
$hazirantotalXA=$kayitlar['hazirantopXA'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalXA.".......";
//TEMMUZ
$temmuzXA = @mysql_query("select sum(v37+v38) as temmuztopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzXA)) {
if($kayitlar['temmuztopXA']==""){
$temmuztotalXA=0 ;
}else{
$temmuztotalXA=$kayitlar['temmuztopXA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalXA.".......";
//AUSTOS
$agustosXA = @mysql_query("select sum(v37+v38) as agustostopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosXA)) {
if($kayitlar['agustostopXA']==""){
$agustostotalXA=0 ;
}else{
$agustostotalXA=$kayitlar['agustostopXA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalXA.".......";
//EYLL
$eylulXA = @mysql_query("select sum(v37+v38) as eylultopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulXA)) {
if($kayitlar['eylultopXA']==""){
$eylultotalXA=0 ;
}else{
$eylultotalXA=$kayitlar['eylultopXA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalXA.".......";
//EKM
$ekimXA = @mysql_query("select sum(v37+v38) as ekimtopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
while ($kayitlar = mysql_fetch_array($ekimXA)) {
if($kayitlar['ekimtopXA']==""){
$ekimtotalXA=0 ;
}else{
$ekimtotalXA=$kayitlar['ekimtopXA'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalXA.".......";
//KASIM
$kasimXA = @mysql_query("select sum(v37+v38) as kasimtopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimXA)) {
if($kayitlar['kasimtopXA']==""){
$kasimtotalXA=0 ;
}else{
$kasimtotalXA=$kayitlar['kasimtopXA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalXA.".......";
//ARALIK
$aralikXA = @mysql_query("select sum(v37+v38) as araliktopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikXA)) {
if($kayitlar['araliktopXA']==""){
$araliktotalXA=0 ;
}else{
$araliktotalXA=$kayitlar['araliktopXA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalXA.".......";
if($aygelen=="OCAK"){
$aytoplamXA=0 ;
}
if($aygelen=="$subat"){
$aytoplamXA=$ocaktotalXA ;
}
if($aygelen=="MART"){
$aytoplamXA=$ocaktotalXA+$subattotalXA ;
}
if($aygelen=="$nisan"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA ;
}
if($aygelen=="MAYIS"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA ;
}
if($aygelen=="$haziran"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA ;
}
if($aygelen=="$agustos"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA ;
}
if($aygelen=="$eylul"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA ;
}
if($aygelen=="$ekim"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA+$eylultotalXA ;
}
if($aygelen=="KASIM"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA+$eylultotalXA+$ekimtotalXA ;
}
if($aygelen=="ARALIK"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA+$eylultotalXA+$ekimtotalXA+$kasimtotalXA ;
}
//echo "Ay toplam: ".$aytoplamXA ;

// OCUK IKAN*****************************************************************************************************************
//OCAK
$ocakXE = @mysql_query("select sum(v39+v40+v41) as ocaktopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakXE)) {
if($kayitlar['ocaktopXE']==""){
$ocaktotalXE=0 ;
}else{
$ocaktotalXE=$kayitlar['ocaktopXE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalXE.".......";
//UBAT
$subatXE = @mysql_query("select sum(v39+v40+v41) as subattopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatXE)) {
if($kayitlar['subattopXE']==""){
$subattotalXE=0 ;
}else{
$subattotalXE=$kayitlar['subattopXE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalXE.".......";
//MART
$martXE = @mysql_query("select sum(v39+v40+v41) as marttopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martXE)) {
if($kayitlar['marttopXE']==""){
$marttotalXE=0 ;
}else{
$marttotalXE=$kayitlar['marttopXE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalXE.".......";
//NSAN
$nisanXE = @mysql_query("select sum(v39+v40+v41) as nisantopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
while ($kayitlar = mysql_fetch_array($nisanXE)) {
if($kayitlar['nisantopXE']==""){
$nisantotalXE=0 ;
}else{
$nisantotalXE=$kayitlar['nisantopXE'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalXE.".......";
//MAYIS
$mayisXE = @mysql_query("select sum(v39+v40+v41) as mayistopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisXE)) {
if($kayitlar['mayistopXE']==""){
$mayistotalXE=0 ;
}else{
$mayistotalXE=$kayitlar['mayistopXE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalXE.".......";
//HAZRAN
$haziranXE = @mysql_query("select sum(v39+v40+v41) as hazirantopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
while ($kayitlar = mysql_fetch_array($haziranXE)) {
if($kayitlar['hazirantopXE']==""){
$hazirantotalXE=0 ;
}else{
$hazirantotalXE=$kayitlar['hazirantopXE'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalXE.".......";
//TEMMUZ
$temmuzXE = @mysql_query("select sum(v39+v40+v41) as temmuztopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzXE)) {
if($kayitlar['temmuztopXE']==""){
$temmuztotalXE=0 ;
}else{
$temmuztotalXE=$kayitlar['temmuztopXE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalXE.".......";
//AUSTOS
$agustosXE = @mysql_query("select sum(v39+v40+v41) as agustostopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosXE)) {
if($kayitlar['agustostopXE']==""){
$agustostotalXE=0 ;
}else{
$agustostotalXE=$kayitlar['agustostopXE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalXE.".......";
//EYLL
$eylulXE = @mysql_query("select sum(v39+v40+v41) as eylultopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulXE)) {
if($kayitlar['eylultopXE']==""){
$eylultotalXE=0 ;
}else{
$eylultotalXE=$kayitlar['eylultopXE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalXE.".......";
//EKM
$ekimXE = @mysql_query("select sum(v39+v40+v41) as ekimtopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
while ($kayitlar = mysql_fetch_array($ekimXE)) {
if($kayitlar['ekimtopXE']==""){
$ekimtotalXE=0 ;
}else{
$ekimtotalXE=$kayitlar['ekimtopXE'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalXE.".......";
//KASIM
$kasimXE = @mysql_query("select sum(v39+v40+v41) as kasimtopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimXE)) {
if($kayitlar['kasimtopXE']==""){
$kasimtotalXE=0 ;
}else{
$kasimtotalXE=$kayitlar['kasimtopXE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalXE.".......";
//ARALIK
$aralikXE = @mysql_query("select sum(v39+v40+v41) as araliktopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikXE)) {
if($kayitlar['araliktopXE']==""){
$araliktotalXE=0 ;
}else{
$araliktotalXE=$kayitlar['araliktopXE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalXE.".......";
if($aygelen=="OCAK"){
$aytoplamXE=0 ;
}
if($aygelen=="$subat"){
$aytoplamXE=$ocaktotalXE ;
}
if($aygelen=="MART"){
$aytoplamXE=$ocaktotalXE+$subattotalXE ;
}
if($aygelen=="$nisan"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE ;
}
if($aygelen=="MAYIS"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE ;
}
if($aygelen=="$haziran"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE ;
}
if($aygelen=="$agustos"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE ;
}
if($aygelen=="$eylul"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE ;
}
if($aygelen=="$ekim"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE+$eylultotalXE ;
}
if($aygelen=="KASIM"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE+$eylultotalXE+$ekimtotalXE ;
}
if($aygelen=="ARALIK"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE+$eylultotalXE+$ekimtotalXE+$kasimtotalXE ;
}
//echo "Ay toplam: ".$aytoplamXE ;
$xtoplam=$aytoplamXA-$aytoplamXE ;
//echo "GENEL TOPLAM: ".$xtoplam ;
$devredenimp=$devirimp+$aytoplamXA-$aytoplamXE ;
//echo "Geen aydan devreden implant: ".$devredenimp ;
$aysonuimpmevcudu=$devredenimp+$Toplambuayimparti-$Toplambuayimpeksi;
//echo "Ay Sonu implant mevcudu: ".$aysonuimpmevcudu ;
}elseif($ilcegelen!=iconv("UTF-8", "ISO-8859-9","İlçe Seçiniz") and $ocgelen!=iconv("UTF-8", "ISO-8859-9","Aile Hekimini Seçiniz")){
//GEBE KISMI********************************************************************************************************************** 
//NDE BULUNULAN AY TOPLAMLARI
$buayga = @mysql_query("select sum(v17+v18) as buaygasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayga)) {
if($kayitlar['buaygasonuc']==""){
$Toplambuayarti=0 ;
}else{
$Toplambuayarti=$kayitlar['buaygasonuc'];
}
}
//echo $Toplambuayarti;
$buayge = @mysql_query("select sum(v19+v20+v21) as buaygesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayge)) {
if($kayitlar['buaygesonuc']==""){
$Toplambuayeksi=0 ;
}else{
$Toplambuayeksi=$kayitlar['buaygesonuc'];
}
}
//echo $Toplambuayeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$gebearti = @mysql_query("select sum(v17+v18) as gsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($gebearti)) {
if($kayitlar['gsonucarti']==""){
$Toplamgarti=0 ;
}else{
$Toplamgarti=$kayitlar['gsonucarti'];
}
}
//echo $Toplamgarti;
$gebeeksi = @mysql_query("select sum(v19+v20+v21) as gsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($gebeeksi)) {
if($kayitlar['gsonuceksi']==""){
$Toplamgeksi=0 ;
}else{
$Toplamgeksi=$kayitlar['gsonuceksi'];
}
}
//echo $Toplamgeksi;
$devir=$Toplamgarti-$Toplamgeksi;
//echo "GEEN YIL DEVR:".$devir;
// AY DENEMES
//GEBE GEEN******************************************************************************************************************
//OCAK
$ocakGA = @mysql_query("select sum(v17+v18) as ocaktopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakGA)) {
if($kayitlar['ocaktopGA']==""){
$ocaktotalGA=0 ;
}else{
$ocaktotalGA=$kayitlar['ocaktopGA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGA.".......";
//UBAT
$subatGA = @mysql_query("select sum(v17+v18) as subattopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatGA)) {
if($kayitlar['subattopGA']==""){
$subattotalGA=0 ;
}else{
$subattotalGA=$kayitlar['subattopGA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalGA.".......";
//MART
$martGA = @mysql_query("select sum(v17+v18) as marttopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martGA)) {
if($kayitlar['marttopGA']==""){
$marttotalGA=0 ;
}else{
$marttotalGA=$kayitlar['marttopGA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalGA.".......";
//NSAN
$nisanGA = @mysql_query("select sum(v17+v18) as nisantopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisGA = @mysql_query("select sum(v17+v18) as mayistopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisGA)) {
if($kayitlar['mayistopGA']==""){
$mayistotalGA=0 ;
}else{
$mayistotalGA=$kayitlar['mayistopGA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalGA.".......";
//HAZRAN
$haziranGA = @mysql_query("select sum(v17+v18) as hazirantopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzGA = @mysql_query("select sum(v17+v18) as temmuztopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzGA)) {
if($kayitlar['temmuztopGA']==""){
$temmuztotalGA=0 ;
}else{
$temmuztotalGA=$kayitlar['temmuztopGA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalGA.".......";
//AUSTOS
$agustosGA = @mysql_query("select sum(v17+v18) as agustostopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosGA)) {
if($kayitlar['agustostopGA']==""){
$agustostotalGA=0 ;
}else{
$agustostotalGA=$kayitlar['agustostopGA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalGA.".......";
//EYLL
$eylulGA = @mysql_query("select sum(v17+v18) as eylultopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulGA)) {
if($kayitlar['eylultopGA']==""){
$eylultotalGA=0 ;
}else{
$eylultotalGA=$kayitlar['eylultopGA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalGA.".......";
//EKM
$ekimGA = @mysql_query("select sum(v17+v18) as ekimtopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimGA = @mysql_query("select sum(v17+v18) as kasimtopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimGA)) {
if($kayitlar['kasimtopGA']==""){
$kasimtotalGA=0 ;
}else{
$kasimtotalGA=$kayitlar['kasimtopGA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalGA.".......";
//ARALIK
$aralikGA = @mysql_query("select sum(v17+v18) as araliktopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikGA)) {
if($kayitlar['araliktopGA']==""){
$araliktotalGA=0 ;
}else{
$araliktotalGA=$kayitlar['araliktopGA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalGA.".......";
if($aygelen=="OCAK"){
$aytoplamGA=0 ;
}
if($aygelen=="$subat"){
$aytoplamGA=$ocaktotalGA ;
}
if($aygelen=="MART"){
$aytoplamGA=$ocaktotalGA+$subattotalGA ;
}
if($aygelen=="$nisan"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA ;
}
if($aygelen=="MAYIS"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA ;
}
if($aygelen=="$haziran"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA ;
}
if($aygelen=="$agustos"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA ;
}
if($aygelen=="$eylul"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA ;
}
if($aygelen=="$ekim"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA ;
}
if($aygelen=="KASIM"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA+$ekimtotalGA ;
}
if($aygelen=="ARALIK"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA+$ekimtotalGA+$kasimtotalGA ;
}
//echo "Ay toplam: ".$aytoplamGA ;

// GEBE IKAN*****************************************************************************************************************
//OCAK
$ocakGE = @mysql_query("select sum(v19+v20+v21) as ocaktopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakGE)) {
if($kayitlar['ocaktopGE']==""){
$ocaktotalGE=0 ;
}else{
$ocaktotalGE=$kayitlar['ocaktopGE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGE.".......";
//UBAT
$subatGE = @mysql_query("select sum(v19+v20+v21) as subattopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatGE)) {
if($kayitlar['subattopGE']==""){
$subattotalGE=0 ;
}else{
$subattotalGE=$kayitlar['subattopGE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalGE.".......";
//MART
$martGE = @mysql_query("select sum(v19+v20+v21) as marttopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martGE)) {
if($kayitlar['marttopGE']==""){
$marttotalGE=0 ;
}else{
$marttotalGE=$kayitlar['marttopGE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalGE.".......";
//NSAN
$nisanGE = @mysql_query("select sum(v19+v20+v21) as nisantopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisGE = @mysql_query("select sum(v19+v20+v21) as mayistopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisGE)) {
if($kayitlar['mayistopGE']==""){
$mayistotalGE=0 ;
}else{
$mayistotalGE=$kayitlar['mayistopGE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalGE.".......";
//HAZRAN
$haziranGE = @mysql_query("select sum(v19+v20+v21) as hazirantopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzGE = @mysql_query("select sum(v19+v20+v21) as temmuztopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzGE)) {
if($kayitlar['temmuztopGE']==""){
$temmuztotalGE=0 ;
}else{
$temmuztotalGE=$kayitlar['temmuztopGE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalGE.".......";
//AUSTOS
$agustosGE = @mysql_query("select sum(v19+v20+v21) as agustostopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosGE)) {
if($kayitlar['agustostopGE']==""){
$agustostotalGE=0 ;
}else{
$agustostotalGE=$kayitlar['agustostopGE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalGE.".......";
//EYLL
$eylulGE = @mysql_query("select sum(v19+v20+v21) as eylultopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulGE)) {
if($kayitlar['eylultopGE']==""){
$eylultotalGE=0 ;
}else{
$eylultotalGE=$kayitlar['eylultopGE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalGE.".......";
//EKM
$ekimGE = @mysql_query("select sum(v19+v20+v21) as ekimtopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimGE = @mysql_query("select sum(v19+v20+v21) as kasimtopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimGE)) {
if($kayitlar['kasimtopGE']==""){
$kasimtotalGE=0 ;
}else{
$kasimtotalGE=$kayitlar['kasimtopGE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalGE.".......";
//ARALIK
$aralikGE = @mysql_query("select sum(v19+v20+v21) as araliktopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikGE)) {
if($kayitlar['araliktopGE']==""){
$araliktotalGE=0 ;
}else{
$araliktotalGE=$kayitlar['araliktopGE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalGE.".......";
if($aygelen=="OCAK"){
$aytoplamGE=0 ;
}
if($aygelen=="$subat"){
$aytoplamGE=$ocaktotalGE ;
}
if($aygelen=="MART"){
$aytoplamGE=$ocaktotalGE+$subattotalGE ;
}
if($aygelen=="$nisan"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE ;
}
if($aygelen=="MAYIS"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE ;
}
if($aygelen=="$haziran"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE ;
}
if($aygelen=="$agustos"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE ;
}
if($aygelen=="$eylul"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE+$agustostotalGE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden gebe: ".$devredengebe ;
$aysonugebemevcudu=$devredengebe+$Toplambuayarti-$Toplambuayeksi;
//echo "Ay Sonu gebe mevcudu: ".$aysonugebemevcudu ;
//BEBEK KISMI******************************************************************************************************************************************************
//NDE BULUNULAN AY TOPLAMLARI
$buayba = @mysql_query("select sum(v22+v23) as buaybasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayba)) {
if($kayitlar['buaybasonuc']==""){
$Toplambuaybebekarti=0 ;
}else{
$Toplambuaybebekarti=$kayitlar['buaybasonuc'];
}
}
//echo $Toplambuaybebekarti;
$buaybe = @mysql_query("select sum(v24+v25+v26) as buaybesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buaybe)) {
if($kayitlar['buaybesonuc']==""){
$Toplambuaybebekeksi=0 ;
}else{
$Toplambuaybebekeksi=$kayitlar['buaybesonuc'];
}
}
//echo $Toplambuaybebekeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$bebekarti = @mysql_query("select sum(v22+v23) as bsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekarti)) {
if($kayitlar['bsonucarti']==""){
$Toplambarti=0 ;
}else{
$Toplambarti=$kayitlar['bsonucarti'];
}
}
//echo $Toplambarti;
$bebekeksi = @mysql_query("select sum(v24+v25+v26) as bsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekeksi)) {
if($kayitlar['bsonuceksi']==""){
$Toplambeksi=0 ;
}else{
$Toplambeksi=$kayitlar['bsonuceksi'];
}
}
//echo $Toplambeksi;
$devirbebek=$Toplambarti-$Toplambeksi;
//echo "GEEN YIL DEVR:".$devirbebek;
// AY DENEMES
//GEBE GEEN******************************************************************************************************************
//OCAK
$ocakBA = @mysql_query("select sum(v22+v23) as ocaktopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakBA)) {
if($kayitlar['ocaktopBA']==""){
$ocaktotalBA=0 ;
}else{
$ocaktotalBA=$kayitlar['ocaktopBA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalBA.".......";
//UBAT
$subatBA = @mysql_query("select sum(v22+v23) as subattopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatBA)) {
if($kayitlar['subattopBA']==""){
$subattotalBA=0 ;
}else{
$subattotalBA=$kayitlar['subattopBA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalBA.".......";
//MART
$martBA = @mysql_query("select sum(v22+v23) as marttopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martBA)) {
if($kayitlar['marttopBA']==""){
$marttotalBA=0 ;
}else{
$marttotalBA=$kayitlar['marttopBA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalBA.".......";
//NSAN
$nisanBA = @mysql_query("select sum(v22+v23) as nisantopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisBA = @mysql_query("select sum(v22+v23) as mayistopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisBA)) {
if($kayitlar['mayistopBA']==""){
$mayistotalBA=0 ;
}else{
$mayistotalBA=$kayitlar['mayistopBA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalBA.".......";
//HAZRAN
$haziranBA = @mysql_query("select sum(v22+v23) as hazirantopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzBA = @mysql_query("select sum(v22+v23) as temmuztopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzBA)) {
if($kayitlar['temmuztopBA']==""){
$temmuztotalBA=0 ;
}else{
$temmuztotalBA=$kayitlar['temmuztopBA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalBA.".......";
//AUSTOS
$agustosBA = @mysql_query("select sum(v22+v23) as agustostopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosBA)) {
if($kayitlar['agustostopBA']==""){
$agustostotalBA=0 ;
}else{
$agustostotalBA=$kayitlar['agustostopBA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalBA.".......";
//EYLL
$eylulBA = @mysql_query("select sum(v22+v23) as eylultopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulBA)) {
if($kayitlar['eylultopBA']==""){
$eylultotalBA=0 ;
}else{
$eylultotalBA=$kayitlar['eylultopBA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalBA.".......";
//EKM
$ekimBA = @mysql_query("select sum(v22+v23) as ekimtopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimBA = @mysql_query("select sum(v22+v23) as kasimtopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimBA)) {
if($kayitlar['kasimtopBA']==""){
$kasimtotalBA=0 ;
}else{
$kasimtotalBA=$kayitlar['kasimtopBA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalBA.".......";
//ARALIK
$aralikBA = @mysql_query("select sum(v22+v23) as araliktopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikBA)) {
if($kayitlar['araliktopBA']==""){
$araliktotalBA=0 ;
}else{
$araliktotalBA=$kayitlar['araliktopBA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalBA.".......";
if($aygelen=="OCAK"){
$aytoplamBA=0 ;
}
if($aygelen=="$subat"){
$aytoplamBA=$ocaktotalBA ;
}
if($aygelen=="MART"){
$aytoplamBA=$ocaktotalBA+$subattotalBA ;
}
if($aygelen=="$nisan"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA ;
}
if($aygelen=="MAYIS"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA ;
}
if($aygelen=="$haziran"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA ;
}
if($aygelen=="$agustos"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA ;
}
if($aygelen=="$eylul"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA ;
}
if($aygelen=="$ekim"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA ;
}
if($aygelen=="KASIM"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA+$ekimtotalBA ;
}
if($aygelen=="ARALIK"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA+$ekimtotalBA+$kasimtotalBA ;
}
//echo "Ay toplam: ".$aytoplamBA ;

// GEBE IKAN*****************************************************************************************************************
//OCAK
$ocakBE = @mysql_query("select sum(v24+v25+v26) as ocaktopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakBE)) {
if($kayitlar['ocaktopBE']==""){
$ocaktotalBE=0 ;
}else{
$ocaktotalBE=$kayitlar['ocaktopBE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalBE.".......";
//UBAT
$subatBE = @mysql_query("select sum(v24+v25+v26) as subattopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatBE)) {
if($kayitlar['subattopBE']==""){
$subattotalBE=0 ;
}else{
$subattotalBE=$kayitlar['subattopBE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalBE.".......";
//MART
$martBE = @mysql_query("select sum(v24+v25+v26) as marttopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martBE)) {
if($kayitlar['marttopBE']==""){
$marttotalBE=0 ;
}else{
$marttotalBE=$kayitlar['marttopBE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalBE.".......";
//NSAN
$nisanBE = @mysql_query("select sum(v24+v25+v26) as nisantopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisBE = @mysql_query("select sum(v24+v25+v26) as mayistopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisBE)) {
if($kayitlar['mayistopBE']==""){
$mayistotalBE=0 ;
}else{
$mayistotalBE=$kayitlar['mayistopBE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalBE.".......";
//HAZRAN
$haziranBE = @mysql_query("select sum(v24+v25+v26) as hazirantopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzBE = @mysql_query("select sum(v24+v25+v26) as temmuztopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzBE)) {
if($kayitlar['temmuztopBE']==""){
$temmuztotalBE=0 ;
}else{
$temmuztotalBE=$kayitlar['temmuztopBE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalBE.".......";
//AUSTOS
$agustosBE = @mysql_query("select sum(v24+v25+v26) as agustostopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosBE)) {
if($kayitlar['agustostopBE']==""){
$agustostotalBE=0 ;
}else{
$agustostotalBE=$kayitlar['agustostopBE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalBE.".......";
//EYLL
$eylulBE = @mysql_query("select sum(v24+v25+v26) as eylultopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulBE)) {
if($kayitlar['eylultopBE']==""){
$eylultotalBE=0 ;
}else{
$eylultotalBE=$kayitlar['eylultopBE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalBE.".......";
//EKM
$ekimBE = @mysql_query("select sum(v24+v25+v26) as ekimtopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimBE = @mysql_query("select sum(v24+v25+v26) as kasimtopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimBE)) {
if($kayitlar['kasimtopBE']==""){
$kasimtotalBE=0 ;
}else{
$kasimtotalBE=$kayitlar['kasimtopBE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalBE.".......";
//ARALIK
$aralikBE = @mysql_query("select sum(v24+v25+v26) as araliktopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikBE)) {
if($kayitlar['araliktopBE']==""){
$araliktotalBE=0 ;
}else{
$araliktotalBE=$kayitlar['araliktopBE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalBE.".......";
if($aygelen=="OCAK"){
$aytoplamBE=0 ;
}
if($aygelen=="$subat"){
$aytoplamBE=$ocaktotalBE ;
}
if($aygelen=="MART"){
$aytoplamBE=$ocaktotalBE+$subattotalBE ;
}
if($aygelen=="$nisan"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE ;
}
if($aygelen=="MAYIS"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE ;
}
if($aygelen=="$haziran"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE ;
}
if($aygelen=="$agustos"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE ;
}
if($aygelen=="$eylul"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE+$agustostotalBE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden bebek: ".$devredenbebek ;
$aysonubebekmevcudu=$devredenbebek+$Toplambuaybebekarti-$Toplambuaybebekeksi;
//echo "Ay Sonu bebek mevcudu: ".$aysonubebekmevcudu ;
//LOHUSA KISMI****************************************************************************************************************** 
//NDE BULUNULAN AY TOPLAMLARI
$buayla = @mysql_query("select sum(v27+v28) as buaylasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayla)) {
if($kayitlar['buaylasonuc']==""){
$Toplambuaylarti=0 ;
}else{
$Toplambuaylarti=$kayitlar['buaylasonuc'];
}
}
//echo $Toplambuaylarti;
$buayle = @mysql_query("select sum(v29+v30+v31) as buaylesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayle)) {
if($kayitlar['buaylesonuc']==""){
$Toplambuayleksi=0 ;
}else{
$Toplambuayleksi=$kayitlar['buaylesonuc'];
}
}
//echo $Toplambuayleksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$lohusaarti = @mysql_query("select sum(v27+v28) as lsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaarti)) {
if($kayitlar['lsonucarti']==""){
$Toplamlarti=0 ;
}else{
$Toplamlarti=$kayitlar['lsonucarti'];
}
}
//echo $Toplamlarti;
$lohusaeksi = @mysql_query("select sum(v29+v30+v31) as lsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaeksi)) {
if($kayitlar['lsonuceksi']==""){
$Toplamleksi=0 ;
}else{
$Toplamleksi=$kayitlar['lsonuceksi'];
}
}
//echo $Toplamleksi;
$devirl=$Toplamlarti-$Toplamleksi;
//echo "GEEN YIL DEVR:".$devirl;
// AY DENEMES
//LOHUSALIA GEEN*************************************************************************************************************
//OCAK
$ocakLA = @mysql_query("select sum(v27+v28) as ocaktopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakLA)) {
if($kayitlar['ocaktopLA']==""){
$ocaktotalLA=0 ;
}else{
$ocaktotalLA=$kayitlar['ocaktopLA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalLA.".......";
//UBAT
$subatLA = @mysql_query("select sum(v27+v28) as subattopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatLA)) {
if($kayitlar['subattopLA']==""){
$subattotalLA=0 ;
}else{
$subattotalLA=$kayitlar['subattopLA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalLA.".......";
//MART
$martLA = @mysql_query("select sum(v27+v28) as marttopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martLA)) {
if($kayitlar['marttopLA']==""){
$marttotalLA=0 ;
}else{
$marttotalLA=$kayitlar['marttopLA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalLA.".......";
//NSAN
$nisanLA = @mysql_query("select sum(v27+v28) as nisantopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisLA = @mysql_query("select sum(v27+v28) as mayistopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisLA)) {
if($kayitlar['mayistopLA']==""){
$mayistotalLA=0 ;
}else{
$mayistotalLA=$kayitlar['mayistopLA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalLA.".......";
//HAZRAN
$haziranLA = @mysql_query("select sum(v27+v28) as hazirantopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzLA = @mysql_query("select sum(v27+v28) as temmuztopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzLA)) {
if($kayitlar['temmuztopLA']==""){
$temmuztotalLA=0 ;
}else{
$temmuztotalLA=$kayitlar['temmuztopLA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalLA.".......";
//AUSTOS
$agustosLA = @mysql_query("select sum(v27+v28) as agustostopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosLA)) {
if($kayitlar['agustostopLA']==""){
$agustostotalLA=0 ;
}else{
$agustostotalLA=$kayitlar['agustostopLA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalLA.".......";
//EYLL
$eylulLA = @mysql_query("select sum(v27+v28) as eylultopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulLA)) {
if($kayitlar['eylultopLA']==""){
$eylultotalLA=0 ;
}else{
$eylultotalLA=$kayitlar['eylultopLA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalLA.".......";
//EKM
$ekimLA = @mysql_query("select sum(v27+v28) as ekimtopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimLA = @mysql_query("select sum(v27+v28) as kasimtopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimLA)) {
if($kayitlar['kasimtopLA']==""){
$kasimtotalLA=0 ;
}else{
$kasimtotalLA=$kayitlar['kasimtopLA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalLA.".......";
//ARALIK
$aralikLA = @mysql_query("select sum(v27+v28) as araliktopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikLA)) {
if($kayitlar['araliktopLA']==""){
$araliktotalLA=0 ;
}else{
$araliktotalLA=$kayitlar['araliktopLA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalLA.".......";
if($aygelen=="OCAK"){
$aytoplamLA=0 ;
}
if($aygelen=="$subat"){
$aytoplamLA=$ocaktotalLA ;
}
if($aygelen=="MART"){
$aytoplamLA=$ocaktotalLA+$subattotalLA ;
}
if($aygelen=="$nisan"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA ;
}
if($aygelen=="MAYIS"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA ;
}
if($aygelen=="$haziran"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA ;
}
if($aygelen=="$agustos"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA ;
}
if($aygelen=="$eylul"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA ;
}
if($aygelen=="$ekim"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA ;
}
if($aygelen=="KASIM"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA+$ekimtotalLA ;
}
if($aygelen=="ARALIK"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA+$ekimtotalLA+$kasimtotalLA ;
}
//echo "Ay toplam: ".$aytoplamLA ;

// LOHUSA IKAN*****************************************************************************************************************
//OCAK
$ocakLE = @mysql_query("select sum(v29+v30+v31) as ocaktopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakLE)) {
if($kayitlar['ocaktopLE']==""){
$ocaktotalLE=0 ;
}else{
$ocaktotalLE=$kayitlar['ocaktopLE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGE.".......";
//UBAT
$subatLE = @mysql_query("select sum(v29+v30+v31) as subattopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatLE)) {
if($kayitlar['subattopLE']==""){
$subattotalLE=0 ;
}else{
$subattotalLE=$kayitlar['subattopLE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalLE.".......";
//MART
$martLE = @mysql_query("select sum(v29+v30+v31) as marttopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martLE)) {
if($kayitlar['marttopLE']==""){
$marttotalLE=0 ;
}else{
$marttotalLE=$kayitlar['marttopLE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalLE.".......";
//NSAN
$nisanLE = @mysql_query("select sum(v29+v30+v31) as nisantopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisLE = @mysql_query("select sum(v29+v30+v31) as mayistopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisLE)) {
if($kayitlar['mayistopLE']==""){
$mayistotalLE=0 ;
}else{
$mayistotalLE=$kayitlar['mayistopLE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalLE.".......";
//HAZRAN
$haziranLE = @mysql_query("select sum(v29+v30+v31) as hazirantopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzLE = @mysql_query("select sum(v29+v30+v31) as temmuztopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzLE)) {
if($kayitlar['temmuztopLE']==""){
$temmuztotalLE=0 ;
}else{
$temmuztotalLE=$kayitlar['temmuztopLE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalLE.".......";
//AUSTOS
$agustosLE = @mysql_query("select sum(v29+v30+v31) as agustostopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosLE)) {
if($kayitlar['agustostopLE']==""){
$agustostotalLE=0 ;
}else{
$agustostotalLE=$kayitlar['agustostopLE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalLE.".......";
//EYLL
$eylulLE = @mysql_query("select sum(v29+v30+v31) as eylultopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulLE)) {
if($kayitlar['eylultopLE']==""){
$eylultotalLE=0 ;
}else{
$eylultotalLE=$kayitlar['eylultopLE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalLE.".......";
//EKM
$ekimLE = @mysql_query("select sum(v29+v30+v31) as ekimtopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimLE = @mysql_query("select sum(v29+v30+v31) as kasimtopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimLE)) {
if($kayitlar['kasimtopLE']==""){
$kasimtotalLE=0 ;
}else{
$kasimtotalLE=$kayitlar['kasimtopLE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalLE.".......";
//ARALIK
$aralikLE = @mysql_query("select sum(v29+v30+v31) as araliktopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikLE)) {
if($kayitlar['araliktopLE']==""){
$araliktotalLE=0 ;
}else{
$araliktotalLE=$kayitlar['araliktopLE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalLE.".......";
if($aygelen=="OCAK"){
$aytoplamLE=0 ;
}
if($aygelen=="$subat"){
$aytoplamLE=$ocaktotalLE ;
}
if($aygelen=="MART"){
$aytoplamLE=$ocaktotalLE+$subattotalLE ;
}
if($aygelen=="$nisan"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE ;
}
if($aygelen=="MAYIS"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE ;
}
if($aygelen=="$haziran"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE ;
}
if($aygelen=="$agustos"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE ;
}
if($aygelen=="$eylul"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE+$agustostotalLE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden lohusa: ".$devredenlohusa ;
$aysonulohusamevcudu=$devredenlohusa+$Toplambuaylarti-$Toplambuayleksi;
//echo "Ay Sonu lohusa mevcudu: ".$aysonulohusamevcudu ;
//OCUK KISMI********************************************************************************************************************
//NDE BULUNULAN AY TOPLAMLARI
$buayca = @mysql_query("select sum(v32+v33) as buaycasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayca)) {
if($kayitlar['buaycasonuc']==""){
$Toplambuaycocukarti=0 ;
}else{
$Toplambuaycocukarti=$kayitlar['buaycasonuc'];
}
}
//echo $Toplambuaycocukarti;
$buayce = @mysql_query("select sum(v34+v35+v36) as buaycesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayce)) {
if($kayitlar['buaycesonuc']==""){
$Toplambuaycocukeksi=0 ;
}else{
$Toplambuaycocukeksi=$kayitlar['buaycesonuc'];
}
}
//echo $Toplambuaycocukeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$cocukarti = @mysql_query("select sum(v32+v33) as csonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukarti)) {
if($kayitlar['csonucarti']==""){
$Toplamcarti=0 ;
}else{
$Toplamcarti=$kayitlar['csonucarti'];
}
}
//echo $Toplamcarti;
$cocukeksi = @mysql_query("select sum(v34+v35+v36) as csonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukeksi)) {
if($kayitlar['csonuceksi']==""){
$Toplamceksi=0 ;
}else{
$Toplamceksi=$kayitlar['csonuceksi'];
}
}
//echo $Toplamceksi;
$devircocuk=$Toplamcarti-$Toplamceksi;
//echo "GEEN YIL DEVR:".$devircocuk;
// AY DENEMES
//OCUK GEEN******************************************************************************************************************
//OCAK
$ocakCA = @mysql_query("select sum(v32+v33) as ocaktopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakCA)) {
if($kayitlar['ocaktopCA']==""){
$ocaktotalCA=0 ;
}else{
$ocaktotalCA=$kayitlar['ocaktopCA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalCA.".......";
//UBAT
$subatCA = @mysql_query("select sum(v32+v33) as subattopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatCA)) {
if($kayitlar['subattopCA']==""){
$subattotalCA=0 ;
}else{
$subattotalCA=$kayitlar['subattopCA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalCA.".......";
//MART
$martCA = @mysql_query("select sum(v32+v33) as marttopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martCA)) {
if($kayitlar['marttopCA']==""){
$marttotalCA=0 ;
}else{
$marttotalCA=$kayitlar['marttopCA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalCA.".......";
//NSAN
$nisanCA = @mysql_query("select sum(v32+v33) as nisantopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisCA = @mysql_query("select sum(v32+v33) as mayistopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisCA)) {
if($kayitlar['mayistopCA']==""){
$mayistotalCA=0 ;
}else{
$mayistotalCA=$kayitlar['mayistopCA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalCA.".......";
//HAZRAN
$haziranCA = @mysql_query("select sum(v32+v33) as hazirantopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzCA = @mysql_query("select sum(v32+v33) as temmuztopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzCA)) {
if($kayitlar['temmuztopCA']==""){
$temmuztotalCA=0 ;
}else{
$temmuztotalCA=$kayitlar['temmuztopCA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalCA.".......";
//AUSTOS
$agustosCA = @mysql_query("select sum(v32+v33) as agustostopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosCA)) {
if($kayitlar['agustostopCA']==""){
$agustostotalCA=0 ;
}else{
$agustostotalCA=$kayitlar['agustostopCA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalCA.".......";
//EYLL
$eylulCA = @mysql_query("select sum(v32+v33) as eylultopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulCA)) {
if($kayitlar['eylultopCA']==""){
$eylultotalCA=0 ;
}else{
$eylultotalCA=$kayitlar['eylultopCA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalCA.".......";
//EKM
$ekimCA = @mysql_query("select sum(v32+v33) as ekimtopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimCA = @mysql_query("select sum(v32+v33) as kasimtopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimCA)) {
if($kayitlar['kasimtopCA']==""){
$kasimtotalCA=0 ;
}else{
$kasimtotalCA=$kayitlar['kasimtopCA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalCA.".......";
//ARALIK
$aralikCA = @mysql_query("select sum(v32+v33) as araliktopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikCA)) {
if($kayitlar['araliktopCA']==""){
$araliktotalCA=0 ;
}else{
$araliktotalCA=$kayitlar['araliktopCA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalCA.".......";
if($aygelen=="OCAK"){
$aytoplamCA=0 ;
}
if($aygelen=="$subat"){
$aytoplamCA=$ocaktotalCA ;
}
if($aygelen=="MART"){
$aytoplamCA=$ocaktotalCA+$subattotalCA ;
}
if($aygelen=="$nisan"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA ;
}
if($aygelen=="MAYIS"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA ;
}
if($aygelen=="$haziran"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA ;
}
if($aygelen=="$agustos"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA ;
}
if($aygelen=="$eylul"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA ;
}
if($aygelen=="$ekim"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA ;
}
if($aygelen=="KASIM"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA+$ekimtotalCA ;
}
if($aygelen=="ARALIK"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA+$ekimtotalCA+$kasimtotalCA ;
}
//echo "Ay toplam: ".$aytoplamCA ;

// OCUK IKAN*****************************************************************************************************************
//OCAK
$ocakCE = @mysql_query("select sum(v34+v35+v36) as ocaktopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakCE)) {
if($kayitlar['ocaktopCE']==""){
$ocaktotalCE=0 ;
}else{
$ocaktotalCE=$kayitlar['ocaktopCE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalCE.".......";
//UBAT
$subatCE = @mysql_query("select sum(v34+v35+v36) as subattopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatCE)) {
if($kayitlar['subattopCE']==""){
$subattotalCE=0 ;
}else{
$subattotalCE=$kayitlar['subattopCE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalCE.".......";
//MART
$martCE = @mysql_query("select sum(v34+v35+v36) as marttopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martCE)) {
if($kayitlar['marttopCE']==""){
$marttotalCE=0 ;
}else{
$marttotalCE=$kayitlar['marttopCE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalCE.".......";
//NSAN
$nisanCE = @mysql_query("select sum(v34+v35+v36) as nisantopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisCE = @mysql_query("select sum(v34+v35+v36) as mayistopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisCE)) {
if($kayitlar['mayistopCE']==""){
$mayistotalCE=0 ;
}else{
$mayistotalCE=$kayitlar['mayistopCE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalCE.".......";
//HAZRAN
$haziranCE = @mysql_query("select sum(v34+v35+v36) as hazirantopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzCE = @mysql_query("select sum(v34+v35+v36) as temmuztopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzCE)) {
if($kayitlar['temmuztopCE']==""){
$temmuztotalCE=0 ;
}else{
$temmuztotalCE=$kayitlar['temmuztopCE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalCE.".......";
//AUSTOS
$agustosCE = @mysql_query("select sum(v34+v35+v36) as agustostopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosCE)) {
if($kayitlar['agustostopCE']==""){
$agustostotalCE=0 ;
}else{
$agustostotalCE=$kayitlar['agustostopCE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalCE.".......";
//EYLL
$eylulCE = @mysql_query("select sum(v34+v35+v36) as eylultopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulCE)) {
if($kayitlar['eylultopCE']==""){
$eylultotalCE=0 ;
}else{
$eylultotalCE=$kayitlar['eylultopCE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalCE.".......";
//EKM
$ekimCE = @mysql_query("select sum(v34+v35+v36) as ekimtopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimCE = @mysql_query("select sum(v34+v35+v36) as kasimtopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimCE)) {
if($kayitlar['kasimtopCE']==""){
$kasimtotalCE=0 ;
}else{
$kasimtotalCE=$kayitlar['kasimtopCE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalCE.".......";
//ARALIK
$aralikCE = @mysql_query("select sum(v34+v35+v36) as araliktopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikCE)) {
if($kayitlar['araliktopCE']==""){
$araliktotalCE=0 ;
}else{
$araliktotalCE=$kayitlar['araliktopCE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalCE.".......";
if($aygelen=="OCAK"){
$aytoplamCE=0 ;
}
if($aygelen=="$subat"){
$aytoplamCE=$ocaktotalCE ;
}
if($aygelen=="MART"){
$aytoplamCE=$ocaktotalCE+$subattotalCE ;
}
if($aygelen=="$nisan"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE ;
}
if($aygelen=="MAYIS"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE ;
}
if($aygelen=="$haziran"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE ;
}
if($aygelen=="$agustos"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE ;
}
if($aygelen=="$eylul"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE+$agustostotalCE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden cocuk: ".$devredencocuk ;
$aysonucocukmevcudu=$devredencocuk+$Toplambuaycocukarti-$Toplambuaycocukeksi;
//echo "Ay Sonu cocuk mevcudu: ".$aysonucocukmevcudu ;
//IMPLANT KISMI********************************************************************************************************************
//NDE BULUNULAN AY TOPLAMLARI
$buayxa = @mysql_query("select sum(v37+v38) as buayxasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayxa)) {
if($kayitlar['buayxasonuc']==""){
$Toplambuayimparti=0 ;
}else{
$Toplambuayimparti=$kayitlar['buayxasonuc'];
}
}
//echo $Toplambuayimparti;
$buayxe = @mysql_query("select sum(v39+v40+v41) as buayxesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayxe)) {
if($kayitlar['buayxesonuc']==""){
$Toplambuayimpeksi=0 ;
}else{
$Toplambuayimpeksi=$kayitlar['buayxesonuc'];
}
}
//echo $Toplambuayimpeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$imparti = @mysql_query("select sum(v37+v38) as xsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($imparti)) {
if($kayitlar['xsonucarti']==""){
$Toplamxarti=0 ;
}else{
$Toplamxarti=$kayitlar['xsonucarti'];
}
}
//echo $Toplamxarti;
$impeksi = @mysql_query("select sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($impeksi)) {
if($kayitlar['xsonuceksi']==""){
$Toplamxeksi=0 ;
}else{
$Toplamxeksi=$kayitlar['xsonuceksi'];
}
}
//echo $Toplamxeksi;
$devirimp=$Toplamxarti-$Toplamxeksi;
//echo "GEEN YIL DEVR:".$devirimp;
// AY DENEMES
//OCUK GEEN******************************************************************************************************************
//OCAK
$ocakXA = @mysql_query("select sum(v37+v38) as ocaktopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakXA)) {
if($kayitlar['ocaktopXA']==""){
$ocaktotalXA=0 ;
}else{
$ocaktotalXA=$kayitlar['ocaktopXA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalXA.".......";
//UBAT
$subatXA = @mysql_query("select sum(v37+v38) as subattopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatXA)) {
if($kayitlar['subattopXA']==""){
$subattotalXA=0 ;
}else{
$subattotalXA=$kayitlar['subattopXA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalXA.".......";
//MART
$martXA = @mysql_query("select sum(v37+v38) as marttopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martXA)) {
if($kayitlar['marttopXA']==""){
$marttotalXA=0 ;
}else{
$marttotalXA=$kayitlar['marttopXA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalXA.".......";
//NSAN
$nisanXA = @mysql_query("select sum(v37+v38) as nisantopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
while ($kayitlar = mysql_fetch_array($nisanXA)) {
if($kayitlar['nisantopXA']==""){
$nisantotalXA=0 ;
}else{
$nisantotalXA=$kayitlar['nisantopXA'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalXA.".......";
//MAYIS
$mayisXA = @mysql_query("select sum(v37+v38) as mayistopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisXA)) {
if($kayitlar['mayistopXA']==""){
$mayistotalXA=0 ;
}else{
$mayistotalXA=$kayitlar['mayistopXA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalXA.".......";
//HAZRAN
$haziranXA = @mysql_query("select sum(v37+v38) as hazirantopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
while ($kayitlar = mysql_fetch_array($haziranXA)) {
if($kayitlar['hazirantopXA']==""){
$hazirantotalXA=0 ;
}else{
$hazirantotalXA=$kayitlar['hazirantopXA'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalXA.".......";
//TEMMUZ
$temmuzXA = @mysql_query("select sum(v37+v38) as temmuztopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzXA)) {
if($kayitlar['temmuztopXA']==""){
$temmuztotalXA=0 ;
}else{
$temmuztotalXA=$kayitlar['temmuztopXA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalXA.".......";
//AUSTOS
$agustosXA = @mysql_query("select sum(v37+v38) as agustostopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosXA)) {
if($kayitlar['agustostopXA']==""){
$agustostotalXA=0 ;
}else{
$agustostotalXA=$kayitlar['agustostopXA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalXA.".......";
//EYLL
$eylulXA = @mysql_query("select sum(v37+v38) as eylultopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulXA)) {
if($kayitlar['eylultopXA']==""){
$eylultotalXA=0 ;
}else{
$eylultotalXA=$kayitlar['eylultopXA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalXA.".......";
//EKM
$ekimXA = @mysql_query("select sum(v37+v38) as ekimtopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
while ($kayitlar = mysql_fetch_array($ekimXA)) {
if($kayitlar['ekimtopXA']==""){
$ekimtotalXA=0 ;
}else{
$ekimtotalXA=$kayitlar['ekimtopXA'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalXA.".......";
//KASIM
$kasimXA = @mysql_query("select sum(v37+v38) as kasimtopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimXA)) {
if($kayitlar['kasimtopXA']==""){
$kasimtotalXA=0 ;
}else{
$kasimtotalXA=$kayitlar['kasimtopXA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalXA.".......";
//ARALIK
$aralikXA = @mysql_query("select sum(v37+v38) as araliktopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikXA)) {
if($kayitlar['araliktopXA']==""){
$araliktotalXA=0 ;
}else{
$araliktotalXA=$kayitlar['araliktopXA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalXA.".......";
if($aygelen=="OCAK"){
$aytoplamXA=0 ;
}
if($aygelen=="$subat"){
$aytoplamXA=$ocaktotalXA ;
}
if($aygelen=="MART"){
$aytoplamXA=$ocaktotalXA+$subattotalXA ;
}
if($aygelen=="$nisan"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA ;
}
if($aygelen=="MAYIS"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA ;
}
if($aygelen=="$haziran"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA ;
}
if($aygelen=="$agustos"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA ;
}
if($aygelen=="$eylul"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA ;
}
if($aygelen=="$ekim"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA+$eylultotalXA ;
}
if($aygelen=="KASIM"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA+$eylultotalXA+$ekimtotalXA ;
}
if($aygelen=="ARALIK"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA+$eylultotalXA+$ekimtotalXA+$kasimtotalXA ;
}
//echo "Ay toplam: ".$aytoplamXA ;

// OCUK IKAN*****************************************************************************************************************
//OCAK
$ocakXE = @mysql_query("select sum(v39+v40+v41) as ocaktopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakXE)) {
if($kayitlar['ocaktopXE']==""){
$ocaktotalXE=0 ;
}else{
$ocaktotalXE=$kayitlar['ocaktopXE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalXE.".......";
//UBAT
$subatXE = @mysql_query("select sum(v39+v40+v41) as subattopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatXE)) {
if($kayitlar['subattopXE']==""){
$subattotalXE=0 ;
}else{
$subattotalXE=$kayitlar['subattopXE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalXE.".......";
//MART
$martXE = @mysql_query("select sum(v39+v40+v41) as marttopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martXE)) {
if($kayitlar['marttopXE']==""){
$marttotalXE=0 ;
}else{
$marttotalXE=$kayitlar['marttopXE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalXE.".......";
//NSAN
$nisanXE = @mysql_query("select sum(v39+v40+v41) as nisantopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
while ($kayitlar = mysql_fetch_array($nisanXE)) {
if($kayitlar['nisantopXE']==""){
$nisantotalXE=0 ;
}else{
$nisantotalXE=$kayitlar['nisantopXE'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalXE.".......";
//MAYIS
$mayisXE = @mysql_query("select sum(v39+v40+v41) as mayistopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisXE)) {
if($kayitlar['mayistopXE']==""){
$mayistotalXE=0 ;
}else{
$mayistotalXE=$kayitlar['mayistopXE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalXE.".......";
//HAZRAN
$haziranXE = @mysql_query("select sum(v39+v40+v41) as hazirantopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
while ($kayitlar = mysql_fetch_array($haziranXE)) {
if($kayitlar['hazirantopXE']==""){
$hazirantotalXE=0 ;
}else{
$hazirantotalXE=$kayitlar['hazirantopXE'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalXE.".......";
//TEMMUZ
$temmuzXE = @mysql_query("select sum(v39+v40+v41) as temmuztopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzXE)) {
if($kayitlar['temmuztopXE']==""){
$temmuztotalXE=0 ;
}else{
$temmuztotalXE=$kayitlar['temmuztopXE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalXE.".......";
//AUSTOS
$agustosXE = @mysql_query("select sum(v39+v40+v41) as agustostopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosXE)) {
if($kayitlar['agustostopXE']==""){
$agustostotalXE=0 ;
}else{
$agustostotalXE=$kayitlar['agustostopXE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalXE.".......";
//EYLL
$eylulXE = @mysql_query("select sum(v39+v40+v41) as eylultopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulXE)) {
if($kayitlar['eylultopXE']==""){
$eylultotalXE=0 ;
}else{
$eylultotalXE=$kayitlar['eylultopXE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalXE.".......";
//EKM
$ekimXE = @mysql_query("select sum(v39+v40+v41) as ekimtopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
while ($kayitlar = mysql_fetch_array($ekimXE)) {
if($kayitlar['ekimtopXE']==""){
$ekimtotalXE=0 ;
}else{
$ekimtotalXE=$kayitlar['ekimtopXE'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalXE.".......";
//KASIM
$kasimXE = @mysql_query("select sum(v39+v40+v41) as kasimtopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimXE)) {
if($kayitlar['kasimtopXE']==""){
$kasimtotalXE=0 ;
}else{
$kasimtotalXE=$kayitlar['kasimtopXE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalXE.".......";
//ARALIK
$aralikXE = @mysql_query("select sum(v39+v40+v41) as araliktopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikXE)) {
if($kayitlar['araliktopXE']==""){
$araliktotalXE=0 ;
}else{
$araliktotalXE=$kayitlar['araliktopXE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalXE.".......";
if($aygelen=="OCAK"){
$aytoplamXE=0 ;
}
if($aygelen=="$subat"){
$aytoplamXE=$ocaktotalXE ;
}
if($aygelen=="MART"){
$aytoplamXE=$ocaktotalXE+$subattotalXE ;
}
if($aygelen=="$nisan"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE ;
}
if($aygelen=="MAYIS"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE ;
}
if($aygelen=="$haziran"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE ;
}
if($aygelen=="$agustos"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE ;
}
if($aygelen=="$eylul"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE ;
}
if($aygelen=="$ekim"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE+$eylultotalXE ;
}
if($aygelen=="KASIM"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE+$eylultotalXE+$ekimtotalXE ;
}
if($aygelen=="ARALIK"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE+$eylultotalXE+$ekimtotalXE+$kasimtotalXE ;
}
//echo "Ay toplam: ".$aytoplamXE ;
$xtoplam=$aytoplamXA-$aytoplamXE ;
//echo "GENEL TOPLAM: ".$xtoplam ;
$devredenimp=$devirimp+$aytoplamXA-$aytoplamXE ;
//echo "Geen aydan devreden implant: ".$devredenimp ;
$aysonuimpmevcudu=$devredenimp+$Toplambuayimparti-$Toplambuayimpeksi;
//echo "Ay Sonu implant mevcudu: ".$aysonuimpmevcudu ;
}else{
//GEBE KISMI********************************************************************************************************************** 
//NDE BULUNULAN AY TOPLAMLARI
$buayga = @mysql_query("select sum(v17+v18) as buaygasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayga)) {
if($kayitlar['buaygasonuc']==""){
$Toplambuayarti=0 ;
}else{
$Toplambuayarti=$kayitlar['buaygasonuc'];
}
}
//echo $Toplambuayarti;
$buayge = @mysql_query("select sum(v19+v20+v21) as buaygesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayge)) {
if($kayitlar['buaygesonuc']==""){
$Toplambuayeksi=0 ;
}else{
$Toplambuayeksi=$kayitlar['buaygesonuc'];
}
}
//echo $Toplambuayeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$gebearti = @mysql_query("select sum(v17+v18) as gsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($gebearti)) {
if($kayitlar['gsonucarti']==""){
$Toplamgarti=0 ;
}else{
$Toplamgarti=$kayitlar['gsonucarti'];
}
}
//echo $Toplamgarti;
$gebeeksi = @mysql_query("select sum(v19+v20+v21) as gsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($gebeeksi)) {
if($kayitlar['gsonuceksi']==""){
$Toplamgeksi=0 ;
}else{
$Toplamgeksi=$kayitlar['gsonuceksi'];
}
}
//echo $Toplamgeksi;
$devir=$Toplamgarti-$Toplamgeksi;
//echo "GEEN YIL DEVR:".$devir;
// AY DENEMES
//GEBE GEEN******************************************************************************************************************
//OCAK
$ocakGA = @mysql_query("select sum(v17+v18) as ocaktopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakGA)) {
if($kayitlar['ocaktopGA']==""){
$ocaktotalGA=0 ;
}else{
$ocaktotalGA=$kayitlar['ocaktopGA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGA.".......";
//UBAT
$subatGA = @mysql_query("select sum(v17+v18) as subattopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatGA)) {
if($kayitlar['subattopGA']==""){
$subattotalGA=0 ;
}else{
$subattotalGA=$kayitlar['subattopGA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalGA.".......";
//MART
$martGA = @mysql_query("select sum(v17+v18) as marttopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martGA)) {
if($kayitlar['marttopGA']==""){
$marttotalGA=0 ;
}else{
$marttotalGA=$kayitlar['marttopGA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalGA.".......";
//NSAN
$nisanGA = @mysql_query("select sum(v17+v18) as nisantopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisGA = @mysql_query("select sum(v17+v18) as mayistopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisGA)) {
if($kayitlar['mayistopGA']==""){
$mayistotalGA=0 ;
}else{
$mayistotalGA=$kayitlar['mayistopGA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalGA.".......";
//HAZRAN
$haziranGA = @mysql_query("select sum(v17+v18) as hazirantopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzGA = @mysql_query("select sum(v17+v18) as temmuztopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzGA)) {
if($kayitlar['temmuztopGA']==""){
$temmuztotalGA=0 ;
}else{
$temmuztotalGA=$kayitlar['temmuztopGA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalGA.".......";
//AUSTOS
$agustosGA = @mysql_query("select sum(v17+v18) as agustostopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosGA)) {
if($kayitlar['agustostopGA']==""){
$agustostotalGA=0 ;
}else{
$agustostotalGA=$kayitlar['agustostopGA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalGA.".......";
//EYLL
$eylulGA = @mysql_query("select sum(v17+v18) as eylultopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulGA)) {
if($kayitlar['eylultopGA']==""){
$eylultotalGA=0 ;
}else{
$eylultotalGA=$kayitlar['eylultopGA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalGA.".......";
//EKM
$ekimGA = @mysql_query("select sum(v17+v18) as ekimtopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimGA = @mysql_query("select sum(v17+v18) as kasimtopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimGA)) {
if($kayitlar['kasimtopGA']==""){
$kasimtotalGA=0 ;
}else{
$kasimtotalGA=$kayitlar['kasimtopGA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalGA.".......";
//ARALIK
$aralikGA = @mysql_query("select sum(v17+v18) as araliktopGA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikGA)) {
if($kayitlar['araliktopGA']==""){
$araliktotalGA=0 ;
}else{
$araliktotalGA=$kayitlar['araliktopGA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalGA.".......";
if($aygelen=="OCAK"){
$aytoplamGA=0 ;
}
if($aygelen=="$subat"){
$aytoplamGA=$ocaktotalGA ;
}
if($aygelen=="MART"){
$aytoplamGA=$ocaktotalGA+$subattotalGA ;
}
if($aygelen=="$nisan"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA ;
}
if($aygelen=="MAYIS"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA ;
}
if($aygelen=="$haziran"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA ;
}
if($aygelen=="$agustos"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA ;
}
if($aygelen=="$eylul"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA ;
}
if($aygelen=="$ekim"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA ;
}
if($aygelen=="KASIM"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA+$ekimtotalGA ;
}
if($aygelen=="ARALIK"){
$aytoplamGA=$ocaktotalGA+$subattotalGA+$marttotalGA+$nisantotalGA+$mayistotalGA+$hazirantotalGA+$temmuztotalGA+$agustostotalGA+$eylultotalGA+$ekimtotalGA+$kasimtotalGA ;
}
//echo "Ay toplam: ".$aytoplamGA ;

// GEBE IKAN*****************************************************************************************************************
//OCAK
$ocakGE = @mysql_query("select sum(v19+v20+v21) as ocaktopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakGE)) {
if($kayitlar['ocaktopGE']==""){
$ocaktotalGE=0 ;
}else{
$ocaktotalGE=$kayitlar['ocaktopGE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGE.".......";
//UBAT
$subatGE = @mysql_query("select sum(v19+v20+v21) as subattopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatGE)) {
if($kayitlar['subattopGE']==""){
$subattotalGE=0 ;
}else{
$subattotalGE=$kayitlar['subattopGE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalGE.".......";
//MART
$martGE = @mysql_query("select sum(v19+v20+v21) as marttopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martGE)) {
if($kayitlar['marttopGE']==""){
$marttotalGE=0 ;
}else{
$marttotalGE=$kayitlar['marttopGE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalGE.".......";
//NSAN
$nisanGE = @mysql_query("select sum(v19+v20+v21) as nisantopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisGE = @mysql_query("select sum(v19+v20+v21) as mayistopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisGE)) {
if($kayitlar['mayistopGE']==""){
$mayistotalGE=0 ;
}else{
$mayistotalGE=$kayitlar['mayistopGE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalGE.".......";
//HAZRAN
$haziranGE = @mysql_query("select sum(v19+v20+v21) as hazirantopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzGE = @mysql_query("select sum(v19+v20+v21) as temmuztopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzGE)) {
if($kayitlar['temmuztopGE']==""){
$temmuztotalGE=0 ;
}else{
$temmuztotalGE=$kayitlar['temmuztopGE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalGE.".......";
//AUSTOS
$agustosGE = @mysql_query("select sum(v19+v20+v21) as agustostopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosGE)) {
if($kayitlar['agustostopGE']==""){
$agustostotalGE=0 ;
}else{
$agustostotalGE=$kayitlar['agustostopGE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalGE.".......";
//EYLL
$eylulGE = @mysql_query("select sum(v19+v20+v21) as eylultopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulGE)) {
if($kayitlar['eylultopGE']==""){
$eylultotalGE=0 ;
}else{
$eylultotalGE=$kayitlar['eylultopGE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalGE.".......";
//EKM
$ekimGE = @mysql_query("select sum(v19+v20+v21) as ekimtopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimGE = @mysql_query("select sum(v19+v20+v21) as kasimtopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimGE)) {
if($kayitlar['kasimtopGE']==""){
$kasimtotalGE=0 ;
}else{
$kasimtotalGE=$kayitlar['kasimtopGE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalGE.".......";
//ARALIK
$aralikGE = @mysql_query("select sum(v19+v20+v21) as araliktopGE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikGE)) {
if($kayitlar['araliktopGE']==""){
$araliktotalGE=0 ;
}else{
$araliktotalGE=$kayitlar['araliktopGE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalGE.".......";
if($aygelen=="OCAK"){
$aytoplamGE=0 ;
}
if($aygelen=="$subat"){
$aytoplamGE=$ocaktotalGE ;
}
if($aygelen=="MART"){
$aytoplamGE=$ocaktotalGE+$subattotalGE ;
}
if($aygelen=="$nisan"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE ;
}
if($aygelen=="MAYIS"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE ;
}
if($aygelen=="$haziran"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE ;
}
if($aygelen=="$agustos"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE ;
}
if($aygelen=="$eylul"){
$aytoplamGE=$ocaktotalGE+$subattotalGE+$marttotalGE+$nisantotalGE+$mayistotalGE+$hazirantotalGE+$temmuztotalGE+$agustostotalGE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden gebe: ".$devredengebe ;
$aysonugebemevcudu=$devredengebe+$Toplambuayarti-$Toplambuayeksi;
//echo "Ay Sonu gebe mevcudu: ".$aysonugebemevcudu ;
//BEBEK KISMI******************************************************************************************************************************************************
//NDE BULUNULAN AY TOPLAMLARI
$buayba = @mysql_query("select sum(v22+v23) as buaybasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayba)) {
if($kayitlar['buaybasonuc']==""){
$Toplambuaybebekarti=0 ;
}else{
$Toplambuaybebekarti=$kayitlar['buaybasonuc'];
}
}
//echo $Toplambuaybebekarti;
$buaybe = @mysql_query("select sum(v24+v25+v26) as buaybesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buaybe)) {
if($kayitlar['buaybesonuc']==""){
$Toplambuaybebekeksi=0 ;
}else{
$Toplambuaybebekeksi=$kayitlar['buaybesonuc'];
}
}
//echo $Toplambuaybebekeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$bebekarti = @mysql_query("select sum(v22+v23) as bsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekarti)) {
if($kayitlar['bsonucarti']==""){
$Toplambarti=0 ;
}else{
$Toplambarti=$kayitlar['bsonucarti'];
}
}
//echo $Toplambarti;
$bebekeksi = @mysql_query("select sum(v24+v25+v26) as bsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($bebekeksi)) {
if($kayitlar['bsonuceksi']==""){
$Toplambeksi=0 ;
}else{
$Toplambeksi=$kayitlar['bsonuceksi'];
}
}
//echo $Toplambeksi;
$devirbebek=$Toplambarti-$Toplambeksi;
//echo "GEEN YIL DEVR:".$devirbebek;
// AY DENEMES
//GEBE GEEN******************************************************************************************************************
//OCAK
$ocakBA = @mysql_query("select sum(v22+v23) as ocaktopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakBA)) {
if($kayitlar['ocaktopBA']==""){
$ocaktotalBA=0 ;
}else{
$ocaktotalBA=$kayitlar['ocaktopBA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalBA.".......";
//UBAT
$subatBA = @mysql_query("select sum(v22+v23) as subattopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatBA)) {
if($kayitlar['subattopBA']==""){
$subattotalBA=0 ;
}else{
$subattotalBA=$kayitlar['subattopBA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalBA.".......";
//MART
$martBA = @mysql_query("select sum(v22+v23) as marttopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martBA)) {
if($kayitlar['marttopBA']==""){
$marttotalBA=0 ;
}else{
$marttotalBA=$kayitlar['marttopBA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalBA.".......";
//NSAN
$nisanBA = @mysql_query("select sum(v22+v23) as nisantopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisBA = @mysql_query("select sum(v22+v23) as mayistopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisBA)) {
if($kayitlar['mayistopBA']==""){
$mayistotalBA=0 ;
}else{
$mayistotalBA=$kayitlar['mayistopBA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalBA.".......";
//HAZRAN
$haziranBA = @mysql_query("select sum(v22+v23) as hazirantopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzBA = @mysql_query("select sum(v22+v23) as temmuztopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzBA)) {
if($kayitlar['temmuztopBA']==""){
$temmuztotalBA=0 ;
}else{
$temmuztotalBA=$kayitlar['temmuztopBA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalBA.".......";
//AUSTOS
$agustosBA = @mysql_query("select sum(v22+v23) as agustostopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosBA)) {
if($kayitlar['agustostopBA']==""){
$agustostotalBA=0 ;
}else{
$agustostotalBA=$kayitlar['agustostopBA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalBA.".......";
//EYLL
$eylulBA = @mysql_query("select sum(v22+v23) as eylultopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulBA)) {
if($kayitlar['eylultopBA']==""){
$eylultotalBA=0 ;
}else{
$eylultotalBA=$kayitlar['eylultopBA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalBA.".......";
//EKM
$ekimBA = @mysql_query("select sum(v22+v23) as ekimtopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimBA = @mysql_query("select sum(v22+v23) as kasimtopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimBA)) {
if($kayitlar['kasimtopBA']==""){
$kasimtotalBA=0 ;
}else{
$kasimtotalBA=$kayitlar['kasimtopBA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalBA.".......";
//ARALIK
$aralikBA = @mysql_query("select sum(v22+v23) as araliktopBA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikBA)) {
if($kayitlar['araliktopBA']==""){
$araliktotalBA=0 ;
}else{
$araliktotalBA=$kayitlar['araliktopBA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalBA.".......";
if($aygelen=="OCAK"){
$aytoplamBA=0 ;
}
if($aygelen=="$subat"){
$aytoplamBA=$ocaktotalBA ;
}
if($aygelen=="MART"){
$aytoplamBA=$ocaktotalBA+$subattotalBA ;
}
if($aygelen=="$nisan"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA ;
}
if($aygelen=="MAYIS"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA ;
}
if($aygelen=="$haziran"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA ;
}
if($aygelen=="$agustos"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA ;
}
if($aygelen=="$eylul"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA ;
}
if($aygelen=="$ekim"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA ;
}
if($aygelen=="KASIM"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA+$ekimtotalBA ;
}
if($aygelen=="ARALIK"){
$aytoplamBA=$ocaktotalBA+$subattotalBA+$marttotalBA+$nisantotalBA+$mayistotalBA+$hazirantotalBA+$temmuztotalBA+$agustostotalBA+$eylultotalBA+$ekimtotalBA+$kasimtotalBA ;
}
//echo "Ay toplam: ".$aytoplamBA ;

// GEBE IKAN*****************************************************************************************************************
//OCAK
$ocakBE = @mysql_query("select sum(v24+v25+v26) as ocaktopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakBE)) {
if($kayitlar['ocaktopBE']==""){
$ocaktotalBE=0 ;
}else{
$ocaktotalBE=$kayitlar['ocaktopBE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalBE.".......";
//UBAT
$subatBE = @mysql_query("select sum(v24+v25+v26) as subattopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatBE)) {
if($kayitlar['subattopBE']==""){
$subattotalBE=0 ;
}else{
$subattotalBE=$kayitlar['subattopBE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalBE.".......";
//MART
$martBE = @mysql_query("select sum(v24+v25+v26) as marttopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martBE)) {
if($kayitlar['marttopBE']==""){
$marttotalBE=0 ;
}else{
$marttotalBE=$kayitlar['marttopBE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalBE.".......";
//NSAN
$nisanBE = @mysql_query("select sum(v24+v25+v26) as nisantopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisBE = @mysql_query("select sum(v24+v25+v26) as mayistopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisBE)) {
if($kayitlar['mayistopBE']==""){
$mayistotalBE=0 ;
}else{
$mayistotalBE=$kayitlar['mayistopBE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalBE.".......";
//HAZRAN
$haziranBE = @mysql_query("select sum(v24+v25+v26) as hazirantopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzBE = @mysql_query("select sum(v24+v25+v26) as temmuztopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzBE)) {
if($kayitlar['temmuztopBE']==""){
$temmuztotalBE=0 ;
}else{
$temmuztotalBE=$kayitlar['temmuztopBE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalBE.".......";
//AUSTOS
$agustosBE = @mysql_query("select sum(v24+v25+v26) as agustostopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosBE)) {
if($kayitlar['agustostopBE']==""){
$agustostotalBE=0 ;
}else{
$agustostotalBE=$kayitlar['agustostopBE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalBE.".......";
//EYLL
$eylulBE = @mysql_query("select sum(v24+v25+v26) as eylultopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulBE)) {
if($kayitlar['eylultopBE']==""){
$eylultotalBE=0 ;
}else{
$eylultotalBE=$kayitlar['eylultopBE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalBE.".......";
//EKM
$ekimBE = @mysql_query("select sum(v24+v25+v26) as ekimtopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimBE = @mysql_query("select sum(v24+v25+v26) as kasimtopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimBE)) {
if($kayitlar['kasimtopBE']==""){
$kasimtotalBE=0 ;
}else{
$kasimtotalBE=$kayitlar['kasimtopBE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalBE.".......";
//ARALIK
$aralikBE = @mysql_query("select sum(v24+v25+v26) as araliktopBE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikBE)) {
if($kayitlar['araliktopBE']==""){
$araliktotalBE=0 ;
}else{
$araliktotalBE=$kayitlar['araliktopBE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalBE.".......";
if($aygelen=="OCAK"){
$aytoplamBE=0 ;
}
if($aygelen=="$subat"){
$aytoplamBE=$ocaktotalBE ;
}
if($aygelen=="MART"){
$aytoplamBE=$ocaktotalBE+$subattotalBE ;
}
if($aygelen=="$nisan"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE ;
}
if($aygelen=="MAYIS"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE ;
}
if($aygelen=="$haziran"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE ;
}
if($aygelen=="$agustos"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE ;
}
if($aygelen=="$eylul"){
$aytoplamBE=$ocaktotalBE+$subattotalBE+$marttotalBE+$nisantotalBE+$mayistotalBE+$hazirantotalBE+$temmuztotalBE+$agustostotalBE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden bebek: ".$devredenbebek ;
$aysonubebekmevcudu=$devredenbebek+$Toplambuaybebekarti-$Toplambuaybebekeksi;
//echo "Ay Sonu bebek mevcudu: ".$aysonubebekmevcudu ;
//LOHUSA KISMI****************************************************************************************************************** 
//NDE BULUNULAN AY TOPLAMLARI
$buayla = @mysql_query("select sum(v27+v28) as buaylasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayla)) {
if($kayitlar['buaylasonuc']==""){
$Toplambuaylarti=0 ;
}else{
$Toplambuaylarti=$kayitlar['buaylasonuc'];
}
}
//echo $Toplambuaylarti;
$buayle = @mysql_query("select sum(v29+v30+v31) as buaylesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayle)) {
if($kayitlar['buaylesonuc']==""){
$Toplambuayleksi=0 ;
}else{
$Toplambuayleksi=$kayitlar['buaylesonuc'];
}
}
//echo $Toplambuayleksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$lohusaarti = @mysql_query("select sum(v27+v28) as lsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaarti)) {
if($kayitlar['lsonucarti']==""){
$Toplamlarti=0 ;
}else{
$Toplamlarti=$kayitlar['lsonucarti'];
}
}
//echo $Toplamlarti;
$lohusaeksi = @mysql_query("select sum(v29+v30+v31) as lsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($lohusaeksi)) {
if($kayitlar['lsonuceksi']==""){
$Toplamleksi=0 ;
}else{
$Toplamleksi=$kayitlar['lsonuceksi'];
}
}
//echo $Toplamleksi;
$devirl=$Toplamlarti-$Toplamleksi;
//echo "GEEN YIL DEVR:".$devirl;
// AY DENEMES
//LOHUSALIA GEEN*************************************************************************************************************
//OCAK
$ocakLA = @mysql_query("select sum(v27+v28) as ocaktopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakLA)) {
if($kayitlar['ocaktopLA']==""){
$ocaktotalLA=0 ;
}else{
$ocaktotalLA=$kayitlar['ocaktopLA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalLA.".......";
//UBAT
$subatLA = @mysql_query("select sum(v27+v28) as subattopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatLA)) {
if($kayitlar['subattopLA']==""){
$subattotalLA=0 ;
}else{
$subattotalLA=$kayitlar['subattopLA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalLA.".......";
//MART
$martLA = @mysql_query("select sum(v27+v28) as marttopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martLA)) {
if($kayitlar['marttopLA']==""){
$marttotalLA=0 ;
}else{
$marttotalLA=$kayitlar['marttopLA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalLA.".......";
//NSAN
$nisanLA = @mysql_query("select sum(v27+v28) as nisantopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisLA = @mysql_query("select sum(v27+v28) as mayistopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisLA)) {
if($kayitlar['mayistopLA']==""){
$mayistotalLA=0 ;
}else{
$mayistotalLA=$kayitlar['mayistopLA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalLA.".......";
//HAZRAN
$haziranLA = @mysql_query("select sum(v27+v28) as hazirantopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzLA = @mysql_query("select sum(v27+v28) as temmuztopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzLA)) {
if($kayitlar['temmuztopLA']==""){
$temmuztotalLA=0 ;
}else{
$temmuztotalLA=$kayitlar['temmuztopLA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalLA.".......";
//AUSTOS
$agustosLA = @mysql_query("select sum(v27+v28) as agustostopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosLA)) {
if($kayitlar['agustostopLA']==""){
$agustostotalLA=0 ;
}else{
$agustostotalLA=$kayitlar['agustostopLA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalLA.".......";
//EYLL
$eylulLA = @mysql_query("select sum(v27+v28) as eylultopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulLA)) {
if($kayitlar['eylultopLA']==""){
$eylultotalLA=0 ;
}else{
$eylultotalLA=$kayitlar['eylultopLA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalLA.".......";
//EKM
$ekimLA = @mysql_query("select sum(v27+v28) as ekimtopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimLA = @mysql_query("select sum(v27+v28) as kasimtopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimLA)) {
if($kayitlar['kasimtopLA']==""){
$kasimtotalLA=0 ;
}else{
$kasimtotalLA=$kayitlar['kasimtopLA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalLA.".......";
//ARALIK
$aralikLA = @mysql_query("select sum(v27+v28) as araliktopLA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikLA)) {
if($kayitlar['araliktopLA']==""){
$araliktotalLA=0 ;
}else{
$araliktotalLA=$kayitlar['araliktopLA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalLA.".......";
if($aygelen=="OCAK"){
$aytoplamLA=0 ;
}
if($aygelen=="$subat"){
$aytoplamLA=$ocaktotalLA ;
}
if($aygelen=="MART"){
$aytoplamLA=$ocaktotalLA+$subattotalLA ;
}
if($aygelen=="$nisan"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA ;
}
if($aygelen=="MAYIS"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA ;
}
if($aygelen=="$haziran"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA ;
}
if($aygelen=="$agustos"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA ;
}
if($aygelen=="$eylul"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA ;
}
if($aygelen=="$ekim"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA ;
}
if($aygelen=="KASIM"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA+$ekimtotalLA ;
}
if($aygelen=="ARALIK"){
$aytoplamLA=$ocaktotalLA+$subattotalLA+$marttotalLA+$nisantotalLA+$mayistotalLA+$hazirantotalLA+$temmuztotalLA+$agustostotalLA+$eylultotalLA+$ekimtotalLA+$kasimtotalLA ;
}
//echo "Ay toplam: ".$aytoplamLA ;

// LOHUSA IKAN*****************************************************************************************************************
//OCAK
$ocakLE = @mysql_query("select sum(v29+v30+v31) as ocaktopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakLE)) {
if($kayitlar['ocaktopLE']==""){
$ocaktotalLE=0 ;
}else{
$ocaktotalLE=$kayitlar['ocaktopLE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalGE.".......";
//UBAT
$subatLE = @mysql_query("select sum(v29+v30+v31) as subattopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatLE)) {
if($kayitlar['subattopLE']==""){
$subattotalLE=0 ;
}else{
$subattotalLE=$kayitlar['subattopLE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalLE.".......";
//MART
$martLE = @mysql_query("select sum(v29+v30+v31) as marttopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martLE)) {
if($kayitlar['marttopLE']==""){
$marttotalLE=0 ;
}else{
$marttotalLE=$kayitlar['marttopLE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalLE.".......";
//NSAN
$nisanLE = @mysql_query("select sum(v29+v30+v31) as nisantopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisLE = @mysql_query("select sum(v29+v30+v31) as mayistopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisLE)) {
if($kayitlar['mayistopLE']==""){
$mayistotalLE=0 ;
}else{
$mayistotalLE=$kayitlar['mayistopLE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalLE.".......";
//HAZRAN
$haziranLE = @mysql_query("select sum(v29+v30+v31) as hazirantopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzLE = @mysql_query("select sum(v29+v30+v31) as temmuztopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzLE)) {
if($kayitlar['temmuztopLE']==""){
$temmuztotalLE=0 ;
}else{
$temmuztotalLE=$kayitlar['temmuztopLE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalLE.".......";
//AUSTOS
$agustosLE = @mysql_query("select sum(v29+v30+v31) as agustostopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosLE)) {
if($kayitlar['agustostopLE']==""){
$agustostotalLE=0 ;
}else{
$agustostotalLE=$kayitlar['agustostopLE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalLE.".......";
//EYLL
$eylulLE = @mysql_query("select sum(v29+v30+v31) as eylultopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulLE)) {
if($kayitlar['eylultopLE']==""){
$eylultotalLE=0 ;
}else{
$eylultotalLE=$kayitlar['eylultopLE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalLE.".......";
//EKM
$ekimLE = @mysql_query("select sum(v29+v30+v31) as ekimtopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimLE = @mysql_query("select sum(v29+v30+v31) as kasimtopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimLE)) {
if($kayitlar['kasimtopLE']==""){
$kasimtotalLE=0 ;
}else{
$kasimtotalLE=$kayitlar['kasimtopLE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalLE.".......";
//ARALIK
$aralikLE = @mysql_query("select sum(v29+v30+v31) as araliktopLE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikLE)) {
if($kayitlar['araliktopLE']==""){
$araliktotalLE=0 ;
}else{
$araliktotalLE=$kayitlar['araliktopLE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalLE.".......";
if($aygelen=="OCAK"){
$aytoplamLE=0 ;
}
if($aygelen=="$subat"){
$aytoplamLE=$ocaktotalLE ;
}
if($aygelen=="MART"){
$aytoplamLE=$ocaktotalLE+$subattotalLE ;
}
if($aygelen=="$nisan"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE ;
}
if($aygelen=="MAYIS"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE ;
}
if($aygelen=="$haziran"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE ;
}
if($aygelen=="$agustos"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE ;
}
if($aygelen=="$eylul"){
$aytoplamLE=$ocaktotalLE+$subattotalLE+$marttotalLE+$nisantotalLE+$mayistotalLE+$hazirantotalLE+$temmuztotalLE+$agustostotalLE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden lohusa: ".$devredenlohusa ;
$aysonulohusamevcudu=$devredenlohusa+$Toplambuaylarti-$Toplambuayleksi;
//echo "Ay Sonu lohusa mevcudu: ".$aysonulohusamevcudu ;
//OCUK KISMI********************************************************************************************************************
//NDE BULUNULAN AY TOPLAMLARI
$buayca = @mysql_query("select sum(v32+v33) as buaycasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayca)) {
if($kayitlar['buaycasonuc']==""){
$Toplambuaycocukarti=0 ;
}else{
$Toplambuaycocukarti=$kayitlar['buaycasonuc'];
}
}
//echo $Toplambuaycocukarti;
$buayce = @mysql_query("select sum(v34+v35+v36) as buaycesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayce)) {
if($kayitlar['buaycesonuc']==""){
$Toplambuaycocukeksi=0 ;
}else{
$Toplambuaycocukeksi=$kayitlar['buaycesonuc'];
}
}
//echo $Toplambuaycocukeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$cocukarti = @mysql_query("select sum(v32+v33) as csonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukarti)) {
if($kayitlar['csonucarti']==""){
$Toplamcarti=0 ;
}else{
$Toplamcarti=$kayitlar['csonucarti'];
}
}
//echo $Toplamcarti;
$cocukeksi = @mysql_query("select sum(v34+v35+v36) as csonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($cocukeksi)) {
if($kayitlar['csonuceksi']==""){
$Toplamceksi=0 ;
}else{
$Toplamceksi=$kayitlar['csonuceksi'];
}
}
//echo $Toplamceksi;
$devircocuk=$Toplamcarti-$Toplamceksi;
//echo "GEEN YIL DEVR:".$devircocuk;
// AY DENEMES
//OCUK GEEN******************************************************************************************************************
//OCAK
$ocakCA = @mysql_query("select sum(v32+v33) as ocaktopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakCA)) {
if($kayitlar['ocaktopCA']==""){
$ocaktotalCA=0 ;
}else{
$ocaktotalCA=$kayitlar['ocaktopCA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalCA.".......";
//UBAT
$subatCA = @mysql_query("select sum(v32+v33) as subattopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatCA)) {
if($kayitlar['subattopCA']==""){
$subattotalCA=0 ;
}else{
$subattotalCA=$kayitlar['subattopCA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalCA.".......";
//MART
$martCA = @mysql_query("select sum(v32+v33) as marttopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martCA)) {
if($kayitlar['marttopCA']==""){
$marttotalCA=0 ;
}else{
$marttotalCA=$kayitlar['marttopCA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalCA.".......";
//NSAN
$nisanCA = @mysql_query("select sum(v32+v33) as nisantopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisCA = @mysql_query("select sum(v32+v33) as mayistopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisCA)) {
if($kayitlar['mayistopCA']==""){
$mayistotalCA=0 ;
}else{
$mayistotalCA=$kayitlar['mayistopCA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalCA.".......";
//HAZRAN
$haziranCA = @mysql_query("select sum(v32+v33) as hazirantopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzCA = @mysql_query("select sum(v32+v33) as temmuztopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzCA)) {
if($kayitlar['temmuztopCA']==""){
$temmuztotalCA=0 ;
}else{
$temmuztotalCA=$kayitlar['temmuztopCA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalCA.".......";
//AUSTOS
$agustosCA = @mysql_query("select sum(v32+v33) as agustostopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosCA)) {
if($kayitlar['agustostopCA']==""){
$agustostotalCA=0 ;
}else{
$agustostotalCA=$kayitlar['agustostopCA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalCA.".......";
//EYLL
$eylulCA = @mysql_query("select sum(v32+v33) as eylultopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulCA)) {
if($kayitlar['eylultopCA']==""){
$eylultotalCA=0 ;
}else{
$eylultotalCA=$kayitlar['eylultopCA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalCA.".......";
//EKM
$ekimCA = @mysql_query("select sum(v32+v33) as ekimtopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimCA = @mysql_query("select sum(v32+v33) as kasimtopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimCA)) {
if($kayitlar['kasimtopCA']==""){
$kasimtotalCA=0 ;
}else{
$kasimtotalCA=$kayitlar['kasimtopCA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalCA.".......";
//ARALIK
$aralikCA = @mysql_query("select sum(v32+v33) as araliktopCA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikCA)) {
if($kayitlar['araliktopCA']==""){
$araliktotalCA=0 ;
}else{
$araliktotalCA=$kayitlar['araliktopCA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalCA.".......";
if($aygelen=="OCAK"){
$aytoplamCA=0 ;
}
if($aygelen=="$subat"){
$aytoplamCA=$ocaktotalCA ;
}
if($aygelen=="MART"){
$aytoplamCA=$ocaktotalCA+$subattotalCA ;
}
if($aygelen=="$nisan"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA ;
}
if($aygelen=="MAYIS"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA ;
}
if($aygelen=="$haziran"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA ;
}
if($aygelen=="$agustos"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA ;
}
if($aygelen=="$eylul"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA ;
}
if($aygelen=="$ekim"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA ;
}
if($aygelen=="KASIM"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA+$ekimtotalCA ;
}
if($aygelen=="ARALIK"){
$aytoplamCA=$ocaktotalCA+$subattotalCA+$marttotalCA+$nisantotalCA+$mayistotalCA+$hazirantotalCA+$temmuztotalCA+$agustostotalCA+$eylultotalCA+$ekimtotalCA+$kasimtotalCA ;
}
//echo "Ay toplam: ".$aytoplamCA ;

// OCUK IKAN*****************************************************************************************************************
//OCAK
$ocakCE = @mysql_query("select sum(v34+v35+v36) as ocaktopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakCE)) {
if($kayitlar['ocaktopCE']==""){
$ocaktotalCE=0 ;
}else{
$ocaktotalCE=$kayitlar['ocaktopCE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalCE.".......";
//UBAT
$subatCE = @mysql_query("select sum(v34+v35+v36) as subattopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatCE)) {
if($kayitlar['subattopCE']==""){
$subattotalCE=0 ;
}else{
$subattotalCE=$kayitlar['subattopCE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalCE.".......";
//MART
$martCE = @mysql_query("select sum(v34+v35+v36) as marttopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martCE)) {
if($kayitlar['marttopCE']==""){
$marttotalCE=0 ;
}else{
$marttotalCE=$kayitlar['marttopCE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalCE.".......";
//NSAN
$nisanCE = @mysql_query("select sum(v34+v35+v36) as nisantopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
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
$mayisCE = @mysql_query("select sum(v34+v35+v36) as mayistopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisCE)) {
if($kayitlar['mayistopCE']==""){
$mayistotalCE=0 ;
}else{
$mayistotalCE=$kayitlar['mayistopCE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalCE.".......";
//HAZRAN
$haziranCE = @mysql_query("select sum(v34+v35+v36) as hazirantopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
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
$temmuzCE = @mysql_query("select sum(v34+v35+v36) as temmuztopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzCE)) {
if($kayitlar['temmuztopCE']==""){
$temmuztotalCE=0 ;
}else{
$temmuztotalCE=$kayitlar['temmuztopCE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalCE.".......";
//AUSTOS
$agustosCE = @mysql_query("select sum(v34+v35+v36) as agustostopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosCE)) {
if($kayitlar['agustostopCE']==""){
$agustostotalCE=0 ;
}else{
$agustostotalCE=$kayitlar['agustostopCE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalCE.".......";
//EYLL
$eylulCE = @mysql_query("select sum(v34+v35+v36) as eylultopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulCE)) {
if($kayitlar['eylultopCE']==""){
$eylultotalCE=0 ;
}else{
$eylultotalCE=$kayitlar['eylultopCE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalCE.".......";
//EKM
$ekimCE = @mysql_query("select sum(v34+v35+v36) as ekimtopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
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
$kasimCE = @mysql_query("select sum(v34+v35+v36) as kasimtopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimCE)) {
if($kayitlar['kasimtopCE']==""){
$kasimtotalCE=0 ;
}else{
$kasimtotalCE=$kayitlar['kasimtopCE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalCE.".......";
//ARALIK
$aralikCE = @mysql_query("select sum(v34+v35+v36) as araliktopCE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikCE)) {
if($kayitlar['araliktopCE']==""){
$araliktotalCE=0 ;
}else{
$araliktotalCE=$kayitlar['araliktopCE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalCE.".......";
if($aygelen=="OCAK"){
$aytoplamCE=0 ;
}
if($aygelen=="$subat"){
$aytoplamCE=$ocaktotalCE ;
}
if($aygelen=="MART"){
$aytoplamCE=$ocaktotalCE+$subattotalCE ;
}
if($aygelen=="$nisan"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE ;
}
if($aygelen=="MAYIS"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE ;
}
if($aygelen=="$haziran"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE ;
}
if($aygelen=="$agustos"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE ;
}
if($aygelen=="$eylul"){
$aytoplamCE=$ocaktotalCE+$subattotalCE+$marttotalCE+$nisantotalCE+$mayistotalCE+$hazirantotalCE+$temmuztotalCE+$agustostotalCE ;
}
if($aygelen=="$ekim"){
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
//echo "Geen aydan devreden cocuk: ".$devredencocuk ;
$aysonucocukmevcudu=$devredencocuk+$Toplambuaycocukarti-$Toplambuaycocukeksi;
//echo "Ay Sonu cocuk mevcudu: ".$aysonucocukmevcudu ;
//IMPLANT KISMI********************************************************************************************************************
//NDE BULUNULAN AY TOPLAMLARI
$buayxa = @mysql_query("select sum(v37+v38) as buayxasonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayxa)) {
if($kayitlar['buayxasonuc']==""){
$Toplambuayimparti=0 ;
}else{
$Toplambuayimparti=$kayitlar['buayxasonuc'];
}
}
//echo $Toplambuayimparti;
$buayxe = @mysql_query("select sum(v39+v40+v41) as buayxesonuc from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$aygelen')") ;
while ($kayitlar = mysql_fetch_array($buayxe)) {
if($kayitlar['buayxesonuc']==""){
$Toplambuayimpeksi=0 ;
}else{
$Toplambuayimpeksi=$kayitlar['buayxesonuc'];
}
}
//echo $Toplambuayimpeksi;
//DEVR HESAPLAMALARI*************************************************************************************************************
$imparti = @mysql_query("select sum(v37+v38) as xsonucarti from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($imparti)) {
if($kayitlar['xsonucarti']==""){
$Toplamxarti=0 ;
}else{
$Toplamxarti=$kayitlar['xsonucarti'];
}
}
//echo $Toplamxarti;
$impeksi = @mysql_query("select sum(v39+v40+v41) as xsonuceksi from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi<'$yilgelen')") ;
while ($kayitlar = mysql_fetch_array($impeksi)) {
if($kayitlar['xsonuceksi']==""){
$Toplamxeksi=0 ;
}else{
$Toplamxeksi=$kayitlar['xsonuceksi'];
}
}
//echo $Toplamxeksi;
$devirimp=$Toplamxarti-$Toplamxeksi;
//echo "GEEN YIL DEVR:".$devirimp;
// AY DENEMES
//OCUK GEEN******************************************************************************************************************
//OCAK
$ocakXA = @mysql_query("select sum(v37+v38) as ocaktopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakXA)) {
if($kayitlar['ocaktopXA']==""){
$ocaktotalXA=0 ;
}else{
$ocaktotalXA=$kayitlar['ocaktopXA'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalXA.".......";
//UBAT
$subatXA = @mysql_query("select sum(v37+v38) as subattopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatXA)) {
if($kayitlar['subattopXA']==""){
$subattotalXA=0 ;
}else{
$subattotalXA=$kayitlar['subattopXA'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalXA.".......";
//MART
$martXA = @mysql_query("select sum(v37+v38) as marttopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martXA)) {
if($kayitlar['marttopXA']==""){
$marttotalXA=0 ;
}else{
$marttotalXA=$kayitlar['marttopXA'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalXA.".......";
//NSAN
$nisanXA = @mysql_query("select sum(v37+v38) as nisantopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
while ($kayitlar = mysql_fetch_array($nisanXA)) {
if($kayitlar['nisantopXA']==""){
$nisantotalXA=0 ;
}else{
$nisantotalXA=$kayitlar['nisantopXA'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalXA.".......";
//MAYIS
$mayisXA = @mysql_query("select sum(v37+v38) as mayistopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisXA)) {
if($kayitlar['mayistopXA']==""){
$mayistotalXA=0 ;
}else{
$mayistotalXA=$kayitlar['mayistopXA'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalXA.".......";
//HAZRAN
$haziranXA = @mysql_query("select sum(v37+v38) as hazirantopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
while ($kayitlar = mysql_fetch_array($haziranXA)) {
if($kayitlar['hazirantopXA']==""){
$hazirantotalXA=0 ;
}else{
$hazirantotalXA=$kayitlar['hazirantopXA'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalXA.".......";
//TEMMUZ
$temmuzXA = @mysql_query("select sum(v37+v38) as temmuztopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzXA)) {
if($kayitlar['temmuztopXA']==""){
$temmuztotalXA=0 ;
}else{
$temmuztotalXA=$kayitlar['temmuztopXA'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalXA.".......";
//AUSTOS
$agustosXA = @mysql_query("select sum(v37+v38) as agustostopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosXA)) {
if($kayitlar['agustostopXA']==""){
$agustostotalXA=0 ;
}else{
$agustostotalXA=$kayitlar['agustostopXA'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalXA.".......";
//EYLL
$eylulXA = @mysql_query("select sum(v37+v38) as eylultopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulXA)) {
if($kayitlar['eylultopXA']==""){
$eylultotalXA=0 ;
}else{
$eylultotalXA=$kayitlar['eylultopXA'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalXA.".......";
//EKM
$ekimXA = @mysql_query("select sum(v37+v38) as ekimtopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
while ($kayitlar = mysql_fetch_array($ekimXA)) {
if($kayitlar['ekimtopXA']==""){
$ekimtotalXA=0 ;
}else{
$ekimtotalXA=$kayitlar['ekimtopXA'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalXA.".......";
//KASIM
$kasimXA = @mysql_query("select sum(v37+v38) as kasimtopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimXA)) {
if($kayitlar['kasimtopXA']==""){
$kasimtotalXA=0 ;
}else{
$kasimtotalXA=$kayitlar['kasimtopXA'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalXA.".......";
//ARALIK
$aralikXA = @mysql_query("select sum(v37+v38) as araliktopXA from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikXA)) {
if($kayitlar['araliktopXA']==""){
$araliktotalXA=0 ;
}else{
$araliktotalXA=$kayitlar['araliktopXA'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalXA.".......";
if($aygelen=="OCAK"){
$aytoplamXA=0 ;
}
if($aygelen=="$subat"){
$aytoplamXA=$ocaktotalXA ;
}
if($aygelen=="MART"){
$aytoplamXA=$ocaktotalXA+$subattotalXA ;
}
if($aygelen=="$nisan"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA ;
}
if($aygelen=="MAYIS"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA ;
}
if($aygelen=="$haziran"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA ;
}
if($aygelen=="TEMMUZ"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA ;
}
if($aygelen=="$agustos"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA ;
}
if($aygelen=="$eylul"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA ;
}
if($aygelen=="$ekim"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA+$eylultotalXA ;
}
if($aygelen=="KASIM"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA+$eylultotalXA+$ekimtotalXA ;
}
if($aygelen=="ARALIK"){
$aytoplamXA=$ocaktotalXA+$subattotalXA+$marttotalXA+$nisantotalXA+$mayistotalXA+$hazirantotalXA+$temmuztotalXA+$agustostotalXA+$eylultotalXA+$ekimtotalXA+$kasimtotalXA ;
}
//echo "Ay toplam: ".$aytoplamXA ;

// OCUK IKAN*****************************************************************************************************************
//OCAK
$ocakXE = @mysql_query("select sum(v39+v40+v41) as ocaktopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='OCAK')") ;
while ($kayitlar = mysql_fetch_array($ocakXE)) {
if($kayitlar['ocaktopXE']==""){
$ocaktotalXE=0 ;
}else{
$ocaktotalXE=$kayitlar['ocaktopXE'];
}
}
//echo $Toplamgeksi;
//echo "Ocak: ".$ocaktotalXE.".......";
//UBAT
$subatXE = @mysql_query("select sum(v39+v40+v41) as subattopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$subat')") ;
while ($kayitlar = mysql_fetch_array($subatXE)) {
if($kayitlar['subattopXE']==""){
$subattotalXE=0 ;
}else{
$subattotalXE=$kayitlar['subattopXE'];
}
}
//echo $Toplamgeksi;
//echo "ubat: ".$subattotalXE.".......";
//MART
$martXE = @mysql_query("select sum(v39+v40+v41) as marttopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MART')") ;
while ($kayitlar = mysql_fetch_array($martXE)) {
if($kayitlar['marttopXE']==""){
$marttotalXE=0 ;
}else{
$marttotalXE=$kayitlar['marttopXE'];
}
}
//echo $Toplamgeksi;
//echo "Mart: ".$marttotalXE.".......";
//NSAN
$nisanXE = @mysql_query("select sum(v39+v40+v41) as nisantopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$nisan')") ;
while ($kayitlar = mysql_fetch_array($nisanXE)) {
if($kayitlar['nisantopXE']==""){
$nisantotalXE=0 ;
}else{
$nisantotalXE=$kayitlar['nisantopXE'];
}
}
//echo $Toplamgeksi;
//echo "Nisan: ".$nisantotalXE.".......";
//MAYIS
$mayisXE = @mysql_query("select sum(v39+v40+v41) as mayistopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='MAYIS')") ;
while ($kayitlar = mysql_fetch_array($mayisXE)) {
if($kayitlar['mayistopXE']==""){
$mayistotalXE=0 ;
}else{
$mayistotalXE=$kayitlar['mayistopXE'];
}
}
//echo $Toplamgeksi;
//echo "Mays: ".$mayistotalXE.".......";
//HAZRAN
$haziranXE = @mysql_query("select sum(v39+v40+v41) as hazirantopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$haziran')") ;
while ($kayitlar = mysql_fetch_array($haziranXE)) {
if($kayitlar['hazirantopXE']==""){
$hazirantotalXE=0 ;
}else{
$hazirantotalXE=$kayitlar['hazirantopXE'];
}
}
//echo $Toplamgeksi;
//echo "Haziran: ".$hazirantotalXE.".......";
//TEMMUZ
$temmuzXE = @mysql_query("select sum(v39+v40+v41) as temmuztopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='TEMMUZ')") ;
while ($kayitlar = mysql_fetch_array($temmuzXE)) {
if($kayitlar['temmuztopXE']==""){
$temmuztotalXE=0 ;
}else{
$temmuztotalXE=$kayitlar['temmuztopXE'];
}
}
//echo $Toplamgeksi;
//echo "Temmuz: ".$temmuztotalXE.".......";
//AUSTOS
$agustosXE = @mysql_query("select sum(v39+v40+v41) as agustostopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$agustos')") ;
while ($kayitlar = mysql_fetch_array($agustosXE)) {
if($kayitlar['agustostopXE']==""){
$agustostotalXE=0 ;
}else{
$agustostotalXE=$kayitlar['agustostopXE'];
}
}
//echo $Toplamgeksi;
//echo "Austos: ".$agustostotalXE.".......";
//EYLL
$eylulXE = @mysql_query("select sum(v39+v40+v41) as eylultopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$eylul')") ;
while ($kayitlar = mysql_fetch_array($eylulXE)) {
if($kayitlar['eylultopXE']==""){
$eylultotalXE=0 ;
}else{
$eylultotalXE=$kayitlar['eylultopXE'];
}
}
//echo $Toplamgeksi;
//echo "Eyll: ".$eylultotalXE.".......";
//EKM
$ekimXE = @mysql_query("select sum(v39+v40+v41) as ekimtopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='$ekim')") ;
while ($kayitlar = mysql_fetch_array($ekimXE)) {
if($kayitlar['ekimtopXE']==""){
$ekimtotalXE=0 ;
}else{
$ekimtotalXE=$kayitlar['ekimtopXE'];
}
}
//echo $Toplamgeksi;
//echo "Ekim: ".$ekimtotalXE.".......";
//KASIM
$kasimXE = @mysql_query("select sum(v39+v40+v41) as kasimtopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='KASIM')") ;
while ($kayitlar = mysql_fetch_array($kasimXE)) {
if($kayitlar['kasimtopXE']==""){
$kasimtotalXE=0 ;
}else{
$kasimtotalXE=$kayitlar['kasimtopXE'];
}
}
//echo $Toplamgeksi;
//echo "Kasm: ".$kasimtotalXE.".......";
//ARALIK
$aralikXE = @mysql_query("select sum(v39+v40+v41) as araliktopXE from veri where(ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and vyiladi='$yilgelen' and vayadi='ARALIK')") ;
while ($kayitlar = mysql_fetch_array($aralikXE)) {
if($kayitlar['araliktopXE']==""){
$araliktotalXE=0 ;
}else{
$araliktotalXE=$kayitlar['araliktopXE'];
}
}
//echo $Toplamgeksi;
//echo "Aralk: ".$araliktotalXE.".......";
if($aygelen=="OCAK"){
$aytoplamXE=0 ;
}
if($aygelen=="$subat"){
$aytoplamXE=$ocaktotalXE ;
}
if($aygelen=="MART"){
$aytoplamXE=$ocaktotalXE+$subattotalXE ;
}
if($aygelen=="$nisan"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE ;
}
if($aygelen=="MAYIS"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE ;
}
if($aygelen=="$haziran"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE ;
}
if($aygelen=="TEMMUZ"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE ;
}
if($aygelen=="$agustos"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE ;
}
if($aygelen=="$eylul"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE ;
}
if($aygelen=="$ekim"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE+$eylultotalXE ;
}
if($aygelen=="KASIM"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE+$eylultotalXE+$ekimtotalXE ;
}
if($aygelen=="ARALIK"){
$aytoplamXE=$ocaktotalXE+$subattotalXE+$marttotalXE+$nisantotalXE+$mayistotalXE+$hazirantotalXE+$temmuztotalXE+$agustostotalXE+$eylultotalXE+$ekimtotalXE+$kasimtotalXE ;
}
//echo "Ay toplam: ".$aytoplamXE ;
$xtoplam=$aytoplamXA-$aytoplamXE ;
//echo "GENEL TOPLAM: ".$xtoplam ;
$devredenimp=$devirimp+$aytoplamXA-$aytoplamXE ;
//echo "Geen aydan devreden implant: ".$devredenimp ;
$aysonuimpmevcudu=$devredenimp+$Toplambuayimparti-$Toplambuayimpeksi;
//echo "Ay Sonu implant mevcudu: ".$aysonuimpmevcudu ;
}