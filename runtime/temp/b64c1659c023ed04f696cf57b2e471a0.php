<?php /*a:1:{s:72:"D:\phpstudy_pro\WWW\Hotel\application\admin\view\subscribe\showlist.html";i:1576985115;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div style="text-align:center; " id="app">
    <div class="layui-row">
        <div class="layui-col-md12">

            <fieldset class="layui-elem-field layui-field-title">
                <legend><?php echo htmlentities($list['num']); ?>号房间预订详情</legend>
                <div class="layui-field-box">

                    <form class="layui-form layui-form-pane" action="">
                        <div class="layui-form-item" pane>
                            <label class="layui-form-label">姓名</label>
                            <div class="layui-input-block" style="margin-top: 8px;"><?php echo htmlentities($list['user']); ?></div>
                        </div>

                        <div class="layui-form-item" pane style="margin-top: -20px;">
                            <label class="layui-form-label">身份证</label>
                            <div class="layui-input-block" style="margin-top: 10px;"><?php echo htmlentities($list['identity']); ?></div>
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
                                <span><?php echo htmlentities($list['price']); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>类型:</td>
                            <td style="text-align: left">
                                <span><?php echo htmlentities($list['type']); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td>楼层:</td>
                            <td style="text-align: left"><?php echo htmlentities($list['storey']); ?>F</td>
                        </tr>
                        <tr>
                            <td>开始日期:</td>
                            <td style="text-align: left"><?php echo date('Y-m-d H:i',$list['move_time']); ?></td>
                        </tr>
                        <tr>
                            <td>结束日期:</td>
                            <td style="text-align: left"><?php echo date('Y-m-d H:i',$list['expire_time']); ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </fieldset>

        </div>
    </div>
</div>
</body>
</html>