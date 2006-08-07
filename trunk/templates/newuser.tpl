{include file="pageheader.tpl"}
{include file="topbar.tpl"}
{include file="logo.tpl"} 
    <div id="main"> 
        
        {include file="navigation.tpl"}
        
        <div id="content">
            <h1>Neuer Benutzer:</h1>
            <form id="newform" method="post" action="newuser.php">
            
            {if $success == true}
            <p class="success"> 
                Ihre Eingaben wurden erfolgreich gespeichert. Sie k&ouml;nnen mit Anlegen weiterer Benutzer fortfahren.
            </p>
            {/if}
            <p class="info"> 
                Die mit Sternchen gekennzeichneten Felder m&uuml;ssen ausgef&uuml;llt werden.
            </p>
            {if $inputerror.username == 1}
            <p class="error">
                Folgendes Feld muss ausgef&uuml;llt werden.
            </p>
            {/if}
            <div class="inputrow">
                <p class="label"><label for="username">Benutzername: <span class="asterisk">*</span></label></p>
                <input type="text" id="username" name="username" value="{$post.username}" />
            </div>
            
            {if $inputerror.passworddismatch == 1}
            <p class="error">
                Die eingegeben Passw&ouml;rter stimmen nicht &uuml;berein.
            </p>
            {/if}
            {if $inputerror.password1 == 1}
            <p class="error">
                Folgendes Feld muss ausgef&uuml;llt werden.
            </p>
            {/if}
            <div class="inputrow">
                <p class="label"><label for="password1">Passwort: <span class="asterisk">*</span></label></p>
                <input type="password" id="password1" name="password1" />
            </div>
            
            {if $inputerror.password2 == 1}
            <p class="error">
                Folgendes Feld muss ausgef&uuml;llt werden.
            </p>
            {/if}
            <div class="inputrow">
                <p class="label"><label for="password2">Pass. best&auml;tigen: <span class="asterisk">*</span></label></p>
                <input type="password" id="password2" name="password2" />
            </div>
                        
            {if $inputerror.email == 1}
            <p class="error">
                Folgendes Feld muss ausgef&uuml;llt werden.
            </p>
            {/if}
            <div class="inputrow">
                <p class="label"><label for="email">eMail-Adresse: <span class="asterisk">*</span></label></p>
                <input type="text" id="email" name="email" value="{$post.email}" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="language">Sprache:</label></p>
                <select id="language" name="language">
                    <option>Deutsch</option>
                    <option>Englisch</option>
                    <option>Tuerkisch</option>
                </select>
            </div>
            
            <div class="buttons">
                <input class="reset" type="reset" name="reset" value="Zur&uuml;cksetzen" />
                <input class="submit" type="submit" name="submit" value="Speichern" />
            </div>
            </form>
        </div>
    </div>
    {include file="footer.tpl"}
