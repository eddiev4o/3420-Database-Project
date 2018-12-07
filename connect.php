<?php

$db = pg_connect("host=localhost dbname=green user=eddie");

if(!$db) {
	echo "Connection unsuccesful";
	exit;
} else {
	echo "Connection successful";
}
?>
