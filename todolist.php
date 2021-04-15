<?php


require_once('includes/database.php');
require_once('class/user.php');
session_start();

if(isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $user = new User($db, $id);
  } else {
    header("Location:index.php");
  }


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="user" content="<?= $user->getId() ?>">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/e9a44ab6cf.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

    <link rel="stylesheet" href="css/style.css">

    <title>To Do List</title>

</head>
<body>
  <header>
    <div class="navbar">

      <div class="home">
        <a href="index.php"> <i class="fas fa-home"></i> </a>
      </div>

     <h1>TO DO LIST</h1>

    </div>
  </header>

  <main class="contain">
      <div class="intro">
            <h2 class="bonjour">
                Bonjour <?= $user->getPseudo(); ?>
            </h2>
      </div>

      <div class="autre">
      <!-- Formulaire de modification -->
      <div id = "form_modif" class="modal">
        <form>
          <input type="text" id="id_tache" style="display:none;">
          <p>
            <input id="name_task_modif" type="text" placeholder="Tâche">
          </p>
          <p>
            <button type="submit">Modification</button>
          </p>
        </form>
      </div>

    <div class="container" id="container_todo">
      <h1> <i class="fas fa-list-ul"></i> </h1>
      <ul id="todo_list">

        <?php
          $tableau_taches = $user->lister_taches_en_cours();
          foreach ($tableau_taches as $key => $value) {
             ?>
            <li id='<?php echo $value['id']; ?>'>
              <p class="name_task"><?php echo $value['name']; ?></p>
              <p class="date_task"><?php echo $value['date_creation']; ?></p>
            </li>
          <?php }
        ?>
      </ul>
      <form id = "form_ajout" class="hidden">
        <p><input id="name_task" type="text" placeholder="Ajouter une tâche..."></p>
      </form>
      <button type="button" name="button" id="add_btn_task">
        <i class="fas fa-plus"></i>
      </button>
    </div>

    <div class="container" id="container_done">
      <h1> <i class="fas fa-clipboard-check"></i> </h1>
      <ul id="done_list">
        <?php
          $tableau_taches = $user->lister_taches_finies();
          foreach ($tableau_taches as $key => $value) {
             ?>
            <li id='<?php echo $value['id']; ?>' class = "tache_finie">
              <div>
                <p class="name_task"><?php echo $value['name']; ?></p>
                <p class="date_task"><?php echo $value['date_finish']; ?></p>
              </div>
              <div>
                <p><i class="fas fa-times"></i></p>
              </div>
            </li>
          <?php } ?>
      </ul>


    </div>

  </main>

  <footer class="deconnexion">
        <a href="logout.php">Log out <i class="fas fa-power-off"></i> </a>
      </footer>
</body>

<script src="js/todo.js"> </script>
</html>