<?php /* Smarty version Smarty-3.1.15, created on 2015-02-09 18:08:44
         compiled from "view/member/user-member.html" */ ?>
<?php /*%%SmartyHeaderCode:208279756654cedefd8a5f81-14813198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9836c0d8ad547e827773ee368aea32848364e67' => 
    array (
      0 => 'view/member/user-member.html',
      1 => 1423479922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208279756654cedefd8a5f81-14813198',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54cedefd9b4457_09136594',
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
    'var' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cedefd9b4457_09136594')) {function content_54cedefd9b4457_09136594($_smarty_tpl) {?><script type="text/javascript">
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
	<h1>User Member</h1>
</div> <!-- #content-header -->	

<div id="content-container">

	<div class="row">

		<div class="col-md-12">

			<div class="portlet">

				<div class="portlet-header">

					<h3>
						<i class="fa fa-table"></i>
						List Member
					</h3>

				</div> <!-- /.portlet-header -->

				<div class="portlet-content">						

					<div class="table-responsive">

					<form action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
kepakaran/categorydel" method=POST name="checks" ID="Form2" onsubmit="return confirm('Are you sure want to delete?');">
					
					<table 
						class="table table-striped table-bordered table-hover table-highlight table-checkable" 
						data-provide="datatable" 
						data-display-rows="10"
						data-info="true"
						data-paginate="true"
					>
							<thead>
								<tr>
									
									<th data-filterable="true" data-sortable="true" >Name</th>
									<th data-filterable="true" data-sortable="true" >Email</th>
									<th data-filterable="true" data-sortable="true">Pendidikan</th>
									<th data-filterable="true" data-sortable="true">Kepakaran</th>
									<th data-filterable="true" data-sortable="true">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['var'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var']->key => $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->_loop = true;
?>
								<tr>
									
									<td><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
user/detail/?id=<?php echo $_smarty_tpl->tpl_vars['var']->value['id'];?>
" data-toggle="tooltip" data-placement="right" title="Edit or view <?php echo $_smarty_tpl->tpl_vars['var']->value['category_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value['name'];?>
</a></td>
									<td style="color:<?php echo $_smarty_tpl->tpl_vars['var']->value['status_color'];?>
"><?php echo $_smarty_tpl->tpl_vars['var']->value['email'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['var']->value['pendidikan'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['var']->value['kepakaran'];?>
</td>
									<td>
										<?php if ($_smarty_tpl->tpl_vars['var']->value['n_status']==0) {?>Pending<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['var']->value['n_status']==1) {?>Approved<?php }?>
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
