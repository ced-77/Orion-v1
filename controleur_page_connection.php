<html>
      <head>
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      </head>

<?php


// récuperation des données du formulaire de la page connection
$identifiant1=strtoupper($_POST["login"]);
$mot_de_passe1=$_POST["password"];


// affichage des variables pour vérification
echo ('Affichage des données $identifiant1 récupéré par le POST : '.$identifiant1.'<br>');
echo ('Affichage des données $mot_de_passe1 récupéré par le POST : '.$mot_de_passe1.'<br>');

// ouverture de la base de donnée voyant
echo ('Ouverture de la base de donnée VOYANT <br>');
$base = sqlite_open("bases_de_donnees/base_voyant.db");

echo ('Affichage de la variable $base : '.$base.'<br />');

// création de la requette 
echo ('Création de la requette <br>');
$requette = sprintf("SELECT * FROM voyant WHERE login='%s'",$identifiant1);

echo ('Affichage de la requette : '.$requette.'<br>');

// execution de la requette
echo ('Execution de la requette <br>');

$resultat=sqlite_query($base,$requette);

echo ('Affichage du resultat de la requette : '.$resultat.'<br>');

// recuperation de la ligne
echo ('Récuparation de la ligne dans le résultat <br>');

$ligne=sqlite_fetch_array($resultat);

echo ('Affichage de la ligne de résultat : '.$ligne.'<br>');

// fermeture de la base 
echo ('Fermeture de la base de donnée <br>');
sqlite_close($base);

// Affichage de l'autorisation
echo ('Affichage de l\'autorisation <br> ');

$autorisation = $ligne['direction'];

echo ('Autorisation : '.$autorisation.'<br>');

// fin du scripte
exit;

?>

 </html>
