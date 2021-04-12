<?php

require_once('database.php');
require_once('validator.php');


class user
{
    private $id;
    private $pdo;
    private $login;




    function __construct()
    {
        $this->pdo = new database();
    }


    //S'ENREGISTRER
    function register($login, $password)
    {
        $this->pdo->Insert('Insert into user (login, password) values ( :login, :password)',
            ['login' => $login,
                'password' => password_hash($password, PASSWORD_BCRYPT, ["cost" => 10]),
            ]);
        return $login;
    }

    //SE CONNECTER ET RECUPERER LES DONNEES
    function connect($login)
    {
        $requser = $this->pdo->Select('Select * FROM user WHERE login = :login',
            ['login' => $login,]);

        $this->login = $requser[0]['login'];
        return $requser;
    }

    //UPDATE
    function update($login, $password)
    {
        $this->pdo = new database();
        $update = $this->pdo->Update("Update user SET login = :login, password = :password WHERE id = $this->id ",
            ['login' => $login,
                'password' => password_hash($password, PASSWORD_BCRYPT, ["cost" => 10]),
            ]);
        $this->login = $login;

        return $update;
    }




    //GETID
    public function getId()
    {
        return $this->id;
    }

    //GETLOGIN
    public function getLogin()
    {
        return $this->login;
    }



}


