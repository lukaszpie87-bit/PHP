<?php
$conn = mysqli_connect('localhost', 'root', '', 'goetel7');
if(!$conn){
    die ("error". mysqli_connect_error());
}
$login = $_POST["login"];
$haslo = sha1($_POST["haslo"]);

$query = "SELECT login, password from myguests WHERE login ='$login'";
if($result = mysqli_query($conn, $query) ){
   // print_r( $result );
    $row = mysqli_fetch_array($result);
 //   print_r($row);
    if($haslo == $row[1]){
        echo "zalogowano pomyślnie";
    }
}   else {
    echo "ERROR $query". mysqli_error($conn);
}
?>