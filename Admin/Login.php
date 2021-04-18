<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="css/login style.css" />
    <script src="signup.js"></script>
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
       <!-- PHP Code To Connection of Databse  -->
<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $FullName=$_POST['FullName'];
    $UserName=$_POST['UserName'];
    $ContactNo=$_POST['ContactNo'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $ConfirmPass=$_POST['ConfirmPass'];
//connecting to the database

$servername="localhost";
$username="root";
$password="";
$database="project";

//create a connection

$conn=mysqli_connect($servername,$username,$password,$database);

//die if connection was not successful
if(!$conn){
    die("sorry we failed to connect:".mysqli_connect_error());
}
else{
  
    //execute a query   

}
$existSql="SELECT * FROM `userdata` WHERE UserName ='$UserName'";
$result=mysqli_query($conn, $existSql);
$numExistRows=mysqli_num_rows($result);
if($numExistRows > 0)
{
  echo '<script>alert("UserName Already register")</script>';
  
}
else
{
  $sql="INSERT INTO `userdata` (`Id`, `FullName`, `UserName`, `ContactNo`, `Email`, `Password`, `ConfirmPass`,`CurrentTime`) 
    VALUES ('', '$FullName', '$UserName', '$ContactNo', '$Email', '$Password', '$ConfirmPass', current_timestamp())";
     $result=mysqli_query($conn,$sql);
 
}


}
?>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="connected.php" method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field"> 
              <i class="fas fa-user"></i>
              <input type="text" name="UserName" placeholder="Username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="Password"  placeholder="Password" required />
            </div>
            <center>
              <input type="submit" value="Login" class="btn solid btn-chg" />
              <div class="btn-solids2">
                <a href="admin login.php">Admin Login</a>
              </div>
            </center>
            
          </form>
          <form action="login.php" class="sign-up-form" method="POST">
            <h2 class="title">Sign up</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="FullName" name="FullName" placeholder="Full-name" required />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" id="UserName"  name="UserName" placeholder="Username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="number" id="ContactNo"  name="ContactNo" placeholder="Contact" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" id="Email"  name="Email" onkeyup="validationEmail()"  placeholder="Email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="Password"  name="Password" placeholder="Password" required/>
              <p id="p1" style="color:red"></p>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" id="ConfirmPass"  name="ConfirmPass" placeholder="ConfirmPassword" required/>
              <p id="p2" style="color:red"></p>
            </div>
            <input type="submit" class="btn" value="Sign up" onclick="return formvalidation(),Passvalidation()"  />
           
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="app.js"></script>
   </body>
</html>