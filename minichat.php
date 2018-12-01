<?php
session_start();
include 'minichat_emoticone.php';

$config = parse_ini_file("config/config.ini", false);

$titre_page = $config['title_page'];
$titre_header = $config['title_header'];
$bas_page = $config['footer'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" />
        <title><?php echo $titre_page; ?></title>        
    </head>

    <body>
    <header>
        <h1><?php echo $titre_header; ?></h1>
    </header>
<!-- ---------------------------------------------------------------- block Message ---------------------------------------------------------------- -->
        <section id="block_msg">
            <table>
                <?php
                    include "minichat_msg.php";
                ?>
            </table>
        </section>
<!-- ------------------------------------------------------------------ Formulaire ------------------------------------------------------------------ -->
        <section id="block_form">
            <form action="minichat_post.php" method="post">
                <table>
                    <tr>
                        <td><label for="user">Pseudo</label></td>
                        <td><b>:</b></td>
                        <td><input minlength="3" maxlength="14" type="text" name="user" id="user" value="<?php echo $_SESSION['user']; ?>" required="required"/></td>
                    </tr>
                    <tr>
                        <td><label for="message">Message</label></td>
                        <td><b>:</b></td>
                        <td><input maxlength="144" type="text" name="message" id="message" size="70" required="required"/></td>
                    </tr>
                </table>
                <div id="form_emoticones">
                    <?php emoticone_form(); ?>
                </div>
                <input id="bouton" type="submit" name="submit" value="Envoyer" />
            </form>
        </section>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <footer>
            <div id="baspage">
                <p><?php echo $bas_page; ?></p>
            </div>
        </footer>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------ -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="js/minichat.js"></script>
    </body>
</html>    