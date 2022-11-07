<?php
namespace Webt\MedtCore1Review;
require 'FoodInterface.php';
require 'AbstractFood.php';


class Salat extends AbstractFood implements FoodInterface{
    function __construct($name){
        parent::__construct($name);
    }
    
    function getName(){
        return $this->name;
    }
    function isVegetarian(){return true;}


    public function getCalories(){

    }
}

class Schnitzel extends AbstractFood implements FoodInterface{
    function __construct($name){
        parent::__construct($name);
    }
    
    function getName(){
        return $this->name;
    }
    function isVegetarian(){return true;}


    public function getCalories(){

    }
}
?>