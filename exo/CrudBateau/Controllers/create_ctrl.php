<?php
require_once('../db.php');


if (isset($_POST) && !empty($_POST)) {
    
        $create = $BDD->prepare('INSERT INTO bateaux (nom, modele, taille, proprietaire, id_carnet) VALUES (?, ?, ?, ?, ?)');
        $create->execute(array(
            $_POST['nom'],
            $_POST['modele'],
            $_POST['taille'],
            $_POST['proprietaire'],
            $_POST['id_carnet']
        ));
        header('Location: ../index.php');
       
}