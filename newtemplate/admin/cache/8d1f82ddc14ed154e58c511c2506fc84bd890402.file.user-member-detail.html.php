<?php /* Smarty version Smarty-3.1.15, created on 2015-02-09 18:57:11
         compiled from "view/member/user-member-detail.html" */ ?>
<?php /*%%SmartyHeaderCode:89921963354d89719739a18-33400539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d1f82ddc14ed154e58c511c2506fc84bd890402' => 
    array (
      0 => 'view/member/user-member-detail.html',
      1 => 1423483029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89921963354d89719739a18-33400539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_54d89719762f18_27751809',
  'variables' => 
  array (
    'basedomain' => 0,
    'data' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d89719762f18_27751809')) {function content_54d89719762f18_27751809($_smarty_tpl) {?><script>
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
	<h1>Member Detail</h1>
</div> <!-- #content-header -->	

<div id="content-container">
	<form id="validate-enhanced" class="form parsley-form" method="post" action="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
kepakaran/categoryinp" enctype="multipart/form-data">

		<div class="row">
			<div class="col-md-12">
				<div class="portlet">
				
					<div class="portlet-header">

						<h3>
							<i class="fa fa-tasks"></i>
							Member
						</h3>

					</div> <!-- /.portlet-header -->
				
					<div class="portlet-content">
						
						<div class="col-sm-6">
							<div class="form-group">
							<label for="text-input">Nama</label>
									<input type="text" name="category_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
" data-required="true"/>
							</div>
							<div class="form-group">
							<label for="text-input">NIP</label>
									<input type="text" name="category_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['nip'];?>
" data-required="true"/>
							</div>
							<div class="form-group">
							<label for="text-input">Email</label>
									<input type="text" name="category_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" data-required="true"/>
							</div>
							<div class="form-group">
							<label for="text-input">Alamat</label>
									<input type="text" name="category_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['StreetName'];?>
" data-required="true"/>
							</div>
						</div>	
						<div class="col-sm-6">
							<div class="form-group">
							<label for="text-input">Pendidikan</label>
									<input type="text" name="category_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['pendidikan'];?>
" data-required="true"/>
							</div>
							<div class="form-group">
							<label for="text-input">Kepakaran</label>
									<input type="text" name="category_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['kepakaran'];?>
" data-required="true"/>
							</div>
							<div class="form-group">
							<label for="text-input">Alamat Kantor</label>
									<input type="text" name="category_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['alamatKantor'];?>
" data-required="true"/>
							</div>
							<div class="form-group">
							<label for="text-input">Tlp Kantor</label>
									<input type="text" name="category_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tlpKantor'];?>
" data-required="true"/>
							</div>
						</div>

						<div class="col-sm-12">
							
							<?php if ($_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']) {?>
							<div class="stepReg">
					    		<h3 class="text-center">Mata Kuliah yang Diampu</h3>

					    		<form id="register-form" action="" class="form" method="post">
					                <div class="row"> 
					                    <div class="form-group col-xs-3">
					                    	<label>Tahun</label>
					                    	<?php if ($_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']) {?>
						                    	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
						                    		<?php if ($_smarty_tpl->tpl_vars['val']->value['type']==0) {?>
						                    		<input type="text" class="form-control" placeholder="Tahun" name="tahun_1[]" style="margin-bottom: 10px;" onkeypress="validateNumber(this)" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['tahun'];?>
">
						                    		<?php }?>
						                    	<?php } ?>
					                        <?php }?>
					                    </div>

					                    <div class="form-group col-xs-5">
					                    	<label>Mata Kuliah</label>
					                    	<?php if ($_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']) {?>
						                    	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
						                    		<?php if ($_smarty_tpl->tpl_vars['val']->value['type']==0) {?>
					                    			<input type="text" class="form-control" placeholder="Nama Mata Kuliah" name="judul_1[]" style="margin-bottom: 10px;" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['judul'];?>
">
					                        		<?php }?>
						                    	<?php } ?>
					                        <?php }?>
					                    </div>
					                    <div class="form-group col-xs-4">
					                    	<label>Keterangan</label>
					                    	<?php if ($_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']) {?>
						                    	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
						                    		<?php if ($_smarty_tpl->tpl_vars['val']->value['type']==0) {?>
					                    			<input type="text" class="form-control" placeholder="Keterangan" name="keterangan_1[]" style="margin-bottom: 10px;" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['keterangan'];?>
">
					                        		<?php }?>
						                    	<?php } ?>
					                        <?php }?>
					                    </div>
					                </div>
					        </div>

					        <div class="stepReg">
					            <h3>Publikasi (Penelitian/Buku/Artikel/Karya Seni/Paten)</h3>
					            <div class="row"> 
					                <div class="form-group col-xs-3">
					                	<label>Tahun</label>
					                	<?php if ($_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']) {?>
					                    	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
					                    		<?php if ($_smarty_tpl->tpl_vars['val']->value['type']==1) {?>
					                			<input type="text" class="form-control" placeholder="Tahun" name="tahun_2[]" style="margin-bottom: 10px;" onkeypress="validateNumber(this)" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['tahun'];?>
">
				                    			<?php }?>
					                    	<?php } ?>
				                        <?php }?>
					                </div>

					                <div class="form-group col-xs-5">
					                	<label>Judul</label>
					                	<?php if ($_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']) {?>
					                    	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
					                    		<?php if ($_smarty_tpl->tpl_vars['val']->value['type']==1) {?>
					                			<input type="text" class="form-control" placeholder="Judul" name="judul_2[]" style="margin-bottom: 10px;" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['judul'];?>
">
					                    		<?php }?>
					                    	<?php } ?>
				                        <?php }?>
					                </div>
					                <div class="form-group col-xs-4">
					                	<label>Keterangan</label>
					                	<?php if ($_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']) {?>
					                    	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
					                    		<?php if ($_smarty_tpl->tpl_vars['val']->value['type']==1) {?>
					                			<input type="text" class="form-control" placeholder="Keterangan" name="keterangan_2[]" style="margin-bottom: 10px;" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['keterangan'];?>
">
					                    		<?php }?>
					                    	<?php } ?>
				                        <?php }?>
					                </div>
					            </div>
					        </div>
					            
					             
					        <div class="stepReg">
					            <h3>Riwayat Pekerjaan (Lima Tahun Terakhir)</h3>


					            <div class="row"> 
					                <div class="form-group col-xs-3">
					                	<label>Tahun</label>
					                	<?php if ($_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']) {?>
					                    	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
					                    		<?php if ($_smarty_tpl->tpl_vars['val']->value['type']==2) {?>
					                			<input type="text" class="form-control" placeholder="Tahun" name="tahun_3[]" style="margin-bottom: 10px;" onkeypress="validateNumber(this)" maxlength="4" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['tahun'];?>
">
					                    		<?php }?>
					                    	<?php } ?>
				                        <?php }?>
					                </div>

					                <div class="form-group col-xs-5">
					                	<label>Institusi</label>
					                	<?php if ($_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']) {?>
					                    	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
					                    		<?php if ($_smarty_tpl->tpl_vars['val']->value['type']==2) {?>
					                			<input type="text" class="form-control" placeholder="Institusi" name="judul_3[]" style="margin-bottom: 10px;" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['judul'];?>
">
					                    		<?php }?>
					                    	<?php } ?>
				                        <?php }?>
					                </div>
					                <div class="form-group col-xs-4">
					                	<label>Jabatan</label>
					                	<?php if ($_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']) {?>
					                    	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['riwayat_pendidikan']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
					                    		<?php if ($_smarty_tpl->tpl_vars['val']->value['type']==2) {?>
					                			<input type="text" class="form-control" placeholder="Jabatan" name="keterangan_3[]" style="margin-bottom: 10px;" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['keterangan'];?>
">
					                    		<?php }?>
					                    	<?php } ?>
				                        <?php }?>
					                </div>
					            </div>
					        </div>  
					        <?php }?>
					        <div class="stepReg">
					            <h3>Keunggulan dan Keberhasilan</h3>


					            <div class="row"> 
					                <div class="col-md-12">
					                    <div class="form-group" style="margin-bottom: 20px;">
					                        <label for="register-keunggulan">Keunggulan atau keberhasilan</label>
					                        <textarea type="text" class="form-control" id="register-keunggulan" placeholder="Keunggulan atau keberhasilan yang pernah dicapai (ruang tulisan dapat diperluas)" name="keberhasilan"><?php echo $_smarty_tpl->tpl_vars['data']->value['keberhasilan'];?>
</textarea>
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
</div><?php }} ?>
