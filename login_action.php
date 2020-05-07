<?php


    session_start();


    $email = $_GET['email'];
    $password = $_GET['password'];

    //echo $email;
    //echo $password;

    include("connections_WAMP.php");

    $sql = "SELECT * FROM USERS WHERE user_email = '$email' AND user_password = '$password'";

    $results = mysqli_query($conn, $sql);

    $users   = mysqli_num_rows($results);

    $row     = mysqli_fetch_array($results);

    $_SESSION['name']  = $row['user_name'];
    $_SESSION['email'] = $row['user_email'];
    $_SESSION['dob']   = $row['user_dob'];
    $_SESSION['dom']   = $row['user_dom'];
    $_SESSION['pic'] = $row['user_picture'];



    
    if($users > 0) {

                    include("nav.php");
                    include("login_function.php");
    }

    else {

        echo "location:index.php?msg=User not found";
        header("location:index.php?msg=User not found");
    }



?>
