<?php
include 'top.php';
?>
<html>
<head>
	<style type="text/css">
		.wwe{
			    width: 50%;
  background: #fff;
  padding: 20px 30px;
  margin: 0 20px;
  border-radius: 12px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);

		}
		.wwe i{
			border: solid;
			border-radius: 5px;
			background-color: #0A2558; 
		}
		.wwe h2{
			color: #0A2558;
		}
	</style>
</head>
<br><br><br><br><br>
<body background-color="black"><center>
<form action="" method="post" style=" color:#0A2558; ">
	<div class="wwe">
	<center><h2>Change your password</h2></center><hr><hr><hr><hr><hr><br><br>
Old Password  :   <input type="password" name="oldpass" placeholder="Enter old password"><br><br>
New Password: <input type="password" name="newpass" placeholder="Enter new password"><br><br>
<i>
 <input type="submit" name="submit" value="Submit" >
</i>
</div>
</form>
</center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$new=$_POST['newpass'];
	 $conn=mysqli_connect("localhost","root","","kings");
	 $sql="SELECT * FROM user";
	 $result=mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result)>0)
		  { 
		  	while($row=mysqli_fetch_assoc($result))
			 { 
			 	if($row['password']==$_POST['oldpass'])
			 	{
			 		$sql1 = "UPDATE `user` SET `name`='admin',`password`='$new' WHERE `UserType`='admin'";
			 	//	mysqli_query($conn,$sql);
			 		if((mysqli_query($conn,$sql1))>0)
			 		{
					echo "<script type='text/javascript'>alert('Password Changed');</script>";
					}
					else
					{
						echo "<script type='text/javascript'>alert('error changing');</script>";
					}
			 	}

			 }
			}
			
		//$sql="INSERT INTO admin VALUES('admin','$new')";
		
}
?>