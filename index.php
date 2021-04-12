<?php

    require_once('class/database.php');


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List / Login</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/e9a44ab6cf.js" crossorigin="anonymous"></script>

</head>
<body>
  <header>
    <div class="navbar">
      <div class="title">
        <p>To do list </p>
      </div>


    </div>
  </header>
    <main>
        <section class="module_co" id="connect">
            <div id="resultat">

            </div>
            <form method="post" class="form_index">
              <h1> Se connecter </h1>
                <div>
                    <input type="text" id="login" placeholder="E-mail">
                </div>
                <div>
                    <input type="password" id="password" placeholder="Mot de passe" autocomplete="on">
                </div>
                <div class="center_btn">
                    <input type="submit" id="connexion" value="Valider" class="btn_index">
                </div>
            </form>
            <p class="link_co"> Pas encore inscrit ? <i class="fas fa-arrow-right"></i> <span id="form_inscription"> Inscription </span></p>
        </section>


<!-- FORMULAIRE INSCRIPTION -->
        <section class="module_co" id="inscription">
            <div id="final">

            </div>
            <form method="post" class="form_index">
              <h1> Créer un compte </h1>
                <div>
                    <input type="text" id="username" placeholder="E-mail">
                </div>
                <div>
                    <input type="password" id="insc_password" placeholder="Mot de passe" autocomplete="on">
                </div>
                <div>
                    <input type="password" id="conf_password" placeholder="Confirmer le mot de passe" autocomplete="on">
                </div>
                <div class="center_btn">
                    <input type="submit" id="sinscrire" value="Valider" class="btn_index">
                </div>

            </form>
            <p class="link_co">Revenir au <span id="form_connexion">login</span></p>
        </section>
    </main>
    <footer></footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
