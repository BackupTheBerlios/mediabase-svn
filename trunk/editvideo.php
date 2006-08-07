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

if (isset($_POST['submit'])) {
    if ($_POST['title'] == '') {
        $inputerror['title'] = 1;
        $error = true;
    }
    if ($_POST['diskid'] == '') {
        $inputerror['diskid'] = 1;
        $error = true;
    }
    if ($error != true) {

        if (isset($_FILES['imageurl'])) {
            $imageurl = uploadCover($_FILES['imageurl']);
            ($imageurl == '') ? $video->setCover('no_cover.jpg') : $video->setCover($imageurl);
        }

        $video->setTitle(cleanInput($_POST['title']));
        $video->setSubtitle(cleanInput($_POST['subtitle']));
        $video->setLanguage(cleanInput($_POST['language']));
        $video->setRuntime(cleanInput($_POST['runtime']));
        $video->setCountry(cleanInput($_POST['country']));
        $video->setYear(cleanInput($_POST['year']));
        $video->setDirector(cleanInput($_POST['director']));
        $video->setCast(cleanInput($_POST['cast']));
        $video->setDiskid(cleanInput($_POST['diskid']));
        $video->setPlot(cleanInput($_POST['plot']));
        $video->setComment(cleanInput($_POST['comment']));
        $video->setFilename(cleanInput($_POST['filename']));
        $video->setFilesize(cleanInput($_POST['filesize']));
        $video->setRating(cleanInput($_POST['rating']));
        $video->setAudiocodec(cleanInput($_POST['audiocodec']));
        $video->setVideocodec(cleanInput($_POST['videocodec']));
        
        if ($video->editById($_GET['id'])) {
            $success = true;
            unset($_POST);
        } else {
            $error = true;
        }
    }
}

$smarty->assign('id', $video->getId());
$smarty->assign('title', $video->getTitle());
$smarty->assign('subtitle', $video->getSubtitle());
$smarty->assign('runtime', $video->getRuntime());
$smarty->assign('country', $video->getCountry());
$smarty->assign('year', $video->getYear());
$smarty->assign('plot', $video->getPlot());
$smarty->assign('comment', $video->getComment());
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

$smarty->assign('success', $success);
$smarty->assign('error', $error);

$smarty->display('editvideo.tpl');
?>
