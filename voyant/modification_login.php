<?php
/*
    Formulaire de modification du login/identifiant
*/

// remise à zéro de la variable $_POST
unset($_POST);

// reprise de la variable d'erreur en barre d'adresse
$erreur = (isset($_GET["err"]))?$_GET["err"]:"0";

// analyse de la variable erreur avec les codes suivant
//  erreur = 0 => aucune erreur
//  erreur = 1 => login dejas existant
//  erreur = 2 =>  
if ($erreur == "1") {$login_existant = "-- Identifant déjà existant --";}
else {$login_existant = "";}



?>

<!--
              ICI C EST LE DEBUT DU CORP DE PAGE
              POUR LA MODIFICATION DU LOGIN/IDENTIFICATION
-->

<h1>PAGE DU VOYANT</h1>

<!-- début du formulaire de modification du login -->
<form action="traitement_formulaire_modification_login.php" method="post">

      <!-- début du champ des saisies -->
      <fieldset>
      <!-- titre du formulaire -->
      <legend>Modification de l'identification, voyant <?php echo $voyant ; ?></legend>
      <br /><br />
      
      <!-- Debut du questionnaire du forumlaire -->
      
           <!-- champ de saisie pour le nouveau login -->
           <p class="formulaire">
              <label for="form_login" >Nouvel indentifiant : </label>
              <input type="text" id="form_login" name="form_login" size="20" maxlength="20" value="<?php echo $login; ?>" />     
          </p>
          
          <!-- affichage de la ligne erreur -->
          <br />
          <p class="erreur" ><?php echo $login_existant; ?></p>
          <br />
         
<!-- 
         ICI ON MET LES BOUTON ENVOI ET ANNUL
-->         
          <p class="bouton">
             <input class="envoye" type="submit" name="envoye" value="Validation" />
             <input class="annule" type="reset" name="annule" value="Corriger" />
          </p>

      </fieldset>
</form>