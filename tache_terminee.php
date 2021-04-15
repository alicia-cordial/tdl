<?php
// Se connecter
require_once('includes/database.php');

if(isset($_POST["id_tache"])) {
  $id_tache = $_POST["id_tache"];
  $req = $db->prepare("UPDATE tasks SET finish = 1, date_finish = NOW() WHERE id = ?");
  $req->execute([$id_tache]);
}
?>