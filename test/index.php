<?php
require_once('../includes/database.php');
require_once('../class/user.php');
session_start();

if(isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $user = new User($db, $id);
  } else {
    header("Location:index.php");
  }


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS MATERIALIZE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="css/script.css">

    <title>Accueil</title>
</head>

<body>

<header>
   
</header>

<main class="main_todo">

    <section class="section container-fluid scrollspy" >
        <div class="row ">
            <div class="col s12 l4 offset-l1">

                <h1 class="titre_todo">Liste des tâches</h1>

                <div class="inputFields">
                    <input type="text" id="taskValue" placeholder="Enter a task." >
                    <button type="submit" id="addBtn" class="btn"><i class="material-icons">add</i></button>
                </div>

            </div>

            <div class="col s12 l5 offset-l1">


            <div class="container_tasks">
                    <ul id="tasks">
                        <?php

                        include 'show_tasks.php';
                        ?>

                    </ul>
                </div>

            </div>

        </div>

        <div class="row">

<h2 class="title_done">DONE ! </h2>

            <div class="col s12 l5 offset-l4">


                <div class="container_tasks_done">
                    <ul id="tasks_done">

                        <?php

                        include 'show_tasksDone.php';
                        ?>

                    </ul>
                </div>

            </div>


        </div>


    </section>




</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="task.js"></script>
</body>
</html>