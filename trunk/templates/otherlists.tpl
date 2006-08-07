{include file="pageheader.tpl"}
{include file="topbar.tpl"}
{include file="logo.tpl"} 
    <div id="main"> 
        
        {include file="navigation.tpl"}
        
        <div id="content">
            <h1>{$page.title|escape:"htmlall"}</h1>
            {if $lists != ''}
            <h2>Folgende Benutzerlisten wurde gefunden:</h2>
            {/if}
            {foreach key=lid from=$lists item=list}
            {php}
                $counter++;
                $remainder = $counter % 2;
                $class = ($remainder == 0) ? 'light' : 'dark';
            {/php}
            <div class="{php} echo $class;{/php}">
                <a href="otherlists.php?id={$lid}">{$list.title|escape:"htmlall"}</a>
            </div>
            {/foreach}
            
            {if $videos != ''}
            <h2>Gefundene Datens&auml;tze: {$foundRows}</h2>
            {/if}
            {foreach key=vid from=$videos item=video}
            {php}
                $counter++;
                $remainder = $counter % 2;
                $class = ($remainder == 0) ? 'light' : 'dark';
            {/php}
            <div class="{php} echo $class;{/php}">
                <a class="entry" href="videodetail.php?id={$vid}">{$video.title|escape:"htmlall"}, {$video.year}</a>
            </div>
            {/foreach}
            
        </div>
    </div>
    {include file="footer.tpl"}
