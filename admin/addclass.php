                              <?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2017/9/10
 * Time: 22:56
 */
require_once('config.php');
$methodType=$_SERVER['REQUEST_METHOD'];
if($methodType=='GET')
{
    $sql="select id,title,pid from tg_class";
    $arr=DB::getDB()->select($sql);
    $smarty->assign('arr',$arr);
    $smarty->display('addclass.tpl');
}
else
    {
        $data=$_POST;
        $sqls="insert into tg_class(title,pid) value('{$data['names']}',{$data['ids']})";
        $bool=DB::getDB()->query($sqls);
        $inserID=DB::getDB()->getinsertId();
        if($bool){
            $arr= ['status'=>1,'msg'=>'添加成功','nms'=>$data['names'],'inserID'=>$inserID];
        }else{
            $arr= ['status'=>0,'msg'=>'添加失败'];
        }
        echo json_encode($arr);
    }