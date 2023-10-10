{extends file="main.tpl"}

{block name=content}
<div class="col-6 col-12-medium">
	<section class="srodeczek">
	<h2>Register</h2>
		<form method="post" action="{rel_url action="Register"}">
			<div class="row gtr-50">
				<div class="col-6 col-12-small">
					<input name="Imie" placeholder="Imie" type="text" />
				</div>
				<div class="col-6 col-12-small">
					<input name="Nazwisko" placeholder="Nazwisko" type="text" />
				</div>
				<div class="col-6 col-12-small">
					<input name="Login" placeholder="Login" type="text" />
				</div>
				<div class="col-6 col-12-small">
					<input name="Hasło" placeholder="Hasło" type="password" />
				</div>
				<div class="col-12">
					<input type="submit" class="form-button-submit button icon solid fa-envelope" value="Register"/>
				</div>
			</div>
		</form>
	</section>
</div>
{/block}
