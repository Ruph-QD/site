<?php
try{
    $servername = 'alontsi';
    $username = 'divine';
    $password = ' ';
   
    //On établit la connexion
    $bdd = new PDO("mysql:host=$servername;dbname=runnest", $username, $password);
   
}catch(Exception $e){
    die( $e->getMessage());
}