<?php
require '../vendor/autoload.php';

define('APP_PATH', '../application');

use Guzzle\Http\Client;

$loader = new Twig_Loader_Filesystem(APP_PATH.'/views/');
$twig = new Twig_Environment($loader);

$app = new \Slim\Slim();
$app->get('/', function () use ($app, $twig) {
    echo $twig->render('home.php');
});

$app->get('/blog', function () use ($app, $twig) {

	$client = new Client('http://barryosullivan.me/api');

	$request = $client->get('get_posts');
	$response = $request->send();

	$data = $response->json();

    echo $twig->render('blog.php', $data);
});

$app->get('/reading', function () use ($app, $twig) {
	echo $twig->render('reading.php');
});

$app->run();