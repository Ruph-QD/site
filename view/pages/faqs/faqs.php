<?php 
session_start();
require('../controller/bdd-connect.php');

?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style/Template.css" />
    <link rel="stylesheet" href="../style/Faq.css" />
    <meta charset="utf-8" />
    <title>Runnest</title>
</head>




<body>

    <div class="titre"><h1>
        FAQ
    </h1></div>

        <?php 
        if (!$_SESSION['role'] or $_SESSION['role']!='admin'){
            $sql = "SELECT * FROM faqs";
            foreach  ($bdd->query($sql) as $row) {
                $id = $row['id'];
                $question = $row['questions'];
                $answer = $row['answers'];
                echo '
                    <div class="main-container">
                        <div class="container-question">
                            <h2 class="question" id="question-'.$id.'">'.$question.'</h2>
                                <p class="résponse">
                                    '.$answer.'
                                </p>
                        </div>
                    </div>'; 
            }
        } else {
            $sql = "SELECT * FROM faqs";
            echo '<div class="main-container">';
            foreach  ($bdd->query($sql) as $row) {
                $id = $row['id'];
                $question = $row['questions'];
                $answer = $row['answers'];
                echo '
                    <div class="container-question">
                    <form action="pages/faqs/edit.php?id='.$id.'" method="post">
                    <span>Question: <input type="text" name="question" size="65" value="'.$question.'" /></span><br/>
                    <span>Reponse: <input type="text" name="answer" size="65" value="'.$answer.'" /></span><br/>
                    <input type="submit" name="delete_faq" value="Delete faq" />
                    <input type="submit" name="edit_faq" value="Submit changes" />
                    </form></div>
                    '; 
            }
            echo '  <div class="container-question">
                    <form action="pages/faqs/create.php" method="post">
                    Question : <input type="text" name="question" size="65"/> <br/><br/>
                    Reponses: <input type="text" name="answer" size="65"/> <br/><br/>
                    <input type="submit" name="create_faq" value="Add new faq"/>
                    </form></div></div>';
            
        } ?>

    
</body>
