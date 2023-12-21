<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Bateaux</title>
    <style>
        li {
            margin: 15px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <ol>
        <?php
            require_once '../db.php';

            $ListBateaux = $BDD->prepare('SELECT * FROM bateaux');
            $ListBateaux->execute();
            $ListBateaux = $ListBateaux->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($ListBateaux as $Bateaux) {
                echo <<<echo
                <li>
                    <ul>
                        <li>{$Bateaux['id']}</li>
                        <li>{$Bateaux['nom']}</li>
                        <li>{$Bateaux['modele']}</li>
                        <li>{$Bateaux['taille']}</li>
                        <li>{$Bateaux['proprietaire']}</li>
                    </ul>
                </li>
                echo;
            }
        ?>
    </ol>
</body>
</html>