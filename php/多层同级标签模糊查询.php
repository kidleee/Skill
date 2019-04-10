<?php
//技巧来源
//https://www.cnblogs.com/e0yu/p/9096115.html
//具体用在猎头管理系统上面，人才有多个标签，例如：java工程等等 要求同时查询多个同级标签
$words = "怎样";
$wordss = "作用";
$where['title'] = array(array('like','%'.$words.'%'),array('like','%'.$wordss.'%'));
$list = $TagDB->where($where)->select();
//以下为正常项目所用
//explode函数 字符串转数组 implode函数 数组转字符串 数组翻转合并去重 array_flip针对一维数组  数组不翻转合一维数组合并后去重array_unique
$words = "作用 功效";
$where = array();
$wordsArr = explode(' ',$words);
$whereArr = array();
foreach($wordsArr as $k=>$v){
    $arr = array();
    if(!$v)unset($wordsArr[$k]); 
    array_push($arr,'like');
    array_push($arr,'%'.$v.'%');
    array_push($whereArr,$arr);
}
$where['title'] = $whereArr;
$list = $TagDB->where($where)->select();
echo $TagDB->getLastSql();
?>