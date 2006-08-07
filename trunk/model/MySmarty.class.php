<?php

require_once(dirname(__FILE__).'/../configs/config.inc.php');
require_once(SMARTY_DIR.'Smarty.class.php');



class MySmarty extends Smarty {

    function MySmarty() {
        $this->template_dir = SMARTY_TEMPLATE_DIR;
        $this->compile_dir  = SMARTY_COMPILE_DIR;
        $this->cache_dir    = SMARTY_CACHE_DIR;
        $this->config_dir   = SMARTY_CONFIG_DIR;
    }
}

