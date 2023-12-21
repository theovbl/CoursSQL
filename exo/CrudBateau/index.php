<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gérer les bateaux</title>
    <style>
        table {
            margin: 50px auto;
        }
        table,tr,th,td {
            border: 1px solid #000000;
            border-collapse: collapse;
            padding: 20px;            
        }
        th, td {   
            text-align: center;         
            width: 200px;
        }
        th {
            color: blue;
        }
    </style>
</head>
<body>
    <form action="" method='POST'>
        <table>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Modèle</th>
                <th>Taille</th>
                <th>Propriètaire</th>
            </tr>
            <?php
                require_once('./Controllers/read_ctrl.php');
                foreach($ListBateau as $bateau) {
                    echo "<tr>";
                    foreach ($bateau as $colonne) {
                        echo "<td>$colonne</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </form>
</body>
</html>