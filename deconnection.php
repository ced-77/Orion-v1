<?php
// fichier de déconnection
// suppréssion du cookie
setcookie("pseudo");
// réinitialisation des variables
unset(
      $identifiant1,
      $mot_de_passe,
      $ligne,
      $ligne_voyant,
      $cookie_pseudo,
      $autorisation,
      $login,
      $voyant,
      $nom_voyant,
      $prenom_voyant,
      $mail_voyant,
      $image_voyant,
      $methodologie_voyant,
      $description_voyant);
// retour à la page accueil de l'index
header("location:index.php?page=accueil");
exit;
?>