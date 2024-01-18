<?php
header("Location: ../index.php");
// Inclure le fichier de configuration de la base de données
require "../config/connexion.php";

// Vérifier si le formulaire a été soumis et si le champ 'submit' n'est pas vide
if(isset($_POST['submit'])) {

    // Récupérer les données du formulaire (évitant les erreurs si les clés n'existent pas)
    $firstName = isset($_POST["firstName"]) ? $_POST["firstName"] : "";
    $lastName = isset($_POST["lastName"]) ? $_POST["lastName"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    
    // Préparer une requête SQL pour insérer les données dans la table 'users'
    $query = $db->prepare("INSERT INTO `users` (`email`, `password`, `first_name`, `last_name`)
                          VALUES (:email, :password, :first_name, :last_name)");
    
    // Définir les valeurs des paramètres dans un tableau
    $parameters = [
        'email' => $email, 
        'password' => $password, 
        'first_name' => $firstName, 
        'last_name' => $lastName
    ];
    
    // Exécuter la requête SQL avec les paramètres
    $query->execute($parameters);
} else {
    echo "hello";
};
?>









