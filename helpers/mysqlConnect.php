<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$DBName = "db_blog";

$DBConnection = new mysqli($servername, $username, $password, $DBName);

if ($DBConnection->connect_error) {
    printf("Connection failed: %s\n", $DBConnection->connect_error);
    exit();
}