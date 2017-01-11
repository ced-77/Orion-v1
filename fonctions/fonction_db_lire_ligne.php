<?php
/* Fonction db_lire_ligne

 Cette fonction permet de lire une ligne dans une base de donnée
 par rapport à une requette et de stoquer celle ci dans
 une varriable tableau $ligne 
*/

function db_lire_ligne($requete) {
         // la variable $ok est utilisée pour savoir
         // si tout ce passe bien
         // ouvrir la base
         $ok = ( ($base = sqlite_open('bases_de_donnees/base_voyant.db')) !=FALSE );
         // éxecuter la requete et tester le résultat pour affecter
         // la variable $ok
         if ($ok) {
                  $ok = ( ($resultat = sqlite_query($base,$requete)) !=FALSE );
                  }
         if ($ok) { // éxecution ok
                  // lire la ligne
                  $ligne = sqlite_fetch_array($resultat);
                  }
         // retourner $ligne ou FALSE en cas d'erreur
         return ($ok)?$ligne:FALSE;
         }
?>