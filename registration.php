
<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}  
body{
background-image: url("img/ase.jpg");
height:60%;
background-size: 100%;
background-repeat: none;
 }
 .idc{
 	text-align: center;
    padding-left: 20px;
 	color: white;
 	font-size: 60px;
 }
  .idc1{
  	text-align: center;
    padding-left: 20px;
 	color: white;
 	font-size: 20px;
 }
	</style>
	 <?php

   //include ('navbar.php');

   ?>
</head>
<body>
  
</body>
</html>
<?php
      
	  $name=$_POST['name'];
	  $address=$_POST['address'];
	  $email=$_POST['email'];
	  $mobile=$_POST['mobile'];
	  $password=$_POST['password'];
	  $UserType="normal";
	  $conn=mysqli_connect("localhost","root","","kings");
	  $sql="SELECT * FROM user";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0)
	  {

	  	 while($row=mysqli_fetch_assoc($result))
		 { 
		 		if($row['name']==$name)
		 		{
		 			header('location:fail.php');

		 		}
		 }
	  }

    
		$sql="INSERT INTO user VALUES('$name','$address','$email','$mobile','$password','$UserType')"; 
	
	   if(mysqli_query($conn,$sql))
	   {
		   
		    
		    $_SESSION['user']=$name;
		    echo "<br><br><br><br><div class='idc'>Congratulation!!!<br>Your ID has been created.</div>";
		    echo "<br><div class='idc1'><a href='login.php'>Surf The Products.</div>";
	   }
	   else
	   {
	   	
	   	echo "error";
	   }

 ?>