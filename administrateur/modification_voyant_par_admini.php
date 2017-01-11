<?php
// PAGE DE MODIFICATION DES VOYANT PAR L ADMINISTRATEUR

// recuperation de la variable voyant dans la barre de navigation
$modif_pseudo=(empty($_GET["voyant"]))?header("location:page_administrateur.php?accueil_administrateur"):$_GET["voyant"];

// remise à zero de la variable POST
unset($_POST);

// récuperation des données du voyant
   // ouverture de la base voyant
      $base_voyant=sqlite_open("../bases_de_donnees/base_voyant.db");
   
      // ecriture de la requette
         $requette_voyant="SELECT * FROM voyant WHERE pseudo='$modif_pseudo'";
         
      // execution de la requette
         $resultat_requette_voyant=sqlite_query($base_voyant,$requette_voyant);
         
      // lecture du resultat
         $ligne_voyant=sqlite_fetch_array($resultat_requette_voyant,SQLITE_ASSOC);
         
   // fermeture de la base code
         sqlite_close($base_voyant);
         
// recuperation des variable et attribution de celles-ci
$modif_acreditation=$ligne_voyant["direction"];
$modif_identifiant=$ligne_voyant["login"];

// atribution de la variable pour la selection de l'acreditation
$acredit_A=($modif_acreditation=="A")?"SELECTED":"";
$acredit_V=($modif_acreditation=="V")?"SELECTED":"";


// verification de la variable err dans la barre de navibation
// erreur = 1 => pseudo existant
// erreur = 0 => pseudo inexistant
$erreur = (empty($_GET["err"]))?"0":$_GET["err"];

if ($erreur == "1") { $verif_pseudo = " - Pseudo déjà existant - "; }
else { $verif_pseudo = "" ;}


 
// FIN DU SCRIPTE
?>
<!--
    DEBUT DE LA PAGE DE SAISIE MODIFICATION VOYANT / ADMINISTRATEUR
-->
<h1>PAGE DE L'ADMINISTRATEUR</h1>

    <h2><?php echo $prenom_voyant." ".$nom_voyant.", Voyant : ".$voyant; ?></h2>

    <!-- DEBUT DU FORMULAIRE DE SAISIE -->
    <form action="traitement_formulaire_modification_voyant_par_admini.php" method="post">
     <fieldset id="general" >
         <legend>Modification du voyant <?php echo $modif_pseudo; ?> </legend>
         <br />
             <p>
                <!-- CHAMPS POUR LE PSEUDO -->
                <label for="form_modif_pseudo" >Pseudo : </label>
                <input type="text" id="form_pseudo" name="form_modif_pseudo" size="20" maxlength="20" value="<?php echo $modif_pseudo; ?>" />
             </p>
             <br />
             <p class="erreur"><?php echo $verif_pseudo; ?></p>
             <br />
                 <!-- CHAMP CACHEE POUR ENVOYE DU LOGIN -->
                 <input type="hidden" name="form_login" value="<?php echo $modif_identifiant; ?>" >
             
             <p>
                 <!-- CHAMP POUR L ACREDITATION  -->
                 <label for="form_acreditation" >Acréditation : </label>
                       <select id="form_acreditation" name="form_modif_acreditation">
                               <option value="A" <?php echo $acredit_A; ?> >Administrat(eur/rice)</option>
                               <option value="V"<?php echo $acredit_V; ?> >Voyant(e)</option>
                       </select>
             </p>             
             <!-- 
                  ICI ON MET LES BOUTON ENVOI ET ANNUL
             -->
             <p class="bouton">
                <input class="envoye" type="submit" name="envoye" value="Validation" />
                <input class="annule" type="reset" name="annule" value="Corriger" />
             </p>

     </fieldset>
    </form>




