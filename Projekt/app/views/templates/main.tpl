<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Strongly Typed by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{rel_url action="assets/css/main.css"}" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

<!-- Header -->
<section id="header">
<div class="container">

	<!-- Logo -->
		<h1 id="logo"><a href="index.html">Magazyn <strong>meblowy</strong></a></h1>
		<p>Przejrzyj naszą ofertę i wybierz najlepszą dla siebie</p>

	<!-- Nav -->
		<nav id="nav">
			<ul>
				<li><a class="icon solid fa-home" href="{rel_url action="index"}"><span>Home</span></a></li>
				{if !empty($User->role)}{if $User->role == "Admin"}<li><a class="icon solid fa-cog" href="{rel_url action="panel"}"><span>Zarządzaj</span></a></li>
				<li><a class="icon solid fa-cog" href="{rel_url action="dodajShow"}"><span>Dodaj</span></a></li>{/if}{/if}
				{if empty($User->login)}<li><a class="icon solid fa-sitemap" href="{rel_url action="RegisterShow"}"><span>Register</span></a></li>
				<li><a class="icon solid fa-sitemap" href="{rel_url action="loginShow"}"><span>Login</span></a></li>{/if}
				{if !empty($User->login)}<li><a class="icon solid fa-retweet" href="{rel_url action="koszyk"}"><span>Koszyk</span></a></li>
				<li><a class="icon solid fa-sitemap" href="{rel_url action="logout"}"><span>Logout</span></a></li>{/if}
			</ul>
		</nav>

</div>
</section>

{block name=content} {/block}

{block name=messages}



{/block}

{block name=bottom} {/block}

			<!-- Footer -->
			<section id="footer">
			<div class="container">
				<header>
					<h2>Questions or comments? <strong>Skontaktuj się z nami:</strong></h2>
				</header>
				<div class="row">
					<div class="col-6 col-12-medium">
						<section>
							<h3>Jesteśmy dostępni pod tymi linkami:</h3>
							<div class="row">
								<div class="col-6 col-12-small">
									<ul class="icons">
										<li class="icon brands fa-instagram">
											<a href="https://instagram.com/uniwersytetslaski?igshid=MzRlODBiNWFlZA==">Instagram</a>
										</li>
										<li class="icon brands fa-twitter">
											<a href="https://x.com/usinkatowice?s=21&t=2iXXRG1I8AfI9mRyeyiCYg">Twitter</a>
										</li>
										<li class="icon brands fa-facebook">
											<a href="https://www.facebook.com/UniwersytetSlaski?mibextid=LQQJ4d">Facebook</a>
										</li>
									</ul>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
			<div id="copyright" class="container">
				<ul class="links">
					<li>&copy; Untitled</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</section>

</div>

<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="{rel_url action="assets/js/search.js"}"></script>
	<script src="{rel_url action="assets/js/searchPanel.js"}"></script>
	<script src="{rel_url action="assets/js/jquery.min.js"}"></script>
	<script src="{rel_url action="assets/js/jquery.dropotron.min.js"}"></script>
	<script src="{rel_url action="assets/js/browser.min.js"}"></script>
	<script src="{rel_url action="assets/js/breakpoints.min.js"}"></script>
	<script src="{rel_url action="assets/js/util.js"}"></script>
	<script src="{rel_url action="assets/js/main.js"}"></script>

</body>
</html>