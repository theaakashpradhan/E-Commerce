<!DOCTYPE html>
<?php
$email=$_GET['id'];
$mobile=$_GET['ph'];
?>
<html>
<head>
	<title>Sending a mail in gmail</title>
	<link rel="stylesheet" type="text/css" href="gmail2customer_css.css">
	<script type="text/javascript">

		var status = document.getElementById("status");
		var email = document.getElementById("email");
			function checkEmail(email)
			{
			
				var req = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
				
				if(req.test(email) == false) {
						document.getElementById("status").src = "photo/bad.png";
				} else if(req.test(email) == true) {
						document.getElementById("status").src = "photo/ok.png";
				}
			}

	</script>

</head>
<body>
	<div class="mail_bg">
		<div class="mailformbox">
			<h2><center>Mail to customer</center></h2>
				<form method="post" action="gmail2customer.php">
					<table align="center">
						<tr>
							<td>Customer gamil id  :  </td>
							<td><input type="text" value="<?php echo $email;?>" name="customer_id" placeholder="Enter like abc@gmail.com" id="email" onkeyup="checkEmail(this.value);"  onblur="checkEmail(this.value);" required>
								<img id="status" src="photo/bad.png" style="margin-left:5px; vertical-align:middle;" alt="Status" />
							</td>
						</tr>
						<tr>
							<td>Subject  :  </td>
							<td><input type="text" name="subject" placeholder="Enter subject for mail." required></td>
						</tr>
						<tr>
							<td>Message  :  </td>
							<td><textarea name="message" rows="7" cols="70" placeholder="Enter a message." required></textarea></td>
						</tr>
						<tr>
							<td></td>
							<td>  <input type="submit" name="submitemail"> </td>
						</tr>

					</table>
				</form>
		</div>
	</div>
	<br><br><br>
	<center><a href="../sms/sms.php?mb=<?php echo $mobile;?>">Contact through mobile</a></center>
</body>
</html>

<?php
	if(isset($_POST['submitemail']))
	{	$mailid=$_POST['customer_id'];
		$mailsub=$_POST['subject'];
		$mailmsg=$_POST['message'];

		require 'mailer class/PHPMailerAutoload.php';
		$mail =new PHPMailer;
		 //Server settings
		$mail ->IsSmtp();	    // Set mailer to use SMTP
		$mail ->SMTPDebug=1;	// Enable verbose debug output
		$mail ->SMTPAuth=true;	// Enable SMTP authentication
		$mail ->SMTPSecure='ssl';	// Enable TLS encryption, `ssl` also accepted
		$mail ->Host="smtp.gmail.com";	// Specify main and backup SMTP servers
		$mail ->Port=465; //or 587;  // TCP port to connect to
		$mail ->IsHTML(true);
		$mail ->Username="comp2073@gmail.com";	 // SMTP username
		$mail ->Password="computerxyz";	// SMTP password

		 //Recipients
		$mail ->SetFrom('comp2073@gmail.com','WASTRA');
		$mail ->Subject=$mailsub;
		$mail ->Body="<font face='Maiandra GD' size='3px' align='center'>Dear <b> Customer,</b><br>".$mailmsg."<p>Besides,we are really looking forward to working with you to make easy online shopping.<br> To chat to us please give us a call on +9779860162514 or email comp2073@gmail.com.<p><b>Regards<br>The WASTRA Team</b><br><a href='www.facebook.com/amar657'>Amar Nagaju</a><br><a href='www.facebook.com/profile.php?id=100008436492433'>Manish Kharbuja</a><br><a href='www.facebook.com/manish.nhuchhe'>Manish Nhuche</a><br><a href='www.facebook.com/tamakhusunder'>Sunder Tamakhu</a></p></font>";
		$mail ->AddAddress($mailid);
		if(!$mail->send())
		{	//echo "Mail not send.";
			header ('location:invalid_gmail.php');

		}
		else
		{	//echo "Mail sent.";
			header ('location:thankyou_gmail.php');
		}
	}
?>