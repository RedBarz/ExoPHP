<?php 

require_once('../middleware/connect.php');

$day = $_POST ['day'];
$hours = $_POST ['hours'];

$db_connect->query("INSERT INTO fiche_reservation (id, day, hours) VALUES (NULL, '$day', '$hours',)");

header("Location: http://localhost/public/query_sql");