<?php
namespace App;

require_once '../bootstrap.php';

$model = new Model\Page();
$page  = new Controller\Front\Page();

$routeur = new \FW\Router\Router();

$routeur->addRoute('/', 'App\Controller\Front\Page', 'home');
$routeur->addRoute('/:page', 'App\Controller\Front\Page', 'show');
$routeur->addParam('page', array('model' => 'App\Model\Page'));

$url = \FW\Tools\Server::uri();

$loader = new \Twig_Loader_Filesystem(APPPATH . '/templates');
$twig   = new \Twig_Environment($loader, array('cache' => CACHEPATH . 'twig'));


try {
    $controller = $routeur->getController($url);
    echo $routeur->dispatch($controller, array('twig' => $twig));
} catch (\FW\Router\Exception\NotFound $e) {
    \FW\Tools\Header::status(404);
    echo "not found";
} catch (Exception $e) {
    \FW\Tools\Header::status(501);
    echo "Server error";
}
