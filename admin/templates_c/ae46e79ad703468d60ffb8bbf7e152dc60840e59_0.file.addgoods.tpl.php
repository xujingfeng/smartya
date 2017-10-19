<?php
/* Smarty version 3.1.30, created on 2017-09-12 09:27:02
  from "D:\phpStudy\WWW\smarty1\admin\web\addgoods.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b7a86634dff9_47797178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae46e79ad703468d60ffb8bbf7e152dc60840e59' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\admin\\web\\addgoods.tpl',
      1 => 1505208418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:base/base.tpl' => 1,
  ),
),false)) {
function content_59b7a86634dff9_47797178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1753259b7a86633e5f7_42972472', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_805259b7a86634dff9_18441593', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3198359b7a86634dff3_15761389', 'js');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:base/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_1753259b7a86633e5f7_42972472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
 src='../static/jquery.validate.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../static/jsAddress.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="../static/bootstrap/js/fileshow.js"> <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_805259b7a86634dff9_18441593 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <form id='form' action="" method="post" enctype="multipart/form-data" style="width: 80%;height: 800px;margin: 80px auto 80px auto">
            <td class="active" style="width: 120px">
              <select class="form-control" style="width: 120px" name='class'>
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


        <h3>商品的添加</h3>
        <span>商品名称</span>
        <input type="text" class="form-control required"  name="user" style="width:50%" >

        <button type="button"  onclick="addstyle()"   class=" btn btn-warning">添加属性</button>
        <p id="p1"></p>
        <?php echo '<script'; ?>
 type="text/javascript">
           function addstyle(){
              hhh = '<input type="text" name="style[]" class="aa"  value="" style="width:20%"/>';
              
                  document.getElementById("p1").innerHTML+=hhh+"属性<br/>";

                 }
        <?php echo '</script'; ?>
>

        <span>商品封面图</span>
        <input type="file" name="idcard[]" onchange='jjj(this)'>
        <div id="preview">
            <img id="imghead" width=100 height=100 border=0 src='blankmain.jpg'>
         </div>
         <span>商品封面图</span>
        <input type="file" name="idcard[]" onchange='jjjj(this)'>
        <div id="previews">
            <img id="imghead" width=100 height=100 border=0 src='blankmain.jpg'>
         </div>
        <span>商品的价格</span>
        <input type="text" class="form-control required" name="price" style="width:20%">
        <span>商品的库存数量</span>
        <input type="text" class="form-control required" name="mun" style="width:20%">
        <span>商品的产地</span>
        

        <div>
          省：<select id="cmbProvince" name="address[]" ></select>
          市：<select id="cmbCity" name="address[]" ></select>
          区：<select id="cmbArea" name="address[]" ></select>
          <?php echo '<script'; ?>
 type="text/javascript">
            addressInit('cmbProvince', 'cmbCity', 'cmbArea', '陕西', '西安市', '雁塔区');
            addressInit('Select1', 'Select2', 'Select3');
          <?php echo '</script'; ?>
>
          <input type="text" class="form-control" placeholder="详细地址例如:XX路XX号XX楼XX层XX房号" aria-describedby="basic-addon1" name="address[]" style="width:50%" >
        </div>
 


        <?php echo '<script'; ?>
 id="container" name="content" type="text/plain" style="height: 800px;">
        <?php echo '</script'; ?>
>
    <input type="submit" value='提交'>
  </form>
    <!-- 配置文件 -->
    <?php echo '<script'; ?>
 type="text/javascript" src="../static/utf8-php/ueditor.config.js"><?php echo '</script'; ?>
>
    <!-- 编辑器源码文件 -->
    <?php echo '<script'; ?>
 type="text/javascript" src="../static/utf8-php/ueditor.all.js"><?php echo '</script'; ?>
>
    <!-- 实例化编辑器 -->
    <?php echo '<script'; ?>
 type="text/javascript">
        var ue = UE.getEditor('container',{
          autoFloatEnabled: true,

          autoHeight: false
        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_3198359b7a86634dff3_15761389 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <?php echo '<script'; ?>
 type="text/javascript">
        $(function(){
             $("#form").validate({
                  rules:{
                    user:{
                       required:true,
                       rangelength:[2,50]
                    },
                    price:{
                       required:true,
                       number:true
                    },
                    mun:{
                       required:true,
                       digits:true
                    }
                  },
                  messages:{
                        user:{
                          required:'商品的名称不能为空', 
                          rangelength:'商品的长度必须是2-50个字符直接'
                        },
                        price:{
                          required:'必须要填写',
                          number:'商品的价格格式不正确'
                        },
                        mun:{
                          required:'必须要填写数量',
                          digits:'商品的数量必须是整数'
                        }
                  }

             });
        })
        
    <?php echo '</script'; ?>
>
   
 
<?php
}
}
/* {/block 'js'} */
}
