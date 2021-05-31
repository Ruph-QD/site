<?php 
require('../controller/bdd-connect.php');

if ($_POST['create_faq']){

    $sql = "UPDATE faqs SET question=?, answer=? WHERE id=?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute($_POST['question'],$_POST['answer'],$_GET['id']);
    header("Location: faqs.php");
    exit();
}
if($_POST['delete_faq']){
    $sql = "DELETE FROM faqs WHERE id=?";
    $stmt= $pdo->prepare($sql);
    $stmt->execute($_GET['id']);
    header("Location: faqs.php");
    exit();
}