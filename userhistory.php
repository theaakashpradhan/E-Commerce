<html>
<body>
<?php
   include 'top.php';
   $conn = mysqli_connect("localhost","root","","kings");
   if (!$conn)
   {
    die("Connection failed: " . mysqli_connect_error());
    } 

  if(isset($_POST['submit']))
{
  
  $user=$_POST['username'];
  $sql= "SELECT * FROM history WHERE name='$user'";
  $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
      { 
        while($row=mysqli_fetch_assoc($result))
       { 
          echo "<tr>";
         echo "<td>".$row['code']."</td><td>".$row['product_name']."</td><td>".$row['quantity']."</td>";
         echo "<td>".$row['size']."</td><td>".$row['price']."</td><td>".$row['phone']."</td>";
         $pass=$row['code'];
         $ph=$row['phone'];
         echo "<td>".$row['user_name']."</td><td>".$row['email'];
         //echo "<td><a href='orderdel.php?id=$pass'>delivered</a></td>";
                 
         echo "</tr>";  
    
        }
      
       }
}
?>
</body>
</html>