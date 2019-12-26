<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Base extends Controller
{
    /*入住状态
    1 空闲
    2  待打扫
    3 维修中
    0 有人*/
    protected $model;
    protected $validate;
    /**
     * 初始化并验证登录状态
     */
    protected function initialize()
    {
        if(!session('admin')){
//            return redirect('/admin/login/index');
            $this->redirect('/admin/login/index');
        }
    }
    /**
     * 公共的验证方法
     */
    public function checkDate($data)
    {
        if(!$this->validate->check($data)){
            $this->error($this->validate->getError());
        }
    }

    /**
     * 返回json数据
     *
     */
    public function return_json($msg,$code)
    {
        return json([
            'msg'=>$msg,
            'code'=>$code
        ]);
    }
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
