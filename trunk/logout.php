<?php
session_start();

require_once('model/MySmarty.class.php');

$smarty = new MySmarty();

if (isset($_POST['submit'])) {
    session_destroy();
    header ('Location: login.php');
}
$page['title'] = 'Logout';


$smarty->assign('message', $message);
$smarty->assign('page', $page);
$smarty->display('logout.tpl');
?>

