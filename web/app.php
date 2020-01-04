<?php
session_start();

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) 
{
    session_unset();     
    session_destroy();  
    session_start();
}
$_SESSION['LAST_ACTIVITY'] = time(); 

require '../vendor/autoload.php';
require_once '../Router.php';

$router = new Router();

$router->get('/','StaticController::main');
$router->get('/exercises','StaticController::exercises');
$router->get('/contact','StaticController::contact');

$router->get('/gallery', 'ImageController::index');
$router->get('/image/new','ImageController::new');

$router->get('/login', 'UserController::log');

$router->get('/favourites', 'FavouriteController::index');

$router->post('/image/add', 'ImageController::add');

$router->post('/login/login', 'UserController::login');
$router->post('/login/register', 'UserController::register');
$router->post('/login/logout', 'UserController::logout');

$router->post('/favourites/save', 'FavouriteController::save');
$router->post('/favourites/delete', 'FavouriteController::delete');
$router->_404('ErrorController::_404');

$view = $router->dispatch();
$view->render();