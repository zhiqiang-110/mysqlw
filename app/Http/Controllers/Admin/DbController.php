<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use mysqli;
use DB;

class DbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取数据库信息
        //$stu = DB::select("select * from user");
        //echo "<pre>";
        //var_dump($stu);
        //return view('Db.index',['stu'=>$stu]);

        //查询数据
        //$stu = DB::select("select * from stu");
        //添加数据
        //DB::insert("insert into user (name,email)values('aaaa','123')");
        //删除数据
        //DB::delete("delete from user where id=2");
        //修改数据
        //DB::update("update user set name='李四'where id=1");
        //一般语句(表的创建和删除)
        // DB::statement("drop table user");

        //添加单挑数据
        //$res = DB::table("user")->insert(["name"=>"张三","email"=>"1234"]);
        //插入多条数据
        /* $res = DB::table("user")->insert([
            ["name"=>"王二","email"=>"1234"],
            ["name"=>"蔡虚坤","email"=>"1234"]
            ]); */
        //插入数据的同时获取id
        //$id = DB::table("user")->insertGetId(["name"=>"宋江","email"=>"1234"]);
        //获取所有数据
        //$alldata = DB::table("user")->get();
        //获取单条数据
        //$a = DB::table("user")->where("id","=",2)->first();
        //获取某条数据的某一列
        //$a = DB::table("user")->where("id","=",1)->value("name");
        //获取某一列数据
        // $a = DB::table("user")->pluck("email");
        //删除
        // DB::table("user")->where("id","=",3)->delete();
        //修改数据
        // DB::table("user")->where("id","=",4)->update(['name'=>'李逵']);
            
        //获取指定字段的值
        // $res = DB::table("user")->select("id","email")->get();
        //模糊查询
        // $name = DB::table("user")->where("name","like","%李%")->get();
        //获取id=1或者id大于4的数据
        // $a = DB::table("user")->where("id","=",1)->orWhere("id",">",4)->get();
        //获取id是1的数据并且name值是李四
        // $a = DB::table("user")->where("id","=",1)->where("name","=",'李四')->get();
        // 数据的降序排序
        // $res = DB::table("user")->orderBy("id",'desc')->get();
        //分页
        //$alldata = DB::table("user")->paginate(1);
        //dd($alldata);
        //return view("db.index",['stu'=>$alldata]);
        //多表联查操作 class表和brand表
        /* $date = DB::table("class")->join("brand",'class.id','=','brand.cid')
        ->join("shop",'brand.id','=','shop.bid')->
        select('class.id as cid','class.name as cname',
        'brand.id as bid','brand.name as bname',
        'shop.id as sid','shop.name as sname')->get(); */

        //获取class表的总条数
        //$date = DB::table('class')->count();

        //获取 表的id 最大值
        //$date = DB::table('user')->max('id');

        //计算表数据的平均值
        $date = DB::table('shop')->avg('bid');
        dd($date);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
