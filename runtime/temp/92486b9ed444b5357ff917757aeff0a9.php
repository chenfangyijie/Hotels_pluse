<?php /*a:1:{s:74:"D:\phpstudy_pro\WWW\seho\Hotel\application\admin\view\subscribe\index.html";i:1577335493;}*/ ?>
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
                    <th>房间号</th>
                    <th>姓名</th>
                    <th>身份证号码</th>
                    <th>房间类型</th>
                    <th>市场价</th>
                    <th>楼层</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($vo['num']); ?></td>
                    <td><?php echo htmlentities($vo['user']); ?></td>
                    <td><?php echo htmlentities($vo['identity']); ?></td>
                    <td><?php echo htmlentities($vo['type']); ?></td>
                    <td>￥<?php echo htmlentities($vo['price']); ?></td>
                    <td><?php echo htmlentities($vo['storey']); ?>F</td>
                    <td>
                        <button type="button" class="layui-btn" onclick="show(<?php echo htmlentities($vo['id']); ?>)">查看</button>
                        <a href="<?php echo url('admin/subscribe/strik_out',['id'=>$vo['id']]); ?>" class="layui-btn">删除</a>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>

        </div>
    </div>

</body>
<script>

    function show(id){
        $.ajax({
            type:"get",
            url: "<?php echo url('admin/subscribe/showlist'); ?>",
            data: {
                id:id,
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
                    area: ['550px', '520px'], //宽高
                    content: data
                });
            }});
    }
</script>
</html>