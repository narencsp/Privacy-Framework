<?php
//include 'variables.php';

if(isset($_GET['Crawl']))
{
$to_crawl = $_GET['crawl_text'];
$c = array();
function get_links($url)
{
    global $c;
    $input = @file_get_contents($url);
    $regexp= "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
    $base_url = parse_url($url, PHP_URL_HOST);
    preg_match_all("/$regexp/siU",$input, $matches);

    $l = $matches[2];
    foreach ($l as $link)
    {
        if(strpos($link, "#"))
        {
            $link = substr($link, 0, strpos($link, "#"));
        }
        if(substr($link,0,1) == ".")
        {
            $link = substr($link, 1);
        }
        if(substr($link,0 , 7) == "http://")
        {
            $link = $link;
        }
        else if (substr($link, 0, 8)== "https://")
        {
            $link = $link;
        }else if(substr($link, 0, 2)== "//")
        {
            $link = substr($link, 2);
        }else if(substr($link, 0, 1) == "#")
        {
            $link = $url;
        }else if(substr($link, 0, 7)== "mailto:")
        {
            $link = "[".$link."]";
        }else
        {
            if(substr($link, 0, 1) == "/")
            {
                $link = $base_url."/".$link;
            }else
            {
                $link = $base_url.$link;
            }
        }
        if(substr($link, 0, 7) == "http://" && substr($link, 0, 8) != "https://" && substr($link, 0, 1) != "[")
        {
            if(substr($url, 0, 8) == "https://")
            {
                $link = "https://".$link;
            }else
            {
                $link = "http://".$link;
            }

        }
        echo $link."<br />";
        if(!in_array($link, $c))
        {
            array_push($c, $link);
        }
    }

}
get_links($to_crawl);
$count=0;
foreach ($c as $page)
{
    get_links($page);
}
require 'connection.php';
$sql = 'SELECT site_name FROM site_register';
$result = mysqli_query($con,$sql);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
if($row['site_name']==$to_crawl)
{
$count++;
}
}
if($count==0)
{
  $sql = "INSERT INTO site_name_alone(name_alone)
         VALUES('$to_crawl')";
   $result = mysqli_query($con,$sql);
}
$g=0;
foreach ($c as $page)
{
   echo $page."<br />";

if($count==0)
{
if($g==0)
{
  $sql = "INSERT INTO site_register(site_name,site_title)
         VALUES('$to_crawl','$page')";
   $result = mysqli_query($con,$sql);
$g++;
}
elseif($g!=0){
   $sql = "INSERT INTO site_register(site_title)
         VALUES('$page')";
   $result = mysqli_query($con,$sql);
}}
else
{
die("Site Already Exists in Database");
}
}
}

?>