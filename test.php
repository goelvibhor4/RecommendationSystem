  <?php


$json = file_get_contents('http://158.85.122.170:81/mongo_api/slider.php?limit=5');
$data = json_decode($json,true);
$Geonames = $data['trailers'];
$arrlength = count($Geonames);

echo "<pre>";


print_r($Geonames);
for($x = 0; $x <= 4; $x++)
{
echo $Geonames[$x]['ID'];
echo $Geonames[$x]['post_title'];
}




?>