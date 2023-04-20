<div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="index.php" class="nav__logo" style="text-decoration:none;">Serik İlçe Sağlık<p id="baslik">Müdürlüğü</p></a>
                    </div>
                    <div class="nav__list">
                        <a href="index.php" id="home" class="nav__link active" data-toggle="tooltip" title="Anasayfa" style="text-decoration:none;">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Anasayfa</span>
                        </a>
                        <a href="adressecim.php" id="iletisim" class="nav__link" data-toggle="tooltip" title="İletişim Rehberi" style="text-decoration:none;">
                            <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">İletişim Bilgileri</span>
                        </a>
                        <a href="formmenu.php" id="formlar" class="nav__link" data-toggle="tooltip" title="Çalışma Formları" style="text-decoration:none;">
                            <ion-icon name="reader-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Çalışma Formları</span>
                        </a>
                        <a href="birimler.php" id="gerekli" class="nav__link" data-toggle="tooltip" title="Gerekli Dökümanlar" style="text-decoration:none;">
                            <ion-icon name="documents-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Gerekli Dökümanlar</span>
                        </a>
                        <a href="sss.php" id="sss" class="nav__link" data-toggle="tooltip" title="Sık Sorulanlar" style="text-decoration:none;">
                        <ion-icon name="help-circle-outline"  class="nav__icon"></ion-icon>
                            <span class="nav__name">Sık Sorulanlar</span>
                                       
                        <?php
                        if(isset($_SESSION['uye'])){                            
                            ?>
<a href="admin/admin.php" id="yonetim" class="nav__link" data-toggle="tooltip" title="Yönetim Paneli - Oturum açık" style="text-decoration:none;">
                      <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                      <span class="nav__name">Yönetim Paneli</span>
                     </a>
<?php
}else{   
    ?>
    <a href="admin/admin.php" id="yonetim" class="nav__link" data-toggle="tooltip" title="Yönetim Paneli - Oturum kapalı" style="text-decoration:none;">
                      <ion-icon name="log-in-outline" class="nav__icon"></ion-icon>
                      <span class="nav__name">Yönetim Paneli</span>
                     </a>
    <?php
}
                        ?>
                        </a>
                        <a href="javascript:goster();" data-toggle="modal" data-target="#iletiyaz" id="ulasin" class="nav__link" data-toggle="tooltip" title="Bize Ulaşın" style="text-decoration:none;">
                        <ion-icon name="chatbubble-ellipses-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Bize Ulaşın</span>
                        </a>      
    <a href="barkod/index.php" id="karekod" class="nav__link" data-toggle="tooltip" title="Karekod Okut" style="text-decoration:none;">
                        <ion-icon name="qr-code-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Karekod</span>
                        </a>                   
                        



                        
                      <!--  <div  class="nav__link collapse">
                            <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Projects</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="#" class="collapse__sublink">Data</a>
                                <a href="#" class="collapse__sublink">Group</a>
                                <a href="#" class="collapse__sublink">Members</a>
                            </ul>
                        </div>

                        <a href="#" class="nav__link">
                            <ion-icon name="pie-chart-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Çalışma Formları</span>
                        </a>
                        <div class="nav__link collapse">
                            <ion-icon name="people-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Team</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="#" class="collapse__sublink">Data</a>
                                <a href="#" class="collapse__sublink">Group</a>
                                <a href="#" class="collapse__sublink">Members</a>
                            </ul>
                        </div>
                        <a href="#" class="nav__link">
                            <ion-icon name="documents-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Gerekli Dökümanlar</span>
                        </a>
                        <a href="#" class="nav__link">
                            <ion-icon name="help-circle-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Sık Sorulanlar</span>
                        </a>-->
                    

                
                </div>
                </div>
            </nav>
        </div>
        <!-- Optional JavaScript -->
<script src="./jquery-1.3.2.js"></script>
<script>
    //$(".nav__link").click(function(){
       // var index=$(".nav a").index();
      //  $(".nav__list a").removeClass("active");
       // $(this).find("a").addClass("active");
//alert("INDEX: "+index);
  //  });

</script>