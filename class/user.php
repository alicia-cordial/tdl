<?php

class User {

  private $id;
  private $login;
  private $password;
  private $db;

  public function __construct($db, $id) {
    $this->db = $db;
    $requete = $this->db->prepare("SELECT * FROM user WHERE id = ?");
    $requete->execute([$id]);
    $data = $requete->fetch();
    $this->id = $data["id"];
    $this->login = $data["login"];
    $this->password = $data["password"];

  }

  public function getId() {
    return $this->id;
  }

  public function getPseudo() {
    return $this->login;
  }


  public function lister_taches_en_cours() {
    $requete = $this->db->prepare("SELECT * FROM tasks WHERE id
      IN (SELECT task_id FROM jonction WHERE user_id = ?) AND finish = 0");
    $requete->execute([$this->id]);

    return $requete->fetchAll();

  }

  public function lister_taches_finies() {
    $requete = $this->db->prepare("SELECT * FROM tasks WHERE id
      IN (SELECT task_id FROM jonction WHERE user_id = ?) AND finish = 1");
    $requete->execute([$this->id]);

    return $requete->fetchAll();

  }

}

?>