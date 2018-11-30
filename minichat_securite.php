<?php
function securite_post($string) {
    // On regarde si le type de string est un nombre entier (int)
    if(ctype_digit($string)) {
        $string = intval($string);
    }
    // Pour tous les autres types
    else {
        // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
        $string = trim($string);
        // Supprime les antislashs d'une chaîne
        $string = stripslashes($string);
        // Ajoute des slash dans une chaîne
        $string = addcslashes($string, '%_');
        // Convertit les caractères spéciaux en entités HTML
        $string = htmlspecialchars($string);
    }

    return $string;
}
?>