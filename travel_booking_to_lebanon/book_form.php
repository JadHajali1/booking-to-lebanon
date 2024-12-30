<?php

    $connection = mysqli_connect('localhost','root','','booking');

    if(!$connection){
        die("database connection failed: ". mysqli_connect_error());
    }

    if(isset($_POST['send'])){
        $fname = mysqli_real_escape_string($connection,$_POST['fname']);
        $lname = mysqli_real_escape_string($connection,$_POST['lname']);
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $phone = mysqli_real_escape_string($connection,$_POST['phone']);
        $address = mysqli_real_escape_string($connection,$_POST['address']);
        $passengers = mysqli_real_escape_string($connection, $_POST['passengers']);
        $arrivals = mysqli_real_escape_string($connection,$_POST['arrivals']);
        $leaving = mysqli_real_escape_string($connection,$_POST['leaving']);

        $request = "INSERT INTO booking_form(fname, lname, email, phone, address, passengers, arrivals, leaving)
        VALUES('$fname','$lname','$email','$phone','$address','$passengers','$arrivals','$leaving')";

        if (mysqli_query($connection, $request)) {
            header('Location: book.php');
            exit();
        } else {
            echo 'Error: ' . mysqli_error($connection);
        }
    }else{
        echo 'Something went wrong, try again';
    }
    mysqli_close($connection)

?>