<?php
require_once('config.php');

$methodType=$_SERVER['REQUEST_METHOD'];
if($methodType=='GET'){
	  	  $sql="select id,title,pid from tg_class";

	       $arr=DB::getDB()->select($sql);

      //var_dump($arr);
	  //die;
          $smarty->assign('arr',$arr);
	 $smarty->display('addgoods.tpl');
}else{
	//echo '<pre>';
	// var_dump($_POST);
	// echo '<hr/>';
	// var_dump($_FILES);
	$classID=$_POST['class'];
	$names=$_POST['user'];
	  if(!isset($_POST['style'])){
          echo '请添加属性';
          return false;
	  }
	$arrStyle=$_POST['style']; //新建一张表
	$price=$_POST['price'];
	$mun=$_POST['mun'];
	$arrAddress=implode('.', $_POST['address']) ;// 将数组转化成字符串
	   if(!isset($_POST['content'])){
          echo '必须添加商品的详情';
          return false;
	  }
	$content=$_POST['content'];
    if(empty($_FILES['idcard']['name'][0])||empty($_FILES['idcard']['name'][1])){
	      echo '请添加缩略图';
	    return false;
	   }
    //echo $arrAddress;
    $arrInt=count($_FILES['idcard']['name']);

	for ($i=0; $i <$arrInt ; $i++) { 
		$name=$_FILES['idcard']['name'][$i];
		$namefile=$_FILES['idcard']['tmp_name'][$i];
	    $arr=explode('.', $name);
	    $imgname[$i]="../upload/".time().mt_rand(1,100000).'.'.$arr[1];
	    //echo $dir;
	    //die;
	    $bool=move_uploaded_file($namefile,$imgname[$i]);
	}
	//var_dump($bool);
	//echo "<hr/>";
	$timecreate=time();
    $sql="insert into tg_goods(name,price,mun,address,content,pic,pic2,classid,times) values('{$names}',{$price},{$mun},'{$arrAddress}','{$content}','{$imgname[0]}','{$imgname[1]}',{$classID},{$timecreate})";
    $bool=DB::getDB()->query($sql);
   // var_dump($bool);
    //echo '<hr/>';
     $goodsid=DB::getDB()->getinsertid();
    foreach ($arrStyle as $key => $value) {
            $sql2="insert into tg_style(stylename,class_id)values('{$value}',$goodsid)";
            DB::getDB()->query($sql2);
      }

	/*下面是图片*/
	echo "<script  type='text/javascript'>
              alert('添加成功');
              window.location.assign('addgoods.php');
          </script>";






}

