<?php
// page du traitement du formulaire pour le rentrer dans la base de donnée

// incorporation de la fonction vers_base() pour eviter les problème d'apostrophe
include("../fonctions/fonction_vers_base.php");

// recupération des variables du formulaire dans un tableau pour traitement
$prenom_voyant=vers_base(ucwords($_POST["form_prenom"]));
$nom_voyant=vers_base(strtoupper($_POST["form_nom"]));
$mail_voyant=vers_base($_POST["form_mail"]);
$methodologie_voyant=vers_base($_POST["form_methodologie"]);
$description_voyant=vers_base($_POST["form_description"]);

//recupération du pseudo par le cookie
$voyant=$_COOKIE["pseudo"];

/*

  DEBUT DE LA PARTIE DU TRAITEMENT DE L'IMAGE

*/

// Initialisation de la varible de message d'erreur
$message_erreur_image = "";

// recupération des informations sur le fichier image
$information_fichier_image = $_FILES["form_image"];

// recupération du code erreur du telechargement du fichier image
$code_erreur_fichier_image = $information_fichier_image["error"];

     // analyse du code erreur
     switch ($code_erreur_fichier_image) {
     
            // Aucun nom de fichier saisie
            case UPLOAD_ERR_NO_FILE :
                 // on initialise la variable d'enregistrement de l'image 
                 break;
                 
            // Fichier partiellement telecharge
            case UPLOAD_ERR_PARTIAL  :
                 // on initialise la variable message d'erreur et 
                 // et retour au formulaire de saisie
                 $message_erreur_image = "1";
                 header("location:page_voyant.php?page=modification_profil&err=$message_erreur_image");
                 exit;
                 break;
                 
            // fichier non téléchargé, erreur dans le nom ou le chemin d'orrigine
            case 5 :
                 // initialisation de la variable message d'erreur
                 // et retour au formulaire de saisie
                 $message_erreur_image = "2";
                 header("location:page_voyant.php?page=modification_profil&err=$message_erreur_image");
                 exit;
                 break;
                 
            // fichier bien téléchargé
            case UPLOAD_ERR_OK :
                 // recuperation des données du fichier, nom et emplacement temporaire
                 $nom_fichier = $information_fichier_image["name"];
                 $emplacement_temporaire = $information_fichier_image["tmp_name"];
                 
                 // extraction de l'extention du fichier
                 $extention_fichier = strrchr($nom_fichier,".");
                 
                 // création du nouveau nom et de sa nouvelle destination
                 $image_voyant = $voyant.$extention_fichier;
                 $destination_nouvelle = "../photos_voyants/$image_voyant";
                 
                 // copy du fichier dans son emplacement
                 if (copy($emplacement_temporaire,$destination_nouvelle)) {
                       // copie reussie, on enregistre le nom du fichier dans la base de données
                       
                          // creation de la requette
                          $requette_image_voyant = "UPDATE voyant SET image='$image_voyant' WHERE pseudo='$voyant'";
                    
                          // ouverture de la base voyant
                          $base_voyant = sqlite_open ('../bases_de_donnees/base_voyant.db');
                    
                          // execution de la requette
                          $resultat_requette_image_voyant = sqlite_query($base_voyant,$requette_image_voyant);
                    
                          // fermeture de la base voyant
                          sqlite_close($base_voyant);
                       // execution de la suite du scripte pour enregistrer le reste
                       break;
                 }
                 else {echo"Transphère sur emplacement du serveur echoué";exit;}
                 break;
                 
            // erreur de type inconue
            default :
            $message_erreur_image = "3";
            header("location:page_voyant.php?page=modification_profil&err=3");
            exit;
            
     // fin analyse code erreur  on continue le script
     }

/*

  DEBUT DE LA PARTIE DE L'ENREGISTREMENT DANS LA BASSE DE DONNEES
  
*/

// ouverture de la base voyant.db
$base=sqlite_open("../bases_de_donnees/base_voyant.db");

// creation de la requette pour la modification des données issue de formulaire
$requete="UPDATE voyant SET nom='$nom_voyant',
                            prenom='$prenom_voyant',
                            mail='$mail_voyant',
                            methodologie='$methodologie_voyant',
                            description='$description_voyant'
                        WHERE pseudo='$voyant'";
                                  
// execution de la requette
$resultat=sqlite_query($base,$requete);

// fermeture de la base voyant
sqlite_close($base);

// redirection vers l'accueil du voyant
header("location:page_voyant.php?page=accueil_voyant");
exit;


?>