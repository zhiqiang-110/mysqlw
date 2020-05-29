<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;//导入模型类
use App\Http\Requests\Usersinsert;//导入自己编写的规则
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //列表  
        $key = $request->input('keyword');//接收搜索的参数

        $key2 = $request->input('keyword2');
        //echo $key;
        $user = User::where("name",'like','%'.$key.'%')->
        where("email",'like','%'.$key2.'%')->paginate(2);
        //$users2 = DB::table("users")->where("email",'like','%'.$key2.'%')->paginate(2);
        //echo $users;exit;
        //$user = User::paginate(2);//分页 每页两条
        //dd($user);
        return view('Admin.user.index',['users'=>$user,'request'=>$request->all(),'key'=>$key,'key2'=>$key2]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //添加
        //echo '我是添加';
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Usersinsert $request)
    {
        //执行添加
        //echo '我是执行添加';
        $user = $request->except(['repwd','_token']);//获取有用的数据
        $user['pwd'] = Hash::make($user['pwd']);//密码加密 Hash::make
        $user['static'] = 0;//状态 0 是未激活 1 是已激活

        //使用模型类入库
        if(User::create($user)){
            //dd('添加成功');
            return redirect("users")->with('success','添加成功');
            //with('success','添加成功') 获取提示
        }{
            echo '添加失败请重新添加';
            return back()->with('error','添加失败');

        }
        //dd($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //会员模型的获取
    public function show($id)
    {
        //
        //dd($id);
        $info = User::find($id)->info;
        //dd($info);
        return view('admin.user.info',['info'=>$info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //修改
        //echo '我是修改';
        //echo $id;
        $date = User::where("id","=",$id)->first();
        //dd($date);
        return view("admin.user.update",['date'=>$date]);
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
        //执行修改
        //echo '修改中';
        //dd($id);
        $date = $request->except(['repwd','_token','_method']);//获取有用的数据
        //dd($date);
        //DB::table("user")->where("id","=",4)->update(['name'=>'李逵']);
        if(User::where("id","=",$id)->update(['name'=>$date['name'],
        'pwd'=>$date['pwd'],'email'=>$date['email'],'phone'=>$date['phone']])){
            echo '修改成功';
            return redirect("user")->with('success','修改成功');
        }{
            echo '修改失败请重新修改';
            return back()->with('error','修改失败');

        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //删除操作
        if(User::where('id','=',$id)->delete()){
            return redirect("/user")->with("success",'删除成功');
        }else{
            return redirect("/user")->with("success",'删除失败');
        }
    }

    public function address($id){
        //dd($id);
        $address=User::find($id)->address;
        //dd($address);
        return view("admin.user.address",['address'=>$address]);
    }
}
