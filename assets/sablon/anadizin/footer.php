<table class="table table-sm table-responsive-sm table-hover table-striped" style="background-color:#CCFFCC">
<tbody>
<tr>
 <td width="100%" align="center" style="border-color:black;"><a href="#top" _fcksavedurl="#top" _fcksavedurl="#top"><img src="images/basadon.png"/></a>
    </td>
</tr>
<tr>
<td style="border-color:black;"><div align="center">
<?php
include("altlink.php");
 echo $link1; 
 echo $link2; 
 echo $link3; 
 echo $link4; 
 echo $link5; 
 echo $link6; 
 echo $link7; 
 echo $link8; 
 echo $link9; 
 echo $link10;
 echo $medya; 
?>
<div id="fon" class="arka_fon"></div>
     <?php echo $telif; ?>
   </div>
 </td>
 </tr>
</table>
<div class="modal fade" id="iletiyaz" tabindex="-1" role="dialog" aria-labelledby="iletiyazLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabel"><?php $labelulas="Formu doldurarak düşüncelerinizi bize iltebilirsiniz."; echo $labelulas; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<div class="form-group">
 <form class="form" name="bizeulasin" id="bizeulasin" method="GET" action="javascript:void(0)" onKeyUp="highlight(event)" onClick="highlight(event)">

<table class="table table-striped table-primary table-bordered table-sm table-responsive-lg table-hover">
<thead class="thead-dark" align="center">
<tbody>
<tr>
           <td><font class="Yazi">Ad Soyad:</font></td>
           <td>
             <input name="tarih" type="hidden" id="tarih" class="form-control form-control-sm" value="<?php $tarih=date("Y-m-d"); echo $tarih; ?>">
             <input name="adsoyad" type="text" id="adsoyad" class="form-control form-control-sm w-100 sm" tabindex="1" required></td>
           </tr>
           <tr>
             <td><font class="Yazi">Telefon:</font></td>
             <td><input name="telefon" type="text" id="telefon" class="form-control form-control-sm w-100 sm" tabindex="2"></td>
           </tr>
           <tr>
             <td><font class="Yazi">E-mail Adresi:</font></td>
             <td><input name="emailadresi" type="text" id="emailadresi" class="form-control form-control-sm w-100 sm" tabindex="3" required></td>
           </tr>
           <tr>
             <td><font class="Yazi"><?php $labeldusunce="D���nceleriniz:"; echo $labeldusunce; ?></font></td>
             <td><textarea name="dusunceniz" rows="5" id="dusunceniz" class="form-control w-100" tabindex="4" required></textarea></td>
           </tr>
  </thead>
 </tbody>
 </table>
 </form>
 </div>
      </div>
      <div class="modal-footer">
      <a href="#" onsubmit="javascript:reloadPage(this)" class="btn btn-success btn-sm btn-close" data-dismiss="modal"><i class="fa fa-times-circle fa-lg"></i><?php $labeliptal=" �ptal"; echo $labeliptal; ?></a>
      <a href="#" onClick="iletiyiekle();" class="btn btn-primary btn-sm ml-3"><i class="fa fa-check fa-lg"></i><?php $labelgonder=" G�nder"; echo $labelgonder; ?></a>  
      </div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="assets/bootstrap-4/js/jquery-3.2.1.slim.min.js"></script>
    <script src="assets/bootstrap-4/popper.js"></script>
	<script src="assets/bootstrap-4/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap-4/sweetalert2/sweetalert2.all.js"></script>
    <script src="assets/js/basadon_button.js"></script>
        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        
        
        
        <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>-->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/sayfa_linkleri.js"></script>
        
        </body>
</html>