<html>
<head>
</head>
<body>
<?php
// old way
// $link = mysql_connect('localhost', 'root', 'password');
// mysql_select_db('bazaar', $link);
// mysql_set_charset('UTF-8', $link);

$db = new PDO('mysql:host=localhost;dbname=bazaar;charset=utf8', 'tycc', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

try {
	// connect as appropriate as above
	$stmt = $db->query('SELECT * FROM food_ticket;'); // invalid query !
	//$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
	//var_dump( $data );
	echo '<ol>';
	while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
		echo '<li>'.$row['food_name']." ".$row['price'].'</li>';
	}
	echo '</ol>';
} catch (PDOException $ex){
	echo "An Error occured!";
	//some_logging_function( $ex->getMessage() );
}
?>
</body>
</html>
