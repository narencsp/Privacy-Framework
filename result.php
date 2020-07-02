<?php
session_start();
 if ((isset($_SESSION['username']))&&(isset($_SESSION['password'])))
{
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Results</title>
		<script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="dist/js/sidebar.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 

	  
	<link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="dist/css/sidebar.css"/> 
		<style>
			.result
			{
				margin-left:10%; 
				margin-right:25%;
				margin-top:12px;
			}
					.btn-outline {
    background-color: transparent;
    color: inherit;
    transition: all .5s;
}
.btn-info.btn-outline {
    color: #5bc0de;
}
.btn-info.btn-outline:hover {
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
	<div class="container-fulid">
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
	
		<form action="?" method="get">
			<div class="row" style="background:#f2f2f2">
				<div class="col-sm-1">
					<a href="search.php" ><img src="img/search.png" height="60px" style="margin-top:55px;" ></a>
				</div>
				<div class="col-sm-6" style="margin-left:15px">
					<div class="input-group" style="margin-top:70px;">
						<?php $search=$_GET['search'];?>
						<input type="text" class="form-control" name="search" value="<?php echo htmlentities($search) ?>">
						<span class="input-group-btn">
						<input class="btn btn-default btn-outline" type="submit" name = "search_button" value="Go">
						</span>
					</div>
			</div>



			</div>
		</form>
	</div>
	<div class="result">
	<table>
		<tr>
			<?php
				$num=array();
				$string=array();
				$i=0;
				$j=0;
				$temp=0;
				$k=0;
				$temp2=0;
				$l=0;$zcount=0;
				require 'connection.php';
				if(isset($_GET['search_button']))
				{
					$search=$_GET['search'];
					
					if($search=="")
					{
						echo"<center><b>Please enter something to search</b></center>";
						exit();
					}
					$sql = 'SELECT site_title FROM site_register';
					$result = mysqli_query($con,$sql);
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
					similar_text($row['site_title'], $search, $percent); 
					$num[$k]=$percent;
					$string[$k]=$row['site_title'];
					$k++;	
				}
				for($i=0;$i<count($num);$i++)
				{
					for($j=0;$j<=$i;$j++)
					{
						if($num[$i]<$num[$j])
						{
							$temp=$num[$i];
							$num[$i]=$num[$j];
							$num[$j]=$temp;
							$temp2=$string[$i];
							$string[$i]=$string[$j];
							$string[$j]=$temp2;
						}
					}
				}
					
				}
			?>
		</tr>
	</table>
	 <?php
		
		 for($i=count($num)-1;$i>=count($num)-10;$i--)
		{
			$_SESSION["name_of_url"][$zcount] = $string[$i]; 

			$zcount++;
		}
		require 'tit_des.php'; $l=0;
		for($i=count($num)-1;$i>=count($num)-10;$i--)
		{
			 
			 $dum=$_SESSION["t_tit"][$l];
			 $dum1=$_SESSION["t_des"][$l];
			echo"<a href='$string[$i]'><font size='4' color='#0000cc'><b>$dum</b></font></a><br>";
			echo"<font size='3' color='#006400'><b>$string[$i]</b></font><br>"; 
			echo"<font size='3' color='#666666'><b>$dum1</b></font><br><br>";
			$l++;
		}
			
			//echo"<font size='3' color='#666666'><b>$row1[4]</b></font><br><br>";
		
	 ?>
	 
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