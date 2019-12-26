<?php

namespace app\admin\validate;

use think\Validate;

class Move extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = [
        'user'  => 'require|chsAlpha',
        'identity'   => 'require|idCard',
        'move_type' => 'require',
        'move_time' => 'require',
        'expire_time' => 'require',
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'user.require' => '姓名必须填写',
//        'num.unique' => '房间号已经存在',
        'user.chsAlpha'   => '姓名只能是字母或者汉字',
        'identity.require' => '身份证必须填写',
        'identity.idCard'  => '身份证格式不对',
        'move_type.require'  => '入住类型不能为空',
        'move_time.require'  => '入住时间请选择-时分秒',
        'expire_time.require'  => '退房时间请选择-时分秒',
    ];
}
