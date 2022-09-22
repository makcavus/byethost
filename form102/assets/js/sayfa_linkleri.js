
            $(function(){
                var ats_iframe='<iframe src="https://ats.saglik.gov.tr" width="100%" height="896px" frameborder="0"></iframe>';
                var kds_iframe='<iframe src="https://kds.sagliknet.saglik.gov.tr/analytics/saw.dll?Dashboard" width="100%" height="896px" frameborder="0"></iframe>';
                //var ebys_iframe='<iframe src="https://ebys.saglik.gov.tr/account/auth/redirecttosso" width="100%" height="896px" frameborder="0"></iframe>';
                var mhrs_iframe='<iframe src="https://www.mhrs.gov.tr" width="100%" height="896px" frameborder="0"></iframe>';
                var nobecz_iframe='<iframe src="https://www.antalyaeo.org.tr/tr/nobetci-eczaneler" width="100%" height="896px" frameborder="0"></iframe>';
                var webmail_iframe='<iframe src="https://eposta.saglik.gov.tr" width="100%" height="896px" frameborder="0"></iframe>';

                
                
                //Yüklendiğinde Anasayfa
                $("#nav-placeholder").load("duyuru.php");
                //Anasayfa
                $("#home").click(function(){
              $("#nav-placeholder").load("duyuru.php");
            });
            //İletişim Bilgileri
            $("#iletisim").click(function(){
              $("#nav-placeholder").load("adressecim.php");
            });
//Çalışma Formları
$("#formlar").click(function(){
              $("#nav-placeholder").load("formmenu.php");
            });


            //ATS
                $("#ats").click(function(){                    
                    $("#nav-placeholder").html(ats_iframe);
            });
            //Aşı Takvimi
            $("#asi_takvimi").click(function(){
              $("#nav-placeholder").load("asi.html");
            });
            //USS
            $("#uss").click(function(){
                window.open('https://yonetim.enabiz.gov.tr','HB','toolbar=1, location=0, scrollbars=0,resizable=0, width=900,height=770');
            });
            //KDS
            $("#kds").click(function(){                    
                    $("#nav-placeholder").html(kds_iframe);
            });
            //EBYS
            $("#ebys").click(function(){                    
                window.open('https://ebys.saglik.gov.tr/account/auth/redirecttosso','HB','toolbar=1, location=0, scrollbars=0,resizable=0, width=900,height=770');
            });
            //MHRS
            $("#mhrs").click(function(){                    
                    $("#nav-placeholder").html(mhrs_iframe);
            });
            //NÖBETÇİ ECZANELER
            $("#nobecz").click(function(){                    
                    $("#nav-placeholder").html(nobecz_iframe);
            });                
            //HSYS
            $("#hsys").click(function(){
                window.open('https://hsys-mbys.saglik.gov.tr','HB','toolbar=1, location=0, scrollbars=0,resizable=0, width=900,height=770');
            });
            //TAHLİL SONUÇLARI
            $("#tahlil").click(function(){                    
                window.open('https://07hsl.com','HB','toolbar=1, location=0, scrollbars=0,resizable=0, width=900,height=770');
            });    
            //AİLE HEKİMİNİ BUL
            $("#ahbul").click(function(){                    
                window.open('http://sbu.saglik.gov.tr/sbahbs','HB','toolbar=1, location=0, scrollbars=0,resizable=0, width=900,height=770');
            });  
            //SAĞLIK BAKANLIĞI EPOSTA
            $("#webmail").click(function(){                    
                window.open('https://eposta.saglik.gov.tr','HB','toolbar=1, location=0, scrollbars=0,resizable=0, width=900,height=770');
            });      
        });
           