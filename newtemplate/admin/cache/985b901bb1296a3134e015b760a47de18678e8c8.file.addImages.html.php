<?php /* Smarty version Smarty-3.1.15, created on 2015-01-23 14:00:45
         compiled from "view/gallery/addImages.html" */ ?>
<?php /*%%SmartyHeaderCode:189454095954c1f19da5fba7-56253945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '985b901bb1296a3134e015b760a47de18678e8c8' => 
    array (
      0 => 'view/gallery/addImages.html',
      1 => 1417527879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189454095954c1f19da5fba7-56253945',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'albumId' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c1f19dab1753_41407759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c1f19dab1753_41407759')) {function content_54c1f19dab1753_41407759($_smarty_tpl) {?><script>
$(function () {
	$('#postdate').datepicker ();
	$('#expiredate').datepicker ();
	
	$("#isi").jqte();
	
	$('input:checkbox, input:radio').iCheck({
		checkboxClass: 'icheckbox_minimal-blue',
		radioClass: 'iradio_minimal-blue',
		inheritClass: true
	})
})
</script>

<div id="content-header">
	<h1>Tambah Gambar</h1>
</div> <!-- #content-header -->	

<div id="content-container">
	<form id="validate-enhanced" class="form parsley-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
gallery/inpGallery" enctype="multipart/form-data">

		<div class="row">
			<div class="col-md-12">
				<div class="portlet">

					<div class="portlet-header">

						<h3>
						<i class="fa fa-tasks"></i>
						Form Gambar
						</h3>

						</div> <!-- /.portlet-header -->

						<div class="portlet-content">

							<div class="col-sm-12">

								<!-- hidden -->
								<input type="hidden" name="otherid" value="<?php echo $_smarty_tpl->tpl_vars['albumId']->value;?>
" />
								<input type="hidden" name="gallerytype" value="9" />
								<input type="hidden" name="typealbum" value="2" />
								<input type="hidden" name="n_status" value="1" />
								<!-- hidden -->

								<div class="form-group">                        

									<div class="fileupload fileupload-new" data-provides="fileupload">
										<div class="row">
											<div class="col-sm-12">
												<input type="submit" class="btn btn-primary" value="Unggah" id="submit" />
												<span id="addFiles" class="btn btn-default btn-file">
													<span id="addButton">Pilih Gambar</span>
													<input type="file" name="file_image[]" id="file_image" multiple/>
												</span>
												<a href="#" class="delImage btn btn-default fileupload-exists">Hapus</a>
											</div>
										
											<div class="fileupload-new thumbnail" style="display:none;">
												<img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" />
											</div>
											<div class="preview-area">
											</div>
										</div>
										
									</div>
								</div>

							</div>
							
						</div>

					</div>
				</div>

			</div>
		</div>

	</form>
</div>
<script type="text/javascript">
var inputLocalFont = document.getElementById("file_image");
if(inputLocalFont){
	inputLocalFont.addEventListener("change",previewImages,false);
}

function previewImages(){
    var fileList = this.files;
    
    var anyWindow = window.URL || window.webkitURL;

        for(var i = 0; i < fileList.length; i++){
          var objectUrl = anyWindow.createObjectURL(fileList[i]);
		  //console.log(fileList[i]);
          $('.preview-area').append('<div class="col-sm-3">' +
			  							'<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; line-height: 20px;">' +
			  								'<img src="' + objectUrl + '" />' +
										'</div>' +
									'</div>');
          window.URL.revokeObjectURL(fileList[i]);
        }
    
    
}
$( document ).ready(function() {
	$("body").on('click', '#addFiles', function() {
		$('.preview-area').children().remove();
		$('#addFiles').hide();
		$('.delImage').show();
		$('.delImage').css( "display", "inline-block" );
	});
	
	$("body").on('click', '.delImage', function() {
		$('#addFiles').show();
		$('.delImage').hide();
	    $('.preview-area').children().remove();
	});
});

</script><?php }} ?>
