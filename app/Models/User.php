<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //模型对应的数据表
    protected $table = 'users';
    //声明要添加的数据
    protected $fillable = ['name','pwd','email','phone','static'];
    //自动对时间进行维护
    public $timestamps = true;
    //用修改器的方法改变static的值转换
    public function getStatusAttribute($value){

        $status=[0=>"未激活",1=>"已激活",2=>"禁用"];//处理status   
    	return $status[$value];//返回处理后的数据结果
    }

    public function info(){//会员信息和会员详情的关联
        return $this->hasOne('App\Models\Userinfo','users_id');//一对一关联方法  users_id是关联条件
    }

    //获取用户模块下的所有收货地址
    public function address(){
        return $this->hasMany('App\Models\address','users_id');
    }
}
