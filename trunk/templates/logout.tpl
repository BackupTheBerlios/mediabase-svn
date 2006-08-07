{include file="pageheader.tpl"}
{include file="topbar.tpl"}
{include file="logo.tpl"} 
    <div id="main"> 
        
        {include file="navigation.tpl"}
        
        <div id="content">
            <h1>M&ouml;chten Sie sich wirklich ausloggen?:</h1>
            <form method="post" action="logout.php">
            <input class="submit" type="submit" name="submit" value="Ja, ausloggen!" />
            </form>
        </div>
    </div>
    {include file="footer.tpl"}