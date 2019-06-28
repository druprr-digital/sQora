<?php
$dsn  = "mysql:host=localhost; dbname=school";
$user = "root";
$pass = "";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $pdo->exec("SET CHARACTER SET UTF8");
} catch (PDOException $e) {
    echo "Connection Error! " . $e->getMessage();
}
?>