<?php
//include("index.php");
session_start();
if(!isset($_SESSION["uye"])){
echo "";//"Bu sayfay� g�r�nt�leme yetkiniz yoktur.";
}
?>
<script type="text/javascript" src="jquery.maskedinput-1.2.1.pack.js"></script>
<script language="JavaScript" src="toplama.js" type="text/javascript"></script>
<script language="JavaScript" src="ilkaydet.js" type="text/javascript"></script>	
<script type="text/javascript" src="assets/js/mask_hightlight.js"></script> 
<div id="sonuckay"><form name="girdiekle" action="javascript:void(0)" method="get" onKeyUp="highlight(event)" onClick="highlight(event)">
<?php
include('piramitalanlari.php');
?>
<table class="table table-responsive-sm table-sm table-bordered table-striped table-info table-hover  form013ustaralar" style="margin-top:-6px;">
<thead>
  <tr>
  <th width="40%" class="border-0"></th>
<th width="10%" class="text-right border-0">
<input type="text" name="yeniyil" id="yeniyil" value="<?php echo date("Y"); ?>" class="form-control text-center font-weight-bold" size="3" />
</th>

<th  width="10%" class="text-left border-0"><a class="btn btn-info" style="width:100px" href="#" tabindex="1" title="Kaydet" onclick="girdiyiekle();"><i class="fa fa-floppy-o" aria-hidden="true"></i> Kaydet</a></th>

</th>
<th width="40%" class="border-0"></th>
</tr>
</thead>
</table>
</form>
<div id="sonuc"></div>
