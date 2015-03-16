<?php /* Smarty version Smarty-3.1.15, created on 2015-02-15 22:58:06
         compiled from "view/directory/repository/repository.html" */ ?>
<?php /*%%SmartyHeaderCode:51343751354e0c20e735fd6-10978437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f01bb53954a7ab5e6ffed1ff2e958d1a1a846612' => 
    array (
      0 => 'view/directory/repository/repository.html',
      1 => 1418139045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51343751354e0c20e735fd6-10978437',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'listactivity' => 0,
    'activity' => 0,
    'data' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54e0c20e806d43_21756582',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e0c20e806d43_21756582')) {function content_54e0c20e806d43_21756582($_smarty_tpl) {?><script type="text/javascript">
	function AreAnyCheckboxesChecked () {
	  if ($("#Form2 input:checkbox:checked").length > 0)
		{
		    $("#btn-dis").removeAttr("disabled");
		}
		else
		{
		   $('#btn-dis').attr("disabled","disabled");
		}
	}
</script>
<div id="content-header">
	<h1>Repository</h1>
</div> <!-- #content-header -->	

<div id="content-container">

	<div class="row">

		<div class="col-md-12">

			<div class="portlet">

				<div class="portlet-header">

					<h3>
						<i class="fa fa-table"></i>
						Repository List
					</h3>

				</div> <!-- /.portlet-header -->

				<div class="portlet-content">						

					<div class="table-responsive">

					<form action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
direktori/imagedel" method=POST name="checks" ID="Form2" onsubmit="return confirm('Yakin ingin menghapus file?');">
                    
					<a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
direktori/addfiles"><button type="button" class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Tambah File</button></a>

					<button type="submit" class="btn btn-primary btn-sm" id="btn-dis" disabled><i class="fa fa-trash-o"></i> Delete</button>
					
					<select id="artikel" class="btn btn-default btn-sm">
                        <option value="">All</option>
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
					
                    <a class="btn btn-link btn-sm" href="http://localhost/api/admin/direktori/listCategory">
                        <i class="fa fa-file-text"></i> Daftar Kegiatan
                    </a>
                    
					<table 
						class="table table-striped table-bordered table-hover table-highlight table-checkable" 
						data-provide="datatable" 
						data-display-rows="10"
						data-info="true"
						data-paginate="true"
					>
							<thead>
								<tr>
									<th class="checkbox-column">
										<input type="checkbox" class="icheck-input" onchange="return AreAnyCheckboxesChecked();">
									</th>
									<th data-filterable="true" data-sortable="true" >Tipe File</th>
									<th data-filterable="true" data-sortable="true">Nama File</th>
									<th data-filterable="true" data-sortable="true">Nama Kegiatan</th>
                                    <th data-filterable="true" data-sortable="true">Jenis Kegiatan</th>
                                    <th data-filterable="true" data-sortable="true" >Status</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
								<tr>
									<td class="checkbox-column">
										<input type="checkbox" class="icheck-input" name="ids[]" value="<?php echo $_smarty_tpl->tpl_vars['var']->value['id'];?>
" onchange="return AreAnyCheckboxesChecked();" />
									</td>
									<td><?php echo $_smarty_tpl->tpl_vars['var']->value['brief'];?>
</td>
									<td><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
direktori/addfiles/?id=<?php echo $_smarty_tpl->tpl_vars['var']->value['id'];?>
" data-toggle="tooltip" data-placement="right" title="Edit or view <?php echo $_smarty_tpl->tpl_vars['var']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value['title'];?>
</a></td>
                                    
									<td><?php echo $_smarty_tpl->tpl_vars['var']->value['activity']['title'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['var']->value['activity']['content'];?>
</td>
                                    <td style="color:<?php echo $_smarty_tpl->tpl_vars['var']->value['status_color'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value['n_status'];?>
</td>
                                    
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</form>
					</div> <!-- /.table-responsive -->
					

				</div> <!-- /.portlet-content -->

			</div> <!-- /.portlet -->

		

		</div> <!-- /.col -->

	</div> <!-- /.row -->

</div><?php }} ?>
