<?php
$host = 'localhost'; 
$db = 'user_registration';
$user = 'root'; 
$pass = ''; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; // optional for testing connection
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>