<?php
require_once '../bootstrap.php';

$routeur = new \Router\Router();

$routeur->addRoute('/', 'Framework\Controller\Front\Page', 'home');
$routeur->addRoute('/:page', 'Framework\Controller\Front\Page', 'show');
$routeur->addParam('page', array('model' => 'Model\Page'));

$url = \Tools\Server::uri();

$loader = new Twig_Loader_Filesystem(APPPATH . '/templates');
$twig   = new Twig_Environment($loader, array('cache' => CACHEPATH . 'twig'));


try {
    $controller = $routeur->getController($url);
    echo $routeur->dispatch($controller, array('twig' => $twig));
} catch (\Router\Exception\NotFound $e) {
    \Tools\Header::status(404);
    echo "not found";
} catch (Exception $e) {
    \Tools\Header::status(501);
    echo "Server error";
}
