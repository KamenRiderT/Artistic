<?php
SESSION_START();
include 'connection.php';

$sql = $conn->query("SELECT * FROM art");

$view_array = [];

while($row = $sql->fetch_object()) {
    $view_array[] = $row;
}

?>
