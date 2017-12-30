<?php



// ======================================= 后台路由 =====================================
Route::group(["prefix" => "admin"], function () {
    include "admin.php";
});

// ======================================= 前台路由 =====================================
Route::get("/",function(){
    //静态页面
    View::addExtension('html', 'php'); //所有的页面钱必须加这个符号
//    return view()->file(public_path().'/home/index.html');

    session(["s"=>1]);
    return view("home.index"); //返回index页面方法，如果是图动态的文件就返回动态方法
});


