<?php
// script du traitement du formulaire de la création du voyant

// recuperation de la fonction vers_base() pour gérer les problème d'apostrophe
// et recuperation des fonctions verif_pseudo et verif_login
include("../fonctions/fonction_vers_base.php");
include('../fonctions/fonction_verif_pseudo.php');
include('../fonctions/fonction_verif_login.php');

// récupération du tableau dans la variable du formulaire $_POST
$nom_voyant=vers_base(strtoupper($_POST["form_nom"]));
$prenom_voyant=vers_base(ucwords(strtolower($_POST["form_prenom"])));
$mail_voyant=vers_base($_POST["form_mail"]);
$pseudo_voyant=vers_base(ucwords(strtolower($_POST["form_pseudo"])));
$acreditation_voyant=vers_base($_POST["form_direction"]);

// ICI ON DOIT CREER UN BLOQUE POUR SAVOIR SI LE PSEUDO EXISTE DEJA OU SI LE LOGIN EXISTE DEJA 
$verif_pseudo = verif_pseudo($pseudo_voyant);
              if ($verif_pseudo) { /* pseudo déjà existant */ 
                                 
                                 // initialisation des variables pour la barre d'adresse
                                 $postnom = strtoupper($_POST["form_nom"]);
                                 $postprenom = ucwords(strtolower($_POST["form_prenom"]));
                                 $postmail =  $_POST["form_mail"];
                                 $postdirection = $_POST["form_direction"];
                                 
                                 // chargement du formulaire 
                                 header("location:page_administrateur.php?page=voyant_creation&err=1&n=$postnom&p=$postprenom&m=$postmail&d=$postdirection$");
                                 exit;}

// si pseudo n'existe pas alors on continue

// création du login et verification de celui-ci
// prise de la première lettre du prenom que l'on accolera au nom avec un .
$premiere_lettre=substr($prenom_voyant,0,1);
$login_voyant=vers_base(strtoupper($premiere_lettre.".".$nom_voyant));


// verification si le login est deja pris
$verif_login = verif_login($login_voyant);

             if ($verif_login) { // login deja existant
                               
                                 // initialisation des variables pour la barre d'adresse
                                 $postnom = strtoupper($_POST["form_nom"]);
                                 $postprenom = ucwords(strtolower($_POST["form_prenom"]));
                                 $postmail =  $_POST["form_mail"];
                                 $postdirection = $_POST["form_direction"];
                                 $login_auto = strtoupper($premiere_lettre.".".$nom_voyant);
                                 
                                 // chargement du formulaire de choix manuel du login
                                 header("location:page_administrateur.php?page=formulaire_creation_login_manuellement&n=$postnom&p=$postprenom&m=$postmail&d=$postdirection&v=$pseudo_voyant&l=$login_auto");
                                 exit;
             
                                 }
// si login non existant alors on continue

// création et initialisation du code pass
$mot_de_passe_voyant="0000";

//initialisation des variables manquante 
$expression_1="A remplir, en mettant ici votre méthodologie de voyance (ex. cartomencie, tarologie...) ...";
$expression_2="A remplir, en mettant un déscriptif de vous mmême...";
$methodologie_voyant=vers_base($expression_1);
$description_voyant=vers_base($expression_2);

//initialisation de la variable image le temps qu'elle soit utilisée
$image_voyant="";

// ouverture de la bases de données base_voyant.db 
$base_voyant=sqlite_open("../bases_de_donnees/base_voyant.db");

// creation de la requette pour la création du nouveau voyant dans la base de données base_voyant.db

$requete_voyant="INSERT INTO voyant(
                                    login,
                                    code,
                                    direction,
                                    pseudo,
                                    nom,
                                    prenom,
                                    mail,
                                    image,
                                    methodologie,
                                    description)
                                          
                        VALUES(
                        '$login_voyant',
                        '$mot_de_passe_voyant',
                        '$acreditation_voyant',
                        '$pseudo_voyant',
                        '$nom_voyant',
                        '$prenom_voyant',
                        '$mail_voyant',
                        '$image_voyant',
                        '$methodologie_voyant',
                        '$description_voyant')";


// execution de la requette
sqlite_query($base_voyant,$requete_voyant);

// fermeture de la bases de données
sqlite_close($base_voyant);

// fabrication du mail à envoyer au voyant pour lui donner le login, le pseudo, le code
$corp_mail="Bonjours,".$prenom_voyant." ".$nom_voyant.",

vous recevez ce mail pour vous dire que vous etes inscrit en tant que voyant sur le site : Cabinet ORION. \r
Pour vous connecter sur le site votre identifiant est :".$login_voyant." \r 
et votre mot de passe est : ".$mot_de_passe_voyant." \r

Nous vous souhaitons bonne visite pour compléter votre profile
Le webmasteur.";
$objet_message="Cabinet ORION, votre identifiant et mot de passe";
$entete_mail="From: Cabinet ORION <cedric.ray@libertysurf.fr>\r\n";
 
// envoye du mail au voyant
$ok=mail($mail_voyant,$objet_message,$corp_mail,$entete_mail);

// redirection vers la page de l'accueil de l'administration
header("location:page_administrateur.php?page=accueil_administrateur");
exit;

?>