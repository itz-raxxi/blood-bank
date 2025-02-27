<?php
require('config.php');

if (isset($_REQUEST['name'])) {

    $name = stripslashes($_REQUEST['name']);
    
    $name = mysqli_real_escape_string($con, $name);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $phone    = stripslashes($_REQUEST['phone']);
    $phone    = mysqli_real_escape_string($con, $phone);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);

    $query    = "INSERT into `users` (name , email, phone, password)
                     VALUES ('$name', '$email',  '$phone', '" . md5($password) . "')";
    $result   = mysqli_query($con, $query);
    if ($result) {
        echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
    } else {
        echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="register.css" />
    <link href="favicons/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-dark">

            <a class="navbar-brand" href="">Blood bank management</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav_elements" id="navbarTogglerDemo02">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="register_details">
        <form class="form" action="" method="post">
            <h1 class="login-title">Registration</h1>
            <input type="text" class="login-input" name="name" placeholder="name" required />
            <input type="text" class="login-input" name="email" placeholder="Email Adress">
            <input type="text" class="login-input" name="phone" placeholder="Phone no.">
            <input type="password" class="login-input" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Register" class="btn btn-dark btn-lg register-button">
            <p class="link"><a href="login.php">Click to Login</a></p>
        </form>
        <img class="blood3" src="images/blood3.jpg" alt="">
    </div>

  
</body>

</html>