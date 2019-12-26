<?php /*a:2:{s:67:"D:\phpstudy_pro\WWW\Hotel\application\admin\view\console\index.html";i:1576985115;s:67:"D:\phpstudy_pro\WWW\Hotel\application\admin\view\common\storey.html";i:1576985115;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <script src="/static/layui/layui.js"></script>
    <link rel="stylesheet" href="/static/toastr/toastr.min.css">
    <script src="/static/resource/js/jquery-1.10.2.min.js"></script>
    <script src="/static/toastr/toastr.min.js"></script>
</head>
<style>
    .lists{
        width: 100px;
        height: 100px;
        margin: 20px;
        padding: 10px;;
        text-align: center;
        color: #FFFFFF;
        font-size: 24px;;
    }
</style>
<body>

<div class="layui-row">

    <button type="button" class="layui-btn layui-btn-normal" style="margin: 10px;">
    <i class="layui-icon">&#xe68e;</i>空闲
</button>
<button type="button" class="layui-btn layui-btn-danger">
    <i class="layui-icon">&#xe66f;</i>有人
</button>
<button type="button" class="layui-btn layui-btn-warm">
    <i class="layui-icon">&#xe636;</i>待打扫
</button>
<button type="button" class="layui-btn layui-btn-repair">
    <i class="layui-icon">&#xe631;</i>维修中
</button>

<fieldset class="layui-elem-field layui-field-title">
    <?php if(is_array($storey) || $storey instanceof \think\Collection || $storey instanceof \think\Paginator): $i = 0; $__LIST__ = $storey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sto): $mod = ($i % 2 );++$i;?>
    <legend><?php echo htmlentities($sto['num']); ?>F - 房间分布图</legend>
    <div class="layui-field-box">
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['storey'] == $sto['num']): if($vo['status'] == 1): ?>
                    <button type="button" class="layui-btn layui-btn-normal" style="margin: 10px;">
                        <i class="layui-icon">&#xe68e;</i>
                        <a href="<?php echo url('admin/console/show',['id'=>$vo['id']]); ?>">
                            <?php echo htmlentities($vo['num']); ?>号空闲
                        </a>
                    </button>
                <?php elseif($vo['status'] == 2): ?>
                    <button type="button" class="layui-btn layui-btn-warm" style="margin: 10px;">
                        <i class="layui-icon">&#xe636;</i>
                        <a href="<?php echo url('admin/console/show',['id'=>$vo['id']]); ?>">
                            <?php echo htmlentities($vo['num']); ?>号待打扫
                        </a>
                    </button>
                <?php elseif($vo['status'] == 3): ?>
                <button type="button" class="layui-btn layui-btn-repair" style="margin: 10px;">
                    <i class="layui-icon">&#xe631;</i>
                    <a href="<?php echo url('admin/console/show',['id'=>$vo['id']]); ?>">
                        <?php echo htmlentities($vo['num']); ?>号维修中
                    </a>
                </button>
                <?php elseif($vo['status'] == 4): ?>
                <button type="button" class="layui-btn layui-btn-repair" style="margin: 10px;">
                    <i class="layui-icon">&#xe631;</i>
                    <a href="<?php echo url('admin/console/show',['id'=>$vo['id']]); ?>">
                        <?php echo htmlentities($vo['num']); ?>号预订中
                    </a>
                </button>
                <?php elseif($vo['status'] == 0): ?>
                    <button type="button" class="layui-btn layui-btn-danger" style="margin: 10px;">
                        <i class="layui-icon">&#xe66f;</i>
                        <a href="<?php echo url('admin/console/show',['id'=>$vo['id']]); ?>">
                            <?php echo htmlentities($vo['num']); ?>号有人
                        </a>
                    </button>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</fieldset>
<!--

<fieldset class="layui-elem-field layui-field-title">
    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <legend>1F - 房间分布图</legend>
    <div class="layui-field-box">

        <?php if($vo['status'] == 1): ?>
        <div class="lists layui-col-md4" style="background-color: #0997F7;">
            <span><?php echo htmlentities($vo['num']); ?>号</span>
            <p>空闲</p>
        </div>
        <?php elseif($vo['status'] == 2): ?>
        <div class="lists layui-col-md4" style="background-color: darkgreen;">
            <span><?php echo htmlentities($vo['num']); ?>号</span>
            <p>待打扫</p>
        </div>
        <?php else: ?>
        <div class="lists layui-col-md4" style="background-color: goldenrod;">
            <span><?php echo htmlentities($vo['num']); ?>号</span>
            <p>有人</p>
        </div>
        <?php endif; ?>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</fieldset>-->

</div>

</body>
</html>