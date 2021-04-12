<?php

    require_once('class/database.php');


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER SPACE</title>

    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/e9a44ab6cf.js" crossorigin="anonymous"></script>

</head>
<body>
  <header>
    <div class="navbar">
      <div class="title">
        <h1>To do list </h1>
        <h2>User Space</h2>
      </div>


    </div>
  </header>
    <main>
        <section class="module_co" id="connect">
            <div id="resultat">

            </div>
            <form method="post" class="form_index">
              <h3> Se connecter </h3>
                <div>
                    <input type="text" id="login" placeholder="Login">
                </div>
                <div>
                    <input type="password" id="password2" placeholder="password" autocomplete="on">
                </div>
                <div class="center_btn">
                    <input type="submit" id="login" value="login" class="btn_index">
                </div>
            </form>
            <p class="link_co"> Pas encore inscrit ? <i class="fas fa-arrow-right"></i> <span id="form_inscription"> Inscription </span></p>
        </section>


<!-- FORMULAIRE INSCRIPTION -->
        <section class="module_co" id="inscription">
            <div id="final">

            </div>
            <form method="post" class="form_index">
              <h3> Créer un compte </h3>
                <div>
                    <input type="text" id="username" placeholder="login">
                </div>
                <div>
                    <input type="password" id="password" placeholder="password" autocomplete="on">
                </div>
                <div>
                    <input type="password" id="passwordcheck" placeholder="check password" autocomplete="on">
                </div>
                <div class="center_btn">
                    <input type="submit" id="register" value="register" class="btn_index">
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
