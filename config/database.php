<?php
$host = 'localhost';
$db = 'cv_maker';
$user = 'root';
$pass = ''; // skriv din XAMPP adgangskode hvis du har en

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}
