<?php
$user = "root";
$password = "root";
$port = "3307";

try {
    $bdd= new PDO('mysql:host=localhost;dbname=testbdd;port='.$port, $user, $password); 
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}