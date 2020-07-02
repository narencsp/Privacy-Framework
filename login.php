<?php
session_start();

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
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
          <li class="active"><a href="https://mycdn.000webhostapp.com/signup.php">Signup</a></li>

        </ul>
      </div>
    </div>
		<form action="?" method="post">
		<br><br><br><br><br><br>
		<center><h1>Login</h1></center><br>
			<div class="form-group">
				
				<div class="row" class="centered">
					<label class="col-sm-2" for="stitle">Username</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="stitle" name="username" placeholder="Enter Username" required>
						
					</div>
					
				</div>
				
			</div>
			<div class="form-group" >
				
				<div class="row" class="centered">
					<label class="col-sm-2" for="stitle">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="stitle" name="password" placeholder="Enter Password" required>
					</div>
					
				</div>
			</div>
			<div class="form-group">
					<br>
				<div class="row">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
				<center>
					<input type="submit" class="btn btn-success btn-outline" name="submit" value="Login">
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
	$username=$_POST['username'];
	$password=$_POST['password'];
        require 'connection.php';
	$sql = "SELECT user_uname FROM user_reg where user_uname='".$username."'";
	$result = mysqli_query($con,$sql);
	$sql1 = "SELECT user_pass FROM user_reg where user_pass='".$password."'";
	$result1 = mysqli_query($con,$sql1);
	if (mysqli_num_rows($result)==0)
	{
		echo "Unregistered User/Username is wrong, Please <a href='https://mycdn.000webhostapp.com/signup.php'>Sign Up</a>";
		
	}
	else
	{
			if (mysqli_num_rows($result1)==0)
			{
				echo "Password is wrong, please try again";
				
			}
			else
			{
				$_SESSION["username"] =$username; 
				$_SESSION["password"] =$password; 
				?>
				<script type="text/javascript">
                                window.location.href = 'https://mycdn.000webhostapp.com/search.php';
                                 </script>
			<?php
}
	}
		
		
		
		
		
		
}
?>