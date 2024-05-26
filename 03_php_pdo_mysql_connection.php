<?php

$hostname = 'localhost';
$username = 'Elle';
$password = 'elle143';
$dbname = 'Elle';

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    // Display error message if there's an issue with the connection
    echo "Connection failed: " . $e->getMessage();
}
?>