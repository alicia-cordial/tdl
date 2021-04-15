
<?php
// Se connecter
require_once('includes/database.php');

if(isset($_POST["id_tache"])) {
  $id_tache = $_POST["id_tache"];
  $req = $db->prepare("UPDATE tasks SET name = ? WHERE id = ?");
  $req->execute([$_POST["name"], $id_tache]);
  echo $id_tache;
}
?>