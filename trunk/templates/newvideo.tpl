{include file="pageheader.tpl"}
{include file="topbar.tpl"}
{include file="logo.tpl"} 
    <div id="main"> 
        {include file="navigation.tpl"}
        
        <div id="content">
            <h1>Neues Video:</h1>
            <form enctype="multipart/form-data" id="newform" method="post" action="newvideo.php">
            
            {if $success == true}
            <p class="success"> 
                Ihre Eingaben wurden erfolgreich gespeichert. Sie k&ouml;nnen mit Anlegen weiterer Videos fortfahren.
            </p>
            {/if}
            {if $error == true}
            <p class="error">
                Ihre Eingaben konnten nicht gespeichert werden. Ein unbekannter Fehler ist aufgetreten.
            </p>
            {/if}
            <p class="info"> 
                Die mit Sternchen gekennzeichneten Felder m&uuml;ssen ausgef&uuml;llt werden.
            </p>
            {if $inputerror.title == 1}
            <p class="error">
                Folgendes Feld muss ausgef&uuml;llt werden.
            </p>
            {/if}
            <div class="inputrow">
                <p class="label"><label for="title">Title: <span class="asterisk">*</span></label></p>
                <input type="text" id="title" name="title" value="{$post.title}" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="subtitle">Subtitle:</label></p>
                <input type="text" id="subtitle" name="subtitle" value="{$post.subtitle}" />
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
                <input type="text" id="runtime" name="runtime" value="{$post.runtime}" /><span class="tip">Eingabe nur in Minuten</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="country">Produktionsland:</label></p>
                <input type="text" id="country" name="country" value="{$post.country}" /><span class="tip">USA, Deutschland, Canada, etc.</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="year">Produktionsjahr:</label></p>
                <input type="text" id="year" name="year" value="{$post.year}" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="director">Regisseur:</label></p>
                <input type="text" id="director" name="director" value="{$post.director}" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="cast">Schauspieler:</label></p>
                <input type="text" id="cast" name="cast" value="{$post.cast}" /><span class="tip">Schauspieler kommagetrennt eingeben</span>
            </div>
            
            {if $inputerror.diskid == 1}
            <p class="error">
                Folgendes Feld muss ausgef&uuml;llt werden.
            </p>
            {/if}
            <div class="inputrow">
                <p class="label"><label for="diskid">Auf Disk Nr.: <span class="asterisk">*</span></label></p>
                <input type="text" id="diskid" name="diskid" value="{$post.diskid}" />
            </div>
            
            <p class="info"> 
                Folgende Felder dienen der Organisation. Falls Daten bekannt, bitte ausf&uuml;llen!
            </p>
            
            <div class="inputrow">
                <p class="label"><label for="plot">Kurze Beschreibung (Plot):</label></p>
                <textarea id="plot" name="plot">{$post.plot}</textarea>
            </div>
            
            {if $isAdmin == false}
            <div class="inputrow">
                <p class="label"><label for="comment">Kommentar:</label></p>
                <textarea id="comment" name="comment">{$post.comment}</textarea>
            </div>
            {/if}
            
            <div class="inputrow">
                <p class="label"><label for="filename">Dateiname:</label></p>
                <input type="text" id="filename" name="filename" value="{$post.filename}" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="filesize">Dateigr&ouml;&szlig;e (MB):</label></p>
                <input type="text" id="filesize" name="filesize" value="{$post.filesize}" /><span class="tip">Eingabe nur in Megabytes</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="rating">Qualit&auml;t (1..10):</label></p>
                <input type="text" id="rating" name="rating" value="{$post.rating}" /><span class="tip">Video- und Soundqualit&auml;t.  10.. beste</span>
            </div>

            <div class="inputrow">
                <p class="label"><label for="imageurl">Cover Upload:</label></p>
                <input class="upload" type="file" id="imageurl" name="imageurl" /><span class="tip">jpeg;jpg;gif;png, max. Gr&ouml;&szlig;e: 200kb</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="audiocodec">Audiocodec:</label></p>
                <input type="text" id="audiocodec" name="audiocodec" value="{$post.audiocodec}" /><span class="tip">z.B. AC3, AAC, usw.</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="videocodec">Videocodec:</label></p>
                <input type="text" id="videocodec" name="videocodec" value="{$post.videocodec}" /><span class="tip">z.B. DivX/Xvid, Mp4, usw.</span>
            </div>
            
            <div class="buttons">
                <input class="reset" type="reset" name="reset" value="Zur&uuml;cksetzen" />
                <input class="submit" type="submit" name="submit" value="Speichern" />
            </div>
            </form>
        </div>
    </div>
    {include file="footer.tpl"}
