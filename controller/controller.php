<?php 
session_start();
session_save_path();
require('../controller/bdd-connect.php');


function accueil() {
    require('./pages/Component/Header.php');
    require('./pages/Accueil.php');
    require('./pages/Component/Footer.php');
}

function faq() {
    require('./pages/Component/Header.php');
    require('./pages/faqs/faqs.php');
    require('./pages/Component/Footer.php');
}
function enregistrement() {
    require('./pages/Component/Header.php');
    require('./pages/Authentification/enregistrement.php');
    require('./pages/Component/Footer.php');
}

function contact() {
    require('./pages/Component/Header.php');
    require('./pages/Contact.php');
    require('./pages/Component/Footer.php');
}

function utilisateur() {
    require('./pages/utilisateur.php');
}

function statistiques() {
    require('./pages/Component/Header.php');
    require('./pages/ResultatsTest.php');
    require('./pages/Component/Footer.php');
}

function connexion() {
    require('./pages/Component/Header.php');
    require('./pages/Authentification/connexion.php');   
    require('./pages/Component/Footer.php');
}

function deconnexion() {
    require('./pages/Component/Header.php');
    require('./pages/Authentification/deconnexion.php');   
}

function propos() {
    require('./pages/Component/Header.php');
    require('./pages/aPropos.html');   
    require('./pages/Component/Footer.php');
}

function mention() {
    require('./pages/Component/Header.php');
    require('./pages/MentionsLegales.php');   
    require('./pages/Component/Footer.php');
}

function user() {
    require('./pages/Profils/Gestion/users.php');
}

function coureur() {
    require('./pages/Profils/Equipe/coureur.php');
}

function coach() {
    require('./pages/Profils/Equipe/coach.php');
}

function rechercheCoach() {
    require('./pages/Profils/Recherche/research-coach.php');
}

function rechercheCoureur() {
    require('./pages/Profils/Recherche/research-coureur.php');
}

function recuperation() {
    require('./pages/Component/Header.php');
    require('./pages/Authentification/recuperationCompte.php');
    require('./pages/Component/Footer.php');
}