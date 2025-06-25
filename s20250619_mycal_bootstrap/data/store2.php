<?php
$data=$_POST;

$num1=$data['num1'];
$opt=$data['opt'];
$num2=$data['num2'];
//echo ("$num1 $opt $num2 =");
$result=0;
    switch ($opt) {
        case '+':            
            $result=$num1 + $num2;
            break;
        case '-':            
            $result=$num1 - $num2;
            break;
        case '*':            
            $result=$num1 * $num2;
            break;
        case '/':            
            $result=$num1 / $num2;
            break;        
        default:
            $result="error";
            break;
    } 

$input['result']=$result;
echo json_encode($input);

?>