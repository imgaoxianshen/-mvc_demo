<?php
class Database
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo=new PDO('mysql:host=localhost;dbname=mooc','root','');
    }
    //插入
    public function insert($bind)
    {
       
        $sql="INSERT users(username,password,sex) values(?,?,?)";
        $stmt=$this->pdo->prepare($sql);//预处理操作
        $stmt->bindValue(1,$bind['username']);
        $stmt->bindValue(2,$bind['password']);
        $stmt->bindValue(3,$bind['sex']);
        $stmt->execute();
    }
    //查询
    public function query($sql)
    {
        $stmt=$this->pdo->query($sql);
        $rowset=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rowset;
    }
    public function del($sql)
    {
        echo ss;
        // $stmt=$this->pdo->exec($sql);
        // return $stmt;
    }
}