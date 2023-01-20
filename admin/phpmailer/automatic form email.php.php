<!DOCTYPE html>
<html>
<head>
	<title>try for after creating account</title>
</head>
<body>
		<form method="post" action="">
			<table align="center">
				<tr>
					<td>Customer gamil id  :  </td>
					<td><input type="text" name="customer_id" placeholder="Enter like abc@gmail.com automatic_email.php" required></td>
				</tr>
				<tr>
					<td>Name  :  </td>
					<td><input type="text" name="customer_name" placeholder="Enter name for mail." required></td>
				</tr>
				<tr>
					<td></td>
					<td> <input type="submit" name="submitauto" onclick="myFunction()">
 </td>
				</tr>

			</table>
		</form>
		<?php
				if(isset($_POST['submit']))
				{		$email=$_POST['customer_id'];
						if(filter_var($email, FILTER_VALIDATE_EMAIL)==false)
						{
							//echo "invalid";
							//echo"alert('invalid')";
							echo"<script>";
echo"function myFunction() {";
  echo"alert('Hello! I am an alert box!');";
echo"}</script>";
						}
				}
			?>
</body>
</html>