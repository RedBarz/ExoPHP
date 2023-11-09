<?php 

require_once('../middleware/connect.php');

$id = $_POST['id'];
$day = $_POST['day'];
$hours = $_POST['hours'];
$date = $_POST['date'];

$db_connect->query("UPDATE fiche_reservation SET id=$id, day='$day', hours='$hours', date='$date' WHERE 1");

header("Location: http://localhost/public/query_sql");