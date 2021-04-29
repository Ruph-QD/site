<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style/Template.css" />
    <link rel="stylesheet" href="../style/Faq.css" />
    <meta charset="utf-8" />
    <title>Runnest</title>
</head>


<header>
    <?php include("./Component/Header.php"); ?>
</header>

<body>
    <div class="container-navigation">
        <nav class="navigation">
            <div><a href="#question-1">Créer un compte</a></div>
            <div><a href="#question-2">Se connecter à son compte</a></div>
            <div><a href="#question-3">Voir ses résultats</a></div>
</nav>
    </div>
    <div class="titre"><h1>FAQ</h1></div>
    <div class="main-container">
        <div class="container-question">
            <h2 class="question" id="question-1">Créer un compte</h1>
            <p class="résponse">
                Accédez à la page de connexion en cliquand sur le bouton de connexion en haut à droite de votre écran ou directectement <a href="./Authentification/connexion.php">ici</a>.
                De là vous trouverez un bouton "créer un compte".
            </p>
        </div>
        <div class="container-question">
            <h2 class="question" id="question-2">Se connecter à son compte</h1>
            <p class="résponse">
                Accédez à la page de connexion en cliquand sur le bouton de connexion en haut à droite de votre écran ou directectement <a href="./Authentification/connexion.php">ici</a>.
                Après avoir rempli votre nom d'utilisateur et votre mot de passe, vous pouvez cliquer sur "se connecter".
                Si vous n'avez pas de compte vous pouvez en <a href="#question-1">créer un</a>.
            </p>
        </div>
        <div class="container-question">
            <h2 class="question" id="question-3">Voir ses résultats</h1>
            <p class="résponse">
                <I>Cette fonction n'est disponible que pour les coureurs.</I><br><br>
                Une fois que vous êtes <a href="./Authentification/connexion.php">connecté</a> (voir comment se <a href="#question-2">connecter</a>). 
                Cliquez sur "voir mon profil" puis sur "oberserver mes statistiques" qui se trouve vers la fin de votre profil.
            </p>
        </div>
    </div>
</body>


<footer>
    <?php include("./Component/Footer.php"); ?>
</footer>

</html>