<?php

$host="localhost";
$username="root";
$password="";
$database="project";

$conn=mysqli_connect("$host","$username","$password","$database");

if(!$conn)
{
    die(mysqli_connect_error($conn));
}
else
{
    echo " ";
}
?>