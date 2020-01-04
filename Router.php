<?php
class Router
{
    public $get;
    private $post;
    private $errors;

    public function __construct()
    {
        $this->get = [];
        $this->post = [];
    }

    public function get($path, $action)
    {
        $this->get[$path] = $action;
    }

    public function post($path, $action)
    {
        $this->post[$path] = $action;
    }

    public function _404($action)
    {
        $this->errors['404'] = $action;
    }

    public function dispatch()
    {
        $path = explode('?', $_SERVER['REQUEST_URI'])[0];
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        
        $number = 0;
        $pos = strrpos($path, '/');
        $len = strlen($path) - 1;
        if($len > 1 && $pos == $len)
        {
            $path = substr($path, 0, -1);
        }
        else if($len > 1 && $pos <= $len)
        {
            $last_string = substr($path, $pos+1);
            if((int)$last_string != 0)
            {
                $number = (int)$last_string;
                $_SESSION['page'] = $number;
                $path = substr($path, 0, -strlen($last_string)-1);
            }
        }

        if(isset($this->$method) && isset($this->$method[$path]))
        {

            $action = explode('::', $this->$method[$path]);
        }
        else
        {
            $action = explode('::', $this->errors['404']);
        } 
        

        $controller = $action[0];
        $handler = $action[1];

        require_once "controllers/{$controller}.php";
        return (new $controller)->$handler();
    }
}