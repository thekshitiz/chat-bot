<?php

$connect = mysqli_connect("localhost", "root","","bot");

if (isset($_POST['bot'])) {
    $name = $_POST['name'];
    $name = $_POST['email'];
    $name = $_POST['contact'];
    $name = $_POST['date'];



$query = "INSERT INTO APPOINTMENT(full_name,email,contact,appointment_date) VALUES ('$name','$email','$contact','$date')";

$result = mysqli_query($connect, $query);

if ($result) {
    echo "<script> alert('You have successfully appointed.)</script>";
}
else {
    "echo <script> alert('Failed') </script>";
}
}
<?>
