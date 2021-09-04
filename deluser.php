<?php

$connect=mysqli_connect("localhost","root","","login"); 
$user_id = $_GET['id'];
 

$sql = "DELETE FROM users WHERE id='$user_id'";
    mysqli_query($connect,$sql) or die(mysqli_error($connect));
  ?>

    <script type='text/javascript'>alert('Your data has been deleted successfully'); window.location.href = 'registered.php';</script>
 