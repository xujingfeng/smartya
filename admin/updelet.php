<?php
require_once('config.php');

$id=$_GET['id'];

$sql="delete from tg_goods where id={$id}";
$bool=DB::getDB()->query($sql);

if($bool){

    header("location:showdelet.php?succ=success");

}else{

    header("location:showdelet.php?err=error");

}


