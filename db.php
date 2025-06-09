<?php
//$dsn="mysql:host=localhost;dbname=store;charset=utf8";
//$pdo=new PDO($dsn,'root','');
$dsn="mysql:host=localhost;dbname=foodie;charset=utf8";
$pdo=new PDO($dsn,'root','');

function all($table,$where=null){
  //echo "回傳指定資料表{$table}內容";  
  global $pdo;
  $sql="select * from $table $where";
  echo $sql;
  $rows=$pdo->query($sql)->fetchALl(PDO::FETCH_ASSOC);  
  return $rows;
}

function dd($array){
    echo "<pre>";
    print_r($array);   
    echo "</pre>";
}

function find($table,$id){
  global $pdo;
  $sql="select * from $table where id=$id";
  echo $sql;
  return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);    
}

function q($sql){
  global $pdo;  
  return $pdo->query($sql)->fetchALl(PDO::FETCH_ASSOC);  
}


function findacc($table,$acc,$pw){
  //echo "回傳指定資料表{$table}內容";  
  global $pdo;
  $sql="select * from $table where acc='$acc' and pw='$pw'";
  echo $sql;
  $rows=$pdo->query($sql)->fetchALl(PDO::FETCH_ASSOC);  
  return $rows;
}


?>