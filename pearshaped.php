<?php
session_start();
error_reporting(E_ALL);
session_write_close();

// Okay this file is devoid of comments... because explaining what's happening here kinda defeats the point..
// If you really want to cheat, have a look at the source for ideas.php.... lamer

?>
<html>
	<body>
		<H1> Super basic calculator! </H1>
		This is a basic calculator.  <br />
		It does all 4 simple math operations on your inputs.  <br />
		Input should be integers. <br />
		<br />
		<form action='' method='post'>
			<table>
				<tr>
					<td>
						First number:
					</td>
					<td>
						<input type='text' name='string1' />
					</td>
				</tr>
				<tr>
					<td>
						Math'd
					</td>
					<td>
						by:
					</td>
				</tr>
				<tr>
					<td>
						Second number:
					</td>
					<td>
						<input type='text' name='string2' />
					</td>
				</tr>
			</table>
			<input type='submit' name='submit' value='submit' />
		</form>
	</body>
</html>

<?php



if(isset($_POST['string1']) && isset($_POST['string2']) && $_POST['string1'] != "" && $_POST['string2'] != "")
{

	preg_match("/[0-9]*/",$_POST['string1'],$number1);
	preg_match("/[0-9]*/",$_POST['string2'],$number2);
	$number1 = $number1[0];
	$number2 = $number2[0];

	echo "<br />Your inputs were: " . $number1 . " and " . $number2 . ".<br /><br />";

	if(intval($number2) == "zero")
	{
		echo "<strong>Are you daft!?!  You can't divide by zero!</strong><br />";
	}


	echo "Adding these numbers gives us";
	echo ": " . $number1 + $number2 . ". <br />";
	echo "Subtracting these numbers gives us";
	echo ": " . $number1 - $number2 .  ". <br />";

	if( FALSE == $number2)
	{
		if(  intval($number2) == 'zero' && 'zero' == TRUE)
		{
			echo "Skipping division to save the universe.  Do not divide by zero! <br />";
		}
	}
	else
	{
			echo "Dividing these numbers gives us";
			echo ": " . $number1 / $number2 . ". </br />";
	}
	echo "Multiplying these numbers gives us";
	echo ": " . $number1 * $number2 . ".<br />";


}

?>
