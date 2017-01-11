<?php
/*
     Traitement du formulaire de modification
     du PSEUDO et de L'ACREDITATION
*/
// chargement de la fonction vers_base et de la fonction verif_pseudo
include("../fonctions/fonction_vers_base.php");
include("../fonctions/fonction_verif_pseudo.php");

// Reprise des variables du formulaire
$nouveau_pseudo = ucwords(strtolower($_POST["form_modif_pseudo"]));
$nouveau_acreditation = $_POST["form_modif_acreditation"];

// Reprise du LOGIN pour allez rechercher dans la base les anciénnes données
$ancien_login = $_POST["form_login"];

// fabrication de la requette pour prendre les anciennes données
$requette_base_voyant = " SELECT * FROM voyant WHERE login='$ancien_login'";
 
// ouverture de la base voyant
$base_voyant = sqlite_open('../bases_de_donnees/base_voyant.db');

// execution de la requette
$resultat_requette_base_voyant = sqlite_query($base_voyant,$requette_base_voyant);

// mise en tableau du resultat
$ligne_resultat_requette_base_voyant = sqlite_fetch_array($resultat_requette_base_voyant,SQLITE_ASSOC);

// fermeture de la base voyant
sqlite_close($base_voyant);

// recupération des données
$ancien_pseudo = $ligne_resultat_requette_base_voyant["pseudo"];

/*

  Vérification du pseudo :
  Si le nouveau pseudo est différent de l'ancien on verifit que le nouveau pseudo n'existe pas deja dans la base
  sinon on passe

*/

if ($nouveau_pseudo != $ancien_pseudo) {
                                       $verif_pseudo = verif_pseudo($nouveau_pseudo);
                                       if ($verif_pseudo) {header("location:page_administrateur.php?page=modification_voyant_par_admini&voyant=$ancien_pseudo&err=1");exit;}
                                       }


/*

  Recuperation de la base des heures du serveur pour vérification et changement du nouveau pseudo

*/

// ouverture de la base base_heure_serveur.db
$base_heure_serveur = sqlite_open('../bases_de_donnees/base_heure_serveur.db');

// ecriture de la requette
$requette_base_heure_serveur = " SELECT * FROM heure_serveur";

// execution de la requette
$resultat_requette_base_heure_serveur = sqlite_query($base_heure_serveur,$requette_base_heure_serveur);

// mise du resultat dans une variable tableau
$ligne_base_heure_serveur = sqlite_fetch_array($resultat_requette_base_heure_serveur,SQLITE_ASSOC);

// fermeture de la base de données
sqlite_close($base_heure_serveur);

// extraction des données du tableau et mise dans des variables
$dimanche10 = vers_base(($ligne_base_heure_serveur["dimanche10"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche10"]);
$dimanche11 = vers_base(($ligne_base_heure_serveur["dimanche11"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche11"]);
$dimanche12 = vers_base(($ligne_base_heure_serveur["dimanche12"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche12"]);
$dimanche13 = vers_base(($ligne_base_heure_serveur["dimanche13"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche13"]);
$dimanche14 = vers_base(($ligne_base_heure_serveur["dimanche14"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche14"]);
$dimanche15 = vers_base(($ligne_base_heure_serveur["dimanche15"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche15"]);
$dimanche16 = vers_base(($ligne_base_heure_serveur["dimanche16"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche16"]);
$dimanche17 = vers_base(($ligne_base_heure_serveur["dimanche17"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche17"]);
$dimanche18 = vers_base(($ligne_base_heure_serveur["dimanche18"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche18"]);
$dimanche19 = vers_base(($ligne_base_heure_serveur["dimanche19"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche19"]);
$dimanche20 = vers_base(($ligne_base_heure_serveur["dimanche20"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche20"]);
$dimanche21 = vers_base(($ligne_base_heure_serveur["dimanche21"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche21"]);
$dimanche22 = vers_base(($ligne_base_heure_serveur["dimanche22"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche22"]);
$dimanche23 = vers_base(($ligne_base_heure_serveur["dimanche23"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["dimanche23"]);

$lundi10 = vers_base(($ligne_base_heure_serveur["lundi10"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi10"]);
$lundi11 = vers_base(($ligne_base_heure_serveur["lundi11"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi11"]);
$lundi12 = vers_base(($ligne_base_heure_serveur["lundi12"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi12"]);
$lundi13 = vers_base(($ligne_base_heure_serveur["lundi13"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi13"]);
$lundi14 = vers_base(($ligne_base_heure_serveur["lundi14"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi14"]);
$lundi15 = vers_base(($ligne_base_heure_serveur["lundi15"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi15"]);
$lundi16 = vers_base(($ligne_base_heure_serveur["lundi16"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi16"]);
$lundi17 = vers_base(($ligne_base_heure_serveur["lundi17"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi17"]);
$lundi18 = vers_base(($ligne_base_heure_serveur["lundi18"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi18"]);
$lundi19 = vers_base(($ligne_base_heure_serveur["lundi19"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi19"]);
$lundi20 = vers_base(($ligne_base_heure_serveur["lundi20"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi20"]);
$lundi21 = vers_base(($ligne_base_heure_serveur["lundi21"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi21"]);
$lundi22 = vers_base(($ligne_base_heure_serveur["lundi22"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi22"]);
$lundi23 = vers_base(($ligne_base_heure_serveur["lundi23"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["lundi23"]);
  

$mardi10 = vers_base(($ligne_base_heure_serveur["mardi10"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi10"]);
$mardi11 = vers_base(($ligne_base_heure_serveur["mardi11"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi11"]);
$mardi12 = vers_base(($ligne_base_heure_serveur["mardi12"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi12"]);
$mardi13 = vers_base(($ligne_base_heure_serveur["mardi13"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi13"]);
$mardi14 = vers_base(($ligne_base_heure_serveur["mardi14"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi14"]);
$mardi15 = vers_base(($ligne_base_heure_serveur["mardi15"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi15"]);
$mardi16 = vers_base(($ligne_base_heure_serveur["mardi16"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi16"]);
$mardi17 = vers_base(($ligne_base_heure_serveur["mardi17"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi17"]);
$mardi18 = vers_base(($ligne_base_heure_serveur["mardi18"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi18"]);
$mardi19 = vers_base(($ligne_base_heure_serveur["mardi19"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi19"]);
$mardi20 = vers_base(($ligne_base_heure_serveur["mardi20"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi20"]);
$mardi21 = vers_base(($ligne_base_heure_serveur["mardi21"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi21"]);
$mardi22 = vers_base(($ligne_base_heure_serveur["mardi22"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi22"]);
$mardi23 = vers_base(($ligne_base_heure_serveur["mardi23"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mardi23"]);

$mercredi10 = vers_base(($ligne_base_heure_serveur["mercredi10"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi10"]);
$mercredi11 = vers_base(($ligne_base_heure_serveur["mercredi11"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi11"]);
$mercredi12 = vers_base(($ligne_base_heure_serveur["mercredi12"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi12"]);
$mercredi13 = vers_base(($ligne_base_heure_serveur["mercredi13"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi13"]);
$mercredi14 = vers_base(($ligne_base_heure_serveur["mercredi14"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi14"]);
$mercredi15 = vers_base(($ligne_base_heure_serveur["mercredi15"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi15"]);
$mercredi16 = vers_base(($ligne_base_heure_serveur["mercredi16"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi16"]);
$mercredi17 = vers_base(($ligne_base_heure_serveur["mercredi17"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi17"]);
$mercredi18 = vers_base(($ligne_base_heure_serveur["mercredi18"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi18"]);
$mercredi19 = vers_base(($ligne_base_heure_serveur["mercredi19"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi19"]);
$mercredi20 = vers_base(($ligne_base_heure_serveur["mercredi20"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi20"]);
$mercredi21 = vers_base(($ligne_base_heure_serveur["mercredi21"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi21"]);
$mercredi22 = vers_base(($ligne_base_heure_serveur["mercredi22"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi22"]);
$mercredi23 = vers_base(($ligne_base_heure_serveur["mercredi23"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["mercredi23"]);

$jeudi10 = vers_base(($ligne_base_heure_serveur["jeudi10"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi10"]);
$jeudi11 = vers_base(($ligne_base_heure_serveur["jeudi11"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi11"]);
$jeudi12 = vers_base(($ligne_base_heure_serveur["jeudi12"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi12"]);
$jeudi13 = vers_base(($ligne_base_heure_serveur["jeudi13"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi13"]);
$jeudi14 = vers_base(($ligne_base_heure_serveur["jeudi14"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi14"]);
$jeudi15 = vers_base(($ligne_base_heure_serveur["jeudi15"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi15"]);
$jeudi16 = vers_base(($ligne_base_heure_serveur["jeudi16"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi16"]);
$jeudi17 = vers_base(($ligne_base_heure_serveur["jeudi17"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi17"]);
$jeudi18 = vers_base(($ligne_base_heure_serveur["jeudi18"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi18"]);
$jeudi19 = vers_base(($ligne_base_heure_serveur["jeudi19"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi19"]);
$jeudi20 = vers_base(($ligne_base_heure_serveur["jeudi20"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi20"]);
$jeudi21 = vers_base(($ligne_base_heure_serveur["jeudi21"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi21"]);
$jeudi22 = vers_base(($ligne_base_heure_serveur["jeudi22"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi22"]);
$jeudi23 = vers_base(($ligne_base_heure_serveur["jeudi23"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["jeudi23"]);

$vendredi10 = vers_base(($ligne_base_heure_serveur["vendredi10"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi10"]);
$vendredi11 = vers_base(($ligne_base_heure_serveur["vendredi11"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi11"]);
$vendredi12 = vers_base(($ligne_base_heure_serveur["vendredi12"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi12"]);
$vendredi13 = vers_base(($ligne_base_heure_serveur["vendredi13"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi13"]);
$vendredi14 = vers_base(($ligne_base_heure_serveur["vendredi14"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi14"]);
$vendredi15 = vers_base(($ligne_base_heure_serveur["vendredi15"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi15"]);
$vendredi16 = vers_base(($ligne_base_heure_serveur["vendredi16"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi16"]);
$vendredi17 = vers_base(($ligne_base_heure_serveur["vendredi17"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi17"]);
$vendredi18 = vers_base(($ligne_base_heure_serveur["vendredi18"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi18"]);
$vendredi19 = vers_base(($ligne_base_heure_serveur["vendredi19"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi19"]);
$vendredi20 = vers_base(($ligne_base_heure_serveur["vendredi20"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi20"]);
$vendredi21 = vers_base(($ligne_base_heure_serveur["vendredi21"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi21"]);
$vendredi22 = vers_base(($ligne_base_heure_serveur["vendredi22"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi22"]);
$vendredi23 = vers_base(($ligne_base_heure_serveur["vendredi23"] == $ancien_pseudo)?$nouveau_pseudo:$ligne_base_heure_serveur["vendredi23"]);

// création de la requette pour enregistrement dans la base
$requette_modification_heure_serveur = " UPDATE heure_serveur SET 
                                     dimanche10 = '$dimanche10',
                                     dimanche11 = '$dimanche11', 
                                     dimanche12 = '$dimanche12',
                                     dimanche13 = '$dimanche13',
                                     dimanche14 = '$dimanche14',
                                     dimanche15 = '$dimanche15',
                                     dimanche16 = '$dimanche16',
                                     dimanche17 = '$dimanche17',
                                     dimanche18 = '$dimanche18',
                                     dimanche19 = '$dimanche19',
                                     dimanche20 = '$dimanche20',
                                     dimanche21 = '$dimanche21',
                                     dimanche22 = '$dimanche22',
                                     dimanche23 = '$dimanche23',
                                     lundi10 = '$lundi10',
                                     lundi11 = '$lundi11',
                                     lundi12 = '$lundi12',
                                     lundi13 = '$lundi13',
                                     lundi14 = '$lundi14',
                                     lundi15 = '$lundi15',                        
                                     lundi16 = '$lundi16',
                                     lundi17 = '$lundi17',
                                     lundi18 = '$lundi18',
                                     lundi19 = '$lundi19',
                                     lundi20 = '$lundi20',
                                     lundi21 = '$lundi21',
                                     lundi22 = '$lundi22',
                                     lundi23 = '$lundi23',
                                     mardi10 = '$mardi10',
                                     mardi11 = '$mardi11',
                                     mardi12 = '$mardi12',
                                     mardi13 = '$mardi13',
                                     mardi14 = '$mardi14',
                                     mardi15 = '$mardi15',
                                     mardi16 = '$mardi16',
                                     mardi17 = '$mardi17',
                                     mardi18 = '$mardi18',
                                     mardi19 = '$mardi19',
                                     mardi20 = '$mardi20',
                                     mardi21 = '$mardi21',
                                     mardi22 = '$mardi22',
                                     mardi23 = '$mardi23',
                                     mercredi10 = '$mercredi10',
                                     mercredi11 = '$mercredi11',
                                     mercredi12 = '$mercredi12',
                                     mercredi13 = '$mercredi13',
                                     mercredi14 = '$mercredi14',
                                     mercredi15 = '$mercredi15',
                                     mercredi16 = '$mercredi16',
                                     mercredi17 = '$mercredi17',
                                     mercredi18 = '$mercredi18',
                                     mercredi19 = '$mercredi19',
                                     mercredi20 = '$mercredi20',
                                     mercredi21 = '$mercredi21',
                                     mercredi22 = '$mercredi22',
                                     mercredi23 = '$mercredi23',
                                     jeudi10 = '$jeudi10',
                                     jeudi11 = '$jeudi11',
                                     jeudi12 = '$jeudi12',
                                     jeudi13 = '$jeudi13',
                                     jeudi14 = '$jeudi14',
                                     jeudi15 = '$jeudi15',
                                     jeudi16 = '$jeudi16',
                                     jeudi17 = '$jeudi17',
                                     jeudi18 = '$jeudi18',
                                     jeudi19 = '$jeudi19',
                                     jeudi20 = '$jeudi20',
                                     jeudi21 = '$jeudi21',
                                     jeudi22 = '$jeudi22',
                                     jeudi23 = '$jeudi23',
                                     vendredi10 = '$vendredi10',
                                     vendredi11 = '$vendredi11',
                                     vendredi12 = '$vendredi12',
                                     vendredi13 = '$vendredi13',
                                     vendredi14 = '$vendredi14',
                                     vendredi15 = '$vendredi15',
                                     vendredi16 = '$vendredi16',
                                     vendredi17 = '$vendredi17',
                                     vendredi18 = '$vendredi18',
                                     vendredi19 = '$vendredi19',
                                     vendredi20 = '$vendredi20',
                                     vendredi21 = '$vendredi21',
                                     vendredi22 = '$vendredi22',
                                     vendredi23 = '$vendredi23'
                                     ";
                                     
// ouverture de la base de données base_heure_serveur.db
$base_heure_serveur = sqlite_open('../bases_de_donnees/base_heure_serveur.db');
                                     
// execution de la requette
$resultat_requette_modification_heure_serveur = sqlite_query($base_heure_serveur,$requette_modification_heure_serveur);

// fermeture de la base voyant
sqlite_close($base_heure_serveur);

/*

  Enregistrement des données dans la base voyant

*/

// creation de la requette de la base voyant pour modification 
$requette_modification_base_voyant = " UPDATE voyant SET 
                                              pseudo = '$nouveau_pseudo',
                                              direction = '$nouveau_acreditation'
                                              
                                              WHERE
                                              
                                              login = '$ancien_login'";

// ouverture de la base voyant et execution de la requette et fermeture de la base
$base_voyant = sqlite_open('../bases_de_donnees/base_voyant.db');
$resultat_requette_base_voyant = sqlite_query($base_voyant,$requette_modification_base_voyant);
sqlite_close($base_voyant);

// redirection vers l'accueil de l'admidnistration
header("location:page_administrateur.php?page=accueil_administrateur");
exite;

?>