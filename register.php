<?php
$conn = mysqli_connect('localhost', 'root', '', 'goetel7');
if(!$conn)
{
    die ("connect error: " . mysqli_connect_error());
}
$login = $_POST["name"];
$password = sha1($_POST["haslo"]);

$query = "INSERT INTO myguests (login, password)
    Values ('$login', '$password')";
    
    if(mysqli_query($conn, $query)){
        echo "New user created successfully";
    echo $query;
    }   else{
        echo "Error $query mysqli_error($conn)";
    }
?>