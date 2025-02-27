<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<style>
    body {
        text-align: center;
        background-color: #F3F0D7;
        margin-top: 50px;
    }
    button{
        margin: 10px;
        padding: 10px;
        background-color:rgb(247, 25, 25);
        color: white;
        border: none;
        cursor: pointer;
        width: 20%;
        text-align: center;
        text-decoration: none;
        border-radius:10px;
    }
    button:hover {
        background-color: rgb(205, 197, 197);
    }
</style>
<body>
    <button onclick="location.href='view_donors.php'">DONOR LIST</button>
    <button onclick="location.href='view_requests.php'">REQUEST LIST</button>
    <button onclick="location.href='view_recipients.php'">RECIPIENT LIST</button>
</body>
</html>