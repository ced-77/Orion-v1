<?php
/* 
     Formulaire de création du login manuellement
*/

// reprise des variables dans la barre d'adresse
$nom_voyant = $_GET["n"];
$prenom_voyant = $_GET["p"];
$mail_voyant = $_GET["m"];
$direction_voyant = $_GET["d"];
$pseudo_voyant = $_GET["v"];
$login_auto = $_GET["l"];

// définition de l'acréditation
$acreditation = ($direction_voyant == "A")?"Administrat(eur/rice)":"Voyant(e)";

// récuperation dans un tableau des logins deja existant

   // ecriture de la requette
      $requette_liste_login = "SELECT login FROM voyant ORDER BY login";
      
   // ouverture de la base voyant
      $base_voyant = sqlite_open('../bases_de_donnees/base_voyant.db');
      
   // execution de la requette
      $resultat_requette_liste_login = sqlite_array_query($base_voyant,$requette_liste_login);
      
   // fermeture de la base voyant
      sqlite_close($base_voyant);
      
   // mise du resultat dans un tableau pour utilisation
      for ($i=0;$i < count($resultat_requette_liste_login);$i++) {$resultat_liste_login[$i] = $resultat_requette_liste_login[$i]["login"];}

?>
<!-- 

     ICI DEBUT DU FORMULAIRE DE SAISIE MANUELLE DU LOGIN

-->

<h1>PAGE DE L'ADMINISTRATEUR</h1>

<form action="#" method="post">

      <!-- Debut du cadre du formulaire -->
      <fieldset>
      
                <!-- Titre du formulaire -->
                <legend>Choix de l'identifiant manuellement pour le voyant <?php echo $pseudo_voyant; ?> &nbsp;&nbsp;</legend>
                
                
                <br />
                <p>L'identifiant automatique <?php echo $login_auto; ?> étant déja pris,<br /> 
                nous vous demandons de le créer vous même. </p>
                <br />
                
                <!-- Block de recapitulation des données déjà saisie et acceptées -->
                
                <p id="prenom" >Prénom du voyant : <?php echo $prenom_voyant; ?> &nbsp;&nbsp;&nbsp;&nbsp; Nom du voyant : <?php echo $nom_voyant; ?></p>
                
                <p id="mail" >E-mail du voyant : <?php echo $mail_voyant; ?></p><br />
                <p id="acredit" >Acréditation définie pour ce voyant : <?php echo $acreditation; ?></p>
                
                
                
                
                <!-- division pour l'affichage des indentifiants deja existant -->
                
                <div id="identifiant">
                <h2>Liste des identifiants déjà existant</h2>
                 <?php 
                 // affichage de tous les identifiants existant
                 if (isset($resultat_liste_login)) {
                           // si il y a un resutat à afficher
                           foreach ($resultat_liste_login as $resultat_liste_login_1) {
                                   // execution de la fonction et affichage du login
                                   echo $resultat_liste_login_1." - ";
                                   }
                 }
                 ?>
                </div>
                
                <!-- Affichage de la zone de saisie pour le choix de l'identifiant -->
                
                
                
                
                <!-- Affichage de la zone des boutons de validation ou annulation -->
                
                
      

      
      </fieldset>
</form>

