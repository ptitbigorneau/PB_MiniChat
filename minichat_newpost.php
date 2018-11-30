<?php
session_start();
include 'minichat_dbconnect.php';

$reponse = $bdd->query('SELECT MAX(id) AS maxid FROM minichat');

$id = $reponse->fetch();

echo $id['maxid'];

$reponse->closeCursor();

$req = $bdd->prepare('UPDATE users SET time_connect = NOW() WHERE id = :id');
$req->execute(array('id' => $_SESSION['user_id']));
$req->closeCursor();
?>    