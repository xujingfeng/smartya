<?php
/* Smarty version 3.1.30, created on 2017-09-15 10:05:46
  from "D:\phpStudy\WWW\smarty\admin\web\showdelet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bb357ac43620_52993689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a7e3e2e63ebc11dd959b43088a426c70f5603a' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty\\admin\\web\\showdelet.tpl',
      1 => 1505441142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59bb357ac43620_52993689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_539159bb357ac3f7a0_61760167', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_539159bb357ac3f7a0_61760167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
    		  <td class="info"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
" width="70px" height="70px"></td>
    		  <td class="danger" style="line-height: 70px;"><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['v']->value['times']);?>
</td>
    		  <td class="info" style="line-height: 70px;"><a href="updelet.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="return dele()">彻底清除</a></td>
    		  <td class="info" style="line-height: 70px;"><a href="show.php?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="return show()">还原</a></td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </table>
  <?php echo '<script'; ?>
 type="text/javascript">
    function show(){

      return confirm('是否还原');

    }
    function dele(){

      return confirm('是否清空?');

    }
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
