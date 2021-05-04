<?php 

require('./pages/Component/Header.php');

function accueil() {
    require('./pages/Accueil.php');
    require('./pages/Component/Footer.php');
}

function faq() {
    require('./pages/Faq.php');
    require('./pages/Component/Footer.php');
}

function contact() {
    require('./pages/Contact.php');
    require('./pages/Component/Footer.php');
}

function connexion() {
    require('./pages/Authentification/connexion.php');   
    require('./pages/Component/Footer.php');
}