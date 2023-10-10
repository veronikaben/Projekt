<?php
/* Smarty version 4.3.2, created on 2023-09-26 00:06:00
  from '/Applications/XAMPP/xamppfiles/htdocs/Projekt_Werka/app/views/Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651204481fdf65_86474019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '951a4364cd59248aa8d886a3c305b9e81517c0ec' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Projekt_Werka/app/views/Register.tpl',
      1 => 1695320776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651204481fdf65_86474019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_948296169651204481fc102_53267157', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_948296169651204481fc102_53267157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_948296169651204481fc102_53267157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-6 col-12-medium">
	<section class="srodeczek">
	<h2>Register</h2>
		<form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"Register"),$_smarty_tpl ) );?>
">
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
<?php
}
}
/* {/block 'content'} */
}
