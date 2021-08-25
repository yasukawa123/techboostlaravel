<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*---
Laravel09 追加
Route::group　は、いくつかのRoutingの設定をgroup化する役割
なぜgroup化したかというと、次に書かれている[‘prefix’ => ‘admin’] の設定を、
その次の無名関数function(){}の中のすべてのRoutingの設定に適用させたいから
‘prefix’ => ‘admin’] は何をしているのかというと、
無名関数function(){} の中の設定のURLを http://XXXXXX.jp/admin/ から始まるURL にしています。
たとえば、 [‘prefix’ => ‘user’]　にすれば、http://XXXXXX.jp/user/ からはじまるURLを指定することになります。
そして最後に Route::get(‘news/create’, ‘Admin\NewsController@add’); が肝心な設定で、
http://XXXXXX.jp/admin/news/create にアクセスが来たら、
Controller Admin\NewsController のAction addに渡す という設定
---*/
Route::group(['prefix' => 'admin'], function(){
    Route::get('news/create', 'Admin\NewsController@add');
    Route::get('profile/create', 'Admin\ProfileController@add');    //Laravel 09 課題4:応用
    // Route::get('profile/create', 'Admin\ProfileController@edit');   //Laravel 09 課題4:応用
});

/*---
Laravel09　課題3
.jp/XXX　というアクセスが来ました。
Contrrollers/XXX の AAAController内の
AAAControllerのbbbというAction に渡す
---*/
Route::get('XXX', 'XXX\AAAController@bbb');