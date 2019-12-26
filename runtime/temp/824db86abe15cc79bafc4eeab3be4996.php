<?php /*a:1:{s:71:"D:\phpstudy_pro\WWW\seho\Hotel\application\admin\view\storey\index.html";i:1577335493;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>楼层管理</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <script src="/static/layui/layui.js"></script>
    <script src="/static/resource/js/jquery-1.10.2.min.js"></script>
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <script src="/static/resource/js/bootstrap.min.js"></script>
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
    #triangle-up {
        margin-left: 20%;
        width: 0;
        height: 0;
        border-left: 100px solid transparent;
        border-right: 100px solid transparent;
        border-bottom: 100px solid #333;
    }

</style>
<body>
<blockquote class="layui-elem-quote">
    <i class="layui-icon layui-icon-home" style="font-size: 26px; color: #333;"></i>
    --楼层管理--
</blockquote>
<blockquote class="layui-elem-quote layui-quote-nm">
    <button type="button" class="layui-btn" style="margin-left: 20px;" onclick="add()">
        <i class="layui-icon">&#xe608;</i> 添加楼层
    </button>
</blockquote>

    <div class="layui-row">
        <div class="layui-col-md6" style="margin-left: 1%;">
            <table class="layui-table" lay-even lay-skin="nob">
                <colgroup>
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                </colgroup>
                <thead>
<!--                <tr>
                    <th>
                        <button type="button" class="layui-btn" onclick="add()">
                            <i class="layui-icon">&#xe608;</i> 添加楼层
                        </button>
                    </th>
                </tr>-->
                <tr>
                    <th>ID</th>
                    <th>楼层</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($storey) || $storey instanceof \think\Collection || $storey instanceof \think\Paginator): $i = 0; $__LIST__ = $storey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($vo['id']); ?></td>
                    <td><?php echo htmlentities($vo['num']); ?>F</td>
                    <td>
                        <!--<a href="http://www.layui.com" class="layui-btn">编辑</a>-->
                        <a href="<?php echo url('admin/storey/strik_out',['id'=>$vo['id']]); ?>" class="layui-btn">删除</a>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <div style="text-align: center;margin-right: 100px;">
                <?php echo $storey; ?>
            </div>
        </div>
        <div class="layui-col-md3" style="margin-left: 10%;">
            <div id="triangle-up">

            </div>
            <?php if(is_array($storey) || $storey instanceof \think\Collection || $storey instanceof \think\Paginator): $i = 0; $__LIST__ = $storey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <button type="button" class="layui-btn" style="margin-left: 29%;">
                    &nbsp;&nbsp;&nbsp;&nbsp;--<i class="layui-icon layui-icon-home"></i><?php echo htmlentities($vo['num']); ?>F--&nbsp;&nbsp;&nbsp;&nbsp;
                </button>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>

</body>
<script>
    function add(){
        window.location.href="<?php echo url('admin/storey/addition'); ?>";
//        window.location.href="http://www.baidu.com";
    }
</script>
</html>