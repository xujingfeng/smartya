<?php
/* Smarty version 3.1.30, created on 2017-09-18 16:40:32
  from "D:\phpStudy\WWW\smarty\admin\web\goodslist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bf8680c5a9c1_18838311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95c3c8cc4258042a762fdbebce2c6114cf745ef9' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty\\admin\\web\\goodslist.tpl',
      1 => 1505724016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59bf8680c5a9c1_18838311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2153459bf8680c52cc9_96333466', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2153459bf8680c52cc9_96333466 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
      <tr align="center" >
      	  <td class="active" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
      	  <td class="warning" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
		      <td class="success" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
    		  <td class="warning" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
    		  <td class="danger" style="line-height: 70px;"><?php echo $_smarty_tpl->tpl_vars['v']->value['mun'];?>
</td>
    		  <td class="info"><img src="../upload/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="70px" height="70px"></td>
    		  <td class="danger" style="line-height: 70px;"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['times']);?>
</td>
    		  <td class="info" style="line-height: 70px;"><a href="updateGoods.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a></td>
    		  <td class="info" style="line-height: 70px;"><a href="delet.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="return dele()">删除</a></td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </table>
  <?php echo '<script'; ?>
 type="text/javascript">
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


  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
