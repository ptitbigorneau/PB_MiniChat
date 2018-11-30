<?php
include 'minichat_dbconnect.php';

$reponse = $bdd->query('SELECT user, message, DATE_FORMAT(date, \'%d/%m/%Y\') AS date, DATE_FORMAT(date, \'%H:%i:%s\') AS heure FROM minichat ORDER BY ID DESC');

while ($donnees = $reponse->fetch()) {
    $message = emoticone_message($donnees['message']);
?>
<!-- -------------------------------------------------------------------------------------------------------------------- -->
                <tr class="tr1">
                    <td class="td1"><?php echo $donnees['date'];?></td>
                    <td class="td2"><?php echo $donnees['heure'];?></td>
                    <td class="td3"><?php echo $donnees['user'];?></td>
                    <td class="td4"><b>: </b><?php echo $message;?></td>
                </tr>
<!-- -------------------------------------------------------------------------------------------------------------------- -->
<?php
}
$reponse->closeCursor();
?>    