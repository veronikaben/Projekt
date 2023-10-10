<?php
/* Smarty version 4.3.2, created on 2023-09-26 00:05:44
  from '/Applications/XAMPP/xamppfiles/htdocs/Projekt_Werka/app/views/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65120438b290f7_93140153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '790e00c7e03633d83a8cf792ea75404234f4c429' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Projekt_Werka/app/views/templates/main.tpl',
      1 => 1695396636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65120438b290f7_93140153 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
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
		<link rel="stylesheet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/css/main.css"),$_smarty_tpl ) );?>
" />
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
				<li><a class="icon solid fa-home" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"index"),$_smarty_tpl ) );?>
"><span>Home</span></a></li>
				<?php if (!empty($_smarty_tpl->tpl_vars['User']->value->role)) {
if ($_smarty_tpl->tpl_vars['User']->value->role == "Admin") {?><li><a class="icon solid fa-cog" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"panel"),$_smarty_tpl ) );?>
"><span>Zarządzaj</span></a></li>
				<li><a class="icon solid fa-cog" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"dodajShow"),$_smarty_tpl ) );?>
"><span>Dodaj</span></a></li><?php }
}?>
				<?php if (empty($_smarty_tpl->tpl_vars['User']->value->login)) {?><li><a class="icon solid fa-sitemap" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"RegisterShow"),$_smarty_tpl ) );?>
"><span>Register</span></a></li>
				<li><a class="icon solid fa-sitemap" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"loginShow"),$_smarty_tpl ) );?>
"><span>Login</span></a></li><?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['User']->value->login)) {?><li><a class="icon solid fa-retweet" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"koszyk"),$_smarty_tpl ) );?>
"><span>Koszyk</span></a></li>
				<li><a class="icon solid fa-sitemap" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"logout"),$_smarty_tpl ) );?>
"><span>Logout</span></a></li><?php }?>
			</ul>
		</nav>

</div>
</section>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56788537065120438b230a0_74516865', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31365443865120438b23b64_40150458', 'messages');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200086705765120438b24d26_00020188', 'bottom');
?>


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
	<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/search.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/searchPanel.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/jquery.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/jquery.dropotron.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/browser.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/breakpoints.min.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/util.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"assets/js/main.js"),$_smarty_tpl ) );?>
"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'content'} */
class Block_56788537065120438b230a0_74516865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_56788537065120438b230a0_74516865',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
/* {block 'messages'} */
class Block_31365443865120438b23b64_40150458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'messages' => 
  array (
    0 => 'Block_31365443865120438b23b64_40150458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




<?php
}
}
/* {/block 'messages'} */
/* {block 'bottom'} */
class Block_200086705765120438b24d26_00020188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_200086705765120438b24d26_00020188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'bottom'} */
}
