<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Intro to PHP</title>
    </head>
    <body>
<?php # Script 1.5 - phpIntro.php
// intro statement
$intro = 'Welcome to my webpage! My name is Vicente Yerena, and I am taking this course to learn software skills to compliment my practical knowledge.<br>';
echo $intro;
// quote from Dr. Evil as seen in the Austin Powers film franchise assigned to string variable
$quote = 'Doctor Evil! I Didn’t Spend Six Years In Evil Medical School To Be Called Mister, Thank You Very Much.<br>';
echo $quote.'<br>';
// variables for Brookhaven College address
$name ='Brookhaven College';
$address ='3939 Valley View Ln';
$city ='Farmers Branch';
$state ='Texas';
$postalCode ='75244';

// string concatenation used to create address block
print $name.'<br>'.$address.'<br>'.$city.'<br>'.$state.'<br>'.$postalCode.'<br>';

// non zero number assignment
$x = 4;
$y = 5; 

// arithmetic operators
$myAddition = $x + $y;
$mySubtraction = $x - $y;
$myMultiplication = $x * $y;
$myDivision = $x / $y;
$myModulus = $x % $y;

// displaying operation and solutions of x and y
echo 'The solution when adding x and y is: '.$myAddition.'<br>';
echo 'The solution when subtracting x and y is: '.$mySubtraction.'<br>';
echo 'The solution when multiplying x and y is: '.$myMultiplication.'<br>';
echo 'The solution when dividing x and y is: '.$myDivision.'<br>';
echo 'The modulus solution between x and y is: '.$myModulus.'<br>';

// define() function to define a constant
define('STUDENT', 'Vicente Yerena');
echo STUDENT.'<br>';

// creating variable for sript filename
$file=$_SERVER['SCRIPT_FILENAME'];

// printing name of this script
echo"<p>You are running the file:<br /><strong>$file</strong>.</p>\n";
?>
</body>
</html>