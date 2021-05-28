<?php 
session_start();
$bdd= new PDO('mysql:host=localhost;dbname=testbdd','root',''); 

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
    <div class="container-navigation">
        <nav class="navigation">

        </nav>
    </div>

    <div class="titre"><h1>
        FAQ
    </h1></div>

        <?php 
        if (!$_SESSION['role'] or $_SESSION['role']!='admin'){
            $sql = "SELECT * FROM faqs";
            foreach  ($conn->query($sql) as $row) {
                $id = $row['id'];
                $question = $row['questions'];
                $answer = $row['answers'];
                echo '
                    <div class="main-container">
                        <div class="container-question">
                            <h2 class="question" id="question-'.$id.'">'.$question.'</h2>
                                <p class="résponse">
                                    '.$reponse.'
                                </p>
                        </div>
                    </div>'; 
            }
        } else {
            $sql = "SELECT * FROM faqs";
            foreach  ($conn->query($sql) as $row) {
                $id = $row['id'];
                $question = $row['questions'];
                $answer = $row['answers'];
                echo '
                    <form action="edit.php?id='.$id.'" method="post">
                    <span>Question: <input type="text" name="question" size="65" value="'.$question.'" /></span><br/>
                    <span>Reponse: <input type="text" name="answer" size="65" value="'.$answer.'" /></span><br/>
                    <input type="submit" name="delete_faq" value="Delete faq" />
                    <input type="submit" name="edit_faq" value="Submit changes" />
                    '; 
            echo '
                <form action="faqs.php" method="post">
                    Question : <input type="text" name="question" size="65"/> <br/><br/>
                    Reponses: <input type="text" name="answer" size="65"/> <br/><br/>
                    <input type="submit" name="create_faq" value="Add new faq"/>
                </form>';
            }
        } ?>

    
</body>
