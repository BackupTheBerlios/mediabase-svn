{include file="pageheader.tpl"}
{include file="topbar.tpl"}
{include file="logo.tpl"}    
    <div id="main"> 
        
        {include file="navigation.tpl"}
        
        <div id="content">
            {php} $counter = 0 {/php}
            
            <h1>Index:</h1>
            
            {if $videos == ''}
            <a href="index.php?action=listallentries">zeige alles</a><br />
            <a href="index.php?action=listnewest">zeige die neuesten 20 </a><br />
            <a href="index.php?action=listlatest">zeige seit meinem letzten Besuch eingef&uuml;gte Eintr&auml;ge</a>
            {else}
            <h2>Gefundene Datens&auml;tze: {$foundRows}</h2>
            {foreach key=vid from=$videos item=video}
            {php}
                $counter++;
                $remainder = $counter % 2;
                $class = ($remainder == 0) ? 'light' : 'dark';
            {/php}
            <div class="{php} echo $class;{/php}">
                <a class="entry" href="videodetail.php?id={$vid}">
                    {$video.title|escape:"htmlall"}, {$video.year}
                </a>
            </div>
            {/foreach}
            {/if}
            
        </div>
    </div>
    {include file="footer.tpl"}
