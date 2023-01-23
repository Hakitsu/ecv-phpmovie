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

    function addUser($username, $password){
        $user = $this->userModel->registerUser($username, $password);
        if ($user == false) {
            echo "<script>alert(\"Inscription impossible ! Le pseudo que vous tentez de prendre est peut-être déjà utilisé....\");
        document.location.href = '/index.php?action=newUser'</script>";
        }else{
            return Template::render("views/global/home.php");
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