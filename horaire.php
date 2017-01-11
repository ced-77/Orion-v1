<?php
// page pour afficher le planing du serveur
// ouverture de la base base_heure_serveur.db
$base_heure_serveur = sqlite_open('bases_de_donnees/base_heure_serveur.db');

// ecriture de la requette
$requette_base_heure_serveur = " SELECT * FROM heure_serveur";

// execution de la requette
$resultat_requette_base_heure_serveur = sqlite_query($base_heure_serveur,$requette_base_heure_serveur);

// mise du resultat dans une variable tableau
$ligne_base_heure_serveur = sqlite_fetch_array($resultat_requette_base_heure_serveur);

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
<br />
<h1>Grille horaire du serveur</h1>
<br />
 <p>Vous trouverez ici les horaires de la semaine pour chaque voyant(e)</p>

        <table cellpadding="0" cellspacing="0" summary="Tableau des horaires des voyants sur le serveu"> <!-- mise en place tu tableau pour l'horaire des voyants -->
               
                       <colgroup>                     <!-- balise de regroupement des colones pour la configuration de toutes les colones -->
                               <col span="1" id="heure" />       <!-- définition pour l'application sur toutes les colones -->
                               <col span="6" id="jours" />
                       </colgroup>
                       
                       <tr>                            <!-- création de la première ligne pour les désignations -->
                               <th></th>  <!-- ligne des désignations -->
                               <th>Dimanche</th>
                               <th>Lundi</th>
                               <th>Mardi</th>
                               <th>Mercredi</th>
                               <th>Jeudi</th>
                               <th>Vendredi</th>
                       </tr>
                       <tr>
                               <td>10h</td>
                               <td> <?php echo $dimanche10;  ?> </td>
                               <td> <?php echo $lundi10; ?> </td>
                               <td> <?php echo $mardi10; ?> </td>
                               <td> <?php echo $mercredi10; ?> </td>
                               <td> <?php echo $jeudi10; ?> </td>
                               <td> <?php echo $vendredi10; ?> </td>
                       </tr>
                       <tr>
                               <td>11h</td>
                               <td> <?php echo $dimanche11;  ?> </td>
                               <td> <?php echo $lundi11; ?> </td>
                               <td> <?php echo $mardi11; ?> </td>
                               <td> <?php echo $mercredi11; ?> </td>
                               <td> <?php echo $jeudi11; ?> </td>
                               <td> <?php echo $vendredi11; ?> </td>
                       </tr>
                       <tr>
                               <td>12h</td>
                               <td> <?php echo $dimanche12;  ?> </td>
                               <td> <?php echo $lundi12; ?> </td>
                               <td> <?php echo $mardi12; ?> </td>
                               <td> <?php echo $mercredi12; ?> </td>
                               <td> <?php echo $jeudi12; ?> </td>
                               <td> <?php echo $vendredi12; ?> </td>
                       </tr>
                       <tr>
                               <td>13h</td>
                               <td> <?php echo $dimanche13;  ?> </td>
                               <td> <?php echo $lundi13; ?> </td>
                               <td> <?php echo $mardi13; ?> </td>
                               <td> <?php echo $mercredi13; ?> </td>
                               <td> <?php echo $jeudi13; ?> </td>
                               <td> <?php echo $vendredi13; ?> </td>
                       </tr>
                       <tr>
                               <td>14h</td>
                               <td> <?php echo $dimanche14;  ?> </td>
                               <td> <?php echo $lundi14; ?> </td>
                               <td> <?php echo $mardi14; ?> </td>
                               <td> <?php echo $mercredi14; ?> </td>
                               <td> <?php echo $jeudi14; ?> </td>
                               <td> <?php echo $vendredi14; ?> </td>
                       </tr>
                       <tr>
                               <td>15h</td>
                               <td> <?php echo $dimanche15;  ?> </td>
                               <td> <?php echo $lundi15; ?> </td>
                               <td> <?php echo $mardi15; ?> </td>
                               <td> <?php echo $mercredi15; ?> </td>
                               <td> <?php echo $jeudi15; ?> </td>
                               <td> <?php echo $vendredi15; ?> </td>
                               
                       </tr>
                       <tr>
                               <td>16h</td>
                               <td> <?php echo $dimanche16;  ?> </td>
                               <td> <?php echo $lundi16; ?> </td>
                               <td> <?php echo $mardi16; ?> </td>
                               <td> <?php echo $mercredi16; ?> </td>
                               <td> <?php echo $jeudi16; ?> </td>
                               <td> <?php echo $vendredi16; ?> </td>
                       </tr>
                       <tr>
                               <td>17h</td>
                               <td> <?php echo $dimanche17;  ?> </td>
                               <td> <?php echo $lundi17; ?> </td>
                               <td> <?php echo $mardi17; ?> </td>
                               <td> <?php echo $mercredi17; ?> </td>
                               <td> <?php echo $jeudi17; ?> </td>
                               <td> <?php echo $vendredi17; ?> </td>
                       </tr>
                       <tr>
                               <td>18h</td>
                               <td> <?php echo $dimanche18;  ?> </td>
                               <td> <?php echo $lundi18; ?> </td>
                               <td> <?php echo $mardi18; ?> </td>
                               <td> <?php echo $mercredi18; ?> </td>
                               <td> <?php echo $jeudi18; ?> </td>
                               <td> <?php echo $vendredi18; ?> </td>
                       </tr>
                       <tr>
                               <td>19h</td>
                               <td> <?php echo $dimanche19;  ?> </td>
                               <td> <?php echo $lundi19; ?> </td>
                               <td> <?php echo $mardi19; ?> </td>
                               <td> <?php echo $mercredi19; ?> </td>
                               <td> <?php echo $jeudi19; ?> </td>
                               <td> <?php echo $vendredi19; ?> </td>
                       </tr>
                       <tr>
                               <td>20h</td>
                               <td> <?php echo $dimanche20;  ?> </td>
                               <td> <?php echo $lundi20; ?> </td>
                               <td> <?php echo $mardi20; ?> </td>
                               <td> <?php echo $mercredi20; ?> </td>
                               <td> <?php echo $jeudi20; ?> </td>
                               <td> <?php echo $vendredi20; ?> </td>
                       </tr>
                       <tr>
                               <td>21h</td>
                               <td> <?php echo $dimanche21;  ?> </td>
                               <td> <?php echo $lundi21; ?> </td>
                               <td> <?php echo $mardi21; ?> </td>
                               <td> <?php echo $mercredi21; ?> </td>
                               <td> <?php echo $jeudi21; ?> </td>
                               <td> <?php echo $vendredi21; ?> </td>
                       </tr>
                       <tr>
                               <td>22h</td>
                               <td> <?php echo $dimanche22;  ?> </td>
                               <td> <?php echo $lundi22; ?> </td>
                               <td> <?php echo $mardi22; ?> </td>
                               <td> <?php echo $mercredi22; ?> </td>
                               <td> <?php echo $jeudi22; ?> </td>
                               <td> <?php echo $vendredi22; ?> </td>
                       </tr>
                       <tr>
                               <td>23h</td>
                               <td> <?php echo $dimanche23;  ?> </td>
                               <td> <?php echo $lundi23; ?> </td>
                               <td> <?php echo $mardi23; ?> </td>
                               <td> <?php echo $mercredi23; ?> </td>
                               <td> <?php echo $jeudi23; ?> </td>
                               <td> <?php echo $vendredi23; ?> </td>
                       </tr>
                       
                                          
        </table>        
