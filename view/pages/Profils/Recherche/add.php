<?php
require('../../../../controller/bdd-connect.php');
$data = [
    'coach' => $_GET['coach'],
    'coureur' => $_GET['coureur'],
];
if($_POST['formCoach'] or $_POST['formCoureur']){
    $sql = "INSERT INTO groupe (coach, coureur) VALUES (:coach, :coureur)";
    $stmt = $bdd->prepare($sql);
    $stmt->execute($data);
    if ($_POST['formCoach']){
        header("Location: ../../../?page=rechercheCoach");
        exit();
    }
    if ($_POST['formCoureur']){
        header("Location: ../../../?page=rechercheCoureur");
        exit();
    }
}
echo "error with form";
