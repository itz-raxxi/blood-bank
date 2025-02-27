<?php
require('config.php');

// Database connection
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch recipients from the database
$result = $conn->query("SELECT * FROM recipient");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>View Recipients</title>
    <!-- favicon -->
    <link href="favicons/favicon.ico" rel="icon" type="image/x-icon" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/view_recipients.css">
    <!-- font awesome script -->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>
</head>
<style>
    body{
  background-color: #F3F0D7;
    }
</style>

<body>

    <div class="container mt-5">
        <h2>List of Recipients</h2>
        <?php
        if ($result->num_rows > 0) {
            echo "<table class='table table-bordered'><tr><th>Name</th><th>Age</th><th>Sex</th><th>Phone</th><th>Blood Group</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["reci_name"]. "</td><td>" . $row["reci_age"]. "</td><td>" . $row["reci_sex"]. "</td><td>" . $row["reci_phno"]. "</td><td>" . $row["reci_bgrp"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No recipients found.";
        }
        $conn->close();
        ?>
    </div>

</body>

</html>
