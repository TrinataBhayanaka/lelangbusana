<?php /* Smarty version Smarty-3.1.15, created on 2015-02-15 22:56:05
         compiled from "view/about/inputprofile.html" */ ?>
<?php /*%%SmartyHeaderCode:62582243543dec67592261-50403662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e627b7f5e760642f6b7e7c164278b7cbf59504cc' => 
    array (
      0 => 'view/about/inputprofile.html',
      1 => 1424015763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62582243543dec67592261-50403662',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_543dec675b90c5_32790292',
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543dec675b90c5_32790292')) {function content_543dec675b90c5_32790292($_smarty_tpl) {?>
<script>
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

<style>
.jqte_editor{
    height: 350px;
}
</style>


<div id="content-header">
	<h1>Isi Profil</h1>
</div> <!-- #content-header -->	

<div id="content-container">
	<form id="validate-enhanced" class="form parsley-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
article/articleinp" enctype="multipart/form-data">

		<div class="row">
			<div class="col-md-9">
				<div class="portlet">
				
					<div class="portlet-header">

						<h3>
							<i class="fa fa-tasks"></i>
							Form Profil
						</h3>

					</div> <!-- /.portlet-header -->
				
					<div class="portlet-content">
                    
                        <div class="col-sm-12">
                            <div class="form-group">                        
                                <label for="file_image">Cover Image</label>                        
                                <div class="fileupload fileupload-new" data-provides="fileupload">
        						  <div class="fileupload-new thumbnail" style="width: 200px; height: 180px;">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" /></div>
        						  <div class="fileupload-preview fileupload-exists thumbnail" style="height: 180px; line-height: 20px;"></div>
        						  <div>
        							<span class="btn btn-default btn-file">
                                        <span class="fileupload-new">Select image</span>
                                        <span class="fileupload-exists">Change</span>
                                        <input type="file" name="file_image"/>
                                    </span>
        							<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
        						  </div>
        						</div>
                            </div>
                        </div>

						<div class="col-sm-12">
							<div class="form-group">
							<label for="textarea-input">Deskripsi</label>
								
								<textarea style="width:100%;" id="brief_berita" name ="content" class="ckeditor"><?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
</textarea>
							</div>
							
							
									<!-- hidden -->
									<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
                                    <input type="hidden" name="categoryid" value="3" />
                                    <input type="hidden" name="articletype" value="1" />
                                    <input type="hidden" name="n_status" value="1" />
									<input type="hidden" name="authorid" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
" />
									<input type="hidden" name="image" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" />
									<input type="hidden" name="image_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['file'];?>
" />
									<!-- hidden -->
							<input type="submit" class="btn btn-primary" value="Submit" id="submit" />
						</div>
                        
                                                                                                                 
					</div>
				</div>
                                
			</div>
		</div>
	
	</form>
</div><?php }} ?>
