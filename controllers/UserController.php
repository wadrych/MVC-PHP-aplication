<?php
require_once "../views/LoginView.php";
require_once "../models/User.php";
require_once '../views/RedirectView.php';
require_once '../providers/UserService.php';


class UserController
{
    public function __construct()
    {
    }

    public function log()
    {
        return new LoginView();
    }

    public function login()
    {
        $message = '';
        $is_ok = true;

        $login = $_POST['login'];
        if($login == '')
        {
            $is_ok = false;
            $message .= "Brak loginu <br>";
        }

        $password = $_POST['password'];
        if($password == '')
        {
            $is_ok = false;
            $message .= "Brak hasła <br>";
        }

        if($is_ok)
        {
            $user = UserService::search($login);

            if(isset($user) && password_verify($password, $user['password']))
            {
                $_SESSION['login'] = $login;
                $_SESSION['message'] = $message;
                session_regenerate_id();

                return new RedirectView('/', 303);
            }
            else
            {
                $message .= "Logowanie nie powiodło się <br>";
                $_SESSION['message'] = $message;

                return new RedirectView('/login', 303);
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['login']);
        $_SESSION['message'] = "Wylogowano <br>";
        $message = $_SESSION['message'];
        
        session_unset();   
        session_destroy();
        session_start();
        session_set_cookie_params(10);
        $_SESSION['message']= $message;

        return new RedirectView('/login', 303);
    }

    public function register()
    {
        $message = '';
        $is_ok = true;

        $login = $_POST['login'];
        if($login == '')
        {
            $is_ok = false;
            $message .= "Brak loginu <br>";
        }

        $email = $_POST['email'];
        if($email == '')
        {
            $is_ok = false;
            $message .= "Brak emailu <br>";
        }

        $password = $_POST['password'];
        if($password == '')
        {
            $is_ok = false;
            $message .= "Brak hasła <br>";
        }

        $password_r = $_POST['password_repeat'];
        if($password_r != $password)
        {
            $is_ok = false;
            $message .= "Hasła muszą być takie same <br>";
        }

        if(UserService::do_exist($login))
        {
            $is_ok = false;
            $message .= "Login jest już zajęty <br>";
        }

        if($is_ok)
        {
            $user = new User($login, $email, $password);
            $user->save();
            $message .= "Rejestracja powiodła się!  Można się zalogować. <br>";
        }
        $_SESSION['message'] = $message;

        return new RedirectView('/login', 303);
    }


}