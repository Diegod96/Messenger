<html>

    <head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  

    </head>

    <body>
            
                <table class = "table table-striped table-hover table-bordered" width = 100%>

                    <tr height=15%>
                        <td colspan = 3 align = center>

                                <?php
//                                        session_start();
//                                        $pic = $_SESSION['pic'];
//                                        error_reporting(0);
//
//                                        echo "<img src = ";
//                                        echo $pic;
//                                        echo " style = 'height:100px'>";

                                        echo "<h3>Welcome " . $_SESSION['name'] . "</h3>";                                        

                                ?>
                        </td>
                    </tr>

                    <tr height = 80%>

                        <td width = 20% valign = top> 

                                <table  width = 100%>
                                    <tr>
                                            <td><a href = "Inbox.php">Inbox</a></td>
                                    </tr>

                                    <tr>
                                            <td><a href = "Outbox.php">Outbox</a></td>
                                    </tr>                                    

                                    <tr>
                                            <td><a href = "send_msg.php">Send Message</a></td>
                                    </tr>

                                    <tr>
                                            <td><a href = "signout.php">Signout</a></td>
                                    </tr>
                        
                                </table>
                        
                        <td>

                        <td width = 80%><h3>About me:</h3>
                                    <p>
                                        <?php
//                                                session_start();
                                                echo "My name is: " . $_SESSION['name'] . "<br>";    
                                                echo "My DOB is: " . $_SESSION['dob'] . "<br>";
                                                echo "I am from: " . $_SESSION['dom'] . "<br>";

                                        ?>    
                                    </p>


                        </td>
                    </tr>

                    <tr height = 5%>
                            <td colspan = 3 bgcolor = lightgrey align = center>&copy; all rights reserved</td>
                    </tr>
                </table>                
    
    </body>


</html>
