<?php
// essaye de recuperation de données pour le login et password dans la base 

// fonction ver_base
include("fonctions/fonction_vers_base.php");

// fonction db_lire_ligne pour lire une ligne dans une base de donnée
include("fonctions/fonction_db_lire_ligne.php");

// fonction de vérification de l'utilisateur et du code
include("fonctions/fonction_utilisateur_existe.php");

// début du programme en recuperant les variables saisie dans le formulaire

// récuperation des données du formulaire de la page connection
$identifiant1=strtoupper($_POST["login"]);
$mot_de_passe1=$_POST["password"];

// vérifier que l'utilisateur existe
if (utilisateur_existe($identifiant1,$mot_de_passe1)) {
   // si l'utilisateur existe et que son code est bon
   // vérifier la valeur de direction pour l'acreditation
   // resortir les données de l'identifiant pour creer un cookie et verifier la direction à prendre
   // Définition de la requete
      $requette=sprintf("SELECT * FROM voyant WHERE login='%s'",vers_base($identifiant1));
                                  
      // ouverture de la base
      $base=sqlite_open("bases_de_donnees/base_voyant.db");
                                 
             // execution de la requette pour l'identifiant
             $resultat=sqlite_query($base,$requette);
                                 
             // mise en tableau du resultat de la ligne désirée
             $ligne=sqlite_fetch_array($resultat);
             
             // fermeture de la base de donnée
             sqlite_close($base);
                                           
                      // dépot d'un cookie pour transmettre le pseudo récupérer dans $ligne
                      // et définition d'une variable pour le cookie
                      $cookie_pseudo=$ligne["pseudo"];
                      setcookie("pseudo",$cookie_pseudo,time()+(24*3600));
                                     // verification de l'autorisation et redirection
                                     $autorisation=$ligne["direction"];
                                                if ($autorisation=="A") {
                                                        // si autorisation administrateur
                                                        // allez sur page administrateur
                                                        header("location:administrateur/page_administrateur.php?page=accueil_administrateur");
                                                        exit;
                                                } elseif ($autorisation=="V") {
                                                         // si pas administrateur verifi si voyant
                                                         // si autorisation est voyant
                                                         // allez sur la page des voyants
                                                         header("location:voyant/page_voyant.php?page=accueil_voyant");
                                                         exit;
                                                         }
                                                 
   } else {
     // L'utilisateur n'existe pas alors retourner à l'accueil
     header("location:index.php?page=accueil");
      echo "l'utilisateur n'existe pas";
      exit;
     }
header("location:index.php?page=accueil");
exit;
?>