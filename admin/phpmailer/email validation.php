<!DOCTYPE html>
<html>
<head>
	<title>email validation</title>
</head>
<body>
		<form method="post" action="">
			<table align="center">
				<tr>
					<td>Customer gamil id  :  </td>
					<td><input type="text" name="customer_id" placeholder="Enter like abc@gmail.com" required></td>
				</tr>
				<tr>
					<td>NAMe  :  </td>
					<td><input type="text" name="customer_name" placeholder="Enter name for mail." required></td>
				</tr>
				<tr>
					<td></td>
					<td> <input type="submit" name="submit"> </td>
				</tr>

			</table>
			 
		</form>
		<?php
				if(isset($_POST['submit']))
				{		$email=$_POST['customer_id'];
						if(filter_var($email, FILTER_VALIDATE_EMAIL)==true)
						{
							header('location:gmail.php');
						}
						else
						{
							echo "invalid";
						}
				}
			?>
</body>
</html>