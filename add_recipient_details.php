<?php
require('config.php');

if (isset($_REQUEST['reci_name'])) {

    $reci_name = stripslashes($_REQUEST['reci_name']);
   
    $reci_name = mysqli_real_escape_string($con, $reci_name);
    $reci_age    = stripslashes($_REQUEST['reci_age']);
    $reci_age    = mysqli_real_escape_string($con, $reci_age);
    $reci_sex    = stripslashes($_REQUEST['reci_sex']);
    $reci_sex    = mysqli_real_escape_string($con, $reci_sex);
    $reci_phno   = stripslashes($_REQUEST['reci_phno']);
    $reci_phno   = mysqli_real_escape_string($con, $reci_phno);
    $reci_bgrp   = stripslashes($_REQUEST['reci_bgrp']);
    $reci_bgrp   = mysqli_real_escape_string($con, $reci_bgrp);



    $query    = "INSERT into `recipient` (reci_name , reci_age,  reci_sex, reci_phno, reci_bgrp, reci_reg_date)
                     VALUES ('$reci_name' , '$reci_age', '$reci_sex', '$reci_phno', '$reci_bgrp', current_timestamp());";
    $result   = mysqli_query($con, $query);
    if ($result) {
        echo "<div class='form'>
                  <h3>Recipient registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='dashboard.php'>Dashboard</a></p>
                  </div>";
    } else {
        echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>Register again</a> again.</p>
                  </div>";
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Recipient Details</title>

    <link href="favicons/favicon.ico" rel="icon" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/recipient_details.css">

    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>
</head>

<body>

    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-dark">

            <a class="navbar-brand" href="">Blood bank management</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse nav_elements" id="navbarTogglerDemo02">

                <ul class="navbar-nav mx-auto">
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

    <div class="recipient_details">
        <form class="form" action="" method="post">
            <h1 class="Recipient-title">Registration</h1>
            <input type="text" class="Recipient-input" name="reci_name" placeholder="recipient name" required />
            <input type="number" class="Recipient-input" name="reci_age" placeholder="recipient age" required />
            <input type="text" class="Recipient-input" name="reci_sex" placeholder="recipient sex" required />
            <input type="text" class="Recipient-input" name="reci_phno" placeholder="recipient phono" required />
            <input type="text" class="Recipient-input" name="reci_bgrp" placeholder="recipient bgrp" required />

            <input type="submit" name="submit" value="Register" class="btn btn-dark btn-lg Recipient-button">

        </form>
    </div>

  
</body>

</html>