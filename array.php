<!DOCTYPE html>
<html  lang="en">
    <head>
        <meta charset="utf-8">
        <title>Arrays</title>
    </head>
<body>
<?php
echo $heading;
$albumRating = ["Mm..Food" => "9", "Operation: Doomsday" => "8", "Vaudeville Villain" => "10", "Born like this" => "9", "Madvillainy" => "10"];
$albumRating["Take me to your leader"] = "7";
ksort($albumRating);
$heading = "<h2>Favorite Albums</h2>";
foreach($albumRating as $name => $rating) {
    echo "Album= ". $name . ", Rating= " . $rating;
    echo "<br>"; 
}

// multidimensional array

$multi_array =array(
    "The Beatles"=>array("Help!" => "1965", "Rubber Soul"=> "1965", "Abbey Road"=>"1969"),
    "LedZepplin"=>array("Led Zepplin IV" => "1971"),
    "Rolling Stones"=>array("Let It Bleed" => "1969","Sticky Fingers"=> "1971"),
    "The Who"=>array("Tommy" => "1969","Quadrophenia"=> "1973","The Who by Numbers"=> "1973")        
    );
    
//  Access and display release date value for Tommy by The Who.
echo "Release date for Tommy by the Who: ";
echo $multi_array["The Who"]["Tommy"];

// Loop through the array and access each artist and album title.
foreach($multi_array as $x => $x_value) {
  echo "Artist=" . $x;
  echo "<br>";
  echo "Albums= ";
  foreach($x_value as $y => $y_value){
       echo $y;
      echo "<br>";
  }
}    

// • Loop through the array and write out the each album and release date for The Who.
echo "Artist=";
echo "The Who"."<br>";
echo "Albums= ";
foreach($multi_array["The Who"] as $x => $x_value) {
    echo $x;
    echo "<br>";
}    

// • Write the php code to loop through the array and list all of the artists and albums that were released after 1970.
foreach($multi_array as $x => $x_value) {

  foreach($x_value as $y => $y_value){
       
    if($y_value > 1970)
      echo "Artist=" . $x;
      echo "<br>";
      echo "Album= ";
      echo $y;
      echo "<br>";
  }
}    



?>
</body>
</html>