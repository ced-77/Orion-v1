<?php
// page suppression d'un voyant

// recuperation dans la barre de tache de la variable "voyant"
// analyse de la variable [ si vide => retour accueil administratif ] sinon on continue le script
if (empty($_GET["voyant"])) {
                                             echo "pas de voyant selectionné donc fin script";
                                             exit;
   } else {
       $sup_voyant=$_GET["voyant"];
       }
       
// ecriture de la requette pour allez rechercher les données du voyants dans les bases de données
$requette_voyant="SELECT * FROM voyant WHERE pseudo='$sup_voyant'";

// ouverture des bases de données
$base_voyant=sqlite_open("../bases_de_donnees/base_voyant.db");

// lecture des requettes pour avoir le resultat
$resultat_voyant=sqlite_query($base_voyant,$requette_voyant);

// Lecture des resultats en les mettant dans deux tableaux
$ligne_voyant=sqlite_fetch_array($resultat_voyant,SQLITE_ASSOC);

// fermeture des bases de données
sqlite_close($base_voyant);

// extraction des données du tableau dans les variables
$sup_voyant_pseudo=$ligne_voyant["pseudo"];
$sup_voyant_nom=$ligne_voyant["nom"];
$sup_voyant_prenom=$ligne_voyant["prenom"];
$sup_voyant_login=$ligne_voyant["login"];
$sup_voyant_acreditation=($ligne_voyant["direction"]=="A")?"Administrateur":"Voyant";
?>
<!-- debut de la page suppression -->
<h1>PAGE DE L'ADMINISTRATEUR</h1>

         <h2><?php echo $prenom_voyant." ".$nom_voyant.", Voyant : ".$voyant; ?></h2>
         
         <blockquote>
         
                     <p class="avertissement" >Etes-vous sur de vouloir supprimer de la base de donnée le voyant correspondant à la déscription suivante :</p>
                     <br /><br />
                     <p>Voyant : <?php echo $sup_voyant_pseudo ; ?></p>
                     <p>Prénom : <?php echo $sup_voyant_prenom; ?></p>
                     <p>Nom : <?php echo $sup_voyant_nom; ?></p>
                     <br />
                     <p>Dont l'acréditation est : <?php echo $sup_voyant_acreditation; ?></p>
                     <br />
                     
                     <!-- Debut du formulaire de saisie pour confirmation du login -->
                     
                     <form action="traitement_formulaire_suppression_voyant.php?voyant=<?php echo $sup_voyant_pseudo; ?>" method="post" >
                           <p class="avertissement">Veuillez saisir son identifiant en majuscule pour vérification</p>
                           <br /> 
                           <p class="formulaire">
                              <label for="form_login" >Identifiant de <?php echo $sup_voyant_pseudo; ?> : </label>
                              <input type="text" id="form_login" name="form_login" size="20" maxlenght="20" />
                           </p>
                           <br />
                           <p class="bouton" >
                              <input class="confirmer" type="submit" name="confirmer" value="Confirmation de la suppression" />
                           </p>
         
                    </form>
         
         </blockquote>
          <br />
          <br />
         