<?php

error_reporting(E_ALL);

echo "POST: ";
print_r($_POST);

echo "<br/>------------------------------------------<br />";
echo "Begin output<br/>";
echo "<br/>------------------------------------------<br />";



?>

<html>
	<body>
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
