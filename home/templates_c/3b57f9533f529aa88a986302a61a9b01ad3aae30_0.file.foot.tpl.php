<?php
/* Smarty version 3.1.30, created on 2017-09-07 01:33:12
  from "D:\phpStudy\WWW\smarty1\web\base\foot.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b0a1d8789375_57071458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b57f9533f529aa88a986302a61a9b01ad3aae30' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\web\\base\\foot.tpl',
      1 => 1504747858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b0a1d8789375_57071458 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1160359b0a1d8789378_38386130', 'js');
?>

  </body>
</html><?php }
/* {block 'js'} */
class Block_1160359b0a1d8789378_38386130 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
}
