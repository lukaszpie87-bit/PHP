<p>Tworzenie obiektu i wyświetlenie jego właściwoci.</p>
<?php
class Fruit {
    //propeties 
    public $name;
    public $color;

    //methods
    function set_name($name){
        $this -> name = $name;

    }
    function get_name() {
        return $this -> name;
    

    }
    
    

}

$apple = new Fruit(); // tworzenie obiektu
    $banana = new Fruit(); // tworzenie obiektu
    $apple ->set_name('Apple');
    $banana -> set_name('Banana');

    echo $apple -> get_name();
    echo "<br>";
    echo $banana -> get_name();


?>