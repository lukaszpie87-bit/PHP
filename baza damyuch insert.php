<?php
// Ustawienia połączenia z bazą MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "moja_baza";

// Nawiązanie połączenia
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Sprawdzenie połączenia
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Pobranie danych z formularza
$name = $_POST['name'];
$email = $_POST['email'];

// Zapytanie SQL
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Zamknięcie połączenia
mysqli_close($conn);
?>

