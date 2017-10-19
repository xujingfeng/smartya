<?php
/* Smarty version 3.1.30, created on 2017-09-13 03:08:40
  from "D:\phpStudy\WWW\smarty1\admin\web\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b8a138155dd2_82511009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '83d10d4dccf788f2e5ffd750209faf34e95c98b3' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\admin\\web\\index.tpl',
      1 => 1504857690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59b8a138155dd2_82511009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2487559b8a138155dd2_05445097', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2487559b8a138155dd2_05445097 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <p>欢迎光临</p>
<?php
}
}
/* {/block 'content'} */
}
