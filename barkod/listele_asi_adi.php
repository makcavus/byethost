<?php
include('../con_barkod.php');
include('barkodalanlari.php');
$asi_adi=$_POST['asi_adi'];
$gtin=$_POST['gtin'];
$serino=$_POST['serino'];
$expdate=$_POST['expdate'];
$batch=$_POST['batch']; 
$cins=$_POST['cins'];
$mesaj=$_POST['mesaj'];
$miktar_kod=substr($gtin,0,1);
$token=$_POST['token'];
?>
<div class="container table-responsive">
<table class="table table-sm table-striped table-bordered table-hover table-info mt-2">
<thead>
<th>Aşı Kodu</th>
<th>Aşı Adı</th>
<th>İşlem</th>
</thead>
<tbody>
<?php
	$sql=@mysqli_query($dbh_barkod,"select * from asi_kodlari order by asi_adi asc");
	while($list=mysqli_fetch_array($sql)){	
?>
<tr>
<td><?php echo $list['asi_kodu'];?></td>
<td><?php echo $list['asi_adi'];?></td>

<td class="text-center">
<form class="form-control-sm" action="#">
<input type="hidden" name="id" id="id" value="<?php echo $list['id']; ?>">
<a class="btn btn-success btn-sm" href="asi_kodu_duzenle.php?id=<?= $list['id'] ?>">Düzenle</a>
<a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-target=".bd-example-modal-sm-barkod" 
style="width: 50px"><i class="fa fa-trash-o" aria-hidden="true"></i> Sil</a></form>
</td>
</tr>
<!-- Barkod Silme Modal -->
<div class="modal fade bd-example-modal-sm-barkod" id="silmenubarkod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelbarkod" aria-hidden="true">
  <div class="modal-dialog modal-sm-barkod">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title" id="exampleModalLabelbarkod"><?php echo $silmeonay;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h5 class="text-secondary bg-warning text-center"><?php echo '<div><h6>
       <font style="color:blue">'.$list['asi_kodu'].'</font> Kodlu <font style="color:blue">'.$list['asi_adi'].'</font> adlı aşı</h6></div>'; ?></h5>
       <h5 class="text-danger"><?php echo $silemin;?></h5>
      </div>
      <div class="modal-footer bg-success justify-content-center">
        <button type="button" class="btn btn-primary btn-sm mr-5" data-dismiss="modal"><i class="fa fa-reply-all fa-lg"></i> <?php echo $hayir;?></button>
        <a href="#" tabindex="2" title="evet" onClick="asiadisil();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> Evet</a>
               
      </div>
      <div id="sonucsil" align="center"></div>
    </div>
  </div>
</div>	
<?php
	}
	
	?>
</tbody>
</table>
</div>
</div>
</div>