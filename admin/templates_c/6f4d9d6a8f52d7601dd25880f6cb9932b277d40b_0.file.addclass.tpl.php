<?php
/* Smarty version 3.1.30, created on 2017-09-15 08:44:47
  from "D:\phpStudy\WWW\smarty\admin\web\addclass.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59bb227f9da7a3_23168063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f4d9d6a8f52d7601dd25880f6cb9932b277d40b' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty\\admin\\web\\addclass.tpl',
      1 => 1505101529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59bb227f9da7a3_23168063 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1320859bb227f9d2aa0_52449129', 'content');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1294559bb227f9da7a3_28279682', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_1320859bb227f9d2aa0_52449129 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h4 class="btn btn-primary">添加分类</h4>
    <br/><br/>
    <table class="table">

        <tr align="center">
            <td class="active" style="width: 120px">
                <select class="form-control" style="width: 120px">
                    <option value="0">主分类</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <option    value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo str_repeat('->',$_smarty_tpl->tpl_vars['v']->value['num']);
echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </select>
            </td>
            <td class="success" style="width: 120px">
                <input type="text"  class="form-control" name="title" style="width: 150px">
            </td>
            <td class="warning" style="width: 120px;cursor: pointer;" id='addclass' >添加子级分类</td>
        </tr>
    </table>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_1294559bb227f9da7a3_28279682 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        $(function(){
            id=0;
            $("select").change(function(){
                id=$(this).val();
            });
            name ='';
            $("input").change(function(){
                name=$(this).val();
            });
            $('#addclass').hover(function(){
                $('#addclass').css('color','green');
            });
            $('#addclass').mouseout(function(){
                $('#addclass').css('color','');
            });
            $('#addclass').click(function(){

                $.ajax({
                    type:'post',
                    url:'addclass.php',
                    dataType:'json',
                    data:{
                        ids:id,
                        names:name
                    },
                    success:function(data)
                    {
                        if(data.msg=='添加成功')
                                {
                                    alert('添加成功');
                                    /*var add=data.nms;
                                    var inid=data.inserID;*/
                                    /*$('select').append("<option value="+inid+" selected>"+add+"</option>");
                                    $('input').val("");*/
                                    window.location='http://localhost/smarty1/admin/addclass.php';
                                }
                    },
                    beforeSend:function()
                    {
                        if(id==0)
                                {
                                    alert('请选择商品类别');
                                    return false;
                                }
                                if(name=='')
                                        {
                                            alert('商品类别不能为空');
                                            return false;
                                        }
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
