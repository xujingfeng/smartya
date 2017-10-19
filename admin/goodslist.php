<?php 
  require_once('config.php');

if(isset($_GET['search'])){

//数据搜索
$link=$_GET['search'];
$sql="select tg_goods.id,tg_goods.name,tg_goods.price,tg_goods.mun,tg_goods.address,tg_goods.content,tg_goods.pic,tg_goods.pic2,tg_goods.classid,tg_goods.times,tg_class.title,tg_class.pid from tg_goods inner join tg_class on tg_goods.classid=tg_class.id where tg_goods.status=1 and tg_goods.name like '%{$link}%'";

  $arr=DB::getDB()->sel($sql);

  $smarty->assign('arr',$arr);

  $smarty->display('goodslist.tpl');
  //var_dump($sql);
  return false;

}






  $sql="select tg_goods.id,tg_goods.name,tg_goods.price,tg_goods.mun,tg_goods.address,tg_goods.content,tg_goods.pic,tg_goods.pic2,tg_goods.classid,tg_goods.times,tg_class.title,tg_class.pid from tg_goods inner join tg_class on tg_goods.classid=tg_class.id where status=1 order by tg_goods.id asc";
  $arr=DB::getDB()->sel($sql);
  $smarty->assign('arr',$arr);
  $smarty->display('goodslist.tpl');

  if(isset($_GET['a'])){

    echo"<script>alert('删除成功');</script>";

  }

  if(isset($_GET['b'])){

    echo "<script>alert('删除失败');</script>";

  }

  if(isset($_GET['succ'])){

    echo"<script>alert('还原成功');</script>";

  }