<?php
require_once('config.php');
$methodType=$_SERVER['REQUEST_METHOD'];
if($methodType=='GET'){
	$id=$_GET['id'];

  $sql="select * from tg_goods where id={$id}";
  $sql2="select * from tg_class";
  $sql3="select * from tg_style where class_id={$id}";
  $arr=DB::getDB()->select($sql2);
  $goods=DB::getDB()->login($sql);
  $style=DB::getDB()->sel($sql3);
  //var_dump($goods);
  //echo "<br>";
  $add=explode('.',$goods['address']);
  //var_dump($add);
  $smarty->assign('style',$style);
  $smarty->assign('goods',$goods);
  $smarty->assign('arr',$arr);
  $smarty->display('updateGoods.tpl');
}else{
  $id=$_POST['id'];
      if($_FILES['idcard']['name'][0]!=''){

      	$arrInt=count($_FILES['idcard']['name']);
      	   for($i=0;$i<$arrInt;$i++){
               $name=$_FILES['idcard']['name'][$i];
               $namefile=$_FILES['idcard']['tmp_name'][$i];
               $arr=explode('.', $name);
               $imgname[$i]=time().mt_rand(1,100000).'.'.$arr[1];

               $bool=move_uploaded_file($namefile,"../upload/".$imgname[$i]);

               $sql3="update tg_goods set pic='{$imgname[0]}' where id={$id}";

               DB::getDB()->query($sql3);
      	   }

      }
  $name=$_POST['user'];
  $price=$_POST['price'];
  $mun=$_POST['mun'];
  $address=implode('.', $_POST['address']);

  $class_id=$_POST['class'];

  if(isset($_POST['style'])){
          $style=$_POST['style'];
          foreach($style as $key => $value){
          	$sql="insert into tg_style (stylename,claa_id)values('{$value}',{$id})";
          	DB::getDB()->query($sql);

          }
  }

  $styleup=$_POST['styleup'];
  $content=$_POST['content'];
  $time=time();

  $sql2="update tg_goods set name='{$name}',price={$price},mun={$mun},address='{$address}',classid={$class_id},content='{$content}',uptimes={$time} where id={$id}";

  //echo $sql;
  DB::getDB()->query($sql2);


}