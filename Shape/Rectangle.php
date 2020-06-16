<?php 
include_once("Shape.php");

class Retangle extends Shape {
    public $width;
    public $height;
    public function __construct($name,$height,$width)   
    {
        parent::__construct($name);
        $this->height=$height;
        $this->width=$width;

    }
    public function getHeight (){
        return $this->height;
    }
    public function setHeight ($height){
        $this->height=$height;
    }
    public function getWidth (){
        return $this->width;
    }
    public function setWidth ($width){
        $this->width=$width;
    }
    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
    

}