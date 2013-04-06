<?php

error_reporting(E_ALL);

echo "POST: ";
print_r($_POST);

echo "<br/>------------------------------------------<br />";
echo "Begin output<br/>";
echo "<br/>------------------------------------------<br />";



if(isset($_POST['string1']) && isset($_POST['string2']) && $_POST['string1'] != "" && $_POST['string2'] != "")
{

	echo "Your inputs were: " . $_POST['string1'] . " and " . $_POST['string2'] . ".<br />";

	if(intval($_POST['string2']) == "zero")
	{
		echo "<strong>Are you daft!?!  You can't divide by zero!</strong><br />";
	}


	echo "Adding these numbers gives us";
	echo ": " . $_POST['string1'] + $_POST['string2'] . ". <br />";
	echo "Subtracting these numbers gives us";
	echo ": " . $_POST['string1'] - $_POST['string2'] .  ". <br />";
	echo "Dividing these numbers gives us";
	echo ": " . $_POST['string1'] / $_POST['string2'] . ". </br />";
	echo "Multiplying these numbers gives us";
	echo ": " . $_POST['string1'] * $_POST['string2'] . ".<br />";

}

?>

<html>
	<body>
		<H1> Super basic calculator! </H1>
		This is a basic calculator. It does all 4 simple math operations on your inputs.  Input should be integers. <br />
		<form action='' method='post'>
			<table>
				<tr>
					<td>
						String 1:
					</td>
					<td>
						<input type='text' name='string1' />
					</td>
				</tr>
				<tr>
					<td>
						Divided
					</td>
					<td>
						by:
					</td>
				</tr>
				<tr>
					<td>
						String 2:
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
