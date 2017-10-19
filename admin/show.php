<?php
require_once('config.php');

$id=$_GET['id'];

$sql="update tg_goods set status=1 where id={$id}";
$bool=DB::getDB()->query($sql);

if($bool){

    header("location:goodslist.php?succ=success");

}else{

    header("location:showdelet.php?b=error");

}


