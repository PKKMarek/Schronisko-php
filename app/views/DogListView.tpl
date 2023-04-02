{extends file="main.tpl"}

{block name=content}
    {include file='header.tpl'}
    <div>
        <h1>Dog List</h1>
        <div>
            <form action="{$conf->action_url}DogShowLike" method="post" class="pure-form pure-form-aligned bottom-margin">
                <input name="searchbar" placeholder="Search bar" />
                <input type="submit" value="Szukaj" />
            </form>
        </div>
        <div>
            {if isset($dogs)}
                {foreach $dogs as $dog}
                    <form action="{$conf->action_url}DogEdit" method="post">
                        <div>
                            <h2>{$dog['Name']} - {$dog['Age']}</h2>
                            <img height="300px" width="300px" src="{$dog['img']}" />
                            <h3>Hair_Type: {$dog['Hair_Type']}</h3>
                            <h3>Breed: {$dog['Breed']}</h3>
                            <h3>Behaviors:
                                {if isset($behaviors)}
                                    {foreach $behaviors as $behavior}
                                        {if isset($myBehaviors)}
                                            {foreach $myBehaviors as $myBehavior}
                                                {if $dog['idDog'] === $myBehavior['Dog_idDog']}
                                                    {if $behavior['BehaviorID']===$myBehavior['Behavioral_BehaviorID']}
                                                        <li>{$behavior['Behavior types']}</li>
                                                    {/if}
                                                {/if}
                                            {/foreach}
                                        {/if}
                                    {/foreach}
                                {/if}
                            </h3>
                            <input name="id" value="{$dog['idDog']}" hidden="true" />
                            <input type="submit" value="Podgląd" />
                        </div>
                    </form>
                    <form action="{$conf->action_url}DogRent" method="post">
                        <input name="id" value="{$dog['idDog']}" hidden="true" />
                        <input type="submit" value="Wypożycz" />
                    </form>
                {/foreach}
            {/if}
        </div>
    </div>
    {include file='messages.tpl'}
{/block}