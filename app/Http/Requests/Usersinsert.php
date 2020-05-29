<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Usersinsert extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //授权方法
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //对表单用户名参数做规则设置
            //unique:users 唯一规则
            //same 指定的字段必须和其他字段值一致
            //email 必须符合邮箱格式
            'name'=>'required|regex:/\w{4,16}/|unique:users',//required 输入的数据不能为空  regex:\w{4,16}/正则规则 只能4-16位的任意字母数字下划线
            'pwd'=>'required|regex:/\w{1,16}/',
            'repwd'=>'required|regex:/\w{1,16}/|same:pwd',
            'email'=>'required|unique:users|email',
            'phone'=>'required|unique:users|regex:/\d{11}/',
        ];
    }

    public function messages(){
        return[
        'name.required'=>'用户名不能为空',
        'name.regex'=>'用户名必须是4-16位的任意字母数字下划线',
        'name.unique'=>'用户名重复',
        'pwd.required'=>'密码不能为空',
        'repwd.required'=>'确认密码不能为空',
        'repwd.same'=>'两次密码不一致',
        'email.required'=>'邮箱不能为空',
        'email.unique'=>'邮箱不能重复',
        'email.email'=>'邮箱格式错误',
        'phone.required'=>'电话不能为空',
        'phone.unique'=>'电话重复',
        'phone.regex'=>'电话格式错误必须的11位数字',
        ];
    }
}
