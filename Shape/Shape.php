<?php
class Shape
{
    public $name;
    public function show()
    {
     
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
       return $this->name;
    }
}
