<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');// 加载视图里面 welcome
//     // echo "1111";
//     //获取当前的时间
//     // echo date("Y-m-d h:i:s");
//     //获取配置文件
//     // echo Config::get('app.timezone'); 
//     // echo Config::get('app.url');
//     // echo Config::get('app.locale');

//     //设置配置信息
//     // Config::set('app.timezone','UTC');
//     // echo Config::get('app.timezone');
//     // echo Config::get('app.webname');
//     //环境系统的信息
//     // echo env("DB_CONNECTION");


// });
//路由的基本操作
// Route::get('/test',function(){
// 	echo "111";
// });
// NotFoundHttpException in RouteCollection.php line 161:  当前没有匹配到的路由规则

// Route::get('/tests/add',function(){
// 	echo "222";
// });

// Route::post('/user/add',function(){
// 	echo "qqq";
// });
// Route::get('/form',function(){
// 	// echo "走过南，闯过北,厕所后面喝过水,隔壁老王亲过嘴";
// 	return view('form');
// });

//带参数的路由
// Route::get('/shop/{id}',function($id){
// 	echo "商品的id是".$id;
// })->where('id','\d+');

// Route::get('shops/{name}',function($name){
// 	echo "商品的名字".$name;
// })->where('name','[a-z A-Z]');

//多个参数的路由
// Route::get('/shopss/{id}-{name}',function($id,$name){
// 	echo "商品的id是".$id;
// 	echo "商品的名字是".$name;
// })->where('id','\d+')->where('name','[a-z A-Z]');

//给路由起别名
// Route::get('/admin/user/add',[
// 	'as'=>'uadd',
// 	function(){
// 		echo "sss";
// 	}
// 	]);

// Route::get('/test',function(){
// 	echo route('uadd');//路由函数route 去获取别名 或者是路由规则
// });

//路由组的设置
// Route::group(['middleware'=>'login'],function(){
// 	//路由
// 	Route::get('/home/order',function(){
// 		echo "我是前台的订单页面";
// 	});

// 	Route::get('/admin/user/edit',function(){
// 		echo "这是后台用户的修改";
// 	});
// });

// Route::get('/ss',function(){
// 	abort('404');
// });

// //Ajax
// Route::get('/ajax',function(){
// 	//加载视图模板
// 	return view('ajax');
// });
// Route::post('/post',function(){
// 	echo "ajax的响应数据";
// });

Route::get('/login',function(){
	echo "这是用户的登录界面";
});

// Route::get('/home/person',function(){
// 	echo "这是前台的个人中心";
// })->middleware('login');

//控制器
Route::get('/user/add','UserController@add')->middleware('login');
Route::get('/user/del','UserController@del');
Route::get('/user/edit','UserController@edit');
Route::post('/user/insert','UserController@insert');
//控制器带参数的访问
// Route::get('/user/show/{id}','UserController@index');

//控制器别名
// Route::get('/user/index1',[
// 	'as'=>'users',//控制器的别名
// 	'uses'=>'UserController@index'
// 	]);
// Route::get('/shop/add','ShopController');
Route::get('/add','ClassController@add');


//隐式控制器  请求可以访问路由以shops开头的控制器里面的方法
Route::controller('/shops','TestController');

//请求
Route::controller('/test','TestController');
Route::post('/insert','TestController@insert');

//文件上传操作
Route::get('/upload',function(){
	return view('upload');
});

Route::post('/uploadss','TestController@upload');

//写入cookie
Route::get('/writecookie',function(){
	//写入cookie的方法
	\Cookie::queue('name','laowang',30);
	//写入cookie方法二
	return response('fff')->withCookie('id',12,30);
});

//获取cookie信息
Route::get('/getcookie','TestController@cookie');

//响应操作
Route::get('/res','TestController@res');