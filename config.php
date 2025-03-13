<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Config page</title>
</head>
<body>
    <?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $database ="dentalcare";
    $conn = mysqli_connect("localhost","root","","dentalcare");
    if($conn){
        // echo "Connection successfully!";
    }
    else{
        echo "Connection Failed!";

    }
    ?>
</body>
</html>