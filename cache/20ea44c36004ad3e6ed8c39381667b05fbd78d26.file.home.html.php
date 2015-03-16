<?php /* Smarty version Smarty-3.1.15, created on 2015-03-16 12:37:58
         compiled from "app/view/home.html" */ ?>
<?php /*%%SmartyHeaderCode:15862275555066c36943c89-97554206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20ea44c36004ad3e6ed8c39381667b05fbd78d26' => 
    array (
      0 => 'app/view/home.html',
      1 => 1423479760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15862275555066c36943c89-97554206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'berita' => 0,
    'basedomain' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_55066c369f1d33_01509828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55066c369f1d33_01509828')) {function content_55066c369f1d33_01509828($_smarty_tpl) {?><div class="col-md-8">
    <h3 class="text-center">BORANG ANGGOTA<br>ASOSIASI PROFESOR INDONESIA (API)</h3>
    <p class="text-right">Jakarta, 1 Oktober 2014</p>
    <p>Hal: Kesediaan Menjadi Anggota API</p>
    <p>Kepada yth.<br>Sejawat Profesor Perguruan Tinggi<br>Di Indonesia</p>
    <p>Melalui laman API ini, kami lampirkan borang yang perlu diisi untuk menjadi anggota API. Undangan ini kami sampaikan kepada semua Sejawat, para profesor di Universitas/Institut/Perguruan Tinggi di seluruh Indonesia, baik swasta maupun negri, yang aktif maupun yang sudah tidak aktif.</p>
    <p>Dengan adanya isian ini di dalam laman API, para mahasiswa, calon mahasiswa, guru-guru, orangtua, lembaga terkait, pengguna dan semua pihak yang memerlukan kepakaran kita, yang memerlukan tulisan dan berbagai hal yang mencerahkannya, dari tanah air maupun dari manca Negara, dapat terbantu.</p>
    <p>Semoga dengan kehadiran aktif para Sejawat sebagai anggota API, kita dapat mencapai tujuan API untuk “1. Membantu mewujudkan Perguruan Tinggi yang berkualitas; 2. Mendorong Tridarma Perguruan Tinggi; 3. Memperjuangkan harkat dan martabat Guru Besar termasuk    kesejahteraannya; 4. Menjembatani kerjasama antara Perguruan Tinggi dan Pemerintah untuk menyelesaikan masalah bangsa; dan 5. Mengoptimalkan peran Perguruan Tinggi untuk membantu program pembangunan pemerintah dan meningkatkan kesejahteraan masyarakat.”</p>
    <p>Sambil menunggu dukungan dan kerja sama Sejawat, kami sampaikan terima kasih.</p>
    <p>Dengan salam dan hormat,<br><br></p>
    <p>Pengurus Pusat API.</p><br><br>
    <p>NB: Borang yang sudah diisi dapat diunggah ke email milis Pengurus.  </p>
    
    <div class="row latest_news">
        <div class="col-md-12">
        <h3>Berita Terbaru</h3>  
        <?php if ($_smarty_tpl->tpl_vars['berita']->value) {?>
            <div class="row">
            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['berita']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
                <div class="col-md-4 latest_news">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/berita_detail/?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
public_assets/news/<?php echo $_smarty_tpl->tpl_vars['val']->value['image'];?>
" class="img-responsive">
                    </a>
                    <div class="time-ago"><a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/berita_detail/?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['val']->value['changeDate'];?>
</a></div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['basedomain']->value;?>
news/berita_detail/?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a>
                </div>
            <?php } ?>
            </div>
        <?php }?>
            
            </div>
    </div>
    
</div>

</div>

</div>

</div><?php }} ?>
