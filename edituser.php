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
$user_id = $_POST['user_id'];
$username = $_POST['user'];
$password = $_POST['pass'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$number = $_POST['pnumber'];
$country = $_POST['country'];

//Validating email and username
// validations to is emoty fields list, same pass in db, same username in db
// $s ="select * from users where user = '$username' ";
// $p ="select * from users where email = '$email' ";

// $result = mysqli_query($connect,$s);
// $res = mysqli_query($connect,$p);

// $num = mysqli_num_rows($result);
// $numb = mysqli_num_rows($res);

// if($num == 1){

// 	  echo "<script type='text/javascript'>alert('Sorry....Your Username has already been taken'); window.location.href = 'registrationfrm.html';</script>";
// }
// elseif($numb == 1){
// 	 echo "<script type='text/javascript'>alert('Sorry $username....Email has already been taken'); window.location.href = 'registrationfrm.html';</script>";
// }
// else{

$sql = "UPDATE users SET fname='$fname',sname='$sname',email='$email',user='$username',pass='$password',pnumber='$number',country='$country' WHERE id='$user_id'";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));
  ?>

    <script type='text/javascript'>alert('Your data has been updated successfully'); window.location.href = 'registered.php';</script>
<?php
    //echo "Thank you $username for registering with us";

//}
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