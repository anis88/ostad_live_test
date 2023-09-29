<?php

// 1.Create a PHP script using a loop to print all even numbers between 1 and 10.
$number=0;
 while ($number < 10){ 
    $number += 2;
    echo $number, "\n", "\n"; 
}



// 2.Declare a function named 'greet' that takes one parameter, 'name'.
//The function should print a greeting message with the name passed to it when it is called.
function greet($name){
    $greetings = "Good Morning";
    echo $greetings . ", " . $name;
}

greet("Tanchan");
echo PHP_EOL;


// 3.Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number.
function factorial($number)  
{  
  if($number <= 1) {  
    return 1;  
  }  
  else{  
    return $number * factorial($number - 1);  
  }  
}  

$number = 2;  
echo "Factorial of $number is " .factorial($number);
echo PHP_EOL;

function test($x=5){
return $x*$x;
}
echo test();


// 4.Write a PHP function named 'fibonacci' that prints the Fibonacci series up to 10 numbers.

?>