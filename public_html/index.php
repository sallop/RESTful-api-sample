<?php
//phpinfo();
require '../vendor/autoload.php';

//echo "Hello World"
$app = new \Slim\Slim();

$app->get('/', function(){
	echo "Home Page";
	//$app->render('home.php');
});

$app->get('/testPage', function() use ($app){
	//echo "Test Page";
	$app->render('testpage.php');
});

$app->get('/hello/:name', function($name){
	echo "Hello, $name";
});
$app->run();
