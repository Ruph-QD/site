<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="../style/Template.css" />
        <link rel="stylesheet" href="../style/Body.css" />
        <link rel="stylesheet" href="../style/CPF.css" />
        <meta charset="utf-8" />
        <title>Runnest</title>
    </head>
    <header>
        <ul class="head">
            <!-- TODO: mettre les liens pour les pages -->
            <li><a href="Accueil.html"><img class="image image-infinite"src="../assets/images/infinite_mesures.png"></a></li>
            <li><a href="" class="text">Forum</a></li>
            <li><a href="" class="text">FAQ</a></li>
            <li><a href="" class="text">Contact</a></li>
            <li><a href="" class="text">A Propos</a></li>
            <li><a href=""><img class="image image-user" src="../assets/images/logo_user.png"></a></li>
        </ul>
    </header>
    <body>
        <div class="wraper">
        <div class="AsideL section"></div>
        <div class="container section">
            <h1>Creation d'un programme</h1>
            <form action="/action_cpf.php">
              <label class="texte " for="ftitle">Nom du programme <em>*</em></label>
              <input type="text" id="ftitle" name="ftitlecpf" placeholder="Ex : Amelioration reflexe">
              <fieldset>
                  <legend>creation d'un groupe </legend>
                  <label class="texte " for="fchoixequipe">choix d'une equipe <em>*</em></label>
                  <select id="equipe">
                    <option value="1" name="equipe">Teams 1</option>
                    <option value="2" name="equipe">Teams 2</option>
                  </select>

              </fieldset>
              <fieldset class="souspartie">
                <legend>Choix des tests</legend>
                <label class="texte " for="stresse"><input id="stresse" type="checkbox" name="stresse" value="Niveau de stresse"> Niveau de stresse</label>
                <label class="texte " for="Temps de reaction"><input id="Temps de reaction" type="checkbox" name="Temps de reaction" value="Temps de reaction"> Temps de reaction</label>
                <label class="texte " for="Capacite auditive"><input id="Capacite auditive" type="checkbox" name="Capacite auditive" value="Capacite auditive"> Capacite auditive</label>
                <label class="texte " for="Constance d'une course"><input id="Constance d'une course" type="checkbox" name="Constance d'une course" value="Constance d'une course"> Constance  course</label>
                
            </fieldset>
            <fieldset class="souspartie">
                <legend>Periode pour effectuer les test</legend>
                <label class="texte " for="dateDebut">Date de debut <em>*</em>:<input id="ddebut" type="Date" name="Ddebut" value="Ddebut"> </label>
                <label class="texte " for="datefin">Date de fin <em>*</em>: <input id="dfin" type="Date" name="Dfin" value="Dfin"> </label><br>
    
                <label for="Duree">Durée : 3 jours</label><br><br>
                
            </fieldset>
          
            <label class="texte"   for="commentaire">Commentaires</label>
            <textarea id="commentaire" name="commentaire" placeholder="Votre message" style="height:80px"></textarea>
         
          
          
              <div class="btn cpfAction">
                
              <input type="SUBMIT" value="Envoyer">
              <button class="button"
              type="button">
          creer
            </button>
              <input type="RESET" value="annuler">
            </div>
            </form>
          </div> 
          <div class="AsideR section"></div>
		</div>
    </body>
	<footer>
        <div class="foot">
            <!-- TODO: mettre les liens pour les pages -->            
            <p><a href="">Conditions Générales d'utilisation</a></p>
            <p>Powered by <a href="">Runnest</a></p>
        </div>
    </footer>
	
</html>