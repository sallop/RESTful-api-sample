<?php
$db = new PDO('mysql:host=localhost;dbname=bazaar;charset=utf8', 'tycc', '');
//$affected_rows = $db->exec("UPDATE table SET field='value'");
$affected_rows = $db->exec(<<< EOT
DELETE FROM used_ticket
ORDER BY used_number DESC
LIMIT 1;
EOT
);
echo $affected_rows . ' were affected';
?>
