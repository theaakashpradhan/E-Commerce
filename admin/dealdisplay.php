<?php
   include 'top.php';
?> 
<html>
   <head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  background-color: #0A2558;
  color: white;
}
   </style>
  </head>
   <body >
 <font face="Maiandra GD">  	
	   <?php
	        
		  
	       $conn=mysqli_connect("localhost","root","","kings");
		  $sql="SELECT * FROM discountproduct";
		  $result=mysqli_query($conn,$sql);
		  if(mysqli_num_rows($result)>0)
		  { 
	       ?>
	<section>
	  
	  <div class="tbl-header"><br><br><br><br>
	  	<div class="wwe">

	  <div class="qwe">
	  	<center><b><h3>ADD TO DISCOUNT</h3></b></center><hr><hr><hr><hr><hr>
	    <table  border="0px"  width="100%">
	      <thead>
	        <tr>
	          <th>Code</th>
	          <th>Name</th>
	          <th>Brand</th>
	          <th>Fabric</th>
	          <th>Size</th>
			  <th>Price</th>
			  <th>Fashion</th>
			  <th>Category</th>
			   <th>Discount</th>
			   <th colspan="2">Status</th>
	        </tr>
	      </thead>
	
	  </div>
	  <div class="tbl-content">
	    <!-- <table cellpadding="0" cellspacing="0" border="0"> -->
	    <?php
		    while($row=mysqli_fetch_assoc($result))
			 { 
			   	echo "<tr>";
			   echo "<td>".$row['code']."</td><td>".$row['name']."</td><td>".$row['brand']."</td>";
			   echo "<td>".$row['fabric']."</td><td>".$row['size']."</td><td>".$row['price']."</td>";
			   $pass=$row['code'];
			   echo "<td>".$row['fashion']."</td><td>".$row['category']."</td><td>".$row['discount']."</td>
			   <td><a href='deletedeal.php?id=$pass'><i class='fa fa-trash' style='font-size: 21px;'>Del</i></a>"."</td>";
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
</div>
</div>
	  </section>
	 </font>
	  </body>
	  </html>
     