<?php
require_once('includes/database.php');


if(isset($_POST["id_tache"])) {
  $id_tache = $_POST["id_tache"];
  $req = $db->prepare("SELECT * FROM tasks WHERE id = ?");
  $req->execute([$id_tache]);
  echo json_encode($req->fetch());
}
?>