<?php
/*
fonction pour controler le pseudo et voir si celui-ci existe
si c'est le cas la fonction renvoie VRAI sinon FAUX
la variable $pseudo correspond au pseudo à chercher
*/

function verif_pseudo($pseudo) {

         // ecriture de la requette pour recuperer les données de la base voyant
         $requette_voyant = sprintf( "SELECT * FROM voyant WHERE pseudo='%s'", vers_base($pseudo));
                                    
         // ouverture de la base voyant pour aller chercher les info
         $base_voyant = sqlite_open("../bases_de_donnees/base_voyant.db");
         
         // execution de la requette
         // si celle-ci peut etre executé la variable $ok prend la valeur VRAI sinon 
         // la variable $ok prend la valeur FAUX
         $ok=( ($resultat_requette_voyant = sqlite_query($base_voyant,$requette_voyant)) !=FALSE );
         
         //Vérification de la variable $ok si celle-ci retourne VRAIS execution
         // de la lecture du resultat de la requette
         // si la variable $ok retourne FAUX alors on passe
         if ($ok) {$ligne_voyant = sqlite_fetch_array($resultat_requette_voyant);}

         // fermeture de la base de donnee
         sqlite_close($base_voyant);         
                  
         // on lit la ligne de verification si le pseudo existe
         // la fonction empty permet de savoir si la ligne elle-même existe
         // et apres etre sure que le pseudo existe
         $existe = ((! empty($ligne_voyant)) and ($ligne_voyant["pseudo"] == $pseudo));
         
         // retour du resultat VRAIS si existe et FAUX si n'existe pas
         return $existe;
}
?>