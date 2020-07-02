<!DOCTYPE html>
<html>
	<head>
		<title>Signup</title>
		
 
<script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="dist/js/sidebar.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 

	  
	<link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dist/css/sidebar.css"/> 
	
		
<style>
.btn-outline {
    background-color: transparent;
    color: inherit;
    transition: all .5s;
}

.btn-success.btn-outline {
    color: #5cb85c;
}
.btn-danger.btn-outline {
    color: #d9534f;
}
.btn-success.btn-outline:hover,.btn-danger.btn-outline:hover {
    color: #fff;
}
</style>

	</head>

	<body>
			<div class="navbar navbar-static navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
    
       
      </div>
        <button type="button" class="navbar-toggle toggle-right" data-toggle="sidebar" data-target=".sidebar-right">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
    </div>
  </div>
	
	<div class="container">
	<div class="row">
    

      <div class="col-xs-7 col-sm-3 col-md-3 sidebar sidebar-right sidebar-animate">
        <ul class="nav navbar-stacked">
          <li class="active"><a href="https://mycdn.000webhostapp.com/login.php">Login</a></li>
        </ul>
      </div>
    </div>
    
  
		<form action="?" method="post">
		<br><br>
		<center><h1>Signup</h1></center><br>
			<div class="form-group">
				
				<div class="row" class="centered">
					<label class="col-sm-2" for="stitle">Name</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="stitle" name="f_name" placeholder="First" required>
						
					</div>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="stitle" name="l_name" placeholder="Last" required>
						
					</div>
					
				</div>
				
			</div>
			
			<div class="form-group">
				
				<div class="row" class="centered">
					<label class="col-sm-2" for="stitle">Enter Username</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="stitle" name="u_name" placeholder="Enter Username" required>
						
					</div>
					
				</div>
				
			</div>
			<div class="form-group" >
				
				<div class="row" class="centered">
					<label class="col-sm-2" for="stitle">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="stitle" name="passd" placeholder="Enter Password" required>
					</div>
					
				</div>
			</div>
			<div class="form-group" >
				
				<div class="row" class="centered">
					<label class="col-sm-2" for="stitle">Confirm Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="stitle" name="cpassd" placeholder="Confirm Password" required>
					</div>
					
				</div>
			</div>
			
			<div class="form-group" >
			
			<div class="row" class="centered">
			<label class="col-sm-2" for="gender">Gender</label>
			
			<div class="radio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<label><input type="radio" name="optradio"  value="Male">Male</label>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<label><input type="radio" name="optradio" value="Female">Female</label>
			</div>
			</div>
			</div>
			
			<div class="form-group" >
				
				<div class="row" class="centered">
					<label class="col-sm-2" for="stitle">Date of Birth</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="stitle" name="dob"  required>
					</div>
					
				</div>
			</div>
			
			
			
			
			
			<div class="form-group" >
				
				<div class="row" class="centered">
					<label class="col-sm-2" for="stitle">Enter current e-mail</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="stitle" name="c_mail" placeholder="Enter e-mail" required>
					</div>
				
				</div>
			</div>
			<div class="form-group">
					<br>
				<div class="row">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
				<center>
					<input type="submit" class="btn btn-success btn-outline" name="submit" value="Create">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" class="btn btn-danger btn-outline" name="cancel" value="Cancel">
					</center>
				</div>
				
			</div>
			
		</form>
	
	
	
	</div>
  
  

	
	</body>
	
</html>

<?php
if(isset($_POST['submit']))
{
	$fname=$_POST['f_name'];
	$lname=$_POST['l_name'];
	$uname=$_POST['u_name'];
	$passd=$_POST['passd'];
	$cpassd=$_POST['cpassd'];
	 $gender=$_POST['optradio'];
	$age=$_POST['dob'];
	$cemail=$_POST['c_mail'];
	require 'connection.php';
	$sql = "SELECT user_uname FROM user_reg where user_uname='".$uname."'";
	$result = mysqli_query($con,$sql);
	if (mysqli_num_rows($result)==0)
	{
		 
		if($passd==$cpassd)
		{
			  $sql = "INSERT INTO user_reg(user_fname,user_lname,user_uname,user_pass,user_gender,user_dob,user_mail) VALUES( '$fname','$lname','$uname','$passd','$gender','$age','$cemail')";
   $result = mysqli_query($con,$sql);
   $sql1 = "INSERT INTO user_info(usersname) VALUES( '$uname')";
   $result1 = mysqli_query($con,$sql1);
   ?>
   <script type="text/javascript">
window.location.href = 'https://mycdn.000webhostapp.com/login.php';
</script><?php
		}
		else
		{
			echo 'Password doesn\'t match';
			exit;
		}
	
	}
	else
	{
		echo 'Username already exists, try a different username';
		exit;
	}
	
}
?>