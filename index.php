<?php
    class Student{
        public $name = "moseti zachary";
        public function showName(){
            return("Hello " . $this->name);
        }
    }
    // create an instance of a class
    $studObject = new Student();
    echo $studObject->showName(); //invokes the showName method
?>