<?php /*a:1:{s:69:"D:\phpstudy_pro\WWW\Hotel\application\admin\view\storey\addition.html";i:1576991818;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <script src="/static/layui/layui.js"></script>
    <link rel="stylesheet" href="/static/toastr/toastr.min.css">
    <!--<script src="https://cdn.bootcss.com/jquery/2.1.2/jquery.min.js"></script>-->
    <script src="/static/resource/js/jquery-1.10.2.min.js"></script>
    <script src="/static/toastr/toastr.min.js"></script>
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
<blockquote class="layui-elem-quote">
    <i class="layui-icon layui-icon-home" style="font-size: 26px; color: #333;"></i>
    --楼层管理--
</blockquote>
<hr class="layui-bg-black">

<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md12" style="border: 20px solid #FFFFFF;">
            <table class="layui-table" lay-skin="nob">
                <colgroup>
                    <col width="20%">
                </colgroup>
                <thead>
                <tr>
                    <th><a href="<?php echo url('admin/storey/index'); ?>" class="layui-btn">返回上一步</a></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <span>楼层：</span>
                        <input type="text" name="num" id="num" placeholder="请输入楼层" autocomplete="off" class="layui-input">
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                <button class="layui-btn"  onclick="add()">新增楼层</button>
<!--                                <button type="reset" class="layui-btn layui-btn-primary">重置</button>-->
                            </div>
                        </div>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
<script>
    function add(){
        if($('#num').val() == ''){
            toastr.error("楼层不能为空");
            return false;
        }
        $.ajax({
            type:"post",
            url: "<?php echo url('admin/storey/addition'); ?>",
            data: {
                num:$('#num').val(),
            },
            //回调函数
            success: function(data){
//				console.log(data);
                if(data.code == 100){
                    toastr.success(data.msg);
                    setTimeout(function () {

                        window.location.href="<?php echo url('admin/storey/index'); ?>";
                    },1000);
                }else {
                    toastr.error(data.msg);
                }
            }});
    }
</script>
</html>