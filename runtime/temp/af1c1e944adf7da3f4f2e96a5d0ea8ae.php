<?php /*a:1:{s:68:"D:\phpstudy_pro\WWW\Hotel\application\admin\view\jointime\index.html";i:1576991931;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>房间管理</title>
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
</style>
<body>
<blockquote class="layui-elem-quote">
    <i class="layui-icon layui-icon-home" style="font-size: 26px; color: #333;"></i>
    --时长管理--
</blockquote>
<hr class="layui-bg-black">
<div class="layui-container">
    <div class="layui-row">
        <div class="layui-col-md6" style="margin-left: 20%;">
            <table class="layui-table" lay-even lay-skin="nob">
                <colgroup>
                    <col width="20%">
                    <col width="20%">
                    <col width="20%">
                </colgroup>
                <thead>
                <tr>
                    <th>
                        <button type="button" class="layui-btn"  onclick="add()">
                            <i class="layui-icon">&#xe608;</i> 添加时长
                        </button>
                    </th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th>名称</th>
                    <th>时长</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($vo['id']); ?></td>
                    <td><?php echo htmlentities($vo['name']); ?></td>
                    <td>

                        <?php if($vo['num'] >= 1): ?><?php echo htmlentities($vo['num']); ?>天
                        <?php elseif($vo['num'] < 0.1): ?><?php echo htmlentities($vo['num'] * 24 * 10); ?>小时
                        <?php else: ?> <?php echo htmlentities($vo['num'] * 24); ?>小时
                        <?php endif; ?>
                    </td>
                    <td>
                        <!--<a href="http://www.layui.com" class="layui-btn">编辑</a>-->
                        <a href="<?php echo url('admin/Jointime/strik_out',['id'=>$vo['id']]); ?>" class="layui-btn">删除</a>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <div style="text-align: center;margin-right: 100px;">
                <?php echo $list; ?>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    function add(){
        window.location.href="<?php echo url('admin/Jointime/addition'); ?>";
//        window.location.href="http://www.baidu.com";
    }
</script>
</html>