<?php
require('../../../controller/bdd-connect.php');
echo $_POST['input-pic'];

if ($_POST['input-pic']) {
    $sql = "UPDATE utilisateur SET photo= :photo WHERE id=:id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':photo', $_POST['input-pic'], PDO::PARAM_STR);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    header("Location: ../../?page=utilisateur&id=".$_GET['id']);
    exit();
}
if ($_POST['formUser']) {
    $sql = "UPDATE utilisateur SET pseudo= :pseudo, prenom= :prenom, email= :email WHERE id=:id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
    $stmt->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
    $stmt->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    $locat = "Location: ../../?page=utilisateur&id=".$_GET['id'];
    header($locat);
    exit();
}
echo "error with form";
