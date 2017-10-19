<?php
/* Smarty version 3.1.30, created on 2017-09-08 02:47:39
  from "D:\phpStudy\WWW\smarty1\web\base\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b204cb33e8f5_84444012',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b2cf68f900cbce4b0349adeee97d769c2ad7c43' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\web\\base\\head.tpl',
      1 => 1504838815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b204cb33e8f5_84444012 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>微商城</title>

    <!-- Bootstrap -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body>
<div class="container-fluid">
       <ul class="nav nav-tabs">
          <li role="presentation" class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php">首页</a></li>
          <li role="presentation"><a href="#">购物车</a></li>
          <li role="presentation"><a href="#">个人中心</a></li>
          <li role="presentation"><a href="#"><?php if (isset($_SESSION['user'])) {?>  <?php echo $_SESSION['user'];?>
<li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
home/unset.php">安全退出</a></li>
          <?php } else { ?>  <li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
home/login.php">登录</a></li>
          <li role="presentation"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
home/regist.php">注册</a></li><?php }?> </a></li>
      </ul>

   <div class="row">
       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1676859b204cb33e8f2_79147276', 'content');
?>

  </div>
  
</div><?php }
/* {block 'content'} */
class Block_1676859b204cb33e8f2_79147276 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

       <?php
}
}
/* {/block 'content'} */
}
