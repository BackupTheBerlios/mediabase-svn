249
a:4:{s:8:"template";a:6:{s:12:"newvideo.tpl";b:1;s:14:"pageheader.tpl";b:1;s:10:"topbar.tpl";b:1;s:8:"logo.tpl";b:1;s:14:"navigation.tpl";b:1;s:10:"footer.tpl";b:1;}s:9:"timestamp";i:1141935516;s:7:"expires";i:1141939116;s:13:"cache_serials";a:0:{}}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <title>Mediabase &raquo; neues Video eingeben</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Ismail Cihat BAY" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="all" />
    
    <link rel="stylesheet" type="text/css" href="styles/main.css" />
</head>
<body>
<div id="container">
    
    <div id="topbar">
        <div id="login">
            Willkommen, admin
        </div>
        <div id="searchbar">
            <form method="post" action="index.html">
                <label for="search">Suchen:</label>
                <input type="text" id="search" name="search" />
                <input class="go" type="submit" value="GO" />
            </form>
        </div>
    </div>
    <div id="sitemast">
        <div id="logo">
            <a href="index.php" title="Mediabase - Startpage"><img src="images/logo.jpg" /></a>
        </div>
    </div>
     
    <div id="main"> 
        <div id="navcontainer">
            <ul id="navlist">
                <li class="home"><a href="index.php">Startseite</a></li>
                <li class="newvideo"><a href="newvideo.php">neues Video</a></li>
                <li class="newuser"><a href="newuser.php">neuer User</a></li>
                <li class="borrow"><a href="borrow.php">meine Ausleihen</a></li>
                <li class="others"><a href="otherlists.php">Listen von anderen</a></li>
                <li class="config"><a href="config.php">Konfiguration</a></li>
            </ul>
            <div id="badges">
                <img src="images/badges/powered_linux.png" /><img src="images/badges/get_apache.png" /><br />
                <img src="images/badges/get_mysql.png" /><img src="images/badges/powered_php.png" /><br />
                <img src="images/badges/get_firefox.png" /><img src="images/badges/powered_smarty.png" /><br />
                <img src="images/badges/valid_xhtml.png" /><img src="images/badges/valid_css.png" /><br />
            </div>
        </div>        
        <div id="content">
            <h1>Neues Video:</h1>
            <form id="newform" method="post" action="newvideo.php">
            
                        <p class="info"> 
                Die mit Sternchen gekennzeichneten Felder m&uuml;ssen ausgef&uuml;llt werden.
            </p>
                        <div class="inputrow">
                <p class="label"><label for="title">Title: <span class="asterisk">*</span></label></p>
                <input type="text" id="title" name="title" value="" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="subtitle">Subtitle:</label></p>
                <input type="text" id="subtitle" name="subtitle" value="" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="language">Sprache:</label></p>
                <select id="language" name="language">
                    <option selected>Deutsch</option>
                    <option>Englisch</option>
                    <option>Englisch/Deutsch</option>
                    <option>T&uuml;rkisch</option>
                    <option>andere Sprache</option>
                </select>
            </div>
           
            <div class="inputrow">
                <p class="label"><label for="runtime">Laufzeit (min):</label></p>
                <input type="text" id="runtime" name="runtime" value="" /><span class="tip">Eingabe nur in Minuten</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="country">Produktionsland:</label></p>
                <input type="text" id="country" name="country" value="" /><span class="tip">USA, Deutschland, Canada, etc.</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="year">Produktionsjahr:</label></p>
                <input type="text" id="year" name="year" value="" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="director">Regisseur:</label></p>
                <input type="text" id="director" name="director" value="" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="cast">Schauspieler:</label></p>
                <input type="text" id="cast" name="cast" value="" /><span class="tip">Schauspieler kommagetrennt eingeben</span>
            </div>
            
                        <div class="inputrow">
                <p class="label"><label for="diskid">Auf Disk Nr.: <span class="asterisk">*</span></label></p>
                <input type="text" id="diskid" name="diskid" value="" />
            </div>
            
            <p class="info"> 
                Folgende Felder dienen der Organisation. Falls Daten bekannt, bitte ausf&uuml;llen!
            </p>
            
            <div class="inputrow">
                <p class="label"><label for="plot">Kurze Beschreibung (Plot):</label></p>
                <textarea id="plot" name="plot"></textarea>
            </div>
            
                        <div class="inputrow">
                <p class="label"><label for="comment">Kommentar:</label></p>
                <textarea id="comment" name="comment"></textarea>
            </div>
                        
            <div class="inputrow">
                <p class="label"><label for="filename">Dateiname:</label></p>
                <input type="text" id="filename" name="filename" value="" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="filesize">Dateigr&ouml;&szlig;e (MB):</label></p>
                <input type="text" id="filesize" name="filesize" value="" /><span class="tip">Eingabe nur in Megabytes</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="audiocodec">Audiocodec:</label></p>
                <input type="text" id="audiocodec" name="audiocodec" value="" /><span class="tip">z.B. AC3, AAC, usw.</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="videocodec">Videocodec:</label></p>
                <input type="text" id="videocodec" name="videocodec" value="" /><span class="tip">z.B. DivX/Xvid, Mp4, usw.</span>
            </div>
            
            <div class="buttons">
                <input class="reset" type="reset" name="reset" value="Zur&uuml;cksetzen" />
                <input class="submit" type="submit" name="submit" value="Speichern" />
            </div>
            </form>
        </div>
    </div>
    <div id="footer">
        This program is under GPL. You may copy, distribute and modify it.
    </div>
</div>
</body>
</html>