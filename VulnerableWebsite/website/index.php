<?php
include ("includes/utilities.php");
$title = "Accueil";
?>


<!DOCTYPE html>
<html>
    <?php include ("includes/head.php"); ?>
    <?php include ("includes/header.php"); ?>
    <body>
<article>

<img width="15%" src="assets/junia_small.jpg"/>

<br/>
<br/>

        Bonjour,<br/>
<br/>


        Bienvenue sur le site web ISEN News. <br/>
        Le seul site web utile et moderne pour avoir des renseignements sur les activités en cours à l'ISEN<br/><br/>

        Connexion à l'interface : <strong>user / user1234</strong>
        <br/>
        <br/>
        Le but de ce TD est de découvrir l'ensemble des failles cachées sur ce site web. <br/>
         Un rapport sera à rendre à l'issu de celui-ci.<br/>

        Pour chaque faille, vous inclurez les éléments suivants dans votre rapport: <br/>
        <ul>
            <li> Faille découverte </li>
            <li> URL et paramètres impactés </li>
            <li> Exploitation de cette faille </li>
            <li> Capture d'écran </li>
            <li> Patch de la faille dans le code et explication du patch </li>

    
</ul>

Lors de votre rendu, vous transmettrez votre rapport ainsi qu'une archive contenant l'ensemble du projet (Fichiers Docker compris).<br/>
Votre rapport sera à rendre avant le 10 Février. Vous le rendrez sur la tâche Teams dédiée.<br/>

</article>
<aside>
        <?php include ("get_articles.php"); ?>
</aside>

    </body>
</html>
