<?php 
session_start();
session_save_path();
require('../controller/bdd-connect.php');


require('./pages/Component/Header.php');

function accueil() {
    require('./pages/Accueil.php');
    require('./pages/Component/Footer.php');
}

function faq() {
    require('./pages/faqs/faqs.php');
    require('./pages/Component/Footer.php');
}
function enregistrement() {
    require('./pages/Authentification/enregistrement.php');
    require('./pages/Component/Footer.php');
}

function contact() {
    require('./pages/Contact.php');
    require('./pages/Component/Footer.php');
}

function utilisateur() {
    require('./pages/utilisateur.php');
    require('./pages/Component/Footer.php');
}

function statistiques() {
    require('./pages/ResultatsTest.php');
    require('./pages/Component/Footer.php');
}

function connexion() {
    require('./pages/Authentification/connexion.php');   
    require('./pages/Component/Footer.php');
}

function deconnexion() {
    require('./pages/Authentification/deconnexion.php');   
}

function propos() {
    require('./pages/Propos.php');   
    require('./pages/Component/Footer.php');
}

function mention() {
    require('./pages/MentionsLegales.php');   
    require('./pages/Component/Footer.php');
}