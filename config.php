<?php

$servername = "localhost";
$username = "root";
$password = "@tackaR29#";

//Create Connection
$conn = new mysqli($servername, $username, $password);

if ($conn -> connect_error) {
    die("Connection Failed: ".$conn->connect_error);
}
echo "Connected Successfully";
?>