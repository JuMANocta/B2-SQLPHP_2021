<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PDO</title>
    <link href="view/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <h1>Exercice PDO</h1>
    <p>Créer un nouveau projet dans 'htdocs' en MVC.</p>
    <p>Créer une page affichant les personnes de la base.</p>
    <p>Créer une page Html contenant un formulaire en methode POST afin d'ajouter une personne.</p>
    <p>Envoyer les informations du formulaire sur une autre page récupérer $_POST afin de rajouter cette personne dans la base et renvoyer sur la page d'affichage avec 'Header('Location.</p>
    <hr>
    <?php
    include 'controller/define.php';
    include 'model/connexion.php';
    include 'model/crud.php';
    $array_retour = lire();
    ?>
    <table>
        <thead>
            <tr>
                <th colspan="5">Les Personnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <form method="post" action="controller/ecrire.php">
                    <td><input type="text" name="nom" placeholder="Votre Nom" require></td>
                    <td><input type="text" name="prenom" placeholder="Votre Prenom" require></td>
                    <td><input type="text" name="age" placeholder="Votre Age" require></td>
                    <td colspan=2><input class="button button3" type="submit" value="Envoyer"></td>
                </form>
            </tr>
            <?php foreach ($array_retour as $retour) { ?>
                <tr>
                    <form method="POST" action="controller/modifier.php">
                        <input type="hidden" name="id" value="<?= $retour['Id'] ?>">
                        <td><input type="text" name="nom" value="<?= $retour['Nom'] ?>"></td>
                        <td><input type="text" name="prenom" value="<?= $retour['Prenom'] ?>"></td>
                        <td><input type="text" name="age" value="<?= $retour['Age'] ?>"></td>
                        <td><input class="button button1" type="submit" name="modifier" value="modifier"></td>
                        <td><input class="button button2" type="submit" formaction="controller/supprimer.php" name="supprimer" value="supprimer"></td>
                    </form>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>