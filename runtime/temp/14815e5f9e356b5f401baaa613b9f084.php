<?php /*a:1:{s:71:"D:\phpstudy_pro\WWW\seho\Hotel\application\admin\view\console\show.html";i:1577335493;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/toastr/toastr.min.css">
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.js"></script>
    <script src="/static/toastr/toastr.min.js"></script>
    <script src="/static/layer/layer.js"></script>
</head>
<style>
    .title_menu{
        height: 100px;
        text-align: center;
        font-size: 36px;
        font-weight: bold;
        color: #FFFFFF;
        padding: 25px;
        cursor: pointer;
    }
    .title_menu:hover{
        border: 2px solid #F3F3F3;
    }

</style>
<body>
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md12">

            <?php if($list['status'] == 1): ?>
                <div class="layui-col-md4 title_menu" style="background-color: #1E9FFF;" onclick="check_in(<?php echo htmlentities($list['id']); ?>)">
                    <span>入住</span>
                </div>
            <?php elseif($list['status'] == 2): ?>
                <div class="layui-col-md4 title_menu" style="background-color: #1E9FFF;" onclick="Clean()">
                    <span>待打扫</span>
                </div>
            <?php elseif($list['status'] == 3): ?>
                <div class="layui-col-md4 title_menu" style="background-color: #1E9FFF;" onclick="Repair()">
                    <span>维修中</span>
                </div>
            <?php elseif($list['status'] == 4): ?>
                <div class="layui-col-md4 title_menu" style="background-color: #1E9FFF;" onclick="Book()">
                    <span>预订中</span>
                </div>
            <?php elseif($list['status'] == 0): ?>
                <div class="layui-col-md4 title_menu" style="background-color: #1E9FFF;" onclick="exit(<?php echo htmlentities($list['id']); ?>)">
                    <span>退房</span>
                </div>
            <?php endif; ?>

            <div class="layui-col-md4 title_menu" style="background-color: #FF5722;" onclick="status(<?php echo htmlentities($list['id']); ?>)">
                <span>
                    <?php if($list['status'] == 1): ?> 空闲
                    <?php elseif($list['status'] == 2): ?>待打扫
                    <?php elseif($list['status'] == 3): ?>维修中
                    <?php elseif($list['status'] == 4): ?>预订中
                    <?php elseif($list['status'] == 0): ?>有人
                    <?php endif; ?>
                </span>
            </div>

            <?php if(($list['status'] == 0) OR ($list['status'] == 4)): ?>
                <div class="layui-col-md4 title_menu" style="background-color: #FFB800;" onclick="exit(<?php echo htmlentities($list['id']); ?>)">
                    <span>退房</span>
                </div>
            <?php endif; if($list['status'] == 1): ?>
                <div class="layui-col-md4 title_menu" style="background-color: #FFB800;" onclick="subscribe(<?php echo htmlentities($list['id']); ?>)">
                    <span>预订</span>
                </div>
            <?php endif; ?>

<!--            <div class="layui-col-md4 title_menu" style="background-color: #FF5722;" onclick="exit(<?php echo htmlentities($list['id']); ?>)">
                <span>测试</span>
            </div>-->

            <hr> <blockquote class="layui-elem-quote layui-quote-nm"><?php echo htmlentities($list['num']); ?>号房间</blockquote>

            <fieldset class="layui-elem-field layui-field-title">
                <legend>房间信息</legend>
                <div class="layui-field-box">
                    <table class="layui-table" lay-even lay-skin="nob">
                        <colgroup>
                            <col width="150">
                            <col width="200">
                        </colgroup>

                        <tbody>

                        <?php if(( $list['status'] == 0) OR ( $list['status'] == 4)): ?>
                            <tr>
                                <td>姓名</td>
                                <td><?php echo htmlentities($list['user']); ?></td>
                            </tr>
                            <tr>
                                <td>身份证信息</td>
                                <td><?php echo htmlentities($list['identity']); ?></td>
                            </tr>
                            <tr>
                                <td>入住时间</td>
                                <td><?php echo date('Y-m-d H:i',$list['move_time']); ?></td>
                            </tr>
                        <tr>
                            <td>到期时间</td>
                            <td><?php echo date('Y-m-d H:i',$list['expire_time']); ?></td>
                        </tr>
                        <?php endif; ?>

                        <tr>
                            <td>价格</td>
                            <td>￥<?php echo htmlentities($list['price']); ?></td>
                        </tr>
                        <tr>
                            <td>类型</td>
                            <td><?php echo htmlentities($list['type']); ?></td>
                        </tr>
                        <tr>
                            <td>楼层</td>
                            <td><?php echo htmlentities($list['storey']); ?>F</td>
                        </tr>
                        <tr>
                            <td>状态</td>
                            <td>
                                <?php if($list['status'] == 1): ?> 空闲
                                <?php elseif($list['status'] == 2): ?>待打扫
                                <?php elseif($list['status'] == 3): ?>维修中
                                <?php elseif($list['status'] == 4): ?>预订中
                                <?php elseif($list['status'] == 0): ?>有人
                                <?php endif; ?>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </fieldset>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script>
    /*入住房间*/
    function check_in(id){
        $.ajax({
            type:"get",
            url: "<?php echo url('admin/console/register'); ?>",
            data: {
                id:id
            },
            //回调函数
            success: function(data){
                var index = layer.open({
                    type: 1,
                    title: "入住登记",
                    skin: 'layui-layer-black', //样式类名
                    shadeClose: true,
                    shade: 0.4,
                    anim: 2,
                    area: ['550px', '550px'], //宽高
                    content: data
                });
            }});
    }
    /*更改房间状态*/
    function status(id){
        $.ajax({
            type:"get",
            url: "<?php echo url('admin/console/state'); ?>",
            data: {
                id:id
            },
            //回调函数
            success: function(data){
                var index = layer.open({
                    type: 1,
                    title: "修改状态",
                    skin: 'layui-layer-black', //样式类名
                    shadeClose: true,
                    shade: 0.4,
                    anim: 2,
                    area: ['500px', '320px'], //宽高
                    content: data
                });
            }});
    }
    /*退房间*/
    function exit(id){
        $.ajax({
            type:"post",
            url: "<?php echo url('admin/console/check_out'); ?>",
            data: {
                id:id,
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
    }
    /*预定房间*/
    function subscribe(id){
        $.ajax({
            type:"get",
            url: "<?php echo url('admin/console/subscribe'); ?>",
            data: {
                id:id
            },
            //回调函数
            success: function(data){
                var index = layer.open({
                    type: 1,
                    title: "预定房间",
                    skin: 'layui-layer-black', //样式类名
                    shadeClose: true,
                    shade: 0.4,
                    anim: 2,
                    area: ['550px', '550px'], //宽高
                    content: data
                });
            }});
    }
    /*待打扫房间*/
    function Clean(){
        alert('打扫中');
    }
    /*待维修房间*/
    function Repair(){
        alert('维修中');
    }
    /*预订房间房间*/
    function Book(){
        alert('已经预订');
    }
</script>
</html>