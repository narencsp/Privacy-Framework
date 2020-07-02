<?php
session_start(); 
 
if ((isset($_SESSION['username']))&&(isset($_SESSION['password'])))
{
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Search Engine</title>
<script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="dist/js/sidebar.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 

	  
	<link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dist/css/sidebar.css"/> 
	
		  <style>
		 body {
	 padding-top:70px;
 }
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
	<body onload="ld()">
	
		<script>
			function ld()
			{
				document.search_box.search.focus();
			}
		</script>
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
	  <div class="container-fluid">
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
  

	
 
		<form name="search_box" action="result.php" method="get">
		<center>
			<img src="img/search.png" class="img-fluid" alt="Search">
			<input type="text" class="form-control" name="search" style="width:60%; margin-top:20px">
			<input type="submit" class="btn btn-primary btn-outline" value="Search" style="margin-top:20px;" name="search_button">
		</center>
		
		</form>

	</div>
	
	
	
	</body>
</html>
<?php
}
else
{
	echo "Please <a href='https://mycdn.000webhostapp.com/login.php'>login</a> to continue";
}
?>