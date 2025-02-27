<?php
require('config.php');


$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$result = $conn->query("SELECT * FROM donor");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>View Donors</title>

    <link href="favicons/favicon.ico" rel="icon" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/view_donors.css">

    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-a11y="true"></script>
</head>
<style>
    body{
  background-color: #F3F0D7;
    }
</style>

<body>
    <div class="container mt-5">
        <h2>List of Donors</h2>
        <?php
        if ($result->num_rows > 0) {
            echo "<table class='table table-bordered'><tr><th>Name</th><th>Age</th><th>Sex</th><th>Phone</th><th>Blood Group</th><th>Haemoglobin Level</th><th>Blood Sugar</th><th>Blood Pressure</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["D_name"]. "</td><td>" . $row["D_age"]. "</td><td>" . $row["D_sex"]. "</td><td>" . $row["D_phno"]. "</td><td>" . $row["D_bgrp"]. "</td><td>" . $row["HLevel"]. "</td><td>" . $row["BS"]. "</td><td>" . $row["BP"]. "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No donors found.";
        }
        $conn->close();
        ?>
    </div>

</body>

</html>
