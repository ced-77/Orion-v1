<?php
/*
      Script du traitement du formulaire de changement de login/identifant
*/ 

// chargement des fonctions (vers_base.php et verif_login.php)
include('../fonctions/fonction_vers_base.php');
include('../fonctions/fonction_verif_login.php');
include('../fonctions/fonction_db_lire_ligne.php');

// recuperation du pseudo du voyant dans le cookie
$pseudo = $_COOKIE["pseudo"];

// recuperation du nouveau login du formuaire
// mise de celui-ci en majuscule dans la variable $identifiant
$identifiant = strtoupper($_POST["form_login"]); 

// vérification du login dans la base voyant
// si celui-ci existe la fonction retournera TRUE 
// et donc le script s'arretera et relancera le formulaire avec notification 
// de l'erreur en barre d'adresse

$verification_login = verif_login($identifiant);

           // analysation de la variable et redirection suivant resultat
           if ($verification_login) { // login existatnt donc retour au formulaire de saisie et notification de l'erreur
                                      header ("location:page_administrateur.php?page=modification_login&err=1");
                                      exit;
                                      }
// login non existant dans la base donc on continue

// ecriture de la requette
$requette_base_voyant = sprintf ("UPDATE voyant SET login='%s' WHERE pseudo='$pseudo'",vers_base($identifiant));

// ouverture de la base voyant
$base_voyant = sqlite_open('../bases_de_donnees/base_voyant.db');

// execution de la requette
$resultat_requette_base_voyant = sqlite_query ($base_voyant,$requette_base_voyant);

// fermeture de la base voyant
sqlite_close($base_voyant);

//retour à l'accueil
header ("location:page_administrateur.php?page=accueil_administrateur");
exit;
?>