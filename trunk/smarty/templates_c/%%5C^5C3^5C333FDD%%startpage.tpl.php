<?php /* Smarty version 2.6.11, created on 2006-04-13 14:26:16
         compiled from startpage.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'startpage.tpl', 27, false),)), $this); ?>
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
            <?php  $counter = 0  ?>
            
            <h1>Index:</h1>
            
            <?php if ($this->_tpl_vars['videos'] == ''): ?>
            <a href="index.php?action=listallentries">zeige alles</a><br />
            <a href="index.php?action=listnewest">zeige die neuesten 20 </a><br />
            <a href="index.php?action=listlatest">zeige seit meinem letzten Besuch eingef&uuml;gte Eintr&auml;ge</a>
            <?php else: ?>
            <h2>Gefundene Datens&auml;tze: <?php echo $this->_tpl_vars['foundRows']; ?>
</h2>
            <?php $_from = $this->_tpl_vars['videos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['vid'] => $this->_tpl_vars['video']):
?>
            <?php 
                $counter++;
                $remainder = $counter % 2;
                $class = ($remainder == 0) ? 'light' : 'dark';
             ?>
            <div class="<?php  echo $class; ?>">
                <a class="entry" href="videodetail.php?id=<?php echo $this->_tpl_vars['vid']; ?>
">
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['video']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
, <?php echo $this->_tpl_vars['video']['year']; ?>

                </a>
            </div>
            <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            
        </div>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>