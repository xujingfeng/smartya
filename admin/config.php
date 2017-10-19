<?php  
  require_once('../libs/Smarty.class.php');
  require_once('../DB/DB.class.php');
  session_start();
  $smarty=new Smarty();
  $smarty->template_dir='web';
