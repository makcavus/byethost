<!-- Modal -->
<div class="modal fade bd-example-modal-sm" id="silmenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title" id="exampleModalLabel">Kayıt Silme Onayı</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="text-secondary bg-warning text-center"><?php echo '<div><h6>'.$ilinadi.'-'.$ilceninadi.'-<font style="color:blue">'.$ocgelen.'</FONT><br>'.$yilgelen.'-'.$aygelen.'</h6></div>'; ?></h5>
                <h5 class="text-danger">Bu Kaydı Silmek İstediğinize Emin misiniz?</h5>
            </div>
            <div class="modal-footer bg-success justify-content-center">
                <button type="button" class="btn btn-primary btn-sm mr-5" data-dismiss="modal"><i class="fa fa-reply-all fa-lg"></i> Hayır</button>
                <a href="#" tabindex="2" title="evet" onClick="sil();" class="btn btn-danger btn-sm"><i class="fa fa-check fa-lg"></i> Evet</a>
            </div>
            <div id="sonucsil" align="center"></div>
        </div>
    </div>
</div>
