<?php
$db = new PDO('mysql:host=localhost;dbname=bazaar;charset=utf8', 'tycc', '');
//$affected_rows = $db->exec("UPDATE table SET field='value'");
$affected_rows = $db->exec("INSERT INTO used_ticket (time) VALUES (NOW());");
echo $affected_rows . ' were affected';
?>
