<?php
/*
   script pour la fonction de verification du login
   si celui-ci existe deja dans la base voyant alors la fonction renvera VRAIS
   sinon elle revenra FAUX et le login pourras etre creer
*/

function verif_login($login) {
         // mise en caractere majuscule du login à tester
         $identifiant = strtoupper($login);
         
         // ecriture de la requette à executer
         $requette = sprintf ("SELECT * FROM voyant WHERE login='%s'",vers_base($identifiant));
         
         //verification que la base de donnée existe si oui $ok = VRAIS/TRUE sinon FAUX/FALSE
         $ok = (($base_voyant = sqlite_open('../bases_de_donnees/base_voyant.db'))!= FALSE );
         
         // execution de la requette si $ok est vrais sinon on passe
         if ($ok) { $ok = (($resultat_requette = sqlite_query($base_voyant,$requette)) != FALSE);}
         
         // si la base existe et que la requette à pu etre executer 
         // alors on met celle-ci en tableau pour lire la ligne
         if ($ok) { $ligne = sqlite_fetch_array($resultat_requette); }
         
         // on lit la ligne de verification si le pseudo existe
         // la fonction empty permet de savoir si la ligne elle-même existe
         // et apres etre sure que le login existe
         $existe = ((! empty($ligne)) and ($ligne["login"] == $identifiant));
         
         // retour du resultat VRAIS/TRUE si existe et FAUX/FALSE si n'existe pas
         return $existe;
         }
?>