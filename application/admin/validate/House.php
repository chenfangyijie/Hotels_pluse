<?php

namespace app\admin\validate;

use think\Validate;

class House extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */
    protected $rule = [
        'num'  => 'require|number|unique:house',
        'price'   => 'number',
        'type' => 'require',
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'num.require' => '房间号必须填写',
        'num.unique' => '房间号已经存在',
        'num.number'   => '房间号必须是数字',
        'price.number'  => '请输入正确的价格',
        'type.require'  => '类型不能为空',
    ];
}
