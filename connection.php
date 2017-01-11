<?php
// mise en place de la variable login
$login="" ;
$password="" ;
reset($_POST);
?>
<h1>Page d'itentification</h1>
<br />
    <p>Page de connection pour les administrat(eur/rice)s et les voyant(e)s</p>
 
    <form action="controle_login_code.php" method="post" > 
    
    <!--
        Code à remettre pour reverifier le bon fonctionnement de la requette 
         <form action="controleur_page_connection.php" method="POST" > 
    -->
          <fieldset>
                    <legend>Identification</legend>
                           <p class="formulaire">
                                   <label for="login">Identifiant : </label>
                                   <input type="text" id="login" name="login" size="20" maxlength="20" />
                           </p>
                           <p class="formulaire">
                                   <label for="password">Mot de passe : </label>
                                   <input type="password" id="password" name="password" size="9" maxlength="8" />
                           </p>
          
                           <p class="bouton">
                                   <input class="envoye" type="submit" name="envoye" value="Connection" />
                                   <input class="annule" type="reset" name="annule" value="Corriger" />
                           </p>
          </fieldset>
    </form>
 
                    
                       