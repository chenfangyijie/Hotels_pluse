<?php /*a:1:{s:70:"D:\phpstudy_pro\WWW\seho\Hotel\application\admin\view\house\index.html";i:1577335493;}*/ ?>
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
    --房间管理--
</blockquote>
<blockquote class="layui-elem-quote layui-quote-nm">
    <button type="button" class="layui-btn" style="margin-left: 20px;" onclick="add()">
        <i class="layui-icon">&#xe608;</i> 添加房间
    </button>
</blockquote>


    <div class="layui-row">
        <div class="layui-col-md12" style="border: 20px solid #FFFFFF;">
            <table class="layui-table" lay-even lay-skin="nob">
                <colgroup>
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="10%">
                    <col width="20%">
                </colgroup>
                <thead>
<!--                <tr>
                    <th>
                        <button type="button" class="layui-btn" style="margin-left: 20px;" onclick="add()">
                            <i class="layui-icon">&#xe608;</i> 添加房间
                        </button>
                    </th>
                </tr>-->
                <tr>
                    <th><i class="layui-icon layui-icon-home"></i> 房间号</th>
                    <th>房间类型</th>
                    <th>住户</th>
                    <th>住户证件</th>
                    <th>房费</th>
                    <th>状态</th>
                    <th>楼层</th>
                    <th><i class="layui-icon layui-icon-set-sm"></i>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo htmlentities($vo['num']); ?></td>
                    <td><?php echo htmlentities($vo['type']); ?></td>
                    <td>
                        <?php if($vo['user'] == null): ?> 暂无住户
                        <?php else: ?><?php echo htmlentities($vo['user']); ?>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($vo['identity'] == null): ?> 暂无证件
                        <?php else: ?><?php echo htmlentities($vo['identity']); ?>
                        <?php endif; ?>
                    </td>
                    <td>￥<?php echo htmlentities($vo['price']); ?></td>
                    <td>
                        <?php if($vo['status'] == 1): ?> 空闲
                        <?php elseif($vo['status'] == 2): ?>待打扫
                        <?php elseif($vo['status'] == 3): ?>维修中
                        <?php elseif($vo['status'] == 4): ?>预订中
                        <?php elseif($vo['status'] == 0): ?>有人
                        <?php endif; ?>
                    </td>
                    <td><?php echo htmlentities($vo['storey']); ?>F</td>
                    <td>
                        <!--<a href="http://www.layui.com" class="layui-btn">编辑</a>-->
                        <a href="<?php echo url('admin/house/strik_out',['id'=>$vo['id']]); ?>" class="layui-btn">删除</a>
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
</body>
<script>
    function add(){
        window.location.href="<?php echo url('admin/house/addition'); ?>";
//        window.location.href="http://www.baidu.com";
    }
</script>
</html>