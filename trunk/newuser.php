<?php
session_start();
if ($_SESSION['authenticated'] != 1) {
    header('Location: login.php');
}

require_once('model/MySmarty.class.php');
require_once('model/User.class.php');


if ($_SESSION['isAdmin'] != 1) {
    $smarty = new MySmarty();
    $smarty->display('nopermission.tpl');
    exit;
}


$smarty = new MySmarty();

function cleanInput($input) {
    $input = trim($input);
    $input = htmlspecialchars($input, ENT_QUOTES);
    return $input;
}
if (isset($_POST['submit'])) {

    if ($_POST['username'] == '') {
        $inputerror['username'] = 1;
        $error = true;
    }
    if ($_POST['password1'] == '') {
        $inputerror['password1'] = 1;
        $error = true;
    }
    if ($_POST['password2'] == '') {
        $inputerror['password2'] = 1;
        $error = true;
    }
    if (($_POST['password1'] != '') && ($_POST['password2'] != '')) {
        if ($_POST['password1'] != $_POST['password2']) {
            $inputerror['passworddismatch'] = 1;
            $error = true;
        }
    }
    if ($_POST['email'] == '') {
        $inputerror['email'] = 1;
        $error = true;
    }
    if ($error != true) {
        $userdata = new User();
        $userdata->setUsername(cleanInput($_POST['username']));
        $userdata->setPassword(md5($_POST['password1']));
        $userdata->setEmail(cleanInput($_POST['email']));
        
        switch ($_POST['language']) {
            case 'Tuerkisch':
                $userdata->setLanguage('tue');
                break;
            case 'Deutsch':
                $userdata->setLanguage('deu');
                break;
            case 'Englisch':
                $userdata->setLanguage('eng');
                break;
            default:
                $userdata->setLanguage('deu');
                break;
        }

        $userdata->setFilter('unseen');
        $userdata->setTemplate('orange::compact');
        $userdata->setThumbnail(1);
        $userdata->setLastvisit(date('Y-m-d h:i:s'));
        
        if ($userdata->save()) {
            if ($userdata->createUserlist()) {
                $success = true;
                unset($_POST);
            }
        }
    }
}

$page['title'] = 'neuen Benutzer anlegen';

$smarty->assign('inputerror', $inputerror);
$smarty->assign('success', $success);
$smarty->assign('session', $_SESSION);
$smarty->assign('page', $page);
$smarty->assign('post', $_POST);
$smarty->display('newuser.tpl');
?>
