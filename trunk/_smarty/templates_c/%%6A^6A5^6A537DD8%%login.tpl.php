<?php /* Smarty version 2.6.11, created on 2006-04-13 14:26:16
         compiled from login.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Mediabase &raquo; <?php echo $this->_tpl_vars['page']['title']; ?>
</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Ismail Cihat BAY" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="all" />

    <link rel="stylesheet" type="text/css" href="styles/main.css" />
    <link rel="stylesheet" type="text/css" href="styles/login.css" />
</head>
<body>
<div id="container">

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "logo.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
    <div id="main">

            <h1>Mediabase login:</h1>
            <form id="newform" method="post" action="login.php">
            <p class="info">
                Dies ist eine Demoinstallation von Mediabase,<br /> Username: admin, Password: admin
            </p>
            <div class="inputrow">
                <p class="label"><label for="username">Benutzername:</label></p>
                <input type="text" id="username" name="username" value="<?php echo $this->_tpl_vars['post']['username']; ?>
" />
            </div>
            <div class="inputrow">
                <p class="label"><label for="password">Passwort:</label></p>
                <input type="password" id="password" name="password" />
            </div>

            <?php if ($this->_tpl_vars['error'] == true): ?>
            <p class="error">
                <?php echo $this->_tpl_vars['message']; ?>

            </p>
            <?php endif; ?>
            <div class="buttons">
                <input class="submit" type="submit" name="submit" value="Login" />
            </div>
            
            </form>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>