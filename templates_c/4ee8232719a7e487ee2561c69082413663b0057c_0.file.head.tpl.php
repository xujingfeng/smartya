<?php
/* Smarty version 3.1.30, created on 2017-09-18 17:12:28
  from "D:\phpStudy\WWW\smarty\web\base\head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bf8dfc5ffe95_46103599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ee8232719a7e487ee2561c69082413663b0057c' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty\\web\\base\\head.tpl',
      1 => 1505719455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59bf8dfc5ffe95_46103599 (Smarty_Internal_Template $_smarty_tpl) {
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
    <style>
body {
  background-image: url('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/div3.jpg');
  /*background:#edecec;*/
  background-repeat:no-repeat; 
  background-size: 100% 100%;
  height: 650px;


}

/* basic menu styles */
.nav-menu {
  display: block;
  /* background: #74adaa;*/
  width:950px;
  height:0px;
  margin: 50px 28% 90px;

}
.nav-menu > li {
  display: inline;
  float:left;
  border-right:1px solid #94c0be;
}
.nav-menu > li:last-child {
  border-right: none;
}
.nav-menu li a {
  color: #fff;
  display: block;
  text-decoration: none;
  /*调用本地字体*/
  font-family:sansationregular;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-transform: capitalize;
  overflow: visible;
  line-height: 20px;
  font-size: 20px;
  padding: 15px 30px 15px 31px;
}
.three-d {
  /* 任务三、设置3D舞台布景 */
  -webkit-perspective: 200px;
  -moz-perspective: 200px;
  -ms-perspective: 200px;
  -o-perspective: 200px;
  perspective: 200px;
          /*任务四、设置3D舞台布景过渡效果*/
  -webkit-transition: all .07s linear;
  -moz-transition: all .07s linear;
  -ms-transition: all .07s linear;
  -o-transition: all .07s linear;
  transition:all .7s linear;
  position: relative;
}
.three-d:not(.active):hover {
  cursor: pointer;
}
/*任务五、给不是当前状态的3D舞台的悬浮与聚焦状态设置变形效果*/
.three-d:not(.active):hover .three-d-box,  .three-d:not(.active):focus .three-d-box {
  -wekbit-transform: translateZ(-25px) rotateX(90deg);
  -moz-transform: translateZ(-25px) rotateX(90deg);
  -o-transform: translateZ(-25px) rotateX(90deg);
  -ms-transform: translateZ(-25px) rotateX(90deg);
  transform: translateZ(-25px) rotateX(90deg);
/*    -webkit-transform:rotateX(90deg) translatez(-25px);*/
       /*   -webkit-transform:rotatex(90deg);*/
}
.three-d-box {
          /*任务六、给3D舞台中“.three-d-box”设置过渡与变形效果*/
  -webkit-transition: all .3s ease-out;
  -moz-transition: all .3s ease-out;
  -ms-transition: all .3s ease-out;
  -o-transition: all .3s ease-out;
  transition: all .3s ease-out;
  -webkit-transform: translatez(-25px);
  -moz-transform: translatez(-25px);
  -ms-transform: translatez(-25px);
  -o-transform: translatez(-25px);
  transform: translatez(-25px);
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  -o-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-pointer-events: none;
  -moz-pointer-events: none;
  -ms-pointer-events: none;
  -o-pointer-events: none;
  pointer-events: none;
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  height: 100%;
}
/*任务七、给导航设置3D前，与3D后变形效果*/
.front {
  -webkit-transform: rotatex(0deg) translatez(25px);
  -moz-transform: rotatex(0deg) translatez(25px);
  -ms-transform: rotatex(0deg) translatez(25px);
  -o-transform: rotatex(0deg) translatez(25px);
  transform: rotatex(0deg) translatez(25px);
}
.back {
  -webkit-transform: rotatex(-90deg) translatez(25px);
  -moz-transform: rotatex(-90deg) translatez(25px);
  -ms-transform: rotatex(-90deg) translatez(25px);
  -o-transform: rotatex(-90deg) translatez(25px);
  transform: rotatex(-90deg) translatez(25px);
  color: #FFE7C4;
}
.front, .back {
  /*          border:1px solid red;*/
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background: #74adaa;
  padding: 15px 30px 15px 31px;
  color: white;
  -webkit-pointer-events: none;
  -moz-pointer-events: none;
  -ms-pointer-events: none;
  -o-pointer-events: none;
  pointer-events: none;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
/*任务八、设置导航当前状态与悬浮状态下的背景效果*/
.nav-menu li .active .front,  .nav-menu li .active .back,  .nav-menu li a:hover .front,  .nav-menu li a:hover .back {
  background-color: #51938f;
  -webkit-background-size: 5px 5px;
  background-size: 5px 5px;
  background-position: 0 0, 30px 30px;
  background-image: -webit-linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480);
  background-image: -moz-linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480);
  background-image: -ms-linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480);
  background-image: -o-linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480);
  background-image: linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480), linear-gradient(45deg, #478480 25%, transparent 25%, transparent 75%, #478480 75%, #478480);
}
.nav-menu ul {
  position: absolute;
  text-align: left;
  line-height: 40px;
  font-size: 14px;
  width: 200px;
  -webkit-transition: all 0.3s ease-in;
  -moz-transition: all 0.3s ease-in;
  -ms-transition: all 0.3s ease-in;
  -o-transition: all 0.3s ease-in;
  transition: all 0.3s ease-in;
  -webkit-transform-origin: 0px 0px;
  -moz-transform-origin: 0px 0px;
  -ms-transform-origin: 0px 0px;
  -o-transform-origin: 0px 0px;
  transform-origin: 0px 0px;
  -webkit-transform: rotateX(-90deg);
  -moz-transform: rotateX(-90deg);
  -ms-transform: rotateX(-90deg);
  -o-transform: rotateX(-90deg);
  transform: rotateX(-90deg);
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -ms-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden;
}
/*任务九、显示下拉导航菜单，并其设置一个变形效果*/
.nav-menu > li:hover ul {
  -webkit-transform: rotateX(0deg);
  -moz-transform: rotateX(0deg);
  -ms-transform: rotateX(0deg);
  -o-transform: rotateX(0deg);
  transform: rotateX(0deg);
}
</style>


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
  <div id="nav">
  <ul class="nav-menu clearfix unstyled">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
index.php" class="three-d active"> 首页 <span class="three-d-box"><span class="front">首页</span><span class="back">首页</span></span> </a></li>
    <li><a href="#" class="three-d"> 购物车 <span class="three-d-box"><span class="front">购物车</span><span class="back">购物车</span></span> </a></li>
    <li><a href="#" class="three-d"> 个人中心 <span class="three-d-box"><span class="front">个人中心</span><span class="back">个人中心</span></span> </a></li>
    <?php if (isset($_SESSION['user'])) {?><li><a href="#" class="three-d"><?php echo $_SESSION['user'];?>
 <span class="three-d-box"><span class="front"><?php echo $_SESSION['user'];?>
</span><span class="back"><?php echo $_SESSION['user'];?>
</span></span> </a></li><li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
home/unset.php" class="three-d">安全退出<span class="three-d-box"><span class="front">安全退出</span><span class="back">安全退出</span></span> </a></li><?php } else { ?><li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
home/login.php" class="three-d"> 登录 <span class="three-d-box"><span class="front">登录</span><span class="back">登录</span></span></a>
    </li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
home/regist.php" class="three-d"> 注册 <span class="three-d-box"><span class="front">注册</span><span class="back">注册</span></span></a><?php }?>
    </li>
  </ul>
  <div class="row">
       <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1227559bf8dfc5f8190_83573839', 'content');
?>

  </div>
</div><?php }
/* {block 'content'} */
class Block_1227559bf8dfc5f8190_83573839 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

       <?php
}
}
/* {/block 'content'} */
}
