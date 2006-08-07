<?php
session_start();
session_start();
if ($_SESSION['authenticated'] != 1) {
    header('Location: login.php');
}

require_once('model/MySmarty.class.php');
require_once('generalfunctions.php');

$smarty = new MySmarty();

$page['title'] = 'Listen von anderen Benutzern';

if (isset($_GET['id'])) {
    $videos = getEntriesByList($_GET['id']);
    $foundRows = count($videos);
    $page['title'] = getListOwnerNameByUserid($_GET['id']) . "'s Liste";
    $smarty->assign('videos', $videos);
} else {
    $lists = getUserlists();
    $foundRows = count($lists);
    $smarty->assign('lists', $lists);
}

$smarty->assign('foundRows', $foundRows);
$smarty->assign('user', $user);
$smarty->assign('page', $page);
$smarty->assign('session', $_SESSION);
$smarty->display('otherlists.tpl');
?>
