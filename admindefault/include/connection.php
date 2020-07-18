<?php

$servername = "127.0.0.1";
$user = "root";
$pass = "";
$db = "test";


$conn = new mysqli($servername, $user , $pass , $db);

if(!$conn) {
    die("connection failed");
}
