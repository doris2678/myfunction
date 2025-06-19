<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    //var_dump($data);
    echo "</pre>";
}

// $input=[
//     'name'=>'test',
//     'mobile'=>'0912345678',
// ];

$input=$_GET;

$input['rank'] = 'A';
$input['msg'] = 'ok';
//dd($input);
echo json_encode($input);
?>