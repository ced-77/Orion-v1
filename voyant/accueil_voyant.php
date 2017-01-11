<?php
//page d'accueil de la page voyant
// controle de l'acreditation
if ($autorisation=="V") {
                        $autorisation1="Voyant(e)";
} Else { $autorisation1="Vous n'avez rien à faire ici";
}

// initialisation de la date
$aujourdhui_date = strftime("%d / %m / %Y");
// initialisation de l'heure et du fuseau hoaire
$aujourdhui_heure = strftime("%H h %M min à %Z");

?>
<!-- début de la page -->
<h1>PAGE DU VOYANT</h1>

    <h2>Bonjour <?php echo $prenom_voyant." ".$nom_voyant; ?></h2>
    <br />
                <blockquote>            
                          <p>Nous somme le : <?php echo $aujourdhui_date; ?>,</p>
                          <p>et il est .............: <?php echo $aujourdhui_heure; ?></p>
                          <br />
                          <p>Votre pseudo de voyant est : <?php echo $voyant; ?></p>
                          <p>votre identifiant est : <?php echo $login; ?></p>
                          <p>votre acreditation est bien : <?php echo $autorisation1; ?></p>
                          <br />
                          <p>Sur cette page, vous pourrez gérer votre profile et votre mot de passe.</p>
                          <p>Séléctionnez votre choix dans le menu gauche ou déconnectéz-vous pour retourner sur la page d'accueil du site.</p>
                          
                </blockquote>