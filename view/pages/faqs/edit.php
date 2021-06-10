<?php
require('../../../controller/bdd-connect.php');

if ($_POST['edit_faq']) {

    $sql = "UPDATE faqs SET questions= :question, answers= :answer WHERE id=:id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':question', $_POST['question'], PDO::PARAM_STR);
    $stmt->bindParam(':answer', $_POST['answer'], PDO::PARAM_STR);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    header("Location: ../../?page=faq");
    exit();
}
if ($_POST['delete_faq']) {
    $sql = "DELETE FROM faqs WHERE id=:id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
    $stmt->execute();
    header("Location: ../../?page=faq");
    exit();
}
echo "error with form";
