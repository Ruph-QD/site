<?php
require('../../../../controller/bdd-connect.php');

if ($_POST['edit']) {

    $sql = "UPDATE utilisateur SET pseudo= :pseudo, mdpass= :mdpass, email= :email, prenom= :prenom, roleuser= :roleuser WHERE id=:id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
    $stmt->bindParam(':mdpass', $_POST['mdpass'], PDO::PARAM_STR);
    $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
    $stmt->bindParam(':roleuser', $_POST['roleuser'], PDO::PARAM_STR);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    header("Location: ../../../?page=user");
    exit();
}
if ($_POST['delete']) {
    $sql = "DELETE FROM utilisateur WHERE id=:id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    header("Location: ../../../?page=user");
    exit();
}
echo "error with form";
