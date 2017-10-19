<?php 
  include_once('config.php');
  $methodType=$_SERVER['REQUEST_METHOD'];
  if($methodType=='GET')
  {
      $smarty->display('regist.tpl');
  }
  else
  {
  	$data=$_POST;
    $data['user']=trim(strip_tags($data['user']));
    $data['pwd']=trim(strip_tags($data['pwd']));
    $sqls="select user from tg_user where user='{$data['user']}'";
    $arr1=DB::getDB()->login($sqls);
    if(!$arr1)
    {
      $time=time();
      $sql="insert into tg_user(user,pwd,create_time) values('{$data['user']}',MD5('{$data['pwd']}'),{$time})";
      $bool=DB::getDB()->query($sql);
      //var_dump($bool);
      if($bool)
      {
        $arr= ['status'=>1,'msg'=>'恭喜您注册成功']; 
              echo  json_encode($arr);
      }
      else{
        $arr=['status'=>0,'msg'=>'失败']; 
            echo  json_encode($arr);
      }
    }
  	else
    {
      $arr=['status'=>0,'msg'=>'用户名已经被注册'];
      echo json_encode($arr);
    }
  }
 