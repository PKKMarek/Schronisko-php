<div class="pure-menu pure-menu-horizontal bottom-margin">
    <a href="{$conf->action_url}" class="pure-menu-heading pure-menu-link">main page</a>
    <form action="{$conf->action_url}personEdit" method="post" class="pure-menu-heading pure-menu-link">
        <input name="id" value="{$user->id}" hidden="true" />
        <input type="submit" value="My profile" class="pure-menu-heading pure-menu-link" />
    </form>
    <a href="{$conf->action_url}personShowAll" class="pure-menu-heading pure-menu-link">users</a>
    {if ($user->privilege == "admin")}
        <a href="{$conf->action_url}BehaviorShowAll" class="pure-menu-heading pure-menu-link">behaviors</a>
        <a href="{$conf->action_url}BehaviorNew" class="pure-menu-heading pure-menu-link">new behavior</a>
        <a href="{$conf->action_url}DogNew" class="pure-menu-heading pure-menu-link">new dog</a>
        <a href="{$conf->action_url}" class="pure-menu-heading pure-menu-link">rents</a>
    {/if}
    {if ($user->privilege == "moderator")}
        <a href="{$conf->action_url}BehaviorShowAll" class="pure-menu-heading pure-menu-link">behaviors</a>
        <a href="{$conf->action_url}BehaviorNew" class="pure-menu-heading pure-menu-link">new behavior</a>
        <a href="{$conf->action_url}DogNew" class="pure-menu-heading pure-menu-link">new dog</a>
        <a href="{$conf->action_url}" class="pure-menu-heading pure-menu-link">rents</a>
    {/if}
    <a href="{$conf->action_url}logout" class="pure-menu-heading pure-menu-link">wyloguj</a>
    <span style="float:right;">użytkownik: {$user->login}, rola: {$user->privilege}</span>
</div>
{* <nav>
    <li><a href="{$conf->action_url}BehaviorShowAll">mainShowAll</a></li>
</nav> *}