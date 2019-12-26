<?php
/**
 * Created by PhpStorm.
 * User: Hyacinth
 * Date: 2019/6/22
 * Time: 7:48
 * 入住时长管理
 * 风信子科技
 */
namespace app\admin\controller;

use think\Db;

class Jointime extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $list = Db::name('jointime')->order('num', 'asc')->paginate(5);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        return view();
    }
    /**
     * 添加时长
     *
     * @return \think\Response
     */
    public function addition()
    {
        if (request()->isPost()) {
            $data = input('param.');
            /*            $validate = new \app\admin\validate\House();
                        if (!$validate->check($data)) {
                            return json([
                                'msg'=>$validate->getError(),
                                'code'=>0
                            ]);
                        }*/
            /*计算一天多少小时0.01-0.24*/
            if($data['num'] < 1){
                if($data['num'] >= 0.10){
                    $data['num'] = $data['num']*100/24;
                }else{
                    $data['num'] = $data['num']*10/24;
                }
            }
            $result = Db::name('jointime')->insert($data);
            if ($result) {
                return $this->return_json('添加成功', 100);
            } else {
                return $this->return_json('操作成功', 0);
            }
        }
        return view();

    }



    /**
     * 删除时长
     *
     * @return \think\Response
     */
    public function strik_out()
    {
        $res = Db::table('jointime')->where('id',input('id'))->delete();
        if($res){
//            $this->success('删除成功');
            $this->redirect('admin/jointime/index');
        }else{
//            $this->error('删除失败');
            $this->redirect('admin/jointime/index');
        }
    }
}
