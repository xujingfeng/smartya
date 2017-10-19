{extends file='base/base.tpl'}
{block name='content'}
    <h4 class="btn btn-primary">添加分类</h4>
    <br/><br/>
    <table class="table">

        <tr align="center">
            <td class="active" style="width: 120px">
                <select class="form-control" style="width: 120px">
                    <option value="0">主分类</option>
                    {foreach $arr as $v}
                        <option    value="{$v['id']}">{str_repeat('->',$v['num'])}{$v['title']}</option>
                    {/foreach}
                </select>
            </td>
            <td class="success" style="width: 120px">
                <input type="text"  class="form-control" name="title" style="width: 150px">
            </td>
            <td class="warning" style="width: 120px;cursor: pointer;" id='addclass' >添加子级分类</td>
        </tr>
    </table>
{/block}
{block name='js'}
    <script type="text/javascript">
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
    </script>
{/block}