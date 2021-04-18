<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/login style.css" />
    <title>Sign in & Sign up Form</title>
  </head>


<body>
    <div class="container">
        <div class="signin-signup">
          <form action="adminconn.php" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="user" placeholder="Admin Username" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="pass" placeholder="Admin Password" required />
            </div>
            <input type="submit" value="Login" class="btn solid btn-chg" />
            <div class="btn-solids">
              <a href="Login.php">User Login</a>
            </div>
          </form>
         
        </div>

    </div>
    

</html>