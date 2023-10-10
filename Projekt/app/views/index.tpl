{extends file="main.tpl"}
{block name="content"}

			<!-- Features -->
			<section id="features">
			<div class="container">
				<header id="produkty">
					<h2>Oto galeria dostępnych <strong>produktów</strong></h2>
					<input type="text" id="search" placeholder="Szukaj" />
					<h2></h2>
				</header>
				<div id="test" class="row aln-center">
				{foreach $Produkty as $p}
					<div class="col-4 col-6-medium col-12-small">
						<!-- Feature -->
							<section>
								<header>
									<a href="#" class="image featured"><img src="{rel_url action="images/{$p['zdjecie']}.jpeg"}" alt="" /></a>
									<h3>{$p['Nazwa']}</h3>
									{if !empty($User->login)}<form action="{rel_url action="zamowienia" id=$p['id_Produktu']}" method="post">
										<input type="submit" class="button icon solid fa-file" value="Zamów" />{/if}
									</form>
								</header>
							</section>
					</div>
					{/foreach}
					</div>
					<div id="strony" class="center">
						{foreach $magazyn->produkty as $p}
							<form action="{rel_url action="index" id=$p}#produkty" method="post">
								<input type="submit" class="button icon solid fa-file" value="{$p}"/>
							</form>
						{/foreach}
					</div>
				</div>
			</div>
		</section>
{/block}