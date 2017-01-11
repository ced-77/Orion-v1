<?php
// traitement de la suppression d'un voyant

// recuperation de la variable de barre de tache
$voyant_a_supprimer=$_GET["voyant"];

// recuperation du login donnée dans le formulaire
$login_voyant_a_supprimer=$_POST["form_login"];

// ouverture des bases de données
$base_voyant=sqlite_open("../bases_de_donnees/base_voyant.db");

// ecriture de la requette pour verification [ login // pseudo ]
$requette_voyant="SELECT * FROM voyant WHERE pseudo='$voyant_a_supprimer'";

// execution de la requette
$resultat_voyant=sqlite_query($base_voyant,$requette_voyant);

// lecture du resultat
$ligne_voyant=sqlite_fetch_array($resultat_voyant,SQLITE_ASSOC);

// recuperation de l'acreditation depuis le tableau ligne
$acredi_voyant=$ligne_voyant["direction"];

if ($login_voyant_a_supprimer!=$ligne_voyant["login"]) { // si different
                                                       // fermeture de la base
                                                       sqlite_close($base_voyant);
                                                       
                                                       // envoie sur une page pour dire que l'operation n'a pas marchée
                                                       
                                                     header("location:page_administrateur.php?page=suppression_avortement&voyant=$voyant_a_supprimer&acre=$acredi_voyant&login=$login_voyant_a_supprimer");  
                                                     exit;
                                                     }
// si ok tout correspond on supprime

// suppression du fichier image si celui-ci existe
if (! empty($ligne_voyant["image"])) { 
                                  $image_a_supprimer = $ligne_voyant["image"];
                                  $emplassement_fichier ="../photos_voyants/$image_a_supprimer";
                                  if (! unlink($emplassement_fichier)) {
                                      // suppression avortée
                                      echo "la suppression sur le serveur du fichier $image_a_supprimer, à echoué, veuillez prévenir le webmaster";
                                      exit;
                                  }
 }

// ecriture des requettes de suppression dans les bases
$requette_supp_voyant="DELETE FROM voyant WHERE pseudo='$voyant_a_supprimer'";

// supprimer de la base code et de la base voyant
sqlite_query($base_voyant,$requette_supp_voyant);

// fermeture de la base
sqlite_close($base_voyant);

// redirection vers la page de confirmation
header("location:page_administrateur.php?page=suppression_confirmation&voyant=$voyant_a_supprimer&acre=$acredi_voyant");

exit;

?>