<?php
// PAGE DU MENU GAUCHE DE LA PAGE INDEX
//
// recherche des voyants pour les mettres dans un tableau 
// afin de les utiliser plutard dans le menu

//ouverture de la base code
$base_voyant=sqlite_open("bases_de_donnees/base_voyant.db");

// creation de la requette pour la prise du pseudo
$requette_voyant="SELECT pseudo FROM voyant ORDER BY pseudo";

// execution de la requette pour récupérer le tableau
$resultat_voyant=sqlite_array_query($base_voyant,$requette_voyant);

// fermeture de la base de donnée code
sqlite_close($base_voyant);

// mise du resultat dans un tableau pour utilisation ultérieur
for ($i=0;$i < count($resultat_voyant);$i++) {$resultat_menu[$i]=$resultat_voyant[$i]["pseudo"];}
?>
<br />               <!-- saut de ligne pour détacher le titre du menu -->
                        
<div id="menu">          <!-- DEBUT DU MENU GAUCHE -->

     <!-- MENU ACCUEIL -->
     
     <div class="menu" id="menu1"> 
          <a href="index.php?page=accueil">Accueil</a>
     </div>
     
     <!-- MENU DES PROFILES DES VOYANTS -->
     
     <div class="menu" id="menu2" onclick="afficheMenu(this)" > 
          <a href="#">Voyant(e)s</a>
     </div>
     
           <!-- DEBUT DU SOUS MENU DES PROFILS -->
           
           <div id="sousmenu2" style="display:none" >
           
                <!-- SOUS MENU DES VOYANTS -->
                
                <div class="sousmenu">
                     <?php
                          // mise en place du menu par incrementation en prenant les valeurs du tableau $resultat
                          if (isset($resultat_menu)) { // si il y a un resultat à afficher
                             foreach($resultat_menu as $resultat_menu_1) {
                                    // execution de la fonction et affichage du lien
                                    echo "<a href=\" index.php?page=profil&voyant=".$resultat_menu_1."\">".$resultat_menu_1."</a>";
                             }
                          }
                     ?>
                </div>
           </div>
           
     <!-- MENU DES HORAIRES -->      
           
     <div class="menu" id="menu3" onclick="afficheMenu(this)">
          <a href="#">Horaire</a>
     </div>
     
           <!-- DEBUT DES SOUS MENU HORAIRE -->
     
          <div id="sousmenu3" style="display:none">
          
               <!-- MENU HORAIRE SERVEUR -->
          
               <div class="sousmenu">
                    <a href="index.php?page=horaire">Serveur</a>
               </div>
               
               <!-- MENU HORAIRE PRIVEE -->
               
               <div class="sousmenu">
                    <a href="#">Privé</a>
               </div>
          </div>      
           
           
     
     
     <!-- MENU FORUM -->
     
     <div class="menu" id="menu4">  
          <a href="#">Forum</a>
     </div>
     
     <!-- MENU BLOG -->
     
     <div class="menu" id="menu5" >
          <a href="#">Blog</a>
     </div>
          
     <!-- MENU CONNECTION -->     
          
     <div class="menu" id="menu6">
          <a href="index.php?page=connection">Connection</a>
     </div>
  

</div>