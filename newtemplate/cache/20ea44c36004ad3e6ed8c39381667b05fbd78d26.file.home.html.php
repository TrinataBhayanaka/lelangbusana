<?php /* Smarty version Smarty-3.1.15, created on 2015-04-05 15:04:35
         compiled from "app/view/home.html" */ ?>
<?php /*%%SmartyHeaderCode:651081253551bab75b9a6d5-47799625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20ea44c36004ad3e6ed8c39381667b05fbd78d26' => 
    array (
      0 => 'app/view/home.html',
      1 => 1428206454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '651081253551bab75b9a6d5-47799625',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_551bab75bd8051_80366675',
  'variables' => 
  array (
    'basedomain' => 0,
    'topcontent' => 0,
    'produk' => 0,
    'val' => 0,
    'slider' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551bab75bd8051_80366675')) {function content_551bab75bd8051_80366675($_smarty_tpl) {?>
        <div class="container">
        <div class="women-in">
            <div class="col-md-9 col-d">

                <a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
paket/detail/?id=<?php echo $_smarty_tpl->tpl_vars['topcontent']->value['id'];?>
"><img class="img-responsive pic-in" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
public_assets/<?php echo $_smarty_tpl->tpl_vars['topcontent']->value['image'];?>
" alt=" " ></a>
                
                <!---->
                <div class="in-line">
                    <div class="para-an">
                        <h3>PRODUK TERBARU</h3>
                        <p>Check our all latest products in this section.</p>
                    </div>
                    <div class="lady-in">
                        <?php if ($_smarty_tpl->tpl_vars['produk']->value) {?>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produk']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                        <div class="col-md-4 you-para">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
paket/detail/?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img class="img-responsive pic-in" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
public_assets/<?php echo $_smarty_tpl->tpl_vars['val']->value['image'];?>
" alt=" " ></a>
                            
                            <p><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</p>
                            
                        </div>
                        <?php } ?>
                        <?php }?>
                        
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-m-left">

                <?php if ($_smarty_tpl->tpl_vars['produk']->value) {?>

                <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                
                    <?php if ($_smarty_tpl->tpl_vars['k']->value==0) {?><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
paket/detail/?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img class="img-responsive pic-in" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
public_assets/<?php echo $_smarty_tpl->tpl_vars['val']->value['image'];?>
" alt=" " ></a>
                    <?php } else { ?>
                    <div class="discount">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
paket/detail/?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img class="img-responsive pic-in" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
public_assets/<?php echo $_smarty_tpl->tpl_vars['val']->value['image'];?>
" alt=" " >  </a>        
                        <a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
paket/detail/?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" class="know-more">know more</a>
                    </div>
                    <?php }?>
                <?php } ?>
                <?php }?>
                
                
            </div>
            <div class="clearfix"> </div>
            </div>
            <!---->
                  
            <?php echo $_smarty_tpl->getSubTemplate ("paket/more-paket.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
        
        </div>
    </div>
<?php }} ?>
