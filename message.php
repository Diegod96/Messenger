<?php

        session_start();
        $s_Email = $_SESSION['email'];
        $r_Email = $_POST['remail'];
        $message = $_POST['message'];
        $time = date("M,d,Y h:i:s A") . "\n";

        include("connections_WAMP.php");

        $sql = "insert into Messages (S_Email, R_Email, Msg, time_stamp ) values ('$s_Email', '$r_Email', '$message', '$time')";

        $results = mysqli_query($conn, $sql);
        
        if($results) {

            header("location:send_msg.php?msgsend = Message sent successfully");
        }
        else {

            echo "Error: " . $conn->error;
        }
            



?>
