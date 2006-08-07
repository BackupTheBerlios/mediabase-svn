<?php

require_once(dirname(__FILE__).'/../configs/config.inc.php');
require_once('Database.class.php');
//require_once('Video.class.php');

class User {
    var $id;
    var $username;
    var $password;
    var $email;
    var $isAdmin;
    var $isModerator;
    var $isOnline;
    var $lastvisit;
    // User configs
    var $language;
    var $filter;
    var $template;
    var $thumbnail;

    function User() {
        global $config;
        $this->id = 0;
        $this->username = "";
        $this->password = "";
        $this->email = "";
        $this->isAdmin = 0;
        $this->isModerator = 0;
        $this->isOnline = 0;
        $this->lastvisit = date("Y-m-d H:i:s");
        $this->language = $config['defaultlanguage'];
        $this->filter = $config['defaultfilter'];
        $this->template = $config['defaulttemplate'];
        $this->thumbnail = $config['defaultthumbnail'];
    }

    function save() {
        $db = Database::factory();
        if (DB::isError($db)) {
            return $db;
        }

        $sql = "INSERT INTO user (username, password, email, isAdmin, isModerator,
                                  isOnline, lastvisit, language, filter, template, thumbnail) " .
               "VALUES ('" . $this->getUsername()    . "', '" .
                             $this->getPassword()    . "', '" .
                             $this->getEmail()       . "', "  .
                             $this->isAdmin          . ", "   .
                             $this->isModerator      . ", "   .
                             $this->isOnline         . ", '"  .
                             $this->lastvisit        . "', '" .
                             $this->getLanguage()    . "', '" .
                             $this->getFilter()      . "', '" .
                             $this->getTemplate()    . "', "  .
                             $this->getThumbnail()   . ")"
        ;

        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die($res->getMessage() . "<br /><pre>$sql</pre>");
        }
        return true;
    }
    
    function createUserlist() {
        $db = Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        
        $user = $this->loadByUsername($this->getUsername());
        $userid = $this->getId();
        
        $sql = "INSERT INTO videolist (title, userid) " .
               "VALUES ('" . $this->getUsername() . "´s Liste', " .
                        $userid . ")"
        ;
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die($res->getMessage() . "<br /><pre>$sql</pre>");
        }
        return true;
    }
                
    function loadById($id) {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $db->setFetchMode(DB_FETCHMODE_ASSOC);
        $id = $db->quoteSmart($id);

        $sql = "SELECT *
                FROM user
                WHERE id=$id"
        ;
        //echo "<pre>$sql</pre>";
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die($res->getMessage() . "<br /><pre>$sql</pre>");
        }

        $row =& $res->fetchRow();

        $this->setId($row['id']);
        $this->setUsername($row['username']);
        $this->setPassword($row['password']);
        $this->setEmail($row['email']);
        $this->setLanguage($row['language']);
        $this->setFilter($row['filter']);
        $this->setTemplate($row['template']);
        $this->setThumbnail($row['thumbnail']);
    }
    
    function loadByUsername($username) {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $db->setFetchMode(DB_FETCHMODE_ASSOC);
        $username = $db->quoteSmart($username);
        
        $sql = "SELECT *
                FROM user
                WHERE username=$username"
        ;
        //echo "<pre>$sql</pre>";
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die($res->getMessage() . "<br /><pre>$sql</pre>");
        }
        
        $row =& $res->fetchRow();
        
        $this->setId($row['id']);
        $this->setUsername($row['username']);
        $this->setPassword($row['password']);
        $this->setEmail($row['email']);
        $this->setLanguage($row['language']);
        $this->setFilter($row['filter']);
        $this->setTemplate($row['template']);
        $this->setThumbnail($row['thumbnail']);
    }
    
    function setVideoAsSeen($videoid) {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $videoid = $db->quoteSmart($videoid);
        
        $sql = "INSERT INTO userseen (videoid, userid)
                VALUES (" . $this->getId() . "," . $videoid . ")"
        ;
        
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die($res->getMessage() . "<br /><pre>$sql</pre>");
        }
        return true;
    }

    function editById($id) {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $id = $db->quoteSmart($id);
        
        $sql = "UPDATE user SET" .
                     "username = '" . $this->getUsername()  . "', ".
                     "password = '" . $this->getPassword()  . "', ".
                     "email='"      . $this->getEmail()     . "', ".
                     "language='"   . $this->getLanguage()  . "', ".
                     "filter='"     . $this->getFilter()    . "', ".
                     "template='"   . $this->getTemplate()  . "', ".
                     "thumbnail="   . $this->getThumbnail() . " "  .
               "WHERE id=$id"
        ;
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die($res->getMessage() . "<br /><pre>$sql</pre>");
        }
        return true;
    }
    function deleteById($id) {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $id = $db->quoteSmart($id);

        $sql = "DELETE
                FROM user
                WHERE id=$id"
        ;
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die($res->getMessage() . "<br /><pre>$sql</pre>");
        }
        return true;
    }
/*
    function getNextId() {
        $db = Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $db->setFetchMode(DB_FETCHMODE_ASSOC();

        $sql = "SELECT id
                FROM userdata
                WHERE
        $nextId =& $db->nextId("userdata");
        if (DB::isError($nextId)) {
            die($nextId->getMessage() . "<br />Fatal error in method Userdata::getNextId");
        }

        return $nextId;
    }
*/
    function setAdmin($bool = 1) {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $bool = $db->quoteSmart($bool);

        $sql = "UPDATE user
                SET isAdmin=$bool
                WHERE id=" . $this->getId()
        ;
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die ($res->getMessage() . "<br /> Operation fehlgeschlagen!<br />
                                       <pre>$sql</pre>"
            );
        }
        return true;
    }
    function setModerator($bool = 1) {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $bool = $db->quoteSmart($bool);

        $sql = "UPDATE user
                SET isModerator=$bool
                WHERE id=" . $this->getId()
        ;
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die ($res->getMessage() . "<br /> Operation fehlgeschlagen!<br />
                                       <pre>$sql</pre>"
            );
        }
        return true;
    }
    function setOnline($bool = 1) {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $bool = $db->quoteSmart($bool);

        $sql = "UPDATE user
                SET isOnline=$bool
                WHERE id=" . $this->getId()
        ;
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die ($res->getMessage() . "<br /> Operation fehlgeschlagen!<br />
                                       <pre>$sql</pre>"
            );
        }
        return true;
    }

    function isAdmin() {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $db->setFetchMode(DB_FETCHMODE_ASSOC);

        $sql = "
                SELECT isAdmin
                FROM user
                WHERE id=" . $this->getId()
        ;
        echo "<pre>$sql</pre>";
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die ($res->getMessage() . "<br /><pre>$sql</pre>");
        }
        
        $row =& $res->fetchRow();
        $res->free();
        
        if ($row['isadmin'] == 0) {
            return false;
        }
        return true;
    }
    function isModerator() {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $db->setFetchMode(DB_FETCHMODE_ASSOC);

        $sql = "SELECT isModerator
                FROM user
                WHERE id=" . $this->getId()
        ;
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die ($res->getMessage() . "<br /> Operation fehlgeschlagen!<br />
                                       <pre>$sql</pre>"
            );
        }
        $row =& $res->fetchRow();
        $res->free();

        if ($row['ismoderator'] == 0) {
            return false;
        }
        return true;
    }
    function isOnline() {
        $db =& Database::factory();
        if (DB::isError($db)) {
            return $db;
        }
        $db->setFetchMode(DB_FETCHMODE_ASSOC);

        $sql = "SELECT isOnline
                FROM user
                WHERE id=" . $this->getId()
        ;
        $res =& $db->query($sql);
        if (DB::isError($res)) {
            die ($res->getMessage() . "<br /> Operation fehlgeschlagen!<br />
                                       <pre>$sql</pre>"
            );
        }
        $row =& $res->fetchRow();
        $res->free();

        if ($row['isonline'] == 0) {
            return false;
        }
        return true;
    }
    
    function setId($id) {
        $this->id = $id;
    }
    function getId() {
        return $this->id;
    }
    function setUsername($username) {
        $this->username = $username;
    }
    function getUsername() {
        return $this->username;
    }
    function setPassword($password) {
        $this->password = $password;
    }
    function getPassword() {
        return $this->password;
    }
    function setEmail($email) {
        $this->email = $email;
    }
    function getEmail() {
        return $this->email;
    }
    function setLastvisit($lastvisit) {
        $this->lastvisit = $lastvisit;
    }
    function getLastvisit() {
        return $this->lastvisit;
    }
    function setLanguage($language) {
        $this->language = $language;
    }
    function getLanguage() {
        return $this->language;
    }
    function setFilter($filter) {
        $this->filter = $filter;
    }
    function getFilter() {
        return $this->filter;
    }
    function setTemplate($template) {
        $this->template = $template;
    }
    function getTemplate() {
        return $this->template;
    }
    function setThumbnail($thumbnail) {
        $this->thumbnail = $thumbnail;
    }
    function getThumbnail() {
        return $this->thumbnail;
    }
}
