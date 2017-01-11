<?php
/*
Traitement du formulaire de modification des heures du planing du serveur
*/

// incorporation de la fonction vers_base() pour eviter les problème d'apostrophe
include("../fonctions/fonction_vers_base.php");

// recuperation des données du formulaire et mise en variable pour enregistrement dans la base
$dimanche10 = vers_base($_POST["form_dimanche10"]);
$dimanche11 = vers_base($_POST["form_dimanche11"]);
$dimanche12 = vers_base($_POST["form_dimanche12"]);
$dimanche13 = vers_base($_POST["form_dimanche13"]);
$dimanche14 = vers_base($_POST["form_dimanche14"]);
$dimanche15 = vers_base($_POST["form_dimanche15"]);
$dimanche16 = vers_base($_POST["form_dimanche16"]);
$dimanche17 = vers_base($_POST["form_dimanche17"]);
$dimanche18 = vers_base($_POST["form_dimanche18"]);
$dimanche19 = vers_base($_POST["form_dimanche19"]);
$dimanche20 = vers_base($_POST["form_dimanche20"]);
$dimanche21 = vers_base($_POST["form_dimanche21"]);
$dimanche22 = vers_base($_POST["form_dimanche22"]);
$dimanche23 = vers_base($_POST["form_dimanche23"]);
$lundi10 = vers_base($_POST["form_lundi10"]);
$lundi11 = vers_base($_POST["form_lundi11"]); 
$lundi12 = vers_base($_POST["form_lundi12"]); 
$lundi13 = vers_base($_POST["form_lundi13"]); 
$lundi14 = vers_base($_POST["form_lundi14"]); 
$lundi15 = vers_base($_POST["form_lundi15"]);
$lundi16 = vers_base($_POST["form_lundi16"]); 
$lundi17 = vers_base($_POST["form_lundi17"]); 
$lundi18 = vers_base($_POST["form_lundi18"]); 
$lundi19 = vers_base($_POST["form_lundi19"]); 
$lundi20 = vers_base($_POST["form_lundi20"]); 
$lundi21 = vers_base($_POST["form_lundi21"]); 
$lundi22 = vers_base($_POST["form_lundi22"]); 
$lundi23 = vers_base($_POST["form_lundi23"]); 
$mardi10 = vers_base($_POST["form_mardi10"]);
$mardi11 = vers_base($_POST["form_mardi11"]); 
$mardi12 = vers_base($_POST["form_mardi12"]); 
$mardi13 = vers_base($_POST["form_mardi13"]); 
$mardi14 = vers_base($_POST["form_mardi14"]); 
$mardi15 = vers_base($_POST["form_mardi15"]); 
$mardi16 = vers_base($_POST["form_mardi16"]); 
$mardi17 = vers_base($_POST["form_mardi17"]); 
$mardi18 = vers_base($_POST["form_mardi18"]); 
$mardi19 = vers_base($_POST["form_mardi19"]); 
$mardi20 = vers_base($_POST["form_mardi20"]); 
$mardi21 = vers_base($_POST["form_mardi21"]); 
$mardi22 = vers_base($_POST["form_mardi22"]); 
$mardi23 = vers_base($_POST["form_mardi23"]);  
$mercredi10 = vers_base($_POST["form_mercredi10"]); 
$mercredi11 = vers_base($_POST["form_mercredi11"]); 
$mercredi12 = vers_base($_POST["form_mercredi12"]); 
$mercredi13 = vers_base($_POST["form_mercredi13"]); 
$mercredi14 = vers_base($_POST["form_mercredi14"]); 
$mercredi15 = vers_base($_POST["form_mercredi15"]); 
$mercredi16 = vers_base($_POST["form_mercredi16"]); 
$mercredi17 = vers_base($_POST["form_mercredi17"]); 
$mercredi18 = vers_base($_POST["form_mercredi18"]); 
$mercredi19 = vers_base($_POST["form_mercredi19"]); 
$mercredi20 = vers_base($_POST["form_mercredi20"]); 
$mercredi21 = vers_base($_POST["form_mercredi21"]); 
$mercredi22 = vers_base($_POST["form_mercredi22"]); 
$mercredi23 = vers_base($_POST["form_mercredi23"]); 
$jeudi10 = vers_base($_POST["form_jeudi10"]); 
$jeudi11 = vers_base($_POST["form_jeudi11"]);
$jeudi12 = vers_base($_POST["form_jeudi12"]);
$jeudi13 = vers_base($_POST["form_jeudi13"]);
$jeudi14 = vers_base($_POST["form_jeudi14"]);
$jeudi15 = vers_base($_POST["form_jeudi15"]);
$jeudi16 = vers_base($_POST["form_jeudi16"]);
$jeudi17 = vers_base($_POST["form_jeudi17"]);
$jeudi18 = vers_base($_POST["form_jeudi18"]);
$jeudi19 = vers_base($_POST["form_jeudi19"]);
$jeudi20 = vers_base($_POST["form_jeudi20"]);
$jeudi21 = vers_base($_POST["form_jeudi21"]);
$jeudi22 = vers_base($_POST["form_jeudi22"]);
$jeudi23 = vers_base($_POST["form_jeudi23"]);
$vendredi10 = vers_base($_POST["form_vendredi10"]);
$vendredi11 = vers_base($_POST["form_vendredi11"]);
$vendredi12 = vers_base($_POST["form_vendredi12"]);
$vendredi13 = vers_base($_POST["form_vendredi13"]);
$vendredi14 = vers_base($_POST["form_vendredi14"]);
$vendredi15 = vers_base($_POST["form_vendredi15"]);
$vendredi16 = vers_base($_POST["form_vendredi16"]);
$vendredi17 = vers_base($_POST["form_vendredi17"]);
$vendredi18 = vers_base($_POST["form_vendredi18"]);
$vendredi19 = vers_base($_POST["form_vendredi19"]);                                             
$vendredi20 = vers_base($_POST["form_vendredi20"]);
$vendredi21 = vers_base($_POST["form_vendredi21"]);
$vendredi22 = vers_base($_POST["form_vendredi22"]);
$vendredi23 = vers_base($_POST["form_vendredi23"]);

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

// redirection vers l'accueil de l'admidnistration
header("location:page_administrateur.php?page=accueil_administrateur");
exite;

?>                                                                                                       