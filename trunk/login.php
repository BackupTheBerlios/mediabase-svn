<?php
session_start();

require_once('model/Database.class.php');
require_once('model/MySmarty.class.php');

$smarty = new MySmarty();

function authenticate() {
    $db = Database::factory();
    if (DB::isError($db)) {
        return $db;
    }
    $sql = "SELECT *
            FROM user
            WHERE username='" . $_POST["username"] . "'"
    ;
    $res =& $db->query($sql);
    if (DB::isError($res)) {
        return false;
    }
    $row =& $res->fetchRow(DB_FETCHMODE_ASSOC);
    if ($row['password'] == md5($_POST['password'])) {
        $_SESSION['authenticated'] = 1;
        $_SESSION['userid']    = $row['id'];
        $_SESSION['username']  = $row['username'];
        $_SESSION['lastvisit'] = $row['lastvisit'];
        if ($row['isadmin'] == 1) {
            $_SESSION['isAdmin'] = 1;
        }
        if ($row['ismoderator'] == 1) {
            $_SESSION['isModerator'] = 1;
        }
        return true;
    }
    return false;
}
function updateLastvisit($userid) {
    $db =& Database::factory();
    if (DB::isError($db)) {
        return $db;
    }
    $userid = $db->quoteSmart($userid);
    
    $sql = "UPDATE user " .
           "SET lastvisit='" . date('Y-m-d H:i:s') . "' " .
           "WHERE id=$userid"
    ;
    $res =& $db->query($sql);
    if (DB::isError($res)) {
        die('FEHLER');
    }
}

if (isset($_POST['submit'])) {
    if (true === authenticate()) {
        updateLastvisit($_SESSION['userid']);
        header('Location: index.php');
        exit;
    } else {
        $error = true;
        $message = 'Benutzername oder Passwort falsch';
    }
}
$page['title'] = 'Login';

$smarty->assign('error', $error);
$smarty->assign('message', $message);
$smarty->assign('page', $page);
$smarty->display('login.tpl');
?>

