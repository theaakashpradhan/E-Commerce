<html>
<head>
	<title>project</title>
	<link rel="stylesheet" type="text/css" href="new.css">
</head>
<body>
<?php include 'navbar.php';?>
<?php
$conn=mysqli_connect("localhost","root","") or die("no connection");
mysqli_select_db($conn,"kings") or die("no database connection");
$output='';
if(isset($_POST['search']))
{
	$searchq=$_POST['search'];
	if($searchq=="")
	{
		header('location:new.php');
	}
	$searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
	$sql="(SELECT * FROM clothes WHERE Name  LIKE '%$searchq%')";
	$query=mysqli_query($conn,$sql) or die("could not search!");
	$count=mysqli_num_rows($query);
	if($count==0)
	{
		
		$output='<center><span style="color: black; font-size: 20px; font-family:constantia;">there were no result for  '  .$searchq.' </span></center>';
	}
	else
	{	
		echo "<center><span style='color: black; font-size: 20px; font-family:constantia;'> <br><br>Showing result for '$searchq'</span></center>";
		echo "<center><table cellspacing='50px' ><tr>";
		$c=0;
		//echo "<div class='show'>";
		echo "<center><table cellspacing='50px' ><tr>";
	    while($row=mysqli_fetch_assoc($query))
		 { 
	         if($c==3)
			 {
					echo "</tr><tr>";
					$c=0;
			 }
		    $target_dir="admin/uploads/";
			 $target_file=$target_dir.$row['image'];
			//echo "<div class='row'>";
			 $send=$row['code'];
			   echo"<td><a href='info.php?id=$send'><img src=$target_file width=230 height=250 style='box-shadow:0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.30);border-radius:8px;'></a>";
			   echo "<br><center><span style='color: black; font-size: 20px; font-family:constantia;'>".$row['name']."</span></center></td>";
			  $c++;
			 // echo "</div>";
		  // echo $row['name']. " ".  $row['author']. " ". $row['price']. " ".  $row['publisher']. " " . $row['language']. " " . $row['description']. " <br>";
         //echo "<td>";
	      // echo "</div>";
		  }
	echo "</table></center>";
	   
	}
}
?>
<?php print("$output");?>
</body>
</html>