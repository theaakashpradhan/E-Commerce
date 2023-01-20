<?php
   include 'top.php';
?> 
<html>
   <head>
	  <link rel="stylesheet" type="text/css" href="qwerty.css">
	   <style>
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
							    background-color:#0A2558;
							    color: white;
							}

       </style>
  </head>
<body >
	                   
    <font face="Maiandra GD">  	
	   <?php
	        
	      $conn=mysqli_connect("localhost","root","","kings");
		  $sql="SELECT * FROM clothes";
		  $result=mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result)>0)
		  { 
	   ?>
	<section>
	  
	  <div class="tbl-header"> <br><br><br><br>
	     <div class="wwe">
            <div class="qwe">
               <center><b><h3>MANAGE ALL YOUR ITEMS</h3></b></center><hr><hr><hr><hr><hr>
               <table cellpadding="0" cellspacing="0" border="0" width="100%" >
	               <thead>
	                   <tr bgcolor="grey">
				          <th>Code</th>
				          <th>Name</th>
				          <th>Brand</th>
				          <th>Fabric</th>
				          <th>Size</th>
						  <th>Price</th>
						  
						  <th>Category</th>
						  <th colspan="3">Status</th>
	                  </tr>
	              </thead>
	    
	        </div>
	        <div class="tbl-content">
	   
	        <?php

		      while($row=mysqli_fetch_assoc($result))
			      { 
					   echo "<tr>";
					   echo "<td>".$row['code']."</td><td>".$row['name']."</td><td>".$row['brand']."</td>";
					   echo "<td>".$row['fabric']."</td><td>".$row['size']."</td><td>".$row['price']."</td>";
					   $pass=$row['code'];
					   echo "<td>".$row['category']."</td><td>"."<a href='delete.php?id=$pass'><b class='fa fa-trash' style='font-size: 20px;'>Del</b></a>"."</td>";
					   echo "<td><a href='edit.php?id=$pass'><b class='fa fa-edit' style='font-size: 20px;'>Edit</b></a></td>";
					   echo "<td><a href='deal.php?id=$pass'><p style='color:blue;'>Add to Discount</p></a></td>";
					   echo "</tr>";	
		
			      }
			  }
		   ?>
		   
		   </table>
	</div>
</div>
</div>
	  </section>
	 </font>
	  </body>
	  </html>
     