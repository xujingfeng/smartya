<?php
/* Smarty version 3.1.30, created on 2017-09-15 08:44:35
  from "D:\phpStudy\WWW\smarty\admin\web\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bb2273dfa730_55464433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '331e4c1a5fdcf8214dd127be2c74cc3040eddf73' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty\\admin\\web\\index.tpl',
      1 => 1504857690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59bb2273dfa730_55464433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3233259bb2273dfa734_08454155', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_3233259bb2273dfa734_08454155 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>欢迎光临</p>
<?php
}
}
/* {/block 'content'} */
}
