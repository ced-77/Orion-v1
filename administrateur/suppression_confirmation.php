<?php
// Page de confirmation de suppression du voyant

// recuperation depuis la barre de tache du nom de voyant supprimé 
$sup_voyant_pseudo=$_GET["voyant"];
$sup_voyant_acreditation=($_GET["acre"]=="A")?"Administrat(eur/rice)":"Voyant(e)";

?>
<!--  creation de la page conifrmation suppression voyant -->
<h1> PAGE DE L'ADMINISTRATEUR </h1>

     <h2><?php echo $prenom_voyant." ".$nom_voyant.", Voyant : ".$voyant; ?></h2>
     
     <blockquote>
                 <h3 class="avertissement" >Suppréssion</h3>
                 <p><?php echo $sup_voyant_acreditation."   ".$sup_voyant_pseudo; ?></p>
                 <br />
                 <p class="avertissement" >Confirmée</p>
                 
     </blockquote>
     

