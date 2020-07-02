<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
echo '<form action="?" method="post" name="form2">
			<input type="text" name="username1" placeholder="username" id="un" required>
			<input type="password" name="password1" placeholder="password" id="ps" required>
			<input type="submit" value="Login" name="Submit" >
		</form>';


if(isset($_POST["Submit"])){
require "connection.php";
$mysql_qry = "select Name,Password FROM admin_user";
$result = mysqli_query($con ,$mysql_qry);
if($rows=mysqli_fetch_assoc($result)) {
$ima1=$rows['Name'];
$ima2=$rows['Password'];
}


$a=$_POST["username1"];
$b=$_POST["password1"];
if($a==$ima1 && $b==$ima2){
		
		for($i=0;$i<count($_SESSION["favcolor"]);$i++)
{
  echo "Title:".$_SESSION["favcolor"][$i]."<br>";
echo "Description:".$_SESSION["favcolors"][$i]."<br>";
$dums=$_SESSION["favcolor"][$i];
$dums1=$_SESSION["favcolors"][$i];
$sql = "INSERT INTO sitedes(site_title,site_des) VALUES('$dums','$dums1')";
    $result = mysqli_query($con,$sql);
}



	echo '<script>
		func2();
function func2(){

var e=document.form2.username1;
var f=document.form2.password1;
var g=document.form2.Submit;
e.style.visibility="hidden";
f.style.visibility="hidden";
g.style.visibility="hidden";
}

</script>';



}

else{

echo"Credentials are wrong";

}
}

?>

<html>
<head>





<style>
.id1{
border:1px solid black;
width:20%;
margin-left:30px;
}
#id2{
border:1px solid black;
padding-left:20px;
padding-right:20px;
padding-top:12px;
padding-bottom:12px;
margin-left:120px;
}


</style>




</head>
<body >




 
</body>
</html>