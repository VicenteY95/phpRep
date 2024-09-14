<?php
// intro statement
echo 'Welcome to my webpage! My name is Vicente Yerena, and I am taking this course to learn software skills to compliment my practical knowledge.<br>';
// quote from Dr. Evil as seen in the Austin Powers film franchise assigned to string variable
$quote = 'Doctor Evil! I Didn’t Spend Six Years In Evil Medical School To Be Called Mister, Thank You Very Much.<br>';
echo $quote;
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
echo 'The solution when adding x and y is: '.$myAddition;
?>