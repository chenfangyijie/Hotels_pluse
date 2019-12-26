<?php /*a:1:{s:70:"D:\phpstudy_pro\WWW\Hotel\application\admin\view\console\register.html";i:1576985115;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <script src="/static/layui/layui.js"></script>

</head>
<body>
<div style="text-align:center; " id="app">
    <div class="layui-row">
        <div class="layui-col-md12">

            <fieldset class="layui-elem-field layui-field-title">
                <legend><?php echo htmlentities($house['num']); ?>号房间入住登记</legend>
                <div class="layui-field-box">

                    <form class="layui-form layui-form-pane" action="">
                        <div class="layui-form-item" pane>
                            <label class="layui-form-label">姓名</label>
                            <div class="layui-input-block">
                                <input type="text" name="title" id="user" placeholder="请输入姓名" autocomplete="off" class="layui-input">
                            </div>
                        </div>

                        <div class="layui-form-item" pane style="margin-top: -20px;">
                            <label class="layui-form-label">身份证</label>
                            <div class="layui-input-block">
                                <input type="text" name="title" id="identity" placeholder="请输入身份证号码" autocomplete="off" class="layui-input">
                            </div>
                        </div>
                    </form>
                </div>
            </fieldset>

            <fieldset class="layui-elem-field layui-field-title" style="margin-top: -30px;">
                <legend>入住详情</legend>
                <div class="layui-field-box">
                    <table class="layui-table" lay-even lay-skin="nob">
                        <tbody>
                        <tr>
                            <td>单价:</td>
                            <td style="text-align: left">
                                <span><?php echo htmlentities($house['price']); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>类型:</td>
                            <td style="text-align: left">
                                <span><?php echo htmlentities($house['type']); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>楼层:</td>
                            <td style="text-align: left"><?php echo htmlentities($house['storey']); ?>F</td>
                        </tr>
                        <tr>
                            <td>入住类型</td>
                            <td style="text-align: left">
                                <select name="city" id="move_type" v-model='choice'>
                                    <option value="">请选择</option>
                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <option value="<?php echo htmlentities($vo['num']); ?>"><?php echo htmlentities($vo['name']); ?></option>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </fieldset>

            <fieldset class="layui-elem-field layui-field-title"  style="margin-top: -30px;">
                <legend>房租结算</legend>
                <div class="layui-field-box">
                    <table class="layui-table" lay-even lay-skin="nob">
                        <colgroup>
                            <col width="80">
                            <col width="100">
                            <col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th>房费</th>
                            <th>
                                <p v-if='choice < 1'>￥<?php echo htmlentities($house['price']); ?></p>
                                <p v-else>￥{{choice*<?php echo htmlentities($house['price']); ?>}}</p>
                            </th>
                            <th>
                                <button type="button" class="layui-btn" style="margin-left: 20px;" onclick="add11()">
                                    <i class="layui-icon">&#xe655;</i> 打印票据
                                </button>
                                <button type="button" class="layui-btn" style="margin-left: 20px;" @click='add(<?php echo htmlentities($house['id']); ?>)'>
                                    <i class="layui-icon">&#xe672;</i> 登记
                                </button>
                            </th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </fieldset>
        </div>
    </div>
</div>



</body>
<script src="https://cdn.bootcss.com/jquery/1.12.0/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<script>
    new 	Vue({
        el:'#app',
        data:{
            msg:'小明',
            choice:''
        },
        methods:{
            add:function(id){
                $.ajax({
                    type:"post",
                    url: "<?php echo url('admin/console/register'); ?>",
                    data: {
                        id:id,
                        user:$('#user').val(),
                        identity:$('#identity').val(),
                        move_type:$('#move_type').val(),
                    },
                    //回调函数
                    success: function(data){
//				console.log(data);
                        if(data.code == 100){
                            toastr.success(data.msg);
                            setTimeout(function () {
                                window.location.href="<?php echo url('admin/console/index'); ?>";
                            },1000);
                        }else {
                            toastr.error(data.msg);
                        }
                    }});
            },
            action2:function(){
                this. msg='明哥我走了哈哈'
            }
        }
    })
</script>
</html>