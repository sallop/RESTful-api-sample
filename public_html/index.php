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
$db = new PDO('mysql:host=localhost;dbname=bazaar;charset=utf8','tycc','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

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

$app->get('/add_used', function() use ($app, $db){
	// echo "add_used.php";
	// read database contents from add_used.php
	// moddel = PDO();
	$affected_rows = $db->exec("INSERT INTO used_ticket (time) VALUES (NOW())");
	//echo $affected_rows . " were affected";
	$app->render('add_used.php', ['affected_rows' => $affected_rows]);
});

$app->get('/delete_used', function() use ($app, $db){
	$affected_rows = $db->exec("DELETE FROM used_ticket ORDER BY used_number DESC LIMIT 1;");
	$app->render('delete_used.php', ['affected_rows' => $affected_rows]);
});

$app->get('/show_ticket', function() use ($app, $db){
	echo "show_ticket.php";
	$rows = [];
	// read database contents from show_ticket.php
	try {
		// connect as appropriate as above
		$stmt = $db->query('SELECT * FROM used_ticket;'); // invalid query !
		$rows = $stmt->fetchAll();
		//var_dump( $rows );
		//echo '<ol>';
		//while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
		//	echo '<li>'.$row['used_number']." ".$row['time'].'</li>';
		//}
		//echo '</ol>';
	} catch (PDOException $ex){
		echo "An Error occured!";
		//some_logging_function( $ex->getMessage() );
	}
	$app->render('show_ticket.php', ['rows' => $rows]);
});

$app->get('/show_state', function() use ($app, $db){
	echo "show_state.php";
	// read database contents from show_state.php
	//$app->config('view', ''); // not work
	//$app->render('show_state.php');
	try {
		// connect as appropriate as above
		$stmt = $db->query('SELECT * FROM food_ticket;'); // invalid query !
		$rows = $stmt->fetchAll();
		//$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//var_dump( $data );
		//echo '<ol>';
		//while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
		//	echo '<li>'.$row['food_name']." ".$row['price'].'</li>';
		//}
		//echo '</ol>';
	} catch (PDOException $ex){
		echo "An Error occured!";
		//some_logging_function( $ex->getMessage() );
	}
	$app->render('show_state.php', ['rows' => $rows]);
});


$app->get('/login', function() use ($app){
	echo "Login Page";
});


$app->get('/hello/:name', function($name){
	echo "Hello, $name";
});
$app->run();
