<?php
/**
 * Created by PhpStorm.
 * User: Hyacinth
 * Date: 2019/6/22
 * Time: 7:48
 * 登录管理
 * 风信子科技
 */
namespace app\admin\controller;

use think\Controller;
use think\Db;
use think\Request;

class Login extends Controller
{
    /**
     * 验证登录信息
     *
     * @return \think\Response
     */
    public function index()
    {
        if(request()->isPost()){
            $result = Db::table('admin')->where('name',input('name'))->find();
            if($result){
               if($result['password'] === md5(input('password'))){
                   session('admin', $result['name']);
                   return $this->return_json('登录成功！',100);
               }else{
                   return $this->return_json('密码错误！',0);
               }
            }else{
                return $this->return_json('账号密码错误！',0);
            }
        }
        return view();
    }

    /**
     * 退出登录.
     *
     * @return \think\Response
     */
    public function logout()
    {
        // 清除session（当前作用域）
        session(null);
        $this->redirect('/admin/login/index');
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
}
