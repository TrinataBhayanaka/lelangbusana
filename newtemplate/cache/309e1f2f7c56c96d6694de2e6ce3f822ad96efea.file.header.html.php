<?php /* Smarty version Smarty-3.1.15, created on 2015-04-05 15:04:35
         compiled from "app/view/template/header.html" */ ?>
<?php /*%%SmartyHeaderCode:748738685551baaf9663b03-61350267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '309e1f2f7c56c96d6694de2e6ce3f822ad96efea' => 
    array (
      0 => 'app/view/template/header.html',
      1 => 1428206265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '748738685551baaf9663b03-61350267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_551baaf9672fb6_72982581',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551baaf9672fb6_72982581')) {function content_551baaf9672fb6_72982581($_smarty_tpl) {?>
 <script>
        

        $(document).on('click','.menu', function(){

          $(".top-nav ul").slideToggle(500, function(){
            });
        })


          $("span.menu").click(function(){
            // alert('ada');
            // $(".top-nav ul").slideToggle(500, function(){
            // });
          });

          function blur()
          {
            if (this.value == '') {this.value = '';}
          }

        
        </script>
<!--header-->
    <div class="header">
    <div class="header-top">
      <div class="container">
        <div class="header-grid">
          <ul>
            <li><a href="#" class="scroll">Form Perjanjian</a></li>
            
            <li><a href="#" class="scroll">Ketentuan</a></li>           
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
kontak" class="scroll">Kontak  </a></li>
          </ul>
        </div>
        <div class="header-grid-right">
          <a href="#" class="sign-in">Login</a>
          <form>
            <input type="text" value="Email" onfocus="this.value='';" onblur="blur()">
            <input type="text" value="Password" onfocus="this.value='';" onblur="blur()">
            <input type="submit" value="Go" >
          </form>
          <label>|</label>
          <a href="signup.html" class="sign-up">Register</a>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    <div class="container">
    <div class="header-bottom">     
        <div class="logo">
          <a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/img/logo-lelangbusana.png" alt=" " width="100px" height="100px"></a>
        </div>
          <div class="ad-right">
          
        </div>
        <div class="clearfix"> </div>
      </div>  
      <div class="header-bottom-bottom">
        <div class="top-nav">
          <span class="menu"> </span>
          <ul>
            <li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
">HOME </a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
paket/batik" >Batik</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
paket/busana" >Busana</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
paket/gamis" >Gamis</a></li>
            
          </ul> 
       
          
          <div class="clearfix"> </div>         
        </div>
        <div class="search">
          <form>
            <input type="text" value="Cari" onfocus="this.value = '';" onblur="blur()" >
            <input type="submit"  value="">
          </form>
        </div>
        <div class="clearfix"> </div>
        </div>
    </div>
  </div><?php }} ?>
