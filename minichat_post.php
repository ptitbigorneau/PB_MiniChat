<?php
session_start();

include 'minichat_dbconnect.php';
include 'minichat_securite.php';

if(isset($_POST['submit'])){ // si on a envoyé des données avec le formulaire

    $_SESSION['user'] = $_POST['user'];

    $user = securite_post($_POST['user']);
    $message = securite_post($_POST['message']);

    // Insertion du message à l'aide d'une requête préparée
    $req = $bdd->prepare('INSERT INTO minichat (user, message, date) VALUES(?, ?, NOW())');
    $req->execute(array($user, $message));

    // Redirection du visiteur vers la page du minichat
    header('Location: minichat.php');
}
?>