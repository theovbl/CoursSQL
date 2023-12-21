<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Un Bateaux</title>
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
    <?php
    require_once('../db.php');
    if (isset($_POST) && !empty($_POST)) {
        $update = $BDD->prepare('SELECT * FROM bateaux WHERE id=?');
        $update->execute(array(
            $_POST['update']
        ));
        $update = $update->fetch(PDO::FETCH_ASSOC);
    }
    ?>
    <form action="../Controllers/update_ctrl.php" method='post'>
        <fieldset>
            <legend>Modifier un bateau</legend>
            <pre>
                <label for="id">ID :</label>
                <input type="number" name="id" id="id" readonly value="<?php echo $update['id'] ?>">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" value="<?php echo $update['nom'] ?>">
                <label for="modele">Modèle :</label>
                <input type="text" name="modele" id="modele"  value="<?php echo $update['modele'] ?>">
                <label for="taille">Taille :</label>
                <input type="text" name="taille" id="taille"  value="<?php echo $update['taille'] ?>">
                <label for="proprietaire">Propriétaire :</label>
                <input type="text" name="proprietaire" id="proprietaire"  value="<?php echo $update['proprietaire'] ?>">
                <input type="submit" value="Modifier">
            </pre>
        </fieldset>
    </form>
    
</body>
</html>