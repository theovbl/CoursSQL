# SQL
SQL est un language de base de donnée principalement

Méthode CRUD 

INSERT INTO ( Create )

SELECT ( READ )

UPDATE ( UPDATE )

DELETE ( DELETE )

## Créer une base de donnée si elle n'existe pas
CREATE DATABASE IF NOT EXISTS
CREATE DATABASE "BaseDeDonnee"; Une base de donnée c'est une base qui va stocké des données donc des tables

## Créer une table si elle n'existe pas
    CREATE TABLE IF NOT EXISTS table (
        NomColonne1 type_donnee,
        colonne2 type_donnee,
        colonne3 type_donnee
    );
## Créer une table même si elle existe
    CREATE TABLE table (
        NomColonne1 type_donnee,
        colonne2 type_donnee,
        colonne3 type_donnee
    );

### Exemple concret
    CREATE TABLE utilisateur (
        id INT PRIMARY KEY NOT NULL,
        nom VARCHAR(100),
        prenom VARCHAR(255)
    );


##### PRIMARY KEY 
Défini la colonne en tant que clé primaire
c'est à dire défini la colonne comme un token

##### NOT NULL 
La colonne n'aura jamais de valeur null

### Type Données

INT, BIGINT, TINYINT (entier)

FLOAT, DOUBLE (nombre à virgule)

VARCHAR, TEXT, LONGTEXT, TINYTEXT, ect... (Chaine de caractère)

DATETIME (La date et l'heure)

DATE (La date)

BOOLEAN (true, false)

ENUM (Choix variable défini)


## Modifier une table existante
    ALTER TABLE nomTable


## J'ajoute une clé primaire
    ALTER TABLE nomTable
        ADD PRIMARY KEY ('nomColonne')
## J'ajoute une colonne
    ALTER TABLE nomTable
        ADD nomColonneChien VARCHAR(100)
## Je retire une colonne
    ALTER TABLE nomTable
        DROP nomColonne
## Je modifie une colonne
    ALTER TABLE nomTable
        MODIFY nomColoneChien VARCHAR(200)
## Je change le nom d'une colonne
    ALTER TABLE nomTable
        CHANGE nomColonneChien nomColonneChat;

Alter table permet de modifier une colonne de la table défini dans mon cas juste au dessus je défini la colonne nomColonne comme clé primaire


# Clé Etrangère 
Une clé etrangère c'est quand une colonne d'une table fait réference à une clé primaire d'une autre table
Ils servent à faire en sorte que si on supprime le client de la base de donnée ca supprimera automatiquement toute ces commandes qu'il à effectué


