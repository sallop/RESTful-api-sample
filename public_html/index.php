<?php
//phpinfo();
require '../vendor/autoload.php';

//$settings = [
//	'view' => new \Slim\Extras\Views\Twig(),
//	'templates.path' => '../Views',
//	'model' => (Object)array("message" => "Hello World")
//];
//
//echo "Hello World"
$app = new \Slim\Slim([
	'view' => new \Slim\Views\Twig()
]);

$app->get('/', function() use($app) {
	echo "Home Page";
	$app->render('index.php');
	//$app->render('home.php');
});

$app->get('/testpage', function() use ($app){
	$app->render('testpage.php', [
		'character' => 'Tyler Durden',
		'quote' => 'The liberator who destroyed my property has realigned perceptions.'
	]);
});

$app->get('/add_used', function() use ($app){
	echo "add_used.php";
	$app->render('add_used.php');
});

$app->get('/delete_used', function() use ($app){
	echo "delete_used.php";
	//$app->render('delete_used.php');
});

$app->get('/show_ticket', function() use ($app){
	echo "show_ticket.php";
	$app->render('show_ticket.php');
});

$app->get('/show_state', function() use ($app){
	echo "show_state.php";
	$app->render('show_state.php');
});


$app->get('/login', function() use ($app){
	echo "Login Page";
});


$app->get('/hello/:name', function($name){
	echo "Hello, $name";
});
$app->run();
