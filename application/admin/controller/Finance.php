<?php
/**
 * Created by PhpStorm.
 * User: Hyacinth
 * Date: 2019/6/22
 * Time: 7:48
 * 财务管理
 * 风信子科技
 */
namespace app\admin\controller;

use think\Db;

class Finance extends Base
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        /*入住状态1 空闲、2  待打扫、3 维修中、4 预订中、0 有人*/
        //预定的房间
        $res = Db::table('house')->where('status',4)->count();
        //入住的房间
        $checkin = Db::table('house')->where('status',0)->count();
        //空闲的房间
        $free = Db::table('house')->where('status',1)->count();
        //待打扫的房间
        $clean = Db::table('house')->where('status',2)->count();
        //维修的房间
        $repair = Db::table('house')->where('status',3)->count();
        //今日销售金额
        $map[] = ['create_time','<',time()];
        $map[] = ['create_time','>',time()-86400];
        $list = Db::table('finance')->where($map)->select();

//       echo Db::table('finance')->getLastSql();
        $arr1 = [];
        foreach ($list as $key => $value) {
            array_push($arr1,$value['num']);
        }
        $today =array_sum($arr1);
        //周销售金额
        $map1[] = ['create_time','<',time()];
        $map1[] = ['create_time','>',time()-604800];
        $list1 = Db::table('finance')->where($map1)->select();
        $arr2 = [];
        foreach ($list1 as $key => $value) {
            array_push($arr2,$value['num']);
        }
        $week =array_sum($arr2);
        //月销售金额
        $map2[] = ['create_time','<',time()];
        $map2[] = ['create_time','>',time()-2678400];
        $list2 = Db::table('finance')->where($map2)->select();
        $arr3 = [];
        foreach ($list2 as $key => $value) {
            array_push($arr3,$value['num']);
        }
        $month =array_sum($arr3);
       $this->assign([
           'res'=>$res,
           'checkin'=>$checkin,
           'free'=>$free,
           'clean'=>$clean,
           'repair'=>$repair,
           'today'=>$today,
           'week'=>$week,
           'month'=>$month,
       ]);
        return view();
    }
}
