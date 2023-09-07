<?php

//1-Write a PHP script to replace the first 'the' of the following string with 'That'.Sample date : 'the quick brown fox jumps over the lazy dog.'
$data = 'the quick brown fox jumps over the lazy dog.';
$rep = str_replace('the','that',$data);
echo $rep ;
echo "<br/>";

//2-Write a PHP program to add two numbers
$num1 = 6;
$num2 = 3;
$result1 = $num1+$num2 ;
echo $result1;
echo "<br/>";

//3-Write a PHP program to Subtract two numbers two numbers
$num1 = 6;
$num2 = 3;
$result2 = $num1-$num2 ;
echo $result2;
echo "<br/>";

//4-Write a PHP program to Multiply two numbers two numbers
$num1 = 6;
$num2 = 3;
$result3 = $num1*$num2 ;
echo $result3;
echo "<br/>";

//5-Write a PHP program to Divide  two digits two numbers 
$num1 = 6;
$num2 = 3;
$result4 = $num1/$num2 ;
echo $result4;
echo "<br/>";

//6-Cast this number "50" to integer using casting
$num = "50";
$cast = (int)$num;
var_dump($cast);
echo "<br/>";

//7-count number of char 
$data = 'the quick brown fox jumps over the lazy dog.';
$count = strlen($data);
echo $count;
echo "<br/>";

//8-Write php script to reverse this text "Hello World!!"
$str = "Hello World!!";
$rev = strrev($str);
echo $rev ;
echo "<br/>";

//9-write php script to replace "dog" instead of "cat" in this text "this is a cat"
$text = "this is a cat";
$rep = str_replace('cat','dog',$text);
echo $rep ;
echo "<br/>";


///10-write this text inside single quotes  I'm a software engineer
echo 'I\'m a software engineer' ;
echo "<br/>";

?>