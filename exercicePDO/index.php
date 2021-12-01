<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PDO</title>
</head>
<body>
    <h1>Exercice PDO</h1>
    <p>Créer un nouveau projet dans 'htdocs' en MVC.</p>
    <p>Créer une page affichant les personnes de la base.</p>
    <p>Créer une page Html contenant un formulaire en methode POST afin d'ajouter une personne.</p>
    <p>Envoyer les informations du formulaire sur une autre page récupérer $_POST afin de rajouter cette personne dans la base et renvoyer sur la page d'affichage avec 'Header('Location.</p>
    <hr>
    <form method="post" action="view/formulaire.php">
        <input type="text" name="nom" placeholder="Votre Nom" require>
        <input type="text" name="prenom" placeholder="Votre Prenom" require>
        <input type="text" name="age" placeholder="Votre Age" require>
        <input type="submit" value="Envoyer">
    </form>
    <?php
    include 'controler/define.php';
    include 'model/connexion.php';
    include 'model/crud.php';
    $array_retour = lire();
    foreach($array_retour as $retour){
        echo $retour['Nom']." ";
        echo $retour['Prenom']." ";
        echo $retour['Age'];
        echo BR;
    }
    ?>
</body>
</html>