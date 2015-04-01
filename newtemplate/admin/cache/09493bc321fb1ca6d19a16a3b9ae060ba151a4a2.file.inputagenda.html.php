<?php /* Smarty version Smarty-3.1.15, created on 2014-10-15 12:12:32
         compiled from "view/agenda/inputagenda.html" */ ?>
<?php /*%%SmartyHeaderCode:1239485668543df43012a619-92667130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09493bc321fb1ca6d19a16a3b9ae060ba151a4a2' => 
    array (
      0 => 'view/agenda/inputagenda.html',
      1 => 1413341264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1239485668543df43012a619-92667130',
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
  'unifunc' => 'content_543df430165e12_84219654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543df430165e12_84219654')) {function content_543df430165e12_84219654($_smarty_tpl) {?><script>
$(function () {
    //eonasdan datetimepicker
	$('.agenda_date').datetimepicker (
        {
            use24hours: true,
            format: 'DD-MM-YYYY HH:mm',
            minuteStepping:5
        }
    );
	
	$("#isi").jqte();
	
	$('input:checkbox, input:radio').iCheck({
		checkboxClass: 'icheckbox_minimal-blue',
		radioClass: 'iradio_minimal-blue',
		inheritClass: true
	});
});

</script>

<div id="content-header">
	<h1>Tambah Agenda</h1>
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
							Form Agenda
						</h3>

					</div> <!-- /.portlet-header -->
				
					<div class="portlet-content">
				
						<div class="col-sm-12">
							<div class="form-group">
                                <label for="text-input">Judul Agenda</label>
                                <input type="text" name="title" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
" data-required="true"/>
							</div>
						</div>
                        
                        <!-- hidden -->
						<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
" />
                        <input type="hidden" name="categoryid" value="2" />
						<input type="hidden" name="authorid" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
" />
						<input type="hidden" name="image" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['image'];?>
" />
						<input type="hidden" name="image_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['file'];?>
" />
						<!-- hidden -->
                        
                        <div class="col-sm-6">
                            <div class="form-group">
    							<label for="select-input">Tanggal Mulai</label>
    							<div id="postdate" class="input-group date" data-auto-close="true" data-date-autoclose="true">
    								<input class="form-control agenda_date" type="text" name="postdate" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['posted_date'];?>
" data-required="true" />
    								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    
    							</div>
    							
    						</div>
                        </div>
                        
                        <div class="col-sm-6">
                            <div class="form-group">
    							<label for="select-input">Tanggal Akhir</label>
    							<div id="expired_date" class="input-group date" data-auto-close="true" data-date-autoclose="true">
    								<input class="form-control agenda_date" type="text" name="expired_date" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['expired_date'];?>
" data-required="true" />
    								<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    
    							</div>
    							
    						</div>
                        </div>
                        
                        <div class="col-sm-12">
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
