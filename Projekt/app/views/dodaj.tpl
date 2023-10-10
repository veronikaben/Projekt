{extends file="main.tpl"}
{block name="content"}

			<!-- Features -->
				<section id="features">
					<div class="container">
						<header>
						</header>
						<div class="row aln-center">
							<section class="srodeczek">
								<h2>Dodaj produkt</h2>
								<form method="post" action="{rel_url action="dodaj"}">
									<div class="row gtr-50">
										<div class="col-6 col-12-small">
											<input name="Nazwa" placeholder="Nazwa" type="text" />
										</div>
										<div class="col-6 col-12-small">
											<select name="Rodzaj" id="Rodzaj" required>
												{foreach $Rodzaje as $r}
												<option value={$r["id_Rodzaju"]}>{$r["Rodzaj"]}</option>
												{/foreach}
											</select>
										</div>
										<div class="col-12">
											<input type="submit" class="form-button-submit button icon solid fa-envelope" />
										</div>
									</div>
								</form>
							</section>
						</div>
					</div>
				</section>
{/block}