<?php

require_once('model/Database.class.php');

function cleanInput($input) {
    $input = trim($input);
    $input = strip_tags($input);
    $input = htmlspecialchars($input, ENT_QUOTES);
    return $input;
}

function getAllEntries() {
    $db =& Database::factory();
    if (DB::isError($db)) {
        return $db;
    }
    $db->setFetchMode(DB_FETCHMODE_ASSOC);

    $sql = "SELECT *
            FROM video
            ORDER BY id DESC"
    ;
            
    $videos =& $db->getAssoc($sql);
    if (DB::isError($videos)) {
        return false;
    }
    return $videos;
}

function getEntriesByUser($user) {
    $db =& Database::factory();
    if (DB::isError($db)) {
        return $db;
    }
    $db->setFetchMode(DB_FETCHMODE_ASSOC);
    
    $sql = "SELECT v.*, vl.id AS listid, vl.title AS listtitle, vl.userid
            FROM video AS v
            LEFT OUTER JOIN video2videolist AS v2l ON v.id = v2l.videoid
            LEFT OUTER JOIN videolist AS vl ON listid = vl.id
            WHERE  userid=" . $_SESSION['userid'];
    ;
    $videos =& $db->getAssoc($sql);
    if (DB::isError($videos)) {
        return false;
    }
    return $videos;
}

function getUserlists() {
    $db =& Database::factory();
    if (DB::isError($db)) {
        return $db;
    }
    $db->setFetchMode(DB_FETCHMODE_ASSOC);
    
    $sql = "SELECT id, title, userid
            FROM videolist"
    ;
    
    $lists = $db->getAssoc($sql);
    if (DB::isError($lists)) {
        return false;
    }
    return $lists;
}

function getEntriesByList($list) {
    $db =& Database::factory();
    if (DB::isError($db)) {
        return $db;
    }
    $list = $db->quoteSmart($list);
    $db->setFetchMode(DB_FETCHMODE_ASSOC);

    $sql = "SELECT v.*
            FROM video AS v
            LEFT OUTER JOIN video2videolist AS v2l ON v.id=v2l.videoid
            WHERE v2l.listid=$list"
    ;
    
    $videos =& $db->getAssoc($sql);
    if (DB::isError($videos)) {
        return false;
    }
    return $videos;
}
function getNewestTwenty() {
    $db =& Database::factory();
    if (DB::isError($db)) {
        return $db;
    }
    $db->setFetchMode(DB_FETCHMODE_ASSOC);

    $sql = "SELECT *
            FROM video
            ORDER BY added DESC
            LIMIT 0, 20"
    ;

    $videos =& $db->getAssoc($sql);
    if (DB::isError($videos)) {
        return false;
    }
    return $videos;
}
function getLatest() {
    $db =& Database::factory();
    if (DB::isError($db)) {
        return $db;
    }
    $db->setFetchMode(DB_FETCHMODE_ASSOC);

    $sql = "SELECT *
            FROM video
            WHERE added > '" . $_SESSION['lastvisit'] . "' " .
           "ORDER BY added DESC"
    ;

    $videos =& $db->getAssoc($sql);
    if (DB::isError($videos)) {
        return false;
    }
    return $videos;
}
function getListOwnerNameByUserid($userid) {
    $db =& Database::factory();
    if (DB::isError($db)) {
        return $db;
    }
    $userid = $db->quoteSmart($userid);
    $db->setFetchMode(DB_FETCHMODE_ASSOC);
    
    $sql = "SELECT username
            FROM user
            WHERE id=$userid"
    ;
    $res =& $db->query($sql);
    if (DB::isError($res)) {
        return false;
    }
    $row =& $res->fetchRow($res);
    return $row['username'];
}
function uploadCover($file) {
    $max_byte_size = 207152;
    $allowed_types = '(jpg|jpeg|gif|png)';
    $uploaddir = 'images/covers/';
    $uploadfile = $uploaddir . basename($file['name']);

    if(is_uploaded_file($file['tmp_name'])) {
        // Gueltige Endung? ($ = Am Ende des Dateinamens) (/i = Grosz- Kleinschreibung nicht beruecksichtigen)
        if(preg_match("/\." . $allowed_types . "$/i", $file['name'])) {
            // Datei auch nicht zu grosz
            if($file['size'] <= $max_byte_size) {
                // Alles OK -> Datei kopieren
                if(!move_uploaded_file($file['tmp_name'], $uploadfile)) {
                    return '';
                }
            } else {
                return '';
            }
        } else {
            return '';
        }
    } else {
        return '';
    }
    return $file['name'];
}

?>
