<?php
$config = parse_ini_file("config/config.ini", false);

$dbhost = $config['host'];
$dbuser = $config['user'];
$dbpassword = $config['password'];
$dbname = $config['name'];

// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host='.$dbhost.';dbname='.$dbname.';charset=utf8', $dbuser, $dbpassword);
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>