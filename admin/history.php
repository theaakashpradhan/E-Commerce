<?php
include'top.php';
 $conn=mysqli_connect("localhost","root","","kings");
		  $sql="SELECT * FROM history";
		  $result=mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result)>0)
		  { 
?>
<html>
<head>
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
	              
	                   <center><b><h3>ALL ORDER LIST </h3></b></center><hr><hr><hr><hr><hr>
                       <table border="0" width="100%" align="center" id="customers" >
	                       <tr bgcolor="grey">
								<th>Code</th>
								<th>Product Name</th>
								<th>Quantity</th>
								<th>Size</th>
								<th>Price</th>
								<th>Phone</th>
								<th>User Name</th>
								<th><a href="adminindex.php">Go Back</a></th>
						   </tr>
	        <?php
		        while($row=mysqli_fetch_assoc($result))
			       { 
					   echo "<tr>";
					   echo "<td>".$row['code']."</td><td>".$row['product_name']."</td><td>".$row['quantity']."</td>";
					   echo "<td>".$row['size']."</td><td>".$row['price']."</td><td>".$row['phone']."</td>";
					   echo "<td colspan='2'>".$row['user_name']."</td>";
					   echo "</tr>";		
			       }
			
		           }
	        ?>

                       </table>
          </div>
    </body>
</html>