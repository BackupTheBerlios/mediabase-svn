<?php
session_start();
if ($_SESSION['authenticated'] != 1) {
    header('Location: login.php');
}
if ($_GET['id'] == '') {
    header('Location: index.php');
}

require_once('model/MySmarty.class.php');
require_once('generalfunctions.php');
require_once('model/Video.class.php');

$smarty = new MySmarty();

$video = new Video();
$video->loadById($_GET['id']);

$smarty->assign('id', $video->getId());
$smarty->assign('title', $video->getTitle());
$smarty->assign('subtitle', $video->getSubtitle());
$smarty->assign('runtime', $video->getRuntime());
$smarty->assign('country', $video->getCountry());
$smarty->assign('year', $video->getYear());
$smarty->assign('plot', nl2br($video->getPlot()));
$smarty->assign('comment', nl2br($video->getComment()));
$smarty->assign('rating', $video->getRating());
$smarty->assign('added', $video->getAdded());
$smarty->assign('director', $video->getDirector());
$smarty->assign('cast', $video->getCast());
$smarty->assign('cover', $video->getCover());
$smarty->assign('language', $video->getLanguage());
$smarty->assign('diskid', $video->getDiskid());
$smarty->assign('filename', $video->getFilename());
$smarty->assign('filesize', $video->getFilesize());
$smarty->assign('audiocodec', $video->getAudiocodec());
$smarty->assign('videocodec', $video->getVideocodec());
$smarty->assign('session', $_SESSION);
$smarty->display('videodetail.tpl');
?>
