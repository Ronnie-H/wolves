<?php

$connect=mysqli_connect("localhost","root","","login");


/* Code to see if the database can be seen by the php file
if($connect){
	echo "imepata";
}
else{
	echo "not";
}
*/

$username = $_POST['user'];
$password = $_POST['pass'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$number = $_POST['pnumber'];
$country = $_POST['country'];

//Validating email and username

$s ="select * from users where user = '$username' ";
$p ="select * from users where email = '$email' ";

$result = mysqli_query($connect,$s);
$res = mysqli_query($connect,$p);

$num = mysqli_num_rows($result);
$numb = mysqli_num_rows($res);

if($num == 1){

	  echo "<script type='text/javascript'>alert('Sorry....Your Username has already been taken'); window.location.href = 'registrationfrm.html';</script>";
}
elseif($numb == 1){
	 echo "<script type='text/javascript'>alert('Sorry $username....Email has already been taken'); window.location.href = 'registrationfrm.html';</script>";
}
else{

$sql = "INSERT INTO users(user,pass,fname,sname,email,pnumber,country) VALUES('$username','$password','$fname','$sname','$email','$number','$country')";
    mysqli_query($connect,$sql);
    echo "<script type='text/javascript'>alert('Thank you $username for registering with us'); window.location.href = 'index.html';</script>";

    //echo "Thank you $username for registering with us";

}
/* Code to get errors from database

if($query)
{
	echo "Thank you .$fname for registering with us";
}
else
{
	die(mysqli_error($connect));
}
*/

?>