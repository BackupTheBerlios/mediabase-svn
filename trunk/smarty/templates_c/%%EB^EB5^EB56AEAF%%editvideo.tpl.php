<?php /* Smarty version 2.6.11, created on 2006-04-13 14:26:28
         compiled from editvideo.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pageheader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "topbar.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "logo.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 
    <div id="main"> 
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "navigation.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        
        <div id="content">
            <h1>Video editieren:</h1>
            <form enctype="multipart/form-data" id="newform" method="post" action="editvideo.php?id=<?php echo $this->_tpl_vars['id']; ?>
">
            
            <?php if ($this->_tpl_vars['success'] == true): ?>
            <p class="success"> 
                &Auml;nderungen wurden gespeichert.
            </p>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['error'] == true): ?>
            <p class="error">
                &Auml;nderungen konnten nicht gespeichert werden.
            </p>
            <?php endif; ?>
            <p class="info"> 
                Die mit Sternchen gekennzeichneten Felder m&uuml;ssen ausgef&uuml;llt werden.
            </p>
            <?php if ($this->_tpl_vars['inputerror']['title'] == 1): ?>
            <p class="error">
                Folgendes Feld muss ausgef&uuml;llt werden.
            </p>
            <?php endif; ?>
            <div class="inputrow">
                <p class="label"><label for="title">Title: <span class="asterisk">*</span></label></p>
                <input type="text" id="title" name="title" value="<?php echo $this->_tpl_vars['title']; ?>
" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="subtitle">Subtitle:</label></p>
                <input type="text" id="subtitle" name="subtitle" value="<?php echo $this->_tpl_vars['subtitle']; ?>
" />
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
                <input type="text" id="runtime" name="runtime" value="<?php echo $this->_tpl_vars['runtime']; ?>
" /><span class="tip">Eingabe nur in Minuten</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="country">Produktionsland:</label></p>
                <input type="text" id="country" name="country" value="<?php echo $this->_tpl_vars['country']; ?>
" /><span class="tip">USA, Deutschland, Canada, etc.</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="year">Produktionsjahr:</label></p>
                <input type="text" id="year" name="year" value="<?php echo $this->_tpl_vars['year']; ?>
" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="director">Regisseur:</label></p>
                <input type="text" id="director" name="director" value="<?php echo $this->_tpl_vars['director']; ?>
" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="cast">Schauspieler:</label></p>
                <input type="text" id="cast" name="cast" value="<?php echo $this->_tpl_vars['cast']; ?>
" /><span class="tip">Schauspieler kommagetrennt eingeben</span>
            </div>
            
            <?php if ($this->_tpl_vars['inputerror']['diskid'] == 1): ?>
            <p class="error">
                Folgendes Feld muss ausgef&uuml;llt werden.
            </p>
            <?php endif; ?>
            <div class="inputrow">
                <p class="label"><label for="diskid">Auf Disk Nr.: <span class="asterisk">*</span></label></p>
                <input type="text" id="diskid" name="diskid" value="<?php echo $this->_tpl_vars['diskid']; ?>
" />
            </div>
            
            <p class="info"> 
                Folgende Felder dienen der Organisation. Falls Daten bekannt, bitte ausf&uuml;llen!
            </p>
            
            <div class="inputrow">
                <p class="label"><label for="plot">Kurze Beschreibung (Plot):</label></p>
                <textarea id="plot" name="plot"><?php echo $this->_tpl_vars['plot']; ?>
</textarea>
            </div>
            
            <?php if ($this->_tpl_vars['isAdmin'] == false): ?>
            <div class="inputrow">
                <p class="label"><label for="comment">Kommentar:</label></p>
                <textarea id="comment" name="comment"><?php echo $this->_tpl_vars['comment']; ?>
</textarea>
            </div>
            <?php endif; ?>
            
            <div class="inputrow">
                <p class="label"><label for="filename">Dateiname:</label></p>
                <input type="text" id="filename" name="filename" value="<?php echo $this->_tpl_vars['filename']; ?>
" />
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="filesize">Dateigr&ouml;&szlig;e (MB):</label></p>
                <input type="text" id="filesize" name="filesize" value="<?php echo $this->_tpl_vars['filesize']; ?>
" /><span class="tip">Eingabe nur in Megabytes</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="rating">Qualit&auml;t (1..10):</label></p>
                <input type="text" id="rating" name="rating" value="<?php echo $this->_tpl_vars['rating']; ?>
" /><span class="tip">Video- und Soundqualit&auml;t.  10.. beste</span>
            </div>

            <div class="inputrow">
                <p class="label"><label for="imageurl">Cover Upload:</label></p>
                <input class="upload" type="file" id="imageurl" name="imageurl" /><span class="tip">jpeg;jpg;gif;png, max. Gr&ouml;&szlig;e: 200kb</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="audiocodec">Audiocodec:</label></p>
                <input type="text" id="audiocodec" name="audiocodec" value="<?php echo $this->_tpl_vars['audiocodec']; ?>
" /><span class="tip">z.B. AC3, AAC, usw.</span>
            </div>
            
            <div class="inputrow">
                <p class="label"><label for="videocodec">Videocodec:</label></p>
                <input type="text" id="videocodec" name="videocodec" value="<?php echo $this->_tpl_vars['videocodec']; ?>
" /><span class="tip">z.B. DivX/Xvid, Mp4, usw.</span>
            </div>
            
            <div class="buttons">
                <input class="reset" type="reset" name="reset" value="Zur&uuml;cksetzen" />
                <input class="submit" type="submit" name="submit" value="Speichern" />
            </div>
            </form>
        </div>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>