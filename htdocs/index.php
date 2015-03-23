<?php
require_once '../bootstrap.php';

$routeur = new \Router\Router();

$routeur->addRoute('/', 'Controller_Back', 'test');
$routeur->addRoute('/:id', 'Controller_Back', 'test');
$routeur->addRoute('/:page', 'Controller_Back', 'test');
$routeur->addParam('id', array('match' => 'is_numeric'));
$routeur->addParam('page', array('model' => 'Model\Page'));

echo $routeur->getUrl(array('id' => 2));
echo $routeur->getController('/amour');