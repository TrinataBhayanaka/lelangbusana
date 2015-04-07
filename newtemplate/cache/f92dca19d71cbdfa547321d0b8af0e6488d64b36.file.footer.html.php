<?php /* Smarty version Smarty-3.1.15, created on 2015-04-05 15:04:35
         compiled from "app/view/template/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:400916135551baaf9679b19-25236715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f92dca19d71cbdfa547321d0b8af0e6488d64b36' => 
    array (
      0 => 'app/view/template/footer.html',
      1 => 1428206265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '400916135551baaf9679b19-25236715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_551baaf9681663_42054093',
  'variables' => 
  array (
    'basedomain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551baaf9681663_42054093')) {function content_551baaf9681663_42054093($_smarty_tpl) {?><div class="footer">
        <div class="container">
                <div class="footer-class">
                <div class="class-footer">
                    <ul>
                        <li ><a href="#" class="scroll">HOME </a><label>|</label></li>
                        <li><a href="#" class="scroll">Batik</a><label>|</label></li>
                        <li><a href="#" class="scroll">Busana</a><label>|</label></li>
                        <li><a href="#" class="scroll">Gamis</a><label>|</label></li>
                    </ul>
                    <p class="footer-grid">&copy; 2014 lelangbusana.com</p>
                </div>   
                <div class="footer-left">
                    <a href="index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/images/logo1.png" alt=" " ></a>
                </div> 
                <div class="clearfix"> </div>
                </div>
         </div>
    </div>
</body>
</html>


<script type="text/javascript">

        $(window).load(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            
        });

    
    </script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
assets/js/jquery.flexisel.js"></script>

<script type="application/x-javascript"> 

    addEventListener("load", function() {
        setTimeout(hideURLbar, 0); 
    }, false); 

    function hideURLbar(){ window.scrollTo(0,1); } 


</script>

<?php }} ?>
