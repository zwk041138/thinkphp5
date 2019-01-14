<?php
namespace app\index\controller;

use app\index\model\Data;
use think\Collection;
use think\Db;
use think\Exception;
use think\Request;
use think\url;
class Index extends  Collection
{
    /**
     * 模型和关联2
     */
    
    /**
     * 模型和关联
     */
    public function mx(){
        //查询
      $result =   Data::get(5);
      //插入
//        $data = new Data();
//        $data->name = '11111';
//        $data->status = 1;
//        $data->save();
        //另外插入方法
        $data['name'] = '1111';
        $data['status'] = '1';
        if($result = Data::create($data)){
            echo "用户id：".$result->id."用户名字：".$result->name."用户状态：".$result->status;
        }
    }
    /**
     * 查询下
     */
    public function cx2(){
        //查询某行
        $name = Db::name('data')->where('id',12)->value('name');
        var_dump($name);
        //获得某列
        $name = Db::name('data')->where('status',1)->column('name');
        var_dump($name);
        //获取id的键名name位置的建值对
        $list = Db::name('data')->where('status',1)->column('name','id');
        var_dump($list);
        //获取id键名
        $list = Db::name('data')->where('status','1')->column('*','id');
        var_dump($list);
        //聚合查询
        //count总数
        $count = Db::name('data')->where('status','1')->count();
        var_dump($count);
        //max
        $max = Db::name('data')->where('status',1)->max('id');
        var_dump($max);
        //建议字符串简单查询
        $result = Db::name('data')->where('id>:id and name like "%php%"',['id'=>10])->select();
        var_dump($result);
        //查询时间
//        $result = Db::name('data')->whereTime('time','>','2017-01-01');
//        var_dump($result);
//        $result = Db::name('data')->whereTime('time','>','this week')->select();
//        $result = Db::name('data')->whereTime('time','>','-2 days')->select();
//        $result = Db::name('data')->whereTime('time','between','["2018-01-01","2019-01-01"]')->select();
//        $result = Db::name('data')->whereTime('time',"today")->select();
       //分块查询
        Db::name('data')->where('status','>',0)
            ->chunk(2,function($list){
                foreach ($list as $data){

                }
            });
    }
    /**
     * 查询语言
     */
    public function cx(){
        echo "cx";
        $result = Db::name('data')->where('id',4)->find();
        $result2 = Db::name('data')->insert(['name'=>'thinkphp','status'=>1]);
        var_dump($result);
        var_dump($result2);
    }
    /**
     * 事务
     */
    public function sw(){
        echo "sw";
      // dump(Db::table('tp_data')->delete(2));
        /**
         * 自动完成
         */
//       Db::transaction(function (){
//           Db::table('tp_data')->delete(2);
//           Db::table('tp_data')->insert(['name'=>'thinkphp','status'=>1]);
//       });
        /**
         * 手动完成
         */
//        Db::startTrans();
//        try{
//            Db::table('tp_data')->delete(2);
//            Db::table('tp_data')->insert(["id"=>8,'name'=>'thinkphp','status'=>1]);
//            //事务提交
//            Db::commit();
//        }catch(Exception $e){
//            //事务回滚
//            echo '事务回滚';
//            Db::rollback();
//        }
    }
    public function sql(){
        $result = Db::execute('insert into tp_data(name,status) values ("1111",1)');
        dump($result);
    }
    public function index()
    {
        return "今天是：".date("Y-m-d H:i:s");
    }
    public function hello($name=''){
        echo "hell0:".$name;
       // return "今天是：".date("Y-m-d H:i:s");
       print_r(request()->param());

    }
    public function today($year,$month){
        echo "今天是".$year."年".$month."月";
    }
    public function url(){
        echo Url::build('url2','a=1&b=2');
        echo "<br>";
        echo url('url2','a=1&b=2');
        echo '<br>';
        echo url('url2',['a'=>1,'b'=>2]);
        echo '<br>';
        echo url('url2',array('a'=>1,'b'=>2));
        echo '<br>';
        echo url('admin/index2/url2/','a=1&b=2');
        echo '<br>';
        echo url('admin/HelloWorld/hello'); //自动转换 url_convert
        echo '<br>';
        echo url('today/2017/07');//路由规则
        echo '<br/>';
    }

}
