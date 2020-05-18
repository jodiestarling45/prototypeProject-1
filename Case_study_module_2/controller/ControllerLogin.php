<?php

namespace controller;

use model\user_password;
use model\DBLogin;
use model\DBconnection;

class ControllerLogin
{
    public $DBConnectionLogin;

    public function __construct()
    {
        $connection = new DBconnection('mysql:host=localhost;dbname=manager_guns', 'admin', '123456');
        $this->DBConnectionLogin = new DBLogin($connection->connect());
    }

    public function login()
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            session_start();
            $_SESSION['email']=$_POST['email'];
            $result = $this->DBConnectionLogin->checkLogin($_POST['email']);
            if ($result) {
                header('location: index_3.php');
            } else {
                $message = "wrong password or account";
                header("location: index_1.php");
            }
        }
        include 'view/loginpage.php';

    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = new user_password($_POST['email'], $_POST['password'], $_POST['name'], $_POST['address'],
                $_POST['phone']);
            $this->DBConnectionLogin->register($user);
            header('location: index_1.php');

        }
        include 'view/register.php';


    }

    public function getBackPassword()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $result = $this->DBConnectionLogin->getpassword($email, $phone);
            if ($result) {
                $message = 'you password is ' . $result['password'];
            }

        }
        include 'view/forgotPassword.php';
    }
    public function logout(){
        session_destroy();
        header('location: index_1.php');
    }
}