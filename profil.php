<?php
// PAGE DE VISUALISATION DU PROFIL VOYANT
//
// recuperation de la variable qui donnera le voyant à afficher
$voyant=(empty($_GET["voyant"]))?header("location:index.php?page=accuei"):$_GET["voyant"];

// recuperation des données du profil du voyant à afficher

// ouverture de la base voyant
$base_voyant=sqlite_open("bases_de_donnees/base_voyant.db");

    // écriture de la requette
    $requette_voyant="SELECT * FROM voyant WHERE pseudo='$voyant'";
    
    // execution de la requette
    $resultat_requette_voyant=sqlite_query($base_voyant,$requette_voyant);
    
    // lecture du resultat
    $ligne_voyant=sqlite_fetch_array($resultat_requette_voyant);
    
// fermeture de la base voyant
sqlite_close($base_voyant);

// affiliation des variabbles pour affichage dans le profil
$edit_voyant=$ligne_voyant["pseudo"];
$edit_methode=nl2br($ligne_voyant["methodologie"]);
$edit_description=nl2br($ligne_voyant["description"]);
$edit_image = ($ligne_voyant["image"] == "")?"photo_default.jpg":$ligne_voyant["image"];

?>

<!--
     DEBUT LE PAGE DE CORP DU PROFIL DU VOYANT
 -->

<!-- BLOQUE D AFFICHAGE DE L IMAGE --> 
<div id="image">
<!-- <p> Ici il y aura l'image du voyant</p> -->
<img src="../photos_voyants/<?php echo $edit_image; ?>" alt="photo du voyant : <?php echo $edit_voyant; ?>" title="photo du voyant : <?php echo $edit_voyant; ?>" />
</div>

<h1>Profil du voyant <?php echo $edit_voyant; ?></h1>

<!-- BLOQUE DE LA METHODE -->
<div id="cadre_methode">


     <!-- AFFICHAGE DE LA METHODE -->
     <div id="methode">
     <p><?php echo $edit_methode; ?></p>
     </div>
     
<h2> Méthode utilisé par <?php echo $edit_voyant; ?> : </h2>
<br />
<h2>Déscription de <?php echo $edit_voyant; ?></h2>     
</div>

<!-- BLOQUE DE LA DESCRIPTION -->
<div id="description" >
<p><?php echo $edit_description; ?></p>
</div>



