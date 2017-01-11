<?php
/*
fonction utilisateur existe

Cette fonction verifie si l'utilisateur existe et si le mot de passe 
qui lui est à loué est le bon 
dans ce cas là la fonction dit ok
*/
function utilisateur_existe($identifiant,$mot_de_passe) {
         // fonction qui vérifie que l'indentification saisie est correcte
         // définition et éxécution de la requete
         $requete = sprintf(
                  "SELECT * FROM voyant WHERE login ='%s'",
                  vers_base($identifiant));
         $erreur = "";
         $utilisateur = db_lire_ligne($requete);
         // l'identification est bonne s'il existe un utilisateur ayant
         // l'identifiant saisi (! empty...) et que le mot de passe corresponde
         // ($utilisateur...==...)
         $existe = ((! empty($utilisateur)) and ($utilisateur["code"] == $mot_de_passe));
         // résultat
         return $existe;
         }
?>