<?php
       require_once('includes/database.php');

// CONNEXION
    if(isset($_POST['login']) && isset($_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];

        $req = $db->prepare("SELECT * FROM user WHERE login = ?");
        $req->execute([$login]);
        $log_exist = $req->fetch(PDO::FETCH_ASSOC);

        if(!empty($log_exist)){
            if(password_verify($password, $log_exist['password'])){
                session_start();
                $_SESSION['id'] = $log_exist["id"];
                echo 'Success';
            }
            else{
                echo 'Failed';
            }
        }
    }


// INSCRIPTION
    if(isset($_POST['username']) && isset($_POST['insc_password']) && isset($_POST['conf_password'])){
        $req = $db->prepare("SELECT * FROM user");
        $req->execute();
        $recup = $req->fetchAll(PDO::FETCH_ASSOC);

        $username = $_POST['username'];
        $password = $_POST['insc_password'];
        $conf_password = $_POST['conf_password'];

        // Verif de l'username
        $requete = $db->prepare("SELECT * FROM user WHERE login = ? ");
        $requete->execute([$username]);
        $is_verif = $requete->fetch();

        if(empty($is_verif)){

            if($password == $conf_password){
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                $requete = $db->prepare("INSERT INTO user(login, password) VALUES (?, ?)");
                $insert = $requete->execute([$username, $password_hash]);

                session_start();
                $_SESSION['user'] = $username;
                $_SESSION['id'] = count($recup)+1;

                echo 'Success';
            }
            else{
                echo 'Failed';
            }
        }
        else{
            echo 'Failed';
        }
    }


// UPDATE TASK EN COURS



?>