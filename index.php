<?php
header('content-type:text/html;charset=utf-8');
@$pathinfo=substr($_SERVER['PATH_INFO'],1);
$array=explode('/',$pathinfo);
@list($controller,$action)=$array;
//如果没带参数自己默认
$controller=empty($controller)?'IndexController':$controller;
$action=empty($action)?'index':$action;

//包含相关控制文件
require_once 'controller/'.$controller.'.php';


//实例化控制器

$class=new $controller();
//调用方法
$class->$action();
