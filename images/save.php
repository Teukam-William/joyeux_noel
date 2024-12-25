<?php
    if(!empty($_POST["nom"]) && !empty($_POST["tel"]))
    {
        $nom = $_POST['nom'];
        $tel = $_POST['tel'];
        $fileName = "personnes/autre/nom-_".$r."tel-_".$nom."_.tkr";
        $open = fopen($fileName , "a+" );
        fwrite($open , "nom: $nom");
        fwrite($open, "\n");
        fwrite($open , "tel: $tel");
        fwrite($open, "\n");
        fwrite($open, "=======================");
        fwrite($open, "\n");
        fclose($open);
    }
?>