

<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>
                <?php

                        include("nav.php");
                ?>
        <div class="container">
            <form id="form1" name="form1" method="post" enctype = "multipart/form-data" action="registration_action.php">
                <table class = "table table-bordered table-striped table-hover">
                        <div class="form-group">
                            <tr>
                                    <td colspan="2"><center><h2 style='color:maroon'>User Registration Form</h2></center></td>
                            </tr>                        
                        </div>

                        <div class="form-group">
                        
                            <tr>
                                <td colspan="2">
                                    <?php   
                                           error_reporting(0); 
                                           echo $_GET['msg']; 
                                    ?>

                            </tr>
                        </div>

                        <div class="form-group">

                            <tr>
                                <td><label><h4>Name</h4></label></td>
                                <td> <input required type="text" name = "name" class="form-control" placeholder="Type your name"></td>
                            </tr>
                            <tr>
                                <td><label><h4>Email</h4></label></td>
                                <td> <input required type="email" name = "email" class="form-control" placeholder="Type your email"></td>
                            </tr>

                            <tr>
                                <td><label><h4>Password</h4></label></td>
                                <td> <input required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  type="password" name = "password" class="form-control" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Type your password" > </td>
                            </tr>

                            <tr>
                                <td><label><h4>Date of Birth</h4></label></td>
                                <td> <input required type="date" name = "dob" class="form-control" placeholder="Type your DOB as XX-XX-XXXX"></td>

                            </tr>

                            <tr>
                                <td><label><h4>Select a Domicile</h4></label></td>
                                <td>
                                        <select class="form-control" name = "dom" required>
                                                <option value="NY">New York</option>
                                                <option value="PO">Portland</option>
                                                <option value="LA">Los Angeles</option>
                                                <option value="SY">Syracuse</option>
                                                <option value="PHY">Philadelphia</option>
                                        </select>

                                </td>

                            </tr>

<!--                            <tr>-->
<!--                                <td><label><h4>Upload your profile picture</h4></label></td>-->
<!--                                <td> <input type="file" name = "pic" class="form-control"></td>-->
<!---->
<!--                            </tr>-->

                            <tr>
                                    <td colspan="2">
                                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                                    </td>

                            </tr>

                        </div>

                </table>

            
            
            
            
            </form>

        </div>

    
    </body>

</html>
