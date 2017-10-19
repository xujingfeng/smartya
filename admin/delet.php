<?php
require_once('config.php');
$id=$_GET['id'];
$sql="update tg_goods set status=0 where id={$id}";
$bool=DB::getDB()->query($sql);
if($bool){
 
   header("location:goodslist.php?a=success");

}else{

   header("location:goodslist.php?b=error");

}