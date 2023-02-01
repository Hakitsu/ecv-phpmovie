<?php
namespace controllers;

use controllers\base\WebController;
use models\UserModel;
use PDO;
use utils\Template;

class UserController extends WebController
{
    private $userModel;

    function __construct(){
        $this->userModel = new UserModel();
    }

    function addUser(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = $this->userModel->registerUser($username, $password);
        if ($user == false) {
            header('Location: register');
        }else{
            header('Location: connexion');
        }
    }

    function connexion(){
        $username = $_POST['username'];
        $get_password = $_POST['password'];
        $login = $this->userModel->sessionUser($username);
        $user = $login->fetch(PDO::FETCH_OBJ);
        if (!$user) {            
            header("Location: connexion");
        }else{
            var_dump($user);
            $mdp = $user->password;
            if ($mdp == $get_password) {
                //security
                session_destroy();
                session_start();
                $_SESSION['login'] = $username;
                $_SESSION['id_user'] = $user->id;
                $_SESSION['role'] = $user->role;
                header("Location: ./");
            }else{
                header("Location: connexion");
            }
        }
    }

    function deconnexion(){
        session_destroy();
        header("Location: ./");
    }
}