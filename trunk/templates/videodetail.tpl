{include file="pageheader.tpl"}
{include file="topbar.tpl"}
{include file="logo.tpl"}
    <div id="main">

        {include file="navigation.tpl"}

        <div id="content">
            <h1>{$title|escape:"htmlall"}:</h1>
                <div id="cover"><img src="images/covers/{$cover}" /></div>
                <div id="diskid">
                    <span class="disk">auf DISK<br /></span>{$diskid}<br />
                </div>
                <div id="links">
                    <a class="borrow" href="borrow.php?add={$id}">Video auf meine Ausleiheliste setzen -</a><br />
                    <a class="copyvideo" href="videodetail.php?action=copy&video={$id}&user={$session.userid}">Video auf meine Liste kopieren -</a><br />
                    <a class="edit" href="editvideo.php?id={$id}">Video editieren -</a><br />
                    <a class="delete" href="deletevideo.php?id={$id}">Video l&ouml;schen -</a><br />
                </div>
                <div class="clear"></div>
                <table id="detail" cellspacing="0">
                    <tr>
                        <td class="left">Titel:</td><td>{$title|escape:"htmlall"}{if $subtitle != ''} - {$subtitle|escape:"htmlall"}{/if}</td>
                    </tr>
                    <tr>
                        <td class="left">Sprache</td><td>{$language|escape:"htmlall"}</td>
                    </tr>
                    <tr>
                        <td class="left">Laufzeit:</td><td>{$runtime|escape:"htmlall"} Minuten</td>
                    </tr>
                    <tr>
                        <td class="left">Regisseur</td><td>{$director|escape:"htmlall"}</td>
                    </tr>
                    <tr>
                        <td class="left">Schauspieler:</td><td>{$cast|escape:"htmlall"} </td>
                    </tr>
                    <tr>
                        <td class="left">Produktionsland:</td><td>{$country|escape:"htmlall"}</td>
                    </tr>
                    <tr>
                        <td class="left">Produktionsjahr:</td><td>{$year|escape:"htmlall"}</td>
                    </tr>
                    <tr>
                        <td class="left">Plot:</td><td>{$plot}</td>
                    </tr>
                    <tr>
                        <td class="left">Kommentar:</td><td>{$comment}</td>
                    </tr>
                    <tr>
                        <td class="left">Dateiname:</td><td>{$filename|escape:"htmlall"}</td>
                    </tr>
                    <tr>
                        <td class="left">Dateigr&ouml;&szlig;e</td><td>{$filesize|escape:"htmlall"} MB</td>
                    </tr>
                    <tr>
                        <td class="left">Audiocodec:</td><td>{$audiocodec|escape:"htmlall"}</td>
                    </tr>
                    <tr>
                        <td class="left">Videocodec:</td><td>{$videocodec|escape:"htmlall"}</td>
                    </tr>
                </table>
            
        </div>
    </div>
    {include file="footer.tpl"}
