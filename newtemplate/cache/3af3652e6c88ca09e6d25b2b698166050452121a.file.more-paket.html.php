<?php /* Smarty version Smarty-3.1.15, created on 2015-04-05 15:04:35
         compiled from "app/view/paket/more-paket.html" */ ?>
<?php /*%%SmartyHeaderCode:493509493551bac32cfe9a4-26601925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af3652e6c88ca09e6d25b2b698166050452121a' => 
    array (
      0 => 'app/view/paket/more-paket.html',
      1 => 1428206454,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '493509493551bac32cfe9a4-26601925',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_551bac32d0f6d9_12073204',
  'variables' => 
  array (
    'otherproduct' => 0,
    'basedomain' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551bac32d0f6d9_12073204')) {function content_551bac32d0f6d9_12073204($_smarty_tpl) {?>
    
    <!---->
    <div class="lady-in-on">
        <div class="buy-an">
            <h3>PRODUK LAIN</h3>
            <p>Check our all latest products in this section.</p>
        </div>
        <ul id="flexiselDemo1">    
            <?php if ($_smarty_tpl->tpl_vars['otherproduct']->value) {?> 
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['otherproduct']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>    
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
paket/detail/?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><img class="img-responsive women" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
public_assets/<?php echo $_smarty_tpl->tpl_vars['val']->value['image'];?>
" alt=""></a>
            <div class="hide-in">
            <p><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</p>
            <?php } ?>
            <?php }?>
            
            </div></li>

            
        </ul>
                
    </div>

<?php }} ?>
