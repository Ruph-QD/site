<?php include("./pages/Authentification/connexionTraitement.php"); ?>

<head>
    <link rel="stylesheet" href="../style/loginstyle.css" />
    <link rel="stylesheet" href="../style/Template.css" />
</head>

<body>
    <div class="form_container">
        <h2 class=titre>Login</h2>
        <form name="formLogin" action="" method="post">
            <div class="container">
                <input type="email" id="logemail" name="email" required>
                <label id="label-email">Email</label>
            </div>
            <div class="container">
                <input type="password" name="mdpass" id="logpassword" required>
                <label id="label-password">Mot de passe</label>
            </div>

            <input type="submit" name="formConnect" class="btn-submit" value="Se Connecter" />
            <input type="reset" class="btn-reset"/><br /><br />
            <?php
            if (isset($erreur)) {
                echo '<font color="red">' . $erreur . '</font><br/>';
            } ?><br/><br/>
            <a href="./?page=recuperation" class="link">Mot de passe oublié</a><br/><br/>
            <a href="./?page=enregistrement" class="link">Creer un compte!</a>
        </form>
    </div>
</body>
