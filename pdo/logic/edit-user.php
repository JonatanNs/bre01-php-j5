<?php
header("Location: ../index.php");

require "../config/connexion.php";

if(isset($_POST['submit'])){
    
    $id = isset($_POST['userId']) ? $_POST['userId'] : "";
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";
    $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : "";
    $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : "";
    
    $query = $db->prepare("
                    UPDATE `users` SET  `email` = :email, 
                                        `password` = :password, 
                                        `first_name` = :first_name,
                                        `last_name` = :last_name
                                WHERE `users`.`id` = :id
                        ");
    $parameters = [
        'id' => $id,
        'email' => $email,
        'password' => $password,
        'first_name' => $firstName,
        'last_name' => $lastName,
        ];
        
    $query->execute( $parameters);
} else {
    echo "hello";
}

?>
