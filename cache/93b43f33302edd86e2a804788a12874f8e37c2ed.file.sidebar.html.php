<?php /* Smarty version Smarty-3.1.15, created on 2015-03-16 12:37:58
         compiled from "app/view/template/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:60783873355066c36b2cce7-15863931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93b43f33302edd86e2a804788a12874f8e37c2ed' => 
    array (
      0 => 'app/view/template/sidebar.html',
      1 => 1424420865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60783873355066c36b2cce7-15863931',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'kliping_index' => 0,
    'val' => 0,
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55066c36b5ea81_00549671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55066c36b5ea81_00549671')) {function content_55066c36b5ea81_00549671($_smarty_tpl) {?><div class="container api-content">        
    <div class="row">
        <div class="col-md-4">

          <!-- calendar - START -->
          <div class="row">
            <div class="col-md-12">
              <div class="api-calendar">
                <h4 class="title text-center">Agenda</h4>
                <div class="calendar"></div>
                <div class="endCalendar"></div>
              </div>
            </div>
          </div>
          <!-- calendar - END -->
        
          <?php if ($_smarty_tpl->tpl_vars['page']->value['function']!="agenda") {?>
          <div class="row">
            <div class="col-md-12">
              <div class="api-kliping-side">
                  <h4 class="text-center">Kliping Kegiatan</h4>
                  <?php if ($_smarty_tpl->tpl_vars['kliping_index']->value) {?>
                    <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kliping_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                  <div class="kegiatan">
                      <p class="date"><?php echo $_smarty_tpl->tpl_vars['val']->value['changeDate'];?>
</p>
                      <a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/kliping_detail/?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a>
                  </div>
                    <?php } ?>
                  <?php }?>
                  
                  <div class="kegiatan all text-center">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/kliping_kegiatan" style="color: #212121;">Semua Kegiatan</a>
                  </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="api-kliping-side">
                  <h4 class="text-center">Video</h4>
                  <div class="kegiatan">
                      <a href="#">TOKOH KITA: MENGENAL LEBIH DEKAT PROF. SUHARDI - JAKTV</a>
                      <div class="embed-responsive embed-responsive-4by3">
                        <iframe src="https://www.youtube.com/embed/x0YAneuTUAM" frameborder="0" allowfullscreen></iframe>
                      </div>
                  </div>
                  
                  <div class="kegiatan all text-center">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
gallery/video" style="color: #212121;">Semua Video</a>
                  </div>
              </div>
            </div>
          </div>
          <?php }?>
        
        </div><?php }} ?>
