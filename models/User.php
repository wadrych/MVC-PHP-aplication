<?php
require_once '../providers/UserService.php';

class User
{
    private $login;
    private $password;
    private $email;
    private $id;

    public function __construct($login, $email, $password)
    {
        $this->login = $login;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    public function save()
    {
        $user = [
            'login' => "{$this->login}",
            'password' => "{$this->password}",
            'email' => "{$this->email}"
        ];

        $this->id = UserService::save($user);

    }
}