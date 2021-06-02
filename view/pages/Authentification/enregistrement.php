<?php include("./pages/Authentification/enregistrementTraitement.php"); ?>

<head>
    <link rel="stylesheet" href="../style/loginstyle.css" />
    <link rel="stylesheet" href="../style/Template.css" />
</head>

<body>
    <div class="form_container">
        <h2 class=titre>Inscription</h2>
        <form name="formInscription" action="" method="post">
            <div class="container">
                <input type="text" name="pseudo" required>
                <label id="label-email">Pseudo</label>
            </div>
            <div class="container">
                <input type="text" name="prenom" required>
                <label id="label-password">Prenom</label>
            </div>
            <div class="container">
                <input type="email" name="email" required>
                <label id="label-email">Email</label>
            </div>
            <div class="container">
                <select name='roleuser' value='coach'>
                    <option value='coach'>Coach</option>
                    <option value='coureur'>Coureur</option>
                </select>
            </div><br/>
            <div class="container">
                <input type="password" name="password" required>
                <label id="label-email">Mot de passe</label>
            </div>
            <div class="container">
                <input type="password" name="password_retype" required>
                <label id="label-email">Mot de passe</label>
            </div>
            <input type="submit" name="formInscription" class="btn-submit" value="S'inscrire" />
            <input type="reset" class="btn-reset" /><br /><br />
            <a href="./?page=connexion" class="link">Vous avez déja un compte</a>
        </form>
    </div>
</body>