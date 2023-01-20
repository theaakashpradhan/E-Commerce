<?php
   include 'top.php';
?>  
   <html>
     <head>
	    <title>Kings Space</title>
			<style type="text/css">
		        #customers {
					  font-family: Arial, Helvetica, sans-serif;
					  border-collapse: collapse;
					  width: 100%;
				}

                #customers td, #customers th {
					  border: 1px solid #ddd;
					  padding: 8px;
			    }

				#customers tr:nth-child(even){background-color: #f2f2f2;}

				#customers tr:hover {background-color: #ddd;}

				#customers th {
				       padding-top: 12px;
				       padding-bottom: 12px;
				       text-align: left;
				       background-color: #0A2558;
				       color: white;
				}
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
            <body >
				 <font face="Maiandra GD"> 
				     <section><br><br><br><br>
					   <div class="wwe">
                         <div class="qwe">
					     <div class="tbl-header">
					      <center><b><h3> ORDERS</h3></b></center>	<hr><hr><hr><hr><hr>	
					      <table cellpadding="0" cellspacing="0" border="0" width="100%" >
					        <thead>
					           <tr bgcolor="grey">
					            <b>
					             <th>Code</th>
					             <th>Product Name</th>	     
					             <th>Qty</th>	         
					             <th>Size</th>	     
					             <th>Price</th>
							 	 <th>Phone no.</th>			
							  	 <th id="e">User Name</th>
							 	 <th id='u'>Email</th>
							 	 </b> 
					            </tr>
					       </thead> 	
							           <?php
							              $conn=mysqli_connect("localhost","root","","kings");
								          $sql="SELECT * FROM history";
								          $result=mysqli_query($conn,$sql);
								          if(mysqli_num_rows($result)>0)
								          { 
							           ?>
					
					    
					    </div>
					    <div class="tbl-content">
					    			   <?php
										    while($row=mysqli_fetch_assoc($result))
											  { 
											   echo "<tr>";
											   echo "<td>".$row['code']."</td><td>".$row['product_name']."</td><td>".$row['quantity']."</td>";
											   echo "<td>".$row['size']."</td><td>".$row['price']."</td><td>".$row['phone']."</td>";
											   $pass=$row['code'];
											   $ph=$row['phone'];
											   echo "<td>".$row['user_name']."</td><td>".$row['email'];
											   
											   echo "</tr>";	
										
											  }
											
						                }?>
						   
					      </table>
					    </div>
				     </section>
				 </font>
			</body>
   </html>
