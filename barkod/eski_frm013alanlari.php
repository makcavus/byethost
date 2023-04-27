<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />



<title>Untitled Document</title>



</head>







<body>



<?php
$usersirano="Sıra No:";
$userkurumadi="Kurum Adı:";
$userdradi="Doktor Adı:";
$userkullaniciadi="Kullanıcı Adı:";
$userpassword="Şifresi:";
$sagkuradi="Sağlık Kurumunun Adı";
$kurkursec="Kurum/Kurulus Seçiniz";
$tumtip="Tümü";
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

$asioranbaslik="Aşı Oranları";

$pdfbaslik="PDF Yazdır";

$excelbaslik="Excele Yazdır";

$iltopbaslik="İL TOPLAMI";

$ilcetopbaslik="İLÇE TOPLAMI";

$sbbaslik="SAĞLIK BAKANLIĞI";

$frmbaslik="AŞI SONUÇLARI ÇİZELGESİ (FORM013)";

$ilbaslik="İL:";

$ilcebaslik="İLÇE/TSM:";

$topnufbaslik="TOPLAM NÜFUS:";

$bebnufbaslik="0-11 AY BEBEK NÜFUSU:";

$abnbaslik="AYLIK 0-11 AY BEBEK NÜFUSU:";

$yasgrbaslik="YAŞ GRUPLARINA GÖRE YAPILAN DOZ SAYISI";

$asibaslik="AŞI";

$sifirbaslik="0 yaş";

$sifiryasbaslik="(0-11 ay)";

$birbaslik="1 yaş";

$biryasbaslik="(12-23 Ay)";

$ikibaslik="2-4 yaş";

$ikiyasbaslik="(24-59 Ay)";

$besyasbaslik="5-9 yaş";

$onyasbaslik="10-14 yaş";

$onbesyasbaslik="15 yaş ve üzeri";

$dabtbaslik="DaBT-IPA-Hib AŞISI";

$ipabaslik="DaBT-IPA AŞISI";

$kpabaslik="KONJUGE PNÖMOKOK AŞISI";

$opabaslik="ORAL POLİO AŞISI";

$topopabaslik="TOPLAM ORAL POLİO";

$kkkbaslik="K.K.K.AŞISI";

$bcgbaslik="BCG AŞISI";

$bihepbaslik="Bİ";

$hepbbaslik="HEPATİT-B AŞISI";

$tophepbbaslik="TOPLAM HEPATİT-B";

$hepabaslik="HEPATİT-A AŞISI";

$tophepabaslik="TOPLAM HEPATİT-A";

$sucbaslik="SU ÇİÇEĞİ AŞISI";

$kizcikbaslik="KIZAMIKÇIK AŞISI";

$okultdbaslik="OKUL Td AŞISI";

$digertdbaslik="DİĞER Td";

$gebedegilbaslik="GEBE DEĞİL";

$kadintdbaslik="15-49 YAŞ KADIN Td AŞISI";

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

$birimgirilmedi='Şube-Birim İsmi Girilmedi.';

$tipgirilmedi='Kurum Tipi Girilmedi.';

$birimkaydet="Bu Şube-Birimi Kaydedebilirsiniz";

$tipkaydet="Bu Kurum Tipini Kaydedebilirsiniz";

$birimok="Şube-Birimi Kaydedildi...";

$tipok="Kurum Tipi Kaydedildi...";

$birimkaydolmadi="Şube-Birim Kaydedilemedi...";

$tipkaydolmadi="Kurum Tipi Kaydedilemedi...";

$birimdegilismi="Değiştirilecek Şube-Birimin Adı:";

$tipdegilismi="Değiştirilecek Kurum Tipi:";

$birimkaydeg="Şube-Birim Kayıt Değiştirme Ekranı";

$tipkaydeg="Kurum Tipi Kayıt Değiştirme Ekranı";

$oncekibirim="Şube-Birimi";

$oncekitip="Kurum Tipi";

$birimdegismedi="Şube-Birim Değiştirilemedi...";

$tipdegismedi="Şube-Birim Değiştirilemedi...";

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



/* *****************************************************  Excele Döküme ait Uyarılar   *********************************************** */

$ayitoplam="AYI TOPLAMI";

$geneltoplam="TOPLAMI";

/******************************************************Gerekli dökümanlar bölümü *********************************************/

$icerigi="İçeriği";
$dosyaadi="Dosya Adı";
$birimadlari="ŞUBELER  / BİRİMLER";
$tum_birim_adim="TÜM BİRİMLERE AİT DÖKÜMANLAR";
$tumu="TÜM BİRİMLER";

/**********************************************************İLETİ LİSTELEME İŞLEMLERİ****************************************************/
$tarih='Tarih:';

$adi='Gönderenin Adı Soyadı:';

$telefon="Telefonu:";

$email="E-mail Adresi:";

$ileti="İletisi:";

$iletisi="İletisi:";

$vercevap="Verilen Cevap:";

$mailto="mailto:";

$ctarihi="Cevap Tarihi:";

$islem="İşlem:";

$vtarih='Cevap Tarihi:';

$vercevap="Verilen Cevap:";

$mailto="mailto:";

$ctarihi="Cevap Tarihi:";

$cevapkayit="Cevabınız Kaydedildi. Teşekkür Ederiz...";

$cevapnakayit="Cevabınız eklenemedi.Tekrar deneyiniz.";
//PHP İLE TARAYICI TANIMA

/*****************************************************************************************************************************************

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

else if( eregi("(edge) ([0-9]{1,2}.[0-9]{1,3}){0,1}",$browser,$regs) || eregi("(edge/)([0-9]{1,2}.[0-9]{1,3}){0,1}",$browser,$regs))



{$browser = "Edge $regs[2]";}


else



{$browser = "?";}







//echo $browser;



$_SERVER['HTTP_USER_AGENT'] . "nn";



$browser = get_browser(null, true);



//print_r($browser);







//PHP ile tarayıcı kontrolu başka bir kod







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

}else if($browser == 'Edge'){


 function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   }


}else{



$browser = 'Other browsers';



function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","iso-8859-9");  return $str;   }



}













//echo $browser;





//JAVASCRİPT İLE TARAYICI TANIMA



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
   function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   }
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



