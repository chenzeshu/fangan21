<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $guarded = [];


    private function str_insert2($str,$i,$substr){//方法二：substr函数进行截取
        $start=substr($str,0,$i);
        $end=substr($str,$i);
        $str = ($start . $substr . $end);
        return $str;
        //return substr($str,0,$i).$substr.substr($str,$i);//上述代码可综合成这一句
    }
}
