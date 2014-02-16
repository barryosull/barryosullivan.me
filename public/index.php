<?php
require '../vendor/autoload.php';

define('APP_PATH', '../app');

use Guzzle\Http\Client;

$loader = new Twig_Loader_Filesystem(APP_PATH.'/views/');
$twig = new Twig_Environment($loader);

$app = new \Slim\Slim();
$app->get('/', function () use ($app, $twig) {
    echo $twig->render('home.php');
});

$app->get('/blog', function () use ($app, $twig) {

	$client = new Client('http://blog.barryosullivan.me/api');

	$request = $client->get('get_posts');
	$response = $request->send();

	$data = $response->json();

    echo $twig->render('blog.php', $data);
});

$app->get('/reading', function () use ($app, $twig) {
	$pocketConfig = json_decode(file_get_contents(APP_PATH.'/config/pocket.json'));

	$client = new Client('https://getpocket.com/v3');

    $query = array(
		'consumer_key' => $pocketConfig->consumer_key,
		'access_token' => $pocketConfig->access_token,
		'state' => 'archive'
    );

	$request = $client->post('get', array(), 
		$query
	);

	$response = $request->send();

	$data = $response->json();

	echo $twig->render('reading.php', $data);
});

$app->run();