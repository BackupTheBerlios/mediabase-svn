<?php
session_start();
if ($_SESSION['authenticated'] != 1) {
    header('Location: login.php');
}

require_once('generalfunctions.php');
require_once('model/MySmarty.class.php');
require_once('model/Video.class.php');

$smarty = new MySmarty();


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
    
        $video = new Video();

        $imageurl = uploadCover($_FILES['imageurl']);        
        ($imageurl == '') ? $video->setCover('no_cover.jpg') : $video->setCover($imageurl);

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
        
        $video->setAdded(date('Y-m-d h:i:s'));
        
        if ($video->save()) {
            $db = Database::factory();
            if (DB::isError($db)) {
                return false;
            }
            $db->setFetchMode(DB_FETCHMODE_ASSOC);
            // selektiere die id der Liste, die mit diesem User verknuepft ist
            $sql = "SELECT id
                    FROM videolist
                    WHERE userid=" . $_SESSION['userid']
            ;
            $res =& $db->query($sql);
            if (DB::isError($res)) {
                return false;
            }
            $row =& $res->fetchRow();
            $videolistid = $row['id'];
            
            // selektiere die id dieses Video, groesste id ist fuer dieses Video
            // Video wurde schon in der if-Abfrage gespeichert
            $sql = "SELECT MAX(id) AS id
                    FROM video"
            ;
            $res =& $db->query($sql);
            if (DB::isError($res)) {
                return false;
            }
            $row =& $res->fetchRow();
            $videoid = $row['id'];
            
            // verknuepft das Video mit der Userliste
            $sql = "INSERT INTO video2videolist(videoid, listid)
                    VALUES($videoid, $videolistid)"
            ;
            $res =& $db->query($sql);
            if (DB::isError($res)) {
                return false;
            }
            
            $success = true;
            unset($_POST);
        } else {
            $error = true;
        }
    }
}

$page['title'] = 'neues Video einf&uuml;gen';

$smarty->assign('inputerror', $inputerror);
$smarty->assign('success', $success);
$smarty->assign('error', $error);
$smarty->assign('session', $_SESSION);
$smarty->assign('page', $page);
$smarty->assign('post', $_POST);
$smarty->display('newvideo.tpl');
?>
