{extends file="main.tpl"}

{block name=content}
<div class="col-6 col-12-medium">
	<section class="srodeczek">
	<h2>Login</h2>
		<form method="post" action="{rel_url action="login"}">
			<div class="row gtr-50">
				<div class="col-6 col-12-small">
					<input name="Login" placeholder="Login" type="text" />
				</div>
				<div class="col-6 col-12-small">
					<input name="Hasło" placeholder="Hasło" type="password" />
				</div>
				<div class="col-12">
					<input type="submit" class="form-button-submit button icon solid fa-envelope" />
				</div>
			</div>
		</form>
	</section>
</div>
{/block}
