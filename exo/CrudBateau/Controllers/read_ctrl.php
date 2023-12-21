<?php
$BDD = new PDO
(
    'mysql:host=localhost; dbname=bateau; charset=utf8;',
    'THEO',
    'Azerty123'
);
$ListBateau = $BDD->prepare('SELECT * FROM bateaux');
$ListBateau->execute();
$ListBateau = $ListBateau->fetchAll(PDO::FETCH_ASSOC);