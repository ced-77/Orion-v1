<?php
// Traitement du formulaire du changement du mot de passe

// recuperation des variables POST
$mot_de_passe = $_POST["mot_de_passe"];
$ancien_mot_de_passe = $_POST["form_ancien_mot_de_passe"];
$nouveau_mot_de_passe = $_POST["form_nouveau_mot_de_passe"];
$confirmation_nouveau_mot_de_passe = $_POST["form_confirmation_nouveau_mot_de_passe"];

//recupération du pseudo par le cookie
$voyant=$_COOKIE["pseudo"];

// Vérification des mots de passe et leur concordance

if ($ancien_mot_de_passe == $mot_de_passe)
   {
    if ($nouveau_mot_de_passe == $confirmation_nouveau_mot_de_passe)
       {// mot de passe et verification confirmée alors mise à jour de la base voyant
           $requette_mot_de_passe = "UPDATE voyant SET code='$nouveau_mot_de_passe' WHERE pseudo='$voyant'";
           $base_voyant = sqlite_open('../bases_de_donnees/base_voyant.db');
           $resultat_requette_mot_de_passe = sqlite_query($base_voyant,$requette_mot_de_passe);
           sqlite_close ($base_voyant);
        // redirection vers la page de l'accueil de l'administration
           header("location:page_voyant.php?page=accueil_voyant");
           exit;}
    else {// confirmation du nouveau mot de passe incorecte
             
          // redirection vers la page du formulaire de modification du mot de passe
             header("location:page_voyant.php?page=modification_mot_de_passe&err=2");
             exit;}}
              
else {// ancien mot de passe érroné
         
      // redirection vers la page du formulaire
         header("location:page_voyant.php?page=modification_mot_de_passe&err=1");
         exit;};
exit;
?>