<?php

/*$host=;
$username=;
$pass="";
$database="form";*/

$connect=mysqli_connect("localhost","root","","login");

/*
if($connect){
	echo "imepata";
}
else{
	echo "not";
}
*/

$fname=$_POST['fname'];
$email=$_POST['email'];
$comment=$_POST['comment'];

$sql="INSERT INTO comment(fname,email,comment) VALUES('$fname','$email','$comment')";

$query=mysqli_query($connect,$sql);

if($query)
{
	//echo "hehehe";
   
	  echo "<script type='text/javascript'>alert('Thank you $fname for your comment'); window.location.href = 'index.html';</script>";
}

else
{
	die(mysqli_error($connect));
}




?>