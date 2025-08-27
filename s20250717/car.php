<?php
function dd($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

interface Money{
    public function fly();    
}

interface Money100{
    public function swim();    
}

class Car implements Money,Money100{
    public $name;
    public $color;

    function run(){
        echo "$this->color 的 $this->name 正在跑<br>";
    }

    function fly(){
       echo "$this->color 的 $this->name 正在飛<br>";
       
    }

    function  swim(){
        echo "$this->color 的 $this->name 正在游泳<br>";
       
    }


}

$car=new Car();
$car->name="小客車";
$car->color="紅色";
$car->run();
$car->fly();
$car->swim();
dd($car);

$tank=new Car();
$tank->name="坦克車";
$tank->color="綠色";
$tank->run();
dd($tank);

?>