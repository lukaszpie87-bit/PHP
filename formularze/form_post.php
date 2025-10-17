<?php
echo $_POST["name"]; 
echo $_POST["email"]; 

$conn = mysqli_connect("localhost", "root", "", "goetel7");
echo "Conected successfully";

$name = $_POST["name"];
$email = $_POST["email"];

$sql = "INSERT INTO MyGuests (firstname, email) VALUES ('$name', '$email')";
echo $sql;

if (mysqli_query($conn, $sql)){
    echo "New record created successfully";
}   else {
    echo "Error: ". mysqli_error($conn);
}



