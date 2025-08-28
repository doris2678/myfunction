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

// $data=[
//     [
//       'id'=>13,
//       'name'=>'黃秀慧',
//       'msg'=>'今天的每一份努力都是未來成功的儲蓄'
//     ]
//   ];
$data=[
      'id'=>13,
      'name'=>'黃秀慧',
      'msg'=>'今天的每一份努力都是未來成功的儲蓄'
  ];
  
// dd($data);

echo json_encode($data,JSON_UNESCAPED_UNICODE);


?>
