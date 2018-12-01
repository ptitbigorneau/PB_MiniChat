<?php
include 'minichat_dbconnect.php';

$config = parse_ini_file("config/config.ini", false);

$max_messages = $config['max_messages'];

$reponse = $bdd->query('SELECT user, message, DATE_FORMAT(date, \'%d/%m/%Y\') AS date, DATE_FORMAT(date, \'%H:%i:%s\') AS heure FROM minichat ORDER BY ID DESC LIMIT '.$max_messages.'');

while ($donnees = $reponse->fetch()) {
    $message = emoticone_message($donnees['message']);
    $message = mot_trop_long($message, 30, " ");
?>
<!-- -------------------------------------------------------------------------------------------------------------------- -->
                <tr class="tr1">
                    <td class="td1"><?php echo $donnees['date'];?></td>
                    <td class="td2"><?php echo $donnees['heure'];?></td>
                    <td class="td3"><?php echo $donnees['user'];?></td>
                    <td><b>: </b></td>
                    <td class="td4"><?php echo $message;?></td>
                </tr>
<!-- -------------------------------------------------------------------------------------------------------------------- -->
<?php
}
$reponse->closeCursor();

function mot_trop_long($mot,$length,$separation) {
return preg_replace('/([^ ]{'.$length.'})/si','\1'.$separation,$mot);
}

?>    