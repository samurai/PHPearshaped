<?php

error_reporting(E_ALL);

//Ideas:
///  * Type'ing based equality issues
///  * Closing global writelocks and still using super globals
///  * Abuse of ++ operator order of operations
///  * Abuse of operator OOO in echo 
///  * Magic variable creation functions like preg_match

//Sources:
/// To give credit where credit is due:
// http://jstubbs.blogspirit.com/archive/2007/05/01/php-idiosyncrasies.html
// http://stackoverflow.com/questions/1105423/php-quirks-and-pitfalls
// 


echo "<br />";

$x = 1;
echo ":::::";
if( $x == $x++ )
echo "hi";
else
echo "hello";
if ( (int)$x == $x++ )
echo "bye";
else
echo "seeya";
echo "......";

//----------

echo "<br/><br/>";

echo "foo: " . $x+69  . " bar<br />";
echo "foo: " . $x-1  . " bar<br />";
echo "foo: " . $x*5  . " bar<br />";
echo "foo: " . $x%2 . "bar<br />";


/// ---------------------------


$a = 0;
$b = 'x';

echo "<br/><br/>";
var_dump(FALSE == $a);
var_dump($a == $b);
var_dump($b == TRUE);
//true is false :D

///// -------------------------


echo "<br /><br/>";
$test = "zero";
if (0 == $test)
{
	echo "sweet math";
}

?>
