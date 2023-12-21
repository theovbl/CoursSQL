<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un bateau</title>
    <style> 
        form {
            width: 50%;
            margin: 100px auto;
        }
        form * {
            margin: 5px;
            padding: 10px;
        }

    </style>
</head>
<body>
<form action="../Controllers/create_ctrl.php" method='post'>
        <fieldset>
            <legend>Créer un bateau</legend>
            <pre>
                <label for="titre">Nom :</label>
                <input type="text" name="nom" id="nom">
                <label for="modele">Modèle :</label>
                <input type="text" name="modele" id="modele">
                <label for="taille">Taille :</label>
                <input type="text" name="taille" id="taille">
                <label for="proprietaire">Propriétaire :</label>
                <input type="text" name="proprietaire" id="proprietaire">
                <label for="id_carnet">Propriétaire :</label>
                <input type="text" name="id_carnet" id="id_carnet">
                <input type="submit" value="Créer">
            </pre>
        </fieldset>
    </form>
</body>
</html>