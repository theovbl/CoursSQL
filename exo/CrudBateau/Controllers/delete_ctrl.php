<?php
require_once('../db.php');


if (isset($_POST) && !empty($_POST)) {
    $delete = $BDD->prepare('DELETE FROM bateaux WHERE id=?');
    $delete->execute(array(
        $_POST['delete']
    ));
    
} 
header('Location: ../index.php');