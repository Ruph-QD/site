<?php 
require('../../../controller/bdd-connect.php');
if ($_POST['create_faq']){
    $data = [
        'questions' => $_POST['question'],
        'answers' => $_POST['answer'],
    ];
    $sql = "INSERT INTO faqs (questions, answers) VALUES (:questions, :answers)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute($data);
    header("Location: ../../?page=faq");
    exit();
}
echo "error with form ";