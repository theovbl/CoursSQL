<?php
require_once('../db.php');


if (isset($_POST) && !empty($_POST)) {
    $select = $BDD->prepare('SELECT * FROM livre WHERE ISBN=?');
    $select->execute(array(
        $_POST['isbn']
    )); // rowCount ça calcule combien il y a de ligne (c'est pour isbn)
    $select = $select->rowCount();
// Si il y a 0 ligne alors on pourra créer un livre
    if ($select < 1) {
        $create = $BDD->prepare('INSERT INTO livre (titre, ISBN, résumé) VALUES (?, ?, ?)');
        $create->execute(array(
            $_POST['titre'],
            $_POST['isbn'],
            $_POST['resume']
        ));
        header('Location: ../index.php');
        // Sinon cette isbn existe déja car il y a déja une ligne de créer
    } else {
        echo '<script>
                alert("Ce ISBN existe déjà !"); 
                window.location.replace("../index.php")
            </script>';
    }
}
