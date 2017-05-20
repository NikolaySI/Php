<?php
class Car{
    public $model;
    public $year;
    public $color;
    
   function __construct($model = '',$color = '',$year = ''){
       $this->model = $model;
       $this->year = $year;
       $this->color = $color;
   }
}
//add new feature
$car = new Car();
$car->weight = 2000;
// change feature value
$car2 = new Car("","",2017);

$car3 = new Car();
$car3->year = 2017;
// change feature value in different way

var_dump($car2);
var_dump($car3);




















?>