<?php
/**
 * Created by PhpStorm.
 * User: Hyacinth
 * Date: 2019/6/22
 * Time: 7:48
 * 添加房间
 * 风信子科技
 */
namespace app\admin\controller;

use think\Db;

class House extends Base
{
    protected function initialize()
    {
//        $this->validate = new \app\admin\validate\House();
    }
    /**
     * 显示房间
     *
     * @return \think\Response
     */
    public function index()
    {
        $list = Db::name('house')->order('num', 'asc')->paginate(8);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        return view();
    }

    /**
     * 添加房间
     *
     * @return \think\Response
     */
    public function addition()
    {
        if(request()->isPost()){
            $data = input('param.');
            $validate = new \app\admin\validate\House();
            if (!$validate->check($data)) {
                return json([
                    'msg'=>$validate->getError(),
                    'code'=>0
                ]);
            }
            $result = Db::name('house')->insert($data);
            if($result){
                return $this->return_json('添加成功',100);
            }else{
                return $this->return_json('操作成功',0);
            }

        }
        $list = Db::name('storey')->order('num', 'asc')->select();
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        return view();
    }

    /**
     * 编辑房间
     *
     * @return \think\Response
     */
    public function editor()
    {
//        return view();
    }

    /**
     * 删除房间
     *
     * @return \think\Response
     */
    public function strik_out()
    {
        $res = Db::table('house')->where('id',input('id'))->delete();
        if($res){
//            $this->success('删除成功');
            $this->redirect('admin/house/index');
        }else{
//            $this->error('删除失败');
            $this->redirect('admin/house/index');
        }
    }

    /*
     * 房型维护
     */
    public function maintain(){
        $list = Db::name('house')->order('num', 'asc')->paginate(8);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        return view();
    }

    /*
     * 房型编辑
     */
    public function house_edit(){
        $res = Db::table('house')->where('id',input('id'))->update(['status'=>1]);
        if($res){
            $this->redirect('admin/house/maintain');
        }else{
            $this->redirect('admin/house/maintain');
        }
    }
    /*
     * 维修中
     */
    public function repair(){
        $res = Db::table('house')->where('id',input('id'))->update(['status'=>3]);
        if($res){
            $this->redirect('admin/house/maintain');
        }else{
            $this->redirect('admin/house/maintain');
        }
    }

    /*
     * 待打扫
     */
    public function clean(){
        $res = Db::table('house')->where('id',input('id'))->update(['status'=>2]);
        if($res){
            $this->redirect('admin/house/maintain');
        }else{
            $this->redirect('admin/house/maintain');
        }
    }
}
