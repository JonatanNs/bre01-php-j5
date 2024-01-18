<?php
header("Location: ../index.php");

require "../config/connexion.php";

if(isset($_GET['id'])){
    $userId = $_GET['id']; 
    $query = $db -> prepare("DELETE FROM `users` WHERE `users`.`id` = :id");
    $parameters = [
        'id' => $userId
        ];
    $query->execute($parameters);
}

?>
