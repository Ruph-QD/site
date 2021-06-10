<?php
require('../../../../controller/bdd-connect.php');
if ($_POST['formDeleteCoureur'] or $_POST['formDeleteCoach']) {
    $sql = "DELETE FROM groupe WHERE id=:id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    if ($_POST['formDeleteCoureur']) {
        header("Location: ../../../?page=coureur");
        exit();
    }
    if ($_POST['formDeleteCoach']) {
        header("Location: ../../../?page=coach");
        exit();
    }
}
