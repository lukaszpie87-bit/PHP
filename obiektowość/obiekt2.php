<?php
class Fruit {
    public $name;
    public $color;

    function __construct($name){
        $this ->name = $name;

    }

}


    $apple = new Fruit("Apple");
    echo $apple -> name;
?>
