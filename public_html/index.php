<?php
//phpinfo();
require '../vendor/autoload.php';

//echo "Hello World"
$app = new \Slim\Slim();

$app->get('/', function() use($app) {
	echo "Home Page";
	$app->render('index.php');
	//$app->render('home.php');
});

$app->get('/testpage', function() use ($app){
	//echo "Test Page";
	$app->render('testpage.php');
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
