<?php
  
$nums=array();
$string1=array();
$string2=array();

$l=0;
 
 
	 
for($gc=0;$gc<count($_SESSION["name_of_url"]);$gc++)
{
$k=0;
$dums=$_SESSION["name_of_url"][$gc];
$sql = 'SELECT site_title,site_des FROM sitedes';
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
similar_text($dums,$row['site_title'], $percent); 

$nums[$k]=$percent; 

$string1[$k]=$row['site_title']; 
$string2[$k]=$row['site_des']; 
$k++;	
}
for($i=0;$i<count($nums);$i++)
{
	for($j=0;$j<=$i;$j++)
	{
		if($nums[$i]<$nums[$j])
		{
			$temp=$nums[$i];
			$nums[$i]=$nums[$j];
			$nums[$j]=$temp;
			$temp2=$string1[$i];
			$string1[$i]=$string1[$j];
			$string1[$j]=$temp2;
			$temp3=$string2[$i];
			$string2[$i]=$string2[$j];
			$string2[$j]=$temp3;
		}
	}
}

 $_SESSION["t_tit"][$l]  = $string1[count($nums)-1];
 
$_SESSION["t_des"][$l] = $string2[count($nums)-1]; 
$l++;
}

?>