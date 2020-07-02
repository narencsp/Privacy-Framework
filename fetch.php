<?php
require 'connection.php';?>
<form action="?" method="get">
<input type="text" name="crawl_text" placeholder="Enter the Website Name to Crawl">
<input type="submit" value="Go" name="Crawl">
</form>
<?php
if(isset($_GET['Crawl'])){
$button=$_GET['crawl_text'];
$count=strlen($button);

	$sql = 'SELECT site_title FROM site_register';
	$result = mysqli_query($con,$sql);
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
preg_match('@^(?:https://)?([^/]+)@i',
    $row['site_title'], $matches);
$host = $matches[1];

preg_match('@^(?:www.)?([^.]+)@i',$host,$matches);
$b=$matches[1];
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
$c=$matches[0];
			
if($button==$host)
{
//echo $host."<br>";

}			
			
		

elseif($button==$b){		
//			echo $b."<br>";
			
			
		}


elseif($button==$c){
//echo $c;
}

if($button==$host||$button==$b||$button==$c||$button==$row['site_title'])
{
    echo "Sitename:".ucfirst($b);
    break;
}



}
}
?>