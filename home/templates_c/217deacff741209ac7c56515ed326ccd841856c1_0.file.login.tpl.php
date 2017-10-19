<?php
/* Smarty version 3.1.30, created on 2017-09-13 03:48:19
  from "D:\phpStudy\WWW\smarty1\web\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b8aa838246e3_27673532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '217deacff741209ac7c56515ed326ccd841856c1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\web\\login.tpl',
      1 => 1505273960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59b8aa838246e3_27673532 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2739459b8aa8381c9e2_18735555', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1368359b8aa83820863_63651538', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2739459b8aa8381c9e2_18735555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class='col-md-4'></div>
  <div class="col-md-4">
    <form role="form" id='form'>
   <div class="form-group">
      <label for="name">用户名</label>
      <input type="text" name='user' class="form-control" id="name" 
         placeholder="请输入名称">
   </div>
   <div class="form-group">
      <label for="password">密码</label>
      <input type="password" name="pwd" class="form-control" id="password" 
         placeholder="请输入名称">
   </div>
   <div class="checkbox">
      <label>
      <input type="checkbox"> 记住密码
      </label>
   </div>
   <button type="button" id='submit' class="btn btn-default">提交</button>
</form>
    <div id='show' style="display: none">
      <h4>数据交互中...</h4>
      <img src="../static/timg.gif">
    </div>
  </div>
  <div class="col-md-4"></div>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_1368359b8aa83820863_63651538 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
    $(function(){
    	$('#submit').click(function(){
    		$.ajax({
    			type:'post',
    			url:'login.php',
    			//dataType:"text",
    			data:$('#form').serialize(),
    			success:function(data)
    			{
            $('#show').hide();
    				var obj=JSON.parse(data);
            if(obj.status==1)
            {
              window.history.back();
            }
            alert(obj.msg);

                    
    			},
    			beforeSend:function()
    			{
    				var user=$('input[name=user]').val();
              	    var pwd=$('input[name=pwd]').val();
              	    if(user=='')
              	    {
              	    	alert('用户名不能为空');
              	    	return false;
              	    }
              	    else{
              	       if(pwd=="")
              	    {
              	    	alert('请输入密码');
              	    	return false;

              	    }	
              	    }
              	    $('#show').show();
                    $('#form').hide();
    			}
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
