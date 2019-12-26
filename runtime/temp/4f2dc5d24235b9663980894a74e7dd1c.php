<?php /*a:1:{s:67:"D:\phpstudy_pro\WWW\Hotel\application\admin\view\console\state.html";i:1577003397;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <script src="/static/layui/layui.js"></script>
    <link rel="stylesheet" href="/static/toastr/toastr.min.css">
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.js"></script>
    <script src="/static/toastr/toastr.min.js"></script>
    <script src="/static/layer/layer.js"></script>
</head>
<body>

<!--    <div class="layui-row" style="text-align: center">
        <div class="layui-col-md6" style="background-color: #1E9FFF;width: 50%;height: 100px;" onclick="status1(<?php echo htmlentities($list['id']); ?>)">
           <span>空闲</span>
        </div>
        <div class="layui-col-md6" style="background-color: #FF5722;width: 50%;height: 100px;" onclick="status2(<?php echo htmlentities($list['id']); ?>)">
            <span>有人</span>
        </div>
        <div class="layui-col-md6" style="background-color: #FFB800;width: 50%;height: 100px;" onclick="status3(<?php echo htmlentities($list['id']); ?>)">
            <span>待打扫</span>
        </div>
        <div class="layui-col-md6" style="background-color: #808080;width: 50%x;height: 100px;" onclick="status4(<?php echo htmlentities($list['id']); ?>)">
            <span>维修中</span>
        </div>
    </div>-->

    <table class="layui-table">

        <thead>
        <tr>
            <th>更改状态</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <button type="button" class="layui-btn layui-btn-normal" onclick="status1(<?php echo htmlentities($list['id']); ?>)">
                <i class="layui-icon"></i>空闲
                </button>

                <button type="button" class="layui-btn layui-btn-danger" onclick="status2(<?php echo htmlentities($list['id']); ?>)">
                    <i class="layui-icon"></i>有人
                </button>
                <button type="button" class="layui-btn layui-btn-warm" onclick="status3(<?php echo htmlentities($list['id']); ?>)">
                    <i class="layui-icon"></i>待打扫
                </button>
                <button type="button" class="layui-btn layui-btn-repair" onclick="status4(<?php echo htmlentities($list['id']); ?>)">
                    <i class="layui-icon"></i>维修中
                </button>
            </td>
        </tr>
        </tbody>
    </table>
    <fieldset class="layui-elem-field layui-field-title">
        <legend>更改房间状态</legend>
        <div class="layui-field-box">

            <blockquote class="layui-elem-quote"> --选择对应的操作即可--</blockquote>
        </div>
    </fieldset>

</body>
<script>
    function status1(id){
        $.ajax({
            type:"post",
            url: "<?php echo url('admin/console/state'); ?>",
            data: {
                id:id,
                status:1, //空闲
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

    function status2(id){
        $.ajax({
            type:"post",
            url: "<?php echo url('admin/console/state'); ?>",
            data: {
                id:id,
                status:0, //有人
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

    function status3(id){
        $.ajax({
            type:"post",
            url: "<?php echo url('admin/console/state'); ?>",
            data: {
                id:id,
                status:2, //待打扫
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

    function status4(id){
        $.ajax({
            type:"post",
            url: "<?php echo url('admin/console/state'); ?>",
            data: {
                id:id,
                status:3, //维修中
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
</script>
</html>