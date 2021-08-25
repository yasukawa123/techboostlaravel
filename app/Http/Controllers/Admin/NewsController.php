<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //Laravel08追加 newControllerにActionを実装したここではまだ使用されない。
    public function add()
    {
        return view('admin.news.create');
    }
}
