<?php

$conn=new mysqli("localhost","root","","test");

if($conn->connect_error)
{
    die("database error : ".$conn->connect_error);
}


?>
