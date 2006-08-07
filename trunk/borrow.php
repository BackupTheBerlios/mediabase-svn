<?php
session_start();
session_start();
if ($_SESSION['authenticated'] != 1) {
    header('Location: login.php');
}

require_once('model/MySmarty.class.php');

$smarty = new MySmarty();


$page['title'] = 'meine Ausleihen';


$smarty->assign('user', $user);
$smarty->assign('page', $page);
$smarty->assign('session', $_SESSION);
$smarty->display('borrow.tpl');
?>