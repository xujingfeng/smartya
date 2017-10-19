{extends file='base/base.tpl'}
{block name='content'}
<div class="row">
  <div class="col-md-6">
             <button id="butt">默认排序</button>
             <button id="butt1">价格排序</button>
             <button id="butt2">时间排序</button>
  </div>
  <div>
      <form action="goodslist.php" method="get">
          <div class="input-group" style="margin-left: 10px">

            <input type="text" name='search' class="form-control" placeholder="Search for..." style="width: 80%">
            <span class="input-group-btn" style="margin-left:0px;float: left;">
              <button class="btn btn-default" type="submit" >Go!</button>
            </span>
          </div>
      </form>
    
  </div>

</div>
     <table id='tb' class="table table-bordered">
      <tr align="center" >
      	<th width="5%">序号</th>
      	<th width='10%'>类别</th>
      	<th width="10%">名称</th>
      	<th width="5%">价格</th>
      	<th width="5%">库存</th>
      	<th width="25%">缩略图</th>
      	<th width="15%">日期</th>
      	<th width="25%" colspan="2">操作</th>
      </tr>
      {foreach $arr as $v}
      <tr align="center" >
      	  <td class="active" style="line-height: 70px;">{$v['id']}</td>
      	  <td class="warning" style="line-height: 70px;">{$v['title']}</td>
		      <td class="success" style="line-height: 70px;">{$v['name']}</td>
    		  <td class="warning" style="line-height: 70px;">{$v['price']}</td>
    		  <td class="danger" style="line-height: 70px;">{$v['mun']}</td>
    		  <td class="info"><img src="../upload/{$v['pic']}" width="70px" height="70px"></td>
    		  <td class="danger" style="line-height: 70px;">{date('Y-m-d H:i:s',$v['times'])}</td>
    		  <td class="info" style="line-height: 70px;"><a href="updateGoods.php?id={$v['id']}">修改</a></td>
    		  <td class="info" style="line-height: 70px;"><a href="delet.php?id={$v['id']}" onclick="return dele()">删除</a></td>
      </tr>
      {/foreach}
  </table>
  <script type="text/javascript">
    function dele(){

      return confirm('您确定要删除吗?');
    }
    //价格
    butt.onclick=function(){

      window.location.assign('priceorder.php?pic=price');

    }
    //默认
    butt1.onclick=function(){

      window.location.assign('goodslist.php');

    }
    //时间
    butt2.onclick=function(){

      window.location.assign('createtime.php?time=times');

    }


  </script>
{/block}