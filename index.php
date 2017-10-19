<?php 
  require_once('libs/Smarty.class.php');
  require_once('DB/DB.class.php');
  $smarty=new Smarty();
  session_start();
  $smarty->template_dir='web';
  $smarty->assign('url','');
  $smarty->display('index.tpl');
 ?>