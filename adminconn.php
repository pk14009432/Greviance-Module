<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
//connecting to the database

$servername="localhost";
$username="root";
$password="";
$database="project";

//create a connection

$conn=mysqli_connect($servername,$username,$password,$database);
  
    //execute a query
    $sql="select * from admindata where user='$user' AND pass='$pass'";
     $result=mysqli_query($conn, $sql);
     $num=mysqli_num_rows($result);
     if($num == 1)
     {
         
         header('Location: http://localhost:7882/home%20Page/admin/index.php');
         
     }
     else
     {
        echo '<script>alert("Please Enter the Correct Details")</script>';
     }

}
?>