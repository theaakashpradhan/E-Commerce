 <?php
	include "top.php";
?> 
   <html>
   <head>
	<title>Kings Space</title>
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
							    background-color: #0A2558;
							    color: white;
							}
   </style>
  </head>
   <body >
   	      <br><br><br><br>
	      <div class="wwe">
               <div class="qwe">
 <font face="Maiandra GD">  	
	   <?php
	        
		 
	       $conn=mysqli_connect("localhost","root","","kings");
		  $sql="SELECT * FROM user";
		  $result=mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result)>0)
		  { 
	       ?>
	     
	<section>
	  
	  <div class="tbl-header">
	 
			                   <center><b><h3>OUR USERS</h3></b></center><hr><hr><hr><hr><hr>
                       <table border="0" width="100%" align="center" id="customers" >
	      <thead>
	        <tr bgcolor="grey">
	         
	          <th>Name</th>
	        
	          <th>Address</th>
	          <th>Mobile no.</th>
	          
			  <th>Email</th>
			 
	        </tr>
	      </thead>
	    
	  </div>
	  <div class="">
	   
	    <?php
		    while($row=mysqli_fetch_assoc($result))
			 { 
			   	echo "<tr>";
			   echo "<td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['mobile']."</td>";
			   echo "<td>".$row['email']."</td>";
			   
			   echo "</tr>";	
		
			  }
			 /* while($row = mysqli_fetch_row($result))
	           {
	               echo "<tr>";


	             foreach($row as $cell)
	             echo "<td>$cell</td>";
		        
				echo "</tr>\n";
			   }*/
		   }?>
		   
	    </table>
	  </div>
	  </section>
	 </font>
	  </body>
	  </html>
     