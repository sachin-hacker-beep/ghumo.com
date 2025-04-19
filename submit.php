<?php

include('connect.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username= $_POST['username'];
    $useremail = $_POST['useremail'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $additional = $_POST['additional'];
    $sql = "INSERT INTO register (email,password,username, useremail, destination, date, additional) VALUES ('$email', '$password','$username', '$useremail', '$destination', '$date', '$additional')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.html?success=1");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?> 