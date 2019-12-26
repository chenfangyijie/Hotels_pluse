<?php /*a:1:{s:76:"D:\phpstudy_pro\WWW\seho\Hotel\application\admin\view\member_card\index.html";i:1577335493;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>房间管理</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <!--<script src="/static/layui/layui.js"></script>-->
    <script src="/static/resource/js/jquery-1.10.2.min.js"></script>
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <script src="/static/resource/js/bootstrap.min.js"></script>
    <script src="/static/layer/layer.js"></script>
</head>
<style>
    .layui-btn {
        display: inline-block;
        height: 38px;
        line-height: 38px;
        background-color: #323232;
        color: rgb(255, 255, 255);
        white-space: nowrap;
        text-align: center;
        font-size: 14px;
        cursor: pointer;
        padding: 0px 18px;
        border-width: initial;
        border-style: none;
        border-color: initial;
        border-image: initial;
        border-radius: 2px;
    }
</style>
<body>

<div class="layui-row">
    <div class="layui-col-md12" style="border: 20px solid #FFFFFF;">
        <table class="layui-table" lay-even lay-skin="nob">
            <colgroup>
                <col width="10%">
                <col width="10%">
                <col width="10%">
                <col width="10%">
                <col width="20%">
            </colgroup>
            <thead>
            <tr>
                <th>姓名</th>
                <th>身份证号码</th>
                <th>手机号</th>
                <th>会员级别</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>陈大牛</td>
                <td>371325154485</td>
                <td>10086</td>
                <td>普通会员</td>
                <td>
                    <a href="http://www.layui.com" class="layui-btn">编辑</a>
                    <a href="http://www.layui.com" class="layui-btn">删除</a>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
</div>

</body>
<script>
    function add(){
        window.location.href="<?php echo url('admin/house/addition'); ?>";
//        window.location.href="http://www.baidu.com";
    }

    function add(){
        $.ajax({
            type:"get",
            url: "<?php echo url('admin/subscribe/register'); ?>",
            data: {
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
</script>
</html>