<?php 
session_start();
require 'connection.php';
//error_reporting(E_ERROR | E_PARSE);
$car=array();$i=0;$value;$value1;
$cars=array();$j=0;
$sql = 'SELECT site_title FROM site_register';
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
{
	libxml_use_internal_errors(true);
	$c = file_get_contents($row['site_title']);
	$d = new DomDocument();
	$d->loadHTML($c);
	$xp = new domxpath($d);
	foreach ($xp->query("//meta[@property='og:title']") as $el) 
	{
		 ob_start();
		$value=$el->getAttribute("content");
		 echo $value ;$car[$i] = ob_get_clean();
	         $i++;
		 
	}
       foreach ($xp->query("//meta[@property='og:description']") as $el) 
	{
		ob_start();
		$value1= $el->getAttribute("content");
		echo $value1;$cars[$j] = ob_get_clean();
		$j++;
	}

	
}
 for($i=0;$i<count($car);$i++)
{
	  
$_SESSION["favcolor"][$i] = $car[$i];
$_SESSION["favcolors"][$i] = $cars[$i];
}


echo 'Done';

?>