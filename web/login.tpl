{extends file='base/base.tpl'}
{block name='content'}
  <div class='col-md-4'></div>
  <div class="col-md-4">
  <div style="width: 490px; height: 470px; border:1px solid skyblue; border-radius:20px; background:url('{$url}static/img.jpg');background-size:100% 100%; ">
  <div style='width:330px;height:400px;margin:80px auto;font-family: 华文新魏;font-size:20px;'>
    <h2 align="center" style='color:pink; '>登录主界面</h2>
    <form role="form" id='form'>
   <div class="form-group">
      <label for="name">用户名</label>
      <input type="text" name='user' class="form-control" id="name" 
         placeholder="请输入用户名">
   </div>
   <div class="form-group">
      <label for="password">密码</label>
      <input type="password" name="pwd" class="form-control" id="password" 
         placeholder="请输入密码">
   </div>
   <div class="checkbox">
      <label>
      <input type="checkbox"> 记住密码
      </label>
   </div>
   <button type="button" id='submit' class="btn btn-default">提交</button>
</form>
    <div id='show' style="display: none; position: absolute;">
      <h4>数据交互中...</h4>
      <img src="../static/timg.gif" width="330px">
    </div>
  </div>
  </div> 
  </div>
  
  <div class="col-md-4"></div>
{/block}
{block name='js'}
  <script>
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
            }else{
               password.value='';
               $('#form').show();
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
  </script>
{/block}