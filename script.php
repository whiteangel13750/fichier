<?php

// $file=fopen("test.txt", "r");

// var_dump(fgets($file));

// fclose($file);

$file=fopen("compteur.txt", "r");

var_dump(fgets($file));
fclose($file);

$file=fopen("compteur.txt", "c");

fwrite($file,"1");
fclose($file);

$file=fopen("compteur.txt", "r");

var_dump(fgets($file));
fclose($file);
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon compteur de page</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

 <p>Le nombre d affichage de pages est de <?=$file?> </p>