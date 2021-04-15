
<?php
// Se connecter
require_once('includes/database.php');

if(isset($_POST["id_tache"])) {
  $req_tache = $db->prepare("DELETE FROM tasks WHERE id = ?");
  $req_tache->execute([$_POST["id_tache"]]);

  $req_jonction = $db->prepare("DELETE FROM jonction WHERE task_id = ?");
  $req_jonction->execute([$_POST["id_tache"]]);

}
?>