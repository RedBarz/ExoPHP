<?php 

require_once('../middleware/connect.php');

$day = $_POST ['day'];
$hours = $_POST ['hours'];
$date = $_POST ['date'];

$db_connect->query("INSERT INTO fiche_reservation (id, day, hours,date) VALUES (NULL, '$day', '$hours', '$date')");

header("Location: http://localhost/public/query_sql");