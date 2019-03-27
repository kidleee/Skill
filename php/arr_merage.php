<?php

Class arr_merage extends Controller{
    public function ArrayMerage(){
      
        //一维数组形式,圆括号中间没有[]就是一维数组
        //当键值对相同使用array_merage,一维数组会覆盖重复已有键值对
        $arr = array(
            'name'=>$name,
            'years'=>$years,
            'cloth'=>$cloth,
            'IdCard'=>$IdCard,
        );
        //想完成数组拼接必须是二维数组
        //二维数组特点就是array([])中间必须有[]是代表二维
        $arr = array([
            'name'=>$name,
            'years'=>$years,
            'cloth'=>$cloth,
            'IdCard'=>$IdCard,
        ]);
        //倘若转化为json数组
        $json = json_encode($arr);
        //若json数组转化为普通数组
        $arr = json_decode($json,true);
        //数组拼接一定是普通数组拼接。即使是json也要转变为二维普通数组拼接
        $arr = array_merage($arr,$arr);
    }
}
