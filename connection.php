<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "gallery";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn)
{
die("Couldn't connect: " . mysql_error());
}
