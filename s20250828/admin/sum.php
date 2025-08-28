<?php
//cors fix
//開放特定網域
header("Access-Control-Allow-Origin: *");
//開放特定網域
//header("Access-Control-Allow-Origin: http://127.0.0.1:5500");

// 註解 寫在php內
// 如果寫在html , ajax接收檔案 就不會json

// 後台
// 1.接收菜單
// 2.菜單內容 牛排,沙拉
// 3.煮 牛排,沙拉
// 4.送餐 前面服務生
// 5.送 牛排,沙拉

function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// $data=[
//   [
//     'id'=>1,
//     'name'=>'amy'
//   ],
//   [
//     'id'=>2,
//     'name'=>'bob'
//   ],
//   [
//     'id'=>3,
//     'name'=>'cat'
//   ]
//   ];
//今天的每一份努力都是未來成功的儲蓄
//http://localhost/s20250828/front/api.html?num1=100&num2=200

$input=$_POST;
$sum=$input['num1']+$input['num2'];

$data=[
    [
      'num1'=>$input['num1'],
      'num2'=>$input['num2'],
      'sum'=>$sum
    ]
  ];



//dd($data);

echo json_encode($data);

?>
