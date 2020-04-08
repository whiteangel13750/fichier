<?php

// ---Ex1----

// $file=fopen("test.txt", "r");

// var_dump(fgets($file));

// fclose($file);

// ----Ex2---

// $file=fopen("compteur.txt", "r+");

// $pages = fgets($file);
// $pages++;
// fseek($file,0);
// fwrite($file, $pages);
// fclose($file);

// echo '<p>Cette page a été vue ' . $pages . ' fois !</p>';
// 

// ----Ex3----

// $liste=array(array("Rose", "12","2","100"),
// array("Jules","15","1","100"),
// array("Jean","6","1","100","Guerrier","0"));


// $file=fopen("index.csv", "c+");

// foreach($liste as $tab) {
// fputcsv($file, $tab);
// };

// fclose($file);

// ---Ex4---
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Formulaire du personnage</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>   
<body>

<p>Voici la description du personnage</p>

<section class="row bg-light">
    <div class="col-6">
            <div>
            <label> Nom du Personnage </label>
            <input type='text' id='nom' name='nom'>
            </div>
            <div>
            <label> Prenom du Personnage </label>
            <input type='text' id='prenom' name='prenom'>
            </div>
            <div>
            <label> Santé du Personnage </label>
            <input type='number' id='sante' name='sante'>
            </div>
            <div>
            <label> Force du Personnage </label>
            <input type='number' id='force' name='force'>
            </div>
            <div>
            <label> Niveau du Personnage </label>
            <input type='number' id='force' name='force'>
            </div>
            <div>
            <label> Soumettre le Personnage </label>
            <input type='submit' id='valider' name='valider'>
        </form>
    </div>
</section>
    </body>
</html>

