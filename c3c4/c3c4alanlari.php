<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
$ilsecim="İli Seçiniz";
$onceilsecim="Önce İli Seçiniz";
$ilcesecim="İlçe Seçiniz";
$onceilcesecim="Önce İlçeyi Seçiniz";
$ahsecim="Aile Hekimini Seçiniz";
$eklegorbaslik="Yeni Kayıt Ekleme Ekranı";
$deggorbaslik="Kayıt Değiştirme Ekranı";
$ilgorbaslik="İl Toplamı Görüntüleme Ekranı";
$ilcegorbaslik="İlçe Toplamı Görüntüleme Ekranı";
$ocakgorbaslik="Kurum/Aile Hek.Toplamı Görüntüleme Ekranı";
$aygorbaslik="Aylık Toplam Görüntüleme Ekranı";
$kayitgorbaslik="Kayıt Görüntüleme Ekranı";
$pdfbaslik="PDF Yazdır";
$excelbaslik="Excele Yazdır";
$wordbaslik="Yazdır";
$iltopbaslik="İL TOPLAMI";
$ilcetopbaslik="İLÇE TOPLAMI";
$sbbaslik="SAĞLIK BAKANLIĞI";
$ilbaslik="İL:";
$ilcebaslik="İLÇE/İSM:";
$duzenleyen="DÜZENLEYEN";
$duzadbaslik="Adı Soyadı:";
$duzunbaslik="Ünvanı:";
$duzimzabaslik="İmza:";
$onadbaslik="Adı Soyadı:";
$onunbaslik="Ünvanı:";
$onimzabaslik="İmza:";
$aygrafbaslik="Aylık Grafik";
$kumgrafbaslik="Kümulatif Grafik";
//echo $frmbaslik;
//************************************************ K O N T R O L  M E N Ü *******************************************************
$ilsecbaslik="İl Seçilmedi.";
$ilcesecbaslik="İlçe Seçilmedi.";
$kursecbaslik="Kurum / AHB Seçilmedi.";
$yilbosbaslik="Yılı Boş Bıraktınız.";
$kayyetkibaslik="Bu Kaydı Yapmaya Yetkiniz Yoktur.";
$uyarbaslik="BU KAYIT YAPILMIŞ...";
$bosbaslik="Henüz hiçbir Aile Hekimliğine veri girilmemiştir.";
$ahbirbaslik="Aile Hekimliği Biriminden";
$ahgirbaslik="Aile Hekimliğine ait veriler girilmiştir.";
$ahvgbaslik="Aile Hekimliğine ait veri girilmemiştir.";
$gelmeyenbaslik="Verileri girilmeyen Aile Hekimliği Birimleri";
$tamambaslik="Bütün Aile Hekimliği Birimlerine ait veri girişi yapılmıştır.";
//********************************************EKLEME/DEĞİŞTİRME/SİLME UYARILARI********************************************************
$kayiteklendi="Kayıt Eklendi...";
$kaydedilmedi="Verileriniz Kaydedilemedi...";
$kayitdegistirildi="Kayıt Değiştirildi...";
$degistirilmedi="Verileriniz Değiştirilemedi...";
$silmeonay="Kayıt Silme Onayı";
$silemin="Bu Kaydı Silmek İstediğinize Emin misiniz?";
$silindi="Kayıt Silindi...";
$geridon="Geri dön";
$silinmedi="Kayıt silinemedi.";
//**************************************************ADMİN PANELE ÖZGÜ UYARILAR ********************************************************
$ilgirilmedi='İl İsmi Girilmedi.';
$ilkaydet="Bu İli Kaydedebilirsiniz";
$ilok="İli Kaydedildi...";
$ilkaydolmadi="İl Kaydedilemedi...";
$degilismi="Değiştirilecek İlin Adı:";
$ilkaydeg="İl Kayıt Değiştirme Ekranı";
$oncekiil="ili";
$sonraki="olarak değiştirildi...";
$ildegismedi="İl Değiştirilemedi...";
$ilcekaydet="Bu İlçeyi Kaydedebilirsiniz";
$ilceok='İlçesi Kaydedildi...';
$ilcekaydolmadi="İlçesi Kaydedilemedi...";
$ilcekaydeg="İlçe Kayıt Değiştirme Ekranı";
$degilceismi="Değiştirilecek İlçenin Adı:";
$oncekiilce="ilçesi";
$ilcedegismedi="İl Değiştirilemedi...";
$kurumkaydet="Bu Kurumu Kaydedebilirsiniz.";
$kurumok='Kurumu / Aile Hek.Kaydedildi...';
$kurumkaydolmadi="Kurumu / Aile Hek.Kaydedilemedi...";
$kurumkaydeg="Kurum / Aile Hek.Kayıt Değiştirme Ekranı";
$kurumadibaslik="Kurum Adı:";
$asmadibaslik="A.S.M.Adı:";
$ahekadibaslik="A.Hek.Adı:";
$aseadibaslik="A.S.E.Adı:";
$aseünvanibaslik="A.S.E.Ünvanı:";
$kurumonceki="Kurum Bilgileri";
$kurumsonraki="değiştirildi...";
$kurbilolmadi="Kurum Değiştirilemedi.";
$uyekodsec="Üye Kodu Seçiniz";
$kulkurkod="Kullanıcının Kurum Kodunu Seçiniz.";
$kultanim="Bu Kullanıcıyı Tanımlayabilirsiniz.";
$yenikulekleme="Yeni Kullanıcı Ekleme Ekranı";
$dradi="Doktor Adı:";
$kuladi="Kullanıcı Adı:";
$kulsifre="Kullanıcı Şifresi:";
$kulok='Nolu AHB / Kurumuna ait Kullanıcı Kaydedildi...';
$kulkaydolmadi="Kullanıcı Kaydedilemedi...";
$kuldeg="Kullanıcı Kayıt Değiştirme Ekranı";
$kulonceki="Nolu AHB / Kurumu Kullanıcı Bilgileri";
$kulolmadi="Kullanıcı Değiştirilemedi.";
$kulsilindi="Nolu AHB / Kurumuna ait Kullanıcı Kaydı Silindi...";
//AGE C3-C4 Kayıt Formu
$c3c4baslik="HASTANE AGE VAKA ARTIŞI (C3-C4 SİNYALİ) SORGULAMA FORMU";
$ageartiskurum="AGE Artışının Meydana Geldiği Kurum:";
$ageartistarih="AGE Artışının Meydana Geldiği Tarih:";
$verihatasi="Veri Giriş Hatası Durumu:";
$veridurumyok="Veri girişi hatası mevcut değildir.";
$veridurumvar="Veri girişi hatası mevcuttur.";
$mevcutdegil="Mevcut Değil:";
$aciklama="Açıklama:";
$mukerrerkayit="Mükerrer Kayıt Durumu:";
$mukerrerkayitdurumuyok="Mükerrer kayıt girişi mevcut değildir.";
$mukerrerkayitdurumuvar="Mükerrer kayıt girişi vardır.";
$ikametkum="İkamete Göre Kümelenme Durumu:";
$ikametdurumuyok="İkamete göre kümelenme yoktur. Fazla olan mahallelerde sokak/mevki bazında incelendiğinde kümelenme gözükmemektedir.";
$ikametdurumuvar="İkamete göre kümelenme vardır.";
$ikametdurumuyokek="İkamete göre kümelenme yoktur. Mahallelere göre dağılım tablosu ektedir. Fazla olan mahallelerde sokak/mevki bazında incelendiğinde kümelenme gözükmemektedir.";
$ikametdurumuvarek="İkamete göre kümelenme vardır. Mahallelere göre dağılım tablosu ektedir.";
$dagilimtablosu="Dağılım tablosu var mı ?";
$yascinsgrubu="HASTALARIN YAŞ VE CİNS GRUPLARINA GÖRE DAĞILIMI";
$topluyemek="Toplu Yemek Yeme Durumu:";
$topluyemekyok="Toplu yemek yenilen bir organizasyona katıldıklarına ilişkin bilgi edinilmemiştir.";
$topluyemekvar="Toplu yemek yenilen bir organizasyona katıldıklarına ilişkin şu bilgiler edinilmiştir." ;
$ayniailemi="Aynı Aileye Mensup Kişi Durumu:";
$ayniaileyok="Aynı aileye mensup kişiler yoktur." ;
$ayniailevar="Aynı aileye mensup kişiler mevcuttur.";
$meslekyok="Meslek gruplarına ait bilgi yoktur.";
$meslekvar="Meslek gruplarına ait şu bilgiler edinilmiştir:";
$gaitatestbaslik="HASTANEYE BAŞVURAN HASTALARA YAPILAN GAİTA TESTİ DURUMU";
$gaitakultur="Gaita Kültürü";
$gaitaparazit="Parazit İnceleme";
$gaitaviral="Viral Etken İnceleme";
$sayi="Sayı";
$sayisi="Sayısı";
$durumukotu="Durumu kötü hasta var mı ?";
$ayaktandurumukotuyok="Hastaların hepsi ayaktan tedavi olmuştur. Durumu kötü hasta yoktur.";
$yatandurumukotuyok="Yatarak tedavi gören hasta vardır. Genel durumu kötü olan hasta yoktur.";
$durumukotuyatan="Yatarak tedavi gören hasta vardır. Genel durumu kötü olan hasta vardır. Yattıkları servise göre dağılmı ve genel durumları:";
$klinisyengorusu="Klinisyenin Olay/Etken/Hastalık Hakkındaki Görüşü:";
$klinikvaka="Münferit vakalar olduğu görüşü bildirilmiştir.";
$sunumune="Son 2 Aylık Su Numune ve Bakiye Klor Sonuçları:";
$sunumunesonuc="Su numune sonuçları Çevre Sağlığı Birimimiz tarafından Erken Uyarı Cevap Birimine gönderilmektedir.";
$degraporbaslik="DEĞERLENDİRME RAPORU BÖLÜMÜ";
$sinyalturu="Sinyal Türü:";
$yabanciuyruk="Yabancı Uyruklu Hasta Durumu:";
$yabanciuyrukdurumu="Yabancı uyruklu hasta bulunmamaktadır.";
$yabanciuyrukvar=" yabancı uyruklu hasta vardır.";
$ikametbaslik="HASTALARIN İKAMET ADRESLERİNE GÖRE DAĞILIMI";
$yerlesim="YERLEŞİM YERİ";
$ikamet="İKAMET EDEN SAYISI";
$mahalle="Mahalle Seçiniz";
$polibaslik="HASTALARIN BAŞVURDUĞU POLİKLİNİKLERE GÖRE DAĞILIMI";
$padi="POLİKLİNİK ADI";
$bassay="BAŞVURU SAYISI";
$musyatan="MÜŞAHADE AMACIYLA YATIRILAN HASTA";
$seryatan="SERVİSE YATIRILAN HASTA";
$polsec="Poliklinik Seçiniz";
$grafik="Son bir yıllık ilçe ve hastaneye ait grafik var mı ?";
$grafikvar="Akut Bağırsak Enfeksiyonları vakalarının ilçe ve hastane bazında son bir yıllık seyrine ait grafik ektedir.";

//KONTROL.PHP***************************************************************************************************************************
$icd="ICD 10 Kodlu hasta listesi alınır.";
$veri="2-Veri giriş hatası olup olmadığı incelenir.";
$mukerrer="3-Mükerrer kayıt olup olmadığı incelenir.";
$kumelenme="4-İkamet adresleri dikkatlice kontrol edilerek kümelenme olup olmadığı araştırılır.";
$dagilim="5-Listelerden hastaların yaş gruplarına göre dağılımı aşağıdaki tablo doldurularak yapılır.";
$toplu="6-Yaş grupları da dikkate alınarak kreş, anaokulu, okul, üniversite, lokanta, alışveriş merkezi, otel, doğum günü, miting, mevlit ve düğün gibi yemek yenilen toplu organizasyonda bulunup bulunmadığı araştırılır.";
$ayniaile="7-Aynı aileye mensup kişiler olup olmadığı araştırılır.";
$meslekgr="8-Hastaların meslek grupları sorgulanır.";
$gaita="9-Hastaneye başvuran hastalardan gaita mikroskopisi ve kültürü yapılıp,yapılmadığı araştırılır.";
$ayaktayatan="10-AGE şikayetleri ile hastaneye başvuran hastalardan kaçının ayaktan kaç tanesinin yatarak tedavi edildiği, yatarak tedavi gören hastaların genel durumlarının kötü olup olmadığı sorgulanmalıdır.";
$gorus="11-Klinisyenden olay/etken/hastalık hakkında görüş alınır.";
$sunumunesi="12-Geçmiş 2 aylık su numune sonuçları ile şimdiki klor bakiye sonucu kontrol edilir. Tüm sonuç raporları eklenerek Erken Uyarı-Cevap Birimine gönderilir.";
$sonucbolum="SONUÇ BÖLÜMÜ";
/* ***************************************************** LÝSTELE.PHP   *********************************************** */
$kaylisbaslik="Kayıt Listeleme Ekranı";
$il="İl";
$ilce="İlçe";
$topabe="Toplam ABE Hasta Sayısı";
$hastabe="Hast. ABE Hasta Sayısı";
$esasabe="Esas ABE Hasta Sayısı";
$verihat="Veri Giriş Hatası Var mı ?";
$mukkay="Mükerrer Kayıt Var mı ?";
$kumvar="Kümelenme Var mı ?";
$topvar="Toplu Yemek Bilgisi Var mı?";
$aynaile="Aynı Aileye Mensup Kişi Var mı ?";
$yattedgor="Yatarak Tedavi Gören Var mı ?";
$duraghasta="Durumu Ağır Hasta Var mı?";
$munvakavar="Münferit Vakalar mı ?";
//PHP ÝLE TARAYICI TANIMA

/*

$browser = $_SERVER['HTTP_USER_AGENT'];



if( eregi("(opera) ([0-9]{1,2}.[0-9]{1,3}){0,1}",$browser,$regs) || eregi("(opera/)([0-9]{1,2}.[0-9]{1,3}){0,1}",$browser,$regs))



{$browser = "Opera $regs[2]";}



else if( eregi("(msie) ([0-9]{1,2}.[0-9]{1,3})",$browser,$regs) )



{$browser = "MSIE $regs[2]";}



else if( eregi("(netscape6)/(6.[0-9]{1,3})",$browser,$regs) )



{$browser = "Netscape $regs[2]";}



else if( eregi("mozilla/5",$HTTP_USER_AGENT) )



{$browser = "Netscape";}



else if( eregi("(mozilla)/([0-9]{1,2}.[0-9]{1,3})",$$browser,$regs) )



{$browser = "Netscape $regs[2]";}

else if( eregi("(Edge\/((12)\.([0-9]*)))",$browser,$regs))



{$browser = "Edge $regs[2]";}


else



{$browser = "?";}







//echo $browser;



$_SERVER['HTTP_USER_AGENT'] . "nn";



$browser = get_browser(null, true);



//print_r($browser);







//PHP ile tarayýcý kontrolu baþka bir kod







if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') )



 {



 $browser = 'Safari';



 }



 else if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Gecko') )



 {



 if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape') )



 {



 $browser = 'Netscape (Gecko/Netscape)';



 }



 else if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') )



 {



 $browser = 'Mozilla Firefox (Gecko/Firefox)';



 }



 else



 {



 $browser = 'Mozilla (Gecko/Mozilla)';



 }



 }



 else if ( strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') )



 {



 $browser = 'Internet Explorer (MSIE/Compatible)';



 }



 else if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') === true)



 {



 $browser = 'Opera';



 }

else if ( strpos($_SERVER['HTTP_USER_AGENT'], 'Edge') === true)



 {



 $browser = 'Edge';



 }


 else



 {



 $browser = 'Other browsers';



 }



//echo $browser;




 if ($browser == 'Mozilla (Gecko/Mozilla)'){



 



 function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   }







}else if($browser == 'Safari'){





 function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }



}else if($browser == 'Netscape (Gecko/Netscape)'){





 function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }



}else if($browser == 'Mozilla Firefox (Gecko/Firefox)'){





 function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   }



}else if($browser == 'Mozilla (Gecko/Mozilla)'){





 function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }



}else if($browser == 'Internet Explorer (MSIE/Compatible)'){





 function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }



}else if($browser == 'Opera'){





 function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }


}else{



$browser = 'Other browsers';



function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }



}













//echo $browser;





//JAVASCRÝPT ÝLE TARAYICI TANIMA



/*



var BrowserDetect = {



    init: function () {



        this.browser = this.searchString(this.dataBrowser) || "An unknown browser";



        this.version = this.searchVersion(navigator.userAgent)



            || this.searchVersion(navigator.appVersion)



            || "an unknown version";



        this.OS = this.searchString(this.dataOS) || "an unknown OS";



    },



    searchString: function (data) {



        for (var i=0;i<data.length;i++)  {



            var dataString = data[i].string;



            var dataProp = data[i].prop;



            this.versionSearchString = data[i].versionSearch || data[i].identity;



            if (dataString) {



                if (dataString.indexOf(data[i].subString) != -1)



                    return data[i].identity;



            }



            else if (dataProp)



                return data[i].identity;



        }



    },



    searchVersion: function (dataString) {



        var index = dataString.indexOf(this.versionSearchString);



        if (index == -1) return;



        return parseFloat(dataString.substring(index+this.versionSearchString.length+1));



    },



    dataBrowser: [



        {



            string: navigator.userAgent,



            subString: "Chrome",



            identity: "Chrome"



        },



        {   string: navigator.userAgent,



            subString: "OmniWeb",



            versionSearch: "OmniWeb/",



            identity: "OmniWeb"



        },



        {



            string: navigator.vendor,



            subString: "Apple",



            identity: "Safari",



            versionSearch: "Version"



        },



        {



            prop: window.opera,



            identity: "Opera"



        },



        {



            string: navigator.vendor,



            subString: "iCab",



            identity: "iCab"



        },



        {



            string: navigator.vendor,



            subString: "KDE",



            identity: "Konqueror"



        },



        {



            string: navigator.userAgent,



            subString: "Firefox",



            identity: "Firefox"



        },



        {



            string: navigator.vendor,



            subString: "Camino",



            identity: "Camino"



        },



        {       // for newer Netscapes (6+)



            string: navigator.userAgent,



            subString: "Netscape",



            identity: "Netscape"



        },



        {



            string: navigator.userAgent,



            subString: "MSIE",



            identity: "Explorer",



            versionSearch: "MSIE"



        },



        {



            string: navigator.userAgent,



            subString: "Gecko",



            identity: "Mozilla",



            versionSearch: "rv"



        },



        {       // for older Netscapes (4-)



            string: navigator.userAgent,



            subString: "Mozilla",



            identity: "Netscape",



            versionSearch: "Mozilla"



        }



    ],



    dataOS : [



        {



            string: navigator.platform,



            subString: "Win",



            identity: "Windows"



        },



        {



            string: navigator.platform,



            subString: "Mac",



            identity: "Mac"



        },



        {



               string: navigator.userAgent,



               subString: "iPhone",



               identity: "iPhone/iPod"



        },



        {



            string: navigator.platform,



            subString: "Linux",



            identity: "Linux"



        }



]



 



};



BrowserDetect.init();



*/

$env = getenv( "HTTP_USER_AGENT" );
if (strpos($env, 'Edge') !== FALSE){
   //$browser="Edge";
   //echo $browser.'<br>'.$env;
    function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   }
   }
 else if (strpos($env, 'Internet Explorer (MSIE/Compatible)') !== FALSE){
   echo 'Internet explorer';
   function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }
 }else if (strpos($env, 'Firefox') !== FALSE){
   //echo 'Mozilla Firefox';
   function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   }
 }else if (strpos($env, 'Chrome') !== FALSE){
   //echo 'Google Chrome';
   function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }
 }else if (strpos($env, 'Opera') !== FALSE){
   //echo "Opera";
   function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }
 }else if (strpos($env, 'Safari') !== FALSE){
   //echo "Safari";
 function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }  
 }else if (strpos($env, 'Mozilla (Gecko/Mozilla)') !== FALSE){
   //echo "Mozilla (Gecko/Mozilla";
 function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }  
 }else if (strpos($env, 'Netscape (Gecko/Netscape)') !== FALSE){
   //echo "Mozilla (Netscape (Gecko/Netscape)";
 function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }
 }else if (strpos($env, 'Mozilla (Gecko/Mozilla)') !== FALSE){
   //echo "Mozilla (Mozilla (Gecko/Mozilla)";
 function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }
 }else{
//echo 'Bilinmeyen Tarayici';
//echo "<br />" . $env;
function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   }
}


?>



</body>



</html>



