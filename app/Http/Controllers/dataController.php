<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use QL\QueryList;

class dataController extends Controller
{
    public function index()
    {
        $data = Storage::get('public/qq1.html');
        return $data;
    }

    public function ql()
    {
        $ql = QueryList::get('http://pubg.app/data');
        $data = $ql->find('tr')->map(function ($tr){
            $qq = $tr->find('td:eq(2)>a>i')->attr('data-id');
            //删掉群主和管理员
            if($qq == null){
                return null;
            }
            $name = $tr->find('td:eq(2)>span')->text();
            return [
                'qq'=>$qq,
                'name'=>$name,
                'email'=>$qq."@qq.com"
            ];
        })->toArray();
       $data = json_encode($data, JSON_UNESCAPED_UNICODE);
       $data = str_replace('null,', '', $data);
       $data = json_decode($data, true);

       //todo 存储到数据库
       $re = DB::table('qers')->insert(array_filter($data));
       if($re){
           echo "成功塞入";
       }
       else {
           echo "出问题了";
       }

    }
}
