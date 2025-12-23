CREATE DATABASE gestion_universitaire 

CREATE TABLE person(
    nom VARCHAR(50),
    prenom VARCHAR(50)
)ENGINE = INNODB;

CREATE TABLE utilisateurs(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(255),
    role ENUM('Admin','Utilisateur academique')
)ENGINE = INNODB;

CREATE TABLE Administrateur(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    email VARCHAR(50),
    password VARCHAR(255),
    role VARCHAR(50) DEFAULT 'Admin'
)ENGINE = INNODB;

CREATE TABLE formateurs(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    role VARCHAR(50) DEFAULT 'Utilisateur academique'
)ENGINE = INNODB;

CREATE TABLE etudiants(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    role VARCHAR(50) DEFAULT 'Utilisateur academique'
)ENGINE = INNODB;


