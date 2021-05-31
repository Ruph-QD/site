<head>
    <link rel="stylesheet" href="../style/Template.css" />
</head>
<header>
    <div class="header-container">
        <div class="header-bar">
            <a href="./"><img class="logo" src="../assets/images/infinite-mesures.png"></a>
            <ul class="slider-menu">
                <li><a href="./" class="navigation-element">Accueil</a></li>
                <li><a href="./?page=faq" class="navigation-element">FAQ</a></li>
                <li><a href="./?page=contact" class="navigation-element">Contact</a></li>
                <li><a href="./?page=propos" class="navigation-element">A Propos</a></li>
                <li><span class="navigation-element dropdown">Connexion</span>
                    <ul class="dropdown-content">
                        <?php if (isset($_SESSION['id'])) {
                            echo '
                            <li><a href="./?page=utilisateur&id=' . $_SESSION["id"] . '">Mon Compte</a></li>
                            <li><a href="./?page=deconnexion">Deconnexion</a></li>
                            ';
                        } else {
                            echo '
                            <li><a href="./?page=connexion">Connexion</a></li>
                            <li><a href="?page=enregistrement">Inscription</a></li>
                            ';
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>