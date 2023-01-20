<?php
if(isset($_POST['submitauto']))
	{	$mailid=$_POST['customer_id'];
		$mailname=$_POST['customer_name'];
		require 'mailer class/PHPMailerAutoload.php';
		$mail =new PHPMailer();
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
		$mail ->Subject="Welcome to WASTRA";
		$mail ->Body="<font face='Maiandra GD' size='3px' align='center'>Thank you <b>".$mailname."</b> for registering with WASTRA.<p>We are really looking forward to working with you to make easy online shopping.<br> To chat to us please give us a call on +9779860162514 or email comp2073@gmail.com.<p><b>Regards<br>The WASTRA Team</b><br><a href='www.facebook.com/amar657'>Amar Nagaju</a><br><a href='www.facebook.com/profile.php?id=100008436492433'>Manish Kharbuja</a><br><a href='www.facebook.com/manish.nhuchhe'>Manish Nhuche</a><br><a href='www.facebook.com/tamakhusunder'>Sunder Tamakhu</a></p></font>";
		$mail ->AddAddress($mailid);
		if(!$mail->send())
		{	echo "Mail not send.";
		}
		else
		{	echo "Mail sent.";
			header('location:gmail.html');
		}
	}

?>
