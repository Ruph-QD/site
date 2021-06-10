<?php
session_start();
require('../controller/bdd-connect.php');
?>

<head>
    <link rel="stylesheet" href="../style/loginstyle.css" />
</head>

<body>

    <?php
    if (isset($_POST['formrecuperer'])) {
        if (isset($_POST['email'])) {
            $email = htmlspecialchars($_POST['email']);
            if (!empty($_POST['email'])) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $requser = $bdd->prepare('SELECT * FROM utilisateur WHERE email= :email ');
                    $requser->execute(array(
                        'email' => $email
                    ));
                    $userexist = $requser->rowCount();
                    if ($userexist == 1) {
                        $userinfo = $requser->fetch();
                        $_SESSION['id'] = $userinfo['id'];
                        $_SESSION['pseudo'] = $userinfo['pseudo'];
                        $_SESSION['email'] = $userinfo['email'];
                        $recup_code = "";
                        for ($i = 0; $i < 8; $i++) {
                            $recup_code .= mt_rand(0, 9);
                        }
                        $_SESSION['recup_code'] = $recup_code;
                        $recup_insert = $bdd->prepare('INSERT INTO recuperation(code, email) VALUES(:code, :email)');
                        $recup_insert->execute(array(
                            'code' => $recup_code,
                            'email' => $email
                        ));
                        var_dump($recup_code);
                        
                    } else {
                        $erreur = "l email fourni n'existe ne correspondent pas. Veuillez verifier!";
                    }
                } else {
                    $erreur = "veuillez entrer un email valide!";
                }
            } else {
                $erreur = "Tous les champs doivent être complétés!";
            }
        }
    } ?>
    <div class="form_container">
        <h2 class="titre">Recuperation du mot de passe!</h2>
        <form name="formRecuperation" action="./page=recuperation" method="post">
            <div class="container">
                <input type="email" id="logemail" name="email" required>
                <label id="label-email">Email</label>
            </div>
            <input type="submit" name="formRecuperation" class="btn-submit" value="Soumettre" />
            <input type="reset" class="btn-reset" /><br /><br />
        </form>
    </div>
</body>