<?php

$connection=mysqli_connect('localhost','root','','user7_login');
if ($connection->connect_error) 
{
    die("Connection failed: " . $connection->connect_error);
}
?>