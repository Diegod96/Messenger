<?php

        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $dob        = $_POST['dob'];
        $dom        = $_POST['dom'];
        $file       = $_FILES['pic'];

        $filename   = $_FILES['pic']['name'];        
        $tmpname    = $_FILES['pic']['tmp_name'];

        $destination = "uploads/" . rand(). $filename;

        move_uploaded_file($tmpname, $destination);

        
        echo $name;
        echo $email;
        echo $password;
        echo $dob;
        echo $dom;

        include("connections_WAMP.php");

        $sql = "INSERT INTO users (user_name, user_email, user_password, user_dob, user_dom, user_picture) VALUES ('$name', '$email', '$password', '$dob', '$dom', '$destination')";


        if($conn->query($sql) == TRUE) {

                header("location:registration_form.php?msg=You have successfully made an account. Please go back to the login page to login.");
        }

        else {

                echo "Error: " . $sql . "<br>" . $conn->error; 
        }

           


?>
