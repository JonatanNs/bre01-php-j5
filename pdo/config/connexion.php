<?php
$host = "db.3wa.io";
$port = "3306";
$dbname = "jonatannsualu_phpj5";
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

$user = "jonatannsualu";
$password = "2cab3819d5c9a03f50f9865b1ef8e0c1";

$db = new PDO(
    $connexionString,
    $user,
    $password
);



