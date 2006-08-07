<?php /* Smarty version 2.6.11, created on 2006-04-13 14:26:16
         compiled from navigation.tpl */ ?>
<div id="navcontainer">
            <ul id="navlist">
                <li class="home"><a href="index.php">Startseite</a></li>
                <li class="newvideo"><a href="newvideo.php">neues Video</a></li>
            <?php if ($this->_tpl_vars['session']['isAdmin'] == 1): ?>
                <li class="newuser"><a href="newuser.php">neuer User</a></li>
            <?php endif; ?>
                <li class="borrow"><a href="borrow.php">meine Ausleihen</a></li>
                <li class="others"><a href="otherlists.php">Listen von anderen</a></li>
                <li class="config"><a href="config.php">Konfiguration</a></li>
            </ul>
            <div id="badges">
                <a href="http://www.linux.org/"><img src="images/badges/powered_linux.png" /></a>
                <a href="http://www.apache.org/"><img src="images/badges/get_apache.png" /></a><br />
                <a href="http://www.mysql.com/"><img src="images/badges/get_mysql.png" /></a>
                <a href="http://www.php.net/"><img src="images/badges/powered_php.png" /></a><br />
                <a href="http://pear.php.net/"><img src="images/badges/pear_powered.png" /></a>
                <a href="http://smarty.php.net/"><img src="images/badges/powered_smarty.png" /></a><br />
                <a href="#"><img src="images/badges/valid_xhtml.png" /></a>
                <a href="#"><img src="images/badges/valid_css.png" /></a><br />
            </div>
        </div>