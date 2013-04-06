<?php

error_reporting(E_ALL);

//Ideas:
///  * Type'ing based equality issues
///  * Closing global writelocks and still using super globals
///  * Abuse of ++ operator order of operations
///  * Abuse of operator OOO in echo 
///  * Magic variable creation functions like preg_match

echo "<br />";

$x = 1;
echo ":::::";
echo $x == ++$x ;
echo "......";

//----------

echo "foo: " . $x+69  . " bar<br />";
echo "foo: " . $x+1  . " bar<br />";
echo "foo: " . $x*5  . " bar<br />";
echo "done <br/>";



//
//echo 69 . " bar<br/>";
//echo "foo: " . 1;
//echo "<br/>";
echo  "foo: " . 1+69 . " bar<br/>" ;


/// ---------------------------



$a = 0;
$b = 'x';

echo "<br/><br/>";
var_dump(FALSE == $a);
var_dump($a == $b);
var_dump($b == TRUE);
//true is false :D

///// -------------------------


$test = "12ab";
if (12 == $test)
{
	echo "sweet math";
}

?>
