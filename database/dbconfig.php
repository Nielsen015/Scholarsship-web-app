<?php

$server_name = "localhost";
$db_username = "u479978777_scholarly ";
$db_password = "Moses@015";
$db_name = "u479978777_scholarly ";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

if(!$connection)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>
