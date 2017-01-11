<?php
   
   // récuperation, analyse de la variable de barre de tache, affectation de celle-ci
   // annalyse par condition vrais faux, et affectation condition, vrais, faux 
   $page=(empty($_GET["page"]))?"accueil":$_GET["page"];
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
  <html>  
    <head> <!-- entete du fichier index pour sa configuration -->       

        <title>Cabinet ORION, cabinet de voyance sur Paris</title>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />  
        <meta name="generator" content="PSPad editor, www.pspad.com" /> 
        <meta name="author" content="Cedric RAY" />
        <meta name="description" content="Cabinet ORION, voyance" />
        <meta name="keywords" content="cabinet orion,voyance,medium,paris,carte,cartomencie" />
        <meta name="distribution" content="global" />
        <meta name="rating" content="general" />
        
        <style type="text/css" >
               @import url(/style_css/config_site.css);
               @import url(/style_css/config_bandeau.css);
               @import url(/style_css/config_menu_gauche.css);
               @import url(/style_css/config_<?php echo $page; ?>.css);
               @import url(/style_css/config_pied.css);
        </style>
        
        <!-- SCRIPT JAVASCRIPT -->
        
        <script type="text/javascript" src="../fonctions/functions.js"></script>
         
        
          
    </head>
        
    <body>   <!-- corp du site qui donne l'affichage -->
             <div id="page">     <!-- définition dea marges du site -->
                
                   <div id="bandeau_haut">   <!-- Mise en place du bandeau haut pour le titre du site -->
                   <?php                // incorporation du bandeau
                        include("bandeau.php");
                   ?>
                   </div>
                   
                   <div id="menu_gauche">    <!-- mise en place du menu gauche du site -->
                   <?php                // incorporation du menu de gauche
                        include("menu_gauche.php");
                   ?>     
                   </div> 
                    
                   <div id="corp">        <!-- mise en place du corp de la page -->
                   <?php             // incorporation du corp de page
                        include($page.".php"); 
                   ?> 
                   </div>
                   
                   <div id="pied">        <!-- mise en place du pied de page pour le copyrigth et les notes -->
                   <?php             // incorporation du pied de page
                        include("pied.php");
                   ?>     
                   </div>
                   
             </div>   
    </body>
  </html>