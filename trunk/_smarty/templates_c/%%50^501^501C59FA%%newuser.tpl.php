<?php /* Smarty version 2.6.11, created on 2006-04-13 23:35:36
         compiled from newuser.tpl */ ?>
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
            <h1>Neuer Benutzer:</h1>
            <form id="newform" method="post" action="newuser.php">
            
            <?php if ($this->_tpl_vars['success'] == true): ?>
            <p class="success"> 
                Ihre Eingaben wurden erfolgreich gespeichert. Sie k&ouml;nnen mit Anlegen weiterer Benutzer fortfahren.
            </p>
            <?php endif; ?>
            <p class="info"> 
                Die mit Sternchen gekennzeichneten Felder m&uuml;ssen ausgef&uuml;llt werden.
            </p>
            <?php if ($this->_tpl_vars['inputerror']['username'] == 1): ?>
            <p class="error">
                Folgendes Feld muss ausgef&uuml;llt werden.
            </p>
            <?php endif; ?>
            <div class="inputrow">
                <p class="label"><label for="username">Benutzername: <span class="asterisk">*</span></label></p>
                <input type="text" id="username" name="username" value="<?php echo $this->_tpl_vars['post']['username']; ?>
" />
            </div>
            
            <?php if ($this->_tpl_vars['inputerror']['passworddismatch'] == 1): ?>
            <p class="error">
                Die eingegeben Passw&ouml;rter stimmen nicht &uuml;berein.
            </p>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['inputerror']['password1'] == 1): ?>
            <p class="error">
                Folgendes Feld muss ausgef&uuml;llt werden.
            </p>
            <?php endif; ?>
            <div class="inputrow">
                <p class="label"><label for="password1">Passwort: <span class="asterisk">*</span></label></p>
                <input type="password" id="password1" name="password1" />
            </div>
            
            <?php if ($this->_tpl_vars['inputerror']['password2'] == 1): ?>
            <p class="error">
                Folgendes Feld muss ausgef&uuml;llt werden.
            </p>
            <?php endif; ?>
            <div class="inputrow">
                <p class="label"><label for="password2">Pass. best&auml;tigen: <span class="asterisk">*</span></label></p>
                <input type="password" id="password2" name="password2" />
            </div>
                        
            <?php if ($this->_tpl_vars['inputerror']['email'] == 1): ?>
            <p class="error">
                Folgendes Feld muss ausgef&uuml;llt werden.
            </p>
            <?php endif; ?>
            <div class="inputrow">
                <p class="label"><label for="email">eMail-Adresse: <span class="asterisk">*</span></label></p>
                <input type="text" id="email" name="email" value="<?php echo $this->_tpl_vars['post']['email']; ?>
" />
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
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>