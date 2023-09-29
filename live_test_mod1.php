<?php

// Task 1:Declare a variable called $age and assign your age to it.
$myAge = 35;


//Task 2: Define a constant named PI and assign the value of Pi (3.14159) to it.
define('PI','3.14159');


//Task 3: Print the following sentence using the echo statement:Hello, welcome to the world of PHP programming!
echo "Hello, welcome to the world of PHP programming!";


// Task 4: Calculate and print the result of the expression: ((20 + 5) * 3) / 4.
$a = 20;
$b = 5;
$c = 3;
$d = 4;

$result = (($a+$b)*$c)/$d;
echo $result;


// Task 5: Write a conditional statement that checks if a variable $marks is greater than or equal to 60 and less than 80.
//If the condition is true, print "Passed," otherwise print "Failed."
$marks = 81;
if($marks>=60 && $marks <80){
    echo "Passed";
}
else{
    echo "Failed";
}


?>