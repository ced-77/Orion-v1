<?php
// afficher la liste des voyants dans un tableau

// Ouverture des bases de données
$base_voyant=sqlite_open("../bases_de_donnees/base_voyant.db");

// ecriture des requettes pour lire les bases et les mettre dans un tableau
$requette_voyant="SELECT * FROM voyant ORDER BY pseudo";

// execution de la requette
$resultat_voyant=sqlite_array_query($base_voyant,$requette_voyant);

// fermeture des bases de données
sqlite_close($base_voyant);

// mise du resultat dans un tableau en reunissant les deux bases de données
// pour cela on fait une boucle avec FOR pour la lecture et la recupération des données
// que l'on remet dans un nouveau tableau : resultat [ incrementé de la longueur de la base de donnée ]
for ($i=0;$i<count($resultat_voyant);$i++) {
             $resultat_edition [$i] ["pseudo"] = $resultat_voyant   [$i] ["pseudo"];
             $resultat_edition [$i] ["prenom"] = $resultat_voyant [$i] ["prenom"];
             $resultat_edition [$i] ["nom"]    = $resultat_voyant [$i] ["nom"];
             $resultat_edition [$i] ["mail"]   = $resultat_voyant [$i] ["mail"];
             $resultat_edition [$i] ["identifiant"]  = $resultat_voyant [$i] ["login"];
             $resultat_edition [$i] ["acreditation"] = ($resultat_voyant [$i] ["direction"]=="A")?"Admini.":"Voyant";
             }
// fin du premier script php
// debut du code html
?>
<!-- début de la page d'affichage des voyants -->
<h1>PAGE DE L'ADMINISTRATEUR</h1>
<h2>Liste des voyants</h2>
<br />
<div id="corp_tableau"> <!-- debut du corp de la page avec dimention fixe ou sera le tableau avec dimention non fixe -->

<!-- Mise en place du tableau pour la liste des voyants -->
<table cellpadding="0" cellspacing="0" summary="Tableau de la liste des voyants">

       <!-- groupement des colones de désigation -->
       <colgroup> <!-- définition du groupement des colones pour separer la désignation voyant des autres colone -->
                 <col span="1" id="voyant" />
                <col span="5" id="autre" /> 
       </colgroup>
                  <!-- Première ligne du tableau qui sera la désignation des colones -->
                  <tr>
                      <th>&nbsp;Voyant&nbsp;</th> <!-- première colone qui sera la désignation des lignes -->
                      <th>&nbsp;Prénom&nbsp;</th>
                      <th>&nbsp;Nom&nbsp;</th>
                      <th>&nbsp;E-mail&nbsp;</th>
                      <th>&nbsp;Identifiant&nbsp;</th>
                      <th>&nbsp;Acredit.&nbsp;</th>
                  </tr>
                  <?php
                  //debut du scripte pour la boucle d'affichage des voyants dans le tableau
                  if (isset($resultat_edition)) {
                     foreach($resultat_edition as $resultat_edition_2) {
                      printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
                      $resultat_edition_2["pseudo"],
                      $resultat_edition_2["prenom"],
                      $resultat_edition_2["nom"],
                      $resultat_edition_2["mail"],
                      $resultat_edition_2["identifiant"],
                      $resultat_edition_2["acreditation"]);
                      }}
                  ?>


</table>
</div>