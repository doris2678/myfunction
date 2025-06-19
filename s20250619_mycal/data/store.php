<?php
function dd($data)
{
    $num1=$data['num1'];
    $opt=$data['opt'];
    $num2=$data['num2'];
    echo ("$num1 $opt $num2 =");

    switch ($opt) {
        case '+':            
            echo $num1 + $num2;
            break;
        case '-':            
            echo $num1 - $num2;
            break;
        case '*':            
            echo $num1 * $num2;
            break;
        case '/':            
            echo $num1 / $num2;
            break;        
        default:
            echo "error";
            break;
    } 
}
$data=$_POST;
dd($data);
?>