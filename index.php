<?php
 
    require_once('includes/database.php');
    session_start();
    ?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&display=swap" rel="stylesheet">
    <title>TO DO LIST- LOGIN</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/e9a44ab6cf.js" crossorigin="anonymous"></script>

</head>
<body>
  <header>
    <div class="navbar">
 
    <h1>TO DO LIST- LOGIN</h1>


    </div>
  </header>
    <main>
        <section class="module_co" id="connect">
          

            <h2> Se connecter </h2>

            <form method="post" class="form_index">
            
                <div>
                    <label for="login">Login</label><br>
                    <input type="text" id="login" placeholder="Login">
                </div>

                <div>
                <label for="password">Password</label><br>
                    <input type="password" id="password" placeholder="Mot de passe">
                </div>

                <div class="center_btn">
                    <input type="submit" id="connexion" value="Valider" class="btn_index">
                </div>
                <div id="resultat"></div>
            </form>


            <p class="link_co"> <span id="form_inscription"> Pas encore inscrit ? <i class="fas fa-arrow-right"></i> Inscription </span></p>
        </section>
<!-- FORMULAIRE INSCRIPTION -->
        <section class="module_co" id="inscription">
           
            <h2> Créer un compte </h2>

            <form method="post" class="form_index">
             
                <div>
                    <label for="login">Login</label><br>
                    <input type="text" id="username" placeholder="Login" maxlength="20" pattern="[a-zA-Z0-9-_.]{1,20}" title="caractères acceptés : a-zA-Z0-9-_." required="required" value="<?php if (isset($_POST['login'])) { echo htmlspecialchars($_POST['login']);} ?>">
                </div>

                <div>
                <label for="password">Password</label><br>
                    <input type="password" id="insc_password" placeholder="Mot de passe" required="required">
                </div>

                <div>
                <label for="password">Password Check</label><br>
                    <input type="password" id="conf_password" placeholder="Confirmer le mot de passe" required="required">
                </div>
                
                <div class="center_btn">
                    <input type="submit" id="sinscrire" value="Valider" class="btn_index">
                </div>

                <div id="final"> </div>

            </form>
            <p class="link_co"> <span id="form_connexion"> Revenir au login</span></p>
        </section>
    </main>
    <footer></footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/module_co.js"></script>
</body>
</html>