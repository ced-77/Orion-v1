<!-- 

     DEBUT DU FORMULAIRE DE CREATION DU VOYANT

 -->
<?php

/*
  vérification si le formulaire à déjà été remplis
  mais est revenu avec une erreur 1
  pour cela on verifi toutes les variable de barre d'adresse
  et on les initialise  

*/
$postnom = (empty($_GET["n"]))?"":$_GET["n"];
$postprenom = (empty($_GET["p"]))?"":$_GET["p"];
$postmail = (empty($_GET["m"]))?"":$_GET["m"];
$postdirection = (empty($_GET["d"]))?"V":$_GET["d"];


// initialisation de la variable $_POST
reset($_POST);

// verificaiton de la variable err dans la barre d'adresse
// erreur = 0 => pas d'erreur
// erreur = 1 => pseudo deja existant
$erreur = (empty($_GET["err"]))?"0":$_GET["err"];

        if ($erreur == "1"){ $verif_pseudo = " - Pseudo déjà existant - "; }
        else { $verif_pseudo ="";}

// choix de l'affichage de l'acreditation
$checkedA = ($postdirection == "A")?"checked=\"checked\"":"";
$checkedV = ($postdirection == "V")?"checked=\"checked\"":"";

?>
<h1>PAGE DE L'ADMINISTRATEUR</h1>
<br />
    <form action="traitement_formulaire_creation_voyant.php" method="post">
          <fieldset>
               <legend>Création d'un voyant</legend>
               <br />
                        <p class="formulaire">
                           <label for="form_prenom" >Prénom : </label>
                           <input type="text" id="form_prenom" name="form_prenom" value="<?php echo $postprenom; ?>" size="25" maxlength="25" />
                           <label for="form_nom">&nbsp;&nbsp;Nom : </label>
                           <input type="text" id="form_nom" name="form_nom" value="<?php echo $postnom; ?>" size="25" maxlength="25" />
                        </p>
                        <br />
                        <p class="formulaire">
                            <label for="form_mail">Adresse e-mail : </label>
                            <input type="text" id="form_mail" name="form_mail" value="<?php echo $postmail; ?>" size="35" maxlength="35" />
                        </p>
                        <br />
                        <p class="formulaire">
                            <label for="from_pseudo">Pseudo du voyant : </label>
                            <input type="text" id="form_pseudo" name="form_pseudo" size="20" maxlenght="20" />
                        </p>
                        <p class="erreur"><?php echo $verif_pseudo; ?></p>
                        <br />
                        <p class="formulaire">
                           <label for="form_direction">Acréditation : </label>
                           <input type="radio" id="form_direction" name="form_direction" value="A" <?php echo $checkedA; ?> />Administrat(eur/rice)
                           <input type="radio" id="form_direction" name="form_direction" value="V" <?php echo $checkedV; ?> />Voyant(e)
                        </p>
                        <br />
                        <p class="bouton">
                           <input class="envoye" type="submit" name="envoye" value="Validation" />
                           <input class="annule" type="reset" name="annule" value="Corriger" />
                        </p>
                        <br /><br />
                           <p class="citation"><cite> &nbsp;ATTENTION : bien remplir tous les champs pour ne pas avoir de problème&nbsp; </cite></p> 
                        <br />          
          </fieldset>
    </form>
    