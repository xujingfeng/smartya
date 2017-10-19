<?php
/* Smarty version 3.1.30, created on 2017-09-15 09:47:35
  from "D:\phpStudy\WWW\smarty\admin\web\base\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bb313738b381_17366547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c392f484355c9c1194b627eff1af2f729238463f' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty\\admin\\web\\base\\head.tpl',
      1 => 1505440051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bb313738b381_17366547 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../static/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../static/bootstrap/css/admin.css">
    <?php echo '<script'; ?>
 src='../static/jsAddress.js'><?php echo '</script'; ?>
>
    
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
	  <?php echo '<script'; ?>
 src="../static/jquery-3.2.1.js"><?php echo '</script'; ?>
>
	  <?php echo '<script'; ?>
 src="../static/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_335059bb313737f7f6_94187721', 'head');
?>

  </head>
  <body>
     <div class="container-fluid">
        <ul class="nav nav-pills">
		  <li role="presentation" class="active"><a href="index.php">Home</a></li>
		  <li role="presentation"><a href="#">Profile</a></li>
		  <li role="presentation"><a href="#">Messages</a></li>
		  <li role="presentation"><a href="../index.php">前台首页</a></li>
		</ul>
     	    <div class="row cc">
			  <div class="col-md-2">
			  <form>
			    <table border="1" width="200px" style="height: 300px; text-align: center;">
			        <tr>
			        	<td style="font-size:25px; font-weight:100px;">商品管理</td>
			        </tr>
			        <tr>
			        	<td><a href="goodslist.php">...商品列表</a></td>
			        </tr>
			        <tr>
			        	<td><a href="addgoods.php">...商品添加</a></td>
			        </tr>
			        <tr>
			        	<td><a href="addclass.php">...商品分类</a></td>
			        </tr>
			         <tr>
			        	<td><a href="showdelet.php">...回收站</a></td>
			        </tr>
			    </table>
               </form>
			  </div>
			  <div class="col-md-10">
			  	    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1288959bb3137383677_27924961', 'content');
?>

			  </div>
			</div>
     </div>



<?php }
/* {block 'head'} */
class Block_335059bb313737f7f6_94187721 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_1288959bb3137383677_27924961 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  	    <?php
}
}
/* {/block 'content'} */
}
