<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    //将用户的数据添加到用户表
    public function store(Request $request)
    {
        //现获取表单的数据
        $result = $request->all();


        // 插入
        $res = DB::table('user')->insert(
            ['user' => $result['user'], 'pass' => $result['pass']]
        );

        if ($res) {
            return Redirect::to('user/index');
        } else {
            dd('error');
        }
    }

    public function index()
    {
        $result = DB::table('user')->get();

        return view('user.index', ['user' => $result]);
    }

}
