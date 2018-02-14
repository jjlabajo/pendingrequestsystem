<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  </head>
    <?php
        if(isset($_POST['signup'])){
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $message = "$lastname $firstname would like to request an account.";
            $query = "INSERT INTO `requests` (`id`, `firstname`, `lastname`, `email`, `password`, `message`, `date`) VALUES (NULL, '$firstname', '$lastname', '$email', '$password', '$message', CURRENT_TIMESTAMP)";
            if(performQuery($query)){
                echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            }else{
                echo "<script>alert('Unknown error occured.')</script>";
            }
        }
    
    ?>
  <body class="text-center">
      <div class="container">
            <form method="post" class="form-signin">
              <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
              <label for="inputEmail" class="sr-only">Firstname</label>
              <input name="firstname" type="text" id="inputEmail" class="form-control" placeholder="Firstname" required autofocus>
                <label for="inputEmail" class="sr-only">Lastname</label>
              <input name="lastname" type="text" id="inputEmail" class="form-control" placeholder="Lastname" required autofocus>
                <label for="inputEmail" class="sr-only">Email address</label>
              <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <button name="signup" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
              <a href="login.php" class="mt-5 mb-3 text-muted">Go back to login page</a>
            </form>
          </div>
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
