{extends file="main.tpl"}
{block name="content"}

			<!-- Features -->
				<section id="features">
					<div class="container">
						<header>
							{if !empty($Zamowienia)}<h2>Oto zamówienia użytkowników, róbta co chceta</h2>{/if}
							{if empty($Zamowienia)}<h2>Brak zamówień do wyświetlenia</h2>{/if}
							<input type="text" id="searchPanel" placeholder="Szukaj" />
						</header>
						<div id="test" class="row aln-center">
						{foreach $Zamowienia as $z}
							<div class="col-4 col-6-medium col-12-small">
								<section>
									<header>
										<a href="#" class="image featured"><img src="{rel_url action="images/{$z['zdjecie']}.jpeg"}" alt="" /></a>
										<h3>{$z["Nazwa"]}</h3>
										<h4>{$z["Status"]}</h4>
										<h3>{$z["Login"]}</h3>
										<h4>{$z["data"]}</h4>
										<a type="submit" href="{rel_url action="zamowienieDelete" id=$z['id_Zamówienia']}" class="button icon solid fa-bolt">Usuń</a>
									</header>
								</section>
							</div>							
						{/foreach}
						</div>
					</div>
				</section>
{/block}