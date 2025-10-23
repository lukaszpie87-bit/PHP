<?php
$conn = mysqli_connect('localhost', 'root', '', 'goetel7');
$first_name = $_POST["firstname"];
$last_name = $_POST["lastname"];
$fav_language = $_POST["fav_language"];

$query = "INSERT INTO myguests (firstname, lastname, fav_language)
    VALUES ('$first_name', '$last_name', '$fav_language')";
if(mysqli_query($conn, $query)){
    echo "Nowy rekord został stworzony";
} else {
    echo "ERROR:" . $query . "<br>" . mysqli_error($conn);
}

?>