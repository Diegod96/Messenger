

<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>

        <?php
                include("nav.php");
        ?>

        <div class="container">
            <form id="form1" name="form1" method="get" action="login_action.php">
                <table class = "table table-bordered table-striped table-hover">
                        <div class="form-group">
                            <tr>
                                    <td colspan="2"><center><h2 style='color:maroon'>User Login Form</h2></center></td>
                            </tr>                        
                        </div>

                        <div class="form-group">
                        

                            <tr>
                                <td><label><h4>Email</h4></label></td>
                                <td> <input required type="email" name = "email" class="form-control" placeholder="Type your email"></td>
                            </tr>

                            <tr>
                                <td><label><h4>Password</h4></label></td>
                                <td> <input required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" type="password" name = "password" class="form-control" placeholder="Type your password"></td>
                            </tr> 

                            <tr>
                                    <td colspan="2"><button type="submit" class="btn btn-outline-primary">Submit</button></td>
                            
                            </tr>                                                       
                            
                            <tr>
                                    <td colspan="2"><h6>New user? <a href = "registration_form.php">Click here</a> to register</h6></td>
                            
                            </tr>                                                                                   

                        </div>                       

                </table>

            </form>

        </div>

    
    </body>

</html>
