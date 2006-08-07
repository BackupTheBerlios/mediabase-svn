<?php /* Smarty version 2.6.11, created on 2006-04-13 14:26:25
         compiled from videodetail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'videodetail.tpl', 9, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pageheader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "logo.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div id="main">

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "navigation.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <div id="content">
            <h1><?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
:</h1>
                <div id="cover"><img src="images/covers/<?php echo $this->_tpl_vars['cover']; ?>
" /></div>
                <div id="diskid">
                    <span class="disk">auf DISK<br /></span><?php echo $this->_tpl_vars['diskid']; ?>
<br />
                </div>
                <div id="links">
                    <a class="borrow" href="borrow.php?add=<?php echo $this->_tpl_vars['id']; ?>
">Video auf meine Ausleiheliste setzen -</a><br />
                    <a class="copyvideo" href="videodetail.php?action=copy&video=<?php echo $this->_tpl_vars['id']; ?>
&user=<?php echo $this->_tpl_vars['session']['userid']; ?>
">Video auf meine Liste kopieren -</a><br />
                    <a class="edit" href="editvideo.php?id=<?php echo $this->_tpl_vars['id']; ?>
">Video editieren -</a><br />
                    <a class="delete" href="deletevideo.php?id=<?php echo $this->_tpl_vars['id']; ?>
">Video l&ouml;schen -</a><br />
                </div>
                <div class="clear"></div>
                <table id="detail" cellspacing="0">
                    <tr>
                        <td class="left">Titel:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall'));  if ($this->_tpl_vars['subtitle'] != ''): ?> - <?php echo ((is_array($_tmp=$this->_tpl_vars['subtitle'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall'));  endif; ?></td>
                    </tr>
                    <tr>
                        <td class="left">Sprache</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['language'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
</td>
                    </tr>
                    <tr>
                        <td class="left">Laufzeit:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['runtime'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
 Minuten</td>
                    </tr>
                    <tr>
                        <td class="left">Regisseur</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['director'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
</td>
                    </tr>
                    <tr>
                        <td class="left">Schauspieler:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['cast'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
 </td>
                    </tr>
                    <tr>
                        <td class="left">Produktionsland:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['country'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
</td>
                    </tr>
                    <tr>
                        <td class="left">Produktionsjahr:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['year'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
</td>
                    </tr>
                    <tr>
                        <td class="left">Plot:</td><td><?php echo $this->_tpl_vars['plot']; ?>
</td>
                    </tr>
                    <tr>
                        <td class="left">Kommentar:</td><td><?php echo $this->_tpl_vars['comment']; ?>
</td>
                    </tr>
                    <tr>
                        <td class="left">Dateiname:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['filename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
</td>
                    </tr>
                    <tr>
                        <td class="left">Dateigr&ouml;&szlig;e</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['filesize'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
 MB</td>
                    </tr>
                    <tr>
                        <td class="left">Audiocodec:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['audiocodec'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
</td>
                    </tr>
                    <tr>
                        <td class="left">Videocodec:</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['videocodec'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
</td>
                    </tr>
                </table>
            
        </div>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>