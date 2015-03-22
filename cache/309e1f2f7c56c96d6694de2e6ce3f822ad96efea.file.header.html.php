<?php /* Smarty version Smarty-3.1.15, created on 2015-03-18 07:35:01
         compiled from "app/view/template/header.html" */ ?>
<?php /*%%SmartyHeaderCode:119193434355066c36a96a91-35689625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '309e1f2f7c56c96d6694de2e6ce3f822ad96efea' => 
    array (
      0 => 'app/view/template/header.html',
      1 => 1426635297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119193434355066c36a96a91-35689625',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55066c36b1a6e3_20316440',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55066c36b1a6e3_20316440')) {function content_55066c36b1a6e3_20316440($_smarty_tpl) {?><!-- Fixed navbar -->
<!-- Modal -->
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#26211C;color:#FFF">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel">Form Login</h3>
      </div>
      <div class="modal-body">
       <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Email</label>
            <input type="text" class="form-control" id="recipient-name" placeholder="type your email">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Password</label>
            <input type="password" class="form-control" id="recipient-name" placeholder="type your password">
          </div>
          <ol class="breadcrumb">
            <li><a href="#">Forgot Password</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
home/register">Sign Up(Daftar)</a></li>
          </ol>
        </form>
      </div>
      <div class="modal-footer" style="background-color:#26211C;">
        <button type="button" class="btn" data-dismiss="modal" style="background-color:#E8E8E8">Close</button>
        <input type="submit" class="btn" Value="Login" style="background-color:#F18947;color:#FFF">
      </div>
    </div>
  </div>
</div>
    <nav class="navbar navbar-default navbar-fixed-top lelangnav">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color:#fff">Lelang Busana</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        
            <ul class="nav navbar-nav navbar-right">
            
            <li class="loginactive"><a href="#" style="color:#fff" data-toggle="modal" data-target="#myModal">LOGIN</a></li>
          </ul>
        </div><!--/.nav-collapse -->
        </div>
    </nav><?php }} ?>
