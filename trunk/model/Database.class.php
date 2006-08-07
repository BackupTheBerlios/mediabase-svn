<?php

require_once(dirname(__FILE__)."/../configs/config.inc.php");
require_once 'DB.php';

/**
 * Klasse Database
 * mediadb spezifische Pear-DB-Klasse
 *
 * @package mediadb.Model
 * @author Ismail BAY <ismailbay@inode.at>
 * @version $Id: Database.class.php,v 0.1 2006/02/16 15:25:56 ismailbay Exp $
 */

class Database {

    /**
     * Funktion factory()
     * Erzeugt eine Verbindung zu Datenbank
     * Singleton-Concept, factory method, fuer mehr Info --> http://de.wikipedia.org/wiki/Einzelst%C3%BCck_%28Entwurfsmuster%29
     *
     * @return Pear::DB-Objekt
     */
	function factory() {
        global $config;
        $dsn = array(
    			'phptype'  => $config["db_type"],
    			'username' => $config["db_user"],
    			'password' => $config["db_pass"],
    			'hostspec' => $config["db_host"],
    			'database' => $config["db_name"],
		);

		$options = array(
    			'debug'       => 2,
    			'portability' => DB_PORTABILITY_ALL,
		);

		$db =& DB::connect($dsn, $options);
		if (DB::isError($db)) {
			echo $db->getMessage();
        }
        
        return $db;
	}
}
?>
