<?php
/* Smarty version 3.1.30, created on 2017-09-07 01:49:17
  from "D:\phpStudy\WWW\smarty1\home\regist.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b0a59d672176_76522104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd29237946a985ae48d578a9c7460ac2c99724d7f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\home\\regist.php',
      1 => 1504748954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b0a59d672176_76522104 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php 
  ';?>include_once('config.php');
  $methodType=$_SERVER['REQUEST_METHOD'];
  if($methodType=='GET')
  {
      $smarty->display('regist.php');
  }
 <?php }
}
