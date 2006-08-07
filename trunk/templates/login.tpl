<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Mediabase &raquo; {$page.title}</title>
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

{include file="logo.tpl"}
    
    <div id="main">

            <h1>Mediabase login:</h1>
            <form id="newform" method="post" action="login.php">
            <p class="info">
                Dies ist eine Demoinstallation von Mediabase,<br /> Username: admin, Password: admin
            </p>
            <div class="inputrow">
                <p class="label"><label for="username">Benutzername:</label></p>
                <input type="text" id="username" name="username" value="{$post.username}" />
            </div>
            <div class="inputrow">
                <p class="label"><label for="password">Passwort:</label></p>
                <input type="password" id="password" name="password" />
            </div>

            {if $error == true}
            <p class="error">
                {$message}
            </p>
            {/if}
            <div class="buttons">
                <input class="submit" type="submit" name="submit" value="Login" />
            </div>
            
            </form>
    </div>
    {include file="footer.tpl"}
