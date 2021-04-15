

<?php
// Se connecter
require_once('includes/database.php');

if(isset($_POST["texte_tache"])) {
  $req_tache = $db->prepare("INSERT INTO tasks (name, finish, date_creation) VALUES(?, 0, NOW())");
  $req_tache->execute([$_POST["texte_tache"]]);

  $id_tache = $db->lastInsertId();

  $req_jonction = $db->prepare("INSERT INTO jonction (task_id, user_id) VALUES(LAST_INSERT_ID(), ?)");
  $req_jonction->execute([$_POST["user_id"]]);

  echo $id_tache;

}
?>