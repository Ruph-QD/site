<?php 

require('./pages/Component/newHeader.php');

function accueil() {
    require('./pages/Accueil.php');
    require('./pages/Component/Footer.php');
}

function faq() {
    require('./pages/faqs/faqs.php');
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

function propos() {
    require('./pages/Propos.php');   
    require('./pages/Component/Footer.php');
}