<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function add(){
        echo "用户的添加页面";
    }

    public function del(){
        echo "这是用户的删除";
    }

    public function edit(){
        echo "这是用户的修改";
    }

    public function insert(){
        echo "这是用户的执行添加的操作";
    }

    public function index(){
        // echo "sss";
        echo route('users');//路由函数route
    }
}
