<?php
// Création de la fonction afficher_tableau
function affcher_tableau($tableau,$titre="",$niveau=0) {
         // paramètres
         // - $tableau = tableau dont il faut afficher le contenu
         // - $titre = titre à afficher au dessus du contenu
         // - $niveau = niveau d'affichage
         // s'il y a un titre, l'afficher
         if ($titre !="") { echo "<p><b>$titre</b></p><br />\n"; }
         // tester s'il y a des données
         if (isset($tableau)) { // il y a des données
            // parcourir le tableau passée en paramètre
            reset ($tableau);
            while (list ($cle, $valeur) = each ($tableau)) {
                  // afficher la clé avec indentation fonction du niveau
                  echo 
                       str_pad("",12*$niveau,"&nbsp;").
                         htmlentities($cle) ." = ";
                         
            }
         }

?>