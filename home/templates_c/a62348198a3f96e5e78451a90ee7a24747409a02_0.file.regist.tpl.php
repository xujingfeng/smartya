<?php
/* Smarty version 3.1.30, created on 2017-09-15 17:18:41
  from "D:\phpStudy\WWW\smarty\web\regist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bb9af16bc020_37494903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a62348198a3f96e5e78451a90ee7a24747409a02' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty\\web\\regist.tpl',
      1 => 1505467111,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59bb9af16bc020_37494903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_796859bb9af16b4325_21647035', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_687359bb9af16bc020_59561484', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_796859bb9af16b4325_21647035 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class='col-md-4'></div>
  <div class='col-md-4'>
  <div style="width: 490px; height: 470px; border:1px solid skyblue; border-radius:20px; background:url('<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
static/img.jpg');background-size:100% 100%; ">
  <div style='width:330px;height:400px;margin:80px auto;font-family: 华文新魏; font-size:20px;'>
  <h2 align="center" style='color:pink; '>注册界面</h2>
    <form id='form'>
		  <div class="form-group">
		    <label for="exampleInputEmail1">用户名</label>
		    <input type="text" name='user' class="form-control" id="exampleInputEmail1" placeholder="请输入用户名">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">密码</label>
		    <input type="password" name='pwd' class="form-control" id="exampleInputPassword1" placeholder="请输入密码">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">确认密码</label>
		    <input type="password" name='pwd2' class="form-control" id="exampleInputPassword1" placeholder="请确认密码">
		  </div>
		  <button type="button" class="btn btn-default" id='submit'>注册</button>
		</form>
  </div>
  </div>
  </div>
  <div class='col-md-4'></div>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_687359bb9af16bc020_59561484 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
    $(function(){
    	$('#submit').click(function(){
    		$.ajax({
    			type:'post',
    			url:'regist.php',
    			data:$('#form').serialize(),
    			success:function(data)
    			{
    				var obj=JSON.parse(data);
    				if(obj.msg=='恭喜您注册成功')
                    {
                    	alert(obj.msg+'请登录');
                    	window.location='http://localhost/smarty1/home/login.php';
                    }
                    else
                    {
                      alert(obj.msg);
                    }
                    
    			},
    			beforeSend:function()
    			{
                  var user=$('input[name=user]').val();
              	var pwd1=$('input[name=pwd]').val();
              	var pwd2=$('input[name=pwd2]').val();
              	   	   	    if(user==''){
              	   	   	    	alert('用户名不能为空');
              	   	   	    	return false;
              	   	   	    }
              	   	   	    if(pwd1!=pwd2 || pwd1==''){
                                alert('两次密码不一致,或者密码为空');
                                return false;
              	   	   	    }
    			},
    		});
    	});
    });
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'js'} */
}
