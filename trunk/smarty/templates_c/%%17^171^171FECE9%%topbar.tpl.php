<?php /* Smarty version 2.6.11, created on 2006-04-13 14:26:16
         compiled from topbar.tpl */ ?>
<div id="topbar">
        <div id="login">
            Willkommen, <?php echo $this->_tpl_vars['session']['username']; ?>
 <span class="lastvisit">letzter Besuch: <?php echo $this->_tpl_vars['session']['lastvisit']; ?>
</span> <a class="logout" href="logout.php">[ ausloggen ]</a>
        </div>
        <div id="searchbar">
            <form method="post" action="search.php?str=">
                <label for="search">Suchen:</label>
                <input type="text" id="search" name="search" />
                <input class="go" type="submit" value="GO" />
            </form>
        </div>
    </div>