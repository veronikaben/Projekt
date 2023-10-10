{extends file="main.tpl"}
{block name="content"}

			<!-- Features -->
				<section class="kwiatek" id="features">
					<div class="container">
						<header id="produkty">
							{if !empty($Zamowienia)}<h2>Oto twoje zamówienia</h2>{/if}
							{if empty($Zamowienia)}<h2>Nie masz jeszcze zamówień</h2>{/if}
						</header>
						<div class="row aln-center">
						{foreach $Zamowienia as $z}
							<div class="col-4 col-6-medium col-12-small">
								<section>
									<a href="#" class="image featured"><img src="{rel_url action="images/{$z['zdjecie']}.jpeg"}" alt="" /></a>
									<header>
										<h3>{$z["Nazwa"]}</h3>
										<h4>{$z["Rodzaj"]}</h4>
										<h4>{$z["Status"]}</h4>
										<h4>{$z["data"]}</h4>
									</header>
								</section>
							</div>
						{/foreach}
						</div>
						<div id="strony" class="center">
						{foreach $magazyn->produkty as $p}
							<form action="{rel_url action="koszyk" id=$p}#produkty" method="post">
								<input type="submit" class="button icon solid fa-file" value="{$p}"/>
							</form>
						{/foreach}
					</div>
					</div>
				</section>
{/block}