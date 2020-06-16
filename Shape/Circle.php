<?php
include_once("Shape.php");
class Circle extends Shape{ 
    public $radius;
    public function __construct($radius,$name){
        $this->radius=$radius;
        $this->name=$name;
    }
    public function setRadius($radius){
        $this->radius=$radius;
    }
    public function getRadius(){
        return $this->radius;
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
    }