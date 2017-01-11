<?php
/* Formulaire du changement de mot de passe */

// remise à zero de la variable $_POST
unset($_POST);

// verification de l'existance de la variable err de bare de navigation
$erreur=(empty($_GET["err"]))?"0":$_GET["err"];

// verrification du style d'erreur 
// sachat que 0 = Acunne erreur
//            1 = Ancien mot de passe incorecte
//            2 = Confirmation nouveau mot de passe incorecte

if ($erreur == "1") {
    $erreur_mot_de_passe = "Mot de passe incorecte";
    $erreur_confirmation = "";
    }
elseif ($erreur == "2") {
       $erreur_mot_de_passe ="";
       $erreur_confirmation = "Confrmation éronnée";
       }
else {
     $erreur_mot_de_passe = "";
     $erreur_confirmation = "";
} 



?>

<!--
          ICI C EST LE DEBUT DU CORP DE PAGE
          POUR LA MODIFICATION DU MOT DE PASSE
-->

<h1>PAGE DE L'ADMINISTRATEUR</h1>

<!-- Debut du formulaire de modification du mot de passe -->
<form action="traitement_formulaire_modification_mot_de_passe.php" method="post">

      <!-- debut du champs du formulaire -->
      <fieldset>
      <!-- Titre du formulaire -->
      <legend>Modification de votre mot du passe, voyant <?php echo $voyant; ?></legend>
      <br /><br />
      
       <!-- Debut du formuaire /questionnaire  -->
          
             <!-- Demande du mot de passe actuelle -->
             <p class="formulaire" >
             <label for="form_ancien_mot_de_passe" >Mot de passe actutel : </label>
             <input type="password" id="form_ancien_mot_de_passe" name="form_ancien_mot_de_passe" />
             </p>
             
             <!-- Affichage du message de l'erreur de la saisie du mot de passe  -->
             <p class="erreur"><?php echo $erreur_mot_de_passe ; ?></p>
             <br />
             
             <!-- Demande du nouveau mot de passe -->
             <p class="formulaire" >
             <label for="nouveau_mot_de_passe" >Nouveau mot de passe : </label>
             <input type="password" id="form_nouveau_mot_de_passe" name="form_nouveau_mot_de_passe" />
             </p>
             <br />
             
             <!-- Demande de confirmation du nouveau mot de passe -->
             <p class="formulaire" >
             <label for="form_confirmation_nouveau_mot_de_passe" name="form_confirmation_nouveau_mot_de_passe" >Confirmation mot de passe : </label>
             <input type="password" id="form_confirmation_nouveau_mot_de_passe" name="form_confirmation_nouveau_mot_de_passe" />
             </p>
             
             <!-- Affichage du message de l'erreur de saisie de la confirmation -->
             <p class="erreur"><?php echo $erreur_confirmation ; ?></p>
             <br />
             
             <!-- Champ de confirmation de code en hidden -->
             <input type="hidden" name="mot_de_passe" value="<?php echo $mot_de_passe; ?>" />
                    
         
         <!-- 
         ICI ON MET LES BOUTON ENVOI ET ANNUL
         -->
         
          <p class="bouton">
             <input class="envoye" type="submit" name="envoye" value="Validation" />
             <input class="annule" type="reset" name="annule" value="Corriger" />
          </p>
      </fieldset>
</form>

