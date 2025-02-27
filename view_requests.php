<?php
require('config.php');


$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$result = $conn->query("SELECT * FROM blood_request");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>View Requests</title>

    <link href="favicons/favicon.ico" rel="icon" type="image/x-icon" />
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/view_requests.css">
 
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>
</head>
<style>
    body{
  background-color: #F3F0D7;
    }
</style>

<body>

    <div class="container mt-5">
        <h2>List of Requests</h2>
        <?php
        if ($result->num_rows > 0) {
            echo "<table class='table table-bordered'><tr><th>Recipient Name</th><th>Blood Group</th><th>Quantity</th><th>Recipient ID</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["reci_name"]. "</td><td>" . $row["reci_bgrp"]. "</td><td>" . $row["reci_bqnty"]. "</td><td>" . $row["reci_id"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No requests found.";
        }
        $conn->close();
        ?>
    </div>

</body>

</html>
