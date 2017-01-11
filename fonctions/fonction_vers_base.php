<?php
/* Fonction vers base

cette fonction sert à retirer certain caractère d'une chaine pour
ne pas avoir de problème de transcription vers la base de donnée 
ou l'inverse
*/
function vers_base($valeur) {
         // le seul caractère qui pose problème est l'apostrophe (') ;
         // c'est donc le seul qui est échappé par cette fonction
         // une solution valable pour toutes les bases consiste à 
         // l'échapper par lui-même => remplacement ' par ''
         return str_replace("'","''",$valeur);
         }
?>