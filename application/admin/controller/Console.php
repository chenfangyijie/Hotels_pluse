<?php
/**
 * Created by PhpStorm.
 * User: Hyacinth
 * Date: 2019/6/22
 * Time: 7:48
 * 控制台
 * 风信子科技
 */
namespace app\admin\controller;

use app\admin\validate\Move;
use think\Db;

class Console extends Base
{
    /**
     * 显示显示所有房间
     *
     * @return \think\Response
     */
    public function index()
    {
        $list = Db::name('house')->order('num', 'asc')->select();
        $storey = Db::name('storey')->order('num', 'asc')->select();
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        $this->assign('storey', $storey);
        return view();
    }

    /**
     * 显示房间状态
     *
     * @return \think\Response
     */
    public function show()
    {
        $list = Db::name('house')->where('id',input('id'))->find();
//        dump($list);
        $this->assign('list', $list);
        return view();
    }

    /**
     * 登记入住
     *
     * @return \think\Response
     */
    public function register()
    {
        if(request()->isPost()){
           $data = input('param.');
            $validate = new Move();
            if (!$validate->check($data)) {
                return json([
                    'msg'=>$validate->getError(),
                    'code'=>0
                ]);
            }
            /*入住状态1 空闲、2  待打扫、3 维修中、4 预订中、0 有人*/
            $data['status'] = 0;
            if($data['move_type'] >= 1){
                $data['move_time'] = $this->Handle_time();
            }else{
                $data['move_time'] = time();
            }
            $data['expire_time'] = $data['move_time']+$data['move_type']*3600*24;//根据选择的天数计算时间

            $result = Db::name('house')->where('id',$data['id'])->update($data);;
            if($result){
                return $this->return_json('入住成功',100);
            }else{
                return $this->return_json('入住失败',0);
            }
        }
        $house = Db::name('house')->where('id',input('id'))->find();
        $list = Db::name('jointime')->order('num', 'asc')->select();
        // 把分页数据赋值给模板变量list
        $this->assign([
            'list'=>$list,
            'house'=>$house
        ]);
        return view();
    }

    /**
     * 退房操作
     * @return \think\Response
     */
    public function check_out()
    {
        $res = Db::table('house')->where('id',input('id'))->find();
        if(!$res['status'] == 0 && !$res['status'] == 4){
            return $this->return_json('你还没有入住,无法退房！',0);
        }
       $data = [
           'status'=>2,
           'user'=>'',
           'identity'=>''
       ];
        $result = Db::name('house')->where('id',input('id'))->update($data);;
        if($result){
            return $this->return_json('退费成功',100);
        }else{
            return $this->return_json('退费失败',0);
        }
    }

    /**
     * 修改房间状态
     * @return \think\Response
     */
    public function state()
    {
        if(request()->isPost()){
            $data = input('param.');
            $result = Db::name('house')->where('id',input('id'))->update($data);
            if($result){
                return $this->return_json('更改成功',100);
            }else{
                return $this->return_json('更改失败',0);
            }
        }
        $list = Db::table('house')->where('id',input('id'))->find();
        $this->assign('list', $list);
        return view();
    }

    /**
     * 预订房间
     *
     * @return \think\Response
     */
    public function subscribe()
    {
        if(request()->isPost()){
            $data = input('param.');

            $validate = new Move();
            if (!$validate->check($data)) {
                return json([
                    'msg'=>$validate->getError(),
                    'code'=>0
                ]);
            }
            $data['move_time'] =strtotime($data['move_time']);
            $data['expire_time'] =strtotime($data['expire_time']);

            $result = Db::name('house')->where('id',input('id'))->update($data);
            if($result){
                return $this->return_json('预订成功',100);
            }else{
                return $this->return_json('预订失败',0);
            }
        }
        $house = Db::name('house')->where('id',input('id'))->find();
        $list = Db::name('jointime')->order('num', 'asc')->select();
        // 把分页数据赋值给模板变量list
        $this->assign([
            'list'=>$list,
            'house'=>$house
        ]);
        return view();
    }
    /**
     * 处理时间
     * @return \think\Response
     */
    public function Handle_time(){
        $res = date("Y-m-d 12:00:00", time());
//        echo strtotime($res);
        return strtotime($res);
    }

}
