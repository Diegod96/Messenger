<html>
<body>
<?php

// Create connection
$conn = mysqli_connect("localhost","root","");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
	//echo "Connected successfully";
}

mysqli_select_db($conn, "myExampleDatabase") or die("could not connect to the DB");
//echo "Connected to the  database successfully";


?>
</body>
</html>
