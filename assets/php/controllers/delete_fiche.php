<?php 

require_once('../middleware/connect.php');

$id = $_POST['id_delete'];

$db_connect->query("DELETE FROM `fiche_reservation` WHERE id=$id");

header("Location: http://localhost/public/query_sql");