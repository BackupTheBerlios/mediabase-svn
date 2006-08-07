<?php

/**
 * Config Datei
 * Diese Datei enthaelt benutzerspezifische und globale Variablen
 *
 * @package mediabase.Config
 * @author Ismail BAY <ismailbay@inode.at>
 * @version $Id: config.inc.php,v 0.1 2006/02/16 15:25:56 ismailbay Exp $
 */


// Pear::DB variables
$config['db_type'] = 'mysql';
$config['db_host'] = 'localhost';
$config['db_user'] = 'v155034';
$config['db_pass'] = 'sk0k9jmv';
$config['db_name'] = 'v155034';


// default user Variablen
$config['defaultlanguage'] = 'de';
$config['defaulttemplate'] = 'orange::compact';
$config['defaultfilter']   = 'unseen';  // noch nicht gesehene Filme
$config['defaultthumbnail']= 1;

// Konstanten
define('MEDIABASE_DIR', '/www/htdocs/v155034/mediabase2/');
define('SMARTY_DIR', '/www/htdocs/v155034/Smarty/');
define('SMARTY_TEMPLATE_DIR', MEDIABASE_DIR.'templates');
define('SMARTY_COMPILE_DIR', MEDIABASE_DIR.'smarty/templates_c');
define('SMARTY_CACHE_DIR', MEDIABASE_DIR.'smarty/cache');
define('SMARTY_CONFIG_DIR', MEDIABASE_DIR.'configs');

?>
