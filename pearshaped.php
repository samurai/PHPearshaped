<?php
error_reporting(E_ALL);

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

	echo "<br />Your inputs were: " . $_POST['string1'] . " and " . $_POST['string2'] . ".<br /><br />";

	if(intval($_POST['string2']) == "zero")
	{
		die("<strong>Are you daft!?!  You can't divide by zero!</strong><br />");
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
