<!DOCTYPE html>
<html>
<head>
	<title>Login and Registration Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
  <div class="login-box"> 
   <div class="row">
	   <div class="col-md-6 login-left">
			<h2>Login here</h2>
       <form action="process.php" method="POST">
       	<div class="form-group">
   		 <label>Username:</label>
   		 <input type="text" name="user"class="form-control" required />

        </div>
	     <div class="form-group">
   		   <label>Password:</label>
   		   <input type="password" name="pass" class="form-control" required/>
   	     </div>
  
      		<button type="submit" class="btn btn-primary">Login</button>
       </form>
     </div>



     <div class="col-md-6 login-right">
			<h2>Register here</h2>
       <form action="register.php" method="POST">
       	<div class="form-group">
   		 <label>Username:</label>
   		 <input type="text" name="user" class="form-control" required />

        </div>
	     <div class="form-group">
   		   <label>Password:</label>
   		   <input type="password" name="pass" class="form-control" required/>
   	     </div>

   	     <div class="form-group">
   		   <label>First Name:</label>
   		   <input type="text" name="fname" class="form-control" required/>
   	     </div>

   	     <div class="form-group">
   		   <label>Second Name:</label>
   		   <input type="text" name="sname" class="form-control" required/>
   	     </div>

   	     <div class="form-group">
   		   <label>Email:</label>
   		   <input type="text" name="email" class="form-control" required/>
   	     </div>

   	     <div class="form-group">
   		   <label>Number:</label>
   		   <input type="text" name="pnumber" class="form-control"/>
   	     </div>

   	     <div class="form-group">
   		   <label>Country:</label>
   		   <input type="text" name="country" class="form-control" required/>
   	     </div>
  
      		<button type="submit" class="btn btn-primary">Register</button>
       </form>
     </div>



  </div>
 
 </div>
</div>

</body>
</html>
