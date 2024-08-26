<?php

include 'conn.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $fathername = $_POST['fathername'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $student = $_POST['student'];
    $phoneNumber = $_POST['phoneNumber'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $submit = $_POST['submit'];


    $query ="INSERT INTO `data`(`name`, `fathername`, `address`, `email`, `student`, `phoneNumber`, `class`, `section`) VALUES ('$name','$fathername','$address','$email','$student','$phoneNumber','$class','$section')";

    $insert = mysqli_query($conn, $query);

    if ($insert) {
        echo "<script>alert('Data Sent Successfully');</script>";
    } else {
        echo "<script>alert('Data Sending Failed: " . mysqli_error($conn) . "');</script>";  
    }

}

    mysqli_close($conn);


?>
