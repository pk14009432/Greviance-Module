<html>
    <head>
        <title>Send your quaries</title>
        <link rel="stylesheet" href="styleee.css">
    </head>
    <body>
        <?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sub=$_POST['sub'];
    $message=$_POST['message'];

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
    $sql="INSERT INTO `scomplain` (`id`, `name`, `email`, `sub`, `message`) VALUES (NULL, '$name', '$email', '$sub', '$message');";
     $result=mysqli_query($conn,$sql); 

      

}
echo '<script>alert("Complain Send to Successfully")</script>'; 

}
?>
       

        <div class="contact-box">
            <form action="index.php" method="POST">
                <input type="text" name="name" class="input-field" placeholder="Your Name" required >
                <input type="text" name="email" class="input-field" placeholder="Your E-mail" required >
                <label for="Subject">Subject</label>
                <select name="sub" id="Subject" required>
                    <option value="">None</option>
                    <option value="Projector">Projector</option>
                    <option value="AirConditioner">AirConditioner</option>
                    <option value="Fan">Fan</option>
                    <option value="Water">Water</option>
                    <option value="Electricity">Electricity</option>
                    <option value="Bed">Bed</option>
                </select>
                
                <textarea type="text" name="message" class="input-field textarea-field" placeholder="Your message"></textarea>
                <input type="submit" value="Send" name="Send">
            </form>
        </div>
    </body>
</html>