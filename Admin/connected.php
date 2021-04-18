<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $UserName=$_POST['UserName'];
    $Password=$_POST['Password'];
//connecting to the database

$servername="localhost";
$username="root";
$password="";
$database="project";

//create a connection

$conn=mysqli_connect($servername,$username,$password,$database);
  
    //execute a query
    $sql="select * from userdata where UserName='$UserName' AND Password='$Password'";
     $result=mysqli_query($conn, $sql);
     $num=mysqli_num_rows($result);
     if($num == 1)
     {
         
         header('Location: http://localhost:7882/Home%20Page/index.php');
         
     }
     else
     {
        echo '<script>alert("Please Enter the Correct Details")</script>';
     }

}
?>