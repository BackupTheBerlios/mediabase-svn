<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Developer configuration file
 *
 * Developer configuration file for Ismail BAY <ismailbay@inode.at>
 * to include this file set Env-Variable 'DEVELOPER_ID' in your Apache's httpd.conf to 'ismail'
 *
 * PHP version 4
 *
 * LICENSE: This source file is subject to version 3.0 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_0.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   Configuration
 * @package    MedibaseConfig
 * @author     Ismail BAY <ismailbay@inode.at>
 * @copyright  2006-2006 Ismail BAY
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    SVN: $Id:$
 * @link       http://mediabase.berlios.de
 */

    /**
     * APP_MODE
     * Application mode, which can be one of 'development', 'live', 'maintenance', 'debug'
     */
    if (!defined('APP_MODE')) {
        define ('APP_MODE', 'DEVELOPMENT');
    }
    
    /**
     * APP_LOG
     * Logging, set true to display smarty debug console, an application built-in debug log
     */
    if (!defined('APP_LOG')) {
        define ('APP_LOG', 1);
    }
    
    /**
     * OPERATING_SYSTEM
     * necessary to perform os-specific operations
     */
    if (!defined('OPERATING_SYSTEM')) {
        define ('OPERATING_SYSTEM', 'windows');
    }
    
    /**
     * EMAIL_ADMIN
     * email address of administrator
     */
    if (!defined('EMAIL_ADMIN')) {
        define ('EMAIL_ADMIN', 'ismailbay@inode.at');
    }
    
    /**
     * EMAIL_SEND_NOTIFICATION
     * set true, if you want to receive notifications to EMAIL_ADMIN on application errors
     */
    if (!defined('EMAIL_SEND_NOTIFICATION')) {
        define ('EMAIL_SEND_NOTIFICATION', 1);
    }

// ---------------------    
// D I R E C T O R I E S
// ---------------------

    /**
     * where the base application files are located
     */
    if (!defined('CAMPAIGN_DIR')) {
        define ('CAMPAIGN_DIR', dirname(realpath('../index.php')));
    }
    
    /**
     * directory of application, this can differ from CAMPAIGN_DIR
     */
    if (!defined('APP_DIR')) {
        define ('APP_DIR', CAMPAIGN_DIR.'/mediabase');
    }
    
    /**
     * model directory
     */
    if (!defined('DIR_MODEL')) {
        define ('DIR_MODEL', APP_DIR.'/modules');
    }
    
    /**
     * controller directory
     */
    if (!defined('DIR_CONTROLLER')) {
        define ('DIR_CONTROLLER', APP_DIR.'/controller');
    }
    
    /**
     * wizards directory
     */
    if (!defined('DIR_WIZARDS')) {
        define ('DIR_WIZARDS', APP_DIR.'/wizards');
    }
    
    /**
     * libraries directory
     */
    if (!defined('DIR_LIBRARIES')) {
        define ('DIR_LIBRARIES', APP_DIR.'/libraries');
    }
    
    /**
     * languages directory
     */
    if (!defined('DIR_LANGUAGES')) {
        define ('DIR_LANGUAGES', APP_DIR.'/languages');
    }
    
    /**
     * templates directory
     */
    if (!defined('DIR_TEMPLATES')) {
        define ('DIR_TEMPLATES', APP_DIR.'/templates');
    }
    
    /**
     * app_log directory, you be writable
     */
    if (!defined('DIR_APP_LOG')) {
        define ('DIR_APP_LOG', APP_DIR.'/applog');
    }
    
    /**
     * download directory for files like user's loan list, etc.
     */
    if (!defined('DIR_DOWNLOAD')) {
        define ('DIR_DOWNLOAD', APP_DIR.'/downloads');
    }
    
    /**
     * upload directory for covers, ...
     */
    if (!defined('DIR_UPLOAD')) {
        define ('DIR_UPLOAD', APP_DIR.'/uploads');
    }
    
    /**
     * static directory, which contains images, js, css, ads, htmls, ...
     */
    if (!defined('DIR_STATIC')) {
        define ('DIR_STATIC', APP_DIR.'/static');
    }
    
    /**
     * images directory
     */
    if (!defined('DIR_IMAGES')) {
        define ('DIR_IMAGES', DIR_STATIC.'/images');
    }
    
    /**
     * CSS (Cascading Style Sheets) directory
     */
    if (!defined('DIR_CSS')) {
        define ('DIR_CSS', DIR_STATIC.'/css');
    }
    
    /**
     * js directory
     */
    if (!defined('DIR_JS')) {
        define ('DIR_JS', DIR_STATIC.'/js');
    }
    
    /**
     * ads directory
     */
    if (!defined('DIR_ADS')) {
        define ('DIR_ADS', DIR_STATIC.'/ads');
    }
    
    /**
     * static html directory (like maintenance page)
     */
    if (!defined('DIR_HTML')) {
        define ('DIR_HTML', DIR_STATIC.'/html');
    }
        
    /**
     * smarty directory
     */
    if (!defined('DIR_SMARTY')) {
        define ('DIR_SMARTY', APP_DIR.'/Smarty');
    }
    
    /**
     * smarty config directory
     */
    if (!defined('DIR_SMARTY_CONFIG')) {
        define ('DIR_SMARTY_CONFIG', APP_DIR.'/config');
    }
    
    /**
     * smarty compile directory, e.g. same compile dir for all apps
     */
    if (!defined('DIR_SMARTY_COMPILE')) {
        define ('DIR_SMARTY_COMPILE', CAMPAIGN_DIR.'/cached_files/smarty_compile');
    }
    
    /**
     * smarty cache directory, e.g. same cache dir for all apps
     */
    if (!defined('DIR_SMARTY_CACHE')) {
        define ('DIR_SMARTY_CACHE', CAMPAIGN_DIR.'/cached_files/smarty_cache');
    }
    
    
// -----------------------------------
// P E A R _ M D B 2   S E T T I N G S
// -----------------------------------


    /**
     * database type
     */
    if (!defined('DB_TYPE')) {
        define ('DB_TYPE', 'mysql');
    }
    
    /**
     * database host
     */
    if (!defined('DB_HOST')) {
        define ('DB_HOST', 'localhost');
    }
    
    /**
     * database user
     */
    if (!defined('DB_USER')) {
        define ('DB_USER', 'root');
    }
    
    /**
     * database password
     */
    if (!defined('DB_PASS')) {
        define ('DB_PASS', 'ismail');
    }
    
    /**
     * database name
     */
    if (!defined('DB_NAME')) {
        define ('DB_NAME', 'mediabase');
    }
    

    error_reporting (E_ALL & ~E_NOTICE);

        

?>