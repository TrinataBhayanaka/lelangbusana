<?php /* Smarty version Smarty-3.1.15, created on 2015-02-15 22:58:17
         compiled from "view/directory/perundangUndang/inputperundangan.html" */ ?>
<?php /*%%SmartyHeaderCode:42313858054e0c1c96e3259-07603372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ece368153ae30482f3bd8775effa4835a44f739d' => 
    array (
      0 => 'view/directory/perundangUndang/inputperundangan.html',
      1 => 1424015850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42313858054e0c1c96e3259-07603372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54e0c1c979fd16_46636978',
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e0c1c979fd16_46636978')) {function content_54e0c1c979fd16_46636978($_smarty_tpl) {?><script>
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
	<h1>Tambah Perundang-Undangan</h1>
</div> <!-- #content-header -->	

<div id="content-container">
	<form id="validate-enhanced" class="form parsley-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
direktori/direktoriinp" enctype="multipart/form-data">

		<div class="row">
			<div class="col-md-9">
				<div class="portlet">
				
					<div class="portlet-header">

						<h3>
							<i class="fa fa-tasks"></i>
							Form Perundang-Undangan
						</h3>

					</div> <!-- /.portlet-header -->
				
					<div class="portlet-content">
				
						<div class="col-sm-12">
							<div class="form-group">
                                <label for="text-input">Judul</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" data-required="true"/>
							</div>
						</div>
                        
                        <input type="hidden" name="articletype" value="1"/>
                        
						
						<div class="col-sm-9">
							<div class="form-group">
							<label for="text-input">Brief</label>
									<input type="text" name="brief" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['brief'];?>
" />
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
                                    <input type="hidden" name="categoryid" value="7" />
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
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group">
    							<label for="select-input">Postdate</label>
    							<div id="postdate" class="input-group date" data-auto-close="true" data-date-format="dd-mm-yyyy" data-date-autoclose="true">
    								<input class="form-control" type="text" name="postdate" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['posted_date'];?>
" data-required="true">
    								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
    							</div>
    							
    						</div>
    						
    						<div class="form-group">
    								<div class="checkbox">
    									<label>
    										<input type="checkbox" name="n_status" class="" <?php echo $_smarty_tpl->tpl_vars['data']->value['n_status'];?>
 >
    										Publikasikan
    									</label>
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
