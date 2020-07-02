<?php
session_start(); 
 
if ((isset($_SESSION['username']))&&(isset($_SESSION['password'])))
{

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
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label class="col-sm-2" for="stitle">Check options that you wish to give to the search engine</label>	
					 
						
						<label class="checkbox-inline">
							<input type="checkbox" value=""  name="check1">IP Address
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check2">Country
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check3" >City
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check4">Zip
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check5">Latitude
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check6">Longitude
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check7">Time Zone
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check8">ISP
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check9">Autonomous System Number
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check10">Broswer
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check11">Operating System
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check12">Use Cache
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check13">Display Ads
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check14">HTTPS
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check15">POST requests
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check16">Show recommendations 
						</label>
						<label class="checkbox-inline">
							<input type="checkbox" value="" name="check17">Remove Dead Links
						</label>
                                                 <label class="checkbox-inline">
							<input type="checkbox" value="" name="check18">Collect GeoIP Database info
						</label>
					</div>
					 
					
				</div>
				
			</div>
			
			<div class="form-group">
					<br>
				<div class="row">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
				<center>
					<input type="submit" class="btn btn-primary btn-outline" name="submit1" value="Save">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
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
	echo "Please <a href='http://mycdn.000webhostapp.com/login.php'>login</a> to continue";
}
if(isset($_POST['submit1']))
{
		if(isset($_POST['check1']))
		{
                       require 'connection.php';
//                        $sql =" UPDATE user_info SET ip_address='checked' WHERE usersname ='".$_SESSION['username']."'";
                        $result = mysqli_query($con," UPDATE user_info SET ip_address='unchecked' WHERE usersname ='".$_SESSION['username']."'");
                }	
		else
                {
			echo "Not selected";
                }
}





?>