
<!DOCTYPE html>
<html>
<head>
	<title>Fetch comments from database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <style>
     body{
      background: url("dog3.jpg");
      background-size: cover;
     }
     table{}
   </style>
</head>
<body>
  
  <a href="fetch.html" class="btn pmd-btn-fab btn-danger pmd-ripple-effect btn-lg" > Back</a>
  <br>
	<h1><center> <span class="badge badge-pill badge-secondary">Administrator section</span> </center></h1>

  <br>
<table class="table table-info table-hover">
    <thead>
      <tr>
      	<th>Id</th>S
        <th>First Name</th>
        <th>Email</th>
        <th>Comment</th>
      </tr>
    </thead>

    <?php
       $connect=mysqli_connect("localhost","root","","login");

       $query = "SELECT * FROM `comment`";
       $query_run=mysqli_query($connect,$query);

            while($row = mysqli_fetch_assoc($query_run))
              {
      ?>
          <tr>
     	         <td><?php  echo $row['c.id']; ?></td>
     	         <td><?php  echo $row['fname']; ?></td>
     	         <td><?php  echo $row['email']; ?></td>
               	 <td><?php  echo $row['comment']; ?></td>
     	        
          </tr>

<?php
     }
   
?>
   
  </table>

</body>
</html>