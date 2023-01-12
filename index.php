
        <?php        
        session_start();
        if(!isset($_SESSION["uye"])){
        echo "";//"Bu sayfayı görüntüleme yetkiniz yoktur.";
        }
include("assets/sablon/anadizin/header.php");
include("assets/sablon/anadizin/sidebar.php")
        ?>        
        <!--Container Main start-->
    <div class="height-100 bg-light" id="nav-placeholder">
       <?php
include("duyuru.php");
       ?>
    </div>
    <!--Container Main end-->
    <?php
    include("assets/sablon/anadizin/footer.php")
    ?>
   