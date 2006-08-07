<?php
session_start();
if ($_SESSION['authenticated'] != 1) {
    header('Location: login.php');
}


require_once('model/MySmarty.class.php');
require_once('generalfunctions.php');
$smarty = new MySmarty();



if ($_GET['action'] == 'listallentries') {
    $videos = getAllEntries();
    $foundRows = count($videos);
    $smarty->assign('videos', $videos);
}
if ($_GET['action'] == 'listnewest') {
    $videos = getNewestTwenty();
    $foundRows = count($videos);
    $smarty->assign('videos', $videos);
}
if ($_GET['action'] == 'listlatest') {
    $videos = getLatest();
    $foundRows = count($videos);
    $smarty->assign('videos', $videos);
}

$page['title'] = 'Startseite';


$smarty->assign('user', $user);
$smarty->assign('foundRows', $foundRows);
$smarty->assign('session', $_SESSION);
$smarty->assign('page', $page);
$smarty->display('startpage.tpl');
?>
