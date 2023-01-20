<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
background-image: url("img/bgc.jpg");
height:60%;
background-size: 100%;s
background-repeat: none;
 }
	</style>
</head>
<body>

</body>
</html>
<?php
       echo "<br><br><br><center><h2><b>TODAY'S DEAL</b></h2></center>";
	   $conn=mysqli_connect("localhost","root","","kings");
	  $sql="SELECT * FROM discountproduct";
	  $result=mysqli_query($conn,$sql);
	  if(mysqli_num_rows($result)>0)
	  {
	  	$c=0;
	  	echo "<center><table cellspacing='50px' ><tr>";
	    while($row=mysqli_fetch_assoc($result))
		 { 
	         if($c==3)
			 {
					echo "</tr><tr>";
					$c=0;
			 }
		    $target_dir="admin/uploads/";
			 $target_file=$target_dir.$row['image'];
			 $send=$row['code'];
			   echo"<td><a href='info1.php?id=$send'><img src=$target_file width=230 height=250 style='box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.30);border-radius:8px;'></a>";
			   echo "<br><center><span style='color: black; font-size: 20px; font-family:constantia;'>".$row['name']."</span></center></td>";
			  $c++;
	  }
	echo "</table></center>";
	   }
?>