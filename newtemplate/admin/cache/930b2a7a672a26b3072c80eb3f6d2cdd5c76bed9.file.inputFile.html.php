<?php /* Smarty version Smarty-3.1.15, created on 2015-02-15 22:58:10
         compiled from "view/directory/repository/inputFile.html" */ ?>
<?php /*%%SmartyHeaderCode:80987995354e0c21222e309-93153781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '930b2a7a672a26b3072c80eb3f6d2cdd5c76bed9' => 
    array (
      0 => 'view/directory/repository/inputFile.html',
      1 => 1418139045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80987995354e0c21222e309-93153781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
    'listactivity' => 0,
    'activity' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54e0c212311606_40513339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e0c212311606_40513339')) {function content_54e0c212311606_40513339($_smarty_tpl) {?><script>
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
	<h1>Tambah File</h1>
</div> <!-- #content-header -->	

<div id="content-container">
	<form id="validate-enhanced" class="form parsley-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
direktori/inpFile" enctype="multipart/form-data">

		<div class="row">
			<div class="col-md-9">
				<div class="portlet">
				
					<div class="portlet-header">

						<h3>
							<i class="fa fa-tasks"></i>
							Form File
						</h3>

					</div> <!-- /.portlet-header -->
				
					<div class="portlet-content">
				
						<div class="col-sm-9">
							<div class="form-group">
							<label for="text-input">Tipe File</label>
									<input type="text" name="brief" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['brief'];?>
" data-required="true"/>
							</div>
						</div>
                        
                        <div class="col-sm-5">
							<div class="form-group">
                                <label for="text-input">Jenis Kegiatan</label>
                                
                                <select id="activity" class="form-control" data-required="true" >
                                    <option value="" selected>Pilih Tipe Kegiatan</option>
                                    <?php  $_smarty_tpl->tpl_vars['activity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listactivity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activity']->key => $_smarty_tpl->tpl_vars['activity']->value) {
$_smarty_tpl->tpl_vars['activity']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['activity']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['activity']->value['title'];?>
</option>
                                    <?php } ?>
                                </select>
                            </div>
                            
                            <?php  $_smarty_tpl->tpl_vars['activity'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['activity']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listactivity']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['activity']->key => $_smarty_tpl->tpl_vars['activity']->value) {
$_smarty_tpl->tpl_vars['activity']->_loop = true;
?>
                            <div class="form-group activity-name" id="<?php echo $_smarty_tpl->tpl_vars['activity']->value['title'];?>
" style="display: none;">
                                <label for="text-input">Nama Kegiatan</label>
                                
                                <select id="activity-<?php echo $_smarty_tpl->tpl_vars['activity']->value['title'];?>
" name="otherid" class="activity-list form-control">
                                    <option value="" selected>Pilih Kegiatan</option>
                                    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activity']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['name']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value['content'];?>
</option>
                                    <?php } ?>
                                </select>
                            </div>
                            <?php } ?>
                            
                            <!-- hidden -->
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
							<input type="hidden" name="gallerytype" value="8" />
							<input type="hidden" name="typealbum" value="3" />
                            <input type="hidden" name="image" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
" />
							<!-- hidden -->
						</div>
                                                
                        <div class="col-sm-12">
                            <div class="form-group">                        
                                <label for="file_image">File</label>                        
                                <div class="fileupload fileupload-new" data-provides="fileupload">
        						  <div class="fileupload-new thumbnail" style="width: 200px; height: 30px;">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['file'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" /></div>
        						  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; line-height: 20px; min-height: 30px;
padding: 13px 12px;"></div>
        						  <div>
        							<span class="btn btn-default btn-file">
                                        <span class="fileupload-new">Select File</span>
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
</div>

<script type="text/javascript">
    
    $(document).ready(function() {
        /* Add event listener to the dropdown input */
        $('select#activity').change( function() {
            var toshow = $(this).val();
            //$('.activity-list').removeProp('disabled');
            $('.activity-list').prop('disabled', true);
            $('.activity-name').hide();
            $('#'+toshow).show();
            $('#activity-'+toshow).prop('disabled', false);
        } );
    } );
</script><?php }} ?>
