{extends file="main.tpl"}

{block name=content}
	<form action="{$conf->action_url}login" method="post" class="pure-form pure-form-aligned bottom-margin">
		<h1>Logowanie do systemu</h1>
		<fieldset>
			<div class="pure-control-group">
				<label for="id_login">login: </label>
				<input id="id_login" type="text" name="login" />
			</div>
			<div class="pure-control-group">
				<label for="id_pass">pass: </label>
				<input id="id_pass" type="password" name="pass" /><br />
			</div>
			<div class="pure-controls">
				<input type="submit" value="zaloguj" class="pure-button pure-button-primary" />
			</div>
		</fieldset>
	</form>

	<a href="{$conf->action_url}register">Nie masz jeszcze konta? zarejestruj się!</a>

	{include file='messages.tpl'}

{/block}