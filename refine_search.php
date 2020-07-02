<?php
session_start(); 
 
if ((isset($_SESSION['username']))&&(isset($_SESSION['password'])))
{
	require 'connection.php';
	$sql = "SELECT * FROM user_search_refine where usersname='".$_SESSION['username']."'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Settings</title>
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

.btn-primary.btn-outline {
    color: #428bca;
}
.btn-primary.btn-outline:hover{
    color: #fff;
}
</style>
<script>
$(document).ready(function () {
    $('.input_controls').change(function () {
        $("#input_ctrl")[0].disabled = this.checked;
    }).change();
});
</script>
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
          <li class="active"><b>Welcome&nbsp;<?=$_SESSION['username']?></b></li><br>
          <li><a href="settings.php">Settings</a></li>
          <li><a href="refine_search.php">Refine Search</a></li>
          <li><a href="logout.php">Logout</a></li>

        </ul>
      </div>
    </div>
		<form action="?" method="post">
		<br><br><br><br><br><br>
			<div class="form-group">
				
				<div class="row" class="centered">
					<label class="col-sm-2" for="stitle">Don't collect any data</label>
					<div class="col-sm-10">
						<input type="checkbox" name="checky" class="input_controls" <?php if ($row['collect_none']!="NO") echo "checked='checked'";  ?>>
						
					</div></div><br>
				<div class="row" class="centered">
					<label class="col-sm-2" for="stitle">Don't collect data regarding</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="input_ctrl" name="search_omit_term" placeholder="Enter Search Term" required>
						
					</div></div>
					
      
				 
			</div>
			
			<div class="form-group">
					<br>
				<div class="row">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
				<center>
					<input type="submit" class="btn btn-primary btn-outline" name="submit1" value="Save">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="submit" class="btn btn-primary btn-outline" name="submit2" value="View previously logged data">
					</center>
				</div>
				
			</div>
			
		</form>  
	
	 
	
	</div>
  
     

	
	
	</body>
	

</html>
<?php
}
else
{
	echo "Please <a href='http://mycdn.esy.es/login.php'>login</a> to continue";
}
if(isset($_POST['submit1']))
{
	if(isset($_POST['checky']))
			$result = mysqli_query($con," UPDATE user_search_refine collect_none='YES' WHERE usersname ='".$_SESSION['username']."'");
	else
			$result = mysqli_query($con," UPDATE user_search_refine collect_none='NO' WHERE usersname ='".$_SESSION['username']."'");
	 
}





?>