<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">



<html xmlns="http://www.w3.org/1999/xhtml">



<head>



<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />



<title>Untitled Document</title>



</head>







<body>



<?php
$usersirano="S�ra No:";
$userkurumadi="Kurum Ad�:";
$userdradi="Doktor Ad�:";
$userkullaniciadi="Kullan�c� Ad�:";
$userpassword="�ifresi:";
$sagkuradi="Sa�l�k Kurumunun Ad�";
$kurkursec="Kurum/Kurulus Se�iniz";
$tumtip="T�m�";
$ilsecim="�li Se�iniz";

$onceilsecim="�nce �li Se�iniz";

$ilcesecim="�l�e Se�iniz";

$onceilcesecim="�nce �l�eyi Se�iniz";

$ahsecim="Aile Hekimini Se�iniz";

$eklegorbaslik="Yeni Kay�t Ekleme Ekran�";

$deggorbaslik="Kay�t De�i�tirme Ekran�";

$ilgorbaslik="�l Toplam� G�r�nt�leme Ekran�";

$ilcegorbaslik="�l�e Toplam� G�r�nt�leme Ekran�";

$ocakgorbaslik="Kurum/Aile Hek.Toplam� G�r�nt�leme Ekran�";

$aygorbaslik="Ayl�k Toplam G�r�nt�leme Ekran�";

$kayitgorbaslik="Kay�t G�r�nt�leme Ekran�";

$asioranbaslik="A�� Oranlar�";

$pdfbaslik="PDF Yazd�r";

$excelbaslik="Excele Yazd�r";

$iltopbaslik="�L TOPLAMI";

$ilcetopbaslik="�L�E TOPLAMI";

$sbbaslik="SA�LIK BAKANLI�I";

$frmbaslik="A�I SONU�LARI ��ZELGES� (FORM013)";

$ilbaslik="�L:";

$ilcebaslik="�L�E/TSM:";

$topnufbaslik="TOPLAM N�FUS:";

$bebnufbaslik="0-11 AY BEBEK N�FUSU:";

$abnbaslik="AYLIK 0-11 AY BEBEK N�FUSU:";

$yasgrbaslik="YA� GRUPLARINA G�RE YAPILAN DOZ SAYISI";

$asibaslik="A�I";

$sifirbaslik="0 ya�";

$sifiryasbaslik="(0-11 ay)";

$birbaslik="1 ya�";

$biryasbaslik="(12-23 Ay)";

$ikibaslik="2-4 ya�";

$ikiyasbaslik="(24-59 Ay)";

$besyasbaslik="5-9 ya�";

$onyasbaslik="10-14 ya�";

$onbesyasbaslik="15 ya� ve �zeri";

$dabtbaslik="DaBT-IPA-Hib A�ISI";

$ipabaslik="DaBT-IPA A�ISI";

$kpabaslik="KONJUGE PN�MOKOK A�ISI";

$opabaslik="ORAL POL�O A�ISI";

$topopabaslik="TOPLAM ORAL POL�O";

$kkkbaslik="K.K.K.A�ISI";

$bcgbaslik="BCG A�ISI";

$bihepbaslik="B�";

$hepbbaslik="HEPAT�T-B A�ISI";

$tophepbbaslik="TOPLAM HEPAT�T-B";

$hepabaslik="HEPAT�T-A A�ISI";

$tophepabaslik="TOPLAM HEPAT�T-A";

$sucbaslik="SU ���E�� A�ISI";

$kizcikbaslik="KIZAMIK�IK A�ISI";

$okultdbaslik="OKUL Td A�ISI";

$digertdbaslik="D��ER Td";

$gebedegilbaslik="GEBE DE��L";

$kadintdbaslik="15-49 YA� KADIN Td A�ISI";

$duzadbaslik="Ad� Soyad�:";

$duzunbaslik="�nvan�:";

$duzimzabaslik="�mza:";

$onadbaslik="Ad� Soyad�:";

$onunbaslik="�nvan�:";

$onimzabaslik="�mza:";

$aygrafbaslik="Ayl�k Grafik";

$kumgrafbaslik="K�mulatif Grafik";

//echo $frmbaslik;

//************************************************ K O N T R O L  M E N � *******************************************************

$ilsecbaslik="�l Se�ilmedi.";

$ilcesecbaslik="�l�e Se�ilmedi.";

$kursecbaslik="Kurum / AHB Se�ilmedi.";

$yilbosbaslik="Y�l� Bo� B�rakt�n�z.";

$kayyetkibaslik="Bu Kayd� Yapmaya Yetkiniz Yoktur.";

$uyarbaslik="BU KAYIT YAPILMI�...";

$bosbaslik="Hen�z hi�bir Aile Hekimli�ine veri girilmemi�tir.";

$ahbirbaslik="Aile Hekimli�i Biriminden";

$ahgirbaslik="Aile Hekimli�ine ait veriler girilmi�tir.";

$ahvgbaslik="Aile Hekimli�ine ait veri girilmemi�tir.";

$gelmeyenbaslik="Verileri girilmeyen Aile Hekimli�i Birimleri";

$tamambaslik="B�t�n Aile Hekimli�i Birimlerine ait veri giri�i yap�lm��t�r.";



//********************************************EKLEME/DE���T�RME/S�LME UYARILARI********************************************************



$kayiteklendi="Kay�t Eklendi...";

$kaydedilmedi="Verileriniz Kaydedilemedi...";

$kayitdegistirildi="Kay�t De�i�tirildi...";

$degistirilmedi="Verileriniz De�i�tirilemedi...";

$silmeonay="Kay�t Silme Onay�";

$silemin="Bu Kayd� Silmek �stedi�inize Emin misiniz?";

$silindi="Kay�t Silindi...";

$geridon="Geri d�n";

$silinmedi="Kay�t silinemedi.";





//**************************************************ADM�N PANELE �ZG� UYARILAR ********************************************************

$birimgirilmedi='�ube-Birim �smi Girilmedi.';

$tipgirilmedi='Kurum Tipi Girilmedi.';

$birimkaydet="Bu �ube-Birimi Kaydedebilirsiniz";

$tipkaydet="Bu Kurum Tipini Kaydedebilirsiniz";

$birimok="�ube-Birimi Kaydedildi...";

$tipok="Kurum Tipi Kaydedildi...";

$birimkaydolmadi="�ube-Birim Kaydedilemedi...";

$tipkaydolmadi="Kurum Tipi Kaydedilemedi...";

$birimdegilismi="De�i�tirilecek �ube-Birimin Ad�:";

$tipdegilismi="De�i�tirilecek Kurum Tipi:";

$birimkaydeg="�ube-Birim Kay�t De�i�tirme Ekran�";

$tipkaydeg="Kurum Tipi Kay�t De�i�tirme Ekran�";

$oncekibirim="�ube-Birimi";

$oncekitip="Kurum Tipi";

$birimdegismedi="�ube-Birim De�i�tirilemedi...";

$tipdegismedi="�ube-Birim De�i�tirilemedi...";

$ilgirilmedi='�l �smi Girilmedi.';

$ilkaydet="Bu �li Kaydedebilirsiniz";

$ilok="�li Kaydedildi...";

$ilkaydolmadi="�l Kaydedilemedi...";

$degilismi="De�i�tirilecek �lin Ad�:";

$ilkaydeg="�l Kay�t De�i�tirme Ekran�";

$oncekiil="ili";

$sonraki="olarak de�i�tirildi...";

$ildegismedi="�l De�i�tirilemedi...";

$ilcekaydet="Bu �l�eyi Kaydedebilirsiniz";

$ilceok='�l�esi Kaydedildi...';

$ilcekaydolmadi="�l�esi Kaydedilemedi...";

$ilcekaydeg="�l�e Kay�t De�i�tirme Ekran�";

$degilceismi="De�i�tirilecek �l�enin Ad�:";

$oncekiilce="il�esi";

$ilcedegismedi="�l De�i�tirilemedi...";

$kurumkaydet="Bu Kurumu Kaydedebilirsiniz.";

$kurumok='Kurumu / Aile Hek.Kaydedildi...';

$kurumkaydolmadi="Kurumu / Aile Hek.Kaydedilemedi...";

$kurumkaydeg="Kurum / Aile Hek.Kay�t De�i�tirme Ekran�";

$kurumadibaslik="Kurum Ad�:";

$asmadibaslik="A.S.M.Ad�:";

$ahekadibaslik="A.Hek.Ad�:";

$aseadibaslik="A.S.E.Ad�:";

$ase�nvanibaslik="A.S.E.�nvan�:";

$kurumonceki="Kurum Bilgileri";

$kurumsonraki="de�i�tirildi...";

$kurbilolmadi="Kurum De�i�tirilemedi.";

$uyekodsec="�ye Kodu Se�iniz";

$kulkurkod="Kullan�c�n�n Kurum Kodunu Se�iniz.";

$kultanim="Bu Kullan�c�y� Tan�mlayabilirsiniz.";

$yenikulekleme="Yeni Kullan�c� Ekleme Ekran�";

$dradi="Doktor Ad�:";

$kuladi="Kullan�c� Ad�:";

$kulsifre="Kullan�c� �ifresi:";

$kulok='Nolu AHB / Kurumuna ait Kullan�c� Kaydedildi...';

$kulkaydolmadi="Kullan�c� Kaydedilemedi...";

$kuldeg="Kullan�c� Kay�t De�i�tirme Ekran�";

$kulonceki="Nolu AHB / Kurumu Kullan�c� Bilgileri";

$kulolmadi="Kullan�c� De�i�tirilemedi.";

$kulsilindi="Nolu AHB / Kurumuna ait Kullan�c� Kayd� Silindi...";



/* *****************************************************  Excele D�k�me ait Uyar�lar   *********************************************** */

$ayitoplam="AYI TOPLAMI";

$geneltoplam="TOPLAMI";

/******************************************************Gerekli d�k�manlar b�l�m� *********************************************/

$icerigi="��eri�i";
$dosyaadi="Dosya Ad�";
$birimadlari="�UBELER  / B�R�MLER";
$tum_birim_adim="T�M B�R�MLERE A�T D�K�MANLAR";
$tumu="T�M B�R�MLER";

/**********************************************************�LET� L�STELEME ��LEMLER�****************************************************/
$tarih='Tarih:';

$adi='G�nderenin Ad� Soyad�:';

$telefon="Telefonu:";

$email="E-mail Adresi:";

$ileti="�letisi:";

$iletisi="�letisi:";

$vercevap="Verilen Cevap:";

$mailto="mailto:";

$ctarihi="Cevap Tarihi:";

$islem="��lem:";

$vtarih='Cevap Tarihi:';

$vercevap="Verilen Cevap:";

$mailto="mailto:";

$ctarihi="Cevap Tarihi:";

$cevapkayit="Cevab�n�z Kaydedildi. Te�ekk�r Ederiz...";

$cevapnakayit="Cevab�n�z eklenemedi.Tekrar deneyiniz.";
//PHP �LE TARAYICI TANIMA

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







//PHP ile taray�c� kontrolu ba�ka bir kod







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





//JAVASCR�PT �LE TARAYICI TANIMA



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



