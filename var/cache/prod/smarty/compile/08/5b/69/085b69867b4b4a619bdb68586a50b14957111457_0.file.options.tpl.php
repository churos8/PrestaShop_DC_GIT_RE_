<?php
/* Smarty version 3.1.33, created on 2019-06-08 10:38:21
  from 'C:\wamp64\www\Prestashop_DC\PrestaShop\admin367fgg437\themes\default\template\controllers\themes\helpers\options\options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfbd66d888369_75722330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '085b69867b4b4a619bdb68586a50b14957111457' => 
    array (
      0 => 'C:\\wamp64\\www\\Prestashop_DC\\PrestaShop\\admin367fgg437\\themes\\default\\template\\controllers\\themes\\helpers\\options\\options.tpl',
      1 => 1556660796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfbd66d888369_75722330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17205232525cfbd66d7f5c65_33831311', "input");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13691745555cfbd66d83e7b5_61275338', "footer");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6056437845cfbd66d8868b9_84870114', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "input"} */
class Block_17205232525cfbd66d7f5c65_33831311 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_17205232525cfbd66d7f5c65_33831311',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'theme') {?>
		<?php if ($_smarty_tpl->tpl_vars['field']->value['can_display_themes']) {?>
			<div class="col-lg-12">
				<div class="row">

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['themes'], 'theme');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
?>
						<div class="col-sm-4 col-lg-3">
							<div class="theme-container">
								<h4 class="theme-title"><?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
</h4>
								<div class="thumbnail-wrapper">
									<div class="action-wrapper">
										<div class="action-overlay"></div>
										<div class="action-buttons">
											<div class="btn-group">
												<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes',true,array(),array('action'=>'enableTheme','theme_name'=>urlencode($_smarty_tpl->tpl_vars['theme']->value->getName()))),'html','UTF-8' ));?>
" class="btn btn-default">
													<i class="icon-check"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use this theme'),$_smarty_tpl ) );?>

												</a>

												<?php if ($_smarty_tpl->tpl_vars['field']->value['can_delete_themes']) {?>
                          <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-caret-down"></i>&nbsp;
                          </button>

                          <ul class="dropdown-menu">
                            <li>
                              <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes',true,array(),array('action'=>'deleteTheme','theme_name'=>urlencode($_smarty_tpl->tpl_vars['theme']->value->getName()))),'html','UTF-8' ));?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this theme'),$_smarty_tpl ) );?>
" class="delete">
                                <i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this theme'),$_smarty_tpl ) );?>

                              </a>
                            </li>
                          </ul>
												<?php }?>
											</div>
										</div>
									</div>
									<img class="center-block img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getBaseLink();
echo $_smarty_tpl->tpl_vars['theme']->value->get('preview');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['theme']->value->getName();?>
" />
								</div>
							</div>
						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

				</div>
			</div>
		<?php }?>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "footer"} */
class Block_13691745555cfbd66d83e7b5_61275338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_13691745555cfbd66d83e7b5_61275338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php if (isset($_smarty_tpl->tpl_vars['categoryData']->value['after_tabs'])) {?>
		<?php $_smarty_tpl->_assignInScope('cur_theme', $_smarty_tpl->tpl_vars['categoryData']->value['after_tabs']['cur_theme']);?>
		<div class="row row-padding-top">

			<div class="col-md-3">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" class="_blank">
					<img class="center-block img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getBaseLink();
echo $_smarty_tpl->tpl_vars['cur_theme']->value->get('preview');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['cur_theme']->value->getName();?>
" />
				</a>
			</div>

			<div id="js_theme_form_container" class="col-md-9">
				<h2><?php echo $_smarty_tpl->tpl_vars['cur_theme']->value->getName();?>
 <small>version <?php echo $_smarty_tpl->tpl_vars['cur_theme']->value->get('version');?>
</small></h2>
				<p>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Designed by %s','sprintf'=>array($_smarty_tpl->tpl_vars['cur_theme']->value->get('author.name'))),$_smarty_tpl ) );?>

				</p>

				<hr />
				<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure your page layouts'),$_smarty_tpl ) );?>
</h4>
				<div class="row">
					<div class="col-sm-8">
						<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Each page can use a different layout, choose it among the layouts bundled in your theme.'),$_smarty_tpl ) );?>
</p>
					</div>
					<div class="col-sm-4 text-right">
						<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes',true,array(),array('display'=>'configureLayouts'));?>
">
							<i class="icon icon-file"></i>
							<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose layouts'),$_smarty_tpl ) );?>

						</a>
						<?php if (@constant('_PS_MODE_DEV_')) {?>
							<a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminThemes',true,array(),array('action'=>'resetToDefaults','theme_name'=>$_smarty_tpl->tpl_vars['cur_theme']->value->getName()));?>
">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset to defaults'),$_smarty_tpl ) );?>

							</a>
						<?php }?>
					</div>
				</div>
			</div>
		</div>

	<?php }?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>


<?php
}
}
/* {/block "footer"} */
/* {block "after"} */
class Block_6056437845cfbd66d8868b9_84870114 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_6056437845cfbd66d8868b9_84870114',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		// These variable will move the form to another location
		var formToMove = "appearance";
		var formDestination = "js_theme_form_container";
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "after"} */
}
