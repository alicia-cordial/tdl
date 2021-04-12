<?php

require_once('../class/validator.php');
require_once('../class/user.php');


session_start();

//REGISTER

if(isset($_POST['Register'])){

    $validator = new validator();

    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);
    $passwordcheck = htmlspecialchars($_POST['passwordcheck']);


    if($validator->userExists($login) == 1){
        $errors = "This login already exists!";
    }

    if($validator->passwordConfirm($password, $passwordcheck) == 0){
        $errors = "The two passwords are not the same.";
    }

    if($validator->passwordStrenght($password) == 0){
        $errors = "Password needs to contain at least 1 number";
    }

    if(empty($errors)){
        $user = new user();
        $user->register($login, $password);
        $success = "Account created. <a href='../index.php'>Log in</a>";
//       var_dump($user);
    }

}








//LOG IN

//if (isset($_SESSION['user'])) {
   // header("Location: ../index.php");
//}

if (isset($_POST['Login'])) {

    $validator = new validator();

    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password2']);

    if ($validator->passwordConnect($login, $password) == 0) {
        $error = "False login or password";
    } else {
        $user = new user();
        $user->connect($login);

        $_SESSION['user'] = $user;

            header("Location: ../index.php");

    }

}

