<?php 
trait Name{
    private $name;

    public function setName($_name){
        $this->name = $_name;
    }

    public function getName(){
        return $this->name;
    }
}