<?php
require_once 'model/Database.php';
Class UserController
{
    //呈现用户注册界面
    public function create()
    {
        require_once 'view/adduser.html';
    }

    //获取表单数据并且写入数据库
    public function add()
    {
       $db=new Database();
       $db->insert($_POST);

    }

    //获取所有用户数据并且呈现页面
    public function list1()
    {
        $db=new Database();
        $sql="SELECT id,username,sex FROM users";
        $list=$db->query($sql);
        require_once 'view/listuser.html';
    }
}