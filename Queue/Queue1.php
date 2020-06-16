<?php 
class Patient {
    public $name;
    public $code;
    public function __construct($name,$code)
    {
        $this->name=$name;
        $this->code=$code;
    } 
}
class Queue {
    public $arraylist;
    public $priority;
    public function __construct($arraylist,$priority)
    {
        
    }
}