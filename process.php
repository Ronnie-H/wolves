
<?php

//get values passe from form in login.php file
$username = $_POST['user'];
$password = $_POST['pass'];
 

$con=mysqli_connect("localhost","root","","login");


//to prevent mysql injection
// $username = stripcslashes($username);
// $password = stripcslashes($password);

$username = mysqli_real_escape_string($con,$username); 
$password = mysqli_real_escape_string($con,$password);

//connect to the server and select database
// $conn=mysqli_connect("localhost","root","");
// mysqli_select_db($conn,"login");




//query db for user
$result = mysqli_query($con,"select * from users where user ='$username' and pass ='$password'")
         or die("Failed to query database" .mysqli_error($con));

$row = mysqli_fetch_array($result);
if ($username == $username && $password == $password )
   {
   	//echo "Login success!!! Welcome " .$username;
    header('location:fetch.html');
   }
else
{
	//echo "Failed to Login";
	header('location:index.html');

}

?>