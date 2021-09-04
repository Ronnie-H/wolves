 
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
        <h4 class="modal-title">DELETE <?php echo $row['fname']; ?> DETAILS</h4>
      </div>  
      <div class="modal-body">
       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="deluser.php?id=<?php echo $user_id;?>" class="btn btn-success" type="submit">DELETE</a>
</div>
</form>
    </div>
 