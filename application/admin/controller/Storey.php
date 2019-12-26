<?php
/**
 * Created by PhpStorm.
 * User: Hyacinth
 * Date: 2019/6/22
 * Time: 7:48
 * 楼层管理
 * 风信子科技
 */
namespace app\admin\controller;

use think\Db;

class Storey extends Base
{
    /**
     * 显示楼层
     *
     * @return \think\Response
     */
    public function index()
    {
        $storey = Db::name('storey')->order('num', 'asc')->paginate(10);

        // 把分页数据赋值给模板变量list
        $this->assign('storey', $storey);
        return view();
    }

    /**
     * 添加楼层
     *
     * @return \think\Response
     */
    public function addition()
    {
        if(request()->isPost()){
            $data = input('param.');
/*            $validate = new \app\admin\validate\House();
            if (!$validate->check($data)) {
                return json([
                    'msg'=>$validate->getError(),
                    'code'=>0
                ]);
            }*/
            $result = Db::name('storey')->insert($data);
            if($result){
                return $this->return_json('添加成功',100);
            }else{
                return $this->return_json('操作成功',0);
            }

        }
        return view();
    }

    /**
     * 删除楼层
     *
     * @return \think\Response
     */
    public function strik_out()
    {
        $res = Db::table('storey')->where('id',input('id'))->delete();
        if($res){
//            $this->success('删除成功');
            $this->redirect('admin/storey/index');
        }else{
//            $this->error('删除失败');
            $this->redirect('admin/storey/index');
        }
    }
}
