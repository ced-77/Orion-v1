<?php
// PAGE DU MENU GAUCHE DE LA PAGE ADMINISTRATEUR
//
// recherche des voyants pour les mettres dans un tableau 
// afin de les utiliser plutard dans le menu

//ouverture de la base code
$base_voyant=sqlite_open("../bases_de_donnees/base_voyant.db");

// creation de la requette pour la prise du pseudo
$requette_voyant="SELECT pseudo FROM voyant ORDER BY pseudo";

// execution de la requette pour récupérer le tableau
$resultat_requette_voyant=sqlite_array_query($base_voyant,$requette_voyant);

// fermeture de la base de donnée code
sqlite_close($base_voyant);

// mise du resultat dans un tableau pour utilisation ultérieur
for ($i=0;$i < count($resultat_requette_voyant);$i++) {$resultat_menu[$i]=$resultat_requette_voyant[$i]["pseudo"];}
?>
<br />               <!-- saut de ligne pour détacher le titre du menu -->
                        
<div id="menu">          <!-- DEBUT DU MENU GAUCHE -->

     <!-- MENU ACCUEIL -->
     
     <div class="menu" id="menu1"> 
          <a href="page_administrateur.php?page=accueil_administrateur">Accueil admini.</a>
     </div>
     
     <!-- MENU MODIFICATION PROFIL -->
     
     <div class="menu" id="menu2"> 
          <a href="page_administrateur.php?page=modification_profil">Profil</a>
     </div>
     
     <!-- MENU MODIFICATION MOT DE PASSE -->
     
     <div class="menu" id="menu3">  
          <a href="page_administrateur.php?page=modification_mot_de_passe">Mot de passe</a>
     </div>
     
     <!-- MENU MODIFICATION LOGIN/IDENTIFIANT -->
     <div class="menu" id="menu4">
          <a href="page_administrateur.php?page=modification_login">Identifiant</a>
     </div>
     
     <!-- MENU GESTION VOYANT -->
     
     <div class="menu" id="menu5" onclick="afficheMenu(this)"> 
          <a href="#">Gestion voyant</a>
     </div>
           <!-- DEBUT DES SOUS MENU DE LA GESTION VOYANT -->
           
           <div id="sousmenu5" style="display:none">
           
                <!-- CREATION DES VOYANTS -->
           
                <div class="sousmenu">
                     <a href="page_administrateur.php?page=voyant_creation">Création</a>
                </div>
                
                <!-- LISTING DES VOYANTS -->
                
                <div class="sousmenu">
                     <a href="page_administrateur.php?page=liste_voyant">Liste</a>
                </div>
                
                <!-- MENU MODIFICATION DES VOYANTS -->
                
                <div class="sousmenu" id="sousmenu3" onclick="afficheMenu(this)">
                     <a href="#">Modification</a>
                             <div id="soussousmenu3" style="display:none">
                                  <div class="soussousmenu">
                                  <?php
                                   // mise en place du menu par incrementation en prenant les valeurs du tableau $resultat
                                   if (isset($resultat_menu)) { // si il y a un resultat à afficher
                                      foreach($resultat_menu as $resultat_menu_1) {
                                              // execution de la fonction et affichage du lien
                                              echo "<a href=\"page_administrateur.php?page=modification_voyant_par_admini&voyant=$resultat_menu_1\">".$resultat_menu_1."</a>";
                                      }
                                   }
                                  ?>
                                  </div>
                             </div>
                </div>
                
                <!-- MENU SUPPRESSION DES VOYANTS -->
                
                <div class="sousmenu" id="sousmenu4" onclick="afficheMenu(this)">
                     <a href="#">Suppréssion</a>
                             <div id="soussousmenu4" style="display:none">
                                  <div class="soussousmenu">
                                  <?php
                                   // mise en place du menu par incrementation en prenant les valeurs du tableau $resultat
                                   if (isset($resultat_menu)) { // si il y a un resultat à afficher
                                      foreach($resultat_menu as $resultat_menu_1) {  /* Essaye de suppression du menu du voyant en court  */
                                                                                  if ($voyant==$resultat_menu_1) {$resultat_menu_1="";}
                                              // execution de la fonction et affichage du lien
                                              echo "<a href=\"page_administrateur.php?page=suppression_voyant&voyant=".$resultat_menu_1."\">".$resultat_menu_1."</a>";
                                      }
                                   }
                                  ?>
                                  </div>
                             </div>
                </div>
           </div>
           
     <!-- MENU DES HORAIRES -->      
           
     <div class="menu" id="menu6" onclick="afficheMenu(this)">
          <a href="#">Horaire</a>
     </div>
     
           <!-- DEBUT DES SOUS MENU HORAIRE -->
     
          <div id="sousmenu6" style="display:none">
          
               <!-- MENU HORAIRE SERVEUR -->
          
               <div class="sousmenu">
                    <a href="page_administrateur.php?page=modification_heure_serveur">Serveur</a>
               </div>
               
               <!-- MENU HORAIRE PRIVEE -->
               
               <div class="sousmenu">
                    <a href="#">Privé</a>
               </div>
          </div>
          
     <!-- DECONNECTION RETOUR A L ACCUEIL -->     
          
     <div class="menu" id="menu7">
          <a href="../deconnection.php">Déconnection</a>
     </div>
     
     <!--
         MENU OPTIONEL POUR LA LISTE DES VOYANTS
         CE MENU DEVRA ETRE RETIRER AU MOMENT DE
         LA LIVRAISON DU SITE
     -->
     
     <!-- <div class="menu" id="menu8">
          <a href="../webmaster/page_webmaster.php?WM=<?php //echo $login; ?>">Web Master</a>
     </div> -->

</div>