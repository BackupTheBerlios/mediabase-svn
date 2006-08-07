<?php
session_start();
session_start();
if ($_SESSION['authenticated'] != 1) {
    header('Location: login.php');
}

require_once('model/MySmarty.class.php');

$smarty = new MySmarty();

$user['username'] = 'admin';
$page['title'] = 'Konfiguration';


$smarty->assign('user', $user);
$smarty->assign('page', $page);
$smarty->assign('session', $_SESSION);
$smarty->display('config.tpl');
?>