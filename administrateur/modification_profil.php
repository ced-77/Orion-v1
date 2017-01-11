<?php
/*
FORMULAIRE DE MODIFICATION DU PROFIL
*/

// mise à zero de la variable post du formulaire
reset($_POST);

// Analyse de la barre d'adresse pour vérifier s'il y a eu une erreur de traitement

if (isset($_GET["err"])) {
           // il y a eu une erreur de téléchargement du fichier image
           // recuperation du code erreur
           $err = $_GET["err"];
                
                // analyse du code erreur pour le message à afficher
                // err = 0 => pas d'erreur
                // err = 1 => transphère partiel
                // err = 2 => nom ou chemin inexistant
                if ($err == "1"){$message_erreur = " - Echèc de téléchargement - téléchargement partiel -";}
                elseif ($err == "2") {$message_erreur = " - Fichier ou chemin non existant - ";}
                else {$message_erreur = "erreur inconue";}
}
else {$message_erreur = "";}

?>
<!-- 

DEBUT DE LA PAGE DE MODIFICATION DU PROFIL 

-->
<h1>PAGE DE L'ADMINISTRATEUR</h1>

    <!-- début du formulaire de modification -->
    <form action="traitement_formulaire_modification_profile_voyant.php" method="post" enctype="multipart/form-data"> 
    
          <fieldset>                <!-- début du champ -->
    
                    <legend>Modification de votre profil, voyant <?php echo $voyant; ?></legend> <!-- titre du formulaire qui formera un cadre -->
                    <br />
                    <p class="formulaire">
                    
                          <label for="form_prenom">Prénom : </label>
                          <input type="text" id="form_prenom" name="form_prenom" size="25" maxlength="25" value="<?php echo $prenom_voyant ; ?>" />
                    
                          <label for="form_nom">&nbsp;&nbsp;Nom : </label>
                          <input type="text" id="form_nom" name="form_nom" size="25" maxlength="25" value="<?php echo $nom_voyant ; ?>" />
                    </p>
                    <br />
                    <p class="formulaire">                           
                          <label for="form_mail">E-mail :</label>
                          <input type="text" id="form_mail" name="form_mail" size="35" maxlength="35" value="<?php echo $mail_voyant ; ?>" />
                    </p>
                    <br />
                    <p class="formulaire">
                          <label for="form_image">Image ou photo (150x150 JPG) :</label>
                          <input type="file" id="form_image" name="form_image" size="20" title="Télécharger une image de 150x150 uniquement et en JPG" />
                    </p>
                    
                    <!-- Affichage du message d'erreur -->
                    <p class="erreur"> <?php echo $message_erreur; ?></p>
                    
                    <br />
                    <p class="formulaire">      
                          <label for="form_methodologie">Vos méthodes de voyance :</label>
                    </p>
                    <p class="formulaire">
                          <textarea id="form_methodologie" name="form_methodologie" rows="5" cols="40" ><?php echo $methodologie_voyant ; ?></textarea>
                    </p>
                    <br />
                    <p class="formulaire">
                          <label for="from_description">Décrivez vous :</label>
                    </p>
                    <p class="formulaire">
                          <textarea id="form_description" name="form_description" rows="10" cols="60" ><?php echo $description_voyant; ?></textarea>
                    </p>
                    <br />
                    <p class="bouton">
                          <input class="envoye" type="submit" name="envoye" value="Validation" />
                          <input class="annule" type="reset" name="annule" value="Corriger" />
                    </p>
                    <br />
                    
    
          </fieldset>
    
    </form>
