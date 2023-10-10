<?php
/* Smarty version 4.3.2, created on 2023-09-26 00:06:02
  from '/Applications/XAMPP/xamppfiles/htdocs/Projekt_Werka/app/views/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6512044a852601_52987126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bab3b4611d842e665572744cba3d3881e1719581' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Projekt_Werka/app/views/Login.tpl',
      1 => 1695320788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6512044a852601_52987126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6339818506512044a850704_85341503', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_6339818506512044a850704_85341503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6339818506512044a850704_85341503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-6 col-12-medium">
	<section class="srodeczek">
	<h2>Login</h2>
		<form method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"login"),$_smarty_tpl ) );?>
">
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
<?php
}
}
/* {/block 'content'} */
}
