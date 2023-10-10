<?php
/* Smarty version 4.3.2, created on 2023-09-26 00:10:16
  from '/Applications/XAMPP/xamppfiles/htdocs/Projekt_Werka/app/views/koszyk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65120548c86461_19256114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c8a47b17a79f1c437603589b61970cc69645fdc' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Projekt_Werka/app/views/koszyk.tpl',
      1 => 1695403196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65120548c86461_19256114 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2975596165120548c787a9_48210140', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_2975596165120548c787a9_48210140 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2975596165120548c787a9_48210140',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<!-- Features -->
				<section class="kwiatek" id="features">
					<div class="container">
						<header id="produkty">
							<?php if (!empty($_smarty_tpl->tpl_vars['Zamowienia']->value)) {?><h2>Oto twoje zamówienia</h2><?php }?>
							<?php if (empty($_smarty_tpl->tpl_vars['Zamowienia']->value)) {?><h2>Nie masz jeszcze zamówień</h2><?php }?>
						</header>
						<div class="row aln-center">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Zamowienia']->value, 'z');
$_smarty_tpl->tpl_vars['z']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['z']->value) {
$_smarty_tpl->tpl_vars['z']->do_else = false;
?>
							<div class="col-4 col-6-medium col-12-small">
								<section>
									<a href="#" class="image featured"><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"images/".((string)$_smarty_tpl->tpl_vars['z']->value['zdjecie']).".jpeg"),$_smarty_tpl ) );?>
" alt="" /></a>
									<header>
										<h3><?php echo $_smarty_tpl->tpl_vars['z']->value["Nazwa"];?>
</h3>
										<h4><?php echo $_smarty_tpl->tpl_vars['z']->value["Rodzaj"];?>
</h4>
										<h4><?php echo $_smarty_tpl->tpl_vars['z']->value["Status"];?>
</h4>
										<h4><?php echo $_smarty_tpl->tpl_vars['z']->value["data"];?>
</h4>
									</header>
								</section>
							</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
						<div id="strony" class="center">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['magazyn']->value->produkty, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
							<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"koszyk",'id'=>$_smarty_tpl->tpl_vars['p']->value),$_smarty_tpl ) );?>
#produkty" method="post">
								<input type="submit" class="button icon solid fa-file" value="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"/>
							</form>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
					</div>
				</section>
<?php
}
}
/* {/block "content"} */
}
