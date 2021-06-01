<?php 
require('../../../../controller/bdd-connect.php');
if ($_POST['create']){
    $data = [
        'pseudo' => $_POST['pseudo'],
        'mdpass' => $_POST['mdpass'],
        'email' => $_POST['email'],
        'prenom' => $_POST['prenom'],
        'roleuser' => $_POST['roleuser'],
        'photo' => "",
    ];
    $sql = "INSERT INTO utilisateur (pseudo, mdpass, email, prenom, roleuser, photo) VALUES (:pseudo, :mdpass, :email, :prenom, :roleuser, :photo)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute($data);
    header("Location: ../../../?page=user");
    exit();
}
echo "error with form ";