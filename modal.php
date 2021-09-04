 
   <style >
     .modal-content{
          background-image:url('wolf10.jpg');
background-size:cover;

   </style>
 
 

 <?php
$user_id=$_REQUEST['id'];
$connect=mysqli_connect("localhost","root","","login");

       $query = "SELECT * FROM users WHERE id='$user_id'";
       $query_run=mysqli_query($connect,$query);

        $row = mysqli_fetch_assoc($query_run);
 ?>
 <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">EDIT <?php echo $row['fname']; ?> DETAILS</h4>
      </div> <form class="text-center border border-light p-5"  action="edituser.php" method="POST" >

      <div class="modal-body">
       


    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" name="fname" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name" value="<?php echo $row['fname']; ?>">
            <input type="hidden" name="user_id"  value="<?php echo $user_id; ?>">
        </div><br>
        <div class="col">
            <!-- Second name -->
            <input type="text" name="sname" id="defaultRegisterFormLastName" class="form-control" placeholder="Second name" value="<?php echo $row['sname']; ?>">
        </div>
    </div><br>

    <!-- E-mail -->
    <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail" value="<?php echo $row['email']; ?>"><br>
  

  <div class="form-row mb-4">
        <div class="col">
            <!-- Username -->
            <input type="text"name="user" class="form-control" placeholder="Username" value="<?php echo $row['user']; ?>">
        </div><br>
        <div class="col">
            <!-- Password -->
            <input type="password" name="pass"id="defaultRegisterFormLastName" class="form-control" placeholder="Password" value="<?php echo $row['pass']; ?>">
          <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
        At least 8 characters and 1 digit
    </small>
        </div>
    </div><br>
  
    <!-- Phone number -->
    <input type="text" name="pnumber"id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock" value="<?php echo $row['pnumber']; ?>">
  <br>
  
   <!-- Country-->
    <input type="text" name="country" id="defaultRegisterPhonePassword" class="form-control" placeholder="Country" aria-describedby="defaultRegisterFormPhoneHelpBlock" value="<?php echo $row['country']; ?>">
   

   

    <!-- Sign up button -->

    

    
    

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-success" type="submit">UPDATE</button>
</div>
</form>
    </div>
 