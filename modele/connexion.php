<?php

// Variables de connexion
$host = "localhost";
$login = "www_user";
$pass = "password";
$bdd = "_test";

// Connexion à la BDD
$connexion = mysqli_connect($host,$login,$pass,$bdd);
if($connexion){
    echo "Connexion réussie.".BR;
    echo "Information sur le serveur : ".mysqli_get_host_info($connexion).HR;
}else{
    die(HR."Erreur : ".mysqli_connect_errno()." ".mysqli_connect_error().HR);
}


// Déconnexion
function deco($connexion){
    if (mysqli_close($connexion)){
        echo "Déconnexion réussie ".BR;
    }else{
        echo "Echec de la déconnexion".BR;
    }
}

