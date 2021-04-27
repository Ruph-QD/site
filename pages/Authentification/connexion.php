<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../style/loginstyle.css"/>
        
        <meta charset="utf-8" />
        <title>Runnest</title>
    </head>
  
    <body>
    
    
       <div class="main">
           <div class="left_aside"></div>
           <div class="connect">
           
            <form action="/action_cpf.php">
            <fieldset>
            <h1>Login</h1>
              <label class="texte " for="ftitle">Email <em>*</em>:</label><br/>
              <input type="email" id="logemail" name="logemail" placeholder="Email"><br/><br/>
              <label class="texte " for="ftitle">Password <em>*</em>:</label>
              <input type="password" id="logpassword" name="logpassword" placeholder="Password"><br/><br/>
              <input type="submit"/>
              <input type="reset"/><br/><br/>
              <a href="forgottenpass">Mot de passe oublié</a><br/><br/>
              <a href="../pagecoureur.php">se connecter</a>
            </fieldset>
            </form>
            </div>
            <div class="right_aside"></div>
       </div>
    </body>
	
	
</html>

