<?php
include "top.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>review display</title>
	<style type="text/css">
		
		
							.qwe{
							    padding-left: 20px;
							    padding-right: 20px;
							}
							.wwe{
							    width: 90%;
								background: #fff;
								padding: 10px 10px;
								margin: 0px 60px;
								border-radius: 12px;
								box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
							}
							table {
							    border-collapse: collapse;
							    width: 100%;
							}

							th, td {
							    text-align: left;
							    padding: 8px;
							}

							tr:nth-child(even){background-color: #f2f2f2}

							th {
							    background-color: #0A2558;
							    color: white;
							}
		
	</style>
</head>
<body>
	      <br><br><br><br>
	      <div class="wwe">
               <div class="qwe">
	
			                   <center><b><h3>REVIEWS FROM OUR CUSTOMERS </h3></b></center><hr><hr><hr><hr><hr>
                       <table border="0" width="100%" align="center" id="customers" >
	<tr bgcolor="grey">
		<th>Username</th>
		<th>Produc Code</th>
		<th>Message</th>
		<th>Product name</th>
	</tr>
		<?php
			$conn=mysqli_connect("localhost","root","","kings");
			$sql="SELECT * FROM review";
			echo '<div class="rev_mid">';
		  	$result=mysqli_query($conn,$sql);
		   	if(mysqli_num_rows($result)>0)
	        {
	           while($row=mysqli_fetch_assoc($result))
				{
					echo "<tr>";
			   		echo "<td>".$row['user_name']."</td><td>".$row['p_id']."</td><td>".$row['message']."</td><td>".$row['p_name']."</td>";
			   		//echo"<a href='delete.php?id=$pass'><i class='fa fa-trash' style='font-size: 2em;'>Del</i></a>";	   		   
			   		echo "</tr>";	
				}
			}
		 
		?>
	</table>

</body>
</html>	