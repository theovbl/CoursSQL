<?php
require_once('../db.php');

// Ici on va modifier les nouvelles données directement dans la base de donnée
if (isset($_POST) && !empty($_POST)) {
    $update = $BDD->prepare('UPDATE bateaux SET nom=?, modele=?, taille=?, proprietaire=? WHERE id=?');
    $update->execute(array(
        $_POST['nom'],
        $_POST['modele'],
        $_POST['taille'],
        $_POST['proprietaire'],
        $_POST['id'],
    ));
}
header('Location: ../index.php');