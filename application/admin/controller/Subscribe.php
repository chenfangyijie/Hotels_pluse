<?php
/**
 * Created by PhpStorm.
 * User: Hyacinth
 * Date: 2019/6/22
 * Time: 7:48
 * 预订房间管理
 * 风信子科技
 */
namespace app\admin\controller;

use think\Db;

class Subscribe extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $list = Db::name('house')->where('status',4)->select();
        $this->assign('list',$list);
        return view();
    }

    /**
     * 显示客户详细信息
     *
     * @return \think\Response
     */
    public function showlist()
    {
        $map=[
            'status'=>4,
            'id'=>input('id')
        ];
        $list = Db::name('house')->where($map)->find();
        $this->assign('list',$list);
        return view();
    }

    /**
     * 删除预订客户
     *
     * @return \think\Response
     */
    public function strik_out()
    {
        $data = [
            'status' => 1,
            'user'=>'',
            'identity'=>'',
        ];
        $res = Db::table('house')->where('id',input('id'))->update($data);
        if($res){
            $this->redirect('admin/subscribe/index');
        }else{
            $this->redirect('admin/subscribe/index');
        }
    }
}
