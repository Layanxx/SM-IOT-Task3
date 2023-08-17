<?php

$servername = "localhost:3306";
$username = " root";
$password = "";
$dbname = "dht_data";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Database connection is ok .";

if (isset($_POST["temperature"]) && isset($_POST["humidity"])) {
    $temp = $_POST["temperature"];
    $hmd = $_POST["humidity"];

    $sql = "INSERT INTO thedata (temperature, humidity) VALUES (".$temp." ".$hmd.")";

    if (mysqli_query($conn, $sql)) {
        echo "\nData registered.";
    } else {
        echo "Data not registered: " . $sql . "<br>" . mysqli_error($conn);
    }
}

//$sql = "SELECT * FROM thedata ";
//$result = $conn->query($sql);
?>