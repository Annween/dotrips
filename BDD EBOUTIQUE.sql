DROP DATABASE EBOUTIQUE;
CREATE DATABASE EBOUTIQUE;
USE EBOUTIQUE;
DROP DATABASE IF EXISTS MEMBRE;
DROP DATABASE IF EXISTS COMMANDE;
DROP DATABASE IF EXISTS PRODUITS;
DROP DATABASE IF EXISTS CONTENIR;


CREATE TABLE MEMBRE(
   id_membre INT PRIMARY KEY AUTO_INCREMENT,
   pseudo_membre VARCHAR(255),
   mdp_membre VARCHAR(30),
   prenom_membre VARCHAR(255),
   dateN_membre DATE,
   adr_membre VARCHAR(255),
   cp_membre VARCHAR(50),
   ville_membre VARCHAR(255),
   email_membre VARCHAR(255)
);

CREATE TABLE COMMANDE(
   id_commande INT PRIMARY KEY,
   date_commande DATE,
   id_membre INT 
);

CREATE TABLE CATEGORIE(
   num_cat INT PRIMARY KEY,
   nom_cat VARCHAR(255)
);

CREATE TABLE PRODUITS(
   id_produit INT PRIMARY KEY,
   nom_produit VARCHAR(255),
   prix_produit INT,
   stock_produit VARCHAR(255),
   num_cat INT 
);

CREATE TABLE CONTENIR(
   id_produit INT,
   id_commande INT ,
   PRIMARY KEY(id_produit, id_commande),
   quantite VARCHAR(50)
);
