 
<!DOCTYPE html>
<html>
<head>
	<title>Fetch data from database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



   <style>
     body{
      background: url("un4.jpg");
      background-size: cover;
     }
   </style>
</head>
<body>
  <!-- Danger circle button with ripple effect -->

  <a href="fetch.html" class="btn pmd-btn-fab btn-danger pmd-ripple-effect btn-lg" > Back</a>


  <br>
	<h1><center> <span class="badge badge-pill badge-primary">Registered Users</span> </center></h1>

  <br>
  <div class="panel">
<table class="table table-info table-hover">
    <thead>
      <tr>
      	<th>Id</th>
        <th>First Name</th>
        <th>Second Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Phone Number</th>
        <th>Country</th>
        <th>Action</th>
      </tr>
    </thead>

    <?php
       $connect=mysqli_connect("localhost","root","","login");

       $query = "SELECT * FROM `users`";
       $query_run=mysqli_query($connect,$query);

            while($row = mysqli_fetch_assoc($query_run))
              {
      ?>
          <tr>
     	         <td><?php  echo $row['id']; ?></td>
               	 <td><?php  echo $row['fname']; ?></td>
     	         <td><?php  echo $row['sname']; ?></td>
               <td><?php  echo $row['email']; ?></td>
               <td><?php  echo $row['user']; ?></td>
               <td><?php  echo $row['pass']; ?></td>
     	         <td><?php  echo $row['pnumber']; ?></td>
              	 <td><?php  echo $row['country']; ?></td>
                 <td>
  <a href="" class="btn btn-default btn-rounded btn-primary" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#loginModal" onclick="modal('<?php echo $row['id']; ?>')"> Edit </a>

  <a href="" class="btn btn-default btn-rounded btn-danger" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#loginModal" onclick="delmodal('<?php echo $row['id']; ?>')">Delete</a></td>
          </tr>

<?php
     }
   
?>
   
  </table>
</div>
<!-- Login Modal --><!-- Modal -->
<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog" id="load">

   

  </div>
</div>
<script type="text/javascript">
  function modal(id){
    //var id = $(this).data("id"); 
    $.ajax({
        url: 'modal.php',
        type: 'POST',
        data: 'id='+id,
        dataType: 'html',
        success: function(data) {
          $('#load').html('');
          $('#load').html(data); 

        },
        // error:function(request, status, error) {
        //     console.log("ajax call went wrong:" + request.responseText);
        // }
    }); 
  }
  function delmodal(id){
    //var id = $(this).data("id"); 
    $.ajax({
        url: 'delmodal.php',
        type: 'POST',
        data: 'id='+id,
        dataType: 'html',
        success: function(data) {
          $('#load').html('');
          $('#load').html(data); 

        },
        // error:function(request, status, error) {
        //     console.log("ajax call went wrong:" + request.responseText);
        // }
    }); 
  }
</script>
</body>
</html>