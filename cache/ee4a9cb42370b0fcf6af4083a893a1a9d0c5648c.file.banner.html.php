<?php /* Smarty version Smarty-3.1.15, created on 2015-03-16 12:37:58
         compiled from "app/view/template/banner.html" */ ?>
<?php /*%%SmartyHeaderCode:19943692355066c36b218d4-73075892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee4a9cb42370b0fcf6af4083a893a1a9d0c5648c' => 
    array (
      0 => 'app/view/template/banner.html',
      1 => 1423479760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19943692355066c36b218d4-73075892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55066c36b27c24_85257717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55066c36b27c24_85257717')) {function content_55066c36b27c24_85257717($_smarty_tpl) {?><div class="container" style="max-width: 930px;">  
  <div id="carousel-home" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
public_assets/banner/1.jpg" class="img-responsive" />
        <div class="carousel-caption">
          Asosiasi Profesor Indonesia
        </div>
      </div>
      <div class="item">
        <img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
public_assets/banner/2.jpg" class="img-responsive" />
        <div class="carousel-caption">
          Asosiasi Profesor Indonesia
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div><?php }} ?>
