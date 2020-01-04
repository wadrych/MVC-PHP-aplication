<?php

class LoginView
{
    private $is_logged;

    public function __construct()
    {
        $this->is_logged = isset($_SESSION['login']);
    }

    public function render()
    {
        if($this->is_logged)
        {
            include '../layouts/logout_form.php';
        }
        else
        {
            $is_logged = $this->is_logged;
            $message = null;
            if(isset($_SESSION['message']))
            {
                $message = $_SESSION['message'];
                unset($_SESSION['message']);
            }
            include "../layouts/login_form.php";
        }
    }
}