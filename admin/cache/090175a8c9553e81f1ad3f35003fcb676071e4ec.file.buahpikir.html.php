<?php /* Smarty version Smarty-3.1.15, created on 2015-02-15 22:58:21
         compiled from "view/directory/buahPikir/buahpikir.html" */ ?>
<?php /*%%SmartyHeaderCode:171874725054e0c21d5c94a5-83366013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '090175a8c9553e81f1ad3f35003fcb676071e4ec' => 
    array (
      0 => 'view/directory/buahPikir/buahpikir.html',
      1 => 1421936514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171874725054e0c21d5c94a5-83366013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54e0c21d653282_16148210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54e0c21d653282_16148210')) {function content_54e0c21d653282_16148210($_smarty_tpl) {?><script type="text/javascript">
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
	<h1>Buah Pikir</h1>
</div> <!-- #content-header -->	

<div id="content-container">

	<div class="row">

		<div class="col-md-12">

			<div class="portlet">

				<div class="portlet-header">

					<h3>
						<i class="fa fa-table"></i>
						List Buah Pikir
					</h3>

				</div> <!-- /.portlet-header -->

				<div class="portlet-content">						

					<div class="table-responsive">

					<form action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
direktori/direktoridel" method=POST name="checks" ID="Form2" onsubmit="return confirm('Yakin ingin menghapus Data?');">

					<a class="btn btn-default btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
direktori/adddirektori/?page=6"><i class="fa fa-plus"></i> Tambah Artikel</a>

					<button type="submit" class="btn btn-primary btn-sm" id="btn-dis" disabled><i class="fa fa-trash-o"></i> Delete</button>
                   
                    <a class="btn btn-link btn-sm" href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
direktori/trash/?page=6"><i class="fa fa-trash-o"></i> Lihat Trash</a>
					<input type="hidden" name="categoryid" value="6" />
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
									<th data-filterable="true" data-sortable="true" >Judul</th>
									<th data-filterable="true" data-sortable="true" >Status</th>
									<th data-filterable="true" data-sortable="true">Tanggal Buat</th>
									<th data-filterable="true" data-sortable="true">Author</th>
                                    <th data-filterable="false">Jenis Artikel</th>
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
									<td><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
direktori/adddirektori/?page=6&id=<?php echo $_smarty_tpl->tpl_vars['var']->value['id'];?>
" data-toggle="tooltip" data-placement="right" title="Edit or view <?php echo $_smarty_tpl->tpl_vars['var']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value['title'];?>
</a></td>
									<td style="color:<?php echo $_smarty_tpl->tpl_vars['var']->value['status_color'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value['n_status'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['var']->value['posted_date'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['var']->value['username'];?>
</td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['var']->value['articleType']=='1') {?>
                                            Berita
                                        <?php } elseif ($_smarty_tpl->tpl_vars['var']->value['articleType']=='2') {?>
                                            Kliping Kegiatan
                                        <?php }?>
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

</div>
<script>
$(document).ready(function() {
    $('.table').dataTable().fnSetColumnVis( 5, false );
    $('.form-control:last').parent().remove();
} );
</script><?php }} ?>
