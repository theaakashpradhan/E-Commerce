<!DOCTYPE html>
<?php
$mobile=$_GET['mb'];
?>
<?php
	if(isset($_POST['submitsms']))
	{

		// Account details
		$apiKey = urlencode('FoTR0N7m2dM-4Koj19mVzZ6PRlecsaGl50vhGAW8j9');
		
		// Message details
		$numbers = $_POST['customer_no'];
		$sender = $_POST['sender'];
		$message = $_POST['message'];
	 
	 
		// Prepare data for POST request
		$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
	 
		// Send the POST request with cURL
		$ch = curl_init('https://api.txtlocal.com/send/');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		
		// Process your response here
		//echo $response;
		//echo "Succesful";
		header ('location:thankyou_sms.php');


	}
?>

<html>
<head>
	<title>Sms in mobile</title>
	<link rel="stylesheet" type="text/css" href="sms_css.css">
</head>
<body>
	<div class="smsbody">
		<div class="smsformbox">
			<h2><center>SMS to customer</center></h2>
				<form method="POST" action="sms.php">
					<table align="center">
						<tr>
							<td>Customer no.:</td>
							<td><input type="number" value="977<?php echo $mobile;?>"  name="customer_no" placeholder="Enter mobile no. with 977" required></td>
						</tr>
						<tr>
							<td>Sender name:</td>
							<td><input type="text" name="sender" placeholder="Enter Company name" required></td>
						</tr>
						<tr>
							<td>Message:</td>
							<td><textarea name="message" rows="4" cols="50" placeholder="Enter a message" required></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submitsms"> </td>
						</tr>

					</table>
				</form>	
		</div>
	</div>

</body>
</html>