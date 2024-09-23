<!DOCTYPE html>
<html>
<body>
<?php
$albumRating = ["Mm..Food" => "9", "Operation: Doomsday" => "8", "Vaudeville Villain" => "10", "Born like this" => "9", "Madvillainy" => "10"];
$albumRating["Take me to your leader"] = "7";
ksort($albumRating);
$pageContent = "<h2>Favorite Albums</h2>";
foreach($albumRating as $name => $rating) {
    echo "Album". $name . ", Rating=" . $rating;
    echo "<br>"; 
}
?>
</body>
</html>