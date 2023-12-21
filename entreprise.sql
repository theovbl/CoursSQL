CREATE DATABASE entreprise;

USE entreprise; 

CREATE TABLE SERVICE (
    ServiceId INT PRIMARY KEY,
    ServiceCode VARCHAR(255),
    ServiceLibelle VARCHAR(255)
);

CREATE TABLE EMPLOYE (
    ProfilId INT PRIMARY KEY,
    Profil VARCHAR(255)
);

CREATE TABLE COLLABORATEUR (
    Matricule INT PRIMARY KEY,
    NIR VARCHAR(255),
    Nom VARCHAR(255),
    Prenom VARCHAR(255),
    DateEmbauche DATE,
    Salaire FLOAT,
    ProfilId INT,
    FOREIGN KEY (ProfilId) REFERENCES EMPLOYE(ProfilId)
);

CREATE TABLE PERSONNE (
    Personneid INT PRIMARY KEY,
    PersonneCode VARCHAR(255),
    AdresseCourriel VARCHAR(255)
);

CREATE TABLE DIRECTEUR (
    ProfilId INT PRIMARY KEY,
    PrimeBilan FLOAT,
    FOREIGN KEY (ProfilId) REFERENCES EMPLOYE(ProfilId)
);

CREATE TABLE TIERS (
    NoSiret INT(11) PRIMARY KEY,
    RaisonSociale VARCHAR(255)
);

CREATE TABLE ADRESSE (
    Adresseld INT PRIMARY KEY,
    AdresseLigne2 VARCHAR(255),
    AdresseLigne3 VARCHAR(255),
    AdresseLigne4 VARCHAR(255),
    AdresseCodePostal VARCHAR(255),
    Personneid INT,
    FOREIGN KEY (Personneid) REFERENCES PERSONNE(Personneid)
);