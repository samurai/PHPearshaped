<?php

session_start();
//session_write_close();
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

if( FALSE == 5 && 5 == 'zero'  && 'zero' == TRUE )
{
	echo "how's that work now?";
}

///// -------------------------


echo "<br /><br/>";
$test = "zero";
if (0 == $test)
{
	echo "sweet math";
}


//// --------------

echo " <br/><br/>";

echo $_SESSION['test'] . " :    :   " . $_SESSION['lastvar'];
echo "<br />";
function setSession($key, $val)
{
	session_start();
	$_SESSION[$key] = $val . $v;
	session_write_close();
}
setSession('test','bacon');
$_SESSION['lastvar'] = $_SESSION['test'];
echo $_SESSION['test'] . " :    :   " . $_SESSION['lastvar'];

echo "<Br/><br/>----------------------------<br/><br/>";

$num = '0';

preg_match("/[0-9]*/", $num, $matches);
print_r($matches);

echo "done?";


?>
