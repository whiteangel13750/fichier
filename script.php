<?php

// $file=fopen("test.txt", "r");

// var_dump(fgets($file));

// fclose($file);

// $file=fopen("compteur.txt", "r+");

// $pages = fgets($file);
// $pages++;
// fseek($file,0);
// fwrite($file, $pages);
// fclose($file);

// echo '<p>Cette page a été vue ' . $pages . ' fois !</p>';
// 

$liste=array(array("Rose", "12","2","100"),
array("Jules","15","1","100"),
array("Jean","6","1","100"));


$file=fopen("index.csv", "w");

foreach($liste as $tab) {
fputcsv($file, $tab);
};

var_dump($tab);
fclose($file);

?>
