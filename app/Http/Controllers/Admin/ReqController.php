<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //简单的请求操作
        //echo "123";
        //总的请求命令
        //echo "<pre>";
        //var_dump($request);
        $path = $request->isMethod("GET");
        //url是全部路径信息 path是请求路径信息 method是请求方式 isMethod可以检测请求方式
        //echo $path;
        //var_dump($path);exit;
        //dd($path);//dd 可以打印数据的同时终止运行
        //echo '666';

        //$all = $request->all();//获取全部地址栏的参数
        //$name = $request->input('id');//提取指定的单个参数
        //$name = $request->only('name');//只获取指定的参数
        //$name = $request->except(['name']);//获取除了指定的参数以外的所有参数
        //$name = $request->input('a','a');//添加参数 如果地址栏有一地址栏为准
        $name = $request->has('a');//检测有没有指定的参数
        dd($name);


        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模板
        return view('req.login');
        
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
        $name = $request->input("name");
        //dd($name);
        //$request->flash();//把所有数据存入闪存中
        //$request->flashOnly('tel');//把指定参数存入闪存中
        if($name == null){
            return back()->withInput();//back()阻止表单提交  back()->withInput()阻止提交的同时把所有数据存入闪存
            
        }
        echo '我是执行登录操作';
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
