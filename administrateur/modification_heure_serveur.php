<?php

// page du formulaire de la modification du planing du serveur

// reinitialisation de la variable $_POST pour le formulaire
unset($_POST);

// ouverture de la base voyant pour allez chercher tous les pseudos des voyants
$base_voyant = sqlite_open('../bases_de_donnees/base_voyant.db');

// requette pour allez chercher que les pseudos dans la base voyant
$requette_voyant = "SELECT pseudo FROM voyant ORDER BY pseudo";

// execution de la requette, en placant le resltat dans un tableau
$resultat_requette_voyant = sqlite_array_query($base_voyant,$requette_voyant);

// fermeture de la base voyant
sqlite_close($base_voyant);

/* 
création du voyant non existant qui n'existe pas dans la base voyant
 mais qui doit etre dans le choix du planning
 pour indiquer que le serveur est fermé,
 donc qui sera symbolisé par des espaces
*/
$resultat_choix[0]="----------";


// mise dans la memoire $resultat_choix des differents pseudo
for ($i=0;$i<count($resultat_requette_voyant);$i++) ($resultat_choix[$i+1] = $resultat_requette_voyant[$i]["pseudo"]);



/*
Reprise des données de la base heure_serveur.db pour savoir quel voyant est assigné au jour et heure affichés
*/

// ouverture de la base base_heure_serveur.db
$base_heure_serveur = sqlite_open('../bases_de_donnees/base_heure_serveur.db');

// ecriture de la requette
$requette_base_heure_serveur = " SELECT * FROM heure_serveur";

// execution de la requette
$resultat_requette_base_heure_serveur = sqlite_query($base_heure_serveur,$requette_base_heure_serveur);

// mise du resultat dans une variable tableau
$ligne_base_heure_serveur = sqlite_fetch_array($resultat_requette_base_heure_serveur,SQLITE_ASSOC);

// fermeture de la base de données
sqlite_close($base_heure_serveur);

// extraction des données du tableau et mise dans des variables
$dimanche10 = $ligne_base_heure_serveur["dimanche10"];
$dimanche11 = $ligne_base_heure_serveur["dimanche11"];
$dimanche12 = $ligne_base_heure_serveur["dimanche12"];
$dimanche13 = $ligne_base_heure_serveur["dimanche13"];
$dimanche14 = $ligne_base_heure_serveur["dimanche14"];
$dimanche15 = $ligne_base_heure_serveur["dimanche15"];
$dimanche16 = $ligne_base_heure_serveur["dimanche16"];
$dimanche17 = $ligne_base_heure_serveur["dimanche17"];
$dimanche18 = $ligne_base_heure_serveur["dimanche18"];
$dimanche19 = $ligne_base_heure_serveur["dimanche19"];
$dimanche20 = $ligne_base_heure_serveur["dimanche20"];
$dimanche21 = $ligne_base_heure_serveur["dimanche21"];
$dimanche22 = $ligne_base_heure_serveur["dimanche22"];
$dimanche23 = $ligne_base_heure_serveur["dimanche23"];

$lundi10 = $ligne_base_heure_serveur["lundi10"];
$lundi11 = $ligne_base_heure_serveur["lundi11"];
$lundi12 = $ligne_base_heure_serveur["lundi12"];
$lundi13 = $ligne_base_heure_serveur["lundi13"];
$lundi14 = $ligne_base_heure_serveur["lundi14"];
$lundi15 = $ligne_base_heure_serveur["lundi15"];
$lundi16 = $ligne_base_heure_serveur["lundi16"];
$lundi17 = $ligne_base_heure_serveur["lundi17"];
$lundi18 = $ligne_base_heure_serveur["lundi18"];
$lundi19 = $ligne_base_heure_serveur["lundi19"];
$lundi20 = $ligne_base_heure_serveur["lundi20"];
$lundi21 = $ligne_base_heure_serveur["lundi21"];
$lundi22 = $ligne_base_heure_serveur["lundi22"];
$lundi23 = $ligne_base_heure_serveur["lundi23"];

$mardi10 = $ligne_base_heure_serveur["mardi10"];
$mardi11 = $ligne_base_heure_serveur["mardi11"];
$mardi12 = $ligne_base_heure_serveur["mardi12"];
$mardi13 = $ligne_base_heure_serveur["mardi13"];
$mardi14 = $ligne_base_heure_serveur["mardi14"];
$mardi15 = $ligne_base_heure_serveur["mardi15"];
$mardi16 = $ligne_base_heure_serveur["mardi16"];
$mardi17 = $ligne_base_heure_serveur["mardi17"];
$mardi18 = $ligne_base_heure_serveur["mardi18"];
$mardi19 = $ligne_base_heure_serveur["mardi19"];
$mardi20 = $ligne_base_heure_serveur["mardi20"];
$mardi21 = $ligne_base_heure_serveur["mardi21"];
$mardi22 = $ligne_base_heure_serveur["mardi22"];
$mardi23 = $ligne_base_heure_serveur["mardi23"];

$mercredi10 = $ligne_base_heure_serveur["mercredi10"];
$mercredi11 = $ligne_base_heure_serveur["mercredi11"];
$mercredi12 = $ligne_base_heure_serveur["mercredi12"];
$mercredi13 = $ligne_base_heure_serveur["mercredi13"];
$mercredi14 = $ligne_base_heure_serveur["mercredi14"];
$mercredi15 = $ligne_base_heure_serveur["mercredi15"];
$mercredi16 = $ligne_base_heure_serveur["mercredi16"];
$mercredi17 = $ligne_base_heure_serveur["mercredi17"];
$mercredi18 = $ligne_base_heure_serveur["mercredi18"];
$mercredi19 = $ligne_base_heure_serveur["mercredi19"];
$mercredi20 = $ligne_base_heure_serveur["mercredi20"];
$mercredi21 = $ligne_base_heure_serveur["mercredi21"];
$mercredi22 = $ligne_base_heure_serveur["mercredi22"];
$mercredi23 = $ligne_base_heure_serveur["mercredi23"];

$jeudi10 = $ligne_base_heure_serveur["jeudi10"];
$jeudi11 = $ligne_base_heure_serveur["jeudi11"];
$jeudi12 = $ligne_base_heure_serveur["jeudi12"];
$jeudi13 = $ligne_base_heure_serveur["jeudi13"];
$jeudi14 = $ligne_base_heure_serveur["jeudi14"];
$jeudi15 = $ligne_base_heure_serveur["jeudi15"];
$jeudi16 = $ligne_base_heure_serveur["jeudi16"];
$jeudi17 = $ligne_base_heure_serveur["jeudi17"];
$jeudi18 = $ligne_base_heure_serveur["jeudi18"];
$jeudi19 = $ligne_base_heure_serveur["jeudi19"];
$jeudi20 = $ligne_base_heure_serveur["jeudi20"];
$jeudi21 = $ligne_base_heure_serveur["jeudi21"];
$jeudi22 = $ligne_base_heure_serveur["jeudi22"];
$jeudi23 = $ligne_base_heure_serveur["jeudi23"];

$vendredi10 = $ligne_base_heure_serveur["vendredi10"];
$vendredi11 = $ligne_base_heure_serveur["vendredi11"];
$vendredi12 = $ligne_base_heure_serveur["vendredi12"];
$vendredi13 = $ligne_base_heure_serveur["vendredi13"];
$vendredi14 = $ligne_base_heure_serveur["vendredi14"];
$vendredi15 = $ligne_base_heure_serveur["vendredi15"];
$vendredi16 = $ligne_base_heure_serveur["vendredi16"];
$vendredi17 = $ligne_base_heure_serveur["vendredi17"];
$vendredi18 = $ligne_base_heure_serveur["vendredi18"];
$vendredi19 = $ligne_base_heure_serveur["vendredi19"];
$vendredi20 = $ligne_base_heure_serveur["vendredi20"];
$vendredi21 = $ligne_base_heure_serveur["vendredi21"];
$vendredi22 = $ligne_base_heure_serveur["vendredi22"];
$vendredi23 = $ligne_base_heure_serveur["vendredi23"];


?>


<!-- 
     PAGE DE MODIFICATION DU PLANING DU SERVEUR
-->

<h1>PAGE DE L'ADMINISTRATEUR</h1>

         <!-- Debut du formulaire de modification du planing -->
         
         <form action="traitement_formulaire_modification_heure_serveur.php" method="post" >
         
         <fieldset>
                   <!-- TITRE DU FORMULAIRE -->
                   <legend>Modification du planing du serveur</legend>
                   <br />
                   
                       <!-- CREATION DU TABLEAU POUR LE FORMULAIRE -->
                       <table cellpandding="0" cellspacing="0" summary="Tableau du formulaire de modification du planing" >
                       
                              <!-- Balise de regroument des colonnes pour une configuration  -->
                              <colgroup>
                                        <col span="1" id="heure" />
                                        <col span="6" id="jours" />
                              </colgroup>
                              
                              <!-- creation de la premiere ligne celle des désigantion -->
                              <tr>
                                  <th></th>  <!-- ligne des désignations -->
                                  <th>Dimanche</th>
                                  <th>Lundi</th>
                                  <th>Mardi</th>
                                  <th>Mercredi</th>
                                  <th>Jeudi</th>
                                  <th>Vendredi</th>
                              </tr>
                              
                              <tr> <!-- LIGNE DES JOURS POUR 10 HEURE -->
                                  <td>10h</td>
                                  <td>
                                  <select id="form_dimanche10" name="form_dimanche10" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) { 
                                            foreach($resultat_choix as $resultat_choix2) { 
                                                    $selected = ($resultat_choix2 == $dimanche10)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>"; }}
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi10" name="form_lundi10" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) { 
                                            foreach($resultat_choix as $resultat_choix2) { 
                                                    $selected = ($resultat_choix2 == $lundi10)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";}}
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi10" name="form_mardi10" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) { 
                                            foreach($resultat_choix as $resultat_choix2) { 
                                                    $selected = ($resultat_choix2 == $mardi10)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>"; }}
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi10" name="form_mercredi10" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi10)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi10" name="form_jeudi10" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi10)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi10" name="form_vendredi10" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi10)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                              
                              <tr> <!-- LIGNE DES JOURS POUR 11 HEURE -->
                                  <td>11h</td>
                                  <td>
                                  <select id="form_dimanche11" name="form_dimanche11" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $dimanche11)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi11" name="form_lundi11" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $lundi11)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi11" name="form_mardi11" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mardi11)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi11" name="form_mercredi11" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi11)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi11" name="form_jeudi11" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi11)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi11" name="form_vendredi11" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi11)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                              
                              <tr> <!-- LIGNE DES JOURS POUR 12 HEURE -->
                                  <td>12h</td>
                                  <td>
                                  <select id="form_dimanche12" name="form_dimanche12" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $dimanche12)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi12" name="form_lundi12" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $lundi12)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi12" name="form_mardi12" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mardi12)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi12" name="form_mercredi12" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi12)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi12" name="form_jeudi12" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi12)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi12" name="form_vendredi12" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi12)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                              
                              <tr> <!-- LIGNE DES JOURS POUR 13 HEURE -->
                                  <td>13h</td>
                                  <td>
                                  <select id="form_dimanche13" name="form_dimanche13" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $dimanche13)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi13" name="form_lundi13" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $lundi13)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi13" name="form_mardi13" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mardi13)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi13" name="form_mercredi13" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi13)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi13" name="form_jeudi13" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi13)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi13" name="form_vendredi13" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi13)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                              <tr> <!-- LIGNE DES JOURS POUR 14 HEURE -->
                                  <td>14h</td>
                                  <td>
                                  <select id="form_dimanche14" name="form_dimanche14" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $dimanche14)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi14" name="form_lundi14" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $lundi14)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi14" name="form_mardi14" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mardi14)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi14" name="form_mercredi14" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi14)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi14" name="form_jeudi14" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi14)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi14" name="form_vendredi14" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi14)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                              <tr> <!-- LIGNE DES JOURS POUR 15 HEURE -->
                                  <td>15h</td>
                                  <td>
                                  <select id="form_dimanche15" name="form_dimanche15" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $dimanche15)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi15" name="form_lundi15" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $lundi15)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi15" name="form_mardi15" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mardi15)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi15" name="form_mercredi15" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi15)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi15" name="form_jeudi15" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi15)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi15" name="form_vendredi15" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi15)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                              <tr> <!-- LIGNE DES JOURS POUR 16 HEURE -->
                                  <td>16h</td>
                                  <td>
                                  <select id="form_dimanche16" name="form_dimanche16" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $dimanche16)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi16" name="form_lundi16" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $lundi16)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi16" name="form_mardi16" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mardi16)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi16" name="form_mercredi16" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi16)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi16" name="form_jeudi16" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi16)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi16" name="form_vendredi16" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi16)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                              <tr> <!-- LIGNE DES JOURS POUR 17 HEURE -->
                                  <td>17h</td>
                                  <td>
                                  <select id="form_dimanche17" name="form_dimanche17" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $dimanche17)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi17" name="form_lundi17" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $lundi17)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi17" name="form_mardi17" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mardi17)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi17" name="form_mercredi17" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi17)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi17" name="form_jeudi17" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi17)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi17" name="form_vendredi17" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi17)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                              <tr> <!-- LIGNE DES JOURS POUR 18 HEURE -->
                                  <td>18h</td>
                                  <td>
                                  <select id="form_dimanche18" name="form_dimanche18" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $dimanche18)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi18" name="form_lundi18" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $lundi18)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi18" name="form_mardi18" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mardi18)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi18" name="form_mercredi18" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi18)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi18" name="form_jeudi18" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi18)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi18" name="form_vendredi18" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi18)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                              <tr> <!-- LIGNE DES JOURS POUR 19 HEURE -->
                                  <td>19h</td>
                                  <td>
                                  <select id="form_dimanche19" name="form_dimanche19" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $dimanche19)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi19" name="form_lundi19" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $lundi19)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi19" name="form_mardi19" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mardi19)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi19" name="form_mercredi19" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi19)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi19" name="form_jeudi19" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi19)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi19" name="form_vendredi19" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi19)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                              <tr> <!-- LIGNE DES JOURS POUR 20 HEURE -->
                                  <td>20h</td>
                                  <td>
                                  <select id="form_dimanche20" name="form_dimanche20" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $dimanche20)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi20" name="form_lundi20" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $lundi20)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi20" name="form_mardi20" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mardi20)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi20" name="form_mercredi20" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi20)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi20" name="form_jeudi20" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi20)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi20" name="form_vendredi20" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi20)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                              <tr> <!-- LIGNE DES JOURS POUR 21 HEURE -->
                                  <td>21h</td>
                                  <td>
                                  <select id="form_dimanche21" name="form_dimanche21" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $dimanche21)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi21" name="form_lundi21" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2  == $lundi21)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi21" name="form_mardi21" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mardi21)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi21" name="form_mercredi21" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi21)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi21" name="form_jeudi21" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi21)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi21" name="form_vendredi21" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi21)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                              <tr> <!-- LIGNE DES JOURS POUR 22 HEURE -->
                                  <td>22h</td>
                                  <td>
                                  <select id="form_dimanche22" name="form_dimanche22" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $dimanche22)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi22" name="form_lundi22" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $lundi22)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi22" name="form_mardi22" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mardi22)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi22" name="form_mercredi22" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi22)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi22" name="form_jeudi22" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi22)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi22" name="form_vendredi22" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi22)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                              <tr> <!-- LIGNE DES JOURS POUR 23 HEURE -->
                                  <td>23h</td>
                                  <td>
                                  <select id="form_dimanche23" name="form_dimanche23" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $dimanche23)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_lundi23" name="form_lundi23" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $lundi23)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mardi23" name="form_mardi23" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mardi23)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_mercredi23" name="form_mercredi23" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $mercredi23)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_jeudi23" name="form_jeudi23" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $jeudi23)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                                  <td>
                                  <select id="form_vendredi23" name="form_vendredi23" >
                                  
                                  <?php  // code PHP qui introduit dans le formulaire la liste des voyants 
                                         if (isset($resultat_choix)) {
                                            foreach($resultat_choix as $resultat_choix2) {
                                                    $selected = ($resultat_choix2 == $vendredi23)?"selected":"";
                                                    echo "<option value=\"$resultat_choix2\" $selected >".$resultat_choix2."</option>";
                                            }
                                         }
                                  ?>
                                  </select>
                                  </td>
                              </tr>
                       </table>
          <!-- 
         ICI ON MET LES BOUTON ENVOI ET ANNUL
         -->
          <p class="bouton">
             <input class="envoye" type="submit" name="envoye" value="Validation" />
             <input class="annule" type="reset" name="annule" value="Corriger" />
          </p>

         </fieldset>
         
         
         </form>