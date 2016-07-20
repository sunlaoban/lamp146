<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
   // public function getAdd(){
   //  echo "sss";
   // }
   public function postInsert(){
    echo "wwww";
   }

   public function getIndex(Request $request){
    //获取url地址
    $url=$request->path();
    // var_dump($url);exit();
    // echo "111";
    //dd()打印的数据的同时 终止脚本代码
    //检测路径
    $path=$request->is('admin/*');
    //获取完整的url地址
    $allpath=$request->url();
    //获取请求的方法
    $method=$request->method();
    //检测方法
    $ismethod=$request->isMethod('post');
    dd($ismethod);
    // echo "111";

   }

   //获取请求报文参数信息
   public function getParams(Request $request){
    //获取参数
    $name=$request->input('name');
    //获取指定类型的参数
    $name1=\Input::get('id');
    //获取默认值
    $name2=$request->input('name','ss');
    //检测参数是否存在
    $name3=$request->has('name');
    //获取所有的参数
    $allparams=$request->all();
    //only
    $onlyparam=$request->only(['id','sex']);
    //except
    // $except=$request->except(['id','name']);
    dd($except);
   }

   //加载表单的操作
   public function getAdd(){
    return view('forms');
    // echo "sss";
   }

   public function Insert(Request $request){
    // echo "sss";
    //获取input参数
    // $all=$request->all();
    //将所有 的参数信息写在闪存里面
    // $request->flash();
    //将部分参数写入闪存里
    // $request->flashOnly('pass');
    // flashExcept
    // $request->flashExcept('email');
    // dd($all);
    if(!$request->has('username')){
        //阻止表单的提交
        // return back();
        //简便用法
        return back()->withInput();
    }  
   }

   //执行上传
   public function upload(Request $request){
    // echo "ssss";
    //检测是否有文件上传
    // $ss=$request->hasFile('photo');
    // dd($ss);
    //获取上传文件类型
    $s=$request->file('photo')->getClientOriginalExtension();
    //随机字符串
    $name=time()+rand(1,9999999999);
    // dd($s);
    if($request->hasFile('photo')){
        //移动文件
        $request->file('photo')->move('./uploads/',$name.'.'.$s);
    }
   }

   //获取cookie
   public function cookie(Request $request){
    // echo "ss";
    //获取cookie方法一
    // $s=$request->cookie('name');
    //获取cookie方法二
    $id=\Cookie::get('id');
    dd($id);
   }

   //响应操作
   public function res(){
        //返回字符串
        // return '我是响应数据';
        //设置cookie
        // return response('我要设置cookie')->withCookie('ids',12,40);
        //返回模板
        // return view('form');
        //返回json
       // return response()->json(['a'=>'ss','b'=>'nmmm']);
        //下载文件
       // return response()->download('./uploads/test.jpg');
        //页面跳转
        return redirect('/login');
   }
}