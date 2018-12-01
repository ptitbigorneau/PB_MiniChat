<?php
session_start();
include 'minichat_dbconnect.php';

$reponse = $bdd->query('SELECT MAX(id) AS maxid FROM minichat');

$id = $reponse->fetch();

echo $id['maxid'];

$reponse->closeCursor();
?>    