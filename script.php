<?php

// $file=fopen("test.txt", "r");

// var_dump(fgets($file));

// fclose($file);

$file=fopen("compteur.txt", "r+");

$pages = fgets($file);
$pages++;
fseek($file,0);
fwrite($file, $pages);
fclose($file);

echo '<p>Cette page a été vue ' . $pages . ' fois !</p>';
?>