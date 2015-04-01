<?php /* Smarty version Smarty-3.1.15, created on 2015-01-23 14:00:22
         compiled from "view/gallery/inputAlbum.html" */ ?>
<?php /*%%SmartyHeaderCode:163716822054c1f186358d55-84252969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '043b00ba7b3f0af724134d78a11d21c5a18080c2' => 
    array (
      0 => 'view/gallery/inputAlbum.html',
      1 => 1417527879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163716822054c1f186358d55-84252969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54c1f1863c6be2_64343596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c1f1863c6be2_64343596')) {function content_54c1f1863c6be2_64343596($_smarty_tpl) {?><script>
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
	<h1>Tambah Album</h1>
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
							Form Album
						</h3>

					</div> <!-- /.portlet-header -->
				
					<div class="portlet-content">
				
						<div class="col-sm-9">
							<div class="form-group">
                                <label for="text-input">Judul</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" data-required="true"/>
							</div>
						</div>
						
						<div class="col-sm-9">
							<div class="form-group">
							<label for="text-input">Brief</label>
									<input type="text" name="brief" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['brief'];?>
" />
							</div>
							
							<!-- hidden -->
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
                            <input type="hidden" name="categoryid" value="9" />
							<input type="hidden" name="articletype" value="1" /> <!-- album -->
							<input type="hidden" name="authorid" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
" />
							<input type="hidden" name="image" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" />
							<input type="hidden" name="image_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['file'];?>
" />
							<!-- hidden -->
						</div>
                                                
                        <div class="col-sm-12">
                            <div class="form-group">                        
                                <label for="file_image">Cover Image</label>                        
                                <div class="fileupload fileupload-new" data-provides="fileupload">
        						  <div class="fileupload-new thumbnail" style="width: 200px; height: 180px;">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" /></div>
        						  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; line-height: 20px;"></div>
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
							<input type="submit" class="btn btn-primary" value="Submit" id="submit" />
                        </div>                 
                        
					</div>
				</div>
                                
			</div>
		</div>
	
	</form>
</div><?php }} ?>
