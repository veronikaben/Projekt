<?php
/* Smarty version 4.3.2, created on 2023-09-26 00:05:44
  from '/Applications/XAMPP/xamppfiles/htdocs/Projekt_Werka/app/views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65120438b10400_63590191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fd907b813a371bf7394f73e465aee3943d94cd2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Projekt_Werka/app/views/index.tpl',
      1 => 1695396204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65120438b10400_63590191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61373839565120438afc1f5_38818528', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_61373839565120438afc1f5_38818528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_61373839565120438afc1f5_38818528',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


			<!-- Features -->
			<section id="features">
			<div class="container">
				<header id="produkty">
					<h2>Oto galeria dostępnych <strong>produktów</strong></h2>
					<input type="text" id="search" placeholder="Szukaj" />
					<h2></h2>
				</header>
				<div id="test" class="row aln-center">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Produkty']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
					<div class="col-4 col-6-medium col-12-small">
						<!-- Feature -->
							<section>
								<header>
									<a href="#" class="image featured"><img src="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"images/".((string)$_smarty_tpl->tpl_vars['p']->value['zdjecie']).".jpeg"),$_smarty_tpl ) );?>
" alt="" /></a>
									<h3><?php echo $_smarty_tpl->tpl_vars['p']->value['Nazwa'];?>
</h3>
									<?php if (!empty($_smarty_tpl->tpl_vars['User']->value->login)) {?><form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"zamowienia",'id'=>$_smarty_tpl->tpl_vars['p']->value['id_Produktu']),$_smarty_tpl ) );?>
" method="post">
										<input type="submit" class="button icon solid fa-file" value="Zamów" /><?php }?>
									</form>
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
							<form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['rel_url'][0], array( array('action'=>"index",'id'=>$_smarty_tpl->tpl_vars['p']->value),$_smarty_tpl ) );?>
#produkty" method="post">
								<input type="submit" class="button icon solid fa-file" value="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
"/>
							</form>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			</div>
		</section>
<?php
}
}
/* {/block "content"} */
}
