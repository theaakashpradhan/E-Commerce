<?php
include 'navbar.php';
$code = $_GET['id'];
?>

<html>
<head>
	<title>display photo</title>
	<link rel="stylesheet" type="text/css" href="display.css">
	<link rel="stylesheet" type="text/css" href="sty.css">
</head>
<body>
	<div class="parent_div">
		<div class="division_1">
			<?php
		    $conn=mysqli_connect("localhost","root","","kings");
		    $sql="SELECT * FROM discountproduct";
		    $result=mysqli_query($conn,$sql);
		    if(mysqli_num_rows($result)>0)
		    {
		    	while($row=mysqli_fetch_assoc($result))
				 { 
				 	 if($row['code']==$code)
				 	 {
				 	 	$target_dir="admin/uploads/";
		           		$target_file=$target_dir.$row['image'];
				 	 	 echo '<img src='.$target_file.'>';
				 	 	 echo '</div>';
				 	 	 	 echo '<div class="division_2">';
					 	 	 echo "Info.";
					 	 	 echo "<h3>".$row['name']."</h3>";
					 	 	// echo "<hr style='width:95%'>";
					 	 	 echo "<p><b>Price: </b>RS.".$row['price']."</p>";
					 	 	 echo "<p><b>Code: </b>".$row['code']."</p>";
					 	 	 echo "<p><b>Brand: </b>".$row['brand']."</p>";
					 	 	 echo "<p><b>Fabric: </b>".$row['fabric']."</p>";
					 	 	 echo "<p><b>Size: </b>".$row['size']."</p>";
					 	 	 echo "<p><b>Fashion: </b>".$row['fashion']."</p>";
					 	 	 echo "<p><b>Category: </b>".$row['category']."</p>";
					 	 	 echo "<p><b>Discount:</b>".$row['discount']."%</p>";
					 	 echo "</div>";
					 	  $temp=$row['code'];
					 }
				 }
		    }
		    ?>


				<div class="divo" style="		   
				 width: 18%;
				 height: 45px;
                 background: #fff;
                 text-align: center;
                 padding: 25px 20px;
                 margin: 30px 5px;
                 border-radius: 15px;
                 box-shadow: 0 5px 10px rgba(0, 0, 0, 0.7);
                 ">
					
					
					
					

						<form name="myform" method="post" action="addtocart.php" >
							Quantity
						<select name="qty">
		    				<option value="1">1
		   					 <option value="2">2
		   					 <option value="3">3
		   					<option value="4">4
						</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					    
					    Size
					    <select  name="size">

							  <option value="s">s
		    				  <option value="m">m
		   					  <option value="l">l
		   					  <option value="xl">xl
		   					
						</select>

<br><br>
					    <input name="code" type="hidden" value="<?php echo $code;?>" >
					    <div class="qwe">
						<input type="submit" name="submit" value="Add to cart" style="border: solid 1px; color: orange; background-color: white; border-radius: 5px; ">
						</div>
						</form>
						
					
				
				</div>
	
</div>


</body>
</html>