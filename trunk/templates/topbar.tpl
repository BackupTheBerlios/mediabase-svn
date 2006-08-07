<div id="topbar">
        <div id="login">
            Willkommen, {$session.username} <span class="lastvisit">letzter Besuch: {$session.lastvisit}</span> <a class="logout" href="logout.php">[ ausloggen ]</a>
        </div>
        <div id="searchbar">
            <form method="post" action="search.php?str=">
                <label for="search">Suchen:</label>
                <input type="text" id="search" name="search" />
                <input class="go" type="submit" value="GO" />
            </form>
        </div>
    </div>
