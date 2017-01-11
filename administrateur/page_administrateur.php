<?php
// page de l'administateur avec tous les choix
// controle du cookie si existant on continue sinon retour à l'accueil
if (! isset($_COOKIE["pseudo"]) ) {
   // si cookie pas existant retour à l'accueil
   
   header("location:../index.php?page=accueil");
   exit; // fermeture du script
   }  

// puisque le cookie est existant
// récuperation de celui-ci pour le pseudo dans la variable $cookie_pseudo en le mettant en majuscule
$cookie_pseudo=$_COOKIE["pseudo"];

// ouverture de la base code pour vérifier si l'acreditation est bonne sinon retour à l'accueil
$base=sqlite_open("../bases_de_donnees/base_voyant.db");

       // création de la requette pour la recherche dans la base
       $requete="SELECT * FROM voyant WHERE pseudo='$cookie_pseudo'";
       $resultat=sqlite_query($base,$requete);

       // resortir la ligne en tableau dans la variable $ligne
       $ligne=sqlite_fetch_array($resultat,SQLITE_ASSOC);

// fermeture de la base
sqlite_close($base);

        // vérification de l'acreditation si ok alors continu sinon retour à l'accueil
        if ($ligne["direction"] != "A") { // acreditation non administrateur
        
                                echo "page administrateur, cookie ok, acreditaton : ".$ligne["direction"];
                                exit;
                                
                                
                              header("location:../index.php?page=accueil");  // redirection vers l'accueil
                              exit; // fermeture du script 
        }
        
 // rechercher les données de la personne dans la base voyant
   // ouverture de la base voyant
   $base_voyant=sqlite_open("../bases_de_donnees/base_voyant.db");
         // recupérer le nom et le prenom de la personne grace au peudo repri dans la base code
         //formulation de la requette
         $requete="SELECT * FROM voyant WHERE pseudo='$cookie_pseudo'";
         $resultat_voyant=sqlite_query($base_voyant,$requete);
         
         // edition du resultat dans une variable tableau 
         $ligne_voyant=sqlite_fetch_array($resultat_voyant,SQLITE_ASSOC);
         
   // fermeture de la base voyant
   sqlite_close($base_voyant);
       
// début de la page
// initialisatin des mémoires
$login=$ligne["login"];
$voyant=$cookie_pseudo;
$autorisation=$ligne["direction"];
$mot_de_passe=$ligne["code"];
//recuperation du nom et du prénom
$nom_voyant=$ligne_voyant["nom"];
$prenom_voyant=$ligne_voyant["prenom"];
$mail_voyant=$ligne_voyant["mail"];
$image_voyant=$ligne_voyant["image"];
$methodologie_voyant=$ligne_voyant["methodologie"];
$description_voyant=$ligne_voyant["description"];
   
   // récuperation, analyse de la variable de barre de tache, affectation de celle-ci
   // annalyse par condition vrais faux, et affectation condition, vrais, faux 
   $page=(empty($_GET["page"]))?"accueil_administrateur":$_GET["page"];
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <html>  
    <head> <!-- entete du fichier index pour sa configuration -->       

        <title>Cabinet ORION, Page Administrateur</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />  
        <meta name="generator" content="PSPad editor, www.pspad.com" /> 
        <meta name="author" content="Cedric RAY" />
        <meta name="description" content="Cabinet ORION, voyance" />
        <meta name="keywords" content="cabinet orion,voyance,medium,paris,carte,cartomencie" />
        <meta name="distribution" content="global" />
        <meta name="rating" content="general" />
        
        <style type="text/css" >
               @import url(../style_css/config_site.css);
               @import url(../style_css/config_bandeau.css);
               @import url(../style_css/config_menu_gauche.css);
               @import url(../style_css/config_<?php echo $page; ?>.css);
               @import url(../style_css/config_pied.css);
        </style>
        <script type="text/javascript" src="../fonctions/functions.js"></script>
         
        
          
    </head>
        
    <body>   <!-- corp du site qui donne l'affichage -->
             <div id="page">     <!-- définition dea marges du site -->
                
                   <div id="bandeau_haut">   <!-- Mise en place du bandeau haut pour le titre du site -->
                   <?php                // incorporation du bandeau
                        include("../bandeau.php");
                   ?>
                   </div>
                   
                   <div id="menu_gauche">    <!-- mise en place du menu gauche du site -->
                   <?php                // incorporation du menu de gauche
                        include("menu_gauche_administrateur.php");
                   ?>     
                   </div>
                   
                   <div id="corp">        <!-- mise en place du corp de la page -->
                   <?php             // incorporation du corp de page
                        include($page.".php"); 
                   ?> 
                   </div>
                   
                   <div id="pied">        <!-- mise en place du pied de page pour le copyrigth et les notes -->
                   <?php             // incorporation du pied de page
                        include("../pied.php");
                   ?>     
                   </div>
                   
             </div>   
    </body>
  </html>
            