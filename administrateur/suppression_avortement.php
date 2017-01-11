<?php
// page de confirmation d'avortement de la suppression

// recuperation des variable de barre de tache
$sup_voyant_pseudo=$_GET["voyant"];
$sup_voyant_acreditation=($_GET["acre"]=="A")?"Administrat(eur/rice)":"Voyant(e)";
$sup_voyant_login=$_GET["login"];

?>
<!-- creation de la page de confirmation d'avortement de la suppression -->
<h1> PAGE DE L'ADMINISTRATEUR </h1>

     <h2><?php echo $prenom_voyant." ".$nom_voyant.", Voyant : ".$voyant; ?></h2>
     
     <blockquote>
                 <h3 class="avertissement" >Suppréssion</h3>
                 <p class="avertissement" >Avortée</p>
                 <br />
                 <p><?php echo $sup_voyant_acreditation."   ".$sup_voyant_pseudo; ?></p>
                 <br />
                 <p>Identification saisie : <?php echo $sup_voyant_login ; ?></p>
                 
                 
     </blockquote>
  