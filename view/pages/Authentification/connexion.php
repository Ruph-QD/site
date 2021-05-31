<!DOCTYPE html>
<html>
<?php include("./pages/Authentification/connexionTraitement.php"); ?>

<head>
    <link rel="stylesheet" href="../style/loginstyle.css" />
    <link rel="stylesheet" href="../style/Template.css" />


    <meta charset="utf-8" />
    <title>Runnest</title>
</head>

<body>

    <div class="form_container">
        <h2>Login</h2>
        <form name="formLogin" action="" method="post">
            <div class="container">
                <input type="email" id="logemail" name="email" required>
                <label id="label-email">Nom</label>
            </div>
            <div class="container">
                <input type="password" name="mdpass" id="logpassword" required>
                <label id="label-password">Email</label>
            </div>

            <input type="submit" name="formConnect" class="btn-submit" value="Se Connecter" />
            <input type="reset" class="btn-reset"/><br /><br />
            <?php
            if (isset($erreur)) {
                echo '<font color="red">' . $erreur . '</font><br/>';
            } ?><br/><br/>
            <a href="recuperationCompte.php" class="link">Mot de passe oublié</a><br/><br/>
            <a href="enregistrement.php" class="link">Creer un compte!</a>
        </form>
    </div>
</body>


</html>