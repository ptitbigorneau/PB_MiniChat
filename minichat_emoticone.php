<?php
// Liste des Emoticones
$emoticones_list = array(
    "smile",
    "lol",
    "biggrin",
    "cry",
    "cool",
    "clap",
    "shh",
    "ok",
    "bad",
    "silent",
    "think",
    "problem",
    "crazy",
    "wave",
    "eh",
    "wtf",
    "razz",
    "eek",
    "wink",
    "neutral",
    "angel",
    "confused",
    "mad",
    "sad",
    "rolleyes",
    "redface",
    "sick",
    "surprised",
    "mrgreen",
    "geek",
    "ugeek",
    "evil",
    "twisted",
    "arrow",
    "idea",
    "exclaim",
    "question"
);
// Formulaire Emoticones
function emoticone_form() {
    global $emoticones_list;

    foreach ($emoticones_list as $emoticone){
        echo '<img class="emoticone" src="emoticones/' . $emoticone . '.gif" alt="' . $emoticone . '" title="' . $emoticone . '" onclick="emoticoneClick(this)"/>';
    }

}
// Affiche Emoticone dans Message
function emoticone_message($msg) {
    global $emoticones_list;    

    foreach ($emoticones_list as $emoticone){
        $rstring = ":" . $emoticone . ":";

        if (strpos($msg, $rstring) !== false) {
            $msg = str_replace($rstring, '<img class="emoticone" src="emoticones/' . $emoticone . '.gif" alt="' . $emoticone . '">', $msg);
        }
    }

    return $msg;
}
?>