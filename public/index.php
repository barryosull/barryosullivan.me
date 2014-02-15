<?php
require '../vendor/autoload.php';

define('APP_PATH', '../application');

$loader = new Twig_Loader_Filesystem(APP_PATH.'/views/');
$twig = new Twig_Environment($loader);

$app = new \Slim\Slim();
$app->get('/', function () use ($app, $twig) {
    echo $twig->render('base_template.php');
});
$app->run();