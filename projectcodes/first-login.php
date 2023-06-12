<!-- PHP command to link server.php file with registration form  -->
<?php include('server.php'); ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>User logIn</title>
 
     <style>
         .container{
             justify-content: center;
             text-align: center;
             align-items: center;
         }
         input{
             padding: 5px;
         }
         .error{
             background-color: pink;
             color: red;
             width: 300px;
             margin: 0 auto;
         }
     </style>
 </head>
 <body>
 <div class="container">
     <h1> User Registration System</h1>
 
     <h4><a href="loggedInPage.php">Home Page</a></h4>
                      <!--------log in form------>
 
     <div class="logInForm" id="logIn">
     <form method="POST">
 
     <!-- To show errors is user put wrong data -->
        <div class="error"> <?php echo $Error2 ?> </div>
 
        <!-- To check the user loged In status -->
        <p>
         <?php
            if (!isset($_COOKIE["id"]) OR !isset($_SESSION["id"]) ) {
             echo "<p>Please first log in to proceed.</p>";
            }
         ?>
       </p>
 
       <input type="email" name="email" placeholder="Email"> <br><br>
       <input type="password" name="password" placeholder="password"><br><br>
       <label for="checkbox">Stay logged in</label>
       <input type="checkbox" name="stayLoggedIn" id="chechbox" value="1"> <br><br>
       <input type="submit" name="logIn" value="Log In">
 
       <!-- User registration form link -->
       <p>Not a register user <a href="index.php"> Create Account</a></p>
     </form>
     </div>
 </div>
 
 </script>
  
 </body>
 </html>