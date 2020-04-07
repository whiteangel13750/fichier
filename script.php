<?php

// $file=fopen("test.txt", "r");

// var_dump(fgets($file));

// fclose($file);

$file=fopen("compteur.txt", "c");

$page=["affichage.html", "accueil.html"];

$max= sizeof($page);

fwrite($file, "Le nombre d affichage de pages est de". $max . "pages");

var_dump(fgets($file));

fclose($file);